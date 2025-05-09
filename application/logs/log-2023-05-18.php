<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-18 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:02:29 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:14:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:19:22 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:24:49 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:24:50 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 00:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 01:05:17 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 01:33:25 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 01:45:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 01:52:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 01:57:29 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:11:18 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:11:18 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:41:49 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:41:49 --> Could not find the language line "Home"
ERROR - 2023-05-18 02:49:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 03:44:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 03:57:30 --> Could not find the language line "Home"
ERROR - 2023-05-18 03:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 04:09:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 04:14:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 04:14:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 04:14:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 04:34:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-18 04:34:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-18 04:34:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-18 04:34:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-18 04:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:38:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 04:38:38 --> Could not find the language line "Home"
ERROR - 2023-05-18 04:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 04:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 05:00:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 05:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:25:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-18 05:27:56 --> Could not find the language line "Home"
ERROR - 2023-05-18 05:28:01 --> 404 Page Not Found: Assets/mail
ERROR - 2023-05-18 05:28:01 --> 404 Page Not Found: Assets/mail
ERROR - 2023-05-18 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 05:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:42:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-18 05:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 05:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:05:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:20:52 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:21:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:23:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:23:34 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:23:37 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:23:47 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-18 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:43:30 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:43:33 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:44:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 06:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:48:26 --> Could not find the language line "Home"
ERROR - 2023-05-18 06:50:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 06:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:50:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:51:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:52:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 06:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 06:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:00:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:05:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:11:51 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:16:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:20:02 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:23:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:24:00 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:25:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:26:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:26:51 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:31:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 07:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:37:52 --> Could not find the language line "Home"
ERROR - 2023-05-18 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 07:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:09:58 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:10:24 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:10:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:12:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:14:04 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:14:31 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:15:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:15:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:15:55 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:16:46 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:17:56 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:18:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:19:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 08:19:24 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:19:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:19:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:20:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:20:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:21:03 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:21:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:21:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:22:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:23:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:23:30 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:23:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:23:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:23:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 08:23:46 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:23:50 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 08:23:53 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:23:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 08:24:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 08:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:24:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 08:24:35 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:24:41 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 08:24:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:25:27 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:25:32 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:25:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:25:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:25:54 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:26:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:26:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:27:20 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:27:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:27:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:40:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-18 08:42:32 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 08:55:52 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:56:20 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:56:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 08:56:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 08:58:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:06:44 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:19:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:21:30 --> 404 Page Not Found: Plugins/elfinder
ERROR - 2023-05-18 09:28:18 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:31:17 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:31:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:31:28 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 09:32:01 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 09:32:13 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 09:32:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:32:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:32:52 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:33:02 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:33:33 --> Could not find the language line "Home"
ERROR - 2023-05-18 09:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 09:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:03:05 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:15:03 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:16:44 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:16:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 10:17:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 10:17:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 10:17:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:17:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 10:17:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:18:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:18:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:18:34 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:19:00 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:21:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:21:24 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 10:21:33 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:21:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 10:22:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 10:22:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-18 10:22:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 10:22:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:22:16 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 10:25:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 10:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:37:08 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:37:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:38:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 10:38:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-18 10:38:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-18 10:38:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-18 10:38:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-18 10:45:05 --> Could not find the language line "Home"
ERROR - 2023-05-18 10:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 10:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 11:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 11:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 11:03:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-18 11:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-18 11:20:40 --> Could not find the language line "Home"
ERROR - 2023-05-18 11:20:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 11:21:02 --> Could not find the language line "Home"
ERROR - 2023-05-18 11:28:50 --> Could not find the language line "Other"
ERROR - 2023-05-18 11:30:09 --> Could not find the language line "Home"
ERROR - 2023-05-18 11:37:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 11:59:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:02:29 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:04:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:17:24 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:18:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:18:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:19:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:20:04 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:20:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 12:20:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:35:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:35:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 12:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:37:24 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 12:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:39:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:39:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:44:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 12:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:53:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 12:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 12:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:03:00 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 13:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 13:13:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 13:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-18 13:28:29 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:30:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:30:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:45:49 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:46:20 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:56:28 --> Could not find the language line "Home"
ERROR - 2023-05-18 13:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 13:58:28 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:01:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-18 14:04:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:04:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 14:04:36 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:04:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:06:20 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:06:34 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:06:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:06:55 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 14:07:05 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:07:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 14:08:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-18 14:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:08:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 14:09:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-18 14:12:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 14:24:13 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:31:47 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:55:28 --> Could not find the language line "Home"
ERROR - 2023-05-18 14:55:40 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:02:28 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-18 15:02:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-18 15:02:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-18 15:02:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-18 15:09:26 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:25:38 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:31:59 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:34:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:40:07 --> Could not find the language line "Home"
ERROR - 2023-05-18 15:51:44 --> 404 Page Not Found: Products/index
ERROR - 2023-05-18 15:54:44 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 16:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 16:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 16:11:56 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:12:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 16:12:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-18 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:32:04 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:40:32 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:40:34 --> Could not find the language line "Home"
ERROR - 2023-05-18 16:57:53 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:00:02 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:00:40 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:04:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:04:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:05:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:08:09 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:11:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:17:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 17:21:31 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:34:46 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:36:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:50:30 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:52:32 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:56:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 17:58:09 --> Could not find the language line "Home"
ERROR - 2023-05-18 17:58:26 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:10:21 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:11:40 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:12:02 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:12:33 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:21:32 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-18 18:28:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:32:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:34:22 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:42:35 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:43:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:44:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:45:04 --> Could not find the language line "Home"
ERROR - 2023-05-18 18:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:47:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 18:47:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:47:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 18:56:26 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 19:30:18 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:31:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:31:15 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:35:26 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 19:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 19:42:13 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 19:42:56 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 19:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 19:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 19:58:18 --> Could not find the language line "Home"
ERROR - 2023-05-18 19:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 19:58:55 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:12:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:21:57 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:23:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:23:40 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:23:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:23:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:24:30 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:24:51 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:25:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:25:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:26:05 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:26:06 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:26:08 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:26:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:26:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:27:01 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:27:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:27:48 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:29:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:29:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 20:29:46 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:30:22 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:30:35 --> Could not find the language line "Socks"
ERROR - 2023-05-18 20:31:08 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:31:11 --> Could not find the language line "Perfume"
ERROR - 2023-05-18 20:31:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:31:18 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 20:31:29 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:32:06 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:32:38 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:43 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:43 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:44 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:44 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:32:52 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:55 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:32:58 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:33:41 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:33:47 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:33:56 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-18 20:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:34:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:34:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 20:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:36:35 --> Could not find the language line "Bracelets"
ERROR - 2023-05-18 20:36:39 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:36:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 20:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:38:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-18 20:41:19 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:43:17 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:44:50 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 20:46:42 --> Could not find the language line "Home"
ERROR - 2023-05-18 20:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-18 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-18 21:30:24 --> Could not find the language line "Home"
ERROR - 2023-05-18 22:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 22:25:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 22:25:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 22:26:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 22:28:39 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-18 22:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 22:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 22:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 22:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-18 23:00:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 23:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-18 23:26:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 23:30:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 23:31:25 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-18 23:34:23 --> Could not find the language line "Home"
ERROR - 2023-05-18 23:41:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 23:41:45 --> Could not find the language line "Home"
ERROR - 2023-05-18 23:41:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 23:42:43 --> Could not find the language line "Home"
ERROR - 2023-05-18 23:43:38 --> Could not find the language line "Home"
ERROR - 2023-05-18 23:53:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-18 23:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
