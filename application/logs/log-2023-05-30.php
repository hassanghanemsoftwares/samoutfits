<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-30 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 00:21:25 --> Could not find the language line "Home"
ERROR - 2023-05-30 00:22:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 00:22:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 00:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 00:23:05 --> Could not find the language line "Home"
ERROR - 2023-05-30 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 00:41:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 01:14:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 01:16:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 01:58:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:26:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:26:54 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:33:49 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:54:07 --> Could not find the language line "Home"
ERROR - 2023-05-30 02:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:04:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 03:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:17:22 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:18:16 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:42:53 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:43:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:47:50 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:47:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 03:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 03:58:27 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:03:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:03:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:11:30 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-05-30 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:55:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:56:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 04:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 04:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 04:57:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 04:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 04:57:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 04:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:00:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 05:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 05:00:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 05:00:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 05:00:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:01:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:01:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:03:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:03:46 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:04:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:05:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:23:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:36:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:36:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:36:46 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:36:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:37:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:37:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:37:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 05:37:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 05:38:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 05:38:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 05:38:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 05:38:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 05:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:48:05 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:48:15 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:49:00 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:50:51 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:51:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:51:44 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:44 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:51:46 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:52:26 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:52:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:54:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:55:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 05:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:56:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:57:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:57:27 --> Could not find the language line "Home"
ERROR - 2023-05-30 05:57:35 --> Could not find the language line "Perfume"
ERROR - 2023-05-30 05:57:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:58:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 05:59:30 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:02:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:05:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:05:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:05:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:05:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:05:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:10:51 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:16:04 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:16:42 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:20:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:20:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:20:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:23:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 06:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:28:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:35:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:37:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 06:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 06:38:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 06:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:53:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:53:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 06:53:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 06:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 06:54:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 06:58:29 --> Could not find the language line "assets"
ERROR - 2023-05-30 06:58:29 --> Could not find the language line "assets"
ERROR - 2023-05-30 06:58:29 --> Could not find the language line "assets"
ERROR - 2023-05-30 06:58:29 --> Could not find the language line "assets"
ERROR - 2023-05-30 06:58:29 --> Could not find the language line "assets"
ERROR - 2023-05-30 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:01:38 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:01:53 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:02:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:02:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:03:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:04:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:04:48 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:08:01 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:08:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:08:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:08:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:12:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:13:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:17:41 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:29:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:30:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:31:16 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 07:31:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 07:31:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 07:31:18 --> 404 Page Not Found: Home/accounts
ERROR - 2023-05-30 07:31:18 --> 404 Page Not Found: Home/home
ERROR - 2023-05-30 07:33:02 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:43:56 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:47:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 07:47:46 --> 404 Page Not Found: Home/assets
ERROR - 2023-05-30 07:47:46 --> 404 Page Not Found: Home/assets
ERROR - 2023-05-30 07:47:46 --> 404 Page Not Found: Home/assets
ERROR - 2023-05-30 07:47:46 --> 404 Page Not Found: Home/assets
ERROR - 2023-05-30 07:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 07:48:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:01:48 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:02:08 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:02:08 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:04:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:05:59 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:06:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:06:21 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:06:44 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 08:07:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:09:28 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:10:28 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 08:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 08:19:10 --> Could not find the language line "Crocs"
ERROR - 2023-05-30 08:21:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:21:48 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:23:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 08:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 08:23:23 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-05-30 08:23:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 08:23:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 08:24:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 08:24:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 08:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 08:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:08:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:08:48 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:08:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 09:08:59 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 09:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:09:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 09:16:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:17:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 09:17:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 09:20:15 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:20:26 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:21:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 09:22:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:23:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:23:46 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:24:00 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:24:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:38:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:38:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:38:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:42:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:42:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:46:38 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:50:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 09:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 09:57:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:57:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:57:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:57:27 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 09:57:27 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 09:57:27 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 09:57:27 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-30 09:57:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 09:59:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 09:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:09:04 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:31:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 10:36:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:40:25 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:41:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:56:06 --> Could not find the language line "Home"
ERROR - 2023-05-30 10:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 10:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:02:39 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:03:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 11:19:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:29:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:40:48 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-30 11:40:48 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-05-30 11:40:51 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-05-30 11:43:47 --> Could not find the language line "Home"
ERROR - 2023-05-30 11:47:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 11:51:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:05:57 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:06:57 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:06:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:09:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 12:10:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 12:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:15:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:27:05 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 12:39:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:39:54 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:40:07 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:40:59 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:44:23 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:44:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:54:39 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:55:53 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:56:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:59:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:59:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 12:59:30 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:02:53 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:03:53 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:03:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:04:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:12:44 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 13:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:34:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:36:30 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:41:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 13:41:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 13:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 13:42:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 14:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:23:23 --> Could not find the language line "Home"
ERROR - 2023-05-30 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 14:32:01 --> Could not find the language line "hats"
ERROR - 2023-05-30 14:32:47 --> Could not find the language line "Bracelets"
ERROR - 2023-05-30 14:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 14:58:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:04:51 --> Could not find the language line "hats"
ERROR - 2023-05-30 15:04:51 --> Could not find the language line "hats"
ERROR - 2023-05-30 15:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:26:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:31:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 15:31:05 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:32:15 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:36:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:36:56 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:37:09 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-30 15:37:13 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-30 15:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:41:45 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:44:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:46:34 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:50:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 15:51:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:52:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:52:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 15:53:01 --> Could not find the language line "Bracelets"
ERROR - 2023-05-30 15:53:20 --> Could not find the language line "Perfume"
ERROR - 2023-05-30 15:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 15:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:02:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:05:18 --> Could not find the language line "hats"
ERROR - 2023-05-30 16:05:19 --> Could not find the language line "hats"
ERROR - 2023-05-30 16:05:49 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:06:28 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:07:57 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-05-30 16:08:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:08:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:08:28 --> Could not find the language line "hats"
ERROR - 2023-05-30 16:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:09:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:09:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:10:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:10:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:11:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:12:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:14:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:14:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:15:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:15:24 --> Could not find the language line "Perfume"
ERROR - 2023-05-30 16:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:15:37 --> Could not find the language line "Perfume"
ERROR - 2023-05-30 16:15:41 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:15:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 16:16:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 16:16:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 16:16:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-30 16:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 16:17:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 16:17:50 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:17:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:17:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:18:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:18:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:18:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:18:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 16:24:36 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:30:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 16:36:15 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:36:27 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:37:02 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:37:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 16:37:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:37:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 16:37:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:37:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:38:16 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:38:22 --> Could not find the language line "Socks"
ERROR - 2023-05-30 16:38:32 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:38:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 16:39:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:43:40 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:46:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:46:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:46:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:55:21 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-30 16:56:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 16:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 16:58:42 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:00:40 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:07:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:08:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:08:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:08:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:11:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 17:12:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:12:55 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:28:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 17:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:36:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 17:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 17:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 18:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 18:45:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 18:45:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 18:48:51 --> Could not find the language line "Home"
ERROR - 2023-05-30 18:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 18:59:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:04:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:04:36 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:05:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:13:21 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:17:11 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:17:15 --> Could not find the language line "Bracelets"
ERROR - 2023-05-30 19:17:29 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:17:36 --> Could not find the language line "Perfume"
ERROR - 2023-05-30 19:17:40 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:17:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 19:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:18:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-30 19:19:25 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:19:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 19:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:20:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 19:20:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 19:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 19:21:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 19:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:21:20 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:22:33 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:36:21 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:37:57 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:37:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 19:39:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:39:24 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:39:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 19:40:24 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:51:47 --> Could not find the language line "Home"
ERROR - 2023-05-30 19:53:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-30 19:56:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:03:30 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:04:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:14:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 20:14:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 20:14:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 20:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 20:26:51 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:26:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:26:52 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:27:02 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:42:34 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:42:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:42:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:46:26 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:51:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 20:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 20:51:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-30 20:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-30 20:58:37 --> Could not find the language line "Home"
ERROR - 2023-05-30 20:59:44 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:00:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:01:47 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:01:49 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:03:10 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:26:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 21:26:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-30 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:43:34 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:43:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-30 21:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 21:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 21:50:19 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 21:50:49 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:50:58 --> Could not find the language line "Home"
ERROR - 2023-05-30 21:57:04 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 22:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 22:14:39 --> 404 Page Not Found: Public/assets
ERROR - 2023-05-30 22:16:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 22:25:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-30 22:26:03 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 22:27:22 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 22:28:35 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:29:47 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-30 22:36:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-30 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-30 23:04:43 --> Could not find the language line "Home"
ERROR - 2023-05-30 23:30:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-30 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-30 23:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-30 23:46:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
