<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-14 00:00:28 --> Could not find the language line "Home"
ERROR - 2023-09-14 00:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-14 01:17:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 01:30:26 --> Could not find the language line "Home"
ERROR - 2023-09-14 01:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 01:40:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 01:40:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:40:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:40:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:40:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:40:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:40:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 01:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-14 02:20:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 02:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:33:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-14 02:39:57 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:39:57 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:39:57 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:39:57 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:39:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 02:40:40 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 02:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 03:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 03:22:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 03:25:54 --> Could not find the language line "Home"
ERROR - 2023-09-14 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 03:47:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 03:54:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 04:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:02:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:03:03 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:05:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-14 04:06:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 04:06:50 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:11:38 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:14:02 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:14:18 --> Could not find the language line "products"
ERROR - 2023-09-14 04:24:34 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:32:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 04:32:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 04:34:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:35:41 --> Could not find the language line "Home"
ERROR - 2023-09-14 04:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 04:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 04:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:28:31 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:44:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:45:02 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:45:38 --> Could not find the language line "Home"
ERROR - 2023-09-14 05:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 05:55:37 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:03:51 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:04:08 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-09-14 06:04:08 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:12:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 06:12:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 06:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:16:49 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-14 06:16:52 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-14 06:16:57 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-09-14 06:17:19 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-14 06:17:29 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-09-14 06:17:59 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-14 06:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:18:05 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-14 06:18:10 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-14 06:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:19:11 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-14 06:19:26 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-09-14 06:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:19:49 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-09-14 06:20:17 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-09-14 06:20:25 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-09-14 06:20:33 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:20:37 --> Could not find the language line "products"
ERROR - 2023-09-14 06:21:03 --> Could not find the language line "products"
ERROR - 2023-09-14 06:21:08 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-14 06:21:40 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-09-14 06:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:21:57 --> 404 Page Not Found: 2022/wp-includes
ERROR - 2023-09-14 06:22:34 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-09-14 06:22:39 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-14 06:24:42 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-09-14 06:25:22 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-14 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 06:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 06:54:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 06:57:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:02:47 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:03:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 07:03:54 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:18:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 07:22:52 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:24:31 --> Could not find the language line "products"
ERROR - 2023-09-14 07:25:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:27:59 --> Could not find the language line "products"
ERROR - 2023-09-14 07:29:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-14 07:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:38:33 --> Could not find the language line "products"
ERROR - 2023-09-14 07:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-14 07:38:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-14 07:41:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-14 07:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-14 07:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-14 07:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-14 07:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-14 07:50:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-14 07:50:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-14 07:50:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-14 07:50:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-14 07:50:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-14 07:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:55:46 --> Could not find the language line "products"
ERROR - 2023-09-14 07:57:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:57:38 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 07:59:33 --> Could not find the language line "Home"
ERROR - 2023-09-14 07:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 08:02:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-14 08:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:11:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 08:20:29 --> Could not find the language line "Home"
ERROR - 2023-09-14 08:20:31 --> Could not find the language line "Home"
ERROR - 2023-09-14 08:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 08:26:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 08:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-14 09:00:49 --> Could not find the language line "Home"
ERROR - 2023-09-14 09:01:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 09:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 09:27:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 09:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 09:34:49 --> Could not find the language line "Home"
ERROR - 2023-09-14 09:35:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 09:42:20 --> Could not find the language line "products"
ERROR - 2023-09-14 09:45:20 --> Could not find the language line "products"
ERROR - 2023-09-14 09:45:32 --> Could not find the language line "products"
ERROR - 2023-09-14 09:48:45 --> Could not find the language line "products"
ERROR - 2023-09-14 09:51:46 --> Could not find the language line "products"
ERROR - 2023-09-14 09:51:58 --> Could not find the language line "products"
ERROR - 2023-09-14 09:52:39 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:07:45 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:09:38 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:29:23 --> Could not find the language line "Other"
ERROR - 2023-09-14 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:30:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 10:30:45 --> Could not find the language line "products"
ERROR - 2023-09-14 10:30:49 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:33:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:33:26 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:33:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:33:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:34:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:34:09 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:37:10 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:38:25 --> Could not find the language line "Hair%20"
ERROR - 2023-09-14 10:38:53 --> Could not find the language line "Hair%20"
ERROR - 2023-09-14 10:39:16 --> Could not find the language line "Hair%20"
ERROR - 2023-09-14 10:39:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:39:52 --> Could not find the language line "Socks"
ERROR - 2023-09-14 10:40:02 --> Could not find the language line "Socks"
ERROR - 2023-09-14 10:40:08 --> Could not find the language line "Socks"
ERROR - 2023-09-14 10:40:14 --> Could not find the language line "Perfume"
ERROR - 2023-09-14 10:40:20 --> Could not find the language line "Perfume"
ERROR - 2023-09-14 10:40:23 --> Could not find the language line "Perfume"
ERROR - 2023-09-14 10:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:40:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:41:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:41:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:42:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:43:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:43:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:44:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:44:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:44:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:44:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:44:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:44:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:45:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:45:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:45:10 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 10:45:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 10:45:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 10:45:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-14 10:46:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 10:46:11 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 10:46:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:46:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:46:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:46:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:47:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:47:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-14 10:51:04 --> Could not find the language line "products"
ERROR - 2023-09-14 10:53:38 --> Could not find the language line "products"
ERROR - 2023-09-14 10:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 10:57:24 --> Could not find the language line "Home"
ERROR - 2023-09-14 10:57:28 --> Could not find the language line "products"
ERROR - 2023-09-14 10:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:01:53 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:02:29 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:03:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:09:02 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:26:24 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:38:26 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:38:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:44:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 11:50:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 11:53:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 11:54:57 --> Could not find the language line "products"
ERROR - 2023-09-14 11:55:39 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-14 11:55:39 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-14 11:55:39 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-14 11:55:40 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-14 11:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 11:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 11:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:02:27 --> Could not find the language line "products"
ERROR - 2023-09-14 12:09:57 --> Could not find the language line "products"
ERROR - 2023-09-14 12:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:17:27 --> Could not find the language line "products"
ERROR - 2023-09-14 12:19:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:21:34 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 12:43:03 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:55:03 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:56:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:56:47 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-14 12:58:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:58:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:58:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:58:58 --> Could not find the language line "Home"
ERROR - 2023-09-14 12:58:59 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:01:30 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:05:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 13:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 13:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 13:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 13:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 13:29:48 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-14 13:57:21 --> Could not find the language line "products"
ERROR - 2023-09-14 13:58:26 --> Could not find the language line "products"
ERROR - 2023-09-14 13:59:34 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 14:01:40 --> Could not find the language line "products"
ERROR - 2023-09-14 14:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 14:06:24 --> Could not find the language line "products"
ERROR - 2023-09-14 14:10:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:20:37 --> Could not find the language line "products"
ERROR - 2023-09-14 14:23:29 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:25:21 --> Could not find the language line "products"
ERROR - 2023-09-14 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:47:23 --> Could not find the language line "products"
ERROR - 2023-09-14 14:49:20 --> Could not find the language line "products"
ERROR - 2023-09-14 14:51:48 --> Could not find the language line "products"
ERROR - 2023-09-14 14:57:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 14:57:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 14:57:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 14:57:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 14:57:23 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-14 14:57:23 --> 404 Page Not Found: Home/home
ERROR - 2023-09-14 14:59:18 --> Could not find the language line "products"
ERROR - 2023-09-14 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 15:01:48 --> Could not find the language line "products"
ERROR - 2023-09-14 15:02:36 --> Could not find the language line "products"
ERROR - 2023-09-14 15:04:18 --> Could not find the language line "products"
ERROR - 2023-09-14 15:23:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 15:24:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 15:34:18 --> Could not find the language line "products"
ERROR - 2023-09-14 15:36:48 --> Could not find the language line "products"
ERROR - 2023-09-14 15:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 15:50:56 --> Could not find the language line "products"
ERROR - 2023-09-14 15:53:49 --> Could not find the language line "products"
ERROR - 2023-09-14 16:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:00:45 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:04:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 16:08:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:08:20 --> Could not find the language line "products"
ERROR - 2023-09-14 16:09:55 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:11:14 --> Could not find the language line "products"
ERROR - 2023-09-14 16:11:18 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:13:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 16:25:45 --> Could not find the language line "products"
ERROR - 2023-09-14 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:34:30 --> Could not find the language line "products"
ERROR - 2023-09-14 16:46:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:46:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 16:50:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 16:50:10 --> Could not find the language line "Home"
ERROR - 2023-09-14 16:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 16:57:57 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:01:04 --> Could not find the language line "products"
ERROR - 2023-09-14 17:04:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:04:24 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:06:04 --> Could not find the language line "products"
ERROR - 2023-09-14 17:07:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-14 17:07:53 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-14 17:07:53 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-14 17:07:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-14 17:07:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-14 17:07:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-14 17:07:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-14 17:07:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-14 17:09:11 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:41:04 --> Could not find the language line "products"
ERROR - 2023-09-14 17:41:09 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:45:47 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:46:04 --> Could not find the language line "products"
ERROR - 2023-09-14 17:51:07 --> Could not find the language line "products"
ERROR - 2023-09-14 17:51:39 --> Could not find the language line "Home"
ERROR - 2023-09-14 17:55:48 --> Could not find the language line "products"
ERROR - 2023-09-14 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:00:37 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:00:41 --> Could not find the language line "products"
ERROR - 2023-09-14 18:00:52 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:02:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 18:05:19 --> Could not find the language line "products"
ERROR - 2023-09-14 18:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-14 18:10:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-14 18:19:39 --> Could not find the language line "products"
ERROR - 2023-09-14 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:33:42 --> Could not find the language line "products"
ERROR - 2023-09-14 18:38:26 --> Could not find the language line "products"
ERROR - 2023-09-14 18:42:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-14 18:44:02 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:44:50 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:45:26 --> Could not find the language line "Home"
ERROR - 2023-09-14 18:56:39 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:11:29 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:12:25 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:20:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:20:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:20:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:20:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:20:07 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:25:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 19:25:30 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:31:09 --> Could not find the language line "products"
ERROR - 2023-09-14 19:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 19:42:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 19:42:23 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 19:47:19 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:47:37 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:47:53 --> Could not find the language line "Bracelets"
ERROR - 2023-09-14 19:48:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 19:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-14 20:00:28 --> Could not find the language line "Home"
ERROR - 2023-09-14 20:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 20:17:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 20:29:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-14 20:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:11:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:36:27 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:38:43 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:40:44 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:42:48 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-14 21:46:22 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:51:20 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:51:21 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-09-14 21:51:21 --> 404 Page Not Found: New/index
ERROR - 2023-09-14 21:51:22 --> 404 Page Not Found: OLD/index
ERROR - 2023-09-14 21:51:23 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-14 21:53:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-14 21:54:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:57:20 --> Could not find the language line "Home"
ERROR - 2023-09-14 21:59:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:05:02 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:06:55 --> Could not find the language line "products"
ERROR - 2023-09-14 22:10:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:13:59 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:15:19 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:23:21 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:37:10 --> 404 Page Not Found: Env/index
ERROR - 2023-09-14 22:42:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:42:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:42:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:42:05 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:42:06 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:52:49 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:56:10 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:56:49 --> Could not find the language line "Home"
ERROR - 2023-09-14 22:58:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-14 22:58:56 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:13:30 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:13:30 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:13:30 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:13:31 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-14 23:21:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-14 23:26:44 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:32:56 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:32:56 --> Could not find the language line "Home"
ERROR - 2023-09-14 23:47:23 --> Could not find the language line "Home"
