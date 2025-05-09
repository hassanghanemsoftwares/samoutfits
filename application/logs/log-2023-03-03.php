<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-03 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:01:54 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:02:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:02:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:09:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:12:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:16:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:19:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:25:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:28:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 00:32:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 00:48:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 00:59:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:01:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 01:01:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 01:01:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 01:01:27 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-03 01:01:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:01:42 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-03 01:01:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 01:01:57 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:01:57 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-03-03 01:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:02:04 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:02:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:02:13 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-03 01:02:27 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-03 01:02:42 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-03-03 01:13:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-03-03 01:16:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:17:20 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-03-03 01:17:20 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-03-03 01:17:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-03-03 01:17:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-03-03 01:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:28:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:29:13 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 01:30:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 01:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:30:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 01:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:31:11 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 01:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 01:44:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 02:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 02:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 02:05:49 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-03-03 02:11:44 --> Could not find the language line "socks"
ERROR - 2023-03-03 02:19:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 02:23:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 02:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 02:53:57 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:06:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:06:21 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-03 03:06:21 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-03 03:06:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:06:24 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-03 03:06:25 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-03 03:06:26 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-03 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:37:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:38:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 03:38:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 03:38:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 03:57:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:20:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:23:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:58:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 04:58:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:00:47 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:02:25 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:03:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:03:50 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-03 05:03:51 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-03 05:03:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-03 05:03:55 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-03 05:03:56 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-03 05:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 05:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 05:06:59 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:20:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 05:35:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 05:38:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:01:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:22:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:30:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:31:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:31:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:38:34 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:41:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:51:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:56:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:57:05 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:57:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 06:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 06:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:00:43 --> 404 Page Not Found: Adminerphp/index
ERROR - 2023-03-03 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:08:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:11:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:11:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:12:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:13:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:15:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-03 07:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 07:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 07:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 07:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-03 07:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-03 07:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 07:16:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 07:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-03 07:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-03 07:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-03-03 07:17:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:19:59 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:21:25 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:22:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:22:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:22:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:22:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:22:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:23:00 --> 404 Page Not Found: Public/assets
ERROR - 2023-03-03 07:23:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:23:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:23:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:26:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:27:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:27:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 07:28:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:28:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 07:29:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 07:29:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:31:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:32:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:32:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:32:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:32:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:45:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:45:24 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:46:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:47:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:48:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:49:52 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 07:55:01 --> Could not find the language line "Home"
ERROR - 2023-03-03 07:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:00:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:01:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:03:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 08:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:15:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:16:34 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:18:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:18:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:18:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:20:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:22:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:24:36 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:24:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:25:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:27:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:27:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:27:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:27:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:27:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:30:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:31:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:32:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-03 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:32:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-03 08:32:38 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 08:33:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:35:16 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:35:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:37:57 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:38:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:39:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:39:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:45:34 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 08:46:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:47:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 08:49:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 08:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:00:31 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 09:00:49 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 09:00:59 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:03:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:07:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:07:33 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 09:07:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:09:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:12:43 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:13:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-03-03 09:14:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:17:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 09:17:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 09:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:26:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:50:27 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:51:58 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 09:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 09:57:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:57:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 09:59:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:00:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:01:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:02:25 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:04:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:04:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:04:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:04:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:05:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:05:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:05:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:06:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:06:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:06:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:08:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:13:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:13:59 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:14:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:18:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:18:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:18:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:19:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:19:33 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:19:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:19:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:29:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-03 10:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:30:05 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:37:42 --> Could not find the language line "Socks"
ERROR - 2023-03-03 10:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:48:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:49:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:49:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:51:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 10:53:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:54:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:54:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 10:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 10:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:00:02 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:05:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:06:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:06:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:06:33 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:07:05 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:07:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:09:01 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:10:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:11:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:11:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 11:11:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:12:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:12:36 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:17:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:17:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:18:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:18:52 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:19:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:20:18 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:22:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:22:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:22:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-03 11:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:23:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:23:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:24:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:24:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-03 11:26:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:31:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:33:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:34:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:35:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:36:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:37:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:45:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:46:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:46:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:48:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:49:27 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:50:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:51:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:51:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:51:52 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:52:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:52:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:52:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:53:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:53:33 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:53:35 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:53:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:53:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:54:43 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 11:58:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 11:59:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 11:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:01:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:03:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 12:04:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-03 12:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:06:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:06:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:07:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:07:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:09:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:09:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:09:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:10:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:10:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:10:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:10:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 12:14:02 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 12:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:15:54 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:16:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:17:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:21:03 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:23:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:26:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:33:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:33:54 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:34:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:34:40 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 12:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 12:40:24 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:46:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 12:51:18 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:56:54 --> Could not find the language line "Home"
ERROR - 2023-03-03 12:57:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:00:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:01:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:01:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:07:04 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:07:22 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:07:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:07:23 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:07:27 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:07:35 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:13:25 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:14:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:14:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 13:14:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 13:14:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 13:14:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 13:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:16:30 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:18:25 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:22:40 --> 404 Page Not Found: Phpinfophp/index
ERROR - 2023-03-03 13:24:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:26:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:29:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:29:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:34:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:35:24 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:36:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:38:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:41:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:43:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:43:52 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:46:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:56:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:58:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 13:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 13:59:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:00:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:01:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:01:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:01:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:02:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:03:59 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:04:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:07:31 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:07:32 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:07:32 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:07:32 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:07:32 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:07:32 --> Could not find the language line "accounting"
ERROR - 2023-03-03 14:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:16:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-03-03 14:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:21:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:21:27 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:22:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:22:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:23:16 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:26:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:26:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:30:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:30:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:34:34 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:36:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:38:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:38:34 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:38:35 --> 404 Page Not Found: Feed/index
ERROR - 2023-03-03 14:38:35 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-03 14:38:35 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-03 14:38:36 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-03 14:38:36 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-03 14:38:36 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-03 14:38:36 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-03-03 14:38:37 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-03 14:38:37 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-03-03 14:38:37 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-03 14:38:37 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-03 14:38:37 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-03 14:38:38 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-03 14:38:38 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-03 14:39:40 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:39:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:39:54 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:39:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:42:03 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:42:06 --> Could not find the language line "Perfume"
ERROR - 2023-03-03 14:44:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:48:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:49:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:50:57 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:52:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:53:24 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:53:43 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:55:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:58:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:58:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 14:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 14:59:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:00:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:00:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:07:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:09:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:11:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:12:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:12:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 15:12:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 15:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:18:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:19:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:22:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:23:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:27:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:29:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:33:47 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:34:47 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 15:38:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:40:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:40:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 15:45:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:46:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:46:53 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:52:23 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:53:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 15:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:01:27 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:03:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:04:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:04:35 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:07:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:07:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 16:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:08:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 16:08:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 16:09:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-03 16:13:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:19:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:29:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:41:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:41:47 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:42:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:46:27 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:46:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:46:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:47:36 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:48:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:49:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:50:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:51:01 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:51:02 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:51:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:52:35 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:54:26 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:57:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 16:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 16:59:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:01:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:02:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:03:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:05:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:05:56 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:13:03 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:15:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:16:01 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:16:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:16:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:19:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:21:36 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:21:45 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:22:18 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 17:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:23:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:24:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:34:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:36:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:42:03 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:43:16 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:43:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:43:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:44:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:45:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:45:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:45:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:45:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:53:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:53:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:54:00 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:54:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 17:58:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:58:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 17:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:00:18 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:00:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:02:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:06:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:06:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:06:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:07:17 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:09:48 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:11:15 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:14:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:16:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:19:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:27:25 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-03 18:30:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:32:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 18:41:44 --> Could not find the language line "Home"
ERROR - 2023-03-03 18:58:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:01:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:03:38 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:05:24 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-03-03 19:06:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:09:16 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:11:33 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:11:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:13:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-03 19:13:58 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:14:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:15:43 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:15:57 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:17:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:20:38 --> Could not find the language line "Bracelets"
ERROR - 2023-03-03 19:21:05 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:21:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:24:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:30:18 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-03-03 19:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:31:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:32:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:32:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:32:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:32:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:32:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:32:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:33:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:33:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 19:33:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:33:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:33:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:34:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:34:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 19:36:30 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:36:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:42:18 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:46:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:47:14 --> Could not find the language line "Perfume"
ERROR - 2023-03-03 19:56:32 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:58:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 19:59:52 --> Could not find the language line "0"
ERROR - 2023-03-03 20:00:21 --> Could not find the language line "Home"
ERROR - 2023-03-03 20:06:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:16:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:17:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:17:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:17:56 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:18:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:18:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:23:59 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:27:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:27:18 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:28:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:32:27 --> Could not find the language line "socks"
ERROR - 2023-03-03 20:35:52 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:37:19 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:39:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:39:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:41:34 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 20:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 20:52:24 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 20:52:29 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-03-03 21:01:37 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:02:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:05:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:09:20 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:09:22 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:10:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 21:10:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-03 21:10:29 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:11:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:22:07 --> Could not find the language line "Home"
ERROR - 2023-03-03 21:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 21:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 21:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 21:35:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:06:42 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:11:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:19:06 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 22:39:01 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 22:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 22:43:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:45:25 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-03-03 22:45:46 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:46:16 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:48:24 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:50:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-03 22:50:33 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:51:39 --> Could not find the language line "Home"
ERROR - 2023-03-03 22:51:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-03 22:52:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:04:34 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:04:35 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:05:09 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:05:10 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:05:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:05:11 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:06:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:06:19 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:07:28 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:09:55 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:14 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:49 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:50 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:51 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:16:52 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 23:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:35:41 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:37:31 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 23:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 23:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-03 23:44:08 --> Could not find the language line "Home"
ERROR - 2023-03-03 23:58:59 --> Could not find the language line "Home"
