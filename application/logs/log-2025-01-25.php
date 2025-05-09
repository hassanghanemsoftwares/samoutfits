<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-25 00:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 00:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 00:14:54 --> Could not find the language line "Home"
ERROR - 2025-01-25 00:44:49 --> Could not find the language line "Home"
ERROR - 2025-01-25 01:02:52 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-25 01:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 01:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 01:07:52 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 01:14:51 --> Could not find the language line "Home"
ERROR - 2025-01-25 01:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 01:44:50 --> Could not find the language line "Home"
ERROR - 2025-01-25 01:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-25 01:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 02:11:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-25 02:14:49 --> Could not find the language line "Home"
ERROR - 2025-01-25 02:44:46 --> Could not find the language line "Home"
ERROR - 2025-01-25 02:44:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:05:16 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:12:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 03:15:02 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 03:30:41 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-25 03:30:41 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:30:42 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-25 03:30:43 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-25 03:30:43 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-25 03:30:44 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-25 03:30:45 --> 404 Page Not Found: New/index
ERROR - 2025-01-25 03:30:46 --> 404 Page Not Found: Main/index
ERROR - 2025-01-25 03:30:47 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:44:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 03:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 03:57:02 --> Could not find the language line "Other"
ERROR - 2025-01-25 03:59:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-25 04:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 04:15:04 --> Could not find the language line "Home"
ERROR - 2025-01-25 04:29:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-25 04:29:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-25 04:29:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-25 04:44:50 --> Could not find the language line "Home"
ERROR - 2025-01-25 04:45:33 --> Could not find the language line "Home"
ERROR - 2025-01-25 04:56:20 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:06:29 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:12:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:14:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:44:50 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:45:17 --> Could not find the language line "Home"
ERROR - 2025-01-25 05:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 05:55:17 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 06:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 06:05:26 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:14:50 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:15:34 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:21:26 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:44:47 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 06:44:52 --> Could not find the language line "Home"
ERROR - 2025-01-25 06:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 06:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 06:59:16 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:08:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 07:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:13:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:13:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:27 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 07:14:51 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 07:14:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:14:57 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:15:05 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:15:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:15:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:15:26 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:15:32 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 07:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:17:00 --> Could not find the language line "Perfume"
ERROR - 2025-01-25 07:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:40:44 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:44:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:44:51 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:47:55 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 07:49:12 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 07:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 07:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:07 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 07:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:54:47 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:57:49 --> Could not find the language line "Home"
ERROR - 2025-01-25 07:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 07:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:11:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:14:51 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:25:23 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:31:52 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:32:11 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:33:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 08:34:22 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:34:31 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:34:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:34:51 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:36:52 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:36:54 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2025-01-25 08:36:54 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-25 08:36:55 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:36:56 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2025-01-25 08:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:40:50 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:41:09 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:42:34 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:43:29 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:43:53 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:44:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:44:42 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:44:51 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:45:10 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:45:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:45:54 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:45:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:45:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:45:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:46:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:46:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:46:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:46:03 --> Could not find the language line "Home"
ERROR - 2025-01-25 08:46:04 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 08:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:53:08 --> Could not find the language line "Socks"
ERROR - 2025-01-25 08:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 08:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:14:52 --> Could not find the language line "Home"
ERROR - 2025-01-25 09:15:25 --> Could not find the language line "Home"
ERROR - 2025-01-25 09:15:37 --> Could not find the language line "Home"
ERROR - 2025-01-25 09:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 09:44:52 --> Could not find the language line "Home"
ERROR - 2025-01-25 09:48:46 --> Could not find the language line "Home"
ERROR - 2025-01-25 09:56:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-25 10:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-25 10:14:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 10:24:07 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:24:35 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:24:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 10:24:45 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 10:31:37 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-25 10:31:37 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:31:38 --> Could not find the language line "Home"
ERROR - 2025-01-25 10:44:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:00:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-25 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:14:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:18:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:18:39 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:18:59 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:20:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-25 11:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:23:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:24:09 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:25:08 --> Could not find the language line "Perfume"
ERROR - 2025-01-25 11:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:26:42 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:28:14 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:28:16 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:28:26 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:29:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:32:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:32:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:33:30 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:33:36 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:33:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:34:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:35:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:35:24 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:37:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:38:05 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:38:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:38:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 11:38:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:38:10 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:38:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:40:20 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-25 11:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:44:54 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:47:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 11:47:14 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:47:25 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 11:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 11:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:04:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:10:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 12:10:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 12:10:21 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:10:24 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-25 12:10:24 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-25 12:10:24 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-25 12:10:24 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-25 12:10:24 --> 404 Page Not Found: Cart/assets
ERROR - 2025-01-25 12:10:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 12:10:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 12:10:29 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:10:32 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-25 12:10:32 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:10:33 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-25 12:10:33 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-25 12:10:33 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-25 12:10:34 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-25 12:10:35 --> 404 Page Not Found: New/index
ERROR - 2025-01-25 12:10:36 --> 404 Page Not Found: Main/index
ERROR - 2025-01-25 12:10:37 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:11:59 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "Other"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "assets"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "assets"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "assets"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "assets"
ERROR - 2025-01-25 12:12:00 --> Could not find the language line "assets"
ERROR - 2025-01-25 12:14:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:17:44 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:20:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-25 12:22:03 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:23:18 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 12:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 12:26:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 12:28:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 12:30:59 --> Could not find the language line "Home"
ERROR - 2025-01-25 12:44:53 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:02:24 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:03:17 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:03:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 13:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:04:44 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:05:44 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 13:14:54 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:16:16 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:18:27 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:40:17 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:40:37 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-01-25 13:44:54 --> Could not find the language line "Home"
ERROR - 2025-01-25 13:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 13:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:14:55 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:29:13 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:29:14 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:29:15 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:29:40 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:29:47 --> Could not find the language line "Disclaimer"
ERROR - 2025-01-25 14:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:41:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 14:44:54 --> Could not find the language line "Home"
ERROR - 2025-01-25 14:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 14:51:40 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-01-25 15:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 15:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 15:14:55 --> Could not find the language line "Home"
ERROR - 2025-01-25 15:25:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c894%' OR a.description LIKE '%c894%' OR a.color LIKE '%c894%' OR a.barcode LIKE '%c894%' OR a.category LIKE '%c894%' OR a.sub_category LIKE '%c894%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 15:30:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 15:36:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 15:44:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 15:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:04:45 --> Could not find the language line "Home"
ERROR - 2025-01-25 16:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:11:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 16:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:14:55 --> Could not find the language line "Home"
ERROR - 2025-01-25 16:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:22:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 16:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:44:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 16:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 16:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:14:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 17:18:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-25 17:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:31:47 --> Could not find the language line "Perfume"
ERROR - 2025-01-25 17:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:34:48 --> Could not find the language line "Home"
ERROR - 2025-01-25 17:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 17:44:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 17:48:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 17:49:33 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-25 17:49:34 --> Could not find the language line "Home"
ERROR - 2025-01-25 17:49:35 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-25 17:49:35 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-25 17:49:36 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-25 17:49:36 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-25 17:49:38 --> 404 Page Not Found: New/index
ERROR - 2025-01-25 17:49:38 --> 404 Page Not Found: Main/index
ERROR - 2025-01-25 17:49:39 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:10:23 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-25 18:10:23 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:10:23 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:14:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:20:16 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 18:20:31 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:20:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 18:20:34 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 18:20:36 --> Could not find the language line "Perfume"
ERROR - 2025-01-25 18:20:38 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 18:20:43 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 18:20:45 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 18:20:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 18:22:18 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:22:21 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2025-01-25 18:22:22 --> 404 Page Not Found: Contact_us/index
ERROR - 2025-01-25 18:23:38 --> 404 Page Not Found: Gtmstart/index
ERROR - 2025-01-25 18:26:01 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 18:27:00 --> Could not find the language line "Sunglasses"
ERROR - 2025-01-25 18:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:31:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:38:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-25 18:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:44:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 18:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 18:58:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-25 19:01:07 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:03:31 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-01-25 19:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:06:03 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-25 19:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:07:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:08:51 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:09:10 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:09:43 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 19:11:59 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:14:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:15:47 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:27:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 19:28:26 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:31:14 --> Could not find the language line "Socks"
ERROR - 2025-01-25 19:31:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:31:16 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 19:31:22 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 19:31:26 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:31:28 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:33 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:31:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 19:31:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-25 19:31:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:43 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:44 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:31:44 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:46 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:31:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:31:52 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:31:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 19:31:55 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:31:57 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:33:50 --> Could not find the language line "Other"
ERROR - 2025-01-25 19:33:55 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 19:35:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:35:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:35:56 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:36:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:36:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 19:41:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:44:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 19:59:44 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:00:14 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:01:13 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:05:10 --> Could not find the language line "Bracelets"
ERROR - 2025-01-25 20:05:10 --> Could not find the language line "Bracelets"
ERROR - 2025-01-25 20:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:09:24 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-01-25 20:09:25 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2025-01-25 20:13:13 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:14:57 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:15:32 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:15:33 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:18:22 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:30:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:30:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 20:30:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 20:31:02 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:31:04 --> Could not find the language line "Other"
ERROR - 2025-01-25 20:31:05 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:31:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:31:07 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:31:08 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:31:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:31:20 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-01-25 20:31:24 --> Could not find the language line "Other"
ERROR - 2025-01-25 20:32:27 --> Could not find the language line "Other"
ERROR - 2025-01-25 20:33:52 --> Could not find the language line "Other"
ERROR - 2025-01-25 20:33:56 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 20:34:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:34:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:34:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:34:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 20:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:44:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 20:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 20:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 21:03:49 --> Could not find the language line "Home"
ERROR - 2025-01-25 21:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 21:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 21:14:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 21:31:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:31:06 --> Could not find the language line "Other"
ERROR - 2025-01-25 21:31:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 21:32:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 21:32:32 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 21:32:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:33:19 --> Could not find the language line "Other"
ERROR - 2025-01-25 21:34:10 --> Could not find the language line "Other"
ERROR - 2025-01-25 21:35:22 --> Could not find the language line "Other"
ERROR - 2025-01-25 21:35:23 --> Could not find the language line "Clothing"
ERROR - 2025-01-25 21:35:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:35:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:36:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:36:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-01-25 21:44:58 --> Could not find the language line "Home"
ERROR - 2025-01-25 21:53:47 --> Could not find the language line "Home"
ERROR - 2025-01-25 22:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 22:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 22:15:00 --> Could not find the language line "Home"
ERROR - 2025-01-25 22:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 22:23:02 --> Could not find the language line "Home"
ERROR - 2025-01-25 22:23:04 --> Could not find the language line "Other"
ERROR - 2025-01-25 22:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 22:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 22:29:06 --> Could not find the language line "Home"
ERROR - 2025-01-25 22:34:28 --> Could not find the language line "Perfume"
ERROR - 2025-01-25 22:44:59 --> Could not find the language line "Home"
ERROR - 2025-01-25 22:47:26 --> Could not find the language line "Home"
ERROR - 2025-01-25 23:15:08 --> Could not find the language line "Home"
ERROR - 2025-01-25 23:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 23:45:00 --> Could not find the language line "Home"
ERROR - 2025-01-25 23:45:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-25 23:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 23:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-25 23:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-25 23:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 23:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-25 23:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-25 23:47:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-25 23:47:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-25 23:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-25 23:49:24 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-01-25 23:55:48 --> 404 Page Not Found: Assets/css
