<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-21 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:02:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:04:28 --> Could not find the language line "Perfume"
ERROR - 2023-04-21 00:04:28 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 00:48:27 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:48:30 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:52:43 --> Could not find the language line "Home"
ERROR - 2023-04-21 00:59:04 --> Could not find the language line "Home"
ERROR - 2023-04-21 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 01:12:58 --> Could not find the language line "Bracelets"
ERROR - 2023-04-21 01:14:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 01:59:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:01:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:01:50 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:01:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-21 02:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:04:29 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:05:07 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:25:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:25:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 02:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:25:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:26:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 02:27:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:41:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 02:41:24 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:43:29 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:44:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 02:47:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 02:52:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:35:17 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:36:50 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:39:07 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:42:45 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:46:03 --> Could not find the language line "Home"
ERROR - 2023-04-21 03:48:05 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-21 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 04:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 04:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 04:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 04:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 04:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 04:43:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 04:44:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 04:44:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 04:44:34 --> Could not find the language line "Home"
ERROR - 2023-04-21 04:45:02 --> 404 Page Not Found: Products/index
ERROR - 2023-04-21 04:46:37 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:13:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 05:14:57 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:15:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 05:15:09 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:18:02 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:18:42 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:24:44 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:43:19 --> Could not find the language line "Home"
ERROR - 2023-04-21 05:43:43 --> Could not find the language line "Home"
ERROR - 2023-04-21 06:00:09 --> Could not find the language line "Home"
ERROR - 2023-04-21 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 06:52:17 --> Could not find the language line "Home"
ERROR - 2023-04-21 06:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 06:52:38 --> Could not find the language line "Home"
ERROR - 2023-04-21 06:53:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 06:53:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 06:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 06:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 07:13:05 --> Could not find the language line "Home"
ERROR - 2023-04-21 07:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 07:23:16 --> Could not find the language line "Home"
ERROR - 2023-04-21 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 07:30:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-21 07:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-21 07:30:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-21 07:30:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-21 07:42:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 08:11:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:13:50 --> Could not find the language line "Bracelets"
ERROR - 2023-04-21 08:25:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 08:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 08:35:08 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 08:44:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 08:44:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 08:44:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:48:07 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 08:57:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 08:57:02 --> Could not find the language line "Home"
ERROR - 2023-04-21 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 09:18:21 --> Could not find the language line "Home"
ERROR - 2023-04-21 09:28:20 --> Could not find the language line "Home"
ERROR - 2023-04-21 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 09:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 09:59:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:05:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:06:23 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:06:29 --> Could not find the language line "Perfume"
ERROR - 2023-04-21 10:06:36 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:06:55 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 10:15:39 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:15:41 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:18:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:31:08 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:44:04 --> Could not find the language line "Home"
ERROR - 2023-04-21 10:57:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:21:18 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:29:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 11:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:35:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 11:41:53 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:42:24 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:42:54 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:43:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-21 11:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-21 11:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 11:43:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-21 11:43:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-21 11:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 11:48:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:54:25 --> Could not find the language line "Home"
ERROR - 2023-04-21 11:54:27 --> 404 Page Not Found: Feed/index
ERROR - 2023-04-21 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:06:06 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:06:43 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:07:21 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:07:28 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 12:07:56 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 12:08:23 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:08:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:09:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:10:16 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:10:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 12:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:11:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 12:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:16:43 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:17:16 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:18:20 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:19:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 12:19:20 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:23:32 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:25:39 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:48:44 --> Could not find the language line "Home"
ERROR - 2023-04-21 12:49:35 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:07:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 13:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:08:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 13:10:42 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:11:21 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:11:26 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:30:54 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:46:34 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:46:57 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:47:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:48:08 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:51:30 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:54:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:54:47 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:55:25 --> Could not find the language line "Home"
ERROR - 2023-04-21 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:13:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 14:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 14:16:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 14:17:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 14:17:43 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:22:45 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:27:02 --> Could not find the language line "accounting"
ERROR - 2023-04-21 14:27:02 --> Could not find the language line "accounting"
ERROR - 2023-04-21 14:27:05 --> Could not find the language line "accounting"
ERROR - 2023-04-21 14:27:05 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:27:05 --> Could not find the language line "accounting"
ERROR - 2023-04-21 14:27:08 --> Could not find the language line "accounting"
ERROR - 2023-04-21 14:27:25 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:45:19 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:51:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 14:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 14:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:08:18 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:08:21 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:09:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-21 15:09:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-21 15:18:47 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:20:55 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:38:37 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:38:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 15:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 15:57:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:58:20 --> Could not find the language line "Home"
ERROR - 2023-04-21 15:59:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-21 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:29:44 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:32:50 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:33:07 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:47:17 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-21 16:53:36 --> Could not find the language line "Home"
ERROR - 2023-04-21 16:54:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:03:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 17:03:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 17:03:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 17:03:33 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-21 17:03:39 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-21 17:03:43 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-21 17:03:48 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-21 17:03:51 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-21 17:03:53 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-21 17:03:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:04:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:04:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:04:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:05:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:06:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:07:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:07:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:07:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:08:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:08:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:09:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:09:30 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:09:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:09:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:10:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:11:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:11:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:11:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:11:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-04-21 17:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:12:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:12:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:12:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 17:13:37 --> Could not find the language line "Other"
ERROR - 2023-04-21 17:13:44 --> Could not find the language line "Other"
ERROR - 2023-04-21 17:17:21 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:29:15 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:36:48 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:39:31 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:45:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-21 17:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:52:31 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:52:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-21 17:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:53:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-21 17:53:53 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:54:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-21 17:54:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-21 17:55:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:55:24 --> Could not find the language line "Home"
ERROR - 2023-04-21 17:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 17:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:03:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:03:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 18:21:45 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:32:47 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 18:40:36 --> Could not find the language line "Crocs"
ERROR - 2023-04-21 18:51:31 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:51:33 --> Could not find the language line "Home"
ERROR - 2023-04-21 18:51:37 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:07:19 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:08:04 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:08:05 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:28:59 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:35:33 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:35:36 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:46:25 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:47:53 --> Could not find the language line "Socks"
ERROR - 2023-04-21 19:48:04 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:48:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 19:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 19:54:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:54:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:54:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:55:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:55:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 19:55:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 19:56:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 19:58:34 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:02:29 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 20:08:04 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:16:05 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:18:26 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 20:19:28 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 20:21:07 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-21 20:21:09 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:21:35 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:27:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:28:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:28:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:29:35 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:29:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:30:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:30:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-21 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:30:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:30:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:31:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:31:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-21 20:31:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:31:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-21 20:31:54 --> Could not find the language line "Perfume"
ERROR - 2023-04-21 20:33:41 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:34:23 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 20:34:53 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:34:56 --> Could not find the language line "Socks"
ERROR - 2023-04-21 20:35:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:35:16 --> Could not find the language line "Perfume"
ERROR - 2023-04-21 20:35:27 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 20:35:54 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:35:59 --> Could not find the language line "Bracelets"
ERROR - 2023-04-21 20:36:17 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:36:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 20:50:25 --> Could not find the language line "Home"
ERROR - 2023-04-21 20:50:27 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:02:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 21:02:52 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:03:42 --> Could not find the language line "Bracelets"
ERROR - 2023-04-21 21:12:26 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:13:36 --> Could not find the language line "Socks"
ERROR - 2023-04-21 21:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 21:20:49 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 21:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:34:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 21:54:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:13:10 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:15:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-21 22:15:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-21 22:17:20 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:20:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-21 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:31:49 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:32:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 22:37:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 22:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 22:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 22:43:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:44:45 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:45:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-21 22:45:52 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:49:51 --> Could not find the language line "Home"
ERROR - 2023-04-21 22:58:27 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:02:34 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:02:46 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:12:00 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:20:33 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:21:34 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:35:00 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 23:37:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:37:01 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:39:35 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:39:41 --> Could not find the language line "Bracelets"
ERROR - 2023-04-21 23:40:00 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 23:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:40:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 23:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 23:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-21 23:43:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-21 23:43:45 --> Could not find the language line "Home"
ERROR - 2023-04-21 23:48:28 --> Could not find the language line "Home"
