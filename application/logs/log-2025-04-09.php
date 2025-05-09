<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-09 00:17:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:21:10 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:29:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-09 00:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:37:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 00:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:38:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 00:39:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 00:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:39:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 00:39:50 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:40:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 00:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 00:47:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:53:21 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:53:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 00:53:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 00:57:12 --> Could not find the language line "Home"
ERROR - 2025-04-09 00:58:26 --> Could not find the language line "Home"
ERROR - 2025-04-09 01:02:53 --> Could not find the language line "Home"
ERROR - 2025-04-09 01:17:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 01:47:13 --> Could not find the language line "Home"
ERROR - 2025-04-09 01:48:00 --> Could not find the language line "Home"
ERROR - 2025-04-09 01:53:08 --> 404 Page Not Found: Users/users
ERROR - 2025-04-09 02:01:03 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 02:01:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 02:01:04 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 02:01:04 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 02:01:04 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 02:01:04 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 02:01:05 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 02:01:05 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 02:01:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 02:08:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 02:14:02 --> 404 Page Not Found: Home/users
ERROR - 2025-04-09 02:17:13 --> Could not find the language line "Home"
ERROR - 2025-04-09 02:25:09 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-09 02:35:47 --> 404 Page Not Found: Users/users
ERROR - 2025-04-09 02:36:50 --> Could not find the language line "Socks"
ERROR - 2025-04-09 02:43:15 --> 404 Page Not Found: Home/users
ERROR - 2025-04-09 02:47:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 02:55:57 --> Could not find the language line "Home"
ERROR - 2025-04-09 02:56:37 --> 404 Page Not Found: Users/home
ERROR - 2025-04-09 03:03:49 --> 404 Page Not Found: Users/products
ERROR - 2025-04-09 03:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 03:11:49 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 03:11:50 --> Could not find the language line "Home"
ERROR - 2025-04-09 03:11:50 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 03:11:50 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 03:11:50 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 03:11:50 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 03:11:51 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 03:11:51 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 03:11:51 --> Could not find the language line "Home"
ERROR - 2025-04-09 03:17:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 03:17:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-09 03:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-09 03:17:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-09 03:46:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-09 03:46:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-09 03:46:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-09 03:46:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 03:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 04:02:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-09 04:02:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:17:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:19:14 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 04:34:25 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:35:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 04:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 04:42:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-09 04:42:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-09 04:42:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-09 04:46:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:49:53 --> Could not find the language line "Home"
ERROR - 2025-04-09 04:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 04:56:55 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:02:53 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:13:47 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:17:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:17:17 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:21:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 05:27:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 05:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 05:45:39 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:46:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:50:29 --> Could not find the language line "Home"
ERROR - 2025-04-09 05:58:08 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:14:54 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:16:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:32:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:38:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 06:46:57 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:09 --> Could not find the language line "Home"
ERROR - 2025-04-09 06:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 06:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:54:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-09 06:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 06:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:13:41 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:17:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:26:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 07:27:38 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:29:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:35:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 07:35:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 07:35:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 07:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:36:58 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-09 07:37:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 07:37:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 07:37:46 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:46:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:56:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 07:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 07:59:47 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:09:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 08:14:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:14:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:14:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:14:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:16:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:18:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 08:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 08:26:48 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 08:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 08:30:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:30:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:30:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 08:31:14 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 08:46:49 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:46:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:53:30 --> Could not find the language line "Home"
ERROR - 2025-04-09 08:56:44 --> Could not find the language line "products"
ERROR - 2025-04-09 09:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-09 09:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 09:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:09:34 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:13:08 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:16:57 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:17:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:17:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:21:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 09:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:29:14 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 09:36:08 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:42:57 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:46:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:56:21 --> Could not find the language line "Home"
ERROR - 2025-04-09 09:56:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 09:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:09:23 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:09:29 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:11:47 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:13:37 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:16:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:18:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:18:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:20:54 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:21:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:21:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:21:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:22:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2025-04-09 10:22:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2025-04-09 10:22:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-09 10:22:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-09 10:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:22:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:22:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:22:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 10:22:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:23:05 --> Could not find the language line "Other"
ERROR - 2025-04-09 10:23:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:23:37 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:23:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:24:01 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:24:14 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:24:28 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 10:24:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-09 10:24:47 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-09 10:25:07 --> Could not find the language line "Perfume"
ERROR - 2025-04-09 10:26:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 10:26:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 10:26:19 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 10:27:51 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-09 10:28:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 10:40:19 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:40:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:46:29 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 10:46:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:49:35 --> Could not find the language line "Other"
ERROR - 2025-04-09 10:50:51 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:53:55 --> Could not find the language line "Home"
ERROR - 2025-04-09 10:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 10:55:55 --> Could not find the language line "Other"
ERROR - 2025-04-09 10:56:02 --> Could not find the language line "Other"
ERROR - 2025-04-09 10:59:49 --> Could not find the language line "Other"
ERROR - 2025-04-09 11:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 11:03:24 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:05:38 --> Could not find the language line "Other"
ERROR - 2025-04-09 11:12:41 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:16:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:17:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 11:17:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 11:20:30 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:28:23 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:32:06 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 11:32:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:32:07 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 11:32:07 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 11:32:07 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 11:32:08 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 11:32:08 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 11:32:08 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 11:32:09 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 11:46:34 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:46:59 --> Could not find the language line "Home"
ERROR - 2025-04-09 11:53:26 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:02:43 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:06:09 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:08:25 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:17:00 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:17:52 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:19:09 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:28:20 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 12:28:20 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:28:21 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 12:28:21 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 12:28:21 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 12:28:21 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 12:28:22 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 12:28:22 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 12:28:22 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:36:22 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 12:42:28 --> Could not find the language line "accounts"
ERROR - 2025-04-09 12:44:06 --> Could not find the language line "Socks"
ERROR - 2025-04-09 12:45:06 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:46:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:46:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:47:00 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:51:42 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:51:59 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 12:54:00 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:55:32 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:55:34 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:58:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-09 12:58:44 --> Could not find the language line "Home"
ERROR - 2025-04-09 12:59:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 13:02:26 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:07:45 --> Could not find the language line "Socks"
ERROR - 2025-04-09 13:10:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-09 13:10:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 13:11:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 13:11:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 13:12:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-09 13:17:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:24:29 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:24:29 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:26:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:27:01 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 13:27:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 13:27:23 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 13:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 13:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 13:41:17 --> Could not find the language line "hats"
ERROR - 2025-04-09 13:43:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:47:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:50:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:50:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 13:51:43 --> Could not find the language line "Home"
ERROR - 2025-04-09 13:54:23 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:54:46 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:55:03 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:55:33 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:55:47 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:55:54 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 13:57:09 --> Could not find the language line "Socks"
ERROR - 2025-04-09 14:07:10 --> Could not find the language line "accounts"
ERROR - 2025-04-09 14:11:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 14:11:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 14:13:40 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 14:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:17:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:19:11 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 14:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:22:39 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:34:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:35:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 146
ERROR - 2025-04-09 14:35:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'users'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-04-09 14:35:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-04-09 14:37:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:40:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 14:41:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:47:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:49:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:50:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:53:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:53:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:53:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 14:55:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 14:58:06 --> Could not find the language line "Home"
ERROR - 2025-04-09 14:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:13:39 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:14:30 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:16:45 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:17:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:17:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:18:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:30:50 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:31:53 --> Could not find the language line "Other"
ERROR - 2025-04-09 15:32:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 15:39:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 15:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:47:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 15:52:18 --> Could not find the language line "Home"
ERROR - 2025-04-09 15:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 16:04:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:17:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:19:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 16:45:49 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:46:52 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-04-09 16:46:52 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-04-09 16:46:52 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-04-09 16:46:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 16:46:54 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-09 16:47:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:47:16 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-04-09 16:47:23 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-04-09 16:48:47 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:49:43 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:50:31 --> Could not find the language line "Home"
ERROR - 2025-04-09 16:50:32 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-09 16:56:21 --> Could not find the language line "Home"
ERROR - 2025-04-09 17:03:46 --> Could not find the language line "Home"
ERROR - 2025-04-09 17:08:10 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 17:17:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 17:18:31 --> Could not find the language line "Home"
ERROR - 2025-04-09 17:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 17:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 17:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-09 17:47:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 17:50:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 17:59:59 --> Could not find the language line "Other"
ERROR - 2025-04-09 18:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 18:11:52 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 18:17:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 18:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 18:26:36 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:31:56 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:33:31 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 18:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 18:46:47 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:47:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:49:23 --> Could not find the language line "Home"
ERROR - 2025-04-09 18:49:35 --> Could not find the language line "users"
ERROR - 2025-04-09 18:59:54 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:04:33 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:09:28 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:11:49 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:15:30 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:17:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:21:10 --> 404 Page Not Found: Users/products
ERROR - 2025-04-09 19:22:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:25:49 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 19:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 19:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 19:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 19:47:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:47:35 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:47:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:47:42 --> Could not find the language line "Socks"
ERROR - 2025-04-09 19:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 19:48:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 19:48:19 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-09 19:48:24 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:48:35 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:49:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:49:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:50:10 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:50:43 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 19:50:52 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:50:54 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:51:13 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:51:53 --> Could not find the language line "Perfume"
ERROR - 2025-04-09 19:51:55 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:52:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-09 19:52:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:52:09 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:52:22 --> Could not find the language line "users"
ERROR - 2025-04-09 19:52:35 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:52:44 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:52:53 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:52:55 --> Could not find the language line "Other"
ERROR - 2025-04-09 19:53:16 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:53:18 --> Could not find the language line "Clothing"
ERROR - 2025-04-09 19:53:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 19:53:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 19:55:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-09 19:59:01 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-09 19:59:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:59:01 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:59:02 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:59:17 --> Could not find the language line "Home"
ERROR - 2025-04-09 19:59:22 --> Could not find the language line "Home"
ERROR - 2025-04-09 20:00:35 --> Could not find the language line "Home"
ERROR - 2025-04-09 20:02:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 20:02:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-09 20:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 20:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 20:17:05 --> Could not find the language line "Home"
ERROR - 2025-04-09 20:37:48 --> Could not find the language line "Home"
ERROR - 2025-04-09 20:47:04 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:01:16 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 21:01:17 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:01:17 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 21:01:17 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 21:01:17 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 21:01:18 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 21:01:18 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 21:01:18 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 21:01:18 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:03:27 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:10:15 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:12:40 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:17:08 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:17:39 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:18:02 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:18:21 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:17 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:21 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:26 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:39 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:43 --> Could not find the language line "Sunglasses"
ERROR - 2025-04-09 21:20:54 --> Could not find the language line "Other"
ERROR - 2025-04-09 21:21:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:21:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:21:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:21:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:21:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:21:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:21:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-04-09 21:32:29 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:42:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 21:47:06 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:51:38 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-09 21:51:38 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:51:38 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-09 21:51:39 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-09 21:51:39 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-09 21:51:39 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-09 21:51:39 --> 404 Page Not Found: New/index
ERROR - 2025-04-09 21:51:40 --> 404 Page Not Found: Main/index
ERROR - 2025-04-09 21:51:40 --> Could not find the language line "Home"
ERROR - 2025-04-09 21:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:55:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:55:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:55:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:55:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:56:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 21:56:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:56:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:57:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 21:57:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 21:57:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-09 22:00:32 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:00:32 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:00:33 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:00:33 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-09 22:00:34 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-09 22:00:34 --> 404 Page Not Found: Assets/mail
ERROR - 2025-04-09 22:00:35 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:00:35 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:00:36 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:00:36 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:00:37 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:00:37 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:00:38 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:00:38 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:00:38 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-09 22:05:55 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:05:56 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:05:56 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:05:58 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:05:59 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:05:59 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:06:03 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:06:04 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:06:04 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:06:08 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:06:08 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:06:08 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:06:10 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:06:11 --> 404 Page Not Found: App/index
ERROR - 2025-04-09 22:06:11 --> 404 Page Not Found: Login/index
ERROR - 2025-04-09 22:13:38 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:17:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:19:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 22:19:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-09 22:23:52 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 22:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 22:33:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-09 22:47:13 --> Could not find the language line "Home"
ERROR - 2025-04-09 22:56:23 --> Could not find the language line "Home"
ERROR - 2025-04-09 23:17:07 --> Could not find the language line "Home"
ERROR - 2025-04-09 23:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-09 23:43:52 --> Could not find the language line "Home"
ERROR - 2025-04-09 23:43:52 --> Could not find the language line "Home"
ERROR - 2025-04-09 23:47:11 --> Could not find the language line "Home"
