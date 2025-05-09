<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-28 00:00:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:01:59 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:02:00 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:05:12 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:06:24 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:06:24 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-28 00:06:24 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:14:03 --> Could not find the language line "Home"
ERROR - 2024-11-28 00:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-28 00:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 00:44:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 01:14:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 01:44:21 --> Could not find the language line "Home"
ERROR - 2024-11-28 01:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 01:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 01:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 01:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 01:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 02:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 02:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 02:14:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 02:28:15 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 02:28:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 02:28:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 02:29:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 02:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 02:44:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 02:56:51 --> Could not find the language line "products"
ERROR - 2024-11-28 03:14:02 --> Could not find the language line "Home"
ERROR - 2024-11-28 03:15:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-28 03:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 03:19:44 --> Could not find the language line "Home"
ERROR - 2024-11-28 03:40:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 03:44:06 --> Could not find the language line "Home"
ERROR - 2024-11-28 03:48:14 --> Could not find the language line "Home"
ERROR - 2024-11-28 03:50:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 03:51:35 --> Could not find the language line "Home"
ERROR - 2024-11-28 04:12:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 04:14:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 04:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 04:39:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-28 04:44:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 04:47:41 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:09:12 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:14:09 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:26:03 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 05:34:53 --> 404 Page Not Found: Users/accounts
ERROR - 2024-11-28 05:36:14 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:44:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:45:53 --> 404 Page Not Found: Users/accounts
ERROR - 2024-11-28 05:46:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 05:46:11 --> 404 Page Not Found: Users/accounts
ERROR - 2024-11-28 05:49:44 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:08:47 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:14:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:21:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-28 06:24:48 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:27:01 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-28 06:27:01 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:27:01 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:34:52 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:38:13 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:44:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 06:49:49 --> Could not find the language line "Home"
ERROR - 2024-11-28 07:07:22 --> Could not find the language line "Home"
ERROR - 2024-11-28 07:14:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 07:42:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 07:44:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 07:59:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 07:59:24 --> Could not find the language line "Perfume"
ERROR - 2024-11-28 08:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 08:14:04 --> Could not find the language line "Home"
ERROR - 2024-11-28 08:21:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 08:22:13 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-28 08:22:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 08:23:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 08:24:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 08:40:05 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-28 08:44:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 09:14:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 09:44:05 --> Could not find the language line "Home"
ERROR - 2024-11-28 09:47:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-28 09:47:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-28 09:47:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-28 09:54:30 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:02:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:05:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:14:06 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:33:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:33:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-28 10:33:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-28 10:33:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-28 10:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 10:39:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:39:27 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:39:46 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:39:55 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 10:40:00 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:40:02 --> Could not find the language line "Socks"
ERROR - 2024-11-28 10:40:23 --> Could not find the language line "Socks"
ERROR - 2024-11-28 10:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 10:40:44 --> Could not find the language line "Socks"
ERROR - 2024-11-28 10:40:56 --> Could not find the language line "Socks"
ERROR - 2024-11-28 10:43:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-28 10:44:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:56:18 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 10:56:18 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:56:21 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 10:56:21 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 10:56:22 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 10:56:22 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:56:24 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 10:56:24 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 10:56:25 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 10:56:25 --> Could not find the language line "Home"
ERROR - 2024-11-28 10:56:27 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 10:56:27 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 11:06:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:06:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:06:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:07:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:07:17 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:07:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:07:45 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-28 11:07:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:08:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:08:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:08:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:09:00 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:09:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:09:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-28 11:14:06 --> Could not find the language line "Home"
ERROR - 2024-11-28 11:21:21 --> Could not find the language line "Home"
ERROR - 2024-11-28 11:21:48 --> Could not find the language line "Socks"
ERROR - 2024-11-28 11:21:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-28 11:21:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-28 11:22:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:22:34 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:22:53 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:23:07 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 11:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-28 11:35:15 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-28 11:41:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-28 11:44:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-28 11:44:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:02:45 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:07:17 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:14:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:27:20 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 12:27:20 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:27:23 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:27:23 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:27:24 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 12:27:24 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:27:26 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:27:26 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:27:27 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-28 12:27:27 --> Could not find the language line "Home"
ERROR - 2024-11-28 12:27:29 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:27:29 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-28 12:44:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:14:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:19:53 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:22:22 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:23:23 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:24:54 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:25:10 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:25:52 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:30:32 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:33:49 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:33:50 --> Could not find the language line "Other"
ERROR - 2024-11-28 13:44:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 13:58:27 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-28 13:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:14:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:18:27 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:22:30 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:24:32 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:28:39 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:29:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 14:44:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 14:49:53 --> Could not find the language line "Home"
ERROR - 2024-11-28 15:14:08 --> Could not find the language line "Home"
ERROR - 2024-11-28 15:19:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-28 15:19:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-28 15:21:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 15:22:55 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 15:24:39 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-28 15:24:39 --> Could not find the language line "Home"
ERROR - 2024-11-28 15:24:39 --> Could not find the language line "Home"
ERROR - 2024-11-28 15:27:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 15:28:16 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-28 15:40:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-28 15:44:09 --> Could not find the language line "Home"
ERROR - 2024-11-28 16:07:09 --> Could not find the language line "Home"
ERROR - 2024-11-28 16:14:09 --> Could not find the language line "Home"
ERROR - 2024-11-28 16:44:13 --> Could not find the language line "Home"
ERROR - 2024-11-28 16:51:39 --> Could not find the language line "Socks"
ERROR - 2024-11-28 17:09:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-28 17:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 17:14:09 --> Could not find the language line "Home"
ERROR - 2024-11-28 17:18:42 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-28 17:34:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-28 17:44:10 --> Could not find the language line "Home"
ERROR - 2024-11-28 17:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 18:14:10 --> Could not find the language line "Home"
ERROR - 2024-11-28 18:14:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-11-28 18:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-28 18:30:16 --> Could not find the language line "Home"
ERROR - 2024-11-28 18:44:10 --> Could not find the language line "Home"
ERROR - 2024-11-28 18:49:47 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-28 18:49:47 --> Could not find the language line "Home"
ERROR - 2024-11-28 18:49:47 --> Could not find the language line "Home"
ERROR - 2024-11-28 18:55:41 --> Could not find the language line "Home"
ERROR - 2024-11-28 19:14:11 --> Could not find the language line "Home"
ERROR - 2024-11-28 19:21:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 19:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 19:31:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 19:44:11 --> Could not find the language line "Home"
ERROR - 2024-11-28 19:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-28 19:54:19 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:14:11 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:19:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 20:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 20:24:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 20:24:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 20:24:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 20:25:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-28 20:36:04 --> 404 Page Not Found: Env/index
ERROR - 2024-11-28 20:36:07 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 20:39:53 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:42:46 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:44:13 --> Could not find the language line "Home"
ERROR - 2024-11-28 20:45:33 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:14:12 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:14:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 21:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 21:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 21:26:23 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:34:16 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:38:15 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:42:18 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:44:12 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:44:20 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:44:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-28 21:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 21:55:41 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:56:01 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:57:22 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:57:53 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:59:49 --> Could not find the language line "Home"
ERROR - 2024-11-28 21:59:53 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:00:14 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:00:30 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:00:39 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 22:01:04 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 22:13:14 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:14:16 --> Could not find the language line "Home"
ERROR - 2024-11-28 22:32:37 --> Could not find the language line "Socks"
ERROR - 2024-11-28 22:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 22:34:00 --> Could not find the language line "Home"
ERROR - 2024-11-28 22:39:58 --> Could not find the language line "Other"
ERROR - 2024-11-28 22:44:14 --> Could not find the language line "Home"
ERROR - 2024-11-28 22:47:49 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-28 23:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-28 23:14:21 --> Could not find the language line "Home"
ERROR - 2024-11-28 23:30:46 --> Could not find the language line "Home"
ERROR - 2024-11-28 23:34:19 --> Could not find the language line "Other"
ERROR - 2024-11-28 23:37:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-28 23:44:15 --> Could not find the language line "Home"
