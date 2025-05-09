<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-18 00:03:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:06:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 00:07:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:07:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:07:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:07:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 00:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:11:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:12:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 00:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:23:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:23:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:23:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 00:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:42:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 00:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 00:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:43:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 00:53:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 00:55:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 00:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:03:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:03:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:03:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 01:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:09:34 --> Could not find the language line "products"
ERROR - 2024-04-18 01:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:11:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 01:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:12:50 --> Could not find the language line "Home"
ERROR - 2024-04-18 01:13:18 --> Could not find the language line "products"
ERROR - 2024-04-18 01:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:15:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:15:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:19:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:19:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:23:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:27:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:27:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 01:29:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 01:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:42:52 --> Could not find the language line "Home"
ERROR - 2024-04-18 01:43:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:47:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 01:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:47:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:49:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 01:49:08 --> Could not find the language line "Home"
ERROR - 2024-04-18 01:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:51:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:51:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 01:59:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 01:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 02:01:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 02:01:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 02:03:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 02:05:15 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:07:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:07:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:08:13 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:09:42 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:11:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 02:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:12:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:15:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:15:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:19:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:19:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:19:50 --> Could not find the language line "products"
ERROR - 2024-04-18 02:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:27:43 --> Could not find the language line "Other"
ERROR - 2024-04-18 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:31:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 02:31:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 02:31:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 02:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:31:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:31:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:34:12 --> Could not find the language line "products"
ERROR - 2024-04-18 02:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:35:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 02:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:42:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:43:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 02:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:47:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 02:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:48:33 --> Could not find the language line "Home"
ERROR - 2024-04-18 02:51:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:51:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 02:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:51:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:51:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:53:22 --> Could not find the language line "products"
ERROR - 2024-04-18 02:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:55:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:55:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:55:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 02:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:57:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 02:59:48 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-18 02:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 02:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:07:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:07:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 03:07:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:11:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 03:11:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 03:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:11:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 03:11:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:11:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 03:12:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 03:14:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 03:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 03:14:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 03:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:19:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:19:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 03:19:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:19:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 03:22:51 --> Could not find the language line "Home"
ERROR - 2024-04-18 03:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:35:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:35:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:35:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:39:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:42:53 --> Could not find the language line "Home"
ERROR - 2024-04-18 03:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:49:49 --> Could not find the language line "products"
ERROR - 2024-04-18 03:50:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 03:51:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:55:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:55:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 03:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:56:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 03:56:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 03:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 03:57:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 03:57:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 03:57:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 03:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 03:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:03:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:06:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 04:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:07:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:13:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 04:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:18:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 04:19:35 --> Could not find the language line "Home"
ERROR - 2024-04-18 04:21:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 04:23:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:24:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 04:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:32:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:32:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:36:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:36:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:40:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:40:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:40:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 04:42:54 --> Could not find the language line "Home"
ERROR - 2024-04-18 04:43:21 --> Could not find the language line "Other"
ERROR - 2024-04-18 04:44:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:52:13 --> Could not find the language line "products"
ERROR - 2024-04-18 04:53:46 --> Could not find the language line "Home"
ERROR - 2024-04-18 04:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:56:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:56:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 04:56:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 04:56:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 05:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:08:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 05:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:12:57 --> Could not find the language line "Home"
ERROR - 2024-04-18 05:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:16:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:16:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:24:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-18 05:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 05:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 05:24:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 05:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:32:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:36:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:42:53 --> Could not find the language line "Home"
ERROR - 2024-04-18 05:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:48:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 05:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:56:08 --> 404 Page Not Found: Images/register.jpg
ERROR - 2024-04-18 05:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 05:59:09 --> Could not find the language line "Home"
ERROR - 2024-04-18 06:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:02:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 06:02:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 06:02:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 06:03:58 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 06:04:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:08:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:11:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 06:12:53 --> Could not find the language line "Home"
ERROR - 2024-04-18 06:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:16:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:16:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:19:58 --> Could not find the language line "products"
ERROR - 2024-04-18 06:20:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:20:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:24:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:24:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:28:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 06:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:36:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:36:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 06:38:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 06:40:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 06:40:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 06:40:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 06:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:42:15 --> Could not find the language line "Home"
ERROR - 2024-04-18 06:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:42:53 --> Could not find the language line "Home"
ERROR - 2024-04-18 06:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:48:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:48:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:48:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 06:48:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 06:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:50:38 --> Could not find the language line "0"
ERROR - 2024-04-18 06:52:14 --> Could not find the language line "Other"
ERROR - 2024-04-18 06:52:15 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 06:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 06:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:04:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:11:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 07:11:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 07:11:57 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:12:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:12:54 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:16:22 --> 404 Page Not Found: Images/register.jpg
ERROR - 2024-04-18 07:19:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 07:19:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 07:19:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 07:20:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:20:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:20:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:23:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 07:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:24:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:24:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:24:22 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:25:20 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:25:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:26:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:27:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:27:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:28:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:28:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:28:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:28:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:29:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:29:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 07:29:06 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:29:44 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:36:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:36:47 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:38:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:42:19 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:42:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:45:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 07:48:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:52:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 07:55:06 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 07:56:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 07:57:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:05:09 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:08:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 08:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:11:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 08:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:12:54 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:16:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:18:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:19:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-18 08:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:21:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 08:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:22:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:22:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:23:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 08:23:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:24:23 --> Could not find the language line "Perfume"
ERROR - 2024-04-18 08:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:27:31 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:28:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 08:28:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 08:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:34:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:34:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:34:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:34:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:35:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:35:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:35:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:35:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:18 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:36:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 08:36:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:37:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:37:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:37:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:37:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:37:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 08:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:40:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 08:42:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:46:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:49:42 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:53:38 --> Could not find the language line "Home"
ERROR - 2024-04-18 08:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 08:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:00:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:07:11 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:08:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 09:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:12:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:12:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:12:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:13:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 09:16:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 09:18:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:23:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 09:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:26:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 09:26:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 09:26:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 09:28:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:28:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:36:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:36:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:37:48 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:38:29 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:41:18 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:42:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:44:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 09:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:50:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 09:50:01 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:50:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 09:50:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 09:50:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 09:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:52:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 09:55:23 --> Could not find the language line "Home"
ERROR - 2024-04-18 09:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:00:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:04:34 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 10:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:08:34 --> Could not find the language line "Other"
ERROR - 2024-04-18 10:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:12:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 10:13:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 10:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:16:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:19:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 10:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 10:20:36 --> Could not find the language line "Other"
ERROR - 2024-04-18 10:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:20:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:21:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 10:21:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 10:21:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 10:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:24:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 10:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:24:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:24:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 10:28:36 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 10:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:32:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:32:44 --> Could not find the language line "Home"
ERROR - 2024-04-18 10:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:42:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 10:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:47:20 --> Could not find the language line "products"
ERROR - 2024-04-18 10:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:48:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 10:51:27 --> Could not find the language line "Home"
ERROR - 2024-04-18 10:52:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 10:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:57:36 --> Could not find the language line "products"
ERROR - 2024-04-18 10:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 10:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:02:18 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:02:50 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:02:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 11:02:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 11:02:59 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:12:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:12:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:14:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 11:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:22:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 11:23:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 11:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:24:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 11:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:24:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:24:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 11:24:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 11:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:32:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 11:34:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 11:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:40:48 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:42:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 11:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:47:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 11:51:28 --> Could not find the language line "products"
ERROR - 2024-04-18 11:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 11:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:00:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 12:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:00:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 12:00:47 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 12:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:00:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 12:04:57 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-04-18 12:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:12:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:16:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 12:18:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:19:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 12:23:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:27:46 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:28:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 12:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:32:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 12:35:17 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:36:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:36:08 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:36:38 --> Could not find the language line "accounts"
ERROR - 2024-04-18 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:36:48 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:39:33 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:42:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:48:11 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:48:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-18 12:48:51 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:49:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:49:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:49:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:49:51 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:50:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:50:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:50:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:09 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 12:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:51:19 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:56:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 12:57:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 12:57:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 12:57:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 12:58:15 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:59:04 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:59:08 --> Could not find the language line "Home"
ERROR - 2024-04-18 12:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 12:59:39 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:00:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 13:00:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 13:00:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 13:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 13:08:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 13:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 13:08:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 13:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:10:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 13:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 13:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 13:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 13:12:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 13:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:25:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 13:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:28:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 13:28:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 13:28:54 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:28:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 13:29:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:29:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:30:12 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:30:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:31:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 13:31:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 13:32:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 13:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:34:09 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:35:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:36:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 13:36:37 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:36:47 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-18 13:37:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:37:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:37:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:03 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:38:07 --> Could not find the language line "Perfume"
ERROR - 2024-04-18 13:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:11 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:38:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:30 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:38:35 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 13:38:45 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:38:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:38:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:39:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:39:17 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:39:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 13:39:31 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:39:37 --> Could not find the language line "Socks"
ERROR - 2024-04-18 13:39:52 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:39:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:39:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:40:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:40:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:42:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:44:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 13:44:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 13:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:44:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 13:45:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 13:45:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 13:45:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 13:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:48:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 13:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:52:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:52:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 13:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:53:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 13:53:43 --> Could not find the language line "Home"
ERROR - 2024-04-18 13:55:09 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:04:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:04:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 14:04:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 14:04:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 14:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:05:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:05:49 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:07:26 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:07:54 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:08:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 14:08:25 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:10:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:13:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:15:23 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:15:29 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 14:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:17:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:18:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:25:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 14:26:28 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:26:40 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 14:27:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-18 14:27:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 14:27:37 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:29:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:32:47 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 14:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:36:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:39:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 14:40:03 --> Could not find the language line "Other"
ERROR - 2024-04-18 14:41:15 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:42:58 --> Could not find the language line "Home"
ERROR - 2024-04-18 14:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:45:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:47:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:47:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:54 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:48:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 14:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:48:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 14:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:49:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 14:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:49:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:49:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 14:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:53:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:55:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-18 14:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:47 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 14:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 14:58:55 --> Could not find the language line "Bracelets"
ERROR - 2024-04-18 14:59:35 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:00:37 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:06:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:08:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-18 15:09:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:09:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:11:55 --> Could not find the language line "Other"
ERROR - 2024-04-18 15:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:14:21 --> Could not find the language line "Other"
ERROR - 2024-04-18 15:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:17:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:18:11 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:21:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:25:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:26:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 15:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 15:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:33:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:35:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 15:35:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:37:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:43:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:45:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 15:46:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-18 15:46:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 15:46:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 15:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:50:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 15:52:17 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:53:21 --> Could not find the language line "Home"
ERROR - 2024-04-18 15:54:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:58:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 15:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:02:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:03:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2024-04-18 16:03:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 16:03:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 16:03:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 16:07:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:07:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:11:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:11:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:13:01 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:15:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:15:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:15:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 16:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:17:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:20:35 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:20:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 16:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:22:33 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:23:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:24:16 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:24:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:24:42 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:24:49 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:25:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:25:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:26:06 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:26:16 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:26:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:26:30 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:26:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:26:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:26:51 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:26:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 16:26:59 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:27:15 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 16:27:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 16:27:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 16:27:37 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:29:13 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:38:25 --> Could not find the language line "Socks"
ERROR - 2024-04-18 16:38:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:38:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:39:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:39:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:39:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:39:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:39:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:40:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 16:40:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:43:01 --> Could not find the language line "Home"
ERROR - 2024-04-18 16:44:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:45:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 16:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:53:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 16:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 16:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:01:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 17:02:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:05:29 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:05:31 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:05:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:05:59 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:07:44 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:08:59 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:09:16 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:09:23 --> Could not find the language line "Socks"
ERROR - 2024-04-18 17:09:35 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:09:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:11:14 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:11:25 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:11:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:11:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:11:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:11:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:12:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:12:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:12:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:13:00 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:13:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:13:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 17:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:13:41 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:13:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:13:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 17:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:18:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:18:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:21:20 --> Could not find the language line "products"
ERROR - 2024-04-18 17:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:25:48 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:26:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:26:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 17:26:27 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:26:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:27:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:27:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:27:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 17:28:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:28:49 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:28:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:29:18 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:29:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:29:34 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:30:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:43:00 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 17:43:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:43:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 17:43:14 --> Could not find the language line "Home"
ERROR - 2024-04-18 17:47:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 17:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:47:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:47:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:51:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 17:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 17:58:29 --> Could not find the language line "accounting"
ERROR - 2024-04-18 17:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:03:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:05:00 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-18 18:06:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 18:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:09:12 --> Could not find the language line "products"
ERROR - 2024-04-18 18:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:13:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:13:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:19:15 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:19:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:20:07 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:20:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:20:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:21:27 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-04-18 18:21:27 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-04-18 18:21:27 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-18 18:21:27 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-18 18:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:23:53 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:23:56 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:24:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:06 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:06 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:08 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:24:39 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:24:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:24:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:25:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:26:51 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:26:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:27:30 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:28:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 18:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:28:31 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:29:32 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:30:29 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:30:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:32:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:32:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:33:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:34:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:34:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:34:50 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 18:34:52 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:35:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 18:35:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 18:35:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 18:35:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 18:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:37:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:43:03 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:43:40 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:43:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 18:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 18:43:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 18:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:48:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 18:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:49:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:50:21 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:51:46 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:53:20 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:56:13 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:58:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 18:59:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-18 18:59:04 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 18:59:22 --> Could not find the language line "Home"
ERROR - 2024-04-18 18:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:00:55 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:06:41 --> Could not find the language line "Socks"
ERROR - 2024-04-18 19:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:10:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:12:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 19:12:10 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:13:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:14:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:18:40 --> Could not find the language line "Socks"
ERROR - 2024-04-18 19:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:31:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 19:31:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 19:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:35:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:36:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 19:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:36:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 19:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:38:45 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:39:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 19:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:43:04 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:43:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:43:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:43:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:48:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 19:48:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 19:48:31 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:51:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 19:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:53:59 --> Could not find the language line "Home"
ERROR - 2024-04-18 19:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 19:57:33 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 19:59:24 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:00:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:01:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 20:01:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 20:01:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 20:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:08:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 20:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:09:05 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:10:24 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:13:03 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:16:02 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:22:45 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:23:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 20:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:25:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 20:26:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 20:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:28:05 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 20:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:31:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 20:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:33:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:33:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:33:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 20:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:38:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:42:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:42:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:42:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 20:43:03 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:43:11 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 20:44:12 --> Could not find the language line "Home"
ERROR - 2024-04-18 20:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:48:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 20:50:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-18 20:54:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 20:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 20:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:13:06 --> Could not find the language line "Home"
ERROR - 2024-04-18 21:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:17:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 21:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 21:17:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 21:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:23:51 --> Could not find the language line "Home"
ERROR - 2024-04-18 21:23:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 21:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:23:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 21:25:09 --> Could not find the language line "Home"
ERROR - 2024-04-18 21:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:31:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 21:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:32:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 21:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:43:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 21:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:44:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 21:46:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-18 21:48:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-04-18 21:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:56:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 21:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 21:56:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 21:56:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 21:58:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 22:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:00:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:03:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:06:47 --> Could not find the language line "assets"
ERROR - 2024-04-18 22:06:47 --> Could not find the language line "assets"
ERROR - 2024-04-18 22:06:47 --> Could not find the language line "assets"
ERROR - 2024-04-18 22:06:47 --> Could not find the language line "assets"
ERROR - 2024-04-18 22:06:47 --> Could not find the language line "assets"
ERROR - 2024-04-18 22:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:13:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 22:13:17 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-04-18 22:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 22:13:17 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2024-04-18 22:13:17 --> 404 Page Not Found: Sitemap-indexxml/index
ERROR - 2024-04-18 22:13:17 --> 404 Page Not Found: Sitemapphp/index
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemap/index
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemap/sitemap.xml
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemapindexxml/index
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemap/index.xml
ERROR - 2024-04-18 22:13:18 --> 404 Page Not Found: Sitemap1xml/index
ERROR - 2024-04-18 22:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:15:18 --> Could not find the language line "products"
ERROR - 2024-04-18 22:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:28:27 --> Could not find the language line "Home"
ERROR - 2024-04-18 22:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:32:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:32:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:32:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 22:36:29 --> 404 Page Not Found: Z0f76a1d14fd21a8fb5fd0d03e0fdc3d3cedae52f/index
ERROR - 2024-04-18 22:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:40:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 22:40:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 22:40:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 22:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:40:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:43:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 22:43:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 22:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:44:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 22:44:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 22:44:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 22:44:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 22:44:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 22:44:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:48:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:48:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:52:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:52:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 22:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 22:57:46 --> Could not find the language line "products"
ERROR - 2024-04-18 22:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:08:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:13:07 --> Could not find the language line "Home"
ERROR - 2024-04-18 23:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:16:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:19:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 23:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:20:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:20:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:24:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 23:24:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-18 23:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:24:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:24:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:28:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-18 23:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 23:28:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 23:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:32:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-18 23:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-18 23:32:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 23:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:32:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:32:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 23:34:37 --> Could not find the language line "Home"
ERROR - 2024-04-18 23:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:36:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:43:21 --> Could not find the language line "Home"
ERROR - 2024-04-18 23:44:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-18 23:44:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-18 23:44:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-18 23:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:48:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:48:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:48:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:48:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:48:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-18 23:49:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-18 23:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:52:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-18 23:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-18 23:56:39 --> 404 Page Not Found: Assets/css
