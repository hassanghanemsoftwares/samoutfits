<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-18 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-18 00:05:45 --> Could not find the language line "Perfume"
ERROR - 2023-07-18 00:11:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 00:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 00:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-18 00:58:56 --> Could not find the language line "Home"
ERROR - 2023-07-18 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 01:06:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 01:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 01:20:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 01:27:17 --> Could not find the language line "Crocs"
ERROR - 2023-07-18 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 01:46:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 02:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 02:06:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 02:07:09 --> Could not find the language line "Home"
ERROR - 2023-07-18 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 03:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 03:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 03:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 04:12:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 04:15:52 --> Could not find the language line "Home"
ERROR - 2023-07-18 04:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 04:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 04:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 04:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 04:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 04:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-18 05:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 05:09:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 05:12:06 --> Could not find the language line "Home"
ERROR - 2023-07-18 05:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 05:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 05:23:37 --> Could not find the language line "Home"
ERROR - 2023-07-18 05:23:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 05:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 05:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 05:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 05:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 05:51:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 05:51:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 05:58:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:03:30 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:07:31 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:09:28 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:11:33 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:13:40 --> Could not find the language line "assets"
ERROR - 2023-07-18 06:15:36 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:22:22 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:29:29 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:30:06 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:33:52 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:34:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:35:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:36:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:36:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:36:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:37:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:37:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:38:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 06:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 06:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:51:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:52:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:54:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 06:54:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 06:54:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 06:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 06:59:44 --> Could not find the language line "Home"
ERROR - 2023-07-18 06:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 07:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:00:05 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:00:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-18 07:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:00:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-18 07:01:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 07:01:28 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:02:01 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:02:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:02:23 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:02:53 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:03:10 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:04:08 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:05:20 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:06:54 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:11:21 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:14:17 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:22:24 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:23:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 07:24:43 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:25:19 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:30:38 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:33:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 07:44:42 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:44:52 --> Could not find the language line "Home"
ERROR - 2023-07-18 07:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:50:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-18 07:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 07:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:07:55 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:08:15 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-18 08:10:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:12:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:13:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:14:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 08:14:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 08:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:20:20 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:22:20 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:22:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:24:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 08:24:45 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:39:11 --> Could not find the language line "Bracelets"
ERROR - 2023-07-18 08:39:47 --> Could not find the language line "Bracelets"
ERROR - 2023-07-18 08:40:28 --> Could not find the language line "Bracelets"
ERROR - 2023-07-18 08:40:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:50:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:52:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-18 08:52:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-18 08:52:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-18 08:52:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-18 08:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:56:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 08:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 08:57:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 08:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:01:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:08:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 09:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 09:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:09:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:09:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 09:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 09:09:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:10:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 09:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 09:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:10:48 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:10:49 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:10:59 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:11:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:12:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-18 09:12:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-18 09:12:01 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-18 09:12:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-18 09:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:34:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 09:34:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `items`.`color` IN('White', 'Grey', 'Beige', 'Navy', 'Green')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-18 09:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:35:38 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:37:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-18 09:46:23 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:50:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:50:17 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:50:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 09:50:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `items`.`color` IN('Black', 'White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-18 09:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:53:53 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:54:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:55:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:55:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:55:49 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:57:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:57:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:57:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 09:57:24 --> Could not find the language line "Home"
ERROR - 2023-07-18 09:57:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 09:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 09:59:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 10:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:06:51 --> Could not find the language line "Home"
ERROR - 2023-07-18 10:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:09:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:18:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:18:01 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-18 10:18:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-18 10:18:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-18 10:18:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-18 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 10:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:41:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 10:41:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:44:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:44:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:46:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 10:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:55:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 10:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 10:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 10:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-18 10:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 11:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 11:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 11:11:27 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:24:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:24:50 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-07-18 11:24:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-07-18 11:25:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-07-18 11:25:03 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-07-18 11:27:34 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:29:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 11:29:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:32 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:32 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:32 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-18 11:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:08:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:08:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 12:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 12:10:46 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:10:50 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:12:40 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:15:04 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:15:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:17:57 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:18:05 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:18:06 --> Could not find the language line "assets"
ERROR - 2023-07-18 12:18:15 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:18:35 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:18:41 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:19:45 --> Could not find the language line "Socks"
ERROR - 2023-07-18 12:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:25:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:25:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:31:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:32:05 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:36:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:41:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 12:41:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 12:42:09 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:44:01 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:44:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:44:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 12:45:40 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:45:52 --> Could not find the language line "Bracelets"
ERROR - 2023-07-18 12:47:27 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:52:17 --> Could not find the language line "Home"
ERROR - 2023-07-18 12:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 12:57:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 12:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-18 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:05:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:08:29 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:10:31 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:12:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 13:14:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:14:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:14:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:14:34 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:14:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 13:15:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 13:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:22:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 13:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:28:41 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:37:04 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:54:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 13:57:04 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:57:55 --> Could not find the language line "Home"
ERROR - 2023-07-18 13:58:31 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:01:15 --> Could not find the language line "Other"
ERROR - 2023-07-18 14:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 14:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:08:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:08:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:08:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:12:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 14:12:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 14:13:43 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:13:44 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:14:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 14:14:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-18 14:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:20:01 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:22:52 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:25:06 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:26:42 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:27:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:28:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:29:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:29:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 14:29:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:36:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:41:32 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:49:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-18 14:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-18 14:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:53:29 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 14:55:34 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:55:45 --> Could not find the language line "Home"
ERROR - 2023-07-18 14:57:57 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:23:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 15:23:49 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:23:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:24:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:24:47 --> Could not find the language line "assets"
ERROR - 2023-07-18 15:24:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:25:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:25:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:25:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:25:23 --> Could not find the language line "Bracelets"
ERROR - 2023-07-18 15:28:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:29:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:29:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:29:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 15:37:36 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:03:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-18 16:14:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-18 16:17:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 16:38:57 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:39:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 16:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 16:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 17:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-18 17:23:08 --> Could not find the language line "Home"
ERROR - 2023-07-18 17:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:25:23 --> Could not find the language line "Home"
ERROR - 2023-07-18 17:26:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:26:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:26:45 --> Could not find the language line "Home"
ERROR - 2023-07-18 17:26:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:26:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 17:27:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:27:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:00:38 --> Could not find the language line "Perfume"
ERROR - 2023-07-18 18:07:43 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:09:02 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:09:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 18:09:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 18:09:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 18:09:04 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-18 18:09:04 --> 404 Page Not Found: Home/home
ERROR - 2023-07-18 18:19:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:28:44 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:30:09 --> 404 Page Not Found: Admin/assets
ERROR - 2023-07-18 18:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 18:31:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-18 18:52:50 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:05:47 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:11:26 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:18:41 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:19:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:20:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:20:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:32:54 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:33:54 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:34:17 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:34:53 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:35:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:37:01 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:38:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:39:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:40:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:40:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:40:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:40:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:40:55 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:43:23 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:43:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:43:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-18 19:44:35 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 19:45:18 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:45:46 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:46:16 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:46:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:46:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:46:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 19:53:09 --> Could not find the language line "Home"
ERROR - 2023-07-18 19:59:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-18 19:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 20:00:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-18 20:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:01:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-18 20:01:27 --> Could not find the language line "Home"
ERROR - 2023-07-18 20:01:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:03:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:04:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:04:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:05:04 --> Could not find the language line "Home"
ERROR - 2023-07-18 20:06:00 --> Could not find the language line "Home"
ERROR - 2023-07-18 20:06:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:06:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:06:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:08:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 20:08:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:08:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 20:19:51 --> Could not find the language line "Home"
ERROR - 2023-07-18 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-18 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-18 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 21:40:28 --> Could not find the language line "Other"
ERROR - 2023-07-18 21:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 21:53:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 21:58:46 --> Could not find the language line "Home"
ERROR - 2023-07-18 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 22:23:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-18 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-18 22:47:35 --> Could not find the language line "Home"
ERROR - 2023-07-18 22:48:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-18 22:48:03 --> Could not find the language line "Home"
ERROR - 2023-07-18 22:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 23:09:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 23:15:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-18 23:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-18 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-18 23:41:42 --> Could not find the language line "Home"
ERROR - 2023-07-18 23:48:01 --> Could not find the language line "Home"
