<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-12 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 00:10:17 --> Could not find the language line "Socks"
ERROR - 2023-07-12 00:28:57 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 00:30:04 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:31:32 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:39:38 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-12 00:43:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 00:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 01:17:47 --> Could not find the language line "Other"
ERROR - 2023-07-12 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 02:20:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 02:20:17 --> Could not find the language line "Socks"
ERROR - 2023-07-12 02:22:39 --> Could not find the language line "Home"
ERROR - 2023-07-12 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 02:55:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-12 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 03:12:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-12 03:21:08 --> Could not find the language line "Home"
ERROR - 2023-07-12 03:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 03:23:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 03:38:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 03:44:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 04:44:47 --> Could not find the language line "Home"
ERROR - 2023-07-12 04:47:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-12 05:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:04:22 --> Could not find the language line "Socks"
ERROR - 2023-07-12 05:08:52 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-07-12 05:11:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:13:22 --> Could not find the language line "Perfume"
ERROR - 2023-07-12 05:15:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 05:15:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 05:16:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 05:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 05:24:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:27:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:31:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:31:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:31:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 05:40:22 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 05:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 05:44:53 --> Could not find the language line "Home"
ERROR - 2023-07-12 05:50:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 05:53:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 05:55:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 05:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 05:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:02:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 06:04:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-12 06:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 06:14:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 06:15:02 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:15:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 06:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 06:16:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 06:18:31 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:20:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 06:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 06:29:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-12 06:29:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 06:35:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 06:36:40 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:45:42 --> Could not find the language line "Home"
ERROR - 2023-07-12 06:47:29 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:05:28 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:15:27 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:21:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 07:21:54 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:24:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:24:54 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-07-12 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:31:49 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-07-12 07:35:19 --> Could not find the language line "Home"
ERROR - 2023-07-12 07:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:45:40 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-07-12 07:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:55:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 07:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 07:58:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 07:58:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:00:40 --> Could not find the language line "Hair%20%and%20Body%20Care"
ERROR - 2023-07-12 08:09:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:09:42 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:12:56 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:13:20 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:24:04 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-12 08:24:05 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 08:24:41 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:24:57 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 08:40:47 --> Could not find the language line "Home"
ERROR - 2023-07-12 08:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 08:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:02:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:03:47 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:05:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 09:05:27 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 09:11:30 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:11:40 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:23:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 09:40:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 09:51:09 --> Could not find the language line "Crocs"
ERROR - 2023-07-12 09:55:40 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 09:56:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 10:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:04:08 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:04:08 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:09:46 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:23:05 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:40:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:48:19 --> Could not find the language line "Home"
ERROR - 2023-07-12 10:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 10:54:41 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:04:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 11:10:42 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:10:55 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:19:51 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:20:06 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:20:06 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:20:07 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 11:20:54 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:21:36 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:27:10 --> Could not find the language line "Socks"
ERROR - 2023-07-12 11:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 11:53:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:11:39 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:14:23 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:16:18 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:17:55 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:19:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:19:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:19:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 12:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 12:19:18 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 12:19:47 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:19:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 12:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:20:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 12:20:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 12:21:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 12:21:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 12:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:21:57 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:22:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:22:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 12:22:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 12:23:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 12:23:09 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:23:17 --> Could not find the language line "Perfume"
ERROR - 2023-07-12 12:24:01 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:24:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:24:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:24:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:24:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:26:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:26:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:27:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:27:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:27:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:27:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 12:29:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 12:29:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:32:39 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:42:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:43:24 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:44:46 --> Could not find the language line "Home"
ERROR - 2023-07-12 12:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 12:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:02:04 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:03:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 13:03:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 13:04:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 13:04:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 13:04:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 13:04:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 13:04:30 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:04:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:04:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:05:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:05:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:05:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:06:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:06:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:06:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-12 13:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:06:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:06:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:06:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-12 13:07:21 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:07:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:07:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:07:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-12 13:07:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:08:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:08:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:08:59 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:09:08 --> Could not find the language line "Socks"
ERROR - 2023-07-12 13:09:17 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:09:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 13:10:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:16:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:18:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-12 13:18:56 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:20:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:21:39 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:21:41 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:21:49 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 13:23:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 13:26:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 13:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:29:42 --> Could not find the language line "Bracelets"
ERROR - 2023-07-12 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:31:36 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 13:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 13:43:47 --> Could not find the language line "Home"
ERROR - 2023-07-12 13:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:00:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:02:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 14:02:23 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:08:48 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:32:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 14:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:42:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 14:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:44:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 14:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 14:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 14:52:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 14:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 15:01:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 15:04:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 15:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 15:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 15:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:29:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 15:29:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 15:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:38:26 --> Could not find the language line "Home"
ERROR - 2023-07-12 15:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:46:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 15:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 15:56:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 15:56:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 16:15:09 --> Could not find the language line "Socks"
ERROR - 2023-07-12 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 16:42:22 --> Could not find the language line "Home"
ERROR - 2023-07-12 16:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 16:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 16:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 16:53:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 16:53:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 16:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 16:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 16:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 16:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:11:18 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:17:19 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:18:01 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:18:05 --> Could not find the language line "Perfume"
ERROR - 2023-07-12 17:18:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:22:42 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:23:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:23:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:23:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:24:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:24:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:24:22 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:24:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 17:24:55 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:26:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:26:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 17:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 17:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 17:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:16:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 18:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 18:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:20:40 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:23:37 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-12 18:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:39:03 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:39:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 18:39:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-12 18:41:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-12 18:41:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-12 18:41:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-12 18:41:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-12 18:42:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 18:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 18:45:55 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:47:01 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:48:45 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:49:19 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:51:10 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:51:32 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:52:04 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:52:09 --> Could not find the language line "Home"
ERROR - 2023-07-12 18:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 18:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 19:16:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:17:59 --> Could not find the language line "Crocs"
ERROR - 2023-07-12 19:18:05 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:19:58 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:20:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:24:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:24:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-12 19:24:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-12 19:26:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 19:26:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:26:59 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:27:00 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-12 19:27:05 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:34:38 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 19:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 19:36:30 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:37:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 19:51:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 19:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 19:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:02:11 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:02:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:02:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:02:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 20:18:38 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-12 20:18:39 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-12 20:18:39 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-12 20:18:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-12 20:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:39:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:40:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:40:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:40:34 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:40:54 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:40:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:40:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:41:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:42:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 20:42:49 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:42:55 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:45:22 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:45:33 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:45:45 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:48:56 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:49:13 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:49:35 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:49:36 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:49:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 20:50:50 --> Could not find the language line "Home"
ERROR - 2023-07-12 20:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 20:59:37 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:01:43 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:04:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:04:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:04:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 21:05:09 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:05:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 21:05:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:05:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-12 21:06:46 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:06:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 21:07:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-12 21:24:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-12 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 21:55:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-12 22:05:02 --> Could not find the language line "Home"
ERROR - 2023-07-12 22:05:02 --> Could not find the language line "Home"
ERROR - 2023-07-12 22:05:02 --> Could not find the language line "Home"
ERROR - 2023-07-12 22:08:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-12 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-12 22:33:17 --> Could not find the language line "Socks"
ERROR - 2023-07-12 22:41:36 --> Could not find the language line "Home"
ERROR - 2023-07-12 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-12 23:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-12 23:05:41 --> Could not find the language line "Home"
ERROR - 2023-07-12 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-12 23:31:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-12 23:45:36 --> Could not find the language line "Home"
ERROR - 2023-07-12 23:49:21 --> Could not find the language line "Home"
