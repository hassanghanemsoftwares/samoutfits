<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-20 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:49:40 --> 404 Page Not Found: Congphp/index
ERROR - 2023-09-20 00:49:40 --> 404 Page Not Found: Stphp/index
ERROR - 2023-09-20 00:49:40 --> 404 Page Not Found: Css/index.php
ERROR - 2023-09-20 00:49:41 --> 404 Page Not Found: Radiophp/index
ERROR - 2023-09-20 00:50:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:55:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 00:56:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 00:57:27 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:57:40 --> Could not find the language line "Socks"
ERROR - 2023-09-20 00:57:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 00:57:52 --> Could not find the language line "Home"
ERROR - 2023-09-20 00:57:58 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 00:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 01:00:21 --> Could not find the language line "Home"
ERROR - 2023-09-20 01:10:42 --> Could not find the language line "Home"
ERROR - 2023-09-20 01:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 01:28:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 01:44:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 01:46:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:01:06 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:05:44 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:11:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 02:11:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:26:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 02:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:40:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 02:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 02:56:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 02:56:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:03:56 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 03:08:05 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 03:27:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:27:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:28:07 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 03:53:42 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 03:57:51 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 04:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:02:00 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 04:07:44 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:30:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:32:21 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:32:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:33:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 04:33:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-20 04:39:08 --> Could not find the language line "Home"
ERROR - 2023-09-20 04:54:51 --> 404 Page Not Found: Products/products
ERROR - 2023-09-20 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:00:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:03:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 05:14:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 05:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:39:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:40:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 05:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 05:55:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 05:55:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:56:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 05:57:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 05:57:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 05:57:32 --> Could not find the language line "products"
ERROR - 2023-09-20 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:03:10 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:03:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:04:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:04:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:05:05 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:05:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:05:57 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:06:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 06:06:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 06:06:46 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:07:39 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:08:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:09:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-20 06:18:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 06:19:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:20:55 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:28:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 06:29:39 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:40:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 06:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 06:55:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:02:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:02:45 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:04:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 07:04:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 07:09:53 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:11:39 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:13:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 07:13:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 07:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:22:02 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-20 07:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-20 07:31:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 07:46:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 07:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 07:52:31 --> 404 Page Not Found: Storage/settings
ERROR - 2023-09-20 07:59:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 08:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 08:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:07:21 --> Could not find the language line "Home"
ERROR - 2023-09-20 08:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 08:32:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 08:32:57 --> Could not find the language line "Home"
ERROR - 2023-09-20 08:46:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 08:57:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 08:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 08:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:01:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:02:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:02:42 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:08:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 09:09:17 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:10:03 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:16:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:21:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 09:21:19 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-20 09:21:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 09:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 09:22:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-20 09:22:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-20 09:24:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-20 09:24:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-20 09:24:17 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-20 09:24:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-20 09:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:34:20 --> Could not find the language line "Socks"
ERROR - 2023-09-20 09:34:30 --> Could not find the language line "Home"
ERROR - 2023-09-20 09:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 09:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:01:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:01:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:01:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:01:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:01:39 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:02:45 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:03:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:06:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 10:16:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 10:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:22:30 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:26:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 10:29:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 10:30:03 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:30:05 --> Could not find the language line "Crocs"
ERROR - 2023-09-20 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:35:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:36:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 10:36:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 10:37:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 10:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 10:38:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:39:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 10:40:20 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:43:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 10:43:37 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:46:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 10:47:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 10:47:35 --> 404 Page Not Found: Env/index
ERROR - 2023-09-20 10:49:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 10:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 10:51:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 10:52:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-20 10:59:56 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:00:42 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:03:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:04:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:04:41 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:10:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 11:13:56 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:15:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:15:38 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:16:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:17:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:17:51 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:18:22 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:19:30 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:19:43 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:20:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:20:31 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:21:05 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 11:21:30 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:21:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 11:22:05 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:22:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:22:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:22:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:22:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:22:47 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:25:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:26:21 --> Could not find the language line "Socks"
ERROR - 2023-09-20 11:26:47 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:29:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:31:16 --> Could not find the language line "Socks"
ERROR - 2023-09-20 11:31:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-20 11:32:19 --> Could not find the language line "Other"
ERROR - 2023-09-20 11:32:34 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:35:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:37:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 11:38:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 11:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 11:41:18 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:45:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 11:45:40 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:50:03 --> Could not find the language line "Home"
ERROR - 2023-09-20 11:50:03 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:01:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 12:01:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 12:03:45 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:06:23 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:06:26 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:06:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:09:26 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:10:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 12:10:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 12:22:27 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:23:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:24:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:26:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:41:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:49:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 12:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 12:55:52 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:56:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 12:56:54 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 13:13:47 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:14:22 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-20 13:19:35 --> Could not find the language line "Socks"
ERROR - 2023-09-20 13:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 13:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 13:20:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 13:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 13:25:10 --> Could not find the language line "Socks"
ERROR - 2023-09-20 13:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 13:26:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:26:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 13:26:08 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:26:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-20 13:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-20 13:26:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:27:26 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:32:52 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:36:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:40:27 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:41:35 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:47:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:52:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:54:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:55:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:55:38 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:56:10 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:59:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 13:59:27 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:01:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:01:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:02:39 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-20 14:12:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 14:12:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 14:13:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:19:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:20:27 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:20:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 14:20:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-20 14:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:21:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:21:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:22:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:23:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:26:50 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:30:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 14:38:54 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:40:07 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:40:09 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:43:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:44:30 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:45:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:45:40 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:46:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:46:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-20 14:46:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-20 14:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:46:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:47:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:47:38 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:47:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:49:46 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:50:18 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:50:36 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:51:17 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:51:46 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:51:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 14:52:23 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:52:25 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:52:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:52:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:52:53 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:53:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 14:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:54:31 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:54:57 --> Could not find the language line "Home"
ERROR - 2023-09-20 14:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 14:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:01:09 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:01:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:02:21 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:05:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:07:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:11:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:11:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:13:07 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:14:22 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 15:14:37 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:14:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-20 15:14:42 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:14:52 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:15:03 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:15:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:16:07 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:16:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 15:16:09 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:16:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:17:06 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:17:54 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:17:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:18:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 15:18:22 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:18:27 --> Could not find the language line "Perfume"
ERROR - 2023-09-20 15:18:34 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:35:07 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:38:08 --> Could not find the language line "Home"
ERROR - 2023-09-20 15:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 15:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:00:13 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-20 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:03:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 16:03:35 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:04:54 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:05:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:06:26 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:06:54 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 16:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:07:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-20 16:07:36 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:07:39 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 16:07:56 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:08:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:08:44 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:09:56 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 16:19:54 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-20 16:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:20:30 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:24:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:24:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:25:52 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:26:34 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 16:44:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 16:51:20 --> Could not find the language line "Home"
ERROR - 2023-09-20 16:57:26 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:12:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:38:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:39:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:40:18 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:41:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:41:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:41:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:41:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 17:48:53 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:49:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:50:23 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:50:45 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:51:08 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:51:43 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:57:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 17:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 17:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 18:00:00 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 18:00:59 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:01:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:01:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:02:16 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:02:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:02:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 18:02:37 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:02:50 --> Could not find the language line "Perfume"
ERROR - 2023-09-20 18:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 18:03:06 --> Could not find the language line "Perfume"
ERROR - 2023-09-20 18:03:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:04:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:04:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 18:05:17 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 18:25:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:29:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:34:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:43:53 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:48:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 18:53:05 --> Could not find the language line "Home"
ERROR - 2023-09-20 18:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 19:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:17:05 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:22:16 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:22:38 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:22:51 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 19:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 19:24:30 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 19:24:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:28:36 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:29:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:29:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 19:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 19:29:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:42:02 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:42:43 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 19:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 19:44:58 --> Could not find the language line "Home"
ERROR - 2023-09-20 19:52:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 19:54:44 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 20:05:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:06:32 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:15:07 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 20:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 20:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 20:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 20:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:32:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 20:35:02 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 20:35:52 --> Could not find the language line "Bracelets"
ERROR - 2023-09-20 20:45:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-20 20:47:07 --> Could not find the language line "products"
ERROR - 2023-09-20 21:00:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:07:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:07:59 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:11:51 --> Could not find the language line "Other"
ERROR - 2023-09-20 21:14:24 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:31:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:31:48 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:31:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:31:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:31:49 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:51:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 21:51:29 --> Could not find the language line "Home"
ERROR - 2023-09-20 21:54:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 21:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-20 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:30:22 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:53:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 22:57:28 --> Could not find the language line "Home"
ERROR - 2023-09-20 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-20 23:04:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-20 23:04:19 --> Could not find the language line "Clothing"
ERROR - 2023-09-20 23:09:04 --> Could not find the language line "Home"
ERROR - 2023-09-20 23:11:33 --> Could not find the language line "Home"
