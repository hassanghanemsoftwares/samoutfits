<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-20 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-20 00:05:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-20 00:05:38 --> Could not find the language line "Home"
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-20 00:05:38 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-20 00:05:39 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-20 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 00:56:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-20 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 01:05:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 01:05:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 01:23:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 01:37:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 01:44:49 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:06:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:12:10 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:17:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:48:23 --> Could not find the language line "Home"
ERROR - 2023-07-20 02:54:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:01:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:26:44 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:26:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 03:34:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 03:36:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 03:59:48 --> Could not find the language line "Home"
ERROR - 2023-07-20 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 04:09:00 --> 404 Page Not Found: Env/index
ERROR - 2023-07-20 04:09:01 --> 404 Page Not Found: Wp-content/index
ERROR - 2023-07-20 04:09:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 04:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-20 04:55:06 --> Could not find the language line "Home"
ERROR - 2023-07-20 04:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 04:55:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:16:28 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:16:36 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:26:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:26:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:33:46 --> 404 Page Not Found: Filemanager/dialog.php
ERROR - 2023-07-20 05:33:47 --> 404 Page Not Found: Admin/filemanager
ERROR - 2023-07-20 05:33:48 --> 404 Page Not Found: Js/filemanager
ERROR - 2023-07-20 05:33:49 --> 404 Page Not Found: Admin/js
ERROR - 2023-07-20 05:37:02 --> Could not find the language line "Home"
ERROR - 2023-07-20 05:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:49:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 05:49:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 05:53:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 05:56:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 05:56:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-20 05:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 05:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:03:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 06:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 06:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:06:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:10:06 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:20:09 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:23:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 06:23:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 06:24:08 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:25:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:29:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 06:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:48:34 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 06:58:55 --> Could not find the language line "Home"
ERROR - 2023-07-20 06:59:52 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:02:46 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:03:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 07:03:31 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:11:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 07:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:14:52 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:20:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 07:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:26:54 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:27:15 --> Could not find the language line "Socks"
ERROR - 2023-07-20 07:27:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:27:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 07:27:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 07:27:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:43:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 07:44:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:44:39 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:51:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:53:43 --> Could not find the language line "Home"
ERROR - 2023-07-20 07:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 07:58:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 07:58:53 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:01:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 08:03:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 08:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 08:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 08:07:31 --> Could not find the language line "assets"
ERROR - 2023-07-20 08:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:26:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-20 08:26:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-20 08:26:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-20 08:26:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-20 08:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:28:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 08:28:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 08:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:41:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 08:41:27 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:41:34 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:41:42 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 08:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:41:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 08:42:07 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 08:42:17 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 08:42:19 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:42:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 08:42:31 --> Could not find the language line "Socks"
ERROR - 2023-07-20 08:43:12 --> Could not find the language line "Socks"
ERROR - 2023-07-20 08:43:19 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:44:22 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:44:24 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 08:44:27 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:44:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 08:44:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 08:44:46 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:46:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:46:43 --> 404 Page Not Found: Assets/file-uploader
ERROR - 2023-07-20 08:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 08:51:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:51:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 08:51:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 08:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:00:34 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:03:27 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:05:46 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:06:23 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:08:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 09:10:57 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:12:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:28:09 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:34:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 09:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 09:49:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 09:53:24 --> Could not find the language line "Home"
ERROR - 2023-07-20 09:58:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:01:57 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:02:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 10:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:02:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 10:03:06 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:03:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:03:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 10:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:03:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:04:04 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 10:04:18 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:04:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 10:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:04:59 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:05:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 10:05:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:05:53 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:06:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:06:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 10:06:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 10:07:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:07:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:12:44 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:23:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:25:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 10:25:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 10:27:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:37:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 10:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:37:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 10:41:41 --> Could not find the language line "Home"
ERROR - 2023-07-20 10:57:35 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:04:58 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:05:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 11:05:08 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:05:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 11:05:34 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 11:05:41 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:05:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 11:05:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:06:43 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:09:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 11:11:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 11:11:22 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:13:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 11:20:04 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 11:42:06 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:01:10 --> Could not find the language line "Socks"
ERROR - 2023-07-20 12:04:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 12:04:15 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-07-20 12:04:16 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-07-20 12:04:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:12:31 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:14:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:16:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:16:26 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 12:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:34:51 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:37:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 12:37:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-20 12:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:42:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 12:42:43 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:42:44 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:42:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:42:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 12:44:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 12:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 12:44:45 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:44:46 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 12:47:21 --> Could not find the language line "Home"
ERROR - 2023-07-20 12:47:23 --> 404 Page Not Found: Feed/index
ERROR - 2023-07-20 12:47:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 12:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 12:47:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 12:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 13:05:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 13:05:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 13:06:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 13:06:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-20 13:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:10:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:11:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:11:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:19:28 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:19:29 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-20 13:19:29 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-20 13:19:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:19:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-20 13:19:30 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-20 13:19:31 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-20 13:19:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-20 13:19:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-20 13:19:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-20 13:19:32 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-07-20 13:19:32 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-20 13:19:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-20 13:19:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-20 13:19:32 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-20 13:19:33 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-20 13:19:33 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-20 13:19:33 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-20 13:19:33 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-20 13:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:26:51 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:32:18 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-20 13:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 13:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:40:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:42:40 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:44:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:44:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 13:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 13:45:31 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:46:55 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:52:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:52:18 --> Could not find the language line "Home"
ERROR - 2023-07-20 13:53:41 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:02:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 14:03:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:04:57 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:06:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:29:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:29:59 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:34:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:37:28 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:37:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:37:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:37:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 14:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:38:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 14:38:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 14:38:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:38:59 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:40:06 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:40:15 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:40:26 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:40:29 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:40:29 --> Could not find the language line "Socks"
ERROR - 2023-07-20 14:40:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:40:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 14:41:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 14:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-20 14:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:41:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 14:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:41:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 14:41:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 14:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:41:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 14:42:02 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:43:44 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:43:48 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 14:44:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 14:44:09 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 14:44:11 --> Could not find the language line "Home"
ERROR - 2023-07-20 14:44:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:44:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:45:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:45:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:47:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:47:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:47:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:48:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:48:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:48:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:48:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:49:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:49:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 14:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 14:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:13:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:22:48 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:24:18 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:25:14 --> Could not find the language line "assets"
ERROR - 2023-07-20 15:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:26:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:48:06 --> Could not find the language line "Home"
ERROR - 2023-07-20 15:48:13 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-20 15:48:13 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-20 15:48:13 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-20 15:48:13 --> 404 Page Not Found: Home/accounting
ERROR - 2023-07-20 15:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 15:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:06:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:07:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:07:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:10:11 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:11:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:12:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:13:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:13:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:14:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:14:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:15:04 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:15:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:15:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 16:15:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:15:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:16:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:21:53 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-20 16:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-20 16:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-20 16:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:47:36 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-20 16:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:48:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 16:54:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 16:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 16:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:00:32 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:02:31 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:04:11 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:10:10 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:11:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:11:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:12:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:13:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:13:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 17:20:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-20 17:20:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-20 17:20:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-20 17:20:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-20 17:21:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:21:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 17:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:21:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 17:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:22:55 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:23:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 17:23:17 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:23:54 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:24:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 17:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:48:53 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:51:19 --> Could not find the language line "Home"
ERROR - 2023-07-20 17:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:55:17 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 17:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 17:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:01:32 --> Could not find the language line "Other"
ERROR - 2023-07-20 18:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:02:23 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-20 18:02:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 18:02:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 18:03:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 18:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:07:10 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 18:07:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 18:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:14:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:14:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:15:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:15:56 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-20 18:15:57 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-20 18:15:57 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-20 18:15:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-20 18:16:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:16:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 18:16:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 18:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:16:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 18:17:05 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 18:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:17:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 18:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:18:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:19:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 18:19:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 18:19:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 18:19:32 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-20 18:19:34 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-20 18:19:37 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-20 18:19:42 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-20 18:19:44 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-20 18:19:47 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-20 18:19:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:20:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:20:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:20:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:21:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:21:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:21:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:22:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:23:44 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-07-20 18:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:24:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:24:34 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:24:46 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:25:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:25:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:26:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:26:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:27:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:27:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:27:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-20 18:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-20 18:28:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 18:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:29:08 --> Could not find the language line "Other"
ERROR - 2023-07-20 18:29:12 --> Could not find the language line "Other"
ERROR - 2023-07-20 18:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:30:18 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:30:25 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:31:51 --> Could not find the language line "Socks"
ERROR - 2023-07-20 18:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:32:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 18:33:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 18:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:33:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 18:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:35:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:37:46 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=78 848 556&amp;text=2006%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-07-20 18:45:55 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:45:58 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:48:31 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:49:26 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:50:33 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:51:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:53:39 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:54:24 --> Could not find the language line "Home"
ERROR - 2023-07-20 18:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 18:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 18:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:00:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:08:09 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:09:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:10:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:10:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:10:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:11:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:11:27 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:11:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:11:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 19:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:12:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 19:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:13:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:13:24 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:13:32 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:13:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:14:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:14:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:14:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:15:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:15:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:16:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:17:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:17:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:17:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:18:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:18:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:19:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:20:02 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:21:38 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:23:23 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:27:31 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-20 19:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 19:39:14 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:50:04 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-20 19:50:07 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-20 19:50:09 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-20 19:55:48 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:55:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:55:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-20 19:56:26 --> Could not find the language line "Home"
ERROR - 2023-07-20 19:56:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:58:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:59:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 19:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 20:00:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:00:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-20 20:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:00:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:00:22 --> Could not find the language line "Home"
ERROR - 2023-07-20 20:04:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 20:43:07 --> Could not find the language line "Home"
ERROR - 2023-07-20 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 21:02:46 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 21:13:48 --> Could not find the language line "Home"
ERROR - 2023-07-20 21:13:57 --> Could not find the language line "Home"
ERROR - 2023-07-20 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 21:34:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 21:57:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-20 21:57:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 22:00:29 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 22:09:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 22:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 22:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 22:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 22:17:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 22:30:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 22:33:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 22:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 22:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 22:53:05 --> Could not find the language line "Socks"
ERROR - 2023-07-20 22:54:21 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 23:00:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 23:01:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-07-20 23:07:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:10:15 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:15:30 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:15:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 23:15:37 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:16:05 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:16:10 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:16:13 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 23:16:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:16:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:18:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:18:12 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:18:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-20 23:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:19:47 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:19:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:21:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:21:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:21:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:22:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:22:34 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:22:36 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 23:22:40 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:22:42 --> Could not find the language line "Socks"
ERROR - 2023-07-20 23:22:56 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:22:59 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:23:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:08 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 23:23:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:19 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:23:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:23:29 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:26:24 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:35:42 --> Could not find the language line "Bracelets"
ERROR - 2023-07-20 23:35:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:35:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:36:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:36:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:36:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:36:52 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:36:53 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:37:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:37:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-20 23:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:38:01 --> Could not find the language line "Other"
ERROR - 2023-07-20 23:38:10 --> Could not find the language line "Other"
ERROR - 2023-07-20 23:38:13 --> Could not find the language line "Perfume"
ERROR - 2023-07-20 23:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:38:53 --> Could not find the language line "Socks"
ERROR - 2023-07-20 23:39:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 23:39:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:39:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-20 23:39:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-20 23:43:03 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:56:58 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:57:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:57:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-20 23:58:54 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:59:13 --> Could not find the language line "Home"
ERROR - 2023-07-20 23:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-20 23:59:38 --> 404 Page Not Found: Assets/css
