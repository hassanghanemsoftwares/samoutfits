<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-28 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 00:00:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:01:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:01:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:02:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:02:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:02:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:02:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:03:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:04:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:06:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:06:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:06:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:08:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 00:09:35 --> Could not find the language line "Home"
ERROR - 2023-08-28 00:17:24 --> Could not find the language line "Home"
ERROR - 2023-08-28 00:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-28 00:41:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 00:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 00:57:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 01:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 01:09:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 01:36:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 02:27:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 02:30:25 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:04:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 03:04:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 03:13:38 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:17:21 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:18:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:19:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:26:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 03:26:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:27:25 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 03:38:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 03:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 04:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 04:11:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 04:16:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 04:17:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 04:25:00 --> Could not find the language line "Home"
ERROR - 2023-08-28 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-28 04:32:41 --> Could not find the language line "Home"
ERROR - 2023-08-28 04:35:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:01:42 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:11:40 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:16:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 05:16:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 05:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 05:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 05:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:20:55 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:38:15 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:41:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 05:42:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:42:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:42:30 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:42:35 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:43:21 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:46:43 --> Could not find the language line "Home"
ERROR - 2023-08-28 05:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 05:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:00:43 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:01:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:04:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:05:06 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:06:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:06:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:06:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:06:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:09:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:12:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:12:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:24:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 06:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:26:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:26:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 06:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:31:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 06:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:32:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:33:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:34:55 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:37:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:37:20 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:37:25 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:41:38 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:42:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:43:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:44:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 06:44:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 06:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:47:51 --> Could not find the language line "Home"
ERROR - 2023-08-28 06:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 06:58:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 07:00:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:05:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:09:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:09:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:11:59 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:16:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:16:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 07:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:24:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 07:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 07:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:31:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 07:31:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 07:36:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 07:36:31 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:51:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 07:52:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 07:52:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 07:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:56:44 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:58:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 07:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 07:59:36 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:03:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:03:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:03:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:05:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 08:05:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 08:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:15:09 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:17:59 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:18:42 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:19:08 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:19:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:19:37 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:31:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-28 08:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 08:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:33:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:50:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 08:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 08:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:52:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 08:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 08:53:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 08:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:09:54 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:12:21 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:14:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 09:14:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:17:49 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:29:02 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:29:05 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:32:20 --> Could not find the language line "Other"
ERROR - 2023-08-28 09:32:24 --> Could not find the language line "Other"
ERROR - 2023-08-28 09:32:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 09:33:34 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:40:27 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:40:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 09:44:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:45:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 09:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 09:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:47:11 --> 404 Page Not Found: Env/index
ERROR - 2023-08-28 09:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 09:57:18 --> Could not find the language line "Home"
ERROR - 2023-08-28 09:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:57:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 09:59:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2023-08-28 09:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%crocs%' OR a.description LIKE '%crocs%' OR a.color LIKE '%crocs%' OR a.barcode LIKE '%crocs%' OR a.category LIKE '%crocs%' OR a.sub_category LIKE '%crocs%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-28 09:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 09:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:00:36 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:00:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:05:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:08:37 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:13:10 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 10:14:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:18:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:20:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:20:29 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:21:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:22:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:22:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:23:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:24:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:25:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:26:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:26:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:26:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:26:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:26:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:27:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:27:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:27:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:27:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:27:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:27:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:29:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:29:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:29:24 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:29:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:30:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:30:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-28 10:30:44 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:30:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:31:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:32:15 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:32:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:32:26 --> Could not find the language line "Socks"
ERROR - 2023-08-28 10:32:43 --> Could not find the language line "Socks"
ERROR - 2023-08-28 10:32:47 --> Could not find the language line "Socks"
ERROR - 2023-08-28 10:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:33:10 --> Could not find the language line "Socks"
ERROR - 2023-08-28 10:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:34:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:38:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:38:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:38:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:39:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:39:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:39:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:42:05 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:44:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:44:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 10:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:45:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:45:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:45:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:45:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:46:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:47:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:47:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:47:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:47:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:48:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:48:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:48:24 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:48:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:48:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:48:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:49:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:49:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:50:51 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:50:52 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:50:53 --> Could not find the language line "Home"
ERROR - 2023-08-28 10:50:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:50:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 10:51:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:51:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:51:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:51:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:52:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:53:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:53:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:53:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:55:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:55:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:55:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:55:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:56:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 10:56:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:56:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 10:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 10:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 10:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 10:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 10:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 10:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 10:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 10:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 10:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 10:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 10:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:10:38 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:21:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:21:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:21:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:21:15 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:22:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:22:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:23:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:25:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:25:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:26:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:27:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:27:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:28:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:28:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:30:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 11:30:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 11:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:30:40 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:31:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:31:43 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:33:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:33:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:34:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:34:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:36:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:36:20 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:37:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:37:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:37:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:37:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:38:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:38:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:38:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:38:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:38:50 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:39:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:39:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:39:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:39:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:39:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:40:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:40:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:40:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:40:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 11:41:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 11:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:41:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:41:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:42:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:43:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 11:44:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 11:59:32 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:02:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:02:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:02:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:02:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:02:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:02:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:03:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:03:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:03:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 12:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 12:03:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:03:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:04:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:04:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 12:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:08:41 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:09:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 12:10:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:19:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:28:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 12:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 12:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:33:31 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:34:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:34:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:36:43 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:51:09 --> Could not find the language line "Home"
ERROR - 2023-08-28 12:55:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:55:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 12:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 12:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:01:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 13:01:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 13:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:02:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 13:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 13:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:15:27 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:15:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 13:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:15:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 13:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:16:37 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:19:50 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:28:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:32:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:38:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:48:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:48:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 13:49:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 13:51:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:51:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 13:51:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 13:51:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 13:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 13:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 13:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 13:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:03:02 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:03:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:07:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:08:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:08:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:14:33 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:15:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 14:15:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 14:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:15:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 14:15:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 14:16:50 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:19:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:20:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:20:52 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:21:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-28 14:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:22:36 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:33:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:43:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:43:53 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:45:07 --> Could not find the language line "Home"
ERROR - 2023-08-28 14:47:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:07:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:07:42 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:11:02 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:28:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:33:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:34:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:34:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:34:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:38:40 --> Could not find the language line "Home"
ERROR - 2023-08-28 15:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 15:54:38 --> Could not find the language line "Socks"
ERROR - 2023-08-28 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:00:54 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:01:01 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 16:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 16:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 16:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 16:22:58 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:27:36 --> Could not find the language line "Socks"
ERROR - 2023-08-28 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:37:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:37:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:50:50 --> Could not find the language line "Home"
ERROR - 2023-08-28 16:57:36 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:03:45 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:04:08 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 17:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 17:04:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:05:37 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:16:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:16:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:16:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:16:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:17:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 17:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 17:17:51 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:26:43 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-28 17:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:28:05 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:28:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:35:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 17:35:51 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:36:53 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-28 17:40:42 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:40:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:41:37 --> Could not find the language line "Home"
ERROR - 2023-08-28 17:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 17:54:17 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-28 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:00:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 18:07:57 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:07:57 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:07:57 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:08:00 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 18:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 18:20:53 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 18:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 18:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 18:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 18:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 18:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 18:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 18:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 18:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 18:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-28 18:28:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:28:28 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:29:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:29:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:42:42 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:43:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:43:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 18:44:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:44:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 18:44:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 18:44:22 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:51:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:54:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:54:52 --> Could not find the language line "Home"
ERROR - 2023-08-28 18:55:24 --> Could not find the language line "Bracelets"
ERROR - 2023-08-28 19:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:09:00 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:09:32 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:13:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:14:52 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:15:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:17:20 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:17:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:17:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:18:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 19:18:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-28 19:19:00 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:23:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 19:24:50 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:29:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:38:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:45:01 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:54:40 --> Could not find the language line "Home"
ERROR - 2023-08-28 19:55:45 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:01:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:03:57 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:04:02 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 20:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 20:05:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:10:35 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:13:28 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:25:28 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:33:23 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:38:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 20:41:01 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:46:52 --> Could not find the language line "Home"
ERROR - 2023-08-28 20:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:00:30 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:01:57 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:15:39 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-28 21:23:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 21:25:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 21:32:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 21:32:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 21:46:45 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:49:54 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:52:05 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:59:25 --> Could not find the language line "Home"
ERROR - 2023-08-28 21:59:26 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:12:55 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:16:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 22:16:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-28 22:18:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 22:18:48 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:22:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:22:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 22:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-28 22:28:44 --> Could not find the language line "Other"
ERROR - 2023-08-28 22:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-28 22:33:03 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:46 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:06:47 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:09:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 23:09:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-28 23:09:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:09:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:09:49 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:09:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:09:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:10:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-28 23:10:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 23:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 23:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 23:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 23:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 23:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 23:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 23:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 23:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 23:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-28 23:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-28 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-28 23:33:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-28 23:42:46 --> 404 Page Not Found: Robotstxt/index
