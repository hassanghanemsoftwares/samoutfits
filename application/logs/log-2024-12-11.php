<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-11 00:00:58 --> Could not find the language line "Home"
ERROR - 2024-12-11 00:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-11 00:17:14 --> Could not find the language line "Home"
ERROR - 2024-12-11 00:47:14 --> Could not find the language line "Home"
ERROR - 2024-12-11 01:17:27 --> Could not find the language line "Home"
ERROR - 2024-12-11 01:47:25 --> Could not find the language line "Home"
ERROR - 2024-12-11 01:56:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 01:56:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 01:57:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 01:58:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 01:59:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 02:01:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 02:02:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 02:02:43 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 02:17:14 --> Could not find the language line "Home"
ERROR - 2024-12-11 02:32:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 02:47:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 02:58:50 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:17:16 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:20:31 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:23:32 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:24:38 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:25:46 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:26:52 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:27:58 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:31:57 --> Could not find the language line "Home"
ERROR - 2024-12-11 03:32:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-11 03:37:08 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-11 03:43:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-11 03:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-11 03:43:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-11 03:47:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:06:02 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 04:19:43 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:23:47 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:26:51 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:32:46 --> Could not find the language line "Home"
ERROR - 2024-12-11 04:37:47 --> Could not find the language line "Other"
ERROR - 2024-12-11 04:38:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-11 04:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-11 04:38:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-11 04:47:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:13:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 05:17:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:18:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-11 05:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 05:47:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:50:46 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:54:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-11 05:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 05:54:40 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:54:40 --> Could not find the language line "Home"
ERROR - 2024-12-11 05:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 06:17:14 --> Could not find the language line "Home"
ERROR - 2024-12-11 06:31:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 06:47:15 --> Could not find the language line "Home"
ERROR - 2024-12-11 06:58:23 --> Could not find the language line "Home"
ERROR - 2024-12-11 06:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 06:59:21 --> Could not find the language line "Home"
ERROR - 2024-12-11 06:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:02:34 --> Could not find the language line "Home"
ERROR - 2024-12-11 07:08:23 --> Could not find the language line "Home"
ERROR - 2024-12-11 07:08:23 --> Could not find the language line "Home"
ERROR - 2024-12-11 07:17:16 --> Could not find the language line "Home"
ERROR - 2024-12-11 07:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 07:42:48 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 07:47:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:17:16 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:22:55 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:24:43 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:24:45 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:47:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 08:52:42 --> Could not find the language line "Home"
ERROR - 2024-12-11 09:06:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 09:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:07:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 09:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:08:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:17:16 --> Could not find the language line "Home"
ERROR - 2024-12-11 09:25:22 --> Could not find the language line "Home"
ERROR - 2024-12-11 09:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 09:41:32 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 09:46:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-11 09:46:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-12-11 09:46:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-11 09:47:11 --> Could not find the language line "Other"
ERROR - 2024-12-11 09:47:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 09:47:30 --> Could not find the language line "Home"
ERROR - 2024-12-11 09:57:57 --> Could not find the language line "Home"
ERROR - 2024-12-11 10:13:27 --> Could not find the language line "Home"
ERROR - 2024-12-11 10:17:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 10:23:01 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-11 10:23:14 --> Could not find the language line "Home"
ERROR - 2024-12-11 10:38:47 --> Could not find the language line "Home"
ERROR - 2024-12-11 10:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 10:47:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:02:29 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:35 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:03:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-11 11:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-11 11:03:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-12-11 11:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-11 11:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-11 11:03:38 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-12-11 11:03:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Assets/img
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Assets/img
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:03:39 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-12-11 11:06:35 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:12:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 11:17:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:33:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 11:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:40:19 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:47:17 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:47:34 --> Could not find the language line "Perfume"
ERROR - 2024-12-11 11:48:09 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:48:51 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:49:54 --> Could not find the language line "Home"
ERROR - 2024-12-11 11:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 11:57:49 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:01:58 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:17:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:26:34 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:32:39 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:47:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:48:52 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:50:55 --> Could not find the language line "Home"
ERROR - 2024-12-11 12:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 12:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 12:54:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-12-11 12:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 12:58:55 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:08:53 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 13:17:18 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:36:05 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:36:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-11 13:36:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-11 13:36:43 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-11 13:36:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-11 13:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 13:47:06 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:47:19 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 13:49:11 --> Could not find the language line "Home"
ERROR - 2024-12-11 13:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 13:57:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 13:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 13:58:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-11 14:07:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 14:07:10 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:07:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 14:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 14:07:36 --> Could not find the language line "Socks"
ERROR - 2024-12-11 14:17:19 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 14:17:40 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:22:23 --> Could not find the language line "Socks"
ERROR - 2024-12-11 14:47:19 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:53:07 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:54:09 --> Could not find the language line "Home"
ERROR - 2024-12-11 14:57:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-11 15:17:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 15:27:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:28:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 15:29:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:32:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 15:32:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 15:34:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-11 15:43:34 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:43:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:43:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 15:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 15:47:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 16:17:20 --> Could not find the language line "Home"
ERROR - 2024-12-11 16:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 16:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 16:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 16:42:01 --> Could not find the language line "Home"
ERROR - 2024-12-11 16:47:22 --> Could not find the language line "Home"
ERROR - 2024-12-11 16:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 17:17:21 --> Could not find the language line "Home"
ERROR - 2024-12-11 17:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 17:47:21 --> Could not find the language line "Home"
ERROR - 2024-12-11 17:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 18:08:03 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 18:17:21 --> Could not find the language line "Home"
ERROR - 2024-12-11 18:47:21 --> Could not find the language line "Home"
ERROR - 2024-12-11 19:17:24 --> Could not find the language line "Home"
ERROR - 2024-12-11 19:17:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 19:47:22 --> Could not find the language line "Home"
ERROR - 2024-12-11 19:51:40 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:02:42 --> Could not find the language line "Other"
ERROR - 2024-12-11 20:06:45 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:06:51 --> Could not find the language line "Perfume"
ERROR - 2024-12-11 20:06:52 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:06:55 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:07:00 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:07:12 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 20:07:16 --> Could not find the language line "Clothing"
ERROR - 2024-12-11 20:10:24 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:12:38 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:15:26 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:17:22 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:17:37 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:20:46 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:45:11 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:45:19 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:45:45 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:46:10 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-11 20:46:10 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-12-11 20:46:10 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-12-11 20:46:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-11 20:46:12 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-11 20:46:24 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2024-12-11 20:46:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-11 20:46:30 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-12-11 20:46:31 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-12-11 20:47:22 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:47:54 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:49:19 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:49:36 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:49:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-11 20:56:08 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:56:13 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:57:26 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:57:32 --> Could not find the language line "Home"
ERROR - 2024-12-11 20:57:39 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:57:46 --> Could not find the language line "Socks"
ERROR - 2024-12-11 20:57:48 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 21:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 21:04:50 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:14:13 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:16:51 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:17:24 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:18:37 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:23:38 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:37:40 --> Could not find the language line "Home"
ERROR - 2024-12-11 21:47:23 --> Could not find the language line "Home"
ERROR - 2024-12-11 22:00:29 --> Could not find the language line "Home"
ERROR - 2024-12-11 22:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 22:16:06 --> Could not find the language line "Home"
ERROR - 2024-12-11 22:16:07 --> Could not find the language line "Home"
ERROR - 2024-12-11 22:17:24 --> Could not find the language line "Home"
ERROR - 2024-12-11 22:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 22:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 22:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 22:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 22:47:26 --> Could not find the language line "Home"
ERROR - 2024-12-11 23:09:54 --> Could not find the language line "Home"
ERROR - 2024-12-11 23:09:54 --> Could not find the language line "Home"
ERROR - 2024-12-11 23:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-11 23:17:15 --> Could not find the language line "Home"
ERROR - 2024-12-11 23:17:28 --> Could not find the language line "Home"
ERROR - 2024-12-11 23:47:39 --> Could not find the language line "Home"
