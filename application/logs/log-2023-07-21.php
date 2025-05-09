<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-21 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 00:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 00:06:42 --> Could not find the language line "Home"
ERROR - 2023-07-21 00:07:26 --> Could not find the language line "Home"
ERROR - 2023-07-21 00:08:15 --> Could not find the language line "Socks"
ERROR - 2023-07-21 00:08:29 --> Could not find the language line "Home"
ERROR - 2023-07-21 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 00:37:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 00:58:24 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-21 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-21 01:06:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 01:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 01:22:51 --> Could not find the language line "Home"
ERROR - 2023-07-21 01:22:51 --> Could not find the language line "Home"
ERROR - 2023-07-21 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 02:22:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 02:23:00 --> Could not find the language line "Home"
ERROR - 2023-07-21 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-21 02:33:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-21 02:42:39 --> Could not find the language line "Home"
ERROR - 2023-07-21 02:53:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-21 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 03:08:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 03:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 03:51:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 04:29:58 --> Could not find the language line "Home"
ERROR - 2023-07-21 04:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 04:56:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 04:56:23 --> Could not find the language line "Home"
ERROR - 2023-07-21 04:58:30 --> Could not find the language line "Home"
ERROR - 2023-07-21 04:58:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 04:58:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 04:58:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 04:58:33 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-21 05:06:34 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:13:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 05:13:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-21 05:33:48 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:34:57 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:38:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 05:38:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-21 05:39:25 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:39:31 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:39:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 05:39:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 05:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:40:31 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:41:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 05:42:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 05:42:00 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:51:30 --> Could not find the language line "Bracelets"
ERROR - 2023-07-21 05:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:54:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 05:58:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 05:58:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-21 06:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:00:50 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:00:56 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:13:54 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:14:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:14:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:14:23 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:17:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:18:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:18:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:18:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:19:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:19:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:20:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:20:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 06:20:52 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:34:39 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:43:43 --> Could not find the language line "Home"
ERROR - 2023-07-21 06:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 06:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:13:37 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:14:06 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:35:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:35:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:37:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:42:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:42:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:47:00 --> 404 Page Not Found: Assets/filemanager
ERROR - 2023-07-21 07:47:01 --> 404 Page Not Found: Plugins/filemanager
ERROR - 2023-07-21 07:47:04 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:47:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:47:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:47:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:48:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-21 07:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 07:56:17 --> Could not find the language line "Home"
ERROR - 2023-07-21 07:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 07:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:04:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 08:04:50 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:13:35 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:15:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-21 08:15:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-21 08:15:01 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-21 08:15:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-21 08:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:30:06 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:35:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 08:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 08:42:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:00:42 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:22:48 --> Could not find the language line "Crocs"
ERROR - 2023-07-21 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:37:47 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:39:56 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:40:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 09:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 10:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-21 10:30:52 --> Could not find the language line "Home"
ERROR - 2023-07-21 10:31:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:31:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:31:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:31:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:31:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:31:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 10:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:33:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 10:33:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 10:38:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 10:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:38:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:39:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:43:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:43:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 10:44:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 10:51:53 --> Could not find the language line "Home"
ERROR - 2023-07-21 10:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 11:11:39 --> Could not find the language line "Home"
ERROR - 2023-07-21 11:24:07 --> Could not find the language line "Home"
ERROR - 2023-07-21 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 11:31:56 --> Could not find the language line "Home"
ERROR - 2023-07-21 11:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:00:35 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:02:08 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:02:58 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:05:50 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:08:52 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:19:51 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:34:28 --> Could not find the language line "Home"
ERROR - 2023-07-21 12:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-21 12:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:40:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-21 12:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-21 12:48:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 12:48:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '32'
AND `items`.`color` IN('Black', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 12:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 12:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 13:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:17:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 13:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:27:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 13:28:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 13:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:30:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 13:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 13:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 13:35:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 13:35:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 13:36:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 13:36:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 13:41:46 --> Could not find the language line "Home"
ERROR - 2023-07-21 13:57:07 --> Could not find the language line "Home"
ERROR - 2023-07-21 13:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-21 14:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 14:09:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 14:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 14:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 14:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 14:29:59 --> Could not find the language line "Home"
ERROR - 2023-07-21 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 14:39:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-21 14:49:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 14:56:49 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:00:51 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:06:28 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:12:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-21 15:16:10 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:22:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:22:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-21 15:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:41:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:41:39 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:41:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:41:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 15:41:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-21 15:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:52:41 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:54:22 --> Could not find the language line "Home"
ERROR - 2023-07-21 15:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 15:59:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-21 15:59:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:59:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 15:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 16:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-21 16:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 16:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 16:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:07:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 16:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:11:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 16:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 16:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:35:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-21 16:35:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-21 16:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 16:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:01:04 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:06:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-21 17:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:16:23 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:21:34 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:31:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 17:33:11 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:36:41 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:37:02 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:37:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-21 17:41:36 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:41:47 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:50:15 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:52:50 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:52:51 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:52:56 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:53:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 17:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:57:54 --> Could not find the language line "Home"
ERROR - 2023-07-21 17:58:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 17:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 17:59:50 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-21 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:07:03 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:19:35 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:24:10 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:24:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:24:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 18:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:24:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:25:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:25:25 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:25:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:25:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:25:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:26:53 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:27:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-21 18:27:46 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 18:28:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-21 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 18:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 18:51:27 --> Could not find the language line "Socks"
ERROR - 2023-07-21 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-21 19:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:09:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-21 19:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:10:28 --> Could not find the language line "Home"
ERROR - 2023-07-21 19:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:14:06 --> Could not find the language line "Home"
ERROR - 2023-07-21 19:14:43 --> Could not find the language line "Home"
ERROR - 2023-07-21 19:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 19:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:36:27 --> Could not find the language line "Socks"
ERROR - 2023-07-21 19:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 19:52:56 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:17:49 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:25:21 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:28:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-21 20:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 20:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 20:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:06:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:12:27 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:33:22 --> Could not find the language line "Home"
ERROR - 2023-07-21 21:58:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-21 21:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 21:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:03:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-21 22:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:13:32 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:13:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 22:14:07 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:14:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-21 22:21:13 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:24:31 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-21 22:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 22:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-21 23:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-21 23:30:13 --> Could not find the language line "Home"
