<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-13 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-04-13 00:00:38 --> Could not find the language line "Home"
ERROR - 2023-04-13 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 00:55:55 --> Could not find the language line "Home"
ERROR - 2023-04-13 01:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 01:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 01:30:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 01:54:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 01:55:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 02:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 02:06:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 02:08:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 02:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 02:58:09 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:16:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 03:16:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 03:16:47 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-13 03:16:52 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-13 03:16:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 03:16:58 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-13 03:17:05 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-13 03:17:11 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-13 03:17:14 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-13 03:20:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 03:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 03:23:29 --> Could not find the language line "Other"
ERROR - 2023-04-13 03:23:32 --> Could not find the language line "Other"
ERROR - 2023-04-13 03:28:30 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:29:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:36:38 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:36:42 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:37:37 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:38:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 03:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:46:28 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:55:49 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 03:56:27 --> Could not find the language line "Home"
ERROR - 2023-04-13 03:59:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:05:54 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:06:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:10:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:10:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:10:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:11:15 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:11:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 04:11:39 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:11:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:11:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 04:12:33 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:12:41 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:12:47 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 04:13:20 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 04:13:26 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:13:41 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 04:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:14:25 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 04:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:14:54 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 04:14:56 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:15:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-13 04:15:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-13 04:16:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-13 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:44:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 04:47:59 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:50:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 04:51:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 04:58:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 04:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 05:13:54 --> Could not find the language line "Home"
ERROR - 2023-04-13 05:17:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 05:50:32 --> Could not find the language line "Home"
ERROR - 2023-04-13 05:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:02:59 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:04:29 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:08:59 --> Could not find the language line "Other"
ERROR - 2023-04-13 06:09:16 --> Could not find the language line "Other"
ERROR - 2023-04-13 06:09:29 --> Could not find the language line "Socks"
ERROR - 2023-04-13 06:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:09:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 06:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:14:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:14:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:14:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:17:53 --> Could not find the language line "Socks"
ERROR - 2023-04-13 06:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:18:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:18:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:18:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 06:19:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 06:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:20:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 06:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:20:23 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:22:59 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:23:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:26:53 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:31:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 06:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:35:01 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:35:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-13 06:35:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-13 06:35:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-13 06:35:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-13 06:35:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-13 06:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-13 06:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-13 06:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-13 06:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-13 06:35:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-04-13 06:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:47:41 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:47:48 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:56:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 06:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 06:59:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 06:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:20:26 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:21:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:21:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:27:07 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:29:51 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:29:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:30:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:32:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:33:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:34:48 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:40:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 07:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:41:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:44:30 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:44:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:48:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:53:36 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:54:16 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:54:44 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:55:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:55:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 07:55:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:55:31 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:55:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 07:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:56:08 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:56:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 07:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 07:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:56:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 07:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:57:18 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:57:19 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:58:47 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:59:06 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:59:09 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 07:59:11 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 07:59:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 07:59:38 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:59:40 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 07:59:42 --> Could not find the language line "Home"
ERROR - 2023-04-13 07:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:00:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:02:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:02:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:02:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:02:40 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:02:57 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:03:26 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:03:30 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:03:42 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:03:48 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:04:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:04:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:04:54 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:04:56 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:05:18 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:05:39 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:05:42 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:06:07 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:06:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:06:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:07:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:07:58 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 08:08:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:09:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:12:52 --> Could not find the language line "Other"
ERROR - 2023-04-13 08:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:13:09 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 08:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:13:41 --> Could not find the language line "Socks"
ERROR - 2023-04-13 08:13:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-13 08:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:14:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 08:14:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-13 08:14:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:15:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:15:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:15:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:16:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:16:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:17:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:17:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:18:31 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:19:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:19:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:20:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 08:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:23:55 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:24:07 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:26:29 --> Could not find the language line "Other"
ERROR - 2023-04-13 08:28:25 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 08:28:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-13 08:28:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:30:18 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:37:03 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:41:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 08:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 08:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 08:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 08:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:00:30 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:01:31 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:01:37 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:02:18 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:08:56 --> 404 Page Not Found: Assets/admin
ERROR - 2023-04-13 09:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:18:13 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:18:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:19:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:19:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:20:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:20:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:21:02 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:21:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:21:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:22:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:24:53 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:24:57 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:25:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:25:22 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:25:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:26:05 --> Could not find the language line "Hair%20"
ERROR - 2023-04-13 09:26:17 --> Could not find the language line "Hair%20"
ERROR - 2023-04-13 09:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:26:33 --> Could not find the language line "Hair%20"
ERROR - 2023-04-13 09:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:28:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:28:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 09:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:32:16 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:34:04 --> Could not find the language line "Hair%20"
ERROR - 2023-04-13 09:34:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:34:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 09:35:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 09:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:37:18 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:37:18 --> Could not find the language line "Home"
ERROR - 2023-04-13 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:52:44 --> Could not find the language line "Hair%20"
ERROR - 2023-04-13 09:52:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:53:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:53:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:54:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 09:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 09:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 10:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 10:10:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:10:41 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:13:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:13:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 10:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:28:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:38:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 10:38:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 10:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 10:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:49:56 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-13 10:49:57 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-13 10:49:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-13 10:49:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-13 10:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:52:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 10:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 10:58:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 10:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:01:29 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:01:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 11:01:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 11:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:02:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:03:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:05:01 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 11:05:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:05:54 --> Could not find the language line "Perfume"
ERROR - 2023-04-13 11:06:56 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:09:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:10:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:10:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:14:41 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:19:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:20:20 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:20:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:21:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:28:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 11:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:34:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:38:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:38:53 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:39:14 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:45:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:45:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:45:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:46:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:46:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 11:49:53 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:50:20 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:50:48 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:52:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 11:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:54:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 11:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 11:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 12:02:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 12:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 12:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 12:17:42 --> Could not find the language line "Home"
ERROR - 2023-04-13 12:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 12:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 12:33:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 12:33:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-13 12:33:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 12:37:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 12:42:26 --> Could not find the language line "Home"
ERROR - 2023-04-13 12:52:33 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:05:03 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:17:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 13:20:36 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:33:49 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:34:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:45:02 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:45:42 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:53:01 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:53:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 13:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 13:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:02:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:02:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:02:34 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 14:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:03:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 14:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:05:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:06:23 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:09:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-13 14:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:18:29 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:21:07 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:35:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:37:57 --> Could not find the language line "Home"
ERROR - 2023-04-13 14:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 14:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:04:20 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:06:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:06:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:06:19 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 15:06:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:06:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 15:06:48 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:21:03 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:21:12 --> Could not find the language line "Bracelets"
ERROR - 2023-04-13 15:21:20 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:21:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:35:16 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:42:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:48:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 15:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:49:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:49:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 15:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:49:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 15:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 15:49:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-13 15:49:52 --> Could not find the language line "Home"
ERROR - 2023-04-13 15:54:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 16:20:14 --> Could not find the language line "Home"
ERROR - 2023-04-13 16:29:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 16:34:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 16:44:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 16:44:22 --> Could not find the language line "Home"
ERROR - 2023-04-13 16:50:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 17:17:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-13 17:21:47 --> Could not find the language line "Home"
ERROR - 2023-04-13 17:28:28 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-13 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 17:30:14 --> 404 Page Not Found: Wp-includes/css
ERROR - 2023-04-13 17:40:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 17:47:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-13 17:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 17:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 18:00:05 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:20:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 18:21:12 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 18:22:00 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:46:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 18:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:15:28 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:15:57 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:31:51 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:32:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:32:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:35:38 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:52:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 19:54:34 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:07:07 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:07:43 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:08:27 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:11:19 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:11:58 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:15:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-13 20:17:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:43:21 --> Could not find the language line "Home"
ERROR - 2023-04-13 20:55:08 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:21:08 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:21:45 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:35:25 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 21:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 21:37:15 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 21:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 21:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 21:45:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-13 21:45:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-13 21:46:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:49:35 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:49:36 --> Could not find the language line "Home"
ERROR - 2023-04-13 21:50:07 --> Could not find the language line "Home"
ERROR - 2023-04-13 22:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-13 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 22:43:44 --> Could not find the language line "Home"
ERROR - 2023-04-13 22:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 22:44:09 --> Could not find the language line "Home"
ERROR - 2023-04-13 22:44:49 --> Could not find the language line "Home"
ERROR - 2023-04-13 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-13 23:17:30 --> Could not find the language line "Home"
ERROR - 2023-04-13 23:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-13 23:18:21 --> Could not find the language line "Home"
ERROR - 2023-04-13 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-13 23:44:48 --> 404 Page Not Found: Assets/css
