<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-13 00:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-13 00:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 00:32:44 --> Could not find the language line "Home"
ERROR - 2023-08-13 00:32:46 --> Could not find the language line "Home"
ERROR - 2023-08-13 00:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-13 00:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 01:00:26 --> Could not find the language line "Home"
ERROR - 2023-08-13 01:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 01:05:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 01:54:37 --> Could not find the language line "Home"
ERROR - 2023-08-13 01:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 02:09:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-13 02:11:18 --> Could not find the language line "Home"
ERROR - 2023-08-13 02:26:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 02:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-13 02:34:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 02:41:04 --> Could not find the language line "Home"
ERROR - 2023-08-13 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 03:15:41 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-13 03:20:18 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-13 03:21:00 --> Could not find the language line "Crocs"
ERROR - 2023-08-13 03:21:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 03:21:08 --> Could not find the language line "Home"
ERROR - 2023-08-13 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 03:34:09 --> Could not find the language line "Socks"
ERROR - 2023-08-13 03:36:28 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-13 03:38:46 --> Could not find the language line "Perfume"
ERROR - 2023-08-13 04:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-13 04:04:29 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 04:05:45 --> Could not find the language line "Home"
ERROR - 2023-08-13 04:09:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-13 04:17:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 04:25:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 04:30:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 04:38:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 04:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 05:00:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 05:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 05:53:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 06:01:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 06:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:11:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 06:13:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 06:16:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 06:16:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-13 06:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 06:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:43:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 06:43:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-13 06:43:55 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 06:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 06:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:02:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 07:02:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-13 07:07:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:07:28 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:07:29 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-13 07:11:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:15:23 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:16:52 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:17:58 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:18:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:18:48 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:20:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:20:28 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:21:40 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:22:39 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:25:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:25:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 07:25:36 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:25:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:26:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:26:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:27:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:28:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:28:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:30:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:31:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:35:35 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:35:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:35:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:37:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:37:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:37:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 07:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:37:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:37:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:37:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:37:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:38:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:38:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:39:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:39:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 07:40:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:40:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 07:40:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 07:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 07:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46', '45', '48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-13 07:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 07:59:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 07:59:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-13 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:02:09 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:03:44 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:04:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:07:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:13:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:22:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 08:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:26:09 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:33:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:41:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:48:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:57:34 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:57:48 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 08:58:59 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:59:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 08:59:49 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:00:03 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:00:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 09:04:49 --> 404 Page Not Found: Makhdamxphp/index
ERROR - 2023-08-13 09:04:49 --> 404 Page Not Found: Alfanewphp7/index
ERROR - 2023-08-13 09:04:49 --> 404 Page Not Found: Simplephp/index
ERROR - 2023-08-13 09:04:50 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-08-13 09:04:50 --> 404 Page Not Found: Alfa-rexphp7/index
ERROR - 2023-08-13 09:04:50 --> 404 Page Not Found: Class_apiphp/index
ERROR - 2023-08-13 09:04:51 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-08-13 09:04:51 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-08-13 09:04:51 --> 404 Page Not Found: Alogovaphp/index
ERROR - 2023-08-13 09:04:52 --> 404 Page Not Found: Alogovaphp/index
ERROR - 2023-08-13 09:04:52 --> 404 Page Not Found: Wp-content/alogova.php
ERROR - 2023-08-13 09:04:52 --> 404 Page Not Found: Wp-content/repeater.php
ERROR - 2023-08-13 09:04:53 --> 404 Page Not Found: Wp-includes/repeater.php
ERROR - 2023-08-13 09:04:53 --> 404 Page Not Found: Wp-admin/repeater.php
ERROR - 2023-08-13 09:04:54 --> 404 Page Not Found: Repeaterphp/index
ERROR - 2023-08-13 09:04:54 --> 404 Page Not Found: Alfa-rexphp7/index
ERROR - 2023-08-13 09:04:54 --> 404 Page Not Found: Alfanewphp7/index
ERROR - 2023-08-13 09:04:55 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-13 09:04:55 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-13 09:04:55 --> 404 Page Not Found: Wp-2019php/index
ERROR - 2023-08-13 09:04:56 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:04:57 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-13 09:04:57 --> 404 Page Not Found: Shell20211028php/index
ERROR - 2023-08-13 09:04:57 --> 404 Page Not Found: Shell20211028php/index
ERROR - 2023-08-13 09:04:58 --> 404 Page Not Found: Xmrlpcphp/index
ERROR - 2023-08-13 09:04:58 --> 404 Page Not Found: Wp-content/shell20211028.php
ERROR - 2023-08-13 09:04:58 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-08-13 09:04:59 --> 404 Page Not Found: Xmrlpcphp/index
ERROR - 2023-08-13 09:04:59 --> 404 Page Not Found: Xmrlpcphp/index
ERROR - 2023-08-13 09:04:59 --> 404 Page Not Found: Simplephp/index
ERROR - 2023-08-13 09:05:00 --> 404 Page Not Found: Alfa-rexphp7/index
ERROR - 2023-08-13 09:05:00 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-13 09:05:01 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-13 09:05:01 --> 404 Page Not Found: Shellphp/index
ERROR - 2023-08-13 09:05:01 --> 404 Page Not Found: Wp-admin/alfa-rex.php7
ERROR - 2023-08-13 09:05:02 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-13 09:05:02 --> 404 Page Not Found: Wp-admin/alfa-rex.php7
ERROR - 2023-08-13 09:05:02 --> 404 Page Not Found: Rindexphp/index
ERROR - 2023-08-13 09:05:03 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-08-13 09:05:03 --> 404 Page Not Found: Autoload_classmapphp/index
ERROR - 2023-08-13 09:05:04 --> 404 Page Not Found: Wp-2019php/index
ERROR - 2023-08-13 09:05:04 --> 404 Page Not Found: Wso112233php/index
ERROR - 2023-08-13 09:05:04 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-13 09:05:05 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2023-08-13 09:07:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:08:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 09:55:09 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:06:23 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:09:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:12:03 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Feed/index
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-13 10:12:04 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-08-13 10:12:05 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-13 10:12:05 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-13 10:12:05 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-13 10:12:05 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-13 10:12:05 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-13 10:20:28 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-13 10:20:28 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-13 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:35:02 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:41:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 10:55:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 10:55:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 10:55:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 10:56:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 10:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 10:57:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 10:57:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 10:59:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:00:49 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:01:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:10:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:18:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:31:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:32:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:32:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:33:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:33:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 11:33:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-13 11:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:37:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:38:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:38:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 11:39:02 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:39:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:39:58 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:43:54 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:44:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:45:39 --> Could not find the language line "Home"
ERROR - 2023-08-13 11:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 11:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:01:38 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:01:57 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:33:42 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:39:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 12:50:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:55:59 --> Could not find the language line "Home"
ERROR - 2023-08-13 12:56:22 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:03:22 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:05:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 13:06:59 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:07:35 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:07:53 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:08:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:09:48 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 13:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:20:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 13:29:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-13 13:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:32:53 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:34:57 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:37:01 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:38:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 13:38:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:44:27 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:44:44 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 13:55:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 13:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-13 13:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-13 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:08:48 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:09:09 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:09:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 14:09:47 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:09:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 14:10:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 14:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:13:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 14:16:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:40:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 14:40:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 14:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:42:08 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:44:33 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:44:33 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:44:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 14:44:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 14:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 14:47:57 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:48:29 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:48:33 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:48:37 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:56:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 14:58:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 15:06:13 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-13 15:06:13 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-13 15:08:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 15:25:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 15:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 15:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 15:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 15:42:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:09:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 16:10:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:29:34 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:31:57 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:36:24 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:36:59 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:37:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:37:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:37:25 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:39:49 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:40:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 16:40:24 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:41:04 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:41:13 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:41:24 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 16:41:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 16:41:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:41:54 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:42:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:42:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:43:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:43:23 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:45:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:47:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:47:24 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:47:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:47:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:48:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:48:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:48:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:49:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:50:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 16:50:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 16:50:29 --> Could not find the language line "Home"
ERROR - 2023-08-13 16:56:39 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-13 16:56:39 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-13 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:03:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-13 17:03:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-13 17:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:19:56 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:20:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:21:37 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 17:21:48 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 17:22:02 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 17:22:03 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:27:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:30:55 --> Could not find the language line "Socks"
ERROR - 2023-08-13 17:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:41:29 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:44:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 17:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 17:53:52 --> Could not find the language line "Home"
ERROR - 2023-08-13 17:54:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 17:55:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 17:56:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 17:56:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 17:57:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:15:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 18:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:19:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:20:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:20:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:20:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:20:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:20:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:20:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:21:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:21:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:21:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:21:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:22:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:22:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:22:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:23:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:23:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 18:26:23 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:26:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:26:57 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-13 18:39:54 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-13 18:39:54 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-13 18:47:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-13 18:52:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-13 18:59:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 18:59:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:27:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:27:47 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:28:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 19:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:28:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:30:26 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:32:01 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:33:00 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:33:05 --> Could not find the language line "Bracelets"
ERROR - 2023-08-13 19:33:29 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:36:21 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:36:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:49:53 --> Could not find the language line "Home"
ERROR - 2023-08-13 19:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 19:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:00:37 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:09:16 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:09:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:09:18 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:09:18 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:10:37 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:10:45 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:10:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:11:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:11:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:11:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:12:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:12:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:12:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:12:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-13 20:12:58 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:15:44 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:15:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 20:15:59 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:16:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:16:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:16:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:16:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:17:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:17:51 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:17:53 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:17:55 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:17:56 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:18:05 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:18:06 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:19:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:19:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:19:22 --> Could not find the language line "Socks"
ERROR - 2023-08-13 20:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:19:53 --> Could not find the language line "Socks"
ERROR - 2023-08-13 20:20:02 --> Could not find the language line "Socks"
ERROR - 2023-08-13 20:20:07 --> Could not find the language line "Socks"
ERROR - 2023-08-13 20:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:20:33 --> Could not find the language line "Socks"
ERROR - 2023-08-13 20:20:35 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:20:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:20:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:21:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:21:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:21:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-13 20:22:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:22:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:22:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:23:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:23:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:23:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:23:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 20:24:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-13 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:33:11 --> Could not find the language line "Home"
ERROR - 2023-08-13 20:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-13 20:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 20:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 20:59:24 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:01:54 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 21:04:32 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:06:09 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:06:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 21:07:42 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:07:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 21:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 21:09:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-13 21:09:33 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:21:56 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:29:26 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 21:55:45 --> Could not find the language line "Home"
ERROR - 2023-08-13 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 22:14:41 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-08-13 22:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 22:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-13 22:44:34 --> Could not find the language line "products"
ERROR - 2023-08-13 22:47:25 --> Could not find the language line "Home"
ERROR - 2023-08-13 22:52:36 --> Could not find the language line "Home"
ERROR - 2023-08-13 22:53:42 --> Could not find the language line "products"
ERROR - 2023-08-13 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:01:38 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:01:41 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:02:22 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:02:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-13 23:02:23 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-08-13 23:02:23 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-08-13 23:02:24 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-08-13 23:02:50 --> Could not find the language line "products"
ERROR - 2023-08-13 23:04:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:07:50 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:11:58 --> Could not find the language line "products"
ERROR - 2023-08-13 23:21:07 --> Could not find the language line "products"
ERROR - 2023-08-13 23:22:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:23:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:23:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:24:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:20 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:25:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:26:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:26:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-13 23:26:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:26:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-13 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-13 23:30:14 --> Could not find the language line "products"
ERROR - 2023-08-13 23:39:22 --> Could not find the language line "products"
ERROR - 2023-08-13 23:47:36 --> Could not find the language line "products"
ERROR - 2023-08-13 23:55:14 --> Could not find the language line "Socks"
ERROR - 2023-08-13 23:55:44 --> Could not find the language line "products"
