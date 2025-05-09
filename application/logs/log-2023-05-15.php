<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-15 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 00:00:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 00:24:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-15 00:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 00:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:01:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-15 01:19:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-15 01:26:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:27:31 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:44:27 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:51:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:51:56 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:58:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 01:58:45 --> Could not find the language line "Home"
ERROR - 2023-05-15 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 03:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 03:31:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 03:48:52 --> Could not find the language line "Home"
ERROR - 2023-05-15 03:51:26 --> Could not find the language line "Home"
ERROR - 2023-05-15 03:51:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 03:51:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 03:52:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 04:30:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 04:46:57 --> Could not find the language line "Home"
ERROR - 2023-05-15 04:51:19 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:03:23 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:06:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 05:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 05:41:53 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 05:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 05:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 05:43:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 05:48:29 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:49:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 05:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-15 06:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:07:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 06:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:19:04 --> Could not find the language line "Home"
ERROR - 2023-05-15 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 06:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:37:30 --> Could not find the language line "Home"
ERROR - 2023-05-15 06:38:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 06:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 06:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 06:44:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 06:49:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 06:49:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 06:49:04 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:02:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 07:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:14:22 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:15:00 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:15:05 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:17:27 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:24:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:25:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:27:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:27:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:30:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 07:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:50:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 07:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 07:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:52:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:53:33 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:56:01 --> Could not find the language line "Home"
ERROR - 2023-05-15 07:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 07:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:23:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:25:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-15 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:32:51 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:33:47 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:35:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:35:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:43:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 08:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:43:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 08:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:44:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 08:44:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 08:44:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 08:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:44:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 08:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 08:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 08:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:06:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 09:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:26:43 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-15 09:26:43 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-15 09:26:43 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-15 09:26:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-15 09:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:30:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:30:16 --> Could not find the language line "magic_boxes"
ERROR - 2023-05-15 09:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:31:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:31:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:32:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:32:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:32:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:34:56 --> Could not find the language line "Stock_clearance"
ERROR - 2023-05-15 09:40:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:40:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:40:24 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:52:51 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:54:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 09:55:49 --> Could not find the language line "Home"
ERROR - 2023-05-15 09:59:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 09:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:05:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:17:17 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:18:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:19:34 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:19:34 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:20:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:20:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:21:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:22:51 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:22:57 --> Could not find the language line "Bracelets"
ERROR - 2023-05-15 10:23:19 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:24:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:24:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:24:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:24:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:24:55 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:25:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 10:25:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 10:25:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-15 10:25:49 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:25:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:26:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:26:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:26:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:27:20 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:27:26 --> Could not find the language line "Perfume"
ERROR - 2023-05-15 10:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:27:37 --> Could not find the language line "Perfume"
ERROR - 2023-05-15 10:27:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:27:48 --> Could not find the language line "Socks"
ERROR - 2023-05-15 10:28:05 --> Could not find the language line "clothing"
ERROR - 2023-05-15 10:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:29:12 --> Could not find the language line "Socks"
ERROR - 2023-05-15 10:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:29:20 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:29:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 10:29:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 10:29:37 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:29:58 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:31:37 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:31:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:31:54 --> Could not find the language line "Home"
ERROR - 2023-05-15 10:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:32:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 10:34:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 10:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 10:38:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 10:38:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 10:38:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 10:38:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-15 10:44:53 --> 404 Page Not Found: Assets/js
ERROR - 2023-05-15 10:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 11:31:54 --> Could not find the language line "Home"
ERROR - 2023-05-15 11:53:44 --> Could not find the language line "Home"
ERROR - 2023-05-15 11:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 11:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 11:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:14:43 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:25:25 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:26:25 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:29:06 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:29:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:34:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:35:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:35:46 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:37:57 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:28 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:39:35 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:39:44 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:45 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-05-15 12:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:42:17 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 12:42:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 12:42:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 12:43:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 12:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:46:15 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:46:18 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:46:22 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:46:47 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:48:56 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:51:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 12:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:57:26 --> Could not find the language line "Home"
ERROR - 2023-05-15 12:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 12:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:08:48 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:09:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:09:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 13:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:10:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:10:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:12:18 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 13:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:16:22 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:19:20 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:30:04 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:32:16 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:32:16 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-15 13:32:16 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-15 13:32:17 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-15 13:32:17 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-15 13:32:18 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-15 13:32:19 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-15 13:33:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:33:48 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:36:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 13:36:48 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:38:25 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:38:42 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:38:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:40:42 --> Could not find the language line "Socks"
ERROR - 2023-05-15 13:41:01 --> Could not find the language line "Socks"
ERROR - 2023-05-15 13:41:09 --> Could not find the language line "Socks"
ERROR - 2023-05-15 13:42:35 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-05-15 13:42:37 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-05-15 13:51:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:54:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 13:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 13:59:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:05:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:05:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:05:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:06:12 --> Could not find the language line "Perfume"
ERROR - 2023-05-15 14:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:15:44 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:24:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 14:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:36:57 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:52:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 14:53:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 14:57:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:04:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:04:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:13:27 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:13:42 --> Could not find the language line "Bracelets"
ERROR - 2023-05-15 15:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:14:41 --> Could not find the language line "Bracelets"
ERROR - 2023-05-15 15:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:15:14 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:15:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-15 15:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:16:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-15 15:16:53 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:20:26 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:20:54 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:21:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:21:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:21:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:21:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:23:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:23:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:24:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:24:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:24:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:27:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:28:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 15:28:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:28:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 15:29:21 --> Could not find the language line "Bracelets"
ERROR - 2023-05-15 15:29:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:34:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 15:34:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 15:34:26 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:51:05 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:51:42 --> Could not find the language line "Home"
ERROR - 2023-05-15 15:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:05:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:05:57 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:06:23 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:11:56 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:12:31 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:12:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:13:18 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:13:19 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:13:23 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:19:17 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:20:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 16:21:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 16:22:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:27:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 16:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:32:18 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:34:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:35:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:52:17 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:52:35 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:52:44 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:54:30 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:54:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 16:58:15 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:58:20 --> Could not find the language line "Home"
ERROR - 2023-05-15 16:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:00:42 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:01:29 --> Could not find the language line "Socks"
ERROR - 2023-05-15 17:01:43 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 17:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:03:38 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:04:16 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:20:59 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:21:43 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:31:29 --> Could not find the language line "Home"
ERROR - 2023-05-15 17:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 17:59:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:01:21 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:01:27 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:02:22 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:02:34 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:02:47 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 18:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:03:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 18:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:05:33 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:08:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-15 18:10:19 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:15:31 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:15:52 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:45:29 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 18:48:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:49:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:51:52 --> Could not find the language line "Home"
ERROR - 2023-05-15 18:59:04 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:10:45 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:13:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 19:13:36 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:16:09 --> Could not find the language line "Home"
ERROR - 2023-05-15 19:19:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 19:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:12:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 20:12:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 20:12:05 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-15 20:12:08 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-15 20:12:15 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-15 20:12:21 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-15 20:12:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 20:12:25 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:13:03 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-15 20:13:08 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:13:19 --> Could not find the language line "Bracelets"
ERROR - 2023-05-15 20:13:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:13:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:14:02 --> Could not find the language line "Other"
ERROR - 2023-05-15 20:14:05 --> Could not find the language line "Other"
ERROR - 2023-05-15 20:14:07 --> Could not find the language line "Other"
ERROR - 2023-05-15 20:14:12 --> Could not find the language line "Other"
ERROR - 2023-05-15 20:14:15 --> Could not find the language line "Perfume"
ERROR - 2023-05-15 20:14:33 --> Could not find the language line "Socks"
ERROR - 2023-05-15 20:14:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-15 20:14:37 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:15:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 20:15:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 20:21:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-15 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:31:39 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:31:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-15 20:32:45 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 20:34:30 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:34:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 20:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 20:45:40 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:47:56 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:48:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-15 20:49:27 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 20:51:07 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:51:41 --> Could not find the language line "Home"
ERROR - 2023-05-15 20:51:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 20:51:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:52:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:53:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:53:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-15 20:53:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:53:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:53:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:53:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-15 20:55:02 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 21:06:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:06:35 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:13:28 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 21:19:03 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:19:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 21:19:32 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:31:19 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 21:31:50 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 21:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-15 21:34:30 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:44:47 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:45:22 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:45:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 21:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-15 21:45:42 --> Could not find the language line "Home"
ERROR - 2023-05-15 21:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 22:12:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 22:12:59 --> Could not find the language line "Home"
ERROR - 2023-05-15 22:19:59 --> Could not find the language line "Home"
ERROR - 2023-05-15 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 22:38:58 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-15 22:45:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 22:50:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-15 22:54:18 --> Could not find the language line "Home"
ERROR - 2023-05-15 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-15 23:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-15 23:16:50 --> 404 Page Not Found: Blog/wp-json
ERROR - 2023-05-15 23:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-15 23:55:15 --> Could not find the language line "Home"
