<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-12 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 00:10:49 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 00:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 00:46:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 01:28:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 01:37:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 01:38:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-12 01:51:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 02:36:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 02:55:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-12 02:57:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 03:12:29 --> Could not find the language line "Home"
ERROR - 2023-05-12 03:25:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-12 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 03:48:51 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 03:51:31 --> Could not find the language line "Home"
ERROR - 2023-05-12 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 04:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 04:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 04:10:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 04:27:53 --> Could not find the language line "Home"
ERROR - 2023-05-12 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 04:44:09 --> Could not find the language line "Home"
ERROR - 2023-05-12 04:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 04:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:14:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 05:19:35 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:20:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:22:03 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:24:19 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:24:25 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 05:24:46 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 05:24:58 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 05:25:01 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:25:05 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:25:07 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:25:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:25:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:25:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:25:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 05:26:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:26:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:27:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:27:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:27:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 05:27:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 05:27:27 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:27:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:28:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:28:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:28:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:29:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 05:29:33 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:29:37 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 05:29:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:29:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:29:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 05:29:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 05:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:30:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 05:30:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 05:30:32 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:30:40 --> Could not find the language line "Socks"
ERROR - 2023-05-12 05:30:58 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:31:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 05:31:17 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:31:42 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:32:18 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:48:20 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:48:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-12 05:48:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-12 05:48:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-12 05:48:25 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-12 05:49:27 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:50:49 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:51:21 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:53:42 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:53:43 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:53:46 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-12 05:53:46 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-12 05:53:46 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-12 05:53:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-12 05:55:24 --> Could not find the language line "Home"
ERROR - 2023-05-12 05:55:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 06:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:00:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:01:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 06:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:02:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 06:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:02:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:02:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 06:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:03:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 06:03:43 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:04:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:05:17 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:07:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:10:41 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:11:17 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:14:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-12 06:14:58 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-12 06:14:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-12 06:14:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-12 06:15:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:16:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:18:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:22:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:38:42 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:39:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:39:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:40:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:40:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:40:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-12 06:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:52:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:54:37 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 06:55:56 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 06:59:16 --> Could not find the language line "Home"
ERROR - 2023-05-12 06:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:01:02 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:03:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:05:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:09:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-12 07:09:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-12 07:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-12 07:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-12 07:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:25:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 07:26:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 07:27:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:39:19 --> Could not find the language line "Home"
ERROR - 2023-05-12 07:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 07:56:16 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:06:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-12 08:06:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-12 08:06:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-12 08:06:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-12 08:15:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:15:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:16:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:16:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:17:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:17:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:17:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:18:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:18:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:18:48 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:19:06 --> Could not find the language line "Socks"
ERROR - 2023-05-12 08:19:25 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:19:54 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:20:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:21:02 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:21:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 08:21:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:21:15 --> Could not find the language line "Socks"
ERROR - 2023-05-12 08:21:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:21:59 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 08:22:17 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:22:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:22:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 08:22:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:22:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 08:22:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 08:22:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:46:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:50:26 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:50:43 --> Could not find the language line "Socks"
ERROR - 2023-05-12 08:50:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:51:43 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:53:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 08:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 08:54:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:54:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 08:58:29 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:58:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 08:59:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:00:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 09:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 09:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:08:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 09:09:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:10:01 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:10:26 --> Could not find the language line "Other"
ERROR - 2023-05-12 09:10:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 09:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:11:51 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-12 09:14:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:18:13 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 09:18:43 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:18:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 09:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:28:22 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:28:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 09:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:28:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 09:29:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:29:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 09:29:35 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:34:52 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:35:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:38:22 --> Could not find the language line "Socks"
ERROR - 2023-05-12 09:38:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:38:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:39:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:39:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:39:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:39:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 09:39:29 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:40:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:41:34 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:45:33 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:45:44 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:46:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:47:27 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:48:32 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:50:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 09:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:54:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 09:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:57:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 09:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 09:59:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 10:00:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:01:27 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 10:01:32 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:06:18 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:21:06 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:21:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:22:48 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:23:09 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:23:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-12 10:23:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-12 10:23:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-12 10:23:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-12 10:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:27:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:28:02 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:31:01 --> 404 Page Not Found: Admin/elfinder
ERROR - 2023-05-12 10:31:51 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:32:04 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:38:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-12 10:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:41:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:49:26 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:52:22 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:52:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:53:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:53:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:53:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:54:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:54:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:57:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:57:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 10:57:22 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:57:31 --> Could not find the language line "Socks"
ERROR - 2023-05-12 10:58:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:58:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:58:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:58:16 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:58:31 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:58:37 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 10:58:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 10:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 10:59:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:01:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 11:01:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:01:16 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:01:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 11:01:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-12 11:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:01:41 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:01:45 --> Could not find the language line "Hair%20"
ERROR - 2023-05-12 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:02:06 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 11:02:10 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 11:02:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:02:26 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:02:30 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:02:42 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:02:44 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:02:48 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:03:00 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:08:12 --> Could not find the language line "Hair%20"
ERROR - 2023-05-12 11:09:06 --> Could not find the language line "Hair%20"
ERROR - 2023-05-12 11:09:43 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:10 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:20 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:29 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:29 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:31 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:10:50 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:15:21 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:15:21 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:17:31 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:26:29 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:29:08 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:31:24 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:41:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 11:45:03 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:45:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 11:47:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 11:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:52:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:54:30 --> Could not find the language line "Home"
ERROR - 2023-05-12 11:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:17 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:58:18 --> Could not find the language line "Socks"
ERROR - 2023-05-12 11:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 11:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:02:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:03:28 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:06:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:10:18 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:10:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 12:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:10:42 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:10:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 12:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:11:52 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:13:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 12:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:18:20 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 12:19:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 12:20:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:36:42 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:39:23 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:40:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 12:40:52 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:44:33 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:44:43 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:47:12 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:47:14 --> Could not find the language line "Socks"
ERROR - 2023-05-12 12:47:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:48:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:48:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:49:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:49:31 --> Could not find the language line "Home"
ERROR - 2023-05-12 12:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 12:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:05:05 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:12:22 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:12:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:12:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:12:51 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:14:04 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:22:27 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-12 13:22:27 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:24:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 13:25:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 13:25:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 13:25:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 13:26:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 13:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:27:49 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:27:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 13:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:28:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:29:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:31:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 13:31:40 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:31:59 --> Could not find the language line "Socks"
ERROR - 2023-05-12 13:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:35:57 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:35:58 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:35:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:36:00 --> Could not find the language line "Home"
ERROR - 2023-05-12 13:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 13:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:11:24 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 14:12:44 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 14:14:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:26:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:26:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 14:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:37:23 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:49:57 --> Could not find the language line "Home"
ERROR - 2023-05-12 14:51:02 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:01:58 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:03:07 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 15:03:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:03:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 15:03:54 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:04:09 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 15:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 15:23:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:31:35 --> Could not find the language line "Home"
ERROR - 2023-05-12 15:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 15:41:12 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-05-12 15:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 15:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 16:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 16:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 16:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 16:35:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-12 16:37:37 --> Could not find the language line "Home"
ERROR - 2023-05-12 16:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 16:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-12 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 17:00:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 17:00:30 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-05-12 17:00:31 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-12 17:00:32 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:00:37 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:04:01 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:04:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:04:31 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:04:56 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:05:28 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 17:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 17:08:24 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 17:14:23 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:32:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 17:36:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 17:36:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 17:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 17:53:38 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-12 17:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 17:56:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:03:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:03:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:03:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:03:40 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:05:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:06:09 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 18:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:06:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:06:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:06:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 18:06:50 --> Could not find the language line "Socks"
ERROR - 2023-05-12 18:07:16 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 18:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:07:22 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 18:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:07:27 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 18:07:54 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:15:03 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:15:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:16:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:17:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:18:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:18:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:26:41 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:27:41 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:34:54 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:35:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:36:08 --> Could not find the language line "accounting"
ERROR - 2023-05-12 18:36:09 --> Could not find the language line "accounting"
ERROR - 2023-05-12 18:36:09 --> Could not find the language line "accounting"
ERROR - 2023-05-12 18:36:09 --> Could not find the language line "accounting"
ERROR - 2023-05-12 18:36:09 --> Could not find the language line "accounting"
ERROR - 2023-05-12 18:36:57 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:53:22 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:55:46 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 18:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 18:56:33 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:56:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 18:56:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 18:57:10 --> Could not find the language line "Home"
ERROR - 2023-05-12 18:57:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 18:58:00 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:05:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:16:07 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:31:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 19:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 19:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 19:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:06:24 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:10:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:10:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:11:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:11:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:12:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:13:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:16:44 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:17:56 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:27:55 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:27:59 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:28:58 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:30:01 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:30:41 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:35:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-12 20:35:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-12 20:35:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-12 20:35:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-12 20:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:38:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:39:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 20:40:40 --> Could not find the language line "Home"
ERROR - 2023-05-12 20:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 20:43:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 20:54:54 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:13:30 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:26:06 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:26:45 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:27:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 21:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:29:43 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:33:08 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:33:15 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 21:33:23 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:34:36 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:34:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 21:34:57 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:35:23 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 21:41:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 21:58:05 --> Could not find the language line "Home"
ERROR - 2023-05-12 21:59:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 21:59:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:00:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:00:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:01:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:01:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-12 22:01:24 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:04:40 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:04:56 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 22:05:25 --> Could not find the language line "Bracelets"
ERROR - 2023-05-12 22:05:58 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:07:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:20:38 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:29:05 --> Could not find the language line "Perfume"
ERROR - 2023-05-12 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:37:31 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-12 22:37:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-05-12 22:38:32 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:40:18 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:41:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:52:47 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:53:57 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:54:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:57:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:57:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:57:40 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:57:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:57:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 22:58:20 --> Could not find the language line "Home"
ERROR - 2023-05-12 22:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:58:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:58:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:59:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 22:59:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:00:21 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:01:28 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:01:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-12 23:02:16 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:02:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 23:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 23:04:15 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:04:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 23:04:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 23:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-12 23:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-12 23:07:16 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:22:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-12 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-12 23:35:46 --> Could not find the language line "Home"
