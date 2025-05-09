<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-15 00:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-15 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 00:40:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 00:50:52 --> Could not find the language line "Home"
ERROR - 2023-08-15 00:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:01:54 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:04:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 01:12:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:15:07 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 01:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 01:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 01:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 01:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:24:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:24:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-15 01:42:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 01:56:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 02:10:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 02:15:47 --> Could not find the language line "Home"
ERROR - 2023-08-15 02:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 02:37:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 02:49:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-15 02:51:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 02:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 03:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-15 03:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:06:54 --> Could not find the language line "Home"
ERROR - 2023-08-15 03:06:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 03:06:55 --> Could not find the language line "Home"
ERROR - 2023-08-15 03:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 03:33:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 03:47:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:49:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:50:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 03:57:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 04:04:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:06:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:06:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 04:32:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:53:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 04:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 04:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:01:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 05:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 05:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 05:12:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 05:18:38 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:23:00 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:23:58 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:23:59 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:24:02 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:25:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 05:25:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 05:38:06 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:40:18 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 05:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 05:46:08 --> Could not find the language line "Home"
ERROR - 2023-08-15 05:51:05 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:00:53 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:01:28 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:01:29 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-15 06:01:29 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-15 06:01:29 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-15 06:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:09:19 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:13:51 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:15:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:20:21 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:21:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 06:21:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 06:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:21:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 06:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 06:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:28:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 06:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:30:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 06:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:51:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 06:51:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-15 06:55:19 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:58:55 --> Could not find the language line "Home"
ERROR - 2023-08-15 06:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 06:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:00:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 07:00:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-15 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:01:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 07:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 07:20:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:42:46 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:44:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:54:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 07:55:59 --> Could not find the language line "Home"
ERROR - 2023-08-15 07:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 07:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 08:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:13:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 08:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 08:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:30:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 08:30:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-15 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 08:33:53 --> Could not find the language line "Home"
ERROR - 2023-08-15 08:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:36:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 08:41:38 --> Could not find the language line "Home"
ERROR - 2023-08-15 08:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 08:57:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 08:57:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:16:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 09:16:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 09:16:51 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-15 09:16:56 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-15 09:17:01 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-15 09:17:06 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-15 09:17:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 09:17:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:18:21 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-15 09:18:35 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:19:01 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 09:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:19:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:21:05 --> Could not find the language line "Other"
ERROR - 2023-08-15 09:21:11 --> Could not find the language line "Other"
ERROR - 2023-08-15 09:21:19 --> Could not find the language line "Other"
ERROR - 2023-08-15 09:21:24 --> Could not find the language line "Other"
ERROR - 2023-08-15 09:21:41 --> Could not find the language line "Other"
ERROR - 2023-08-15 09:21:48 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 09:22:19 --> Could not find the language line "Socks"
ERROR - 2023-08-15 09:22:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 09:23:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-15 09:23:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-15 09:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:31:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:31:32 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:34:24 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:34:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-15 09:34:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-15 09:34:44 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:34:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:36:37 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:36:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:37:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:37:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:38:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:39:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:39:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:40:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:40:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:41:24 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:41:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:42:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:43:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:43:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:43:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 09:43:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:44:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:45:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:46:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:46:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:47:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:47:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 09:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-15 09:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:48:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:48:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:49:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:50:04 --> Could not find the language line "Home"
ERROR - 2023-08-15 09:50:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:50:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 09:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 09:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:05:41 --> Could not find the language line "Other"
ERROR - 2023-08-15 10:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:25:54 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:25:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:26:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:26:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:26:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:26:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:26:48 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:26:51 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 10:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:27:08 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 10:27:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:27:13 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 10:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:27:19 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:27:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:27:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:28:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:28:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:29:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:29:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:30:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:30:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:31:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:31:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:32:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:32:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:33:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:33:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:34:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:34:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:34:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:35:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:36:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:36:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:36:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:37:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:37:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:37:22 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:37:23 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 10:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:37:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:37:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:38:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:38:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:38:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:38:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:39:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:39:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:39:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:40:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:41:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:41:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:41:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:42:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:42:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:42:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:42:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:43:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 10:43:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:43:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 10:44:08 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 10:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:51:35 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:51:36 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:52:03 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:58:59 --> Could not find the language line "Home"
ERROR - 2023-08-15 10:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 10:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:03:52 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:08:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 11:08:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 11:08:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 11:08:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 11:15:03 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:21:46 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:22:03 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:22:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 11:22:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 11:23:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:23:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 11:23:37 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:25:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:29:56 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:31:34 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:46:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:47:33 --> 404 Page Not Found: Git/config
ERROR - 2023-08-15 11:53:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 11:54:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:09:24 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:11:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:20:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 12:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:29:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 12:29:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-15 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:38:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 12:39:46 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:39:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:40:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:40:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:40:57 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:41:01 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 12:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:41:50 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:42:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:43:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 12:45:23 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:48:33 --> Could not find the language line "Home"
ERROR - 2023-08-15 12:48:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 12:48:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 12:49:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 12:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 12:57:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 12:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-15 12:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:02:29 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:03:49 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:09:46 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:11:01 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:13:02 --> Query error: Unknown column 'items.publish' in 'where clause' - Invalid query: SELECT a.*
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
		WHERE (items.publish = 1) AND (a.barcode = 'H422') 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-08-15 13:13:48 --> Query error: Unknown column 'items.publish' in 'where clause' - Invalid query: SELECT a.*
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
		WHERE (items.publish = 1) AND (tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 1296
ERROR - 2023-08-15 13:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:16:37 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 13:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 13:16:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 13:16:39 --> Query error: Unknown column 'items.publish' in 'where clause' - Invalid query: SELECT a.*
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
		WHERE (items.publish = 1) AND (a.barcode = 'H422') 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-08-15 13:16:40 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-15 13:17:16 --> Query error: Unknown column 'items.publish' in 'where clause' - Invalid query: SELECT a.*
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
		WHERE (items.publish = 1) AND ((a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 450
ERROR - 2023-08-15 13:17:34 --> Query error: Unknown column 'items.publish' in 'where clause' - Invalid query: SELECT a.*
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
		WHERE (items.publish = 1) AND (a.barcode = 'H422') 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET 0
ERROR - 2023-08-15 13:17:35 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:17:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:17:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 13:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-15 13:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:18:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:19:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:19:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:19:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:20:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:20:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:20:56 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:21:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:21:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:21:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 13:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:21:22 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:22:49 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:23:34 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:24:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:18 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:27 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:25:46 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:26:08 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:29:23 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:30:50 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:31:01 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:31:05 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:32:13 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:32:25 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:32:33 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 13:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:32:50 --> Could not find the language line "Perfume"
ERROR - 2023-08-15 13:32:58 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:33:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:33:04 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:39:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:40:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:40:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:41:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 13:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:42:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:42:46 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:43:24 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:43:27 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:44:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 13:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 13:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:49:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 13:50:53 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:51:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:52:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 13:57:34 --> Could not find the language line "Home"
ERROR - 2023-08-15 13:58:15 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-15 13:58:15 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-15 13:58:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-15 13:58:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-15 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:02:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 14:12:40 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:12:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 14:12:44 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:12:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-15 14:14:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 14:14:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 14:15:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-15 14:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:22:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-15 14:22:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-15 14:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:33:56 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:34:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 14:34:28 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:34:31 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:34:47 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:45:41 --> Could not find the language line "Home"
ERROR - 2023-08-15 14:56:37 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:10:41 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:10:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 15:10:57 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:13:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:48:43 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:49:20 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-08-15 15:49:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-15 15:49:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-08-15 15:49:34 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-08-15 15:51:42 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:52:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:53:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 15:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 15:53:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 15:53:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:53:55 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:53:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 15:54:02 --> Could not find the language line "Home"
ERROR - 2023-08-15 15:54:03 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-15 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:00:50 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:10:29 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:10:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 16:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:10:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 16:11:02 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 16:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:11:19 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 16:11:26 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:12:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 16:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:16:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 16:21:39 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:27:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 16:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 16:45:00 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:46:21 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:48:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:48:56 --> Could not find the language line "Home"
ERROR - 2023-08-15 16:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 17:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 17:03:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 17:17:25 --> Could not find the language line "Home"
ERROR - 2023-08-15 17:19:37 --> Could not find the language line "Home"
ERROR - 2023-08-15 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 17:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 17:38:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:00:28 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:05:02 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:06:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 18:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:46:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:54:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 18:57:21 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:57:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 18:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 18:58:22 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:58:40 --> Could not find the language line "Home"
ERROR - 2023-08-15 18:58:46 --> Could not find the language line "Bracelets"
ERROR - 2023-08-15 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:03:52 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:04:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-15 19:09:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:10:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 19:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:12:26 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:20:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:30:06 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:34:00 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:36:53 --> Could not find the language line "Home"
ERROR - 2023-08-15 19:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 19:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 20:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 20:16:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:16:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:16:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:16:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:16:09 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 20:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 20:53:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-15 20:54:08 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:03:52 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 21:15:13 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-15 21:20:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 21:21:00 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:23:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-15 21:36:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 21:56:12 --> Could not find the language line "Home"
ERROR - 2023-08-15 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-15 22:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 22:24:30 --> Could not find the language line "Home"
ERROR - 2023-08-15 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 22:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 22:38:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 23:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:08:34 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:16:19 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:21:43 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:26:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-15 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:30:31 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:30:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-15 23:30:50 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:31:22 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 23:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 23:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 23:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-15 23:49:14 --> Could not find the language line "Home"
ERROR - 2023-08-15 23:51:26 --> Could not find the language line "Home"
