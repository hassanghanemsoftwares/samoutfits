<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-27 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-27 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 00:56:20 --> Could not find the language line "Home"
ERROR - 2023-04-27 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 01:02:39 --> Could not find the language line "Home"
ERROR - 2023-04-27 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 01:47:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 01:47:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 02:37:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 02:51:59 --> Could not find the language line "Home"
ERROR - 2023-04-27 02:52:03 --> Could not find the language line "Home"
ERROR - 2023-04-27 02:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 02:52:45 --> Could not find the language line "Home"
ERROR - 2023-04-27 02:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 03:26:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 03:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:09:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 04:09:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 04:09:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 04:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 04:10:17 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:14:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-27 04:26:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:31:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 04:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 04:31:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 04:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 04:37:16 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:37:48 --> Could not find the language line "Home"
ERROR - 2023-04-27 04:39:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 04:39:44 --> Could not find the language line "Socks"
ERROR - 2023-04-27 04:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 04:48:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-27 04:58:30 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:02:19 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:07:45 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:08:32 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:08:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:09:41 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:09:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-27 05:09:44 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-04-27 05:09:45 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-04-27 05:09:46 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-04-27 05:13:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-27 05:13:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-27 05:13:10 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-27 05:13:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-27 05:13:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:13:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:29:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:29:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:32:23 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:32:24 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:32:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 05:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:32:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 05:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:33:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 05:33:47 --> Could not find the language line "Perfume"
ERROR - 2023-04-27 05:33:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:34:02 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 05:35:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-27 05:35:05 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-27 05:35:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-27 05:35:06 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-27 05:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:41:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:42:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:42:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:42:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:43:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:46:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:46:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 05:47:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:48:27 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 05:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:49:29 --> Could not find the language line "Home"
ERROR - 2023-04-27 05:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 05:52:06 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:01:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:04:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:04:35 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:13:51 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:19:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:19:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:19:44 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:20:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:20:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:26:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:29:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:42:16 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 06:51:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 06:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 06:57:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:11:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:12:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 07:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:14:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:15:01 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:15:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:15:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:16:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:17:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:18:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:18:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:19:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:24:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:25:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:25:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:26:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:26:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:28:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:29:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:33:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:37:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:41:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:42:10 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:42:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:43:15 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3 596619&amp;text=7819%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-04-27 07:43:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:43:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:43:49 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=03 596 619&amp;text=8996%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-04-27 07:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:44:24 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=3 596 619&amp;text=1579%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-04-27 07:45:16 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71 255542&amp;text=3438%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-04-27 07:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:45:51 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:45:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:46:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:46:21 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:46:21 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:46:32 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:46:32 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:47:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:47:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:48:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:48:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:48:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:49:00 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:49:10 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:49:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:49:27 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:49:27 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 07:49:38 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:49:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 07:50:02 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:50:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:50:17 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:54:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 07:56:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:56:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:56:57 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:56:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:56:59 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:57:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:57:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:57:06 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:57:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 07:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:57:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 07:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 07:57:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:57:30 --> Could not find the language line "Home"
ERROR - 2023-04-27 07:57:52 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 07:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:00:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:00:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:00:28 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:01:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:02:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:15:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:15:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 08:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:42:10 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-04-27 08:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:42:39 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-04-27 08:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:48:07 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:48:32 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:48:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:49:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:49:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 08:49:44 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:50:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:50:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 08:50:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:50:36 --> Could not find the language line "Home"
ERROR - 2023-04-27 08:51:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 08:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 08:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:00:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:04:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:06:00 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:06:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 09:06:40 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:06:55 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:07:02 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:08:08 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:08:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 09:08:27 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:08:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 09:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:09:08 --> Could not find the language line "Socks"
ERROR - 2023-04-27 09:09:19 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:09:21 --> Could not find the language line "Socks"
ERROR - 2023-04-27 09:09:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 09:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:09:43 --> Could not find the language line "Socks"
ERROR - 2023-04-27 09:09:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:09:49 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:10:10 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:10:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 09:10:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 09:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:10:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:10:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:10:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 09:11:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 09:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:11:08 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:11:24 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:11:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:16:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:16:59 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:17:34 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:23:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:25:35 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:27:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:29:06 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:29:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 09:29:24 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:29:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:31:40 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:43:52 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:43:55 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-27 09:43:55 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-27 09:43:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-27 09:43:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-27 09:48:19 --> Could not find the language line "Home"
ERROR - 2023-04-27 09:48:22 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 09:48:28 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 09:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 09:51:22 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-27 09:51:22 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-27 09:51:22 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-27 09:51:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-27 09:51:34 --> Could not find the language line "Other"
ERROR - 2023-04-27 09:51:41 --> Could not find the language line "Other"
ERROR - 2023-04-27 09:53:10 --> Could not find the language line "Other"
ERROR - 2023-04-27 09:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:00:56 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:01:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:01:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:05:29 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:07:49 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:26:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:26:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:33:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:41:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:44:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:44:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:44:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:48:04 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:50:30 --> Could not find the language line "Home"
ERROR - 2023-04-27 10:50:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:50:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:52:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:52:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 10:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 10:53:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 10:55:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:00:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:07:31 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-04-27 11:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:15:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:15:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 11:15:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 11:15:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 11:15:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 11:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:17:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:20:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:30:43 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 11:31:06 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:39:32 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:39:55 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:41:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:41:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:43:24 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 11:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 11:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 11:43:56 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:45:41 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:45:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:54:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:57:49 --> Could not find the language line "Home"
ERROR - 2023-04-27 11:59:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 11:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 11:59:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:00:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:00:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:00:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:01:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:01:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:01:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:01:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:01:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:02:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:02:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:02:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:02:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:03:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:03:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:03:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:03:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:03:53 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:04:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:04:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:04:28 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 12:04:29 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-27 12:04:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:10:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:11:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:11:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:11:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:12:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:12:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:13:29 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:14:20 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:14:29 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:14:34 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:15:02 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:15:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:15:56 --> Could not find the language line "Socks"
ERROR - 2023-04-27 12:15:59 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:16:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:20 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:16:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:16:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:17:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:18:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:33 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-27 12:18:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-27 12:18:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-27 12:18:34 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-27 12:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:20:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:20:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:20:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:20:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:20:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:20:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:21:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:21:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:21:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:21:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:22:03 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:22:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:22:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:22:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:22:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:22:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:22:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 12:22:39 --> Could not find the language line "Other"
ERROR - 2023-04-27 12:22:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:22:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:22:48 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:23:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 12:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 12:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 12:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 12:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 12:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 12:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 12:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 12:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 12:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 12:24:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:24:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:28:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 12:28:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 12:29:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:31:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 12:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:42:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:42:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:44:16 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 12:46:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:49:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:50:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 12:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 12:54:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 12:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:02:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:03:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:03:34 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:08:19 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:14:41 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:24:59 --> Could not find the language line "Socks"
ERROR - 2023-04-27 13:25:45 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:27:30 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:38:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:43:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:44:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:46:01 --> Could not find the language line "Socks"
ERROR - 2023-04-27 13:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:50:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:58:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 13:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 13:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:01:35 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:01:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 14:01:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 14:02:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:02:40 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:02:47 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:10:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:10:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:11:19 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:11:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:12:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 14:12:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 14:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:13:28 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:17:01 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:21:58 --> Could not find the language line "Hair%20"
ERROR - 2023-04-27 14:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:27:03 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:27:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:27:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:35:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:35:27 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:36:00 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:36:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:37:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 14:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:45:59 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 14:47:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:49:07 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:51:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-27 14:52:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 14:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-27 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:01:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:10:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 15:17:42 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:23:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:50:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 15:51:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 15:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 15:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:22:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:27:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:29:08 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:29:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:30:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:30:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:30:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:31:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:31:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:31:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:33:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:33:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:33:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 16:35:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:37:39 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-04-27 16:37:39 --> 404 Page Not Found: Wp-admin/style.php
ERROR - 2023-04-27 16:37:39 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-04-27 16:37:39 --> 404 Page Not Found: Wp-admin/style.php
ERROR - 2023-04-27 16:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 16:40:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 16:51:01 --> Could not find the language line "Home"
ERROR - 2023-04-27 16:54:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 17:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 17:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 17:08:42 --> Could not find the language line "Home"
ERROR - 2023-04-27 17:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 17:08:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 17:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 17:09:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 17:25:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:02:49 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:03:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:04:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:05:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:06:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 18:06:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-27 18:06:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:06:23 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 18:07:03 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:08:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:09:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:09:52 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:10:20 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:10:22 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:10:54 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:11:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:11:10 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:11:23 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:17:49 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:18:13 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-04-27 18:20:05 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:21:00 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:22:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 18:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 18:22:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 18:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 18:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:22:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:23:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:25:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:25:34 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:27:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:28:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 18:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:31:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-27 18:32:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:32:21 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:32:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:32:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:32:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:33:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:33:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:33:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:33:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:48 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:39:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:39:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:40:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:40:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 18:40:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:40:27 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 18:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:41:00 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 18:50:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 18:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 18:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 18:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-27 18:51:34 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:54:44 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:57:31 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:58:22 --> Could not find the language line "Home"
ERROR - 2023-04-27 18:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 18:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:00:56 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:01:05 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:01:22 --> Could not find the language line "Perfume"
ERROR - 2023-04-27 19:01:26 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:01:39 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:11:39 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:11:53 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:12:18 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:12:24 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:12:45 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:13:09 --> Could not find the language line "Bracelets"
ERROR - 2023-04-27 19:13:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 19:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 19:20:46 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:26:53 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:43:08 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:43:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:44:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:45:00 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:48:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:53:48 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:55:02 --> Could not find the language line "Home"
ERROR - 2023-04-27 19:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 19:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:01:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:01:14 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:09:33 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:18:42 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:23:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-27 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:32:58 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 20:40:25 --> Could not find the language line "Home"
ERROR - 2023-04-27 20:49:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 20:49:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-27 20:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 21:00:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:00:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-27 21:00:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '12'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-27 21:00:21 --> Could not find the language line "Clothing"
ERROR - 2023-04-27 21:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 21:10:45 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:12:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-27 21:15:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-27 21:25:16 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:31:18 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:31:48 --> Could not find the language line "Disclaimer"
ERROR - 2023-04-27 21:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 21:34:09 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 21:35:17 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 21:35:51 --> Could not find the language line "Home"
ERROR - 2023-04-27 21:52:29 --> Could not find the language line "Home"
ERROR - 2023-04-27 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-27 22:03:43 --> Could not find the language line "Home"
ERROR - 2023-04-27 22:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-27 22:04:48 --> Could not find the language line "Home"
ERROR - 2023-04-27 22:15:02 --> Could not find the language line "Home"
ERROR - 2023-04-27 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-27 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-27 23:20:37 --> Could not find the language line "Home"
ERROR - 2023-04-27 23:22:41 --> Could not find the language line "Home"
ERROR - 2023-04-27 23:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-27 23:48:52 --> Could not find the language line "Clothing"
