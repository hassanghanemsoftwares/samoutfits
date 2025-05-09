<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-30 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 00:12:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 00:13:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 02:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 02:23:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 02:41:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 02:45:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 02:59:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 02:59:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 03:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 03:01:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 03:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 03:33:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 04:33:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 04:37:17 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-30 04:39:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 04:45:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 04:49:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-30 04:49:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:07:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:07:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 05:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 05:08:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:09:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:38:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 05:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:38:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 05:40:20 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-30 05:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:51:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 05:52:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 05:52:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 05:52:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 05:53:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 05:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:53:48 --> Could not find the language line "Perfume"
ERROR - 2023-07-30 05:53:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 05:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 05:57:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 05:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:00:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:10:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:11:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:11:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:12:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:13:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:15:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 06:15:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:16:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:17:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:17:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:18:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:19:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:19:01 --> Could not find the language line "assets"
ERROR - 2023-07-30 06:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:22:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 06:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 06:26:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:27:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:27:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 06:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 06:56:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:07:14 --> Could not find the language line "Crocs"
ERROR - 2023-07-30 07:08:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:08:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:08:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-30 07:08:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-30 07:08:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-30 07:08:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-30 07:09:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:09:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:09:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:10:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:13:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:21:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:22:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:23:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:26:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:26:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:26:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:26:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:26:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:27:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:27:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 07:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:30:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:33:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 07:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:34:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:34:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 07:34:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:35:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 07:35:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:35:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:35:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 07:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:40:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 07:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 07:45:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:53:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 07:53:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 07:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:55:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 07:56:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:56:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:56:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:56:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 07:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:00:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 08:00:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '5'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 08:02:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:03:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:04:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:05:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:05:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:08:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:08:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:08:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:10:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:10:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:10:45 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:46 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:46 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:46 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:46 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:49 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:50 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:50 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:50 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:50 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:52 --> 404 Page Not Found: C/96170615210
ERROR - 2023-07-30 08:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:14:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:15:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:15:13 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-30 08:17:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:19:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 08:19:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:19:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 08:20:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:21:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:22:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:22:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:22:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:23:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:24:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:24:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:24:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 08:24:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:27:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 08:27:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 08:27:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:28:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:28:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:28:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 08:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 08:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:29:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:35:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 08:35:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 08:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:39:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:39:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 08:39:09 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-30 08:40:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:41:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:41:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:44:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 08:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:45:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:46:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:46:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 08:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 08:46:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:47:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 08:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 08:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:01:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:01:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:01:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:01:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:02:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:03:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:03:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:03:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 09:04:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:04:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:04:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:04:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:05:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:05:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:06:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 09:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 09:07:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:07:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:07:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 09:08:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:08:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:08:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:09:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:09:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:09:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:11:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:13:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:14:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:15:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:16:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:18:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:18:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 09:22:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:28:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:29:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:30:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:32:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:33:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:33:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:34:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:39:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:39:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 09:39:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:42:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:42:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:43:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:45:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:46:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:46:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 09:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:48:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:48:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 09:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:51:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 09:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 09:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:53:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-30 09:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:58:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:59:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 09:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 09:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:01:02 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2023-07-30 10:01:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:01:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:02:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:12:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:14:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:16:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:18:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:20:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 10:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:26:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:32:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 10:32:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:32:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:32:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:35:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:35:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:37:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:37:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 10:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:37:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:38:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 10:38:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 10:38:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:38:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-30 10:38:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-30 10:38:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-30 10:38:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-30 10:40:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:42:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 10:42:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 10:45:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:45:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:45:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 10:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 10:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:03:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:05:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 11:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 11:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:34:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:35:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 11:35:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 11:35:36 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-30 11:35:54 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-30 11:36:12 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-30 11:36:30 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-30 11:36:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 11:36:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:39:54 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-30 11:40:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:41:46 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 11:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:42:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:43:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:43:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:43:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 11:45:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:46:46 --> Could not find the language line "Other"
ERROR - 2023-07-30 11:47:04 --> Could not find the language line "Other"
ERROR - 2023-07-30 11:47:23 --> Could not find the language line "Other"
ERROR - 2023-07-30 11:47:41 --> Could not find the language line "Other"
ERROR - 2023-07-30 11:48:00 --> Could not find the language line "Perfume"
ERROR - 2023-07-30 11:49:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 11:49:52 --> Could not find the language line "Socks"
ERROR - 2023-07-30 11:50:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 11:51:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:52:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:53:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:53:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:53:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 11:53:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 11:53:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:53:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:54:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 11:54:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:54:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:54:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 11:55:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:55:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 11:57:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:06:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:08:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:09:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:09:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:10:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:11:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:12:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:13:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:13:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 12:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 12:14:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 12:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '17'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 12:18:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:18:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:30:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:30:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:30:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:32:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:33:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:33:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:34:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:35:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:35:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:37:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:39:38 --> Could not find the language line "Other"
ERROR - 2023-07-30 12:40:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 12:40:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:41:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-30 12:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:42:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:42:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:43:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 12:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 12:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:45:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:45:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:45:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:45:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:45:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:47:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 12:47:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:58:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 12:59:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 12:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:01:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:01:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 13:02:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:02:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:03:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:03:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 13:04:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:06:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:08:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:08:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:09:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:09:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:09:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:12:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:13:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:14:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 13:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:15:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:15:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:15:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 13:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:15:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:19:10 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-30 13:19:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-30 13:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:25:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 13:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:29:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:31:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 13:31:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:31:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 13:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:36:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:37:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:37:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:37:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:40:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 13:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:40:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-30 13:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:41:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:41:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:41:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:41:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 13:42:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:51:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 13:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:54:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:55:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:55:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:55:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:55:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 13:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-30 13:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:55:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:58:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:58:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 13:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:58:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 13:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 13:59:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:03:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:07:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:12:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:32:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:32:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:33:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:34:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:34:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:34:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:35:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:35:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:37:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:37:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:37:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:38:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:38:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 14:38:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 14:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:41:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 14:42:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-30 14:42:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-30 14:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 14:59:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:02:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:04:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:07:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 15:15:43 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 15:15:51 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 15:26:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:27:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:27:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:27:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:28:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:28:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:28:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:28:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:29:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:29:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:29:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 15:50:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 16:00:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 16:15:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 16:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 17:09:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 17:16:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 17:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 17:18:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 17:29:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:07:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:08:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 18:09:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:13:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:14:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:30:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-30 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:34:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:50:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 18:50:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:51:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 18:56:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 18:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 18:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 18:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 18:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-30 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:04:10 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-30 19:05:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:09:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:09:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:30:21 --> Could not find the language line "Socks"
ERROR - 2023-07-30 19:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:30:27 --> Could not find the language line "Socks"
ERROR - 2023-07-30 19:30:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:30:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:35:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 19:38:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 19:38:50 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-30 19:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 19:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 19:46:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:00:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:00:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:00:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:02:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:05:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:07:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:10:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:14:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:17:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 20:21:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:21:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:28:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:32:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:36:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:39:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:39:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:40:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:40:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:41:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:42:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:43:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:43:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:44:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:45:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:45:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:45:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:45:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:45:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:46:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:46:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:46:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 20:47:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:48:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:49:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:49:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:49:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:50:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:51:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:52:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 20:52:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:52:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 20:53:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:53:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:54:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:54:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:55:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:56:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:56:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:57:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:57:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 20:57:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:57:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:58:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:58:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:59:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:59:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:59:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 20:59:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:00:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:01:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:01:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:01:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:02:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:02:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:52 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:03:54 --> 404 Page Not Found: Assets/images
ERROR - 2023-07-30 21:03:54 --> 404 Page Not Found: Assets/images
ERROR - 2023-07-30 21:04:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:04:53 --> 404 Page Not Found: Assets/images
ERROR - 2023-07-30 21:04:54 --> 404 Page Not Found: Assets/images
ERROR - 2023-07-30 21:05:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:06:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:06:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:07:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:07:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-30 21:07:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-30 21:07:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-30 21:07:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-30 21:07:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:07:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:07:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:07:15 --> Could not find the language line "Other"
ERROR - 2023-07-30 21:07:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:07:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:08:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:08:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:08:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:08:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:09:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:09:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:10:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:11:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:11:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:11:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:11:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:12:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:13:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:14:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:14:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:14:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:14:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:15:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:15:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:15:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:15:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:16:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:16:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:16:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:16:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:16:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 21:17:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-30 21:17:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:29 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 21:17:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:17:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 21:18:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:18:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:19:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:19:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:19:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:19:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:19:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:19:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:20:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:20:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:20:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:21:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:21:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 21:21:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:21:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:21:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:21:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:22:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:22:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:22:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:22:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:23:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:23:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:23:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:23:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:23:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:24:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:24:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:24:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:24:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:24:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:25:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:26:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:26:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:27:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:27:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:27:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:27:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:28:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:28:52 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:29:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:30:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:30:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:31:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:32:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:33:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:33:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:34:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:34:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:35:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:35:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:36:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:36:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:37:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:37:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:37:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:37:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:37:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:38:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:38:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:39:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:39:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:39:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:40:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:40:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:40:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:40:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:40:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:41:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:41:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:41:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:41:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:41:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:42:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 21:43:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:43:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:43:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:44:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:45:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:45:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:45:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:46:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:46:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:46:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:46:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:47:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:48:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:48:35 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:48:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:49:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:49:10 --> Could not find the language line "Socks"
ERROR - 2023-07-30 21:49:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:49:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:49:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:50:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:50:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:50:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:51:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:51:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:51:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:52:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:53:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:54:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:54:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:54:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:54:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:55:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:55:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:56:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:56:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:56:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:56:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 21:57:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:57:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:58:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 21:59:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:00:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:00:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 22:01:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:01:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:01:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:01:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:01:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:01:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:02:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:03:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:03:52 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:04:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:05:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:06:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:07:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:07:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:07:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:08:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:08:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:08:14 --> Could not find the language line "Bracelets"
ERROR - 2023-07-30 22:08:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:08:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-30 22:09:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:09:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:09:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:10:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:10:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:10:33 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:12:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:12:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:12:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:13:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:13:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:13:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:13:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:13:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:14:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:14:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:14:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:14:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:15:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:15:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:15:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:16:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:16:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:16:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:16:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:16:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:17:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:17:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:17:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:19:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:19:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:20:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:21:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:22:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:22:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:23:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:24:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:24:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:24:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:24:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:25:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:25:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:25:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:26:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:26:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:26:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:26:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:26:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:27:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-30 22:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:27:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:28:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:28:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:28:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:29:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:29:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:31:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:31:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:31:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:32:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:32:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:32:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:33:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:33:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 22:33:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:34:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:35:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:36:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:36:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:37:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:37:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:38:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:38:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:38:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:38:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:39:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:39:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:39:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:39:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:40:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:41:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:41:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:41:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:41:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:41:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:42:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:43:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:43:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:44:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:44:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:44:52 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:45:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:45:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:46:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:46:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:46:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:47:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:47:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:47:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:48:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:48:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:48:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:48:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:49:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:49:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:49:52 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:49:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:50:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:50:57 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:51:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:51:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:52:39 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:52:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:53:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:53:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:53:44 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:53:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:54:06 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:55:07 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:56:14 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:56:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:57:18 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:58:12 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:58:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 22:58:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:58:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 22:59:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:00:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:01:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:02:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:02:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:03:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:03:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:04:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:04:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:05:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:05:22 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:05:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:05:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:06:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:06:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:07:02 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:07:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:08:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:08:47 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:09:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:10:24 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:10:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:11:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:11:32 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:11:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-30 23:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-30 23:11:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:12:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:12:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:13:29 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:13:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:17:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:17:51 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:18:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:20:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:21:25 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:21:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:22:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:22:45 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:22:46 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:23:36 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:24:30 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:25:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:26:27 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:26:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:26:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:27:31 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:28:00 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:30:23 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:31:48 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:33:19 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:35:08 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:35:17 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:35:20 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:36:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:36:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:36:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:37:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:37:28 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:37:49 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:38:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:39:13 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:40:41 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:40:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:41:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:42:43 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:43:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:44:04 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:44:37 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:44:38 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-30 23:45:50 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:45:54 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:46:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:46:42 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:46:53 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:46:55 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:46:56 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:47:26 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:48:40 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:50:09 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:50:10 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:52:16 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:52:56 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-07-30 23:53:15 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:54:01 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:54:03 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:54:58 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:56:05 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:56:34 --> Could not find the language line "Home"
ERROR - 2023-07-30 23:56:48 --> 404 Page Not Found: Assets/css
