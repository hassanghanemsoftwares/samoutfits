<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-27 00:00:18 --> Could not find the language line "Home"
ERROR - 2023-05-27 00:06:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 00:23:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 00:57:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:22:50 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:22:51 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:22:52 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-27 01:22:52 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-27 01:22:53 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-27 01:22:53 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-27 01:30:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 01:32:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:32:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:32:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 01:33:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:36:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 01:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 02:09:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-27 02:18:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 02:27:10 --> Could not find the language line "Home"
ERROR - 2023-05-27 02:29:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 02:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-27 02:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-27 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 03:17:52 --> Could not find the language line "Home"
ERROR - 2023-05-27 03:23:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 03:32:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-27 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:08:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-27 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:41:36 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:41:36 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:41:36 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:50:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 04:52:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:52:59 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:53:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 04:53:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 04:54:04 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 04:54:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:54:33 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-27 04:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:01:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:07:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:08:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:08:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:09:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:20:31 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:25:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:26:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:26:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:27:55 --> Could not find the language line "Perfume"
ERROR - 2023-05-27 05:28:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 05:28:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 05:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:34:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:34:03 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-27 05:34:03 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-27 05:34:03 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-27 05:34:06 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-27 05:34:07 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-27 05:34:08 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-27 05:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:36:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:36:57 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:36:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:36:58 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:37:34 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:37:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:37:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 05:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:55:10 --> Could not find the language line "Home"
ERROR - 2023-05-27 05:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 05:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:13:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:23:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 06:23:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 06:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 06:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 06:29:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 06:29:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 06:29:28 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:39:10 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:40:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 06:40:10 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:44:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 06:44:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 06:44:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:54:59 --> Could not find the language line "Home"
ERROR - 2023-05-27 06:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 06:56:20 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:08:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:14:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:14:17 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-27 07:14:17 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-27 07:14:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:14:19 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-27 07:14:19 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-27 07:14:19 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-27 07:14:19 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-27 07:14:20 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-05-27 07:14:21 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-27 07:14:21 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-27 07:14:21 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-27 07:14:21 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-27 07:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:28:16 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-05-27 07:28:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 07:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 07:28:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 07:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 07:28:29 --> 404 Page Not Found: Sites/default
ERROR - 2023-05-27 07:28:35 --> 404 Page Not Found: Admin/controller
ERROR - 2023-05-27 07:28:53 --> 404 Page Not Found: Uploads/index
ERROR - 2023-05-27 07:29:06 --> 404 Page Not Found: Files/index
ERROR - 2023-05-27 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:30:31 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:37:56 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-27 07:38:46 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:39:26 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:52:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 07:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 07:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:02:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:05:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 08:05:50 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:11:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:11:55 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:13:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 08:13:23 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:14:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:14:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 08:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:16:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 08:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:38:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-27 08:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:43:18 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:43:46 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 08:43:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:44:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:52:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:52:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:55:54 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:55:56 --> Could not find the language line "Home"
ERROR - 2023-05-27 08:59:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:18:52 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:18:52 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:20:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-27 09:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:22:18 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:27:26 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:27:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-27 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:32:59 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:34:49 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:35:26 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:35:39 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:37:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:48:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:49:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:49:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 09:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 09:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:03:30 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:12:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:21:05 --> Could not find the language line "Other"
ERROR - 2023-05-27 10:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:26:34 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:42:00 --> Could not find the language line "Home"
ERROR - 2023-05-27 10:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 10:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:01:43 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:08:58 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:09:45 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:10:23 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:18:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:21:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:31:48 --> 404 Page Not Found: All/index
ERROR - 2023-05-27 11:34:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 11:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:38:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:38:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:56:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:57:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:58:16 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:58:16 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:58:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 11:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 11:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:00:40 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:01:37 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:02:10 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:02:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:02:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 12:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 12:03:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-27 12:04:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 12:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:16:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-27 12:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:37:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 12:37:53 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:38:31 --> Could not find the language line "Home"
ERROR - 2023-05-27 12:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 12:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:10:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 13:10:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:11:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:30:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:30:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:31:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:32:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:33:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:33:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:33:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:33:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 13:42:46 --> Could not find the language line "Other"
ERROR - 2023-05-27 13:45:21 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:53:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 13:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:00:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:08:23 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:20:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-27 14:21:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:40:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:41:29 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:44:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:46:47 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:48:27 --> Could not find the language line "Bracelets"
ERROR - 2023-05-27 14:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:49:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:53:34 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:55:16 --> Could not find the language line "Home"
ERROR - 2023-05-27 14:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 14:59:28 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:01:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-27 15:01:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 15:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 15:03:26 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:03:28 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 15:39:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:52:55 --> Could not find the language line "Home"
ERROR - 2023-05-27 15:54:39 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:25:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:34:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:35:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:37:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:38:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:39:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:40:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 16:40:58 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:45:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:47:04 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:50:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:50:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:50:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:50:37 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:50:56 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:51:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 16:51:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:51:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:51:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:51:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:52:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:52:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:52:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:52:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:53:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:53:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 16:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 16:54:32 --> Could not find the language line "Perfume"
ERROR - 2023-05-27 16:59:28 --> Could not find the language line "Perfume"
ERROR - 2023-05-27 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:01:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:01:56 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:01:56 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:02:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:02:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:02:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:02:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:02:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-27 17:10:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:27:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:32:51 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 17:34:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:53:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:53:38 --> Could not find the language line "Home"
ERROR - 2023-05-27 17:53:58 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:08:42 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:13:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:13:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:13:48 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:18:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 18:19:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 18:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:35:06 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:35:29 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:36:03 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:36:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:36:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-27 18:36:27 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:55:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:56:00 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:56:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 18:59:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:00:20 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:09:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 19:10:44 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:11:23 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 19:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 19:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 19:15:37 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 19:16:03 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:16:57 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:17:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 19:17:16 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:23:55 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:24:43 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 19:34:49 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-27 19:41:21 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-27 19:52:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-27 19:52:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-27 19:58:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:09:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-27 20:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 20:17:06 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:17:38 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:17:38 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:17:38 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:17:40 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:30:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 20:33:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:34:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:35:05 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:36:02 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:37:26 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:38:41 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:40:11 --> 404 Page Not Found: 19837437_notfoundhtml/index
ERROR - 2023-05-27 20:41:47 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:44:11 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:46:19 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 20:46:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:47:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:47:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 20:50:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:50:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:50:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:50:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 20:53:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 20:54:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:54:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-27 20:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-27 20:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 20:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:37:49 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:38:06 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:43:09 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:43:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:43:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:43:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:43:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:43:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:44:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:44:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 21:44:17 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:57:01 --> Could not find the language line "Home"
ERROR - 2023-05-27 21:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 21:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:03:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-27 22:06:23 --> 404 Page Not Found: Jqueryupload/server
ERROR - 2023-05-27 22:19:20 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:19:21 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:19:21 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:19:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 22:20:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 22:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:20:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 22:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:21:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 22:21:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-27 22:21:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:21:37 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:22:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:22:13 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:22:41 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-05-27 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:32:50 --> Could not find the language line "Home"
ERROR - 2023-05-27 22:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 22:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-27 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:04:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:04:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:04:07 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:04:46 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:16:43 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:17:24 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:35:22 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:48:41 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:58:08 --> Could not find the language line "Home"
ERROR - 2023-05-27 23:58:09 --> Could not find the language line "Home"
