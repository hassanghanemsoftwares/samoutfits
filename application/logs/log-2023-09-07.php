<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-07 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 00:04:02 --> Could not find the language line "Home"
ERROR - 2023-09-07 00:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-07 00:26:00 --> Could not find the language line "Home"
ERROR - 2023-09-07 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Feed/index
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-07 01:26:37 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-07 01:26:38 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-07 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 02:01:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 02:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 02:51:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 02:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 03:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 03:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-07 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-07 04:09:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 04:15:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 04:34:58 --> Could not find the language line "Home"
ERROR - 2023-09-07 04:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 04:48:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 04:51:04 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:15:00 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 05:44:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 05:46:49 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:52:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 05:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-07 05:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 05:54:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:03:21 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:03:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 06:03:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 06:07:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:07:32 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:35:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 06:35:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 06:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:40:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:44:50 --> Could not find the language line "Home"
ERROR - 2023-09-07 06:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 06:58:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:38 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:12:31 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:13:57 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:17:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 07:17:51 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:28:48 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:29:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 07:29:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:34:53 --> 404 Page Not Found: Env/index
ERROR - 2023-09-07 07:40:13 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:51:53 --> Could not find the language line "Home"
ERROR - 2023-09-07 07:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 07:58:54 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:18:05 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:18:43 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:24:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 08:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-07 08:25:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 08:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:25:59 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:26:37 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:47:55 --> Could not find the language line "Home"
ERROR - 2023-09-07 08:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:48:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 08:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 08:56:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:00:27 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:12:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 09:12:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 09:15:03 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:16:04 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:19:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 09:19:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 09:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:21:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:23:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:34:27 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:35:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:35:18 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:31 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:31 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:31 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:36:34 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:38:07 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:39:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 09:39:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '12'
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-07 09:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:42:02 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:42:03 --> Could not find the language line "Home"
ERROR - 2023-09-07 09:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:46:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 09:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:58:06 --> Could not find the language line "Other"
ERROR - 2023-09-07 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 09:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 10:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:02:42 --> Could not find the language line "Home"
ERROR - 2023-09-07 10:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:03:59 --> Could not find the language line "Bracelets"
ERROR - 2023-09-07 10:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 10:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:41:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 10:51:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 10:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 10:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 10:59:23 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-07 11:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:02:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 11:02:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 11:02:56 --> Could not find the language line "assets"
ERROR - 2023-09-07 11:03:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 11:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 11:21:51 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:22:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 11:22:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 11:22:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:23:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 11:23:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:23:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:23:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:23:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:29:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:30:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 11:30:46 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:57:09 --> Could not find the language line "Home"
ERROR - 2023-09-07 11:57:14 --> Could not find the language line "Bracelets"
ERROR - 2023-09-07 11:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 11:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 12:11:50 --> Could not find the language line "Home"
ERROR - 2023-09-07 12:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:23:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 12:24:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 12:24:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 12:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:27:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 12:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:27:08 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-07 12:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:28:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 12:28:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 12:42:24 --> Could not find the language line "Bracelets"
ERROR - 2023-09-07 12:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 12:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:05:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:11:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 13:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:14:07 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:23:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:24:00 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:24:09 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:24:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:24:45 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:26:09 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:28:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:33:40 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:37:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:49:44 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:50:57 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:54:11 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:54:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:54:45 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:55:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:55:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:55:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:56:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:56:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:56:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:57:02 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:57:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:58:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:58:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:59:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:59:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:59:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:59:43 --> Could not find the language line "Home"
ERROR - 2023-09-07 13:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 13:59:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 13:59:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 14:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:00:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:00:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 14:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:00:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:00:48 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:01:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:01:36 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:01:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:02:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:04:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:06:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 14:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:12:11 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:14:47 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:15:35 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:16:34 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:16:54 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:16:59 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:18:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:18:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:18:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:18:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:18:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:18:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:27:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:33:05 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:48:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:48:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 14:49:09 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:50:19 --> Could not find the language line "Home"
ERROR - 2023-09-07 14:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 14:59:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 14:59:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:05:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:13:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 15:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:26:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:36:37 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:40:06 --> Could not find the language line "Home"
ERROR - 2023-09-07 15:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 15:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 15:49:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 15:51:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 15:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 16:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:00:50 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:05:35 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:06:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 16:06:31 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:06:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:07:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:07:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:08:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 16:08:28 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:08:36 --> Could not find the language line "Perfume"
ERROR - 2023-09-07 16:08:51 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:08:54 --> Could not find the language line "Socks"
ERROR - 2023-09-07 16:09:09 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:10:48 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:11:06 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:12:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 16:12:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 16:12:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 16:12:44 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:17:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 16:17:58 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:18:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 16:25:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 16:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:43:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 16:43:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 16:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 16:58:34 --> Could not find the language line "Home"
ERROR - 2023-09-07 16:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:08:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 17:08:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 17:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:12:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-07 17:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:24:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 17:24:26 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:32:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 17:32:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-07 17:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:37:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:37:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:37:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:37:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 17:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:54:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 17:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-07 17:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 17:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 18:00:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 18:00:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-07 18:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:09:04 --> Could not find the language line "Home"
ERROR - 2023-09-07 18:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:29:07 --> Could not find the language line "Home"
ERROR - 2023-09-07 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 18:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 18:59:38 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:04:00 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:08:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-07 19:08:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-07 19:08:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-07 19:08:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-07 19:18:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:20:37 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:20:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 19:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:23:44 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:25:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 19:26:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:33:53 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:35:53 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:36:41 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:36:48 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:37:22 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:39:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:42:57 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:45:14 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:47:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:49:01 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:50:47 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:57:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 19:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 19:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:00:48 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:03:18 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:05:32 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:13:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-07 20:13:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-07 20:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:21:02 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:24:18 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:27:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 20:42:27 --> Could not find the language line "Home"
ERROR - 2023-09-07 20:43:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 20:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-07 21:02:34 --> Could not find the language line "Home"
ERROR - 2023-09-07 21:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:26:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:26:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:26:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:26:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:26:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:26:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-07 21:27:14 --> Could not find the language line "Perfume"
ERROR - 2023-09-07 21:27:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 21:27:39 --> Could not find the language line "Perfume"
ERROR - 2023-09-07 21:27:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 21:28:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 21:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 21:29:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 21:29:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 21:29:31 --> Could not find the language line "Perfume"
ERROR - 2023-09-07 21:29:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-07 21:29:57 --> Could not find the language line "Perfume"
ERROR - 2023-09-07 21:30:05 --> Could not find the language line "Bracelets"
ERROR - 2023-09-07 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-07 21:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-07 21:30:26 --> Could not find the language line "Bracelets"
ERROR - 2023-09-07 21:37:53 --> Could not find the language line "Home"
ERROR - 2023-09-07 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 22:12:42 --> Could not find the language line "Home"
ERROR - 2023-09-07 22:26:37 --> Could not find the language line "Home"
ERROR - 2023-09-07 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-07 22:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 22:45:38 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:17:30 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:17:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 23:17:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 23:18:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-07 23:18:33 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 23:18:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 23:18:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 23:19:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:19:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-07 23:20:12 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:20:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-07 23:20:23 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:35:19 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 23:36:07 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-07 23:37:10 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:38:07 --> Could not find the language line "Home"
ERROR - 2023-09-07 23:38:28 --> 404 Page Not Found: Assets/css
