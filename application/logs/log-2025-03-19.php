<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-03-19 00:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-19 00:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-19 00:04:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 00:07:01 --> Could not find the language line "Home"
ERROR - 2025-03-19 00:15:33 --> 404 Page Not Found: Git/config
ERROR - 2025-03-19 00:17:28 --> Could not find the language line "Clothing"
ERROR - 2025-03-19 00:19:58 --> Could not find the language line "Home"
ERROR - 2025-03-19 00:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 00:32:55 --> Could not find the language line "Other"
ERROR - 2025-03-19 00:33:23 --> Could not find the language line "Home"
ERROR - 2025-03-19 00:49:58 --> Could not find the language line "Home"
ERROR - 2025-03-19 00:53:35 --> Could not find the language line "Home"
ERROR - 2025-03-19 00:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 00:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 00:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 00:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 00:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:14:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-19 01:20:04 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:40:39 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:40:49 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:40:50 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:40:56 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:41:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:50:08 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:50:38 --> Could not find the language line "Home"
ERROR - 2025-03-19 01:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 01:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:05:37 --> Could not find the language line "Home"
ERROR - 2025-03-19 02:05:43 --> Could not find the language line "Home"
ERROR - 2025-03-19 02:06:48 --> Could not find the language line "Home"
ERROR - 2025-03-19 02:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:20:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 02:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 02:29:31 --> Could not find the language line "Home"
ERROR - 2025-03-19 02:50:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:19:58 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:21:52 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 03:45:07 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-19 03:45:07 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:45:08 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-19 03:45:08 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-19 03:45:08 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-19 03:45:10 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-19 03:45:11 --> 404 Page Not Found: New/index
ERROR - 2025-03-19 03:45:11 --> 404 Page Not Found: Main/index
ERROR - 2025-03-19 03:45:11 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 03:51:53 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:19:59 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:27:45 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:46:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-19 04:46:41 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:54:15 --> Could not find the language line "Home"
ERROR - 2025-03-19 04:54:18 --> Could not find the language line "Other"
ERROR - 2025-03-19 04:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 05:09:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-19 05:14:15 --> Could not find the language line "Home"
ERROR - 2025-03-19 05:16:18 --> Could not find the language line "Home"
ERROR - 2025-03-19 05:20:02 --> Could not find the language line "Home"
ERROR - 2025-03-19 05:23:23 --> Could not find the language line "Home"
ERROR - 2025-03-19 05:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 05:56:52 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 06:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 06:19:59 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:26:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:30:21 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:31:32 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:34:57 --> Could not find the language line "Clothing"
ERROR - 2025-03-19 06:34:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-03-19 06:50:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 06:55:15 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:24 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:35 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:41 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:47 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:49 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:07:49 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:09:32 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:17:45 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:19:55 --> 404 Page Not Found: Media/system
ERROR - 2025-03-19 07:19:56 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-03-19 07:19:59 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:23:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-19 07:25:26 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 07:25:47 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-19 07:32:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:46:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 07:48:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 07:50:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 08:07:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-19 08:10:12 --> Could not find the language line "Home"
ERROR - 2025-03-19 08:10:30 --> Could not find the language line "Home"
ERROR - 2025-03-19 08:20:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 08:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 08:50:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:11:14 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:20:01 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:35:53 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 09:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 09:46:51 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:46:58 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:47:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:47:07 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:47:10 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:47:22 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:50:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:52:24 --> Could not find the language line "Home"
ERROR - 2025-03-19 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 09:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 10:08:59 --> Could not find the language line "Home"
ERROR - 2025-03-19 10:09:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 10:09:37 --> Could not find the language line "Home"
ERROR - 2025-03-19 10:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 10:14:29 --> Could not find the language line "Disclaimer"
ERROR - 2025-03-19 10:20:02 --> Could not find the language line "Home"
ERROR - 2025-03-19 10:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 10:47:53 --> Could not find the language line "Home"
ERROR - 2025-03-19 10:50:01 --> Could not find the language line "Home"
ERROR - 2025-03-19 11:01:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 11:01:56 --> Could not find the language line "Clothing"
ERROR - 2025-03-19 11:01:57 --> Could not find the language line "Home"
ERROR - 2025-03-19 11:05:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-19 11:11:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-19 11:11:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-19 11:12:53 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-19 11:14:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-03-19 11:20:05 --> Could not find the language line "Home"
ERROR - 2025-03-19 11:24:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-19 11:29:50 --> Could not find the language line "Home"
ERROR - 2025-03-19 11:30:58 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-19 11:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 11:50:02 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:04:13 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:04:17 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:06:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-03-19 12:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-19 12:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 12:07:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-19 12:08:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-03-19 12:17:01 --> 404 Page Not Found: Users/accounts
ERROR - 2025-03-19 12:17:19 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:20:05 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:23:58 --> Could not find the language line "Clothing"
ERROR - 2025-03-19 12:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 12:27:25 --> Could not find the language line "Home"
ERROR - 2025-03-19 12:28:24 --> 404 Page Not Found: Users/products
ERROR - 2025-03-19 12:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 12:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 13:05:02 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:18:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-03-19 13:20:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:29:43 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:37:39 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:39:44 --> Could not find the language line "Home"
ERROR - 2025-03-19 13:50:04 --> Could not find the language line "Home"
ERROR - 2025-03-19 14:08:48 --> Could not find the language line "Home"
ERROR - 2025-03-19 14:20:04 --> Could not find the language line "Home"
ERROR - 2025-03-19 14:37:57 --> Could not find the language line "Home"
ERROR - 2025-03-19 14:50:04 --> Could not find the language line "Home"
ERROR - 2025-03-19 14:54:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-19 15:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:16:23 --> Could not find the language line "Home"
ERROR - 2025-03-19 15:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:18:04 --> 404 Page Not Found: Assets/lib
ERROR - 2025-03-19 15:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:20:05 --> Could not find the language line "Home"
ERROR - 2025-03-19 15:29:18 --> Could not find the language line "Home"
ERROR - 2025-03-19 15:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 15:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 15:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:06:06 --> Could not find the language line "Socks"
ERROR - 2025-03-19 16:10:54 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-03-19 16:10:55 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:10:55 --> 404 Page Not Found: Wp/index
ERROR - 2025-03-19 16:10:55 --> 404 Page Not Found: Bc/index
ERROR - 2025-03-19 16:10:55 --> 404 Page Not Found: Bk/index
ERROR - 2025-03-19 16:10:55 --> 404 Page Not Found: Backup/index
ERROR - 2025-03-19 16:10:56 --> 404 Page Not Found: New/index
ERROR - 2025-03-19 16:10:56 --> 404 Page Not Found: Main/index
ERROR - 2025-03-19 16:10:56 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:16:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-19 16:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-19 16:16:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 16:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:20:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:21:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-03-19 16:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-03-19 16:21:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 16:22:22 --> Could not find the language line "Socks"
ERROR - 2025-03-19 16:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:36:56 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:37:08 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:39:05 --> Could not find the language line "Home"
ERROR - 2025-03-19 16:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 16:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 17:11:51 --> Could not find the language line "Home"
ERROR - 2025-03-19 17:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:20:05 --> Could not find the language line "Home"
ERROR - 2025-03-19 17:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:28:03 --> Could not find the language line "Home"
ERROR - 2025-03-19 17:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 17:50:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 17:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:01:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-03-19 18:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:03:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:05:27 --> Could not find the language line "Home"
ERROR - 2025-03-19 18:08:48 --> Could not find the language line "Home"
ERROR - 2025-03-19 18:20:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 18:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:21:47 --> Could not find the language line "Home"
ERROR - 2025-03-19 18:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:25:58 --> Could not find the language line "Home"
ERROR - 2025-03-19 18:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 18:50:08 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:02:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-19 19:07:21 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:20:07 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:22:35 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:29:44 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:29:47 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:29:49 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:30:00 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:30:04 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:37:38 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:39:38 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 19:50:08 --> Could not find the language line "Home"
ERROR - 2025-03-19 19:56:32 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:07:24 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:10:29 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-03-19 20:14:47 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-03-19 20:15:01 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:20:07 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:20:40 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:24:10 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-03-19 20:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:30:46 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 20:37:31 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:42:17 --> Could not find the language line "Home"
ERROR - 2025-03-19 20:43:35 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-03-19 20:43:35 --> Unable to connect to the database
ERROR - 2025-03-19 20:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 20:43:37 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-03-19 20:43:37 --> Unable to connect to the database
ERROR - 2025-03-19 20:43:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 20:44:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-03-19 20:44:20 --> Unable to connect to the database
ERROR - 2025-03-19 20:44:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 20:44:52 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-03-19 20:44:52 --> Unable to connect to the database
ERROR - 2025-03-19 20:44:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 20:45:21 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2025-03-19 20:45:21 --> Unable to connect to the database
ERROR - 2025-03-19 20:45:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-03-19 20:50:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-03-19 21:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 21:11:29 --> Could not find the language line "Bracelets"
ERROR - 2025-03-19 21:11:29 --> Could not find the language line "Bracelets"
ERROR - 2025-03-19 21:12:10 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:15:25 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:17:06 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:17:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-19 21:17:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-03-19 21:17:20 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:20:05 --> Could not find the language line "Other"
ERROR - 2025-03-19 21:25:15 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:28:04 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-03-19 21:28:04 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-03-19 21:41:27 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:42:09 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:48:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-03-19 21:48:48 --> Could not find the language line "Home"
ERROR - 2025-03-19 21:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 21:53:09 --> Could not find the language line "Home"
ERROR - 2025-03-19 22:12:10 --> Could not find the language line "Home"
ERROR - 2025-03-19 22:42:41 --> Could not find the language line "Home"
ERROR - 2025-03-19 22:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:53:53 --> Could not find the language line "Home"
ERROR - 2025-03-19 22:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 22:58:37 --> Could not find the language line "Home"
ERROR - 2025-03-19 23:12:26 --> Could not find the language line "Home"
ERROR - 2025-03-19 23:40:14 --> Could not find the language line "Home"
ERROR - 2025-03-19 23:42:22 --> Could not find the language line "Home"
ERROR - 2025-03-19 23:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 23:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-03-19 23:53:38 --> Could not find the language line "Home"
