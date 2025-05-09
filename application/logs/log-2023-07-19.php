<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-19 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 00:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 00:51:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:06:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:27:42 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:30:39 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:30:56 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:31:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:32:07 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:32:12 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 01:32:21 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 01:32:27 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 01:32:29 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:32:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 01:33:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:33:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:33:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:33:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 01:34:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:34:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 01:38:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 01:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 02:42:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 02:51:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 02:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 02:59:01 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:08:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 03:12:08 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:13:26 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:17:53 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:18:09 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:18:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 04:13:55 --> Could not find the language line "Home"
ERROR - 2023-07-19 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:12:57 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:13:04 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:25:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:25:56 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:25:57 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-19 05:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 05:43:47 --> Could not find the language line "Home"
ERROR - 2023-07-19 05:49:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 05:52:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-19 05:56:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-19 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:10:10 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:13:58 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:18:47 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:18:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 06:19:30 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:19:32 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:19:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 06:20:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 06:20:04 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:20:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:20:32 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:21:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:22:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:22:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 06:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 06:22:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:24:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:24:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:24:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:25:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:28:02 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:28:35 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:29:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:29:39 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 06:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:37:55 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:38:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:38:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:39:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 06:42:20 --> Could not find the language line "Home"
ERROR - 2023-07-19 06:46:36 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:02:51 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:03:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 07:05:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:07:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 07:07:47 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:10:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:10:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:10:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:10:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 07:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:12:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:13:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 07:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 07:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 07:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 07:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 07:13:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 07:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:23:29 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:25:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 07:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 07:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:50:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:50:27 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:50:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:51:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:53:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:53:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:54:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:54:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:55:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:57:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 07:57:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:57:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 07:58:03 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:58:15 --> Could not find the language line "Socks"
ERROR - 2023-07-19 07:58:27 --> Could not find the language line "Home"
ERROR - 2023-07-19 07:58:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:58:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:59:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:59:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 07:59:04 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:00:31 --> Could not find the language line "Other"
ERROR - 2023-07-19 08:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:00:48 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:00:57 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 08:01:10 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 08:01:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:01:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:02:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:02:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:02:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:06:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:19:56 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:20:09 --> Could not find the language line "Socks"
ERROR - 2023-07-19 08:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:22:33 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 08:26:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:27:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:27:09 --> Could not find the language line "assets"
ERROR - 2023-07-19 08:27:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:28:28 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:29:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:29:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:32:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:39:38 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:39:57 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:47:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:47:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:47:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:17 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:48:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 08:48:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 08:49:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 08:49:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 08:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:49:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-19 08:51:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:51:29 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:51:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 08:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:55:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:55:34 --> Could not find the language line "Home"
ERROR - 2023-07-19 08:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:56:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 08:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 08:56:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:00:34 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:04:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:04:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:04:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:07:07 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:24:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 09:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 09:24:54 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-07-19 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:33:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 09:39:09 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:39:20 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:39:28 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:39:36 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:40:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:40:41 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:43:05 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:43:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 09:43:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:44:28 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:45:02 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 09:45:29 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:46:05 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:46:23 --> Could not find the language line "Socks"
ERROR - 2023-07-19 09:46:50 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:46:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 09:46:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 09:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:47:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:48:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:48:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:49:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 09:49:42 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:50:20 --> Could not find the language line "assets"
ERROR - 2023-07-19 09:50:21 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:50:40 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:51:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:51:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:51:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:52:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:53:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:54:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:54:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:55:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:55:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:55:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:55:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 09:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 09:56:22 --> Could not find the language line "Home"
ERROR - 2023-07-19 09:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:00:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 10:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:06:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:10:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:14:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:15:36 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:16:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:17:02 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:17:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:18:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:18:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:21:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:22:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:23:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:24:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:25:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:26:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 10:26:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 10:27:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 10:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 10:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:28:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:29:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:29:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:30:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:30:25 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:30:26 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:33:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:33:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:34:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:34:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 10:34:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-19 10:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:35:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:36:08 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:37:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:37:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:38:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:40:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:40:44 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:41:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:41:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:44:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:45:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:46:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 10:47:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:47:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 10:47:37 --> Could not find the language line "Home"
ERROR - 2023-07-19 10:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 10:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 10:49:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 10:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 10:56:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 10:56:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:19:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 11:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:27:19 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:27:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 11:27:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:27:49 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:27:59 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 11:28:02 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 11:40:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 11:41:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-19 11:41:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-19 11:41:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-19 11:41:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-19 11:47:01 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:00:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:16:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 12:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 12:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 12:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:23:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 12:23:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 12:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:37:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:38:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:40:52 --> Could not find the language line "Home"
ERROR - 2023-07-19 12:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 12:46:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 12:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 12:49:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-19 12:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:04:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 13:04:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-19 13:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:13:09 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:27:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:27:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:28:31 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:29:49 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:31:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 13:32:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 13:32:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 13:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:32:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 13:32:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-19 13:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 13:44:47 --> Could not find the language line "Home"
ERROR - 2023-07-19 13:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 13:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 13:52:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:11:34 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:29:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 14:29:28 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:29:57 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:30:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:30:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:30:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:31:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:31:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:31:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 14:31:31 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:31:38 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 14:31:52 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 14:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:32:46 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 14:32:48 --> Could not find the language line "Bracelets"
ERROR - 2023-07-19 14:32:51 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:33:01 --> Could not find the language line "Perfume"
ERROR - 2023-07-19 14:33:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:33:21 --> Could not find the language line "Socks"
ERROR - 2023-07-19 14:33:25 --> Could not find the language line "Socks"
ERROR - 2023-07-19 14:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:33:57 --> Could not find the language line "Socks"
ERROR - 2023-07-19 14:33:59 --> Could not find the language line "Socks"
ERROR - 2023-07-19 14:34:08 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 14:46:24 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:47:07 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:49:13 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-19 14:49:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 14:50:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 14:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 14:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 14:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 14:52:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:00:57 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:01:40 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:21:22 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 15:28:53 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 15:36:26 --> Could not find the language line "Home"
ERROR - 2023-07-19 15:47:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:19:37 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 16:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 16:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 16:23:33 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:24:05 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:24:07 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-19 16:24:08 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-07-19 16:24:09 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-07-19 16:24:10 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-07-19 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:32:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:32:16 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:34:17 --> Could not find the language line "Home"
ERROR - 2023-07-19 16:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 16:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:04:09 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:04:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:05:30 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:06:41 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:20:35 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-19 17:21:01 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:21:07 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:32:44 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:37:46 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:38:03 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:38:17 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:38:43 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:38:52 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:40:04 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:40:26 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:40:38 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:40:50 --> Could not find the language line "Other"
ERROR - 2023-07-19 17:41:05 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:41:50 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:42:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 17:42:31 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:43:02 --> Could not find the language line "Home"
ERROR - 2023-07-19 17:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 17:56:40 --> Could not find the language line "Home"
ERROR - 2023-07-19 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 18:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:05:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-19 18:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:07:33 --> Could not find the language line "Home"
ERROR - 2023-07-19 18:08:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 18:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 18:20:34 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-07-19 18:25:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 18:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:28:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 18:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 18:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 18:34:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 18:34:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 18:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 18:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:09:10 --> Could not find the language line "Socks"
ERROR - 2023-07-19 19:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:10:23 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:12:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-19 19:12:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-19 19:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:28:17 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:40:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-19 19:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:45:22 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:46:06 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:46:19 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:46:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 19:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 19:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:47:29 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:53:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 19:53:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 19:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 19:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:53:32 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:33 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:34 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:35 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:53:45 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 19:53:55 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:53:58 --> Could not find the language line "Home"
ERROR - 2023-07-19 19:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:00:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 20:00:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-19 20:15:30 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:15:32 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 20:15:58 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 20:37:01 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:46:41 --> Could not find the language line "Home"
ERROR - 2023-07-19 20:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 20:53:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-19 20:57:36 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:01:40 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:10:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 21:25:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:30:36 --> Could not find the language line "Socks"
ERROR - 2023-07-19 21:39:47 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 21:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 21:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 21:53:23 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 21:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 21:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 21:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 21:56:17 --> Could not find the language line "Home"
ERROR - 2023-07-19 21:56:33 --> Could not find the language line "Perfume"
ERROR - 2023-07-19 21:59:55 --> Could not find the language line "Perfume"
ERROR - 2023-07-19 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-19 22:16:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-19 22:23:41 --> Could not find the language line "Home"
ERROR - 2023-07-19 22:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-19 22:36:20 --> Could not find the language line "Home"
ERROR - 2023-07-19 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-19 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-19 23:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-19 23:52:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-19 23:54:00 --> Could not find the language line "Home"
