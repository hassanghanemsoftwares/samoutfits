<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-12 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-12 00:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 00:27:31 --> 404 Page Not Found: Simplephp/index
ERROR - 2023-09-12 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-12 00:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 01:00:28 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:05:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 01:05:57 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:21:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:47:32 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:52:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 01:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 01:52:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 01:53:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 01:58:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 02:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-12 02:10:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 02:30:25 --> Could not find the language line "Home"
ERROR - 2023-09-12 02:43:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 02:43:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:00:27 --> Could not find the language line "Perfume"
ERROR - 2023-09-12 03:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 03:13:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 03:13:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 03:18:29 --> Could not find the language line "Crocs"
ERROR - 2023-09-12 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 03:44:57 --> Could not find the language line "Home"
ERROR - 2023-09-12 04:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-12 04:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 04:54:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:00:47 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:03:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 05:14:42 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:16:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:24:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 05:28:48 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 05:48:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 06:05:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:09:06 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 06:09:27 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 06:46:27 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:48:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 06:51:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:04:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 07:04:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-12 07:05:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 07:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-12 07:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:17:33 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:18:25 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:25:55 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:50:21 --> Could not find the language line "Perfume"
ERROR - 2023-09-12 07:51:47 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:51:52 --> Could not find the language line "assets"
ERROR - 2023-09-12 07:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-12 07:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 07:56:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 07:56:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-12 07:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 07:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-12 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 08:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:05:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 08:08:24 --> Could not find the language line "Home"
ERROR - 2023-09-12 08:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:23:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 08:23:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-12 08:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 08:31:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 08:31:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 08:31:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 08:36:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 08:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-12 08:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 08:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:00:46 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:00:53 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-12 09:05:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 09:05:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 09:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:05:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 09:06:51 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:09:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 09:09:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 09:09:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 09:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:14:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 09:16:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 09:16:43 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:26:43 --> Could not find the language line "Other"
ERROR - 2023-09-12 09:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:27:21 --> Could not find the language line "Other"
ERROR - 2023-09-12 09:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:30:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-12 09:30:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-12 09:30:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:30:33 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-12 09:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:39:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:39:32 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-09-12 09:39:40 --> Could not find the language line "Home"
ERROR - 2023-09-12 09:40:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 09:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:43:22 --> Could not find the language line "Perfume"
ERROR - 2023-09-12 09:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:53:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 09:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 10:03:45 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-12 10:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:26:11 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-09-12 10:26:11 --> 404 Page Not Found: Feed/index
ERROR - 2023-09-12 10:26:11 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-12 10:26:11 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-12 10:26:12 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-12 10:27:26 --> Could not find the language line "Home"
ERROR - 2023-09-12 10:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:28:46 --> Could not find the language line "Home"
ERROR - 2023-09-12 10:29:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 10:29:21 --> Could not find the language line "Home"
ERROR - 2023-09-12 10:29:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 10:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:32:08 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-12 10:33:46 --> Could not find the language line "Other"
ERROR - 2023-09-12 10:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:51:08 --> Could not find the language line "Socks"
ERROR - 2023-09-12 10:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 10:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:01:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:06:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:10:44 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:10:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 11:10:54 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:34:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-12 11:39:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 11:40:06 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 11:40:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 11:40:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 11:41:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 11:41:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 11:42:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 11:45:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 11:47:08 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-12 11:48:35 --> Could not find the language line "Home"
ERROR - 2023-09-12 11:56:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 11:56:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:06:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:08:47 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:08:57 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:11:54 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:12:45 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:13:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:14:05 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:15:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:16:27 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:16:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 12:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 12:55:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 12:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 12:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 13:06:39 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:09:27 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:11:57 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:14:40 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:16:08 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:16:53 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:17:41 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:18:03 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:20:41 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:20:42 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:28:05 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:33:45 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:39:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:45:07 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 13:49:20 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:49:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 13:50:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 13:50:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 13:52:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 13:59:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 14:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-12 14:21:27 --> Could not find the language line "Home"
ERROR - 2023-09-12 14:26:15 --> Could not find the language line "Perfume"
ERROR - 2023-09-12 14:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 14:34:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 14:43:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 14:50:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 15:01:58 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 15:10:46 --> Could not find the language line "Home"
ERROR - 2023-09-12 15:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:16:08 --> Could not find the language line "Home"
ERROR - 2023-09-12 15:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 15:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:46:20 --> Could not find the language line "Socks"
ERROR - 2023-09-12 15:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:47:41 --> Could not find the language line "Socks"
ERROR - 2023-09-12 15:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 15:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:02:38 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:15:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 16:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:26:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 16:34:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 16:42:43 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:47:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 16:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:55:28 --> Could not find the language line "Home"
ERROR - 2023-09-12 16:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 16:58:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:00:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 17:11:17 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-09-12 17:11:18 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-09-12 17:11:19 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:15:43 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:17:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 17:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:28:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 17:29:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-12 17:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:36:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 17:43:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 17:44:41 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-12 17:49:39 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-12 17:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:37 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:37 --> Could not find the language line "Home"
ERROR - 2023-09-12 17:51:50 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:00:07 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:06:35 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:11:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-12 18:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 18:26:34 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:26:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 18:26:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 18:26:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 18:26:36 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-12 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:31:46 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:41:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:41:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 18:41:42 --> Could not find the language line "Home"
ERROR - 2023-09-12 18:42:19 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:02:58 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:02:58 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:02:58 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:02:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 19:07:24 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:07:56 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:08:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 19:08:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:17:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:17:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:18:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 19:18:33 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:18:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:19:36 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:19:41 --> 404 Page Not Found: Wp/index
ERROR - 2023-09-12 19:19:44 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-09-12 19:19:50 --> 404 Page Not Found: WP/index
ERROR - 2023-09-12 19:19:52 --> 404 Page Not Found: Shop/index
ERROR - 2023-09-12 19:19:57 --> 404 Page Not Found: STORE/index
ERROR - 2023-09-12 19:20:00 --> 404 Page Not Found: Forum/index
ERROR - 2023-09-12 19:20:04 --> 404 Page Not Found: FORUM/index
ERROR - 2023-09-12 19:20:07 --> 404 Page Not Found: Store/index
ERROR - 2023-09-12 19:20:12 --> 404 Page Not Found: SHOP/index
ERROR - 2023-09-12 19:20:13 --> 404 Page Not Found: WordPress/index
ERROR - 2023-09-12 19:20:18 --> 404 Page Not Found: WORDPRESS/index
ERROR - 2023-09-12 19:20:20 --> 404 Page Not Found: Blog/index
ERROR - 2023-09-12 19:20:24 --> 404 Page Not Found: New/index
ERROR - 2023-09-12 19:20:30 --> 404 Page Not Found: Demo/index
ERROR - 2023-09-12 19:20:34 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-12 19:20:38 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-12 19:20:40 --> 404 Page Not Found: BACKUP/index
ERROR - 2023-09-12 19:20:47 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:20:54 --> 404 Page Not Found: 2020/index
ERROR - 2023-09-12 19:20:58 --> 404 Page Not Found: 2019/index
ERROR - 2023-09-12 19:21:02 --> 404 Page Not Found: Site/index
ERROR - 2023-09-12 19:21:05 --> 404 Page Not Found: 2018/index
ERROR - 2023-09-12 19:21:13 --> 404 Page Not Found: 2017/index
ERROR - 2023-09-12 19:21:16 --> 404 Page Not Found: 2016/index
ERROR - 2023-09-12 19:21:21 --> 404 Page Not Found: 2015/index
ERROR - 2023-09-12 19:21:24 --> 404 Page Not Found: 2014/index
ERROR - 2023-09-12 19:21:28 --> 404 Page Not Found: 2013/index
ERROR - 2023-09-12 19:21:32 --> 404 Page Not Found: 2012/index
ERROR - 2023-09-12 19:21:36 --> 404 Page Not Found: 2010/index
ERROR - 2023-09-12 19:21:39 --> 404 Page Not Found: 2009/index
ERROR - 2023-09-12 19:21:42 --> 404 Page Not Found: BLOG/index
ERROR - 2023-09-12 19:30:30 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:31:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 19:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 19:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-12 19:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 19:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 19:57:03 --> Could not find the language line "Home"
ERROR - 2023-09-12 19:58:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:13:51 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:18:53 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:22:44 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:23:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:23:37 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:23:52 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:24:17 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:26:10 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:26:46 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:27:03 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:27:58 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:30:41 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:31:52 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:39:35 --> Could not find the language line "Home"
ERROR - 2023-09-12 20:43:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 20:43:52 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:44:04 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:44:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-12 20:44:28 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:44:31 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:56:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-12 20:56:39 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:56:45 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:56:50 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 20:58:11 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 20:58:27 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 21:00:10 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-12 21:00:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 21:00:37 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 21:00:50 --> Could not find the language line "Bracelets"
ERROR - 2023-09-12 21:00:54 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 21:01:07 --> Could not find the language line "Hair%20"
ERROR - 2023-09-12 21:03:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 21:15:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 21:17:44 --> Could not find the language line "Home"
ERROR - 2023-09-12 21:24:03 --> Could not find the language line "Home"
ERROR - 2023-09-12 21:28:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-12 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-12 21:43:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 21:43:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 21:44:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-12 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-12 22:29:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:29:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-12 22:30:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:30:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:30:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:30:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-12 22:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-12 22:53:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-12 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:04:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:04:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:04:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:04:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:04:59 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:05:00 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:35:24 --> Could not find the language line "Other"
ERROR - 2023-09-12 23:41:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-12 23:43:04 --> Could not find the language line "Home"
ERROR - 2023-09-12 23:43:40 --> Could not find the language line "Home"
