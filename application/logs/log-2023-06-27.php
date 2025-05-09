<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-27 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:02:23 --> Could not find the language line "products"
ERROR - 2023-06-27 00:17:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:34:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:39:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 00:42:27 --> Could not find the language line "Home"
ERROR - 2023-06-27 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 01:05:22 --> Could not find the language line "Home"
ERROR - 2023-06-27 01:07:31 --> Could not find the language line "products"
ERROR - 2023-06-27 01:09:34 --> Could not find the language line "products"
ERROR - 2023-06-27 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 01:37:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 02:25:48 --> Could not find the language line "Home"
ERROR - 2023-06-27 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 02:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-27 02:47:45 --> Could not find the language line "products"
ERROR - 2023-06-27 02:54:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 03:00:38 --> Could not find the language line "products"
ERROR - 2023-06-27 03:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 03:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 03:34:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 03:39:39 --> Could not find the language line "products"
ERROR - 2023-06-27 03:45:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:01:54 --> Could not find the language line "products"
ERROR - 2023-06-27 04:07:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 04:07:54 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:08:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 04:09:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 04:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:10:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-27 04:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 04:10:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:10:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:11:18 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 04:15:50 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:16:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:17:52 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:25:40 --> Could not find the language line "Other"
ERROR - 2023-06-27 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:32:30 --> Could not find the language line "products"
ERROR - 2023-06-27 04:33:48 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:34:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:36:08 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:39:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:41:55 --> Could not find the language line "products"
ERROR - 2023-06-27 04:44:59 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:48:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:48:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:49:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 04:49:46 --> Could not find the language line "Home"
ERROR - 2023-06-27 04:51:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:05:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:12:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:18:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 05:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:32:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:33:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:35:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:40:44 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:41:05 --> Could not find the language line "products"
ERROR - 2023-06-27 05:42:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:43:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:45:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:45:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:46:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 05:52:56 --> Could not find the language line "products"
ERROR - 2023-06-27 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:04:19 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 06:08:21 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:10:00 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 06:10:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 06:10:38 --> Could not find the language line "Other"
ERROR - 2023-06-27 06:17:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:17:52 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:19:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:20:39 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:21:39 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:22:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:24:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:27:03 --> Could not find the language line "products"
ERROR - 2023-06-27 06:30:08 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:33:05 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:34:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:38:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:38:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:39:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:47:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:48:35 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:51:58 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:52:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:55:58 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:56:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 06:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 06:57:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 06:57:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 06:57:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 06:57:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 06:57:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 06:57:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 06:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 06:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 06:57:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 06:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 06:57:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:58:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:58:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:59:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 06:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:01:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 07:01:57 --> Could not find the language line "products"
ERROR - 2023-06-27 07:02:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 07:02:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 07:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:05:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:05:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:05:27 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:06:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 07:06:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 07:06:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 07:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:09:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:09:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:09:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:11:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:12:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:17:00 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:19:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:20:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 07:20:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 07:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 07:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-27 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:32:08 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:35:56 --> Could not find the language line "products"
ERROR - 2023-06-27 07:37:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:39:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 07:39:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 07:40:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:40:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:44:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:48:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:54:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:55:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:57:03 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 07:59:05 --> Could not find the language line "Home"
ERROR - 2023-06-27 07:59:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:04:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:09:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 08:09:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 08:10:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:13:14 --> Could not find the language line "products"
ERROR - 2023-06-27 08:15:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:16:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:17:39 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:20:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 08:20:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 08:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:23:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:24:08 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:28:40 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:32:18 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:37:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 08:37:48 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:39:37 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:50:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 08:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 08:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 08:53:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 08:53:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 08:57:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:58:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 08:58:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:03:09 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 09:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:13:48 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:17:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:18:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:28:03 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:31:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:32:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:32:50 --> Could not find the language line "products"
ERROR - 2023-06-27 09:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:41:08 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:42:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:43:55 --> Could not find the language line "products"
ERROR - 2023-06-27 09:43:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:44:19 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:45:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:46:33 --> Could not find the language line "Perfume"
ERROR - 2023-06-27 09:48:28 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 09:53:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 09:53:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 09:55:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 09:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 09:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 09:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 09:56:28 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:56:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 09:57:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:00:33 --> Could not find the language line "products"
ERROR - 2023-06-27 10:00:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 10:00:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 10:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:04:39 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:04:50 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:06:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 10:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:06:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 10:06:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 10:06:37 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:08:51 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 10:08:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:08:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:09:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 10:11:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 10:14:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:15:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:19:29 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:20:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:24:40 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:25:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:25:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:25:30 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:26:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 10:26:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 10:28:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 10:28:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 10:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:31:46 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:33:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:33:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:33:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:33:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 10:34:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 10:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:35:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 10:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:36:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 10:38:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-06-27 10:39:20 --> Could not find the language line "products"
ERROR - 2023-06-27 10:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:41:44 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:43:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:45:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:49:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 10:49:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 10:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:53:45 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:54:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 10:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 10:59:28 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:00:14 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-27 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 11:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 11:01:21 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:02:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 11:03:42 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:05:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 11:05:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 11:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 11:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:08:40 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:08:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:12:04 --> Could not find the language line "products"
ERROR - 2023-06-27 11:12:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:18:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-27 11:24:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:24:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:24:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 11:24:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 11:24:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 11:24:11 --> 404 Page Not Found: Home/accounts
ERROR - 2023-06-27 11:25:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:25:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:25:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:30:27 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:31:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:34:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:34:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:34:56 --> Could not find the language line "Bracelets"
ERROR - 2023-06-27 11:35:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:35:10 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:35:27 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:35:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:35:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 11:36:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 11:36:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:37:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:39:18 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 11:40:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:40:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:45:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:48:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 11:48:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:53:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:53:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:53:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:53:29 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-27 11:53:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-27 11:56:23 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:58:37 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:58:37 --> Could not find the language line "Home"
ERROR - 2023-06-27 11:59:23 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:00:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:06:35 --> Could not find the language line "products"
ERROR - 2023-06-27 12:11:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:27:42 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 12:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 12:30:00 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:30:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:36:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:41:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:42:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 12:42:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 12:49:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 12:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 12:59:39 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:01:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-27 13:02:03 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:06:30 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:08:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-27 13:08:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 13:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 13:09:29 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:09:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:10:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:12:58 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:14:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:14:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-27 13:17:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:22:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:28:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:31:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 13:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:41:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 13:41:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 13:42:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:42:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:47:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:50:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:51:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:56:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 13:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 13:58:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 13:58:21 --> Could not find the language line "Home"
ERROR - 2023-06-27 13:58:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 13:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:00:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:02:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:02:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:03:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:03:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:04:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:04:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:04:56 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:04:59 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:05:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:05:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:05:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:11:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:11:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:13:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 14:13:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:13:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:13:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 14:13:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-27 14:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:16:48 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:20:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:33:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-27 14:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-27 14:33:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:38:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:38:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:39:18 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:40:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:40:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:40:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 14:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:44:35 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:48:23 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:50:40 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:50:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 14:50:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 14:54:50 --> Could not find the language line "Home"
ERROR - 2023-06-27 14:57:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:00:34 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 15:01:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:02:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:02:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:02:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 15:05:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-27 15:06:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:06:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:06:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:07:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:08:52 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:12:52 --> Could not find the language line "products"
ERROR - 2023-06-27 15:14:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:17:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:22:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:24:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:24:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:24:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:25:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:29:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:30:19 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:30:19 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:41:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:41:25 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-06-27 15:41:26 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-06-27 15:41:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:41:26 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-06-27 15:41:26 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-06-27 15:41:27 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-06-27 15:41:28 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-06-27 15:41:28 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-06-27 15:41:28 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-06-27 15:41:28 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-06-27 15:47:46 --> Could not find the language line "Home"
ERROR - 2023-06-27 15:53:03 --> Could not find the language line "products"
ERROR - 2023-06-27 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:00:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:02:21 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:02:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:02:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:11:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:12:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:13:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:20:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 16:22:29 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:24:20 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-27 16:24:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-27 16:24:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-27 16:24:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-27 16:24:54 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:28:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:29:35 --> Could not find the language line "products"
ERROR - 2023-06-27 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:32:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:32:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:40:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:40:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:44:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:47:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:56:22 --> Could not find the language line "Home"
ERROR - 2023-06-27 16:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 16:59:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:00:19 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:06:55 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:07:54 --> Could not find the language line "products"
ERROR - 2023-06-27 17:10:27 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:11:06 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:13:21 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 17:13:29 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:14:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:18:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:10 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:37 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:20:47 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:24:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:25:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:29:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:32:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:32:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:34:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:34:36 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 17:37:25 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:44:45 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:52:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:52:03 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:53:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:55:30 --> Could not find the language line "Home"
ERROR - 2023-06-27 17:57:22 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:03:26 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:10:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-27 18:14:58 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 18:15:41 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:16:16 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:16:50 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:17:24 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:21:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:23:28 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:26:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:26:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:27:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:28:20 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:28:57 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:31:59 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:39:02 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:43:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:48:38 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:49:40 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 18:50:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:50:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:50:53 --> Could not find the language line "Home"
ERROR - 2023-06-27 18:54:07 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:09:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 19:11:42 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:14:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-27 19:14:32 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:18:38 --> Could not find the language line "products"
ERROR - 2023-06-27 19:30:07 --> Could not find the language line "Home"
ERROR - 2023-06-27 19:34:46 --> Could not find the language line "Socks"
ERROR - 2023-06-27 19:38:05 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-27 19:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 19:54:26 --> Could not find the language line "clothing"
ERROR - 2023-06-27 19:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 19:55:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-27 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 20:05:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:08:43 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:08:45 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 20:12:03 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:12:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:19:02 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 20:21:23 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:22:13 --> Could not find the language line "products"
ERROR - 2023-06-27 20:27:58 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 20:41:46 --> Could not find the language line "Home"
ERROR - 2023-06-27 20:48:00 --> Could not find the language line "products"
ERROR - 2023-06-27 20:48:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 20:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 20:55:04 --> Could not find the language line "products"
ERROR - 2023-06-27 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:00:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 21:06:01 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:07:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-27 21:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 21:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 21:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 21:13:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:14:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:14:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:14:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:14:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 21:15:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:15:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 21:15:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:15:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:16:16 --> Could not find the language line "products"
ERROR - 2023-06-27 21:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 21:16:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:17:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:18:47 --> Could not find the language line "Other"
ERROR - 2023-06-27 21:19:03 --> Could not find the language line "Other"
ERROR - 2023-06-27 21:19:22 --> Could not find the language line "Other"
ERROR - 2023-06-27 21:20:01 --> Could not find the language line "Perfume"
ERROR - 2023-06-27 21:20:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-27 21:20:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-27 21:20:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:20:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 21:20:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:20:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:20:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-27 21:21:04 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 21:33:57 --> 404 Page Not Found: Products/products
ERROR - 2023-06-27 21:55:09 --> Could not find the language line "products"
ERROR - 2023-06-27 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-27 22:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 22:03:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 22:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 22:03:46 --> Could not find the language line "Disclaimer"
ERROR - 2023-06-27 22:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 22:03:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-27 22:06:27 --> 404 Page Not Found: Public/plugins
ERROR - 2023-06-27 22:24:31 --> Could not find the language line "products"
ERROR - 2023-06-27 22:29:28 --> Could not find the language line "products"
ERROR - 2023-06-27 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-27 22:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 22:44:19 --> Could not find the language line "products"
ERROR - 2023-06-27 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-27 23:00:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 23:00:57 --> Could not find the language line "0"
ERROR - 2023-06-27 23:04:33 --> Could not find the language line "Home"
ERROR - 2023-06-27 23:30:29 --> Could not find the language line "Home"
ERROR - 2023-06-27 23:43:45 --> Could not find the language line "products"
ERROR - 2023-06-27 23:44:09 --> Could not find the language line "Home"
ERROR - 2023-06-27 23:50:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 23:54:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-27 23:56:31 --> Could not find the language line "Home"
ERROR - 2023-06-27 23:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 23:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 23:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-27 23:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-27 23:58:54 --> 404 Page Not Found: Products/products
