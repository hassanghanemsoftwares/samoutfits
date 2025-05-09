<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-31 00:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 00:31:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 00:35:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 00:57:11 --> Could not find the language line "Home"
ERROR - 2023-03-31 00:57:49 --> Could not find the language line "Home"
ERROR - 2023-03-31 00:57:55 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:05:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:08:10 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:09:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 01:54:22 --> Could not find the language line "Home"
ERROR - 2023-03-31 01:56:15 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:06:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:12:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 02:17:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-31 02:20:34 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:44:16 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 02:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 02:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 02:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 02:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 02:50:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:50:47 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 02:51:02 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 02:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 02:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 02:51:24 --> Could not find the language line "Home"
ERROR - 2023-03-31 02:56:19 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:05:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:16:13 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:33:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-31 03:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:36:24 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:52:24 --> Could not find the language line "Home"
ERROR - 2023-03-31 03:54:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 04:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 04:07:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 04:07:38 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-31 04:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 05:06:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 05:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 05:43:12 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:05:23 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:06:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:13:38 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:14:10 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:14:48 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:14:53 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 06:15:07 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 06:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:15:14 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 06:15:16 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:15:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:16:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:16:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:16:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:16:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:16:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:16:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:17:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-31 06:17:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:25:07 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:30:35 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:34:24 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:34:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:34:46 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:34:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:35:15 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:35:31 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:35:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 06:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 06:58:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 06:58:41 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:11:50 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 07:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:34:01 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:34:01 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:35:59 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:44:48 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:44:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:44:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:44:52 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-31 07:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-31 07:46:38 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:50:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-31 07:50:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-31 07:51:01 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:53:30 --> Could not find the language line "Home"
ERROR - 2023-03-31 07:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 07:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:05:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:18:14 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:22:39 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:23:31 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:29:34 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:29:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:31:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:36:11 --> Could not find the language line "Hair%20"
ERROR - 2023-03-31 08:38:15 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:39:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:42:32 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:42:39 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:42:40 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:42:47 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 08:42:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:43:25 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:44:30 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:44:46 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:45:09 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:45:15 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:45:31 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:45:55 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:46:26 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:48:40 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-03-31 08:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:54:50 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:56:46 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:56:55 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:57:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:57:03 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:57:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:57:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:58:17 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 08:59:14 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:59:34 --> Could not find the language line "Perfume"
ERROR - 2023-03-31 08:59:40 --> Could not find the language line "Home"
ERROR - 2023-03-31 08:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 08:59:43 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 09:00:06 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:00:07 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 09:00:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 09:00:34 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:00:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:01:25 --> Could not find the language line "Perfume"
ERROR - 2023-03-31 09:01:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 09:01:35 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:03:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-31 09:03:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-31 09:04:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-31 09:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-31 09:05:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 09:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 09:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 09:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 09:15:46 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:20:22 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-31 09:31:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 09:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:36:16 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:46:52 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:46:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:46:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 09:52:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-31 10:02:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:06:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:10:01 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:11:27 --> Could not find the language line "Socks"
ERROR - 2023-03-31 10:11:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:12:44 --> Could not find the language line "Disclaimer"
ERROR - 2023-03-31 10:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:26:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:32:19 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:32:53 --> Could not find the language line "Perfume"
ERROR - 2023-03-31 10:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:37:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:39:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:39:42 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:39:59 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:40:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:54:22 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:55:49 --> Could not find the language line "Home"
ERROR - 2023-03-31 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 10:58:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:02:21 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 11:02:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:36:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 11:49:09 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:49:10 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:52:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 11:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 11:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 11:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 11:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 11:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 11:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 12:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 12:01:29 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 12:04:43 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:14:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:17:08 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:28:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 12:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 12:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 12:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:02:26 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:06:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-31 13:14:55 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 13:26:23 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:35:59 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:47:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:48:10 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-03-31 13:48:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 13:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:36 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:37 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:38 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:53:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 13:53:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 13:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 13:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 13:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 13:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 13:56:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:57:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 13:59:05 --> Could not find the language line "Home"
ERROR - 2023-03-31 13:59:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 14:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:06:02 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:11:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:12:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:12:43 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:27:50 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:27:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:35:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 14:58:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 14:58:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:00:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-31 15:05:59 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:36:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:39:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:39:09 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:39:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:41:53 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:42:33 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-03-31 15:42:33 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-03-31 15:42:33 --> 404 Page Not Found: Lib/easing
ERROR - 2023-03-31 15:42:33 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-03-31 15:42:35 --> 404 Page Not Found: Js/common.js
ERROR - 2023-03-31 15:42:35 --> 404 Page Not Found: Js/main.js
ERROR - 2023-03-31 15:49:50 --> Could not find the language line "Home"
ERROR - 2023-03-31 15:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 15:56:28 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-31 15:57:32 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:00:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-31 16:04:34 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 16:24:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 16:33:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:34:06 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:35:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 16:40:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-31 16:55:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:00:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-31 17:00:35 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:06:02 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:07:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:09:20 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:17:08 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:28:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:29:55 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-31 17:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:31:04 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-31 17:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:35:54 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:38:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:41:28 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:45:50 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 17:50:06 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:50:16 --> Could not find the language line "Home"
ERROR - 2023-03-31 17:58:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-31 18:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:16:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:25:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:27:11 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:27:31 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:35:59 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:42:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:52:31 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:52:52 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 18:54:26 --> Could not find the language line "Home"
ERROR - 2023-03-31 18:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 18:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 18:56:43 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 18:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 18:57:14 --> Could not find the language line "Bracelets"
ERROR - 2023-03-31 18:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 18:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 18:58:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 18:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 18:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 18:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-03-31 18:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 19:06:00 --> Could not find the language line "Home"
ERROR - 2023-03-31 19:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 19:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 19:20:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 19:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 19:58:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-31 20:00:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 20:02:51 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:05:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:05:58 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:24:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:35:57 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:40:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:44:04 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:45:46 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 20:56:40 --> Could not find the language line "Home"
ERROR - 2023-03-31 20:59:22 --> Could not find the language line "Home"
ERROR - 2023-03-31 21:03:27 --> Could not find the language line "Home"
ERROR - 2023-03-31 21:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-31 21:15:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-31 21:24:19 --> Could not find the language line "Home"
ERROR - 2023-03-31 21:33:23 --> 404 Page Not Found: Plugins/jQuery-File-Upload
ERROR - 2023-03-31 21:36:03 --> Could not find the language line "Home"
ERROR - 2023-03-31 21:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-31 22:06:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 22:06:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:06:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:07:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:08:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:08:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-31 22:08:18 --> Could not find the language line "Home"
ERROR - 2023-03-31 22:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 22:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 22:09:05 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-31 22:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 22:09:14 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-31 22:25:37 --> Could not find the language line "Home"
ERROR - 2023-03-31 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-31 22:35:38 --> Could not find the language line "Home"
ERROR - 2023-03-31 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-31 23:03:11 --> Could not find the language line "Home"
ERROR - 2023-03-31 23:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-31 23:17:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-31 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-31 23:33:44 --> Could not find the language line "Home"
ERROR - 2023-03-31 23:48:40 --> 404 Page Not Found: Assets/css
