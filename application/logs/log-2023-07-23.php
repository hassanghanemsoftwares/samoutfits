<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-23 00:00:21 --> Could not find the language line "Home"
ERROR - 2023-07-23 00:03:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 00:30:23 --> Could not find the language line "Home"
ERROR - 2023-07-23 00:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 01:00:24 --> Could not find the language line "Home"
ERROR - 2023-07-23 01:02:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 01:30:24 --> Could not find the language line "Home"
ERROR - 2023-07-23 01:37:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 01:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 01:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 01:47:47 --> Could not find the language line "Home"
ERROR - 2023-07-23 01:59:28 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-07-23 02:30:25 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:00:27 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:09:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:09:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:09:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:09:20 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:30:23 --> Could not find the language line "Home"
ERROR - 2023-07-23 03:55:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 04:00:30 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:01:47 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-23 04:09:34 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:14:34 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 04:14:53 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 04:15:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 04:15:37 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:15:38 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:15:39 --> Could not find the language line "Home"
ERROR - 2023-07-23 04:30:31 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:22:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 05:30:05 --> Could not find the language line "Socks"
ERROR - 2023-07-23 05:32:56 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:42:55 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:42:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 05:43:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:44:28 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 05:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 05:45:36 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 05:46:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 05:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 05:46:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 05:46:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 05:46:16 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:46:51 --> Could not find the language line "Home"
ERROR - 2023-07-23 05:46:57 --> Could not find the language line "Socks"
ERROR - 2023-07-23 05:47:22 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:00:28 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:03:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 06:12:38 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:16:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:20:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 06:20:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 06:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:22:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:30:32 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:32:16 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:37:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 06:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 06:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:39:45 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:40:35 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:40:48 --> Could not find the language line "Home"
ERROR - 2023-07-23 06:43:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 06:51:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 06:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:55:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 06:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 06:59:50 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:00:30 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:06:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 07:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 07:08:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 07:08:22 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:14:23 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:30:32 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:42:48 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:42:52 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:43:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 07:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 07:43:22 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:43:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 07:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 07:43:44 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 07:56:03 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 07:56:35 --> Could not find the language line "Home"
ERROR - 2023-07-23 07:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-23 08:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:03:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:06:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 08:06:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 08:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:07:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 08:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 08:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:10:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 08:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:28:29 --> Could not find the language line "Home"
ERROR - 2023-07-23 08:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:28:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:30:28 --> Could not find the language line "Home"
ERROR - 2023-07-23 08:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:43:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-23 08:45:33 --> Could not find the language line "Home"
ERROR - 2023-07-23 08:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:46:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:56:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 08:56:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 08:57:33 --> Could not find the language line "assets"
ERROR - 2023-07-23 08:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 08:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 08:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:00:25 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:03:43 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:05:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 09:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 09:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:22:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 09:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:34:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:34:37 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:34:44 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 09:35:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 09:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 09:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:01:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 10:01:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 10:03:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:04:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:04:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:06:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:06:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 10:07:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:07:04 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:07:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:07:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:08:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:09:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:09:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 10:09:28 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:23:26 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:24:13 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:48:39 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:49:06 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:49:07 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-23 10:52:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 10:52:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 10:52:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:52:31 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:52:32 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:52:40 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:52:40 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:52:41 --> Could not find the language line "assets"
ERROR - 2023-07-23 10:52:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:52:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:52:57 --> Could not find the language line "assets"
ERROR - 2023-07-23 10:53:05 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:53:06 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:53:54 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:53:57 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:54:13 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:54:28 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 10:54:32 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:54:48 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:54:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:55:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:55:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:56:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:56:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:56:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 10:57:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 10:57:07 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:58:05 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:58:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 10:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:09:48 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:18:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 11:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:34:43 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:43:26 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:47:28 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:55:45 --> Could not find the language line "Home"
ERROR - 2023-07-23 11:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 11:57:55 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:04:42 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:07:24 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:08:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 12:08:21 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:10:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-23 12:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:11:07 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:12:07 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:12:10 --> Could not find the language line "assets"
ERROR - 2023-07-23 12:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:21:03 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:21:16 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:21:29 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:26:50 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-23 12:26:51 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:30:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 12:30:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 12:30:57 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-23 12:31:00 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-23 12:31:03 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-23 12:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 12:44:58 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:44:58 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:44:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 12:50:53 --> Could not find the language line "Home"
ERROR - 2023-07-23 12:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 13:04:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 13:04:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 13:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:09:32 --> Could not find the language line "assets"
ERROR - 2023-07-23 13:15:25 --> Could not find the language line "Home"
ERROR - 2023-07-23 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:35:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-23 13:35:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-23 13:36:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 13:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:45:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 13:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 13:59:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:03:43 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:08:46 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 14:14:34 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 14:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 14:17:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-23 14:24:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 14:24:25 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:25:38 --> Could not find the language line "Crocs"
ERROR - 2023-07-23 14:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 14:33:49 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:18:21 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:18:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:18:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:19:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:19:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:19:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:19:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 15:29:53 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:30:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:30:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:30:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:31:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:31 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 15:33:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 15:47:42 --> Could not find the language line "Home"
ERROR - 2023-07-23 15:59:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:13:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:19:31 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:21:06 --> 404 Page Not Found: Public/assets
ERROR - 2023-07-23 16:25:42 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:30:49 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:32:26 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 16:40:58 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:46:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 16:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 16:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-23 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-23 17:03:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-23 17:16:44 --> Could not find the language line "Home"
ERROR - 2023-07-23 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 17:38:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-23 17:58:23 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:04:56 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:08:35 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:18:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:19:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:20:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-23 18:20:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-23 18:20:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:20:06 --> Could not find the language line "assets"
ERROR - 2023-07-23 18:20:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:21:18 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:25:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:26:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:27:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:27:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:27:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:28:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:28:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:28:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:28:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 18:29:50 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 18:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 18:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:01:10 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:01:43 --> Could not find the language line "Socks"
ERROR - 2023-07-23 19:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 19:02:24 --> Could not find the language line "Socks"
ERROR - 2023-07-23 19:02:40 --> Could not find the language line "Socks"
ERROR - 2023-07-23 19:02:42 --> Could not find the language line "Socks"
ERROR - 2023-07-23 19:08:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:09:36 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:13:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 19:13:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 19:13:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 19:28:43 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:30:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 19:32:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 19:32:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 19:32:02 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:36:13 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:39:56 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:40:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 19:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-23 19:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:42:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:42:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:43:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:43:48 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 19:44:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:45:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:45:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:45:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-23 19:46:41 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:46:42 --> Could not find the language line "Home"
ERROR - 2023-07-23 19:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:46:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 19:51:21 --> Could not find the language line "Home"
ERROR - 2023-07-23 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 20:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 20:22:41 --> Could not find the language line "Home"
ERROR - 2023-07-23 20:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 20:42:41 --> Could not find the language line "Home"
ERROR - 2023-07-23 20:45:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 20:51:53 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:08:07 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-23 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:45:59 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-23 21:47:19 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:47:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 21:47:49 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:48:40 --> Could not find the language line "Home"
ERROR - 2023-07-23 21:54:50 --> Could not find the language line "Socks"
ERROR - 2023-07-23 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-23 22:03:53 --> Could not find the language line "Home"
ERROR - 2023-07-23 22:05:41 --> Could not find the language line "Home"
ERROR - 2023-07-23 22:05:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-23 22:06:02 --> Could not find the language line "Home"
ERROR - 2023-07-23 22:08:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-23 22:26:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-23 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-23 22:36:00 --> Could not find the language line "Home"
ERROR - 2023-07-23 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-23 23:30:11 --> Could not find the language line "Home"
