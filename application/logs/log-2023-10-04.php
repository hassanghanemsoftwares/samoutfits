<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-04 00:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:01:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 00:59:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:03:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:09:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:24:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 01:24:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:27:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 01:32:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:32:08 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:47:03 --> Could not find the language line "Home"
ERROR - 2023-10-04 01:48:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-04 02:05:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 02:07:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 02:26:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 02:29:45 --> Could not find the language line "products"
ERROR - 2023-10-04 02:41:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:18:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 03:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 03:21:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:25:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:25:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:46:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 03:48:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 03:49:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 03:49:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:51:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:51:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:55:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 03:57:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:01:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:08:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 04:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 04:14:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 04:16:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:20:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:20:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 04:21:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:21:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:22:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:22:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:22:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:23:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:26:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:26:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:26:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:26:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 04:26:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:26:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 04:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 04:27:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:36:28 --> Could not find the language line "Home"
ERROR - 2023-10-04 04:41:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:00:07 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:00:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:09:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 05:19:36 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:26:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:27:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 05:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 05:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 05:40:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 05:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 05:45:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 05:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 05:46:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:46:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:46:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 05:47:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 05:52:08 --> Could not find the language line "Home"
ERROR - 2023-10-04 05:53:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 05:59:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:06:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:07:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:10:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:11:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-04 06:13:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:13:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:14:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 06:14:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:14:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:21:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:22:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 06:22:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:23:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 06:24:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:24:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 06:31:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 06:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 06:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 06:56:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 06:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 06:57:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:05:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:08:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:09:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 07:09:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-04 07:09:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 07:14:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:14:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:14:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:14:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:14:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:14:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:14:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 07:15:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:17:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:17:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:17:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:18:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:18:29 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:18:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 07:18:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 07:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:20:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:20:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:20:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:22:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:22:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:22:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 07:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:22:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:23:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:23:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:25:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:28:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 07:28:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:34:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:34:45 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:34:52 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:35:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:35:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:35:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:36:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:37:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 07:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:45:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 07:47:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 07:47:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 07:49:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 07:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 07:53:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 07:57:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:14:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:22:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:29:09 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 08:29:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:29:50 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 08:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:31:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:31:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 08:31:28 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:36:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:38:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:38:54 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:39:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:40:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:40:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:40:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:40:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 08:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 08:43:25 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:49:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:50:50 --> Could not find the language line "products"
ERROR - 2023-10-04 08:52:25 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:53:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 08:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:02:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:14:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 09:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-04 09:14:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 09:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:21:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:22:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:24:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:24:29 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:25:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 09:25:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:38:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 09:44:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:45:39 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:47:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 09:47:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 09:47:37 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:49:00 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:50:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 09:52:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 09:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 09:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:00:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:01:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:01:41 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:09:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:09:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:10:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:13:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:13:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:13:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:14:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:16:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:22:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-04 10:23:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 10:23:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:25:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:25:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:33:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 10:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:39:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 10:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 10:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 10:51:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 10:51:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:53:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 10:59:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 11:06:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:12:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:17:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:26:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 11:30:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 11:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:51:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:53:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:54:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:55:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 11:55:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 11:58:03 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:03:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:13:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:14:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:16:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:16:41 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:16:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 12:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-04 12:16:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 12:22:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:23:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:24:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:24:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:24:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 12:27:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:27:55 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:27:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:27:57 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:28:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:28:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:29:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:29:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:29:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:33:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 12:34:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 12:40:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:40:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:40:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:41:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 12:41:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:41:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:41:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:41:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 12:41:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:41:55 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 12:41:58 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:47:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 12:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:52:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 12:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 12:57:15 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-04 13:00:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 13:00:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 13:01:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:01:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:01:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:01:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:01:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:02:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:02:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 13:03:30 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:31 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-10-04 13:03:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:03:43 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-04 13:03:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:03:50 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-04 13:03:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:03:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 13:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:04:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 13:04:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 13:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:07:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:08:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 13:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:10:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:10:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:12:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:13:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:13:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:13:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:13:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:16:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:24:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:26:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:26:44 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:28:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:29:03 --> Could not find the language line "products"
ERROR - 2023-10-04 13:29:28 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-04 13:30:25 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:37:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 13:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:42:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-04 13:43:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:47:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 13:47:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-04 13:47:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 13:47:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:50:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:51:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 13:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 13:56:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 13:56:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-04 13:56:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 14:00:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:01:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:02:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:05:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:06:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 14:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:06:24 --> Could not find the language line "Other"
ERROR - 2023-10-04 14:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:06:41 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:06:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 14:06:55 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:07:49 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:10:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 14:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:16:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:19:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:19:22 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 14:19:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 14:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:28:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:32:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:33:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:33:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:34:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:35:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:35:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:35:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-04 14:35:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-04 14:35:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-04 14:36:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:39:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:39:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 14:49:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 14:50:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 14:57:37 --> Could not find the language line "Socks"
ERROR - 2023-10-04 15:01:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:03:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 15:04:20 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:04:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:04:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:05:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:07:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:07:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:07:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:13:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:13:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:20:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 15:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 15:22:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:23:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:24:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:28:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-04 15:35:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:39:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:39:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:42:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:49:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:52:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 15:52:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:53:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:54:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:54:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:54:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:54:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 15:54:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:59:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 15:59:55 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:00:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 16:00:37 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:00:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 16:05:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 16:05:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:06:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:06:39 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:08:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:08:44 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:09:53 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:10:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 16:10:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:10:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:12:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 16:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:13:49 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:14:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:14:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:16:49 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:17:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:18:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:18:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:18:42 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 16:18:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 16:18:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 16:19:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:19:55 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:23:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:24:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:26:57 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:29:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:30:36 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:33:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:35:37 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:40:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:41:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:41:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 16:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 16:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:43:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 16:43:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:43:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 16:43:58 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:44:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 16:44:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 16:44:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:44:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 16:44:36 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:44:53 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 16:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 16:49:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 16:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:05:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:06:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 17:07:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:11:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-04 17:11:42 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-04 17:11:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-04 17:11:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 17:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:11:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-04 17:11:49 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-04 17:11:49 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-04 17:11:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-04 17:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:13:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 17:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 17:15:28 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:16:39 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:17:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:17:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:23:44 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:23:59 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 17:27:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:27:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:29:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:29:34 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:30:28 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:31:22 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:31:53 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:33:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:36:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:37:54 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:38:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 17:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:40:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 17:40:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 17:40:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 17:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:40:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:40:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:40:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:40:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:40:56 --> Could not find the language line "Perfume"
ERROR - 2023-10-04 17:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:45:37 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:48:04 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:49:29 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:54:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:54:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 17:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:58:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 17:58:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:00:57 --> Could not find the language line "Other"
ERROR - 2023-10-04 18:01:11 --> Could not find the language line "Other"
ERROR - 2023-10-04 18:09:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:09:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:10:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:11:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:12:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:13:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 18:13:57 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:16:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:19:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:21:18 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:22:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:25:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:27:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:28:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 18:28:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 18:28:50 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:29:44 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:31:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:31:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:32:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:32:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:34:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:34:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:36:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:37:47 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:46:12 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:53:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:54:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:55:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 18:55:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 18:56:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 18:56:09 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:56:29 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:56:39 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 18:56:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:00:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:02:58 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:03:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:04:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 19:04:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:04:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 19:05:37 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:07:30 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:08:32 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:09:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:10:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:12:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:13:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:15:38 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:16:01 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:19:48 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:22:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:25:53 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:29:37 --> Could not find the language line "Other"
ERROR - 2023-10-04 19:30:42 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:32:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 19:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:37:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:39:58 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:40:02 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:40:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:40:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:41:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 19:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:41:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:43:04 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:43:23 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:44:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:45:12 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:45:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:46:31 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:46:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:46:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 19:47:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:47:18 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:47:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-04 19:47:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:47:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 19:47:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-04 19:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:51:31 --> Could not find the language line "Home"
ERROR - 2023-10-04 19:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 19:51:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 19:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 19:58:24 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:03:02 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:04:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:04:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:04:40 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:16:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:16:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 20:18:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 20:20:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 20:27:08 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:28:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:29:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-04 20:29:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 20:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:30:08 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:33:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:37:54 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:38:49 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:39:51 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:39:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:41:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:41:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:41:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:41:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:42:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:42:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 20:42:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:43:52 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:45:27 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:46:02 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:46:36 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:48:17 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-04 20:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:54:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:58:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 20:58:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 20:59:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 20:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 20:59:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 20:59:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 21:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:00:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 21:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:01:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:01:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:01:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:04:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:05:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:08:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:10:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:23:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 21:23:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:26:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:26:30 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:28:21 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:36:23 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:39:26 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:40:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:40:39 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:40:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-04 21:41:02 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:41:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 21:41:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 21:42:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-04 21:42:13 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 21:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-04 21:42:59 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:49:09 --> Could not find the language line "products"
ERROR - 2023-10-04 21:50:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 21:52:45 --> Could not find the language line "Home"
ERROR - 2023-10-04 21:57:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 21:58:41 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:01:46 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:14:09 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:21:07 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 22:26:43 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:35:19 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:39:40 --> Could not find the language line "products"
ERROR - 2023-10-04 22:43:39 --> Could not find the language line "Home"
ERROR - 2023-10-04 22:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 22:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-04 23:10:16 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:15:46 --> Could not find the language line "Hair%20"
ERROR - 2023-10-04 23:15:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 23:16:07 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:19:33 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:21:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:22:05 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:26:14 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:27:10 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:27:35 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:28:01 --> Could not find the language line "Socks"
ERROR - 2023-10-04 23:28:11 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:28:15 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:37:06 --> Could not find the language line "Home"
ERROR - 2023-10-04 23:46:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-04 23:52:43 --> 404 Page Not Found: Assets/css
