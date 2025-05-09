<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-12 00:29:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 01:27:15 --> Could not find the language line "Home"
ERROR - 2023-10-12 01:28:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 01:41:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 01:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 01:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 02:00:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:05:11 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:21:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 02:23:10 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:23:19 --> Could not find the language line "Perfume"
ERROR - 2023-10-12 02:23:30 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:23:32 --> Could not find the language line "Socks"
ERROR - 2023-10-12 02:23:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:23:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 02:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 02:23:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:36:20 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:36:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 02:56:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 03:33:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 03:48:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:48:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:48:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:48:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:48:54 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:57:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 03:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 03:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 03:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 03:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 03:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 03:58:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 03:58:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 03:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 04:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 04:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 04:11:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 04:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:11:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:12:08 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:19:51 --> 404 Page Not Found: Env/index
ERROR - 2023-10-12 04:24:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:27:26 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:28:26 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:29:33 --> Could not find the language line "Socks"
ERROR - 2023-10-12 04:29:42 --> Could not find the language line "Socks"
ERROR - 2023-10-12 04:29:52 --> Could not find the language line "Socks"
ERROR - 2023-10-12 04:29:54 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:30:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 04:31:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 04:31:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 04:31:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 04:31:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 04:32:02 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:35:17 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:42:17 --> Could not find the language line "Home"
ERROR - 2023-10-12 04:46:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 05:00:36 --> Could not find the language line "Home"
ERROR - 2023-10-12 05:10:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 05:23:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 05:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-12 05:31:40 --> Could not find the language line "Home"
ERROR - 2023-10-12 05:31:56 --> Could not find the language line "Perfume"
ERROR - 2023-10-12 05:40:15 --> Could not find the language line "Other"
ERROR - 2023-10-12 05:44:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 05:46:06 --> Could not find the language line "products"
ERROR - 2023-10-12 05:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 05:50:37 --> Could not find the language line "products"
ERROR - 2023-10-12 05:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 05:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 05:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 05:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-12 05:57:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 06:04:14 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:11:04 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:29:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:41:43 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:43:12 --> Could not find the language line "Perfume"
ERROR - 2023-10-12 06:43:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:44:46 --> Could not find the language line "Socks"
ERROR - 2023-10-12 06:44:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:44:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 06:45:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:45:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:46:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:46:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:47:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:48:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:48:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:49:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:49:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:49:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 06:50:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 06:50:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 06:50:55 --> Could not find the language line "Home"
ERROR - 2023-10-12 06:53:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 07:13:59 --> Could not find the language line "Home"
ERROR - 2023-10-12 07:15:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 07:34:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 07:34:23 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-12 07:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:43:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-12 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 07:53:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:10:59 --> Could not find the language line "Home"
ERROR - 2023-10-12 08:16:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 08:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:22:31 --> Could not find the language line "Home"
ERROR - 2023-10-12 08:29:41 --> Could not find the language line "Home"
ERROR - 2023-10-12 08:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:32:58 --> Could not find the language line "Home"
ERROR - 2023-10-12 08:39:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 08:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 08:39:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 08:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 08:57:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 08:59:09 --> Could not find the language line "Home"
ERROR - 2023-10-12 08:59:09 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:00:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:02:13 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:02:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:02:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:02:58 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:11 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:03:17 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:31 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:03:44 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:47 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:52 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:53 --> Could not find the language line "Socks"
ERROR - 2023-10-12 09:03:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:04:38 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:06:01 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:06:39 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:08:13 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:09:57 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:14:34 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:14:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 09:14:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 09:14:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:14:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:15:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:15:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:16:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:17:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:17:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:36:40 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:41:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:45:19 --> 404 Page Not Found: Assets/upload_image.php
ERROR - 2023-10-12 09:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:50:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:51:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 09:55:35 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-12 09:55:35 --> Could not find the language line "Home"
ERROR - 2023-10-12 09:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 09:58:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 10:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:03:15 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:09:57 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:10:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:11:35 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:13:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 10:19:29 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:25:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 10:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 10:25:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 10:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:26:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:32:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 10:32:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 10:32:33 --> Could not find the language line "Hair%20"
ERROR - 2023-10-12 10:33:41 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:38:08 --> Could not find the language line "Home"
ERROR - 2023-10-12 10:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 10:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 11:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:06:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 11:06:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 11:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:09:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 11:09:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:17:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:19:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:19:41 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:19:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:20:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:20:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:26:00 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:34:58 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:37:14 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:37:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 11:37:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:41:11 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:42:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:42:33 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:45:13 --> Could not find the language line "Home"
ERROR - 2023-10-12 11:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 11:54:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 11:58:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 12:12:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 12:26:38 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:27:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:32:03 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:33:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:43:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 12:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 12:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 12:44:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:44:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:44:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:44:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 12:48:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:48:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:51:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:51:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:51:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 12:51:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:52:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:52:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-12 12:52:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:52:52 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:53:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-12 12:53:27 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 12:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 12:58:44 --> Could not find the language line "Home"
ERROR - 2023-10-12 12:59:21 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:06:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:08:02 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:08:02 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:09:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 13:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 13:09:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 13:10:26 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:10:26 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:10:26 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 13:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 13:11:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 13:11:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 13:11:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 13:11:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 13:11:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:20:30 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-12 13:22:01 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:23:58 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:24:00 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:32:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:33:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 13:33:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 13:34:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 13:35:27 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-10-12 13:39:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 13:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 13:39:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 13:42:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:42:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 13:43:03 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 13:43:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 13:49:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:52:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 13:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 13:55:54 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-12 13:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:03:20 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-12 14:03:21 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-12 14:03:22 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-12 14:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:09:54 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:10:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-12 14:10:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-12 14:15:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-12 14:16:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:22:30 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:24:18 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:25:31 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:26:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 14:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:30:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:30:25 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:30:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:31:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:33:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:33:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:33:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-12 14:33:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-12 14:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 14:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:37:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:39:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:39:12 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:39:19 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:40:13 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:40:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 14:41:01 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:41:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 14:41:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:46:12 --> Could not find the language line "assets"
ERROR - 2023-10-12 14:47:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:49:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:52:55 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 14:57:27 --> Could not find the language line "Home"
ERROR - 2023-10-12 14:59:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:01:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:02:15 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:02:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:02:19 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:02:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:03:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:03:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 15:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:04:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:04:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:05:18 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:24:53 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:25:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:27:07 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:30:06 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-12 15:31:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:33:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:47:15 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 15:50:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 15:51:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 15:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:00:44 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:06:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:13:58 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:14:09 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:15:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:15:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:15:33 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:15:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:23:13 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:23:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:25:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 16:26:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 16:29:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:31:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-12 16:32:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:35:41 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:36:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 16:36:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-12 16:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 16:41:54 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:42:27 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:44:19 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:44:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:47:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 16:47:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:47:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:49:50 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:52:07 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:52:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 16:52:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 16:52:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 16:52:10 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-12 16:52:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-12 16:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 16:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 16:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:00:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:00:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:02:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:12:00 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:13:00 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:15:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:15:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 17:15:36 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:15:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-12 17:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:15:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-12 17:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:15:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-12 17:16:08 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:16:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:19:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:21:04 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:22:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:24:57 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:24:57 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:25:27 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:25:56 --> Could not find the language line "Socks"
ERROR - 2023-10-12 17:27:01 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:29:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:30:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:31:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:31:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:32:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:32:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:33:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:33:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:33:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:34:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:34:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-12 17:35:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:35:18 --> Could not find the language line "Socks"
ERROR - 2023-10-12 17:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:40:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:41:35 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:43:07 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:44:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:45:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:45:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:45:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 17:46:44 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:47:20 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:49:04 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:51:47 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:56:07 --> Could not find the language line "Home"
ERROR - 2023-10-12 17:56:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:58:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:58:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 17:59:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 17:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:00:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:00:55 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:01:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:01:44 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:01:46 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:04:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:11:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:22:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 18:22:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 18:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:28:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:28:11 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:28:16 --> 404 Page Not Found: Admin/index
ERROR - 2023-10-12 18:33:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:33:57 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:47:01 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:56:00 --> Could not find the language line "Home"
ERROR - 2023-10-12 18:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:57:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:58:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:58:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 18:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 18:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:00:55 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:03:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:05:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:05:47 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:06:23 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:06:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:07:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:07:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:07:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:11:28 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:11:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:12:02 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:13:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:14:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:17:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:18:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:19:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 19:19:05 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:20:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:29:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:31:49 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:33:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:33:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:33:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:34:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:34:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:34:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:35:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-12 19:35:42 --> Could not find the language line "Perfume"
ERROR - 2023-10-12 19:35:49 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:37:15 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:45:21 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:45:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:46:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 19:46:42 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:46:52 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 19:47:21 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:53:17 --> Could not find the language line "Home"
ERROR - 2023-10-12 19:58:43 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:01:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:01:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:01:53 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:03:36 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:03:36 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:04:03 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:04:56 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:06:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:07:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 20:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:11:13 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:11:18 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:13:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 20:15:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 20:22:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 20:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:24:27 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 20:26:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 20:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 20:59:47 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:03:08 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:08:10 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:08:14 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:08:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 21:09:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:10:29 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 21:12:10 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:21:16 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:23:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:25:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-12 21:28:29 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:28:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 21:48:08 --> Could not find the language line "Socks"
ERROR - 2023-10-12 21:48:48 --> Could not find the language line "Socks"
ERROR - 2023-10-12 21:51:31 --> Could not find the language line "Socks"
ERROR - 2023-10-12 21:51:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:53:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 21:53:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 21:53:45 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 21:58:47 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:00:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:00:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:00:29 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:00:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 22:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 22:00:43 --> Could not find the language line "Bracelets"
ERROR - 2023-10-12 22:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:01:29 --> Could not find the language line "Perfume"
ERROR - 2023-10-12 22:01:37 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:01:40 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:01:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 22:02:10 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:02:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 22:02:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 22:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 22:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-12 22:15:42 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-12 22:16:09 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:20:32 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:28:30 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-12 22:47:52 --> Could not find the language line "Home"
ERROR - 2023-10-12 22:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 22:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 22:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:05:08 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:19:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:20:51 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:24:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-12 23:24:12 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:28:24 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:31:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:31:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:31:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:31:06 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:31:31 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:36:20 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:43:48 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:43:50 --> Could not find the language line "Home"
ERROR - 2023-10-12 23:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-12 23:45:30 --> 404 Page Not Found: Assets/css
