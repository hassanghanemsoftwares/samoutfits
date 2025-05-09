<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-26 00:08:15 --> Could not find the language line "Home"
ERROR - 2024-10-26 00:09:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 00:14:56 --> Could not find the language line "Home"
ERROR - 2024-10-26 00:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 00:38:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-26 00:38:35 --> Could not find the language line "Home"
ERROR - 2024-10-26 00:44:55 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:03:14 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:15:02 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:17:27 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:19:39 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 01:21:13 --> 404 Page Not Found: Metajson/index
ERROR - 2024-10-26 01:21:13 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:21:13 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 01:26:12 --> Could not find the language line "Home"
ERROR - 2024-10-26 01:27:53 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-26 01:44:56 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:00:51 --> Could not find the language line "Other"
ERROR - 2024-10-26 02:15:09 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:16:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:30:18 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:31:48 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:44:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:45:59 --> Could not find the language line "Home"
ERROR - 2024-10-26 02:49:39 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:00:16 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-10-26 03:03:02 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 03:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 03:14:55 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:20:52 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 03:28:54 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:44:57 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:46:01 --> Could not find the language line "Home"
ERROR - 2024-10-26 03:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 04:14:59 --> Could not find the language line "Home"
ERROR - 2024-10-26 04:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 04:44:56 --> Could not find the language line "Home"
ERROR - 2024-10-26 05:14:56 --> Could not find the language line "Home"
ERROR - 2024-10-26 05:18:32 --> Could not find the language line "Home"
ERROR - 2024-10-26 05:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 05:41:34 --> Could not find the language line "Other"
ERROR - 2024-10-26 05:41:47 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-10-26 05:43:45 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-10-26 05:44:56 --> Could not find the language line "Home"
ERROR - 2024-10-26 05:58:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-10-26 06:00:21 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 06:14:06 --> Could not find the language line "Home"
ERROR - 2024-10-26 06:14:53 --> Could not find the language line "Other"
ERROR - 2024-10-26 06:14:57 --> Could not find the language line "Home"
ERROR - 2024-10-26 06:24:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 06:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 06:44:57 --> Could not find the language line "Home"
ERROR - 2024-10-26 06:46:02 --> 404 Page Not Found: Media/system
ERROR - 2024-10-26 06:46:03 --> 404 Page Not Found: Wp-includes/js
ERROR - 2024-10-26 07:14:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 07:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-26 07:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-26 07:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-26 07:32:44 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-10-26 07:32:45 --> Could not find the language line "Home"
ERROR - 2024-10-26 07:37:13 --> Could not find the language line "Home"
ERROR - 2024-10-26 07:42:36 --> Could not find the language line "Home"
ERROR - 2024-10-26 07:44:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 07:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 08:02:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:04:09 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:08:37 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:12:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:12:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 08:12:47 --> Could not find the language line "Other"
ERROR - 2024-10-26 08:12:47 --> Could not find the language line "Other"
ERROR - 2024-10-26 08:12:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:12:48 --> Could not find the language line "Other"
ERROR - 2024-10-26 08:12:48 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:12:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 08:12:49 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:12:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 08:12:51 --> Could not find the language line "Other"
ERROR - 2024-10-26 08:12:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 08:12:53 --> Could not find the language line "Other"
ERROR - 2024-10-26 08:12:53 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 08:13:28 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:14:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:16:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-26 08:16:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-26 08:16:47 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 08:20:20 --> Could not find the language line "0"
ERROR - 2024-10-26 08:21:11 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:27:19 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:34:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 08:34:31 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:34:50 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 08:34:52 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 08:36:12 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 08:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 08:39:42 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 08:39:47 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:40:12 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:42:35 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:44:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 08:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 08:57:13 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-26 09:15:00 --> Could not find the language line "Home"
ERROR - 2024-10-26 09:16:52 --> Could not find the language line "Home"
ERROR - 2024-10-26 09:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 09:42:00 --> Could not find the language line "Home"
ERROR - 2024-10-26 09:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 09:44:58 --> Could not find the language line "Home"
ERROR - 2024-10-26 09:53:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-26 09:53:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 10:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 10:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 10:05:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 10:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 10:14:59 --> Could not find the language line "Home"
ERROR - 2024-10-26 10:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 10:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 10:31:53 --> Could not find the language line "Home"
ERROR - 2024-10-26 10:45:00 --> Could not find the language line "Home"
ERROR - 2024-10-26 10:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 11:11:47 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 11:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 11:14:43 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-26 11:15:00 --> Could not find the language line "Home"
ERROR - 2024-10-26 11:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 11:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 11:40:43 --> 404 Page Not Found: Dup-installer/main.installer.php
ERROR - 2024-10-26 11:44:59 --> Could not find the language line "Home"
ERROR - 2024-10-26 11:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 12:05:14 --> Could not find the language line "Other"
ERROR - 2024-10-26 12:11:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 12:15:00 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:25:22 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 12:37:19 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:37:35 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:37:37 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 12:38:44 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:38:55 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 12:45:02 --> Could not find the language line "Home"
ERROR - 2024-10-26 12:51:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-26 13:02:43 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:12:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:15:01 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:16:42 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:22:48 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 13:31:17 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 13:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 13:38:36 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:45:01 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:48:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 13:50:45 --> Could not find the language line "Home"
ERROR - 2024-10-26 13:55:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-26 13:58:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 14:00:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:12:28 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:15:01 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:18:12 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 14:24:49 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:24:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:24:51 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:45:02 --> Could not find the language line "Home"
ERROR - 2024-10-26 14:55:13 --> 404 Page Not Found: Vendor/laravel-filemanager
ERROR - 2024-10-26 15:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 15:15:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 15:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 15:45:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:08:09 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:08:48 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:09:24 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:15:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:17:38 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:17:39 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:19:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 16:19:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 16:19:24 --> Could not find the language line "Other"
ERROR - 2024-10-26 16:19:24 --> Could not find the language line "Other"
ERROR - 2024-10-26 16:19:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 16:19:25 --> Could not find the language line "Other"
ERROR - 2024-10-26 16:19:25 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 16:19:26 --> Could not find the language line "Other"
ERROR - 2024-10-26 16:19:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 16:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:40:17 --> Could not find the language line "Home"
ERROR - 2024-10-26 16:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 16:45:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:15:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:17:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-10-26 17:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:18:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:23:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-26 17:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:24:14 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-26 17:24:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-26 17:24:35 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-26 17:24:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-10-26 17:24:41 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:26:06 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 17:41:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-26 17:45:04 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:46:04 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:46:23 --> Could not find the language line "Home"
ERROR - 2024-10-26 17:55:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 17:55:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-10-26 17:55:10 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 17:55:10 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 17:55:11 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 17:55:13 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 18:15:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:16:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-26 18:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 18:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 18:16:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-26 18:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 18:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 18:24:39 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:25:39 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:27:57 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 18:34:42 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:36:45 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:45:04 --> Could not find the language line "Home"
ERROR - 2024-10-26 18:45:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-26 18:57:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 19:15:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:18:48 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-10-26 19:28:09 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:28:34 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:28:35 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:28:37 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:28:39 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:29:15 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:29:15 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:29:15 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:30:37 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:31:11 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 19:45:07 --> Could not find the language line "Home"
ERROR - 2024-10-26 19:46:08 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 19:46:09 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 19:46:29 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-10-26 20:05:09 --> Could not find the language line "Socks"
ERROR - 2024-10-26 20:15:06 --> Could not find the language line "Home"
ERROR - 2024-10-26 20:29:09 --> Could not find the language line "Home"
ERROR - 2024-10-26 20:45:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 21:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 21:04:44 --> Could not find the language line "Home"
ERROR - 2024-10-26 21:10:43 --> 404 Page Not Found: Products/products
ERROR - 2024-10-26 21:15:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 21:22:24 --> Could not find the language line "products"
ERROR - 2024-10-26 21:31:28 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 21:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 21:43:46 --> Could not find the language line "Home"
ERROR - 2024-10-26 21:45:05 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:13:27 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:15:07 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:19:01 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:19:18 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:19:18 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:25:23 --> Could not find the language line "Home"
ERROR - 2024-10-26 22:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 22:45:07 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:15:12 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:25:37 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 23:33:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-10-26 23:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-26 23:34:50 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:42:03 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:44:08 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:45:13 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:47:33 --> Could not find the language line "Clothing"
ERROR - 2024-10-26 23:48:44 --> Could not find the language line "Home"
ERROR - 2024-10-26 23:53:21 --> Could not find the language line "Home"
