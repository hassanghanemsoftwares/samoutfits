<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-26 00:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-26 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:08:46 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:10:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:21:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-26 01:21:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:30:07 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:32:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 01:32:53 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:37:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:37:18 --> Could not find the language line "Home"
ERROR - 2023-08-26 01:41:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 01:42:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 01:46:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 01:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 01:53:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-26 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 02:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 02:32:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 02:47:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 02:47:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-26 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 03:58:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 04:03:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 04:04:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 04:05:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 04:24:59 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-26 04:28:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-26 04:33:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 04:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:00:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:01:52 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-26 05:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:14:36 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 05:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 05:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 05:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 05:22:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 05:22:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:32:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:40:25 --> Could not find the language line "Crocs"
ERROR - 2023-08-26 05:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:50:08 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:54:55 --> Could not find the language line "Home"
ERROR - 2023-08-26 05:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 05:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:02:49 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:03:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:03:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:03:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:04:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:04:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 06:05:38 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:07:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 06:08:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:18:07 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:19:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 06:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:26:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 06:27:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:27:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:32:10 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:32:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:32:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:32:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:32:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:32:35 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 06:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 06:39:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 06:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:44:39 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:46:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 06:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 06:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 06:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 06:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 06:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 06:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 06:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 06:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 06:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 06:50:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 06:50:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 06:52:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 06:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:56:59 --> Could not find the language line "Home"
ERROR - 2023-08-26 06:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 06:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:00:45 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:01:30 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:03:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:06:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:07:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 07:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:18:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:22:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 07:26:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 07:26:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 07:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 07:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 07:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 07:56:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-26 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:03:49 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:14:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:18:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:18:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:21:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:21:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:21:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:21:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:21:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 08:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 08:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 08:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 08:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:24:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 08:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 08:44:45 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:50:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:50:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 08:50:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 08:51:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 08:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:00:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:09:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 09:10:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 09:10:19 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-08-26 09:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:12:55 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:19:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:20:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-26 09:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:24:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:25:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 09:31:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 09:35:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:35:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:35:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:35:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:35:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 09:35:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:35:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 09:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:40:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 09:40:03 --> Could not find the language line "products"
ERROR - 2023-08-26 09:40:36 --> Could not find the language line "products"
ERROR - 2023-08-26 09:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:45:28 --> Could not find the language line "products"
ERROR - 2023-08-26 09:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 09:51:00 --> Could not find the language line "products"
ERROR - 2023-08-26 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:04:00 --> Could not find the language line "products"
ERROR - 2023-08-26 10:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:05:44 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-08-26 10:06:03 --> Could not find the language line "products"
ERROR - 2023-08-26 10:07:34 --> Could not find the language line "products"
ERROR - 2023-08-26 10:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:09:41 --> Could not find the language line "products"
ERROR - 2023-08-26 10:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:12:25 --> Could not find the language line "products"
ERROR - 2023-08-26 10:17:01 --> Could not find the language line "products"
ERROR - 2023-08-26 10:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:24:21 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:24:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:28:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:28:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:33:34 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:33:37 --> 404 Page Not Found: Env/index
ERROR - 2023-08-26 10:33:39 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:33:44 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:33:46 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:35:34 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:40:47 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:41:24 --> Could not find the language line "products"
ERROR - 2023-08-26 10:41:55 --> Could not find the language line "products"
ERROR - 2023-08-26 10:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:44:56 --> Could not find the language line "products"
ERROR - 2023-08-26 10:45:29 --> Could not find the language line "products"
ERROR - 2023-08-26 10:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:46:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:47:41 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:54:53 --> Could not find the language line "products"
ERROR - 2023-08-26 10:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:55:25 --> Could not find the language line "products"
ERROR - 2023-08-26 10:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:57:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:58:18 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:58:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 10:59:06 --> Could not find the language line "Home"
ERROR - 2023-08-26 10:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 10:59:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 11:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:05:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:05:38 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-26 11:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 11:07:14 --> Could not find the language line "products"
ERROR - 2023-08-26 11:07:46 --> Could not find the language line "products"
ERROR - 2023-08-26 11:16:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 11:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 11:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 11:24:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:26:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:54:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 11:54:39 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-26 11:59:09 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:05:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:18:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 12:18:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:27:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:18 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 12:27:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:27:32 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-26 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:41:41 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:41:49 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-26 12:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:47:06 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:49:26 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:52:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 12:59:32 --> Could not find the language line "Home"
ERROR - 2023-08-26 12:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:09:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 13:16:05 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:22:52 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:28:27 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:28:27 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:28:27 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:28:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:33:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:37:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:37:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:41:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:42:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:44:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:44:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 13:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:54:40 --> Could not find the language line "Home"
ERROR - 2023-08-26 13:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 13:57:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 13:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 13:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:00:59 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:03:09 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:03:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 14:03:11 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-26 14:03:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:03:21 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-26 14:03:21 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-26 14:03:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:03:22 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-08-26 14:03:23 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-08-26 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:03:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:09:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 14:11:36 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:12:34 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:12:52 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:13:05 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:13:06 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:23:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-26 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:47:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 14:53:26 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:54:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:55:23 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:55:27 --> Could not find the language line "Home"
ERROR - 2023-08-26 14:56:07 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:04:53 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:07:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 15:21:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:35:15 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:35:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 15:38:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:38:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:38:39 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:39:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:40:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:41:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:42:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:42:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 15:42:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:43:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:43:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:43:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:43:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-26 15:43:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:43:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:43:25 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:43:26 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:44:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:44:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 15:44:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:45:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 15:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:00:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:02:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:16:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:16:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:18:32 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:20:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:22:54 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:23:40 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:37:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:38:21 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:38:45 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:39:23 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:41:04 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:41:51 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 16:44:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:45:04 --> Could not find the language line "Home"
ERROR - 2023-08-26 16:46:07 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:07:44 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:10:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:10:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:12:07 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:12:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:12:33 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:12:41 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 17:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 17:16:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:16:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 17:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 17:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 17:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 17:17:35 --> Could not find the language line "Perfume"
ERROR - 2023-08-26 17:17:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-26 17:18:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-26 17:18:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:21:48 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:34:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 17:41:05 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:41:52 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:51:40 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:53:58 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:54:04 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:54:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:59:36 --> Could not find the language line "Home"
ERROR - 2023-08-26 17:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:00:39 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:03:15 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:08:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 18:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 18:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:22:26 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:23:51 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 18:37:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 18:37:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 18:37:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 18:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 18:37:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 18:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 18:37:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 18:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 18:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 18:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 18:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:55:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 18:59:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:03:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:07:33 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:13:03 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:15:00 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:32:37 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:33:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:36:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:39:35 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:40:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:41:06 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:46:33 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:51:21 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:52:56 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:54:10 --> Could not find the language line "Home"
ERROR - 2023-08-26 19:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 19:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:06:10 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:08:54 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:23:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:42:45 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:51:55 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:52:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:53:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:53:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:54:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:55:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 20:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:55:17 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:56:42 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:56:57 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:58:01 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 20:59:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 20:59:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 20:59:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:00:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 21:00:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-26 21:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 21:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 21:02:29 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 21:03:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:03:22 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:09:45 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 21:11:14 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:11:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:12:44 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:13:08 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:16:38 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:31:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-26 21:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-26 21:35:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 21:53:40 --> Could not find the language line "Home"
ERROR - 2023-08-26 21:55:12 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:00:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 22:02:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 22:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 22:16:49 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 22:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 22:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 22:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 22:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-26 22:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 22:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 22:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 22:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 22:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-26 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:35:48 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:35:48 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:40:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-26 22:50:21 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:50:31 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 22:59:28 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:02:26 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:02:51 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 23:04:09 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 23:05:15 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 23:05:32 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-26 23:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 23:08:44 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:10:04 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:13:51 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:15:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-26 23:15:30 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:22:20 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:26:09 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-26 23:27:55 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-26 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-26 23:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
