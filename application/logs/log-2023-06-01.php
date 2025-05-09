<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-01 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 00:49:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:03:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 01:15:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:16:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-01 01:16:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:42:55 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 01:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 01:45:07 --> Could not find the language line "Home"
ERROR - 2023-06-01 01:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 01:46:16 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:08:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 02:08:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 02:08:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 02:08:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 02:09:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 02:09:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 02:14:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:36:45 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 02:39:01 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:42:57 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:42:57 --> Could not find the language line "Home"
ERROR - 2023-06-01 02:42:57 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:02:05 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 03:03:07 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 03:03:32 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 03:50:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 04:28:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 04:30:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 04:59:41 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:15:33 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:20:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 05:20:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 05:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:32:37 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:33:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 05:36:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-01 05:36:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-01 05:36:52 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-01 05:36:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-01 05:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 05:54:33 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:09:40 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:10:56 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:21:10 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:21:47 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:31:25 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:31:35 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:32:03 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:32:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:32:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:32:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:32:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:32:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:32:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:32:44 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:32:46 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:33:40 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:33:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:33:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:33:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 06:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 06:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:44:53 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:50:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:52:58 --> Could not find the language line "Home"
ERROR - 2023-06-01 06:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 06:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 07:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:15:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:16:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-01 07:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-01 07:22:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 07:22:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 07:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 07:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:53 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:54 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:54 --> Could not find the language line "accounting"
ERROR - 2023-06-01 07:56:54 --> Could not find the language line "accounting"
ERROR - 2023-06-01 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:09:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:16:36 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:17:25 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:18:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-01 08:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:22:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:22:20 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:22:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-01 08:22:40 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:24:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-01 08:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:28:06 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:42:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 08:42:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 08:42:17 --> Could not find the language line "Home"
ERROR - 2023-06-01 08:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 08:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:07:26 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:10:51 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:10:56 --> Could not find the language line "Perfume"
ERROR - 2023-06-01 09:11:04 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:12:11 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-01 09:12:13 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-01 09:12:15 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-06-01 09:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:13:34 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:13:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 09:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 09:14:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 09:14:25 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:14:29 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 09:14:40 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:14:48 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:15:07 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:15:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-01 09:15:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-01 09:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:18:35 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:18:35 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:27:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:29:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 09:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:31:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 09:34:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-01 09:34:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-01 09:34:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-01 09:34:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-01 09:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:59:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-06-01 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 09:59:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:04:04 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:13:09 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:18:36 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:18:46 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:18:54 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 10:19:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 10:20:16 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 10:20:17 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 10:20:31 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 10:20:37 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:20:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:20:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:27 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:21:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 10:21:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 10:21:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:21:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:22:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 10:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:23:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:23:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:24:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:24:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:24:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:24:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 10:25:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:27:48 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:27:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 10:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 10:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 10:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 10:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:29:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 10:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:37:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:37:51 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:37:58 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:28 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:28 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:49 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:38:50 --> Could not find the language line "Home"
ERROR - 2023-06-01 10:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 10:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:12:31 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:13:32 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:16:44 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:17:50 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:17:58 --> Could not find the language line "Socks"
ERROR - 2023-06-01 11:18:03 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 11:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 11:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 11:18:47 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 11:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 11:27:10 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:41:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 11:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:00:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 12:05:22 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:05:46 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 12:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:09:42 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:14:42 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:19:39 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:20:32 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:21:50 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:22:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 12:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 12:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 12:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 12:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:37:05 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:23 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:37:26 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-06-01 12:37:26 --> 404 Page Not Found: Feed/index
ERROR - 2023-06-01 12:37:26 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-01 12:37:26 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-01 12:37:26 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-01 12:37:27 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-01 12:37:27 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-01 12:37:27 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-06-01 12:37:27 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-01 12:37:28 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-06-01 12:37:28 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-01 12:37:28 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-01 12:37:28 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-01 12:37:28 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-01 12:37:29 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-01 12:40:46 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:45:00 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-01 12:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 12:52:07 --> Could not find the language line "Home"
ERROR - 2023-06-01 12:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:00:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:00:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:02:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:02:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:02:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:02:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:03:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:03:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:03:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:03:57 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:04:50 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:04:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:05:41 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:05:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:06:20 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:06:34 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:06:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:06:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:07:24 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:13:41 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:13:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:13:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 13:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:23:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 13:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:35:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 13:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:37:48 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:42:56 --> 404 Page Not Found: Admin/assets
ERROR - 2023-06-01 13:47:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:52:52 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:53:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 13:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:54:52 --> Could not find the language line "Perfume"
ERROR - 2023-06-01 13:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 13:56:56 --> Could not find the language line "Other"
ERROR - 2023-06-01 13:58:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 13:59:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-01 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:01:34 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:07:31 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:10:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:10:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:11:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:11:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:11:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:11:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:12:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:12:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:12:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:13:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:15:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-01 14:15:29 --> Could not find the language line "Bracelets"
ERROR - 2023-06-01 14:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:17:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:18:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 14:19:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:19:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:19:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:19:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:19:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:19:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:21:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:21:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:23:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:23:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:24:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 14:24:56 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:24:56 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:24:57 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:25:11 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 14:31:17 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:35:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:48:00 --> Could not find the language line "Home"
ERROR - 2023-06-01 14:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 15:01:42 --> Could not find the language line "Home"
ERROR - 2023-06-01 15:04:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 15:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 15:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 15:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 15:28:23 --> Could not find the language line "Home"
ERROR - 2023-06-01 15:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 15:29:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 15:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 15:29:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 15:30:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 15:30:28 --> Could not find the language line "Socks"
ERROR - 2023-06-01 15:32:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 15:46:09 --> Could not find the language line "Home"
ERROR - 2023-06-01 15:53:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 16:13:05 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 16:21:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:21:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:22:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:22:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:22:51 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 16:24:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:24:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:25:50 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:26:48 --> Could not find the language line "Perfume"
ERROR - 2023-06-01 16:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:27:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 16:27:57 --> Could not find the language line "clothing"
ERROR - 2023-06-01 16:28:06 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 16:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 16:55:33 --> 404 Page Not Found: Backupzip/index
ERROR - 2023-06-01 16:55:34 --> 404 Page Not Found: Backupsql/index
ERROR - 2023-06-01 16:55:34 --> 404 Page Not Found: Backuptar/index
ERROR - 2023-06-01 16:55:35 --> 404 Page Not Found: Backuptargz/index
ERROR - 2023-06-01 16:55:35 --> 404 Page Not Found: Backuprar/index
ERROR - 2023-06-01 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:09:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-01 17:13:35 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:15:07 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:25:59 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:27:09 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:27:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:28:41 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:28:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:29:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:30:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:30:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:30:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:30:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:31:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:31:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 17:31:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:31:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:31:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:32:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:32:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:32:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:32:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-01 17:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:35:30 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:35:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:40:16 --> 404 Page Not Found: Env/index
ERROR - 2023-06-01 17:40:16 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:43:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 17:53:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:53:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 17:53:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:05:25 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:08:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 18:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 18:12:35 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:12:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:27:40 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 18:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 18:36:28 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:41:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 18:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 18:46:18 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:49:23 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:54:23 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 18:56:10 --> Could not find the language line "Home"
ERROR - 2023-06-01 18:57:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-01 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 19:05:30 --> Could not find the language line "Home"
ERROR - 2023-06-01 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 19:35:50 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-01 19:36:11 --> Could not find the language line "Home"
ERROR - 2023-06-01 19:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 19:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 19:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 19:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 19:39:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 19:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 19:40:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:13:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:18:21 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:21:35 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-01 20:22:37 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:44:55 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:45:33 --> Could not find the language line "Perfume"
ERROR - 2023-06-01 20:45:43 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:56:38 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:56:55 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:57:11 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:57:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 20:57:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 20:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 20:57:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:16:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:32:56 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:36:26 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 21:37:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 21:37:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-01 21:39:31 --> Could not find the language line "Home"
ERROR - 2023-06-01 21:40:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 21:45:44 --> Could not find the language line "Home"
ERROR - 2023-06-01 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-01 22:16:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-01 22:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 22:27:19 --> Could not find the language line "Home"
ERROR - 2023-06-01 22:30:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:22:10 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:22:42 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:31:27 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:32:01 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:32:08 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:32:32 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:32:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-01 23:33:14 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:35:48 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:36:46 --> Could not find the language line "Home"
ERROR - 2023-06-01 23:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-01 23:44:50 --> Could not find the language line "Home"
