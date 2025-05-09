<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-24 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:05:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:21:50 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:56:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 00:58:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 01:22:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 01:26:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 01:48:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 02:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 02:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 02:05:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 02:25:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 02:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 02:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 02:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 02:37:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 02:43:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:04:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:27:37 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-24 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:31:58 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:31:59 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:38:53 --> Could not find the language line "Home"
ERROR - 2023-04-24 03:52:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 04:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 04:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:19:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 04:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 04:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 04:47:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 04:57:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 05:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:08:35 --> Could not find the language line "Home"
ERROR - 2023-04-24 05:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:12:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 05:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:13:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:14:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 05:25:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 05:26:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 05:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:44:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:44:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:45:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:45:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:46:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 05:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 05:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:11:44 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:22:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 06:26:57 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:28:36 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:30:38 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:48:09 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 06:57:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 06:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:11:31 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:12:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:12:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:20:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:21:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 07:21:38 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:23:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 07:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 07:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 07:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 07:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 07:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:48:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 07:48:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:48:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 07:48:31 --> Could not find the language line "Home"
ERROR - 2023-04-24 07:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:48:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 07:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:49:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 07:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:49:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 07:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 07:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 07:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 07:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 07:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 07:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 07:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:00:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:01:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:03:41 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:04:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:05:45 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:05:47 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 08:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 08:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 08:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:06:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 08:06:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-24 08:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:08:28 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:10:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:10:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:11:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:19:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:19:31 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:19:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-24 08:19:33 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-24 08:19:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-24 08:19:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-24 08:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:20:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:23:41 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:24:42 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 08:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:25:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 08:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 08:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 08:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 08:25:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 08:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:38:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:40:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 08:40:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:40:41 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 08:41:23 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 08:41:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 08:42:31 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 08:42:56 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 08:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:44:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:46:38 --> Could not find the language line "Other"
ERROR - 2023-04-24 08:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:51:44 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:53:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:55:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:55:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 08:57:06 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:58:09 --> Could not find the language line "Home"
ERROR - 2023-04-24 08:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:07:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:11:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:11:22 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 09:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:11:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:11:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 09:11:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:11:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:12:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 09:12:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 09:12:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 09:12:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:22:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:24:16 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:24:55 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:29:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:30:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:38:28 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:38:41 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:46:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:46:53 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-24 09:46:54 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-04-24 09:46:55 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-04-24 09:46:56 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-04-24 09:50:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 09:50:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 09:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:53:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:56:59 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:57:08 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:58:23 --> Could not find the language line "Home"
ERROR - 2023-04-24 09:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 09:59:15 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:06:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:07:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:08:05 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:08:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:08:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:09:39 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:14:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:16:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:20:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:20:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:20:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:26:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:29:58 --> Could not find the language line "Socks"
ERROR - 2023-04-24 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 10:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 10:31:39 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:31:41 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:35:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:35:39 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:39:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:49:16 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:49:23 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:49:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:49:47 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:50:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:50:51 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:50:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:51:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 10:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:51:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:51:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:51:55 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 10:52:08 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:52:21 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 10:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:52:31 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 10:52:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 10:52:54 --> Could not find the language line "Home"
ERROR - 2023-04-24 10:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:57:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:57:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 10:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:57:49 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 10:57:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 10:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:58:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 10:58:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 10:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:58:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 10:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 10:59:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:01:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:01:46 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:01:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:01:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:01:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:01:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 11:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:02:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 11:02:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 11:02:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 11:02:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 11:02:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-24 11:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 11:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 11:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 11:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 11:02:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-24 11:03:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:03:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:03:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:04:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:04:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 11:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:06:59 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:13:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 11:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:13:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 11:14:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 11:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 11:16:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 11:16:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 11:16:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 11:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:31:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:32:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:38:31 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:42:17 --> Could not find the language line "Home"
ERROR - 2023-04-24 11:46:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:10:56 --> Could not find the language line "assets"
ERROR - 2023-04-24 12:10:56 --> Could not find the language line "assets"
ERROR - 2023-04-24 12:10:56 --> Could not find the language line "assets"
ERROR - 2023-04-24 12:10:56 --> Could not find the language line "assets"
ERROR - 2023-04-24 12:10:56 --> Could not find the language line "assets"
ERROR - 2023-04-24 12:12:01 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:12:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:15:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:19:40 --> Could not find the language line "accounting"
ERROR - 2023-04-24 12:19:40 --> Could not find the language line "accounting"
ERROR - 2023-04-24 12:19:41 --> Could not find the language line "accounting"
ERROR - 2023-04-24 12:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:19:41 --> Could not find the language line "accounting"
ERROR - 2023-04-24 12:19:41 --> Could not find the language line "accounting"
ERROR - 2023-04-24 12:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:31:40 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:35:44 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:41:01 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:48:39 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:49:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:49:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:51:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:52:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:52:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:53:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:53:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:53:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:53:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:53:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 12:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:55:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:56:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 12:57:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:57:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 12:59:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 12:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:07:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:08:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 13:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:15:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:15:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 13:21:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:21:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:21:48 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:23:38 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:23:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:25:36 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 13:25:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 13:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 13:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:33:09 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:33:41 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:39:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 13:39:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:49:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:51:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:54:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 13:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:58:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 13:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 13:59:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:05:35 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:06:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:07:47 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:07:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 14:07:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 14:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:09:47 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:11:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:14:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:15:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:15:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:16:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:17:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:17:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:17:45 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 14:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:18:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:20:34 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:35:17 --> Could not find the language line "Other"
ERROR - 2023-04-24 14:36:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 14:37:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:39:48 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:44:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:44:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:50:32 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:50:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:51:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:51:17 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 14:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:51:35 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 14:51:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:51:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:52:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:52:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:53:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:53:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 14:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:54:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:54:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 14:55:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:56:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:56:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:56:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:56:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:56:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:56:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 14:56:46 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:57:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 14:57:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 14:57:51 --> Could not find the language line "Home"
ERROR - 2023-04-24 14:57:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 14:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 14:58:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:00:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 15:07:51 --> Could not find the language line "accounting"
ERROR - 2023-04-24 15:07:51 --> Could not find the language line "accounting"
ERROR - 2023-04-24 15:07:52 --> Could not find the language line "accounting"
ERROR - 2023-04-24 15:07:52 --> Could not find the language line "accounting"
ERROR - 2023-04-24 15:07:52 --> Could not find the language line "accounting"
ERROR - 2023-04-24 15:14:45 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:15:18 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:34:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 15:34:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:34:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:34:45 --> Could not find the language line "Bracelets"
ERROR - 2023-04-24 15:35:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:35:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:35:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:35:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 15:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 15:40:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-24 15:53:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 16:15:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:15:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 16:16:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 16:20:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 16:22:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:23:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:23:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:29:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:32:35 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:32:53 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:33:16 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:35:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 16:35:38 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:37:18 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:53:22 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:54:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 16:55:16 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-04-24 16:55:23 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-04-24 16:55:47 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-04-24 16:55:56 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-04-24 16:56:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 16:59:50 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:04:00 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 17:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 17:20:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:22:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:31:38 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:47:00 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 17:50:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:56:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 17:59:03 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:05:54 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:15:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:17:36 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:20:44 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:23:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:25:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:28:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:29:19 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:30:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:30:30 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-24 18:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:31:30 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:51:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 18:57:56 --> Could not find the language line "Home"
ERROR - 2023-04-24 18:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:01:39 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:02:25 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 19:19:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:35:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 19:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 19:35:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 19:35:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 19:36:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 19:36:07 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 19:37:50 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:42:48 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:45:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:47:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 19:49:20 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:51:37 --> Could not find the language line "Home"
ERROR - 2023-04-24 19:54:02 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:01:18 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:03:09 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:06:33 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:06:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:06:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:07:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:07:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:13:01 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:14:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:14:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:14:45 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:14:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:14:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 20:16:40 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:17:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:23:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 20:23:52 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:24:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 20:24:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:25:01 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 20:25:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:34:08 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:35:15 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:35:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 20:35:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-24 20:36:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:37:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 20:37:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:37:34 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:45:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:48:29 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:05 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:22 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:48 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:49:57 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:50:08 --> Could not find the language line "Home"
ERROR - 2023-04-24 20:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-24 20:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 20:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:15:56 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:17:36 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:18:16 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:18:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:19:14 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:21:26 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:21:44 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:43:35 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:54:12 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-24 21:55:04 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:56:00 --> Could not find the language line "Home"
ERROR - 2023-04-24 21:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 21:58:00 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:13:21 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:15:49 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 22:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-24 22:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 22:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 22:36:40 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:37:45 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:37:46 --> Could not find the language line "Home"
ERROR - 2023-04-24 22:42:19 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:17:43 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 23:19:12 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:19:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:19:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:19:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:19:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:19:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:19:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:20:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:20:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:20:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:20:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:20:15 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:20:18 --> Could not find the language line "Perfume"
ERROR - 2023-04-24 23:20:22 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:20:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:20:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-24 23:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-24 23:21:10 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:22:03 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:22:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-24 23:22:24 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:22:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:22:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-24 23:22:40 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:23:00 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-24 23:32:07 --> 404 Page Not Found: Robotstxt/index
