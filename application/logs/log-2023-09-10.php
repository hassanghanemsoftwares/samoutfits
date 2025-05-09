<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-10 00:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-10 00:07:54 --> Could not find the language line "Home"
ERROR - 2023-09-10 00:13:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 00:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 00:20:12 --> Could not find the language line "Socks"
ERROR - 2023-09-10 00:23:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-10 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-10 02:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-10 02:09:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 02:11:40 --> Could not find the language line "Home"
ERROR - 2023-09-10 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 02:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 02:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 03:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-10 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-10 03:44:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 04:21:46 --> Could not find the language line "Home"
ERROR - 2023-09-10 04:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-10 04:37:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:00:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 05:04:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:14:06 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:14:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 05:14:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:28:48 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:31:24 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:31:54 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:32:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:32:32 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 05:36:39 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:43:53 --> Could not find the language line "Home"
ERROR - 2023-09-10 05:46:13 --> 404 Page Not Found: Env/index
ERROR - 2023-09-10 05:46:15 --> 404 Page Not Found: Env/index
ERROR - 2023-09-10 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 06:03:46 --> Could not find the language line "Home"
ERROR - 2023-09-10 06:07:23 --> Could not find the language line "Home"
ERROR - 2023-09-10 06:09:06 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 06:09:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-10 06:09:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-10 06:09:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-10 06:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:20:43 --> Could not find the language line "Home"
ERROR - 2023-09-10 06:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:26:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 06:26:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 06:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:09:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:09:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:00 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:00 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:00 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:10:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 07:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:36:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:37:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:38:00 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:47:16 --> Could not find the language line "Home"
ERROR - 2023-09-10 07:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 07:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:00:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 08:00:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 08:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:08:11 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:08:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:10:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 08:10:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 08:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:10:40 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:10:44 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:11:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 08:11:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 08:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:21:16 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:24:20 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:41:24 --> Could not find the language line "Home"
ERROR - 2023-09-10 08:41:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 08:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:44:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 08:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 08:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:56:04 --> Could not find the language line "Other"
ERROR - 2023-09-10 08:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 08:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:00:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:00:42 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:00:59 --> Could not find the language line "products"
ERROR - 2023-09-10 09:02:33 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:07:54 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:19:21 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-09-10 09:21:41 --> Could not find the language line "products"
ERROR - 2023-09-10 09:23:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:24:26 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:26:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 09:29:40 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:30:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 09:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:31:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 09:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 09:37:04 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:38:26 --> Could not find the language line "Home"
ERROR - 2023-09-10 09:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:38:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 09:38:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 09:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:52:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 09:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 09:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 10:03:21 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:03:23 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:08:48 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-09-10 10:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:25:35 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:27:22 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:52:18 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:06 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:53:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 10:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 10:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:00:24 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:12:55 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:16:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 11:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 11:20:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 11:24:41 --> Could not find the language line "Other"
ERROR - 2023-09-10 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:38:45 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:43:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 11:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 11:48:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 12:11:24 --> Could not find the language line "Home"
ERROR - 2023-09-10 12:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:13:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:13:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:20:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:20:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 12:20:49 --> Could not find the language line "Home"
ERROR - 2023-09-10 12:22:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:22:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-10 12:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:26:54 --> Could not find the language line "Home"
ERROR - 2023-09-10 12:26:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 12:26:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 12:27:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:27:02 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:27:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:27:07 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:27:10 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:27:13 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-10 12:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:29:55 --> Could not find the language line "Other"
ERROR - 2023-09-10 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 12:30:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 12:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:39:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 12:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 12:39:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 12:39:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 12:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 12:57:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:57:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 12:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:07:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:14:49 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:28:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 13:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-10 13:28:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-10 13:28:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-10 13:28:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-10 13:28:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-10 13:29:11 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:29:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-10 13:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:32:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 13:44:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 13:45:02 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:52:56 --> Could not find the language line "Home"
ERROR - 2023-09-10 13:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:00:54 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:00:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-10 14:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:10:00 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:22:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:34:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:34:17 --> Could not find the language line "Home"
ERROR - 2023-09-10 14:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 14:48:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 14:49:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:49:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:49:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:49:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:49:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:50:01 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:50:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-10 14:50:38 --> Could not find the language line "Socks"
ERROR - 2023-09-10 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 15:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 15:33:58 --> Could not find the language line "Home"
ERROR - 2023-09-10 15:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:00:41 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:31:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 16:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 16:33:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:34:45 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:34:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 16:41:29 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-10 16:50:02 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:51:31 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:52:19 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:55:21 --> Could not find the language line "Home"
ERROR - 2023-09-10 16:56:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 16:56:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 17:03:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 17:04:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 17:04:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-10 17:06:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 17:18:08 --> Could not find the language line "Home"
ERROR - 2023-09-10 17:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 17:43:56 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:07:19 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:07:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:09:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:09:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:10:38 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 18:11:41 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:12:19 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 18:13:57 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:14:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:15:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 18:19:11 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 18:22:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:25:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 18:25:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 18:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 18:25:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 18:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 18:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 18:25:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 18:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 18:25:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-10 18:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-10 18:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:25:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-10 18:26:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-10 18:26:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-10 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 18:36:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-10 18:46:27 --> Could not find the language line "Home"
ERROR - 2023-09-10 18:48:40 --> Could not find the language line "Bracelets"
ERROR - 2023-09-10 18:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:03:54 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-10 19:09:33 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:41:40 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:47:01 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:52:09 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:52:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:52:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:52:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:52:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 19:53:04 --> Could not find the language line "Socks"
ERROR - 2023-09-10 19:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:02:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 20:03:10 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:08:45 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:11:17 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:26:43 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:28:14 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:40:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-10 20:43:38 --> Could not find the language line "Home"
ERROR - 2023-09-10 20:47:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-10 21:00:26 --> Could not find the language line "Home"
ERROR - 2023-09-10 21:02:25 --> Could not find the language line "Home"
ERROR - 2023-09-10 21:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-10 21:27:59 --> Could not find the language line "Home"
ERROR - 2023-09-10 21:30:21 --> Could not find the language line "Home"
ERROR - 2023-09-10 21:54:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-10 21:55:50 --> Could not find the language line "Home"
ERROR - 2023-09-10 22:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-10 22:09:29 --> Could not find the language line "Home"
ERROR - 2023-09-10 22:20:43 --> 404 Page Not Found: Git/config
ERROR - 2023-09-10 22:20:44 --> 404 Page Not Found: Git/config
ERROR - 2023-09-10 22:20:45 --> 404 Page Not Found: Git/config
ERROR - 2023-09-10 22:20:51 --> 404 Page Not Found: Git/config
ERROR - 2023-09-10 22:20:58 --> 404 Page Not Found: Git/config
ERROR - 2023-09-10 22:28:14 --> Could not find the language line "products"
ERROR - 2023-09-10 22:30:28 --> Could not find the language line "Home"
ERROR - 2023-09-10 22:42:13 --> Could not find the language line "products"
ERROR - 2023-09-10 23:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-10 23:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-10 23:31:52 --> Could not find the language line "Home"
ERROR - 2023-09-10 23:31:55 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-09-10 23:31:55 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-10 23:31:55 --> Could not find the language line "Home"
ERROR - 2023-09-10 23:31:56 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-10 23:31:57 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-10 23:31:57 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-10 23:31:57 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-09-10 23:31:57 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-10 23:31:58 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-09-10 23:31:58 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-09-10 23:31:58 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-10 23:31:58 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-10 23:31:58 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-10 23:31:59 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-10 23:31:59 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-09-10 23:31:59 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-10 23:31:59 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-10 23:31:59 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-09-10 23:35:12 --> Could not find the language line "Home"
ERROR - 2023-09-10 23:35:37 --> Could not find the language line "Home"
