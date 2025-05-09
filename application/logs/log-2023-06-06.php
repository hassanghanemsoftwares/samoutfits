<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-06 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 00:39:00 --> Could not find the language line "Home"
ERROR - 2023-06-06 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 01:03:53 --> Could not find the language line "Home"
ERROR - 2023-06-06 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 01:40:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 02:53:45 --> Could not find the language line "Home"
ERROR - 2023-06-06 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:08:38 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:30:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:30:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:32:08 --> Could not find the language line "Home"
ERROR - 2023-06-06 04:59:09 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:26:44 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:28:18 --> Could not find the language line "Crocs"
ERROR - 2023-06-06 05:28:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-06 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:31:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:45:24 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:49:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-06 05:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 05:52:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 05:52:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 05:52:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 05:52:36 --> Could not find the language line "Perfume"
ERROR - 2023-06-06 05:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 05:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 05:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 05:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 05:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 05:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:08:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:09:01 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:22:09 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-06 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:29:16 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 06:40:20 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:21 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:23 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:24 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:32 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:40:33 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 06:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:49:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 06:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:49:43 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 06:51:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 06:53:08 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:53:09 --> Could not find the language line "Home"
ERROR - 2023-06-06 06:59:08 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:00:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 07:00:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 07:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:00:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 07:01:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:01:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:03:39 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:04:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 07:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:16:52 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 07:17:13 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 07:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:26:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:31:10 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-06 07:38:32 --> Could not find the language line "Home"
ERROR - 2023-06-06 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-06 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-06 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-06 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-06 07:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-06 07:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 07:58:40 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 08:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:20:59 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:26:09 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 08:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 08:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 08:26:12 --> 404 Page Not Found: Home/accounts
ERROR - 2023-06-06 08:26:12 --> 404 Page Not Found: Home/home
ERROR - 2023-06-06 08:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:40:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 08:45:34 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:52:01 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:53:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 08:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:02:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:03:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:04:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:05:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:05:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:05:57 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:13:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:13:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:15:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 09:19:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 09:20:00 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:20:45 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:22:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:28:30 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:28:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-06 09:29:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-06 09:29:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-06 09:29:30 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:29:43 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:30:20 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:30:35 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:30:41 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:30:45 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:30:52 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:30:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:32:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:32:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:33:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:33:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:34:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:34:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:34:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:35:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:35:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:35:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:36:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:36:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:36:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:37:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:37:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:38:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:38:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:38:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:38:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:39:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:39:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:39:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:39:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:40:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:40:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:40:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:40:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:40:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:41:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:41:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:41:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:42:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:42:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:42:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:43:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:43:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:43:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:43:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:43:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-06 09:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:43:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:44:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:44:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:45:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:45:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:45:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:46:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:46:48 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:46:53 --> 404 Page Not Found: Fatmous7231231/index
ERROR - 2023-06-06 09:46:59 --> 404 Page Not Found: Admin/index
ERROR - 2023-06-06 09:47:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:47:04 --> 404 Page Not Found: Admin/login.php
ERROR - 2023-06-06 09:47:09 --> 404 Page Not Found: Admin/login
ERROR - 2023-06-06 09:47:15 --> 404 Page Not Found: Adminphp/index
ERROR - 2023-06-06 09:47:20 --> 404 Page Not Found: Admin/login
ERROR - 2023-06-06 09:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:47:25 --> 404 Page Not Found: Login/index
ERROR - 2023-06-06 09:47:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:47:30 --> 404 Page Not Found: Loginphp/index
ERROR - 2023-06-06 09:47:35 --> 404 Page Not Found: Admin/index
ERROR - 2023-06-06 09:47:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:47:40 --> 404 Page Not Found: Loginaspx/index
ERROR - 2023-06-06 09:47:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:47:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:47:46 --> 404 Page Not Found: Login/index
ERROR - 2023-06-06 09:47:52 --> 404 Page Not Found: Login/index
ERROR - 2023-06-06 09:47:57 --> 404 Page Not Found: Loginhtml/index
ERROR - 2023-06-06 09:48:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:48:03 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:48:18 --> Could not find the language line "Socks"
ERROR - 2023-06-06 09:48:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:48:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:48:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:49:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 09:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:49:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 09:49:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 09:49:35 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 09:50:17 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 09:54:55 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 09:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:56:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:58:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 09:58:47 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:58:53 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 09:58:57 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 09:59:00 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:59:04 --> Could not find the language line "Perfume"
ERROR - 2023-06-06 09:59:18 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:59:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 09:59:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-06 09:59:27 --> Could not find the language line "Home"
ERROR - 2023-06-06 09:59:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-06 09:59:40 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:06:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 10:06:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-06 10:06:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-06 10:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:09:05 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:09:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 10:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:11:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 10:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:13:51 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:15:58 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:20:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 10:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 10:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 10:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:02:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:05:00 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 11:05:47 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:29:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:30:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:33:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:33:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:53:50 --> 404 Page Not Found: Fileupload/index.php
ERROR - 2023-06-06 11:54:22 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 11:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 11:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 11:57:24 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:58:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:58:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:58:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 11:58:48 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:59:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:59:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 11:59:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 11:59:35 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 11:59:46 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:03:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:04:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:06:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:11:54 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:12:19 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:12:39 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:12:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:12:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:12:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:13:02 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:13:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:13:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:15:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:16:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 12:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 12:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 12:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 12:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 12:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 12:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 12:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 12:17:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-06 12:17:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-06 12:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:17:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 12:21:21 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:10 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:25:52 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:27:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:38:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 12:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:39:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:46:02 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:46:03 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:46:46 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 12:49:32 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:50:22 --> Could not find the language line "Home"
ERROR - 2023-06-06 12:50:23 --> 404 Page Not Found: Feed/index
ERROR - 2023-06-06 12:50:23 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-06 12:50:23 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-06 12:50:23 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-06 12:50:23 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-06 12:50:24 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-06 12:50:24 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-06-06 12:50:24 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-06 12:50:24 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-06-06 12:50:24 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-06 12:50:25 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-06 12:50:25 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-06 12:50:25 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-06 12:50:25 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-06 12:59:23 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:01:44 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:05:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-06 13:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:08:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:09:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:11:27 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:16:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:20:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:22:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:36:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:36:30 --> Could not find the language line "Bracelets"
ERROR - 2023-06-06 13:37:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:37:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:41:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-06 13:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 13:47:52 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:52:59 --> Could not find the language line "Home"
ERROR - 2023-06-06 13:53:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:56:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 13:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:04:48 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:04:49 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:05:20 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:05:22 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:08:10 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:12:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-06 14:12:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-06 14:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:14:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:15:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:16:08 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:17:34 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:17:45 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:10 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:19:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:32 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:19:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:19:43 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:21:33 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:21:33 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:21:33 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:21:44 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:27:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:28:22 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:33:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:50:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:51:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:52:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:52:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:53:04 --> Could not find the language line "Home"
ERROR - 2023-06-06 14:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 14:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 14:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:03:47 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:04:27 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:04:27 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:04:35 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 15:35:12 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-06 15:35:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-06 15:35:13 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-06 15:35:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-06 15:35:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-06 15:35:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-06 15:35:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-06 15:35:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-06 15:38:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 15:38:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 15:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-06 15:51:37 --> Could not find the language line "Home"
ERROR - 2023-06-06 15:59:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:01:46 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:02:25 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:15:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:28:32 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-06 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:33:43 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:33:44 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:33:44 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:38:16 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:38:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:43:53 --> Could not find the language line "Home"
ERROR - 2023-06-06 16:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 16:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 16:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:02:38 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:20:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-06 17:21:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:21:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:22:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:22:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:24:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:24:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 17:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 17:38:00 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:38:45 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:39:42 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:42:38 --> Could not find the language line "Home"
ERROR - 2023-06-06 17:56:38 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:14:22 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:33:24 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:34:21 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:35:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 18:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 18:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 18:50:53 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:53:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:55:03 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:55:03 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:55:03 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:55:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 18:56:13 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:56:48 --> Could not find the language line "Home"
ERROR - 2023-06-06 18:58:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:00:50 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:01:31 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:09:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 19:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:31:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:42:09 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:51:29 --> Could not find the language line "Home"
ERROR - 2023-06-06 19:51:48 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:03:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:04:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:05:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:06:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:06:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:07:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:09:57 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:11:26 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:19:39 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:27:16 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:49:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 20:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:56:59 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-06 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 20:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:04:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 21:15:41 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:26:55 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-06 21:55:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 22:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:04:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:05:34 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:07:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:09:40 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:09:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-06 22:16:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:30:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:33:25 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 22:39:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-06 22:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-06 23:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:07:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:07:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:07:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:07:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:07:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:30:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:52:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:53:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-06-06 23:58:34 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
