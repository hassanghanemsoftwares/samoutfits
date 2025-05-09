<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-28 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 00:30:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 00:37:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 00:42:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 00:46:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 01:23:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:23:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:23:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:45:34 --> Could not find the language line "products"
ERROR - 2023-06-28 01:47:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 01:53:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:53:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 01:54:55 --> Could not find the language line "products"
ERROR - 2023-06-28 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 02:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 02:06:45 --> Could not find the language line "products"
ERROR - 2023-06-28 02:07:28 --> Could not find the language line "Home"
ERROR - 2023-06-28 02:07:49 --> Could not find the language line "Home"
ERROR - 2023-06-28 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 02:32:25 --> Could not find the language line "Home"
ERROR - 2023-06-28 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 03:30:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-28 03:49:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 04:01:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 04:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 04:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 04:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:15:33 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:16:02 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:16:37 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:17:01 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:25:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:39:29 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:39:29 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:40:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:40:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:46:36 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:48:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:48:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:48:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:49:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:49:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:50:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:50:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:50:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:50:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 05:51:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:52:58 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-28 05:53:36 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:54:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:54:31 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:57:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:57:32 --> Could not find the language line "Home"
ERROR - 2023-06-28 05:57:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:57:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 05:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 05:59:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:20:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 06:23:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:25:28 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:30:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 06:42:22 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:44:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 06:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 06:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 06:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 06:55:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-28 06:55:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 06:55:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 06:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:06:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:06:50 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:13:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:18:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:20:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 07:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 07:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 07:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:26:33 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:44:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 07:44:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:45:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 07:45:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 07:47:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 07:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 07:59:25 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:02:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:02:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:02:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:12:46 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:16:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:21:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 08:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 08:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:22:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-28 08:22:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-28 08:22:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-28 08:22:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-28 08:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:30:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 08:30:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 08:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 08:30:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 08:30:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 08:30:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 08:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:31:42 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:31:43 --> Could not find the language line "hats"
ERROR - 2023-06-28 08:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:52:19 --> Could not find the language line "Home"
ERROR - 2023-06-28 08:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 08:59:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 08:59:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 08:59:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:01:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:01:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:04:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:04:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:04:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:05:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:10:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:15:44 --> Could not find the language line "hats"
ERROR - 2023-06-28 09:27:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:27:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:30:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:30:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:31:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:38:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 09:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:41:50 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:42:19 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 09:42:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 09:42:48 --> Could not find the language line "Perfume"
ERROR - 2023-06-28 09:42:59 --> Could not find the language line "Socks"
ERROR - 2023-06-28 09:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:43:33 --> Could not find the language line "Socks"
ERROR - 2023-06-28 09:43:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 09:44:03 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 09:44:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:44:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 09:44:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:47:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:47:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:48:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:48:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:49:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:49:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:50:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:52:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:52:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:53:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:54:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:54:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:54:30 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:55:31 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:56:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:56:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:56:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:56:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:57:23 --> Could not find the language line "Home"
ERROR - 2023-06-28 09:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:57:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:57:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 09:59:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 09:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:00:36 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:01:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:02:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:02:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:15:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:24:36 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:25:07 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:28:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:30:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:36:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 10:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:41:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 10:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 10:42:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 10:42:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 10:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:45:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:45:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 10:45:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 10:45:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 10:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 10:57:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 11:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 11:01:10 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:08:56 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:11:19 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:28:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:32:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 11:32:40 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:33:55 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:33:56 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:34:21 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:39:20 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:39:33 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:41:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:41:46 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:52:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 11:54:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:05:05 --> 404 Page Not Found: Backupzip/index
ERROR - 2023-06-28 12:05:06 --> 404 Page Not Found: Backupsql/index
ERROR - 2023-06-28 12:05:06 --> 404 Page Not Found: Backuptar/index
ERROR - 2023-06-28 12:05:07 --> 404 Page Not Found: Backuptargz/index
ERROR - 2023-06-28 12:05:07 --> 404 Page Not Found: Backuprar/index
ERROR - 2023-06-28 12:12:02 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:12:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 12:12:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 12:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:13:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 12:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:14:55 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:14:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:17:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:17:58 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:17:59 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:01 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:02 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:03 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:03 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:05 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:05 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:20:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:23:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:23:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:23:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:25:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:25:39 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:25:50 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:26:41 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:30:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 12:30:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 12:31:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 12:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 12:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:36:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 12:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '27'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 12:38:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:38:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:39:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 12:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:40:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 12:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 12:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 13:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:14:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:15:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 13:15:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 13:17:44 --> Could not find the language line "Other"
ERROR - 2023-06-28 13:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 13:22:27 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:23:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:23:38 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 13:24:02 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:24:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:24:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 13:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:24:47 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:24:51 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:39:39 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:41:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:41:51 --> Could not find the language line "Socks"
ERROR - 2023-06-28 13:42:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:42:50 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:43:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:43:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:47:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-28 13:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:52:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:56:29 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:58:04 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:58:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:58:21 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:58:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:58:49 --> Could not find the language line "Home"
ERROR - 2023-06-28 13:59:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-28 13:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 13:59:22 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:02:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:02:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:02:28 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:02:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:03:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:03:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:03:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:03:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:03:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:04:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:04:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:05:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:05:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:11:34 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:11:41 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:11:48 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:11:58 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:12:09 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:12:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:12:32 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 14:12:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 14:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-28 14:12:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-28 14:12:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-28 14:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:12:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-28 14:13:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-28 14:13:05 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:13:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 14:13:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 14:13:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 14:13:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:13:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 14:13:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 14:13:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:14:08 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:14:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-28 14:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-28 14:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:14:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:14:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 14:14:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 14:14:47 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:14:52 --> Could not find the language line "Perfume"
ERROR - 2023-06-28 14:15:01 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:15:05 --> Could not find the language line "Socks"
ERROR - 2023-06-28 14:15:15 --> Could not find the language line "Socks"
ERROR - 2023-06-28 14:15:30 --> Could not find the language line "Socks"
ERROR - 2023-06-28 14:15:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:15:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 14:15:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 14:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:16:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:16:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:16:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 14:16:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 14:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:17:10 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:19:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 14:19:55 --> Could not find the language line "Other"
ERROR - 2023-06-28 14:20:10 --> Could not find the language line "Other"
ERROR - 2023-06-28 14:20:26 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:20:38 --> Could not find the language line "Other"
ERROR - 2023-06-28 14:20:54 --> Could not find the language line "Other"
ERROR - 2023-06-28 14:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:25:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:28:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:38:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:39:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 14:39:45 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 14:44:40 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 14:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 14:51:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:53:40 --> Could not find the language line "Home"
ERROR - 2023-06-28 14:57:42 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:01:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:01:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:01:00 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:12:33 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:12:34 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:17:33 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:18:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:18:18 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 15:18:56 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 15:19:24 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 15:19:27 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:19:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:19:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:19:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:19:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 15:20:31 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:21:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:21:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:21:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:22:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 15:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:27:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:28:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:40:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 15:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 15:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:14:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:35:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:38:21 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 16:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 16:50:45 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:50:49 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:50:49 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:50:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:50:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 16:51:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:34 --> Could not find the language line "Home"
ERROR - 2023-06-28 16:51:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:51:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:53:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:53:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:53:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:53:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 16:56:52 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-28 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:22:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:22:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:23:52 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:25:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 17:25:36 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 17:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 17:26:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:27:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:33:37 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:44:20 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:46:20 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:48:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 17:48:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 17:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:49:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:49:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:49:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:50:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:50:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:50:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:50:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 17:51:00 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 17:51:02 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:14:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 18:14:51 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:15:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 18:16:30 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:17:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:17:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:17:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:18:50 --> Could not find the language line "Perfume"
ERROR - 2023-06-28 18:18:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:18:59 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:19:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 18:19:29 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:19:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 18:20:04 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:20:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 18:20:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-28 18:20:58 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:22:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 18:24:30 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:24:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 18:25:20 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:28:46 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 18:29:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:29:41 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 18:58:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:07:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:10:09 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:12:37 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:12:46 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:16:38 --> Could not find the language line "Perfume"
ERROR - 2023-06-28 19:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:19:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-28 19:27:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:28:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:31:13 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:32:27 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:32:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:33:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:33:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:33:56 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:33:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:34:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:34:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:35:01 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:35:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-28 19:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:35:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-06-28 19:35:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:44:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 19:46:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:51:24 --> Could not find the language line "Home"
ERROR - 2023-06-28 19:52:39 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:03:53 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:04:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:04:18 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:05:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:07:11 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:08:08 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:17:42 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:20:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-28 20:23:10 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:30:55 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:31:21 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 20:32:11 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 20:32:52 --> Could not find the language line "Bracelets"
ERROR - 2023-06-28 20:32:54 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:33:04 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:33:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:34:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:35:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:35:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 20:36:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:36:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-28 20:36:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:36:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:36:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:37:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:37:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:37:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:37:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-06-28 20:37:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:37:07 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:53:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 20:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:05:57 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:06:05 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:06:18 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:23:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:52:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 21:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-28 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:07:48 --> Could not find the language line "Other"
ERROR - 2023-06-28 22:13:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-06-28 22:14:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 22:15:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:19:16 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:19:30 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:19:51 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 22:40:05 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-06-28 22:45:04 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:48:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-28 22:55:06 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:55:27 --> Could not find the language line "Socks"
ERROR - 2023-06-28 22:55:41 --> Could not find the language line "Home"
ERROR - 2023-06-28 22:56:48 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:01:43 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:03:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-28 23:15:44 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 23:16:14 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 23:16:39 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 23:17:10 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 23:17:42 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:19:22 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:19:23 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:19:23 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-28 23:30:17 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:32:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-28 23:36:35 --> Could not find the language line "Home"
ERROR - 2023-06-28 23:41:25 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-06-28 23:41:28 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-06-28 23:41:31 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
