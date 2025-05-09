<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-15 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 00:06:06 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-15 00:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 00:28:56 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-07-15 00:29:00 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-07-15 00:29:33 --> 404 Page Not Found: Git/config
ERROR - 2023-07-15 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 00:40:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 00:41:02 --> Could not find the language line "Home"
ERROR - 2023-07-15 00:49:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 00:59:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 00:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 00:59:50 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-15 00:59:52 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-15 00:59:55 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-15 00:59:57 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-15 01:00:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 01:00:05 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:00:37 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-15 01:00:42 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:00:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-15 01:00:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:01:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 01:01:48 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:01:57 --> Could not find the language line "Other"
ERROR - 2023-07-15 01:02:02 --> Could not find the language line "Other"
ERROR - 2023-07-15 01:02:10 --> Could not find the language line "Other"
ERROR - 2023-07-15 01:02:14 --> Could not find the language line "Other"
ERROR - 2023-07-15 01:02:20 --> Could not find the language line "Perfume"
ERROR - 2023-07-15 01:02:49 --> Could not find the language line "Socks"
ERROR - 2023-07-15 01:02:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-15 01:03:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 01:03:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 01:14:02 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:19:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 01:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-15 01:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 01:51:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 02:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-15 02:45:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 03:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 03:18:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-15 03:28:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 03:35:29 --> Could not find the language line "Home"
ERROR - 2023-07-15 03:38:21 --> Could not find the language line "Home"
ERROR - 2023-07-15 03:40:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:30:23 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-15 04:40:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 04:40:21 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:40:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 04:59:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:00:42 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:05:53 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:05:53 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:06:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 05:06:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 05:06:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 05:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:06:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 05:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 05:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:24:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 05:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 05:27:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-15 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:32:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 05:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 05:41:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:41:43 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:41:44 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:43:32 --> Could not find the language line "Home"
ERROR - 2023-07-15 05:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 05:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:06:21 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-15 06:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:31:47 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-15 06:31:48 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-15 06:31:50 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-15 06:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:35:36 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:35:44 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:44:00 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:44:41 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:47:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:56:28 --> Could not find the language line "Home"
ERROR - 2023-07-15 06:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 06:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 06:58:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 06:58:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 06:58:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 07:00:21 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:10:33 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:10:56 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:11:02 --> Could not find the language line "Perfume"
ERROR - 2023-07-15 07:11:10 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:14:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 07:14:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 07:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:16:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 07:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 07:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:24:42 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:28:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:28:29 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 07:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 07:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:05:03 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:09:04 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:39:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:41:56 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:44:41 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:47:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:47:27 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:50:36 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 08:52:47 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:54:45 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:55:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 08:56:51 --> Could not find the language line "Home"
ERROR - 2023-07-15 08:57:01 --> Could not find the language line "Socks"
ERROR - 2023-07-15 08:57:26 --> Could not find the language line "Socks"
ERROR - 2023-07-15 08:57:49 --> Could not find the language line "Socks"
ERROR - 2023-07-15 08:57:56 --> Could not find the language line "Socks"
ERROR - 2023-07-15 08:57:58 --> Could not find the language line "Socks"
ERROR - 2023-07-15 08:58:00 --> Could not find the language line "Home"
ERROR - 2023-07-15 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 09:14:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 09:20:40 --> Could not find the language line "Home"
ERROR - 2023-07-15 09:22:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 09:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 09:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 09:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 09:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:05:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 10:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 10:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 10:10:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 10:10:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:10:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 10:14:33 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:30:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 10:30:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 10:35:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-15 10:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:44:33 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:53:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:53:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:54:23 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:54:28 --> Could not find the language line "Perfume"
ERROR - 2023-07-15 10:54:33 --> Could not find the language line "Home"
ERROR - 2023-07-15 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 11:04:08 --> Could not find the language line "Home"
ERROR - 2023-07-15 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 11:41:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 12:07:24 --> Could not find the language line "Other"
ERROR - 2023-07-15 12:08:23 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:12:56 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:15:03 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 12:19:09 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:21:51 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:24:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 12:24:16 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 12:44:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 12:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 13:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:05:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 13:06:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 13:06:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 13:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:28:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 13:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 13:49:44 --> Could not find the language line "Crocs"
ERROR - 2023-07-15 13:55:02 --> Could not find the language line "Home"
ERROR - 2023-07-15 13:59:30 --> Could not find the language line "Home"
ERROR - 2023-07-15 14:00:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 14:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 14:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-15 14:00:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 14:00:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `items`.`color` IN('Grey')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 14:07:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 14:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 14:18:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 14:22:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 14:29:03 --> Could not find the language line "Home"
ERROR - 2023-07-15 14:29:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 14:29:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 14:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 14:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:34:04 --> Could not find the language line "Home"
ERROR - 2023-07-15 14:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 14:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('40', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 14:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:54:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 14:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 14:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 15:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 15:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 15:13:22 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:13:33 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:34:49 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 15:36:59 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:42:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 15:52:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 15:58:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 15:58:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 16:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:23:09 --> Could not find the language line "Home"
ERROR - 2023-07-15 16:24:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 16:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:26:17 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-15 16:28:29 --> Could not find the language line "Home"
ERROR - 2023-07-15 16:28:33 --> Could not find the language line "Bracelets"
ERROR - 2023-07-15 16:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 16:34:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 16:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:20:12 --> Could not find the language line "Other"
ERROR - 2023-07-15 17:25:42 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:41:38 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:47:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:47:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-15 17:47:25 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:47:40 --> Could not find the language line "Home"
ERROR - 2023-07-15 17:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 17:55:44 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:06:45 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:07:53 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:08:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-07-15 18:08:29 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-07-15 18:08:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-07-15 18:08:44 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-07-15 18:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:11:27 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:13:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 18:13:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:13:23 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:16:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 18:16:40 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:33:09 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:35:47 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:38:25 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:38:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:38:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:39:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:40:55 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:42:23 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:43:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:43:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:44:58 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 18:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:57:52 --> Could not find the language line "Home"
ERROR - 2023-07-15 18:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 18:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:01:19 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:05:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:07:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 19:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:12:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 19:12:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-15 19:12:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:12:52 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:13:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:14:32 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:15:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:17:46 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:19:03 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:22:56 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:23:09 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:23:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:31:10 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:31:18 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:31:35 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:32:04 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:33:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:33:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:33:53 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:34:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:34:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:35:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:35:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-15 19:41:26 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-15 19:41:26 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-15 19:41:27 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-15 19:41:27 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-15 19:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:42:05 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:44:53 --> Could not find the language line "Home"
ERROR - 2023-07-15 19:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:51:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-15 19:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-15 19:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 19:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 20:21:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 20:26:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-15 20:26:51 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-15 20:27:38 --> Could not find the language line "Home"
ERROR - 2023-07-15 20:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 20:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 20:52:30 --> Could not find the language line "assets"
ERROR - 2023-07-15 20:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 20:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-15 21:02:25 --> Could not find the language line "Home"
ERROR - 2023-07-15 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-15 21:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 21:46:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-15 21:47:41 --> Could not find the language line "Home"
ERROR - 2023-07-15 21:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 21:55:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-15 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:07:20 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:15:17 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:15:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:15:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:15:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:15:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:15:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:15:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-15 22:16:00 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:18:20 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:18:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-15 22:19:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-15 22:19:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-15 22:20:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-15 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 22:37:13 --> Could not find the language line "Home"
ERROR - 2023-07-15 22:41:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-15 22:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-15 22:54:43 --> Could not find the language line "Bracelets"
ERROR - 2023-07-15 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-15 23:30:14 --> Could not find the language line "Home"
