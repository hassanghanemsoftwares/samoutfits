<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-24 00:01:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 00:17:29 --> Could not find the language line "products"
ERROR - 2024-05-24 00:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 00:18:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 00:28:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 00:33:49 --> Could not find the language line "Home"
ERROR - 2024-05-24 00:34:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 00:35:50 --> Could not find the language line "Home"
ERROR - 2024-05-24 00:45:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 00:47:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 00:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 00:47:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 00:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 00:55:30 --> Could not find the language line "Home"
ERROR - 2024-05-24 00:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 00:56:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 00:56:44 --> Could not find the language line "products"
ERROR - 2024-05-24 00:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 00:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 00:58:25 --> Could not find the language line "Home"
ERROR - 2024-05-24 00:59:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 01:02:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 01:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:15:59 --> Could not find the language line "Home"
ERROR - 2024-05-24 01:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:28:13 --> Could not find the language line "Home"
ERROR - 2024-05-24 01:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:33:26 --> Could not find the language line "products"
ERROR - 2024-05-24 01:33:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:43:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 01:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:48:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 01:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 01:58:16 --> Could not find the language line "Home"
ERROR - 2024-05-24 01:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:02:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:08:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-24 02:15:25 --> Could not find the language line "Home"
ERROR - 2024-05-24 02:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:28:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 02:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:44:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:44:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:51:59 --> Could not find the language line "products"
ERROR - 2024-05-24 02:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:54:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 02:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:56:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 02:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 02:58:20 --> Could not find the language line "Home"
ERROR - 2024-05-24 02:58:34 --> Could not find the language line "Home"
ERROR - 2024-05-24 02:59:06 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:09:38 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:16:10 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:20:11 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:28:15 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:32:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-24 03:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:43:37 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-24 03:44:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 03:44:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 03:44:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 03:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 03:57:47 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:58:15 --> Could not find the language line "Home"
ERROR - 2024-05-24 03:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:09:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 04:09:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 04:09:48 --> Could not find the language line "Home"
ERROR - 2024-05-24 04:10:31 --> Could not find the language line "products"
ERROR - 2024-05-24 04:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:17:45 --> Could not find the language line "Home"
ERROR - 2024-05-24 04:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:23:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 04:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:28:16 --> Could not find the language line "Home"
ERROR - 2024-05-24 04:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:54:25 --> Could not find the language line "Home"
ERROR - 2024-05-24 04:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 04:58:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 04:58:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 04:58:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 04:58:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 04:59:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 04:59:02 --> 404 Page Not Found: Enhance/index
ERROR - 2024-05-24 05:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:03:43 --> Could not find the language line "Home"
ERROR - 2024-05-24 05:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:09:38 --> Could not find the language line "Socks"
ERROR - 2024-05-24 05:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:12:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 05:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:21:37 --> Could not find the language line "Other"
ERROR - 2024-05-24 05:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:21:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-24 05:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:28:17 --> Could not find the language line "Home"
ERROR - 2024-05-24 05:29:11 --> Could not find the language line "products"
ERROR - 2024-05-24 05:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 05:41:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 05:49:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 05:53:30 --> Could not find the language line "Home"
ERROR - 2024-05-24 05:58:15 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:02:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:02:51 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:04:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 06:04:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 06:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:09:59 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:11:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 06:11:37 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:11:57 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 06:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:12:08 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 06:12:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 06:12:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 06:13:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 06:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:28:19 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:37:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 06:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:44:00 --> Could not find the language line "Home"
ERROR - 2024-05-24 06:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:47:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 06:47:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 06:47:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 06:47:43 --> Could not find the language line "products"
ERROR - 2024-05-24 06:53:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 06:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 06:58:17 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:05:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 07:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:14:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 07:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:20:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 07:20:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 07:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:25:13 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:25:14 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:28:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:29:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 07:29:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 07:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:30:26 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:46:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 07:49:52 --> Could not find the language line "Perfume"
ERROR - 2024-05-24 07:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:54:12 --> Could not find the language line "Home"
ERROR - 2024-05-24 07:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 07:58:17 --> Could not find the language line "Home"
ERROR - 2024-05-24 08:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:02:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 08:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:12:25 --> Could not find the language line "Bracelets"
ERROR - 2024-05-24 08:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:12:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 08:12:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 08:12:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 08:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:22:54 --> Could not find the language line "Home"
ERROR - 2024-05-24 08:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:27:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 08:27:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 08:28:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 08:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:45:48 --> Could not find the language line "Home"
ERROR - 2024-05-24 08:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:48:31 --> Could not find the language line "Home"
ERROR - 2024-05-24 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:53:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 08:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:57:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 08:57:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 08:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 08:58:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:05:28 --> Could not find the language line "Other"
ERROR - 2024-05-24 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:06:19 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:06:45 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:17:53 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:26:02 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:28:19 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:31:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-24 09:31:45 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:32:06 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:32:24 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-05-24 09:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:40:20 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:44:09 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:44:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 09:44:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 09:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:54:58 --> 404 Page Not Found: Products/index
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 09:56:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:56:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 09:58:17 --> Could not find the language line "Home"
ERROR - 2024-05-24 09:59:37 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:09:43 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:19:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 10:19:38 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:21:10 --> Could not find the language line "products"
ERROR - 2024-05-24 10:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:27:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:27:31 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:28:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:37:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:38:10 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:38:54 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:40:03 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:43:16 --> Could not find the language line "products"
ERROR - 2024-05-24 10:44:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 10:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:53:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 10:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 10:58:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 11:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:02:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 11:02:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 11:02:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 11:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:05:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 11:05:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 11:05:08 --> Could not find the language line "Home"
ERROR - 2024-05-24 11:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-24 11:10:13 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 11:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:22:20 --> Could not find the language line "Home"
ERROR - 2024-05-24 11:26:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-24 11:28:19 --> Could not find the language line "Home"
ERROR - 2024-05-24 11:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:38:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-24 11:38:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-24 11:38:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 11:39:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-24 11:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:42:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 11:42:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 11:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 11:58:19 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:02:42 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:04:26 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:06:18 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 12:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:10:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-24 12:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:18:21 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 12:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:20:29 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-24 12:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:20:47 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-05-24 12:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:26:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-24 12:28:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:30:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:34:18 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 12:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:38:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:38:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:40:58 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-05-24 12:40:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-05-24 12:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:42:23 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 12:46:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:46:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:50:32 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 12:53:50 --> Could not find the language line "products"
ERROR - 2024-05-24 12:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:54:46 --> Could not find the language line "products"
ERROR - 2024-05-24 12:56:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 12:56:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 12:56:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 12:58:01 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:58:20 --> Could not find the language line "Home"
ERROR - 2024-05-24 12:58:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:58:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 12:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 12:58:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:02:21 --> 404 Page Not Found: Products/products
ERROR - 2024-05-24 13:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:05:07 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:05:08 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:05:23 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:05:23 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:06:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:06:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:07:11 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:10:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:10:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:14:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 13:16:31 --> Could not find the language line "products"
ERROR - 2024-05-24 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:18:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:18:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:19:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 13:19:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 13:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:22:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:22:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:22:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:26:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:26:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:28:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:30:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:30:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:34:23 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 13:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:42:23 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 13:44:00 --> Could not find the language line "products"
ERROR - 2024-05-24 13:44:51 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:46:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:46:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:50:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:53:46 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:53:55 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:53:58 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:54:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:54:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:54:38 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:56:14 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:57:43 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:58:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 13:58:14 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:58:20 --> Could not find the language line "Home"
ERROR - 2024-05-24 13:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:58:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:58:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 13:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 13:58:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-24 13:59:21 --> Could not find the language line "Other"
ERROR - 2024-05-24 14:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:02:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:05:52 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 14:05:56 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:06:07 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:06:51 --> Could not find the language line "Bracelets"
ERROR - 2024-05-24 14:07:16 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:07:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 14:07:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 14:07:36 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:10:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:10:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:17:41 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:18:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:18:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:19:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 14:20:41 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:22:27 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 14:23:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 14:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:27:07 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-24 14:28:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:30:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 14:33:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 14:33:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 14:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:34:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:35:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 14:35:02 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:37:08 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:38:09 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:38:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:38:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:41:38 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:42:24 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 14:42:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:50:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 14:58:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 14:58:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 14:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:02:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:06:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:10:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:14:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:18:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:19:10 --> Could not find the language line "Home"
ERROR - 2024-05-24 15:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:28:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 15:30:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:32:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:32:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:33:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-24 15:34:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:38:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:42:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 15:46:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:54:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 15:55:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 15:58:21 --> Could not find the language line "Home"
ERROR - 2024-05-24 15:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 15:58:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:00:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 16:02:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 16:06:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 16:06:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 16:06:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 16:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 16:09:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 16:10:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 16:11:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 16:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:14:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:16:24 --> Could not find the language line "Home"
ERROR - 2024-05-24 16:18:12 --> Could not find the language line "Other"
ERROR - 2024-05-24 16:18:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:22:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:23:15 --> Could not find the language line "Home"
ERROR - 2024-05-24 16:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:26:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:27:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 16:28:23 --> Could not find the language line "Home"
ERROR - 2024-05-24 16:31:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 16:35:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 16:35:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 16:35:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 16:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:46:06 --> Could not find the language line "products"
ERROR - 2024-05-24 16:46:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:50:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:54:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 16:57:11 --> Could not find the language line "Home"
ERROR - 2024-05-24 16:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 16:58:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:00:32 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:06:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:07:17 --> Could not find the language line "users"
ERROR - 2024-05-24 17:07:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:09:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 17:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:11:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:15:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:16:09 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:16:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 17:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 17:16:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 17:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:18:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 17:18:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 17:18:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 17:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:20:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 17:20:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 17:20:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 17:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:22:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:22:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:23:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:24:14 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:25:01 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:27:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:28:06 --> Could not find the language line "Other"
ERROR - 2024-05-24 17:28:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:28:53 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:33:32 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:33:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:35:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 17:37:38 --> Could not find the language line "users"
ERROR - 2024-05-24 17:39:02 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:39:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:39:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 17:39:49 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:41:37 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:50:39 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:51:06 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:51:22 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:51:36 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 17:58:07 --> Could not find the language line "Home"
ERROR - 2024-05-24 17:58:23 --> Could not find the language line "Home"
ERROR - 2024-05-24 18:13:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 18:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 18:13:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 18:17:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 18:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 18:17:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 18:20:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 18:28:24 --> Could not find the language line "Home"
ERROR - 2024-05-24 18:36:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 18:36:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 18:39:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 18:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 18:42:38 --> Could not find the language line "products"
ERROR - 2024-05-24 18:43:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 18:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 18:43:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 18:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 18:44:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 18:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 18:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 18:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 18:58:23 --> Could not find the language line "Home"
ERROR - 2024-05-24 18:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 19:12:12 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 19:13:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 19:14:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:14:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:16:46 --> Could not find the language line "products"
ERROR - 2024-05-24 19:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 19:18:01 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:18:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:18:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:18:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:20:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:20:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 19:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:24:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:25:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 19:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 19:28:24 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:30:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:30:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:30:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:30:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 19:32:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 19:34:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 19:34:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 19:34:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 19:37:44 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 19:37:52 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:37:58 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:41:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 19:43:55 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:45:13 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:45:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 19:49:51 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 19:50:02 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:53:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 19:57:28 --> Could not find the language line "Home"
ERROR - 2024-05-24 19:57:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 19:58:26 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:01:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 20:03:51 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:05:42 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-24 20:08:43 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2024-05-24 20:08:43 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2024-05-24 20:08:43 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2024-05-24 20:08:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2024-05-24 20:09:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 20:13:42 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:13:44 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-24 20:13:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 20:14:18 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 20:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:17:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-24 20:18:01 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:18:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:18:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:19:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:19:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:19:41 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:24:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:24:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:25:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 20:28:25 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:28:26 --> Could not find the language line "Socks"
ERROR - 2024-05-24 20:28:27 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 20:28:28 --> Could not find the language line "Other"
ERROR - 2024-05-24 20:28:29 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 20:28:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-24 20:28:32 --> Could not find the language line "Bracelets"
ERROR - 2024-05-24 20:28:33 --> Could not find the language line "Other"
ERROR - 2024-05-24 20:28:33 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-24 20:28:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 20:28:36 --> Could not find the language line "Clothing"
ERROR - 2024-05-24 20:28:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 20:29:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 20:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:33:35 --> Could not find the language line "Socks"
ERROR - 2024-05-24 20:33:37 --> Could not find the language line "Other"
ERROR - 2024-05-24 20:33:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:36:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-24 20:37:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:39:48 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:40:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 20:40:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 20:40:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 20:41:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:43:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:45:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-24 20:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:45:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-24 20:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:45:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-24 20:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:45:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 20:48:57 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-24 20:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:58:25 --> Could not find the language line "Home"
ERROR - 2024-05-24 20:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 20:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:04:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:09:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:09:54 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:10:02 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:13:57 --> Could not find the language line "users"
ERROR - 2024-05-24 21:16:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:18:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 21:18:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 21:18:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 21:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:22:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 21:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 21:22:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 21:23:01 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:24:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 21:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 21:24:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 21:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:26:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 21:28:31 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:48:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:48:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:48:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 21:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:50:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 21:50:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 21:50:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 21:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:52:27 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-24 21:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:56:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:57:36 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 21:58:26 --> Could not find the language line "Home"
ERROR - 2024-05-24 21:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:10:32 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:11:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 22:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 22:11:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 22:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:19:14 --> Could not find the language line "products"
ERROR - 2024-05-24 22:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:24:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 22:24:31 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:26:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 22:28:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:31:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 22:31:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 22:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:39:36 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:45:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 22:45:51 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:46:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 22:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:47:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 22:47:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 22:47:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 22:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:54:38 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 22:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 22:58:29 --> Could not find the language line "Home"
ERROR - 2024-05-24 22:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:08:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 23:08:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 23:08:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 23:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:12:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-24 23:14:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 23:14:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 23:14:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 23:14:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 23:14:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 23:14:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 23:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:19:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 23:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:26:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 23:26:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-24 23:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:28:27 --> Could not find the language line "Home"
ERROR - 2024-05-24 23:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:44:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 23:44:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 23:44:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 23:46:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-24 23:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 23:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:51:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 23:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:52:44 --> Could not find the language line "Home"
ERROR - 2024-05-24 23:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:53:04 --> Could not find the language line "Home"
ERROR - 2024-05-24 23:54:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-24 23:54:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-24 23:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-24 23:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:55:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-24 23:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:58:31 --> Could not find the language line "Home"
ERROR - 2024-05-24 23:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-24 23:59:41 --> 404 Page Not Found: Assets/lib
