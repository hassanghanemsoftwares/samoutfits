<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-17 00:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 00:21:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 00:49:31 --> Could not find the language line "Crocs"
ERROR - 2023-05-17 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 01:13:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 01:22:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 01:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:13:53 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:18:17 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:19:05 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:19:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:21:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:21:05 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:25:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:25:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 02:26:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 02:27:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 02:27:17 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:27:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:27:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:27:30 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:27:58 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 02:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:28:44 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 02:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:29:21 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 02:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:29:53 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 02:29:55 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:29:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:30:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:31:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:31:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:31:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 02:32:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:32:39 --> Could not find the language line "Other"
ERROR - 2023-05-17 02:32:58 --> Could not find the language line "Other"
ERROR - 2023-05-17 02:35:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:35:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:36:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 02:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:40:06 --> Could not find the language line "Socks"
ERROR - 2023-05-17 02:40:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:40:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:40:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:40:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:43:39 --> Could not find the language line "Home"
ERROR - 2023-05-17 02:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:45:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:45:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:46:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 02:47:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:47:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:48:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:48:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:48:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 02:49:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:49:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:49:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-17 02:49:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:49:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 02:57:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:35:31 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:43:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 03:49:40 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:50:04 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:50:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 03:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 03:51:01 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:00:18 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:08:42 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:08:42 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:18:42 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:33:20 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:35:54 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:43:37 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:58:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:59:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 04:59:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 04:59:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:00:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:00:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:00:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:03:00 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:07:02 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:11:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:16:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:16:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:17:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 05:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:35:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 05:40:06 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:40:07 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:46:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 05:46:20 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 05:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 05:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:13:28 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:14:28 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:16:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:16:26 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:25:52 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:28:57 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:33:23 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:34:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 06:34:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 06:35:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 06:35:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 06:39:26 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:39:28 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:40:18 --> Could not find the language line "Home"
ERROR - 2023-05-17 06:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:53:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 06:55:39 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 06:55:51 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 06:56:30 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 06:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 06:56:49 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 06:58:16 --> Could not find the language line "Other"
ERROR - 2023-05-17 06:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 06:59:16 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 06:59:48 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:00:10 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 07:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:00:34 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:00:37 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:01:22 --> Could not find the language line "Home"
ERROR - 2023-05-17 07:02:02 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:02:09 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 07:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:10:43 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=71 570 099&amp;text=9015%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-05-17 07:16:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:16:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:20:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:20:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:20:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:21:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 07:34:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:34:23 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-17 07:34:23 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-17 07:34:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-17 07:34:24 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-17 07:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:52:00 --> Could not find the language line "Home"
ERROR - 2023-05-17 07:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:53:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:54:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 07:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 07:55:04 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:04:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 08:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:06:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 08:08:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-17 08:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-17 08:08:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-17 08:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-17 08:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:11:38 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:11:41 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:22:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 08:22:45 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:22:49 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:30:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 08:44:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 08:52:23 --> Could not find the language line "Home"
ERROR - 2023-05-17 08:58:59 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:14:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 09:17:36 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:19:33 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:23:54 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:31:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:32:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 09:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:38:56 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 09:39:18 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 09:39:49 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 09:44:00 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:44:24 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:45:23 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:47:42 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:53:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 09:53:57 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:54:25 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:58:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-17 09:58:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-17 09:58:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-17 09:58:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-17 09:58:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 09:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:59:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 09:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 09:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:00:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 10:01:08 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:01:38 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:02:22 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-17 10:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:07:35 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:14:05 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:14:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 10:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:14:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 10:14:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 10:15:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 10:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:16:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 10:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 10:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:21:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:21:22 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:27:24 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 10:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 10:44:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:44:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 10:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 10:58:34 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:02:02 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:02:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:06:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:15:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:17:37 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:22:28 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:22:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 11:23:01 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:23:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:24:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:24:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:24:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:25:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 11:25:57 --> Could not find the language line "Socks"
ERROR - 2023-05-17 11:26:26 --> Could not find the language line "Socks"
ERROR - 2023-05-17 11:26:32 --> Could not find the language line "Socks"
ERROR - 2023-05-17 11:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:26:52 --> Could not find the language line "Socks"
ERROR - 2023-05-17 11:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:27:27 --> Could not find the language line "Socks"
ERROR - 2023-05-17 11:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:28:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:28:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:29:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:29:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:30:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:31:04 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:31:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 11:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 11:31:53 --> Could not find the language line "Home"
ERROR - 2023-05-17 11:46:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 11:57:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 12:00:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 12:11:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 12:12:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 12:12:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 12:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:17:03 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:17:30 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:17:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:22:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 12:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:31:57 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:36:33 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:44:07 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:45:02 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 12:45:04 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 12:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:50:45 --> Could not find the language line "Home"
ERROR - 2023-05-17 12:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 12:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:08:49 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:10:23 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:10:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:19:19 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:22:52 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:22:53 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:26:47 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:27:43 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:29:13 --> 404 Page Not Found: Archivarixcmsphp/index
ERROR - 2023-05-17 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:31:35 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:31:58 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:32:08 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:32:18 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:32:41 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:36:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:39:39 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 13:42:22 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:42:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:42:33 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:42:55 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:43:50 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:44:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 13:44:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 13:45:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 13:45:28 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:45:59 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:47:03 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:47:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:48:17 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 13:48:22 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:48:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:49:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:49:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 13:56:55 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:57:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 13:57:24 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:58:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-17 13:58:24 --> Could not find the language line "Home"
ERROR - 2023-05-17 13:59:59 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:09:32 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:30:10 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:47:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:51:35 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:51:45 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 14:52:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 14:54:02 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:54:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 14:54:31 --> Could not find the language line "Home"
ERROR - 2023-05-17 14:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 14:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 14:58:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 14:59:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 15:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:00:32 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:01:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:02:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 15:02:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 15:02:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:02:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 15:02:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 15:03:00 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 15:03:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:03:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:03:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:03:39 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:05:23 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 15:13:16 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:13:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:13:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:14:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 15:26:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:26:28 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-17 15:26:28 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-05-17 15:26:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:26:30 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-05-17 15:26:30 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-05-17 15:26:30 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-05-17 15:26:31 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-05-17 15:26:31 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-05-17 15:26:31 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-05-17 15:26:31 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-05-17 15:26:31 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-05-17 15:26:32 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-05-17 15:26:32 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-05-17 15:26:32 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-05-17 15:26:33 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-05-17 15:26:33 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-05-17 15:26:33 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-05-17 15:26:33 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-05-17 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:32:37 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:50:25 --> Could not find the language line "Home"
ERROR - 2023-05-17 15:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:51:38 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 15:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 15:56:14 --> Could not find the language line "Perfume"
ERROR - 2023-05-17 15:59:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:00:25 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:01:21 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:14:16 --> Could not find the language line "clothing"
ERROR - 2023-05-17 16:16:51 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:18:54 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:20:08 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:20:13 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:20:27 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:20:41 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:20:47 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:20:51 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:20:57 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:21:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:21:10 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:21:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:21:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 16:21:51 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:23:02 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:23:06 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 16:23:21 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:23:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 16:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:23:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 16:23:41 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:23:44 --> Could not find the language line "Socks"
ERROR - 2023-05-17 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 16:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 16:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:04:45 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:09:34 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:13:52 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:28:44 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 17:33:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:33:50 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:50:38 --> Could not find the language line "Home"
ERROR - 2023-05-17 17:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 17:52:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:01:24 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:07:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:08:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:09:59 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:13:01 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:13:36 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:15:56 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:19:18 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:35:15 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:37:03 --> Could not find the language line "Home"
ERROR - 2023-05-17 18:42:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 18:51:19 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:02:45 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:03:57 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:15:46 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:23:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-17 19:23:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-17 19:23:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-17 19:23:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-17 19:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 19:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:42:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:52:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:52:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 19:52:27 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:52:57 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:53:40 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:53:59 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:54:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 19:54:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:55:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:55:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:55:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:56:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 19:58:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 19:58:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 20:09:43 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:12:36 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:12:37 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:28:34 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 20:57:17 --> Could not find the language line "Home"
ERROR - 2023-05-17 20:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:00:30 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:02:07 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:05:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 21:15:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:24:52 --> Could not find the language line "Socks"
ERROR - 2023-05-17 21:26:31 --> Could not find the language line "Socks"
ERROR - 2023-05-17 21:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:43:25 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:45:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 21:45:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:46:33 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:46:53 --> Could not find the language line "Other"
ERROR - 2023-05-17 21:47:29 --> Could not find the language line "Other"
ERROR - 2023-05-17 21:47:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:48:13 --> Could not find the language line "Other"
ERROR - 2023-05-17 21:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:48:18 --> Could not find the language line "Other"
ERROR - 2023-05-17 21:49:39 --> Could not find the language line "Other"
ERROR - 2023-05-17 21:49:46 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:49:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 21:50:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:50:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:51:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:51:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 21:51:44 --> Could not find the language line "Home"
ERROR - 2023-05-17 21:51:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 21:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:01:29 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:08:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 22:08:50 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:08:55 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:09:23 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:09:25 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:09:28 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:10:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 22:10:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 22:10:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 22:12:37 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:12:57 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:13:01 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:13:19 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:13:27 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:13:38 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 22:13:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 22:13:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 22:13:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 22:14:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:14:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:14:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:14:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:15:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 22:15:43 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:16:51 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:17:21 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:49:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 22:49:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 22:50:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 22:50:04 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-17 22:50:07 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-17 22:50:09 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-17 22:50:13 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-17 22:50:16 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-17 22:50:25 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-17 22:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:54:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 22:54:20 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:54:25 --> Could not find the language line "Other"
ERROR - 2023-05-17 22:55:16 --> Could not find the language line "Home"
ERROR - 2023-05-17 22:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:59:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 22:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 22:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:05:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-17 23:06:51 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:06:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 23:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:07:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 23:07:12 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:07:16 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:08:10 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:08:31 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:09:12 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:09:41 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:09:44 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:09:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:10:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:11:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:11:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:11:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:11:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:11:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:12:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:12:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:12:51 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:13:42 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:14:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-17 23:14:17 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:14:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 23:14:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-17 23:18:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 23:21:21 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:21:44 --> Could not find the language line "Socks"
ERROR - 2023-05-17 23:22:09 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:22:48 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:22:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-17 23:23:11 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-17 23:23:47 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:23:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-17 23:25:47 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:25:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-05-17 23:25:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 23:28:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-17 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-17 23:48:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-05-17 23:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-17 23:56:28 --> 404 Page Not Found: Robotstxt/index
