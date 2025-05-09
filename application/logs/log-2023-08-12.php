<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-12 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 00:37:43 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-12 00:41:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 00:53:28 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:15:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:23:28 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:25:19 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:42:10 --> Could not find the language line "Home"
ERROR - 2023-08-12 01:52:54 --> Could not find the language line "Perfume"
ERROR - 2023-08-12 01:53:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-12 02:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 02:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:29:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 02:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 02:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 03:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 03:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 03:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 03:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 03:02:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 03:02:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 03:11:38 --> Could not find the language line "Home"
ERROR - 2023-08-12 03:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 03:20:39 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-12 03:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 03:42:47 --> Could not find the language line "Socks"
ERROR - 2023-08-12 03:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 03:52:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-12 04:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-12 04:05:42 --> Could not find the language line "Home"
ERROR - 2023-08-12 04:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 04:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-12 04:35:59 --> Could not find the language line "Home"
ERROR - 2023-08-12 04:57:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:00:55 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:07:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 05:10:08 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:11:05 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:15:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 05:15:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 05:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:18:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 05:21:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 05:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:27:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:47:46 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 05:52:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 05:52:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 05:55:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:04:26 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:07:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:07:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:36:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 06:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:40:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 06:40:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 06:40:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 06:40:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 06:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-12 06:41:07 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:44:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-12 06:44:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-12 06:44:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-12 06:44:59 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:45:00 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:45:00 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:47:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-12 06:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 06:50:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 06:52:00 --> Could not find the language line "Home"
ERROR - 2023-08-12 06:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: Wp-plainphp/index
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: Cpcfeerzphp/index
ERROR - 2023-08-12 07:16:45 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:16:45 --> 404 Page Not Found: Alfacgiapi/perl.alfa
ERROR - 2023-08-12 07:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:17:00 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:17:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 07:17:42 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 07:18:30 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:24:43 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 07:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 08:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:17:56 --> Could not find the language line "Crocs"
ERROR - 2023-08-12 08:27:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 08:27:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 08:27:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 08:27:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 08:27:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 08:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:42:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 08:42:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-12 08:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 08:54:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 08:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:00:41 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:08:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-12 09:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:11:09 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:11:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:19:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 09:20:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 09:20:46 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-08-12 09:20:52 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:20:52 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:22:57 --> Could not find the language line "Bracelets"
ERROR - 2023-08-12 09:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:38:53 --> Could not find the language line "Home"
ERROR - 2023-08-12 09:44:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-12 09:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 09:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:04:27 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:07:49 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:09:34 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:13:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 10:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 10:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:15:44 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2023-08-12 10:15:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-12 10:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:32:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:34:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 10:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:34:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:34:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 10:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 10:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 10:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:38:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 10:38:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 10:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:49:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 10:49:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 10:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 10:59:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:03:41 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 11:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 11:16:29 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 11:25:01 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:25:54 --> 404 Page Not Found: Assets/images
ERROR - 2023-08-12 11:25:54 --> 404 Page Not Found: Assets/images
ERROR - 2023-08-12 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:30:27 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 11:30:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-08-12 11:30:47 --> 404 Page Not Found: Assets/images
ERROR - 2023-08-12 11:30:54 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 11:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 11:36:22 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:42:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 11:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 11:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 11:45:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 11:56:19 --> Could not find the language line "Home"
ERROR - 2023-08-12 11:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-12 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:01:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-12 12:04:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 12:05:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 12:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-12 12:09:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-12 12:17:52 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:18:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 12:18:05 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:18:38 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:27:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:27:36 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:27:50 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:27:51 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-12 12:29:06 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:29:34 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:29:37 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:30:49 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 12:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 12:54:19 --> Could not find the language line "Home"
ERROR - 2023-08-12 12:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:01:40 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 13:31:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 13:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 13:33:36 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:35:08 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:46:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:46:59 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:51:07 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 13:57:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:57:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-12 13:58:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-12 13:58:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 13:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-12 13:59:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:01:07 --> Could not find the language line "Bracelets"
ERROR - 2023-08-12 14:01:11 --> Could not find the language line "Bracelets"
ERROR - 2023-08-12 14:01:18 --> Could not find the language line "Bracelets"
ERROR - 2023-08-12 14:03:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:03:48 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:04:34 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:05:38 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:06:35 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:06:44 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-08-12 14:06:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:06:47 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-08-12 14:06:47 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-12 14:06:50 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-12 14:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:14:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 14:17:07 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:17:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:17:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:19:22 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:24:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:24:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:25:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:25:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:26:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:26:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:26:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:26:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:26:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-12 14:27:35 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-12 14:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 14:56:40 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:00:09 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:13:42 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:17:28 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:20:04 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-12 15:23:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:25:48 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:31:22 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 15:37:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 15:37:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 15:38:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 15:42:25 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:42:27 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 15:47:17 --> Could not find the language line "Home"
ERROR - 2023-08-12 15:51:42 --> Could not find the language line "Home"
ERROR - 2023-08-12 16:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 16:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 16:20:02 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-12 16:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-12 16:32:37 --> Could not find the language line "Home"
ERROR - 2023-08-12 16:36:38 --> Could not find the language line "Home"
ERROR - 2023-08-12 16:43:21 --> Could not find the language line "Other"
ERROR - 2023-08-12 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:05:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 17:06:56 --> 404 Page Not Found: Wp-admin/admin-ajax.php
ERROR - 2023-08-12 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:30:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:37:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:37:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:37:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:37:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:38:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:38:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 17:39:00 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:02 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:02 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:03 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:04 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:05 --> Could not find the language line "Home"
ERROR - 2023-08-12 17:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 17:41:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 17:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 17:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:07:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 18:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:16:05 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:19:22 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:23:39 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:23:41 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:23:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-12 18:23:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-12 18:23:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-12 18:23:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-12 18:25:57 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 18:27:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 18:40:19 --> Could not find the language line "Home"
ERROR - 2023-08-12 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 19:18:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-12 19:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 19:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 19:24:46 --> Could not find the language line "Socks"
ERROR - 2023-08-12 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 19:32:35 --> Could not find the language line "Home"
ERROR - 2023-08-12 19:36:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 19:36:37 --> Could not find the language line "Home"
ERROR - 2023-08-12 20:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 20:15:06 --> Could not find the language line "Home"
ERROR - 2023-08-12 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:05:34 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:06:26 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:17:27 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:19:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:20:34 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:20:37 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 21:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:35:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 21:35:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-12 21:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 21:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:23:36 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:31:57 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-12 22:44:07 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:45:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:52:56 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:55:47 --> Could not find the language line "Home"
ERROR - 2023-08-12 22:59:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-12 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-12 23:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-12 23:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 23:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-12 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-08-12 23:50:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-12 23:50:52 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-08-12 23:51:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-08-12 23:51:06 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-08-12 23:53:43 --> Could not find the language line "Home"
ERROR - 2023-08-12 23:55:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-12 23:55:32 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-12 23:55:32 --> Could not find the language line "Home"
