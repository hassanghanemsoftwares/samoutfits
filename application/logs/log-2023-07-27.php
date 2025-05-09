<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-27 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 00:18:48 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:18:54 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:19:02 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 00:19:31 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 00:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 00:20:39 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 00:20:40 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 00:22:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:23:00 --> Could not find the language line "Perfume"
ERROR - 2023-07-27 00:23:07 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:23:34 --> Could not find the language line "Socks"
ERROR - 2023-07-27 00:23:44 --> Could not find the language line "Socks"
ERROR - 2023-07-27 00:23:52 --> Could not find the language line "Socks"
ERROR - 2023-07-27 00:23:55 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:25:52 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:26:03 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 00:26:04 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:34:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-27 00:37:59 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:37:59 --> Could not find the language line "Home"
ERROR - 2023-07-27 00:59:58 --> Could not find the language line "products"
ERROR - 2023-07-27 01:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-27 01:05:34 --> Could not find the language line "products"
ERROR - 2023-07-27 01:21:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-27 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 01:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 01:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 01:32:04 --> Could not find the language line "Home"
ERROR - 2023-07-27 01:43:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 02:00:21 --> Could not find the language line "products"
ERROR - 2023-07-27 02:04:16 --> Could not find the language line "products"
ERROR - 2023-07-27 02:14:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-27 02:47:18 --> Could not find the language line "products"
ERROR - 2023-07-27 02:51:13 --> Could not find the language line "products"
ERROR - 2023-07-27 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 03:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-27 03:43:56 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:00:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 04:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:12:12 --> Could not find the language line "products"
ERROR - 2023-07-27 04:15:39 --> Could not find the language line "products"
ERROR - 2023-07-27 04:18:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:18:36 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:18:51 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:19:10 --> Could not find the language line "Socks"
ERROR - 2023-07-27 04:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 04:19:30 --> Could not find the language line "Socks"
ERROR - 2023-07-27 04:19:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:21:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 05:23:21 --> Could not find the language line "Home"
ERROR - 2023-07-27 05:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:25:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 05:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:29:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:29:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:29:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 05:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 05:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 05:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 05:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 05:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 05:29:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 05:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 05:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 05:29:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 05:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 05:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:30:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:30:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:50:27 --> Could not find the language line "Home"
ERROR - 2023-07-27 05:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:51:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:52:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:53:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:53:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:54:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 05:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:54:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 05:59:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 05:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:00:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 06:00:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 06:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:02:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 06:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:05:04 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:10:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 06:12:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 06:12:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 06:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:17:47 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:21:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 06:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:22:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 06:22:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 06:22:31 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:22:38 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:22:39 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-27 06:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:24:48 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:29:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 06:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:38:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 06:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 06:39:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 06:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 06:39:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 06:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 06:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:44:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 06:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:49:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 06:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:53:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:53:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:55:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:55:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:55:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 06:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 06:58:27 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-27 06:58:29 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-27 06:58:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 06:58:32 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-27 07:00:34 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:01:25 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:03:58 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:03:59 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:04:19 --> Could not find the language line "products"
ERROR - 2023-07-27 07:04:27 --> Could not find the language line "products"
ERROR - 2023-07-27 07:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:06:20 --> Could not find the language line "products"
ERROR - 2023-07-27 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 07:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:13:50 --> Could not find the language line "products"
ERROR - 2023-07-27 07:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:16:05 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:17:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-27 07:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:24:36 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:27:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 07:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:28:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 07:29:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 07:29:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:31:37 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:33:05 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:48:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 07:49:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 07:49:24 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-07-27 07:49:25 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-07-27 07:49:27 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:52:34 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:35 --> 404 Page Not Found: Produc/index
ERROR - 2023-07-27 07:52:35 --> 404 Page Not Found: Pr/index
ERROR - 2023-07-27 07:52:36 --> 404 Page Not Found: Produc/index
ERROR - 2023-07-27 07:52:36 --> 404 Page Not Found: Produ/index
ERROR - 2023-07-27 07:52:36 --> 404 Page Not Found: Pr/index
ERROR - 2023-07-27 07:52:36 --> 404 Page Not Found: P/index
ERROR - 2023-07-27 07:52:36 --> 404 Page Not Found: Products/index
ERROR - 2023-07-27 07:52:37 --> 404 Page Not Found: P/index
ERROR - 2023-07-27 07:52:37 --> 404 Page Not Found: Product/index
ERROR - 2023-07-27 07:52:37 --> 404 Page Not Found: P/index
ERROR - 2023-07-27 07:52:37 --> Severity: error --> Exception: Too few arguments to function Products::view(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/samfit/public_html/application/controllers/Products.php 21
ERROR - 2023-07-27 07:52:37 --> 404 Page Not Found: Pr/index
ERROR - 2023-07-27 07:52:38 --> 404 Page Not Found: Produc/index
ERROR - 2023-07-27 07:52:39 --> 404 Page Not Found: Prod/index
ERROR - 2023-07-27 07:52:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:39 --> 404 Page Not Found: Products/v
ERROR - 2023-07-27 07:52:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:40 --> 404 Page Not Found: Produ/index
ERROR - 2023-07-27 07:52:43 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:45 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:52:47 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:55:51 --> Could not find the language line "Home"
ERROR - 2023-07-27 07:57:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 07:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 07:58:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 07:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 07:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:00:45 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:02:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:02:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:02:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:02:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 08:03:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 08:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:04:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 08:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 08:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:04:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:06:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:07:24 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:08:05 --> Could not find the language line "Other"
ERROR - 2023-07-27 08:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:08:34 --> Could not find the language line "Socks"
ERROR - 2023-07-27 08:08:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:08:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:08:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:11:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 08:11:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:13:27 --> Could not find the language line "Perfume"
ERROR - 2023-07-27 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:21:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:21:40 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:25:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 08:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:27:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 08:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 08:28:55 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:36:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 08:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:41:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 08:41:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 08:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:50:52 --> Could not find the language line "Home"
ERROR - 2023-07-27 08:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 08:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 08:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:00:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-27 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:11:05 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:13:22 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:14:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 09:14:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-27 09:14:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-27 09:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:19:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:20:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 136
ERROR - 2023-07-27 09:20:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%798%' OR a.description LIKE '%798%' OR a.color LIKE '%798%' OR a.barcode LIKE '%798%' OR a.category LIKE '%798%' OR a.sub_category LIKE '%798%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 09:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:21:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:23:08 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:23:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 09:23:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 09:23:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 09:23:10 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-27 09:23:10 --> 404 Page Not Found: Home/home
ERROR - 2023-07-27 09:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:27:06 --> 404 Page Not Found: Assets/plugins
ERROR - 2023-07-27 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:32:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 09:32:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:34:23 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:34:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:37:48 --> Could not find the language line "Home"
ERROR - 2023-07-27 09:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 09:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:39:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 09:39:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '31'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 09:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-27 09:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:47:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-27 09:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 09:56:58 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:02:17 --> Could not find the language line "products"
ERROR - 2023-07-27 10:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:10:13 --> Could not find the language line "products"
ERROR - 2023-07-27 10:15:31 --> Could not find the language line "products"
ERROR - 2023-07-27 10:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:19:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:20:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:20:48 --> Could not find the language line "products"
ERROR - 2023-07-27 10:20:52 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:22:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:23:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:24:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:24:49 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 10:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:28:45 --> Could not find the language line "products"
ERROR - 2023-07-27 10:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:31:24 --> Could not find the language line "products"
ERROR - 2023-07-27 10:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:34:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 10:34:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 10:34:45 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:34:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 10:35:09 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:35:50 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:36:14 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 10:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:36:21 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 10:36:22 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:36:27 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:36:41 --> Could not find the language line "products"
ERROR - 2023-07-27 10:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:43:06 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:43:07 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:43:07 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:44:39 --> Could not find the language line "products"
ERROR - 2023-07-27 10:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:50:56 --> Could not find the language line "assets"
ERROR - 2023-07-27 10:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:51:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:56:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 10:56:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 10:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:58:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 136
ERROR - 2023-07-27 10:58:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%730%' OR a.description LIKE '%730%' OR a.color LIKE '%730%' OR a.barcode LIKE '%730%' OR a.category LIKE '%730%' OR a.sub_category LIKE '%730%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 10:58:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:58:51 --> Could not find the language line "Home"
ERROR - 2023-07-27 10:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 10:59:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 136
ERROR - 2023-07-27 10:59:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%735%' OR a.description LIKE '%735%' OR a.color LIKE '%735%' OR a.barcode LIKE '%735%' OR a.category LIKE '%735%' OR a.sub_category LIKE '%735%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:00:31 --> Could not find the language line "products"
ERROR - 2023-07-27 11:02:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:02:48 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:08:27 --> Could not find the language line "products"
ERROR - 2023-07-27 11:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:30:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-27 11:53:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:55:16 --> Could not find the language line "Home"
ERROR - 2023-07-27 11:55:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:56:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:56:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:57:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:57:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:57:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:57:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:58:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:58:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 11:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 11:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:00:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:01:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:02:00 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:02:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:02:58 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 12:03:37 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:04:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:07:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:08:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:09:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:11:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:11:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:11:17 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:11:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:21:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:21:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 12:23:49 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:23:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:24:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:24:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 12:24:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 12:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 12:35:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:35:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 12:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:39:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:39:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 12:40:10 --> Could not find the language line "Home"
ERROR - 2023-07-27 12:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:57:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 12:57:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 12:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 12:59:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:09:10 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:11:59 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 13:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 13:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:34:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:36:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:36:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:36:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:36:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:36:45 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-27 13:36:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:42:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 13:42:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 13:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:44:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 13:44:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-27 13:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 13:51:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:51:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 13:51:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-27 13:51:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-27 13:55:37 --> Could not find the language line "Home"
ERROR - 2023-07-27 13:59:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:07:26 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:07:31 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:09:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:09:51 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:10:15 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:11:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:11:53 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:11:59 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:12:03 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:12:07 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:12:53 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:13:32 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:13:51 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:13:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:14:16 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:14:29 --> Could not find the language line "Bracelets"
ERROR - 2023-07-27 14:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:30:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:30:42 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:33:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-27 14:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:35:03 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:35:05 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:35:24 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:35:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:35:47 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:39:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:40:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:40:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:41:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 14:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:42:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:43:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:43:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:44:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:44:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:44:19 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-27 14:44:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-27 14:44:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-27 14:44:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-27 14:44:53 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:48:52 --> Could not find the language line "Socks"
ERROR - 2023-07-27 14:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:51:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:51:06 --> Could not find the language line "assets"
ERROR - 2023-07-27 14:51:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 14:55:58 --> Could not find the language line "Home"
ERROR - 2023-07-27 14:59:53 --> Could not find the language line "products"
ERROR - 2023-07-27 15:00:08 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:01:16 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:02:19 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:07:19 --> Could not find the language line "products"
ERROR - 2023-07-27 15:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:20:40 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:20:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:25:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:29:49 --> Could not find the language line "products"
ERROR - 2023-07-27 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:31:39 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:34:40 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 15:41:08 --> Could not find the language line "Home"
ERROR - 2023-07-27 15:56:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 15:59:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 15:59:52 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-27 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 16:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 16:00:25 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-27 16:00:29 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-27 16:00:37 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-27 16:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 16:06:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 16:10:22 --> Could not find the language line "Home"
ERROR - 2023-07-27 16:11:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 16:11:58 --> Could not find the language line "Other"
ERROR - 2023-07-27 16:12:01 --> Could not find the language line "Other"
ERROR - 2023-07-27 16:24:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 16:24:35 --> Could not find the language line "Home"
ERROR - 2023-07-27 16:27:41 --> Could not find the language line "products"
ERROR - 2023-07-27 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-27 16:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 16:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 16:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 16:47:38 --> Could not find the language line "Other"
ERROR - 2023-07-27 16:51:21 --> Could not find the language line "Home"
ERROR - 2023-07-27 16:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-27 17:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 17:22:51 --> Could not find the language line "Home"
ERROR - 2023-07-27 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 17:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 17:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 17:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 17:58:29 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:01:17 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-27 18:08:44 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:09:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 18:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 18:10:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 18:10:32 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:10:47 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:12:04 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:13:23 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 18:14:11 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 18:14:55 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:27:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-27 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:32:53 --> Could not find the language line "Home"
ERROR - 2023-07-27 18:33:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 18:40:02 --> Could not find the language line "products"
ERROR - 2023-07-27 18:47:27 --> Could not find the language line "products"
ERROR - 2023-07-27 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 19:02:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-27 19:16:52 --> Could not find the language line "Home"
ERROR - 2023-07-27 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 19:31:37 --> Could not find the language line "Home"
ERROR - 2023-07-27 19:38:09 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:08:44 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:23:42 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:24:04 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:25:16 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:25:44 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:28:55 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:29:05 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:29:06 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:30:27 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:30:35 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:30:58 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:31:46 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 20:46:36 --> Could not find the language line "Home"
ERROR - 2023-07-27 20:51:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-27 20:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-27 21:08:50 --> Could not find the language line "Crocs"
ERROR - 2023-07-27 21:14:58 --> Could not find the language line "Other"
ERROR - 2023-07-27 21:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-27 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 21:32:40 --> Could not find the language line "Home"
ERROR - 2023-07-27 21:33:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 21:33:47 --> Could not find the language line "Home"
ERROR - 2023-07-27 21:46:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-27 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-27 22:04:41 --> Could not find the language line "Home"
ERROR - 2023-07-27 22:07:17 --> Could not find the language line "Home"
ERROR - 2023-07-27 22:14:26 --> Could not find the language line "Home"
ERROR - 2023-07-27 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-27 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-27 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-27 23:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-27 23:37:31 --> 404 Page Not Found: Assets/css
