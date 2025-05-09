<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-04-17 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:04:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:07:05 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 00:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 00:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 00:08:12 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 00:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 00:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 00:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 00:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 00:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 00:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 00:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 00:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 00:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:14:32 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:55:34 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 00:56:35 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:57:10 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 00:57:37 --> Could not find the language line "Home"
ERROR - 2023-04-17 00:59:16 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:21:38 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:22:05 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:39:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 01:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 01:53:48 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:58:52 --> Could not find the language line "Home"
ERROR - 2023-04-17 01:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 01:59:35 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:00:20 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:01:03 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:05:34 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 02:07:28 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:08:05 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:08:34 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:08:54 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:03 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:07 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:09:09 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:10 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:12 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:13 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:14 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 02:09:33 --> Could not find the language line "Socks"
ERROR - 2023-04-17 02:09:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 02:09:58 --> Could not find the language line "Socks"
ERROR - 2023-04-17 02:10:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 02:10:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 02:10:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 02:10:26 --> Could not find the language line "Other"
ERROR - 2023-04-17 02:11:34 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 02:30:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-17 02:38:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 02:38:11 --> Could not find the language line "Other"
ERROR - 2023-04-17 03:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 03:06:36 --> Could not find the language line "Home"
ERROR - 2023-04-17 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 03:49:46 --> Could not find the language line "Home"
ERROR - 2023-04-17 03:55:16 --> Could not find the language line "Home"
ERROR - 2023-04-17 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 04:01:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 04:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 05:00:09 --> Could not find the language line "Home"
ERROR - 2023-04-17 05:28:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 05:33:46 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:13:18 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:14:33 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:28:55 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:33:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 06:33:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 06:33:52 --> Could not find the language line "Home"
ERROR - 2023-04-17 06:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:55:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 06:55:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 06:55:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 06:57:10 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 06:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 06:59:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-17 06:59:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-17 06:59:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-17 06:59:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-17 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:00:54 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 07:01:16 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 07:04:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:11:30 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:24:35 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:26:53 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 07:27:08 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 07:27:17 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 07:27:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:38:29 --> Could not find the language line "Home"
ERROR - 2023-04-17 07:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:43:34 --> 404 Page Not Found: Theme/assets
ERROR - 2023-04-17 07:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:55:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 07:55:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 07:55:59 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-17 07:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 07:56:30 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-04-17 07:57:01 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-17 07:57:33 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-04-17 07:58:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 07:58:06 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:00:09 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:01:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 08:03:16 --> Could not find the language line "Disclaimer"
ERROR - 2023-04-17 08:04:18 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:06:22 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 08:06:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:07:55 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:08:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:09:28 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 08:13:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:13:45 --> Could not find the language line "Other"
ERROR - 2023-04-17 08:14:16 --> Could not find the language line "Other"
ERROR - 2023-04-17 08:14:47 --> Could not find the language line "Other"
ERROR - 2023-04-17 08:15:18 --> Could not find the language line "Other"
ERROR - 2023-04-17 08:16:06 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 08:18:49 --> Could not find the language line "Socks"
ERROR - 2023-04-17 08:19:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 08:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:24:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 08:24:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 08:24:40 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:25:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:45:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 08:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:53:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 08:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 08:57:35 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-04-17 08:58:09 --> Could not find the language line "Home"
ERROR - 2023-04-17 08:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:01:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-04-17 09:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:03:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 09:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:05:37 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 09:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:30 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:19:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 09:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:25:37 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:25:54 --> 404 Page Not Found: Home/accounting
ERROR - 2023-04-17 09:25:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-04-17 09:25:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-04-17 09:25:55 --> 404 Page Not Found: Home/accounting
ERROR - 2023-04-17 09:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:27:21 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:27:39 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:28:25 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-17 09:28:25 --> 404 Page Not Found: Assets/images
ERROR - 2023-04-17 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:33:03 --> Could not find the language line "Home"
ERROR - 2023-04-17 09:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:35:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 09:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:44:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:44:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 09:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 09:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:02:10 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:03:20 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:09:43 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:09:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:12:36 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:15:37 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:16:52 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:16:56 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:17:00 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:17:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:17:42 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:18:45 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:18:53 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:19:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:20:01 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:23:59 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 10:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:31:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:36:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:42:26 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:42:26 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:42:31 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:42:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-17 10:42:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-17 10:42:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-17 10:42:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-17 10:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:50:44 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:51:03 --> Could not find the language line "Other"
ERROR - 2023-04-17 10:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 10:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:54:07 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-17 10:54:07 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-17 10:54:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-17 10:54:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-17 10:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:56:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:57:45 --> Could not find the language line "Home"
ERROR - 2023-04-17 10:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:58:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 10:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 10:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:01:19 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:01:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:03:53 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:07:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-17 11:07:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-17 11:07:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-17 11:07:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-17 11:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 11:08:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 11:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:08:19 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 11:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:10:48 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:10:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 11:11:03 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:11:08 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 11:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 11:11:20 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:12:01 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:14:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:14:27 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:14:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 11:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:21:26 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:24:19 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:25:15 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:25:36 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:29:00 --> Could not find the language line "Other"
ERROR - 2023-04-17 11:29:24 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:30:25 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:30:33 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 11:31:07 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:31:09 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:43:02 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-04-17 11:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 11:53:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 11:55:21 --> Could not find the language line "Home"
ERROR - 2023-04-17 11:57:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:06:58 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:12:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 12:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:15:51 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:17:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 12:17:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 12:17:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 12:17:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 12:17:28 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 12:17:53 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:17:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 12:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:18:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 12:18:33 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:18:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:22:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:24:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:35:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 12:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 12:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 12:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:40:05 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 12:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:44:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:48:41 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:54:34 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-04-17 12:54:34 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-04-17 12:54:34 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-04-17 12:54:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-04-17 12:57:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:58:03 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:58:25 --> Could not find the language line "Home"
ERROR - 2023-04-17 12:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 12:58:47 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:02:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:02:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:02:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:02:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:02:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:02:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:02:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:02:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:03:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:03:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:03:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:04:57 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:05:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:05:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:05:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:06:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:06:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 13:06:50 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:06:51 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 13:06:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:06:55 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 13:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:12:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:12:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-17 13:14:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:22:00 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:22:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:22:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 13:23:08 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:27:51 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:27:58 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:32:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:33:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:33:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:33:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:33:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:33:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:33:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:33:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:38:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:38:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:38:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:38:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:38:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:39:18 --> Could not find the language line "Home"
ERROR - 2023-04-17 13:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:40:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-04-17 13:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey', 'White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-04-17 13:47:07 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 13:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 13:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:16:49 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:34:33 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:35:18 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:35:30 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:35:32 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:36:11 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 14:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:45:43 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 14:52:08 --> Could not find the language line "Home"
ERROR - 2023-04-17 14:52:38 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 14:53:48 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 15:29:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 15:45:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 15:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 15:50:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:01:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:02:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:03:15 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:03:31 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:05:40 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:05:42 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:06:16 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:07:06 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:08:50 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:38:28 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:43:41 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:44:25 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:44:40 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:44:55 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:44:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 16:45:01 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:46:15 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:54:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 16:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 16:57:30 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:05:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:07:06 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:14:05 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:15:20 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:19:42 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:25:34 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:26:09 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:26:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 17:27:23 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 17:27:41 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:28:32 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:28:50 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:28:53 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 17:39:42 --> 404 Page Not Found: Jquery_uploader/server
ERROR - 2023-04-17 17:47:23 --> Could not find the language line "Home"
ERROR - 2023-04-17 17:54:37 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-17 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:04:35 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 18:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:35:49 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:38:54 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:48:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 18:54:59 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:11:08 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:16:19 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:27:39 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:31:36 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-04-17 19:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:41:32 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 19:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:50:33 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 19:53:14 --> Could not find the language line "Home"
ERROR - 2023-04-17 19:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 19:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:06:51 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:38:26 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:40:05 --> Could not find the language line "Other"
ERROR - 2023-04-17 20:41:42 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:42:59 --> Could not find the language line "Other"
ERROR - 2023-04-17 20:44:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-04-17 20:51:40 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:52:17 --> Could not find the language line "Home"
ERROR - 2023-04-17 20:58:36 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:07:42 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:12:48 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-17 21:18:41 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 21:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 21:29:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-04-17 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 21:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-04-17 21:51:02 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 21:51:29 --> Could not find the language line "Home"
ERROR - 2023-04-17 21:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:09:38 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:18:18 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:18:46 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:18:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-04-17 22:19:05 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:19:29 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:20:06 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:20:10 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:20:33 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:21:52 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:22:33 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:25:30 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-04-17 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:34:35 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:38:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 22:38:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 22:40:38 --> Could not find the language line "Home"
ERROR - 2023-04-17 22:40:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:41:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:41:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:42:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:42:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:43:21 --> Could not find the language line "Perfume"
ERROR - 2023-04-17 22:43:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:43:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:43:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:44:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:44:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:44:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:45:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:45:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:46:16 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 22:46:28 --> Could not find the language line "Bracelets"
ERROR - 2023-04-17 22:46:55 --> Could not find the language line "Socks"
ERROR - 2023-04-17 22:47:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 22:47:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-04-17 22:48:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:48:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:49:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 22:49:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-04-17 22:49:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 22:49:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-04-17 22:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-04-17 22:54:37 --> Could not find the language line "Home"
ERROR - 2023-04-17 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-04-17 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-04-17 23:53:04 --> Could not find the language line "Home"
