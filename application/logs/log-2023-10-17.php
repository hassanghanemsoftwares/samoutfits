<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-17 00:35:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 00:45:06 --> Could not find the language line "Home"
ERROR - 2023-10-17 00:45:10 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:01:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 01:01:54 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:15:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 01:15:25 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:17:14 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-17 01:18:42 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:21:38 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:31:54 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:38:48 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:38:48 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:38:49 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:38:49 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:38:50 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:38:50 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 01:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 01:42:39 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:42:39 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:42:39 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:42:40 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:42:40 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:42:40 --> 404 Page Not Found: Public/home
ERROR - 2023-10-17 01:42:41 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:42:41 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:42:41 --> 404 Page Not Found: Static/admin
ERROR - 2023-10-17 01:43:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:46:55 --> Could not find the language line "Home"
ERROR - 2023-10-17 01:46:56 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:00:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 02:05:35 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:13:20 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-17 02:15:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:17:12 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:23:22 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:25:32 --> Could not find the language line "Home"
ERROR - 2023-10-17 02:32:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 02:32:47 --> Could not find the language line "Home"
ERROR - 2023-10-17 03:09:45 --> Could not find the language line "Socks"
ERROR - 2023-10-17 03:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 03:16:20 --> Could not find the language line "Home"
ERROR - 2023-10-17 03:16:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 03:18:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 03:29:21 --> Could not find the language line "Home"
ERROR - 2023-10-17 03:34:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 03:34:35 --> Could not find the language line "Home"
ERROR - 2023-10-17 03:39:01 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:06:01 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:34:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:34:51 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:39:20 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:48:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:48:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:49:29 --> Could not find the language line "Home"
ERROR - 2023-10-17 04:49:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:49:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:49:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:50:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:50:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:51:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 04:57:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 05:08:00 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:08:01 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:08:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 05:08:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 05:09:03 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:11:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 05:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 05:12:27 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:16:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 05:17:08 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:17:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-17 05:17:47 --> Could not find the language line "Socks"
ERROR - 2023-10-17 05:17:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 05:17:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-17 05:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-17 05:19:08 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:26:30 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-17 05:29:03 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:34:04 --> Could not find the language line "Socks"
ERROR - 2023-10-17 05:34:15 --> Could not find the language line "Socks"
ERROR - 2023-10-17 05:34:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 05:34:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 05:41:49 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:47:58 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:47:59 --> Could not find the language line "Home"
ERROR - 2023-10-17 05:52:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 05:52:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 05:56:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 06:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:01:26 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:04:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:04:46 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:06:03 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:08:29 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:38:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 06:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:40:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 06:40:29 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:42:09 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:43:46 --> Could not find the language line "Home"
ERROR - 2023-10-17 06:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:47:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 06:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 06:47:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 06:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 06:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:00:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 07:00:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-17 07:00:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 07:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:16:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 07:16:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 07:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:24:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 07:27:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 07:44:49 --> Could not find the language line "Home"
ERROR - 2023-10-17 07:44:55 --> Could not find the language line "Home"
ERROR - 2023-10-17 07:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 07:55:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 08:17:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 08:17:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 08:19:17 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:20:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-17 08:21:42 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:33:21 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:33:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 08:35:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:40:24 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:44:13 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:44:13 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:44:15 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:44:15 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:49:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-17 08:55:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:57:25 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:58:33 --> Could not find the language line "Home"
ERROR - 2023-10-17 08:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:43 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:43 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:06:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:18:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:20:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:29:00 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:29:05 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:30:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:31:38 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:35:46 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:39:56 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:45:29 --> Could not find the language line "Home"
ERROR - 2023-10-17 09:47:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 09:49:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:55:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 09:56:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 09:56:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-17 10:02:37 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:19:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 10:19:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 10:19:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 10:20:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-17 10:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:24:15 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:24:37 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:27:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-17 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:28:53 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:34:58 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:36:02 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:43:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 10:44:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 10:44:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 10:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 10:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:52:16 --> Could not find the language line "Home"
ERROR - 2023-10-17 10:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 10:58:30 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:04:16 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:07:21 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:33:56 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:34:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 11:35:12 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:39:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-17 11:43:27 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:44:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 11:45:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-17 11:47:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:48:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 11:48:43 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:53:54 --> Could not find the language line "Home"
ERROR - 2023-10-17 11:54:53 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:08:44 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:09:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 12:14:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:16:53 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:24:57 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:39:25 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:47:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 12:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:47:50 --> Could not find the language line "Home"
ERROR - 2023-10-17 12:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 12:50:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 13:02:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:11:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 13:11:28 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:22:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 13:22:07 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:23:40 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:24:07 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-17 13:24:07 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-17 13:24:08 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-17 13:24:49 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-17 13:24:51 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-17 13:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:33:08 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 13:38:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 13:38:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 13:38:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 13:39:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:39:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 13:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:43:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:47:01 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:47:16 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:48:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 13:51:55 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:52:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:58:13 --> Could not find the language line "Home"
ERROR - 2023-10-17 13:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:17:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 14:18:36 --> Could not find the language line "Home"
ERROR - 2023-10-17 14:19:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 14:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:24:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 14:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:26:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 14:28:45 --> Could not find the language line "Home"
ERROR - 2023-10-17 14:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 14:34:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 14:47:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 14:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 14:56:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 14:57:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-17 14:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 15:19:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 15:19:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 15:19:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 15:19:50 --> Could not find the language line "Home"
ERROR - 2023-10-17 15:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 15:27:57 --> 404 Page Not Found: Git/HEAD
ERROR - 2023-10-17 15:30:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 15:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 15:44:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 15:47:54 --> Could not find the language line "Socks"
ERROR - 2023-10-17 15:48:01 --> Could not find the language line "Socks"
ERROR - 2023-10-17 15:48:17 --> Could not find the language line "Socks"
ERROR - 2023-10-17 15:52:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 15:52:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 15:55:39 --> Could not find the language line "Home"
ERROR - 2023-10-17 15:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 15:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 15:58:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 16:03:44 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:04:00 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:06:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:16:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:17:22 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:20:49 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:21:40 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:24:37 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:24:47 --> Could not find the language line "Perfume"
ERROR - 2023-10-17 16:38:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:39:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 16:40:05 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:41:52 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:45:50 --> Could not find the language line "Home"
ERROR - 2023-10-17 16:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 16:52:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 16:56:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 17:07:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:15:34 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:17:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:22:21 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:24:12 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:40:40 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:40:49 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:41:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:41:41 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:42:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:43:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:44:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:44:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:44:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:44:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:45:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:45:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:45:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:45:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:46:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:46:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:46:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:46:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:46:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:47:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:47:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:47:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:48:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:48:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:48:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 17:48:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 17:48:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 17:48:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 17:48:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 17:48:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 17:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:49:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:49:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:50:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:50:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 17:50:42 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:51:16 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:51:57 --> Could not find the language line "Home"
ERROR - 2023-10-17 17:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 17:54:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:01:18 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:11:24 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:13:46 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:16:08 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:18:24 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:22:07 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:23:08 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:23:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:23:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:23:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:26:34 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:26:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:27:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:27:54 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:33 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:33 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:28:33 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:30:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:30:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:30:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:31:11 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:31:19 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:36:56 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:38:13 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 18:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 18:38:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 18:38:16 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-17 18:38:42 --> Could not find the language line "Home"
ERROR - 2023-10-17 18:42:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:42:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:42:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:44:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 18:51:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:51:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:51:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 18:55:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:55:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:55:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 18:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 18:55:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 18:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:01:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:05:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:16:00 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:16:00 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:16:15 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:18:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 19:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:19:51 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:24:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:25:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 19:25:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-17 19:25:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 19:26:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:28:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:28:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:29:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:29:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:31:51 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:31:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 19:43:14 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:43:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 19:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 19:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:46:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 19:48:50 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:50:15 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-17 19:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 20:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 20:02:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-17 20:02:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-17 20:02:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-17 20:05:16 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:09:03 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-17 20:13:04 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:22:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 20:22:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-17 20:24:17 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:25:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 20:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 20:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 20:47:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 20:48:46 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:50:22 --> Could not find the language line "Home"
ERROR - 2023-10-17 20:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 20:54:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 20:56:35 --> Could not find the language line "Home"
ERROR - 2023-10-17 21:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-17 21:09:59 --> 404 Page Not Found: Kcfinder/upload.php
ERROR - 2023-10-17 21:10:00 --> 404 Page Not Found: Js/kcfinder
ERROR - 2023-10-17 21:10:01 --> 404 Page Not Found: Admin/js
ERROR - 2023-10-17 21:10:02 --> 404 Page Not Found: Admin/kcfinder
ERROR - 2023-10-17 21:10:03 --> 404 Page Not Found: Tiny_mce/plugins
ERROR - 2023-10-17 21:10:04 --> 404 Page Not Found: Public/kcfinder
ERROR - 2023-10-17 21:10:04 --> 404 Page Not Found: Lib/kcfinder
ERROR - 2023-10-17 21:10:05 --> 404 Page Not Found: Assets/kcfinder
ERROR - 2023-10-17 21:10:06 --> 404 Page Not Found: Admin/editor
ERROR - 2023-10-17 21:10:07 --> 404 Page Not Found: Ckeditor/plugins
ERROR - 2023-10-17 21:10:08 --> 404 Page Not Found: Assets/plugin
ERROR - 2023-10-17 21:10:09 --> 404 Page Not Found: Plugins/kcfinder
ERROR - 2023-10-17 21:10:10 --> 404 Page Not Found: Vendor/kcfinder
ERROR - 2023-10-17 21:10:11 --> 404 Page Not Found: Panel/kcfinder
ERROR - 2023-10-17 21:14:32 --> Could not find the language line "Home"
ERROR - 2023-10-17 21:15:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 21:18:07 --> Could not find the language line "Home"
ERROR - 2023-10-17 21:49:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-17 21:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 21:56:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-17 22:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 22:21:25 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:29:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-17 22:33:19 --> Could not find the language line "Socks"
ERROR - 2023-10-17 22:39:22 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:42:29 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:42:38 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:45:58 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:54:43 --> Could not find the language line "Home"
ERROR - 2023-10-17 22:54:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 22:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 22:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-17 22:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 22:56:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 22:56:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-17 23:19:39 --> Could not find the language line "Home"
ERROR - 2023-10-17 23:28:42 --> Could not find the language line "Home"
ERROR - 2023-10-17 23:29:23 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-17 23:29:23 --> 404 Page Not Found: App-adstxt/index
ERROR - 2023-10-17 23:29:23 --> 404 Page Not Found: Sellersjson/index
ERROR - 2023-10-17 23:29:25 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-17 23:29:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-17 23:29:26 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-17 23:29:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 23:29:46 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-10-17 23:30:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-17 23:33:10 --> Could not find the language line "Home"
ERROR - 2023-10-17 23:35:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-17 23:35:05 --> Could not find the language line "Home"
ERROR - 2023-10-17 23:35:05 --> 404 Page Not Found: Assets/lib
ERROR - 2023-10-17 23:56:35 --> 404 Page Not Found: Robotstxt/index
