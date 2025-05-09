<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-01 00:05:25 --> Could not find the language line "Other"
ERROR - 2024-11-01 00:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 00:15:06 --> Could not find the language line "Other"
ERROR - 2024-11-01 00:16:17 --> Could not find the language line "Socks"
ERROR - 2024-11-01 00:16:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 00:20:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-01 00:20:21 --> Could not find the language line "Perfume"
ERROR - 2024-11-01 00:31:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-01 00:32:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-01 00:46:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:16:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 01:24:50 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:24:53 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 01:45:33 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:46:29 --> Could not find the language line "Home"
ERROR - 2024-11-01 01:49:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-01 01:55:12 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:16:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 02:25:14 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:33:34 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:39:19 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-01 02:41:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:41:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:46:19 --> Could not find the language line "Home"
ERROR - 2024-11-01 02:55:48 --> Could not find the language line "Home"
ERROR - 2024-11-01 03:01:57 --> Could not find the language line "Home"
ERROR - 2024-11-01 03:06:57 --> Could not find the language line "Home"
ERROR - 2024-11-01 03:12:32 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-01 03:13:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 03:16:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 03:26:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-01 03:46:38 --> Could not find the language line "Home"
ERROR - 2024-11-01 04:16:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 04:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 04:46:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 04:49:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 04:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 04:57:03 --> Could not find the language line "Home"
ERROR - 2024-11-01 04:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 05:16:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 05:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 05:46:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 05:48:14 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 06:01:33 --> Could not find the language line "Home"
ERROR - 2024-11-01 06:16:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 06:17:08 --> Could not find the language line "Home"
ERROR - 2024-11-01 06:30:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-01 06:31:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-01 06:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 06:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 06:46:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 06:55:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:01:53 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:16:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:25:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 07:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 07:29:28 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:33:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:39:52 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 07:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 07:45:52 --> Could not find the language line "Home"
ERROR - 2024-11-01 07:46:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:02:01 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 08:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:02:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-01 08:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:10:54 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:16:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:30:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:30:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-01 08:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-01 08:30:57 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:31:51 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:33:03 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:33:52 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:36:12 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:36:17 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:36:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 08:36:48 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:39:29 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:46:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:47:51 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:59:34 --> Could not find the language line "Home"
ERROR - 2024-11-01 08:59:53 --> Could not find the language line "Socks"
ERROR - 2024-11-01 09:04:26 --> Could not find the language line "Socks"
ERROR - 2024-11-01 09:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:12:04 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2024-11-01 09:12:04 --> 404 Page Not Found: Autodiscover/autodiscover.xml
ERROR - 2024-11-01 09:16:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:19:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:19:25 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:20:38 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-11-01 09:24:39 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:24:43 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:25:03 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:32:42 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:46:21 --> Could not find the language line "Home"
ERROR - 2024-11-01 09:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 09:56:01 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:03:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-01 10:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-01 10:03:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-01 10:03:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-01 10:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-01 10:03:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-01 10:04:04 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:04:07 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:04:08 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:09:55 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-11-01 10:16:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:20:57 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:22:34 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:23:54 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:24:46 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:25:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-01 10:25:45 --> Could not find the language line "Perfume"
ERROR - 2024-11-01 10:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:30:43 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:30:48 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:35:18 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:35:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:37:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-01 10:37:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-11-01 10:37:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-01 10:38:14 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:46:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:48:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:48:34 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:48:35 --> Could not find the language line "Home"
ERROR - 2024-11-01 10:50:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-01 10:50:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-11-01 10:50:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-01 10:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:54:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-01 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 10:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:16:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:18:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-01 11:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-01 11:18:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-01 11:22:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-01 11:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:24:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:24:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-01 11:24:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-01 11:25:12 --> Could not find the language line "Socks"
ERROR - 2024-11-01 11:33:45 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:35:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 11:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:41:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:42:04 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-01 11:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:42:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-11-01 11:42:51 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-11-01 11:42:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-11-01 11:42:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-11-01 11:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:46:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 11:56:18 --> Could not find the language line "Home"
ERROR - 2024-11-01 11:58:20 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:00:16 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:04:41 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:05:56 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:05:58 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:09:19 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-01 12:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 12:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 12:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 12:16:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:26:04 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-01 12:26:04 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:26:04 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 12:32:38 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 12:46:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:54:52 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:55:33 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:58:10 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:58:15 --> Could not find the language line "Home"
ERROR - 2024-11-01 12:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 13:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 13:05:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 13:16:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:30:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 13:38:10 --> 404 Page Not Found: All/index
ERROR - 2024-11-01 13:41:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:46:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:47:02 --> Could not find the language line "Home"
ERROR - 2024-11-01 13:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 13:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 14:07:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 14:16:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 14:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 14:39:37 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 14:46:24 --> Could not find the language line "Home"
ERROR - 2024-11-01 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 14:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 14:52:39 --> Could not find the language line "Other"
ERROR - 2024-11-01 15:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 15:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 15:16:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 15:18:29 --> Could not find the language line "Home"
ERROR - 2024-11-01 15:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 15:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 15:37:23 --> Could not find the language line "Home"
ERROR - 2024-11-01 15:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 15:46:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:04:44 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:15:13 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:16:25 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:17:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 16:18:28 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:18:32 --> Could not find the language line "Bracelets"
ERROR - 2024-11-01 16:18:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 16:19:12 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 16:19:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 16:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 16:32:39 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 16:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 16:44:57 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:46:25 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 16:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 16:54:22 --> Could not find the language line "Home"
ERROR - 2024-11-01 16:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 17:05:40 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-01 17:13:48 --> Could not find the language line "Home"
ERROR - 2024-11-01 17:16:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 17:31:53 --> Could not find the language line "Home"
ERROR - 2024-11-01 17:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 17:46:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 17:59:51 --> Could not find the language line "Crocs"
ERROR - 2024-11-01 18:01:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-01 18:16:29 --> Could not find the language line "Home"
ERROR - 2024-11-01 18:31:13 --> Could not find the language line "Home"
ERROR - 2024-11-01 18:43:38 --> Could not find the language line "Home"
ERROR - 2024-11-01 18:45:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 18:46:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 18:49:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-01 18:58:46 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-01 18:58:47 --> Could not find the language line "Home"
ERROR - 2024-11-01 19:08:12 --> Could not find the language line "Home"
ERROR - 2024-11-01 19:08:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 19:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:08:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 19:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:08:47 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 19:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:09:02 --> Could not find the language line "Clothing"
ERROR - 2024-11-01 19:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:16:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 19:28:13 --> 404 Page Not Found: Media/system
ERROR - 2024-11-01 19:28:13 --> 404 Page Not Found: Wp-includes/js
ERROR - 2024-11-01 19:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 19:35:40 --> Could not find the language line "Home"
ERROR - 2024-11-01 19:46:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 19:58:21 --> 404 Page Not Found: Archivarixcmsphp/index
ERROR - 2024-11-01 20:16:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:28:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-01 20:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 20:46:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:50:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:52:02 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:53:19 --> Could not find the language line "Bracelets"
ERROR - 2024-11-01 20:53:30 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:54:04 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 20:54:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-01 20:54:49 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 20:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 20:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 20:56:03 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:56:16 --> Could not find the language line "Home"
ERROR - 2024-11-01 20:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 21:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 21:12:59 --> Could not find the language line "Socks"
ERROR - 2024-11-01 21:16:21 --> Could not find the language line "Socks"
ERROR - 2024-11-01 21:16:28 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:16:45 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:16:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-01 21:23:40 --> 404 Page Not Found: Rest/V1
ERROR - 2024-11-01 21:30:38 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:46:28 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:47:06 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:50:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 21:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 21:51:28 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:54:33 --> Could not find the language line "Home"
ERROR - 2024-11-01 21:55:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-01 22:10:45 --> Could not find the language line "Home"
ERROR - 2024-11-01 22:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 22:16:31 --> Could not find the language line "Home"
ERROR - 2024-11-01 22:39:26 --> Could not find the language line "Home"
ERROR - 2024-11-01 22:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 22:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 22:41:34 --> Could not find the language line "Home"
ERROR - 2024-11-01 22:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 22:46:35 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:16:31 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-01 23:46:33 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:53:01 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:55:38 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:56:27 --> Could not find the language line "Home"
ERROR - 2024-11-01 23:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-01 23:58:16 --> 404 Page Not Found: Assets/css
