<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-22 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-22 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 00:45:21 --> Could not find the language line "Home"
ERROR - 2023-07-22 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 01:11:18 --> Could not find the language line "Home"
ERROR - 2023-07-22 01:25:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-22 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-22 01:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 01:36:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 02:09:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 02:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 02:10:28 --> Could not find the language line "Home"
ERROR - 2023-07-22 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 03:25:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 03:35:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-22 03:56:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-22 03:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:18:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:36:17 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:51:36 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:54:46 --> Could not find the language line "Home"
ERROR - 2023-07-22 04:59:09 --> Could not find the language line "Home"
ERROR - 2023-07-22 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 05:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:08:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 05:08:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 05:16:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 05:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-22 05:18:38 --> Could not find the language line "Home"
ERROR - 2023-07-22 05:26:21 --> Could not find the language line "Home"
ERROR - 2023-07-22 05:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 05:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:46:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 05:46:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 05:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:52:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 05:52:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 05:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 05:57:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:11:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:11:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:12:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:12:07 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:21:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:21:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 06:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 06:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:24:55 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:26:54 --> 404 Page Not Found: Archivarixcmsphp/index
ERROR - 2023-07-22 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:30:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 06:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:36:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:36:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 06:41:08 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:42:45 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:43:30 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:45:19 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:47:49 --> Could not find the language line "Home"
ERROR - 2023-07-22 06:56:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-22 06:56:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-22 06:56:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-22 06:56:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-22 06:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 06:57:59 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 07:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:17:32 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:18:30 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:19:08 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:23:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:23:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:23:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:23:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:24:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:24:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 07:24:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 07:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:25:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:32:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 07:34:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:34:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:39:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:45:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:45:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:45:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:45:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 07:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 07:54:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 07:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:06:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-07-22 08:06:59 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:13:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 08:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:17:46 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:17:46 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:26:57 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:27:49 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:29:32 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:33:34 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:34:39 --> 404 Page Not Found: File-uploader/server
ERROR - 2023-07-22 08:38:36 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:40:57 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:42:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 08:42:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 08:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 08:55:45 --> Could not find the language line "Home"
ERROR - 2023-07-22 08:55:45 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:07:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 09:09:18 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:09:31 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:09:32 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-22 09:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:11:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 09:11:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 09:12:27 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:14:04 --> Could not find the language line "assets"
ERROR - 2023-07-22 09:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:21:55 --> Could not find the language line "Other"
ERROR - 2023-07-22 09:23:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-22 09:23:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-22 09:23:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-22 09:23:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-22 09:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:41:55 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:43:30 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:43:32 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:48:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 09:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:52:44 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:53:27 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:53:49 --> Could not find the language line "Home"
ERROR - 2023-07-22 09:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 09:54:22 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:05:52 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 10:09:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 10:09:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 10:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:25:44 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:26:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:31:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:31:32 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:32:01 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:32:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 10:32:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 10:32:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 10:32:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:34:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 10:36:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:44:06 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:44:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 10:44:10 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:52:34 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:53:58 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:54:40 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:55:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:55:32 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:57:00 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:57:05 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:57:40 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:58:49 --> Could not find the language line "Home"
ERROR - 2023-07-22 10:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 10:59:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:01:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:02:16 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:03:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:04:42 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:05:36 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:06:18 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:07:24 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:09:40 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:09:42 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:09:53 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:09:53 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-22 11:09:54 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-22 11:09:54 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:09:54 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-22 11:09:55 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-22 11:09:56 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-22 11:11:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 11:11:39 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:11:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:12:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:13:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:14:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:14:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:14:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:14:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:15:41 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:15:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:16:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:16:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:20:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:22:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:23:19 --> Could not find the language line "Perfume"
ERROR - 2023-07-22 11:23:28 --> Could not find the language line "Socks"
ERROR - 2023-07-22 11:23:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:23:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:24:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:25:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:25:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:25:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 11:25:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:25:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:37:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:38:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:38:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:39:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:39:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:39:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:40:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:40:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:40:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:41:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:41:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 11:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:41:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:41:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:42:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:43:06 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 11:43:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:43:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:43:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-22 11:43:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:44:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:44:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:45:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:45:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:45:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:46:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:47:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:47:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:47:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 11:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:47:58 --> Could not find the language line "Home"
ERROR - 2023-07-22 11:47:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:48:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:49:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:49:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:49:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:50:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:50:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:50:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:50:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:50:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:51:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:51:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:51:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:51:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 11:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:52:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:55:04 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 11:55:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:55:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 11:56:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 11:56:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:57:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 11:57:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 11:57:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:05:29 --> Could not find the language line "assets"
ERROR - 2023-07-22 12:05:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:05:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:06:41 --> Could not find the language line "Other"
ERROR - 2023-07-22 12:07:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:08:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:08:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:09:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:09:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:10:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:11:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:11:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:12:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:12:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:13:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:13:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:13:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:13:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 12:13:56 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:14:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:14:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 12:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:18:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 12:18:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 12:18:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:19:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:20:06 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:20:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:20:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:23:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:23:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:23:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:25:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:26:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:26:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:28:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:29:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:30:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:31:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:32:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:33:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:33:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:34:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:37:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:38:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:38:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:39:00 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-07-22 12:39:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 12:39:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 12:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:40:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:40:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:41:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:41:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:41:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-22 12:41:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-22 12:41:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:42:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 12:42:38 --> Could not find the language line "Home"
ERROR - 2023-07-22 12:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:44:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 12:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:45:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:45:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:46:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:46:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:46:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:46:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:47:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:48:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:48:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:48:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:48:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:48:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:48:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:50:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:50:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:50:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:50:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:50:44 --> Could not find the language line "Other"
ERROR - 2023-07-22 12:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:54:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:54:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:56:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:56:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:56:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:56:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:57:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-22 12:57:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-22 12:57:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-22 12:57:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-22 12:57:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:57:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:58:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:58:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 12:58:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:58:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-22 12:59:46 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:02:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 13:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:02:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 13:03:01 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:03:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 13:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:11:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-22 13:11:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-22 13:11:47 --> Could not find the language line "assets"
ERROR - 2023-07-22 13:12:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-22 13:17:30 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 13:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:33:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 13:46:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 13:51:44 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:51:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 13:52:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:52:33 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:52:37 --> Could not find the language line "Perfume"
ERROR - 2023-07-22 13:52:42 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:52:46 --> Could not find the language line "Socks"
ERROR - 2023-07-22 13:52:55 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:53:01 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 13:53:08 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:53:35 --> Could not find the language line "Home"
ERROR - 2023-07-22 13:53:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-22 14:00:20 --> Could not find the language line "Home"
ERROR - 2023-07-22 14:00:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 14:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 14:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:38:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 14:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:54:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 14:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-22 14:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 14:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 15:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 15:23:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:33:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 15:40:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:42:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:42:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:44:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:44:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:46:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:46:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 15:47:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 15:47:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-22 15:47:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-22 15:47:36 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:47:43 --> Could not find the language line "Socks"
ERROR - 2023-07-22 15:48:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 15:50:04 --> Could not find the language line "Home"
ERROR - 2023-07-22 15:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 16:00:09 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:02:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 16:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 16:21:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 16:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:12 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-22 16:49:12 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-07-22 16:49:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:13 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-07-22 16:49:13 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-07-22 16:49:13 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-07-22 16:49:14 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-07-22 16:49:14 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-07-22 16:49:14 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-07-22 16:49:14 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-07-22 16:49:14 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-07-22 16:49:15 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-07-22 16:49:15 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-07-22 16:49:15 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-07-22 16:49:15 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-07-22 16:49:15 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-07-22 16:49:16 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-07-22 16:49:16 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-07-22 16:49:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:49:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 16:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 17:10:16 --> Could not find the language line "Home"
ERROR - 2023-07-22 17:12:08 --> Could not find the language line "Home"
ERROR - 2023-07-22 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 17:37:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-22 17:43:06 --> Could not find the language line "Home"
ERROR - 2023-07-22 17:59:28 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:07:08 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:09:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:11:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:13:25 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:17:50 --> Could not find the language line "Home"
ERROR - 2023-07-22 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-22 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-22 19:03:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 19:04:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 19:10:03 --> Could not find the language line "Home"
ERROR - 2023-07-22 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 19:34:26 --> Could not find the language line "Home"
ERROR - 2023-07-22 19:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 19:44:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-22 20:07:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:28:21 --> 404 Page Not Found: All/index
ERROR - 2023-07-22 21:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:33:04 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:29 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:34 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:37 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:38 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:49 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 21:38:54 --> Could not find the language line "Home"
ERROR - 2023-07-22 21:39:07 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:39:07 --> Could not find the language line "Perfume"
ERROR - 2023-07-22 21:39:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 21:39:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 21:39:09 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:39:09 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:39:09 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:39:09 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-07-22 21:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-22 21:39:10 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-22 21:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:16 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 21:39:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 21:39:27 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:39:27 --> Could not find the language line "Other"
ERROR - 2023-07-22 21:40:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 21:40:02 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-07-22 21:40:03 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-07-22 21:40:35 --> Could not find the language line "Bracelets"
ERROR - 2023-07-22 21:45:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-22 22:00:31 --> Could not find the language line "Home"
ERROR - 2023-07-22 22:01:34 --> Could not find the language line "Home"
ERROR - 2023-07-22 22:02:18 --> Could not find the language line "Home"
ERROR - 2023-07-22 22:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 22:13:13 --> Could not find the language line "Home"
ERROR - 2023-07-22 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-22 23:00:21 --> Could not find the language line "Home"
ERROR - 2023-07-22 23:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-22 23:03:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-22 23:30:22 --> Could not find the language line "Home"
ERROR - 2023-07-22 23:42:07 --> Could not find the language line "Home"
ERROR - 2023-07-22 23:42:55 --> Could not find the language line "Home"
