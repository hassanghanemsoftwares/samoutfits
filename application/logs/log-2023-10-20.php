<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-20 00:00:49 --> Could not find the language line "Home"
ERROR - 2023-10-20 00:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-20 00:23:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 00:24:24 --> Could not find the language line "Home"
ERROR - 2023-10-20 00:24:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 00:38:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 00:44:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 00:58:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 01:39:22 --> Could not find the language line "Home"
ERROR - 2023-10-20 02:12:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 02:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:15:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 02:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 02:17:20 --> Could not find the language line "Home"
ERROR - 2023-10-20 03:10:43 --> Could not find the language line "Home"
ERROR - 2023-10-20 03:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 03:17:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 03:43:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 03:51:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 04:16:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 04:16:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 04:16:59 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:18:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 04:20:33 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:24:01 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:29:23 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:42:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 04:42:44 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:51:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 04:55:28 --> 404 Page Not Found: Theme/assets
ERROR - 2023-10-20 04:55:29 --> 404 Page Not Found: Public/assets
ERROR - 2023-10-20 04:55:30 --> 404 Page Not Found: Admin/assets
ERROR - 2023-10-20 05:00:41 --> Could not find the language line "Home"
ERROR - 2023-10-20 05:06:34 --> Could not find the language line "Home"
ERROR - 2023-10-20 05:08:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 05:19:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 05:32:58 --> Could not find the language line "Home"
ERROR - 2023-10-20 05:35:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 05:35:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 05:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 05:47:59 --> Could not find the language line "Home"
ERROR - 2023-10-20 05:54:52 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:02:20 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:17:13 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:21:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:24:35 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:24:37 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:30:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 06:37:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:46:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 06:46:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-20 06:47:00 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:47:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-20 06:47:27 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:47:39 --> Could not find the language line "Socks"
ERROR - 2023-10-20 06:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:48:34 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:48:37 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 06:48:41 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:48:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 06:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:49:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:53:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:58:23 --> Could not find the language line "Home"
ERROR - 2023-10-20 06:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 06:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:00:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:15:45 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:15:48 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-20 07:15:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-20 07:15:48 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-20 07:15:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-20 07:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:21:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 07:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 07:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 07:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:24:14 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:32:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:34:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 07:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:43:49 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:45:19 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:45:20 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:45:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:52:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 07:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:55:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:55:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:56:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:56:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 07:56:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 07:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 07:59:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-20 08:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-20 08:10:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 08:12:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 08:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:12:31 --> Could not find the language line "Home"
ERROR - 2023-10-20 08:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:14:27 --> Could not find the language line "Home"
ERROR - 2023-10-20 08:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 08:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 08:41:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 08:44:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 08:45:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:00:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:02:35 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:06:03 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:11:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:11:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:13:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 09:22:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:23:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:24:13 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:30:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 09:30:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 09:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:36:24 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-20 09:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:45:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:46:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 09:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:53:06 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-20 09:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:53:41 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-20 09:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 09:57:09 --> Could not find the language line "Home"
ERROR - 2023-10-20 09:57:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 09:57:32 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:03:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 10:07:55 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:17:24 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:19:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 10:19:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 10:19:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 10:20:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 10:20:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 10:20:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 10:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:27:02 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:28:32 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-20 10:36:48 --> Could not find the language line "Other"
ERROR - 2023-10-20 10:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:45:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:46:06 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:46:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 10:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:49:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 10:49:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 10:49:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 10:50:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:50:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:52:03 --> Could not find the language line "Home"
ERROR - 2023-10-20 10:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 10:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 10:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 11:00:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 11:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 11:05:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 11:05:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 11:05:08 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:05:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 11:09:46 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:12:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:22:43 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:23:38 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:23:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 11:29:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 11:33:31 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:37:39 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:37:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 11:37:52 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:44:31 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:51:03 --> Could not find the language line "Home"
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 11:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 11:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 11:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 11:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 11:51:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 11:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 11:53:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 11:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:02:13 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:04:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 12:04:46 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:05:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 12:07:02 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:08:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:14:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 12:17:01 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:22:58 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:38:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:39:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 12:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 12:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 12:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:41:18 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-20 12:41:18 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-20 12:41:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-20 12:41:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-20 12:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:43:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-20 12:43:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-20 12:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:49:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 12:49:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 12:49:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 12:50:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:52:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:56:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 12:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 12:56:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 12:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 12:59:49 --> Could not find the language line "Home"
ERROR - 2023-10-20 12:59:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 13:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:00:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:00:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:05:32 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:05:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 13:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 13:05:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 13:06:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:06:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:06:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:10:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:10:40 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:16:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 13:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:20:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:20:43 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:23:22 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 13:24:22 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:34:39 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:38:16 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:38:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 13:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 13:38:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 13:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:51:44 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:52:19 --> Could not find the language line "Home"
ERROR - 2023-10-20 13:52:59 --> Could not find the language line "Other"
ERROR - 2023-10-20 13:56:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 13:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 13:59:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 13:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:02:44 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:03:29 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 14:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:05:32 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:06:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:09:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:13:58 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:14:55 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:15:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:15:22 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:15:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:15:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:16:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:18:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 14:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:20:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 14:23:17 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:23:32 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:27:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:27:14 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:27:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:27:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:29:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:29:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:30:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:30:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:30:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:30:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 14:30:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 14:30:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 14:31:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:32:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:32:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:33:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:33:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:33:52 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-20 14:34:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:34:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:34:09 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:34:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:35:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 14:37:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:37:46 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:37:50 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:38:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 14:38:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 14:38:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 14:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:39:57 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:42:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 14:42:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 14:42:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 14:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:44:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 14:44:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 14:44:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 14:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:48:37 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:48:40 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:49:24 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:55:15 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-20 14:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 14:57:06 --> Could not find the language line "Home"
ERROR - 2023-10-20 14:57:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 14:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 14:57:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 14:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:01:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:02:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:04:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 15:05:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:06:52 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:10:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:11:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:11:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:11:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:22:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 15:22:32 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-10-20 15:22:33 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-20 15:22:35 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:26:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 15:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:30:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:35:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 15:35:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 15:35:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 15:44:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:44:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 15:44:47 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 15:46:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:49:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:49:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 15:49:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 15:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 15:49:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 15:56:52 --> Could not find the language line "Home"
ERROR - 2023-10-20 15:59:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 16:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 16:00:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 16:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:02:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 16:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:03:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:03:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:03:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:04:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:05:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:05:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:07:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:07:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:07:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:07:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:19:59 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:20:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:20:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:21:38 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:21:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 16:21:55 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-20 16:26:29 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:28:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:28:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:28:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:28:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:30:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:31:34 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:32:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:32:50 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:33:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:33:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:34:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:34:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:35:02 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:35:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 16:35:03 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-20 16:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:49:53 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:50:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:52:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:53:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 16:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bracelets'
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 16:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 16:53:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:53:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:54:25 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:54:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:55:07 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:55:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:57:09 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:57:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:57:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 16:57:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:58:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 16:58:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 17:00:38 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:00:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:00:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:04:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:06:11 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 17:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:11:33 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:11:39 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:11:41 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:14:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:17:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-20 17:19:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:21:00 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:23:08 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:23:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:26:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:27:57 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:29:49 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:30:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:35:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:35:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:35:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:35:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:36:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:36:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:36:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:36:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:36:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:36:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:37:15 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:37:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:37:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:37:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:37:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 17:37:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 17:37:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 17:37:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:37:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:38:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 17:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:39:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:39:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:39:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:39:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:40:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:40:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:40:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:40:13 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:41:45 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:41:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-20 17:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:42:51 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:43:00 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:48:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:48:18 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 17:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:48:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-20 17:48:35 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:48:42 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 17:48:46 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:48:50 --> Could not find the language line "Socks"
ERROR - 2023-10-20 17:48:54 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:49:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:49:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:49:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:49:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 17:49:47 --> Could not find the language line "Home"
ERROR - 2023-10-20 17:49:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 17:49:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-20 17:49:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 17:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:50:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:50:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 17:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:57:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:58:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:59:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 17:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 17:59:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:00:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:01:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 18:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 18:01:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 18:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:02:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:02:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:02:15 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:07:01 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:08:36 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-20 18:08:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:09:07 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:10:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:10:47 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:14:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:17:13 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:18:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:24:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:25:30 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:25:38 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:29:16 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:29:57 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:33:32 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-20 18:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:34:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:34:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-20 18:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-20 18:34:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-20 18:35:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:36:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:36:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:39:37 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:40:34 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:40:38 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:41:16 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:44:50 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:45:29 --> Could not find the language line "Socks"
ERROR - 2023-10-20 18:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:45:45 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:45:52 --> Could not find the language line "Socks"
ERROR - 2023-10-20 18:45:56 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:46:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:47:28 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:50:54 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:51:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 18:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:52:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 18:52:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 18:52:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 18:52:37 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:52:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:52:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:53:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:53:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:53:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:54:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:54:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:54:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:54:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 18:54:50 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:54:56 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 18:55:08 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:55:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:55:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 18:55:55 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:56:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-20 18:56:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:56:17 --> Could not find the language line "Socks"
ERROR - 2023-10-20 18:56:29 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 18:57:55 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:58:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-20 18:58:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 18:59:24 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:03:16 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:03:18 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:05:12 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:05:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 19:06:10 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:06:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:07:11 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:08:47 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:09:18 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:12:49 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:13:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 19:18:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 19:20:01 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:20:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 19:20:31 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:24:30 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:25:18 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:26:25 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 19:41:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-20 19:43:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 19:57:23 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:57:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 19:57:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:57:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:58:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:58:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:58:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:58:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-20 19:58:36 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:58:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 19:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-20 19:59:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 19:59:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 19:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:00:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 20:00:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-20 20:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:02:40 --> Could not find the language line "Home"
ERROR - 2023-10-20 20:13:42 --> Could not find the language line "Socks"
ERROR - 2023-10-20 20:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:41:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 20:41:29 --> Could not find the language line "Home"
ERROR - 2023-10-20 20:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:45:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 20:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 20:46:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 20:46:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-20 20:54:55 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-20 21:01:10 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 21:16:02 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:16:05 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-20 21:17:45 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-20 21:17:48 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-20 21:17:48 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-20 21:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 21:18:17 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:21:17 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:21:48 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:22:10 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:52:06 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 21:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-20 21:58:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 22:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 22:07:21 --> Could not find the language line "Home"
ERROR - 2023-10-20 22:09:14 --> Could not find the language line "Home"
ERROR - 2023-10-20 22:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 22:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 22:38:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-20 22:38:43 --> Could not find the language line "Home"
ERROR - 2023-10-20 23:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-20 23:00:59 --> Could not find the language line "Home"
ERROR - 2023-10-20 23:01:02 --> Could not find the language line "Perfume"
ERROR - 2023-10-20 23:01:03 --> Could not find the language line "Home"
ERROR - 2023-10-20 23:02:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-20 23:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-20 23:25:46 --> Could not find the language line "Home"
ERROR - 2023-10-20 23:35:48 --> Could not find the language line "Home"
