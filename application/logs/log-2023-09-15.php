<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-15 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 00:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 00:23:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 00:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 00:35:55 --> Could not find the language line "Home"
ERROR - 2023-09-15 00:35:55 --> Could not find the language line "Home"
ERROR - 2023-09-15 00:35:55 --> Could not find the language line "Home"
ERROR - 2023-09-15 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 01:04:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 01:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 01:31:32 --> Could not find the language line "Home"
ERROR - 2023-09-15 01:37:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 01:38:56 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:03:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 02:10:05 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:43:41 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 02:45:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:45:26 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:45:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 02:45:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 02:45:52 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:45:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 02:46:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:46:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:47:00 --> Could not find the language line "Home"
ERROR - 2023-09-15 02:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-15 03:02:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 03:05:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-15 03:06:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 03:36:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 03:40:16 --> Could not find the language line "Home"
ERROR - 2023-09-15 03:51:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 03:54:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-15 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:03:09 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 04:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 04:04:45 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:19:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-15 04:22:01 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:24:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 04:24:40 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:25:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:25:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 04:25:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 04:27:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:28:45 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 04:31:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:31:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:31:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:31:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:31:09 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:32:24 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:33:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 04:49:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:06:28 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-15 05:09:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:10:13 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-15 05:17:25 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:17:43 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-09-15 05:21:28 --> Could not find the language line "Hair%20%and%20Body%20Care"
ERROR - 2023-09-15 05:27:35 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 05:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 05:28:46 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:31:04 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:33:01 --> Could not find the language line "Home"
ERROR - 2023-09-15 05:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 05:41:15 --> 404 Page Not Found: Main_Page/index
ERROR - 2023-09-15 05:42:22 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:00:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:08:50 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:36:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 06:38:58 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:39:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:42:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 06:43:01 --> Could not find the language line "Home"
ERROR - 2023-09-15 06:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 06:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 07:10:48 --> 404 Page Not Found: Well-known/admin.php
ERROR - 2023-09-15 07:10:49 --> 404 Page Not Found: Well-known/acme-challenge
ERROR - 2023-09-15 07:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 07:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 07:39:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 07:40:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 07:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-15 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 07:57:32 --> Could not find the language line "Home"
ERROR - 2023-09-15 07:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:02:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:02:52 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:02:57 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 08:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:03:07 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 08:03:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:03:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-15 08:03:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-15 08:03:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-15 08:03:57 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:04:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:05:28 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:23:23 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:29:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:29:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:38:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 08:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-15 08:40:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-15 08:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:44:03 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:47:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:47:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:47:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:47:54 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:47:54 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:49:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-15 08:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:50:50 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:51:38 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:51:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:51:50 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-09-15 08:52:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:52:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:52:33 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:53:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:54:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:54:37 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:54:50 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 08:55:01 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:55:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:55:45 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:55:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-15 08:56:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-15 08:56:22 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:57:02 --> Could not find the language line "Home"
ERROR - 2023-09-15 08:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 08:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-15 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 09:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:06:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 09:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:12:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 09:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-15 09:14:49 --> Could not find the language line "Home"
ERROR - 2023-09-15 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 09:32:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 09:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:43:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 09:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 09:54:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 09:54:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 09:56:41 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:07:31 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:08:23 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:09:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:09:10 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:09:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:09:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:09:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 10:12:30 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:16:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:22:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 10:29:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-15 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:42:31 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:42:39 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 10:53:20 --> Could not find the language line "Home"
ERROR - 2023-09-15 10:55:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-15 10:57:36 --> Could not find the language line "products"
ERROR - 2023-09-15 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:01:00 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:07:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 11:17:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:24:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 11:24:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 11:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 11:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 11:35:26 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 11:37:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 11:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 11:44:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-15 11:50:04 --> Could not find the language line "products"
ERROR - 2023-09-15 11:59:46 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:07:43 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:12:33 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:13:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 12:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:26:56 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 12:28:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 12:28:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-15 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:46:56 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 12:53:29 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:54:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 12:54:25 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:01:24 --> Could not find the language line "products"
ERROR - 2023-09-15 13:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:14:22 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:16:40 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:17:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:19:04 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:23:43 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:38:30 --> Could not find the language line "products"
ERROR - 2023-09-15 13:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:49:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 13:49:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-15 13:49:57 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:58:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 13:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 13:59:43 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:00:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:04:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 14:06:03 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:09:33 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:11:30 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:12:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-15 14:12:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-15 14:12:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-15 14:12:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-15 14:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:12:36 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:13:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 14:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 14:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:18:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:18:47 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:19:35 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:19:36 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:19:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:20:46 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:24:57 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:25:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:33:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 14:33:45 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:35:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:42:29 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:43:50 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:44:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 14:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:46:28 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 14:48:08 --> Could not find the language line "Home"
ERROR - 2023-09-15 14:48:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 14:48:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 14:48:49 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:02:54 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:03:51 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:04:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:04:39 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:04:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:04:53 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:05:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:15:16 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:38:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:48:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:57:26 --> Could not find the language line "Home"
ERROR - 2023-09-15 15:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 15:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:01:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-15 16:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:03:49 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 16:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:11:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:11:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:14:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 16:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:25:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:30:55 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:33:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:41:05 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:42:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 16:42:45 --> Could not find the language line "Home"
ERROR - 2023-09-15 16:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 16:45:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-15 16:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 17:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 17:03:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 17:09:32 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:32:51 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:35:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:35:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:35:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:35:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:35:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 17:36:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:37:27 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:46:03 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:50:51 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:54:21 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 17:57:36 --> Could not find the language line "Home"
ERROR - 2023-09-15 17:59:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:00:09 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:00:26 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:01:31 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:02:38 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:05:37 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:08:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 18:08:39 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:08:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 18:09:09 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:11:23 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:12:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:14:05 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:14:10 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 18:14:20 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 18:14:42 --> Could not find the language line "Bracelets"
ERROR - 2023-09-15 18:14:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:16:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-15 18:16:36 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:17:07 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:17:44 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:17:51 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 18:17:58 --> Could not find the language line "Other"
ERROR - 2023-09-15 18:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:18:15 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 18:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:18:24 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 18:18:26 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:27:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 18:54:06 --> Could not find the language line "Home"
ERROR - 2023-09-15 18:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-15 19:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:22:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 19:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 19:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 19:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:22:47 --> Could not find the language line "Home"
ERROR - 2023-09-15 19:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-15 19:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:44:14 --> Could not find the language line "Home"
ERROR - 2023-09-15 19:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 19:47:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 19:50:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 19:50:40 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:11:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:22:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-15 20:22:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-15 20:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:34:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-15 20:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 20:37:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 20:44:34 --> Could not find the language line "Home"
ERROR - 2023-09-15 20:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:42:13 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:43:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 21:45:16 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:45:46 --> Could not find the language line "Perfume"
ERROR - 2023-09-15 21:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:46:32 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:46:36 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:47:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:47:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:48:31 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:48:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:48:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-15 21:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:50:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-15 21:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:50:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-15 21:50:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-15 21:50:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-15 21:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-15 21:54:18 --> Could not find the language line "Home"
ERROR - 2023-09-15 21:57:31 --> Could not find the language line "Home"
ERROR - 2023-09-15 22:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 22:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-15 22:30:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 22:42:29 --> Could not find the language line "Other"
ERROR - 2023-09-15 22:45:26 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 22:47:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:00:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:04:01 --> Could not find the language line "products"
ERROR - 2023-09-15 23:06:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:12:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-15 23:12:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:13:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:14:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:15:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:21:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:22:28 --> Could not find the language line "products"
ERROR - 2023-09-15 23:30:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:33:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:34:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-09-15 23:35:00 --> Could not find the language line "products"
