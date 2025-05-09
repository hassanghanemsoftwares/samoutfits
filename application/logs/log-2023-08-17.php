<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-17 00:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-17 00:29:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-17 01:05:53 --> Could not find the language line "Home"
ERROR - 2023-08-17 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-17 02:33:52 --> Could not find the language line "Home"
ERROR - 2023-08-17 02:47:55 --> Could not find the language line "Home"
ERROR - 2023-08-17 02:47:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 02:57:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:04:59 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:09:37 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:29:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 03:29:23 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:32:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 03:56:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 04:04:21 --> 404 Page Not Found: Env/index
ERROR - 2023-08-17 04:04:22 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-08-17 04:20:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 04:20:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 04:20:51 --> Could not find the language line "Home"
ERROR - 2023-08-17 04:22:54 --> Could not find the language line "Home"
ERROR - 2023-08-17 04:28:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 04:29:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 04:29:26 --> Could not find the language line "Home"
ERROR - 2023-08-17 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 04:38:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-17 04:52:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 05:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-17 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 05:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-17 05:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:38:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 05:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 05:59:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 06:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 06:12:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 06:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 06:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 06:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 06:14:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 06:29:48 --> Could not find the language line "Home"
ERROR - 2023-08-17 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 06:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 06:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:00:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 07:03:30 --> Could not find the language line "Bracelets"
ERROR - 2023-08-17 07:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:18:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-17 07:18:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-17 07:18:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-17 07:18:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-17 07:19:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-17 07:19:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-17 07:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:22:32 --> 404 Page Not Found: Products/v
ERROR - 2023-08-17 07:22:33 --> 404 Page Not Found: Prod/index
ERROR - 2023-08-17 07:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 07:27:31 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:58:39 --> Could not find the language line "Home"
ERROR - 2023-08-17 07:58:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 07:58:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 07:58:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 07:58:42 --> 404 Page Not Found: Home/home
ERROR - 2023-08-17 07:58:42 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-17 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:10:03 --> Could not find the language line "Other"
ERROR - 2023-08-17 08:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:14:46 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:18:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 08:18:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 08:18:23 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:19:06 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:20:27 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:21:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:21:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:22:38 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:33:59 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-17 08:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:33:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-17 08:33:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-17 08:34:00 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-17 08:36:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 08:36:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 08:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:38:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 08:38:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:39:37 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:41:17 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-17 08:43:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-17 08:43:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-17 08:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 08:47:04 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:50:59 --> Could not find the language line "Crocs"
ERROR - 2023-08-17 08:54:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 08:54:49 --> Could not find the language line "Home"
ERROR - 2023-08-17 08:59:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-17 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 09:03:59 --> Could not find the language line "Other"
ERROR - 2023-08-17 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 09:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:24:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 09:34:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 09:34:18 --> Could not find the language line "Home"
ERROR - 2023-08-17 09:36:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 09:36:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 09:44:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:46:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 09:46:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 09:57:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 09:57:55 --> Could not find the language line "magic_boxes"
ERROR - 2023-08-17 09:59:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 10:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:05:19 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:08:39 --> Could not find the language line "Clothes"
ERROR - 2023-08-17 10:11:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 10:14:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 10:24:05 --> Could not find the language line "Socks"
ERROR - 2023-08-17 10:24:05 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:27:10 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:27:47 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:31:24 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:36:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 10:36:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 10:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 10:38:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 10:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:42:08 --> Could not find the language line "Gift_card"
ERROR - 2023-08-17 10:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:45:53 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 10:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:50:20 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 10:57:38 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:57:39 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-17 10:57:39 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-17 10:57:40 --> Could not find the language line "Home"
ERROR - 2023-08-17 10:57:40 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-17 10:57:40 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-17 10:57:40 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-17 10:57:41 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-08-17 10:57:41 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-17 10:57:41 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-08-17 10:57:41 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-08-17 10:57:41 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-17 10:57:42 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-17 10:57:42 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-17 10:57:42 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-17 10:57:42 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-08-17 10:57:42 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-08-17 10:57:43 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-17 10:57:43 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-17 10:57:43 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-08-17 10:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:01:53 --> Could not find the language line "Stock_clearance"
ERROR - 2023-08-17 11:02:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-17 11:04:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 11:04:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 11:04:50 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:06:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 11:06:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:08:10 --> Could not find the language line "Perfume"
ERROR - 2023-08-17 11:09:30 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-17 11:15:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 11:17:09 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:26:28 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:27:14 --> Could not find the language line "Perfumes"
ERROR - 2023-08-17 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:32:14 --> Could not find the language line "Home"
ERROR - 2023-08-17 11:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 11:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 11:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:52:32 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-17 11:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 11:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:03:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 12:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-17 12:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:18:42 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:36:34 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 12:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:43:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 12:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:50:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 12:50:46 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-17 12:50:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-17 12:50:49 --> Could not find the language line "Home"
ERROR - 2023-08-17 12:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 12:58:18 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:03:02 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:04:57 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:07:41 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 13:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 13:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:30:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 13:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 13:34:44 --> 404 Page Not Found: Env/index
ERROR - 2023-08-17 13:40:27 --> Could not find the language line "Home"
ERROR - 2023-08-17 13:43:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 13:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 14:00:45 --> Could not find the language line "Home"
ERROR - 2023-08-17 14:15:04 --> Could not find the language line "Home"
ERROR - 2023-08-17 14:18:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 14:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 14:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 14:53:55 --> Could not find the language line "Home"
ERROR - 2023-08-17 14:58:35 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-17 15:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 15:17:35 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:18:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:20:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 15:21:58 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:33:24 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:33:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-17 15:33:55 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:34:02 --> Could not find the language line "Perfume"
ERROR - 2023-08-17 15:34:06 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:35:04 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:35:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 15:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:40:59 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:41:24 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:41:38 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:41:54 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:43:33 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:45:59 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:53:05 --> Could not find the language line "Home"
ERROR - 2023-08-17 15:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 15:54:29 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:12:05 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:12:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 16:13:01 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:54:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 16:55:05 --> Could not find the language line "Perfume"
ERROR - 2023-08-17 16:55:38 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:05:48 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:38:23 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:40:40 --> Could not find the language line "Home"
ERROR - 2023-08-17 17:40:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-17 17:40:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:41:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:41:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:41:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:42:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:42:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:42:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 17:42:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 17:43:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:43:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:44:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-17 17:57:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 18:00:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 18:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:00:56 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:01:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 18:05:46 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:09:28 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 18:13:27 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:43:24 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:57:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 18:57:07 --> Could not find the language line "Home"
ERROR - 2023-08-17 18:58:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:07:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 19:07:43 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:36:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-17 19:37:43 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:37:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-17 19:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:38:52 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 19:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-17 19:59:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-17 20:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-17 20:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-17 20:20:00 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-17 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-17 20:32:27 --> Could not find the language line "Home"
ERROR - 2023-08-17 20:33:29 --> Could not find the language line "Home"
ERROR - 2023-08-17 20:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 20:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 20:56:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-17 20:58:37 --> Could not find the language line "Home"
ERROR - 2023-08-17 21:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-17 21:18:03 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-17 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-17 21:51:32 --> Could not find the language line "Home"
ERROR - 2023-08-17 21:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 22:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-17 22:13:11 --> Could not find the language line "Home"
ERROR - 2023-08-17 22:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 22:14:05 --> Could not find the language line "Home"
ERROR - 2023-08-17 22:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 22:24:45 --> Could not find the language line "Home"
ERROR - 2023-08-17 22:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:14:01 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-17 23:46:04 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:51:17 --> Could not find the language line "Home"
ERROR - 2023-08-17 23:59:59 --> Could not find the language line "Bracelets"
