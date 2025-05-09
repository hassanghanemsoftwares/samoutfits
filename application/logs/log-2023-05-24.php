<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-24 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 00:03:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-24 00:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 00:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 00:30:19 --> Could not find the language line "Home"
ERROR - 2023-05-24 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 01:26:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 01:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 01:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 01:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 02:05:53 --> Could not find the language line "Home"
ERROR - 2023-05-24 02:07:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 02:30:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:05:35 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:09:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 03:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:39:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:41:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 03:42:25 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 03:48:22 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:48:24 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:48:59 --> Could not find the language line "Home"
ERROR - 2023-05-24 03:59:39 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 04:05:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 04:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 04:21:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 04:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 04:54:38 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:13:30 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:13:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-24 05:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:26:54 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:27:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:27:18 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:36:06 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:38:25 --> Could not find the language line "Home"
ERROR - 2023-05-24 05:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 05:57:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 05:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 06:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 06:24:06 --> Could not find the language line "Home"
ERROR - 2023-05-24 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 06:35:59 --> Could not find the language line "Home"
ERROR - 2023-05-24 06:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 06:43:35 --> Could not find the language line "Home"
ERROR - 2023-05-24 06:48:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 06:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 06:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:21:14 --> Could not find the language line "Other"
ERROR - 2023-05-24 07:22:58 --> Could not find the language line "Other"
ERROR - 2023-05-24 07:23:05 --> Could not find the language line "Other"
ERROR - 2023-05-24 07:24:26 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:24:29 --> Could not find the language line "Other"
ERROR - 2023-05-24 07:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:26:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:31:18 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 07:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:41:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:49:10 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:50:01 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:50:46 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:50:50 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:50:51 --> Could not find the language line "Home"
ERROR - 2023-05-24 07:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:51:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:52:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:52:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 07:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:54:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 07:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 08:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:34:30 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:35:10 --> Could not find the language line "Socks"
ERROR - 2023-05-24 08:35:29 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:40:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 08:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 08:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 08:52:57 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:54:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:57:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 08:57:16 --> Could not find the language line "Home"
ERROR - 2023-05-24 08:58:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:06:42 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:13:03 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:14:51 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:17:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-24 09:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-24 09:17:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-24 09:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-24 09:17:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-24 09:17:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-24 09:17:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-24 09:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-24 09:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-24 09:17:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Grey')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-24 09:17:45 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:22:27 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:23:02 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:23:17 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:23:39 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:24:29 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:24:55 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:25:18 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:25:40 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:26:37 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:26:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-24 09:27:07 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:27:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-24 09:28:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-24 09:28:40 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:31:39 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:31:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 09:31:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 09:31:56 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:32:12 --> Could not find the language line "Other"
ERROR - 2023-05-24 09:33:31 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:34:54 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:35:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:35:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 09:46:50 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:51:34 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:52:23 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:57:28 --> Could not find the language line "Home"
ERROR - 2023-05-24 09:57:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:58:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:58:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:58:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:58:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 09:58:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:59:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 09:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:00:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:00:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:00:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:00:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:01:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:05:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:05:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:05:37 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:06:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:06:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:07:03 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:10:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 10:10:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 10:10:20 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:13:10 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:20:25 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:20:48 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:21:01 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:21:01 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:21:25 --> Could not find the language line "clothing"
ERROR - 2023-05-24 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:46:35 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:47:05 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:48:45 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:49:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:50:09 --> Could not find the language line "Home"
ERROR - 2023-05-24 10:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 10:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:14:38 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:15:20 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:25:51 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:37:16 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:37:21 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:38:05 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:38:10 --> Could not find the language line "Home"
ERROR - 2023-05-24 11:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 11:55:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:08:36 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:12:02 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:14:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:26:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 12:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:28:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 12:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:29:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:34:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 12:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:40:56 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:41:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:41:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:41:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:41:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:42:28 --> Could not find the language line "Home"
ERROR - 2023-05-24 12:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:47:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:48:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 12:59:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:02:09 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:02:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:02:46 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:09:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:09:34 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:11:19 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:11:31 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:13:44 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:14:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:14:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:22:46 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:23:25 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 13:24:24 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:25:15 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:29:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 13:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:30:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 13:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 13:31:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 13:34:16 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:34:19 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:34:32 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:38:27 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:49:28 --> Could not find the language line "Socks"
ERROR - 2023-05-24 13:50:24 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:52:33 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:53:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 13:53:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 13:53:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 13:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 13:53:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 13:53:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:54:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 13:55:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 14:03:22 --> Could not find the language line "Home"
ERROR - 2023-05-24 14:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 14:08:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 14:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 14:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:28:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 14:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:38:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 14:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 14:58:20 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:00:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 15:00:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 15:00:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 15:00:55 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:07:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 15:07:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 15:07:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:07:20 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:09:01 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:44:35 --> Could not find the language line "Home"
ERROR - 2023-05-24 15:59:23 --> Could not find the language line "Home"
ERROR - 2023-05-24 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 16:08:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 16:08:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 16:08:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-24 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 16:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 16:31:09 --> Could not find the language line "Home"
ERROR - 2023-05-24 16:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 16:54:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:02:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:03:45 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:03:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 17:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 17:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 17:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:06:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 17:06:03 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:06:31 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:06:34 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:07:00 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:08:12 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:08:57 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:10:51 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:11:04 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 17:11:09 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:12:02 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:21:24 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:40:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 17:42:23 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:53:45 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:53:55 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:54:03 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:55:50 --> Could not find the language line "Home"
ERROR - 2023-05-24 17:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:01:36 --> Could not find the language line "Crocs"
ERROR - 2023-05-24 18:05:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 18:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 18:28:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:29:45 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 18:31:08 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:31:34 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:31:56 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:32:30 --> Could not find the language line "Perfume"
ERROR - 2023-05-24 18:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 18:32:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:06 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:33:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:33 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:33:36 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:33:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 18:33:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:54 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:33:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 18:33:57 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:33:57 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:36:25 --> Could not find the language line "Home"
ERROR - 2023-05-24 18:57:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 18:57:43 --> Could not find the language line "Home"
ERROR - 2023-05-24 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 19:05:07 --> 404 Page Not Found: 0zip/index
ERROR - 2023-05-24 19:05:31 --> 404 Page Not Found: 0rar/index
ERROR - 2023-05-24 19:05:43 --> 404 Page Not Found: 0gz/index
ERROR - 2023-05-24 19:06:18 --> 404 Page Not Found: 0targz/index
ERROR - 2023-05-24 19:06:37 --> 404 Page Not Found: 0sql/index
ERROR - 2023-05-24 19:07:00 --> 404 Page Not Found: 0sqlgz/index
ERROR - 2023-05-24 19:07:21 --> 404 Page Not Found: 0sqlzip/index
ERROR - 2023-05-24 19:07:45 --> 404 Page Not Found: 1zip/index
ERROR - 2023-05-24 19:08:07 --> 404 Page Not Found: 1rar/index
ERROR - 2023-05-24 19:08:30 --> 404 Page Not Found: 1gz/index
ERROR - 2023-05-24 19:08:54 --> 404 Page Not Found: 1targz/index
ERROR - 2023-05-24 19:09:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 19:09:18 --> 404 Page Not Found: 1sql/index
ERROR - 2023-05-24 19:09:39 --> 404 Page Not Found: 1sqlgz/index
ERROR - 2023-05-24 19:09:59 --> 404 Page Not Found: 1sqlzip/index
ERROR - 2023-05-24 19:10:23 --> 404 Page Not Found: 2zip/index
ERROR - 2023-05-24 19:10:45 --> 404 Page Not Found: 2rar/index
ERROR - 2023-05-24 19:11:06 --> 404 Page Not Found: 2gz/index
ERROR - 2023-05-24 19:11:29 --> 404 Page Not Found: 2targz/index
ERROR - 2023-05-24 19:11:50 --> 404 Page Not Found: 2sql/index
ERROR - 2023-05-24 19:12:12 --> 404 Page Not Found: 2sqlgz/index
ERROR - 2023-05-24 19:12:58 --> 404 Page Not Found: 2sqlzip/index
ERROR - 2023-05-24 19:13:32 --> 404 Page Not Found: 3zip/index
ERROR - 2023-05-24 19:14:07 --> 404 Page Not Found: 3rar/index
ERROR - 2023-05-24 19:14:30 --> 404 Page Not Found: 3gz/index
ERROR - 2023-05-24 19:15:44 --> 404 Page Not Found: 3sql/index
ERROR - 2023-05-24 19:16:03 --> 404 Page Not Found: 3sqlgz/index
ERROR - 2023-05-24 19:16:24 --> 404 Page Not Found: 3sqlzip/index
ERROR - 2023-05-24 19:16:46 --> 404 Page Not Found: 4zip/index
ERROR - 2023-05-24 19:17:09 --> 404 Page Not Found: 4rar/index
ERROR - 2023-05-24 19:17:33 --> 404 Page Not Found: 4gz/index
ERROR - 2023-05-24 19:17:54 --> 404 Page Not Found: 4targz/index
ERROR - 2023-05-24 19:18:13 --> 404 Page Not Found: 4sql/index
ERROR - 2023-05-24 19:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 19:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-24 19:32:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 19:33:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 19:33:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 19:47:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-24 19:59:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:02:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-24 20:03:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 20:11:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 20:28:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:30:42 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 20:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 20:41:57 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:42:04 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:42:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-24 20:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 20:42:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-24 20:42:34 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:42:54 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:43:01 --> Could not find the language line "Perfume"
ERROR - 2023-05-24 20:43:18 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:43:47 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 20:44:09 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:44:16 --> Could not find the language line "Perfume"
ERROR - 2023-05-24 20:44:23 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:48:19 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:56:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 20:57:35 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:05:17 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:15:08 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:15:39 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:15:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:16:41 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:23:40 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:23:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:24:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 21:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:24:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:24:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:24:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:24:56 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:25:10 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:28:26 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:29:24 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:30:47 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-24 21:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:37:14 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:37:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:38:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-24 21:38:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:39:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:39:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:39:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 21:39:47 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:43:33 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:43:42 --> Could not find the language line "Perfume"
ERROR - 2023-05-24 21:43:54 --> Could not find the language line "Home"
ERROR - 2023-05-24 21:53:48 --> Could not find the language line "Bracelets"
ERROR - 2023-05-24 22:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:00:44 --> 404 Page Not Found: Admin/assets
ERROR - 2023-05-24 22:13:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:37:13 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-24 22:44:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:44:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:45:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:45:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:45:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 22:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 22:54:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 23:00:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 23:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-24 23:23:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-24 23:30:14 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-24 23:36:12 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
