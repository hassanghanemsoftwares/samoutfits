<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-08 00:19:14 --> Could not find the language line "Home"
ERROR - 2024-11-08 00:21:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 00:28:28 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 00:28:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 00:29:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 00:30:07 --> Could not find the language line "Home"
ERROR - 2024-11-08 00:30:43 --> Could not find the language line "Home"
ERROR - 2024-11-08 00:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 00:49:13 --> Could not find the language line "Home"
ERROR - 2024-11-08 01:17:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 01:19:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 01:40:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 01:41:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 01:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 01:42:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 01:49:17 --> Could not find the language line "Home"
ERROR - 2024-11-08 02:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 02:19:19 --> Could not find the language line "Home"
ERROR - 2024-11-08 02:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 02:49:14 --> Could not find the language line "Home"
ERROR - 2024-11-08 03:19:14 --> Could not find the language line "Home"
ERROR - 2024-11-08 03:23:15 --> Could not find the language line "Other"
ERROR - 2024-11-08 03:24:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 03:24:46 --> Could not find the language line "Other"
ERROR - 2024-11-08 03:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 03:49:14 --> Could not find the language line "Home"
ERROR - 2024-11-08 03:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 04:19:15 --> Could not find the language line "Home"
ERROR - 2024-11-08 04:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 04:49:15 --> Could not find the language line "Home"
ERROR - 2024-11-08 04:50:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-08 04:53:29 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:03:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:05:35 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:08:11 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:19:15 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:23:31 --> Could not find the language line "Home"
ERROR - 2024-11-08 05:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 05:45:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-08 05:49:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 06:04:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-08 06:17:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-08 06:19:17 --> Could not find the language line "Home"
ERROR - 2024-11-08 06:29:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 06:43:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-08 06:49:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 06:53:46 --> Could not find the language line "Home"
ERROR - 2024-11-08 06:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 06:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:19:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:33:07 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:35:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 07:35:42 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:36:29 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:49:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:54:25 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:54:54 --> Could not find the language line "Home"
ERROR - 2024-11-08 07:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 07:59:02 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:00:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:01:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 08:02:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 08:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 08:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 08:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 08:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 08:19:17 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:22:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:23:09 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:49:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:49:59 --> Could not find the language line "Home"
ERROR - 2024-11-08 08:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 09:04:44 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-08 09:04:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:19:17 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:21:42 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:24:09 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:24:11 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-08 09:25:54 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 09:26:47 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:26:49 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-08 09:26:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-08 09:26:49 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-08 09:27:13 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-11-08 09:27:39 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:27:40 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-08 09:27:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:27:41 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-08 09:27:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-08 09:27:41 --> 404 Page Not Found: Accounting/sections_uploads
ERROR - 2024-11-08 09:27:57 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:41:52 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:43:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 09:45:12 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:49:17 --> Could not find the language line "Home"
ERROR - 2024-11-08 09:51:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:08:41 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:08:42 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:13:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 10:14:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:14:25 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:14:25 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:19:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:42:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:47:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 10:49:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:49:46 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:51:54 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:52:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 10:52:21 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:52:23 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:55:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 10:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 10:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:15:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-08 11:18:45 --> Could not find the language line "Home"
ERROR - 2024-11-08 11:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:19:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 11:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 11:49:19 --> Could not find the language line "Home"
ERROR - 2024-11-08 12:04:46 --> Could not find the language line "Home"
ERROR - 2024-11-08 12:07:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 12:19:19 --> Could not find the language line "Home"
ERROR - 2024-11-08 12:43:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 12:44:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 12:44:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 12:45:00 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-08 12:49:19 --> Could not find the language line "Home"
ERROR - 2024-11-08 12:52:45 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:07:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-08 13:13:35 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-08 13:19:19 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:19:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-08 13:25:06 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:25:52 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:27:45 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:31:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-08 13:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '38-39', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-08 13:31:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-08 13:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 13:49:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:52:03 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:53:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:53:44 --> Could not find the language line "Bracelets"
ERROR - 2024-11-08 13:53:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 13:54:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 13:55:25 --> Could not find the language line "Home"
ERROR - 2024-11-08 13:56:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 13:57:03 --> Could not find the language line "Socks"
ERROR - 2024-11-08 14:00:47 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:00:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 14:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:01:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:08:06 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 14:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:08:23 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 14:08:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 14:10:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 14:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:19:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:31:45 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:33:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 14:33:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-08 14:33:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 14:34:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 14:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:34:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-08 14:43:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 14:48:15 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:49:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 14:54:25 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:03:42 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:04:11 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 15:07:12 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:07:17 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 15:07:36 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:07:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 15:07:49 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:09:10 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:17:11 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:19:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:31:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 15:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:33:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 15:43:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 15:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:49:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:54:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 15:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:54:39 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 15:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 15:56:11 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:56:12 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:56:12 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:56:13 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:59:29 --> Could not find the language line "Home"
ERROR - 2024-11-08 15:59:58 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 16:00:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 16:00:20 --> Could not find the language line "Home"
ERROR - 2024-11-08 16:00:59 --> Could not find the language line "Home"
ERROR - 2024-11-08 16:09:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 16:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:14:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:18:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-08 16:19:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 16:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 16:21:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 16:28:48 --> Could not find the language line "Home"
ERROR - 2024-11-08 16:45:57 --> Could not find the language line "Home"
ERROR - 2024-11-08 16:46:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 16:46:28 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 16:49:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 17:19:23 --> Could not find the language line "Home"
ERROR - 2024-11-08 17:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 17:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 17:49:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:05:35 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 18:07:09 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:07:10 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 18:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 18:09:16 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:09:18 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:11:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 18:19:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:49:22 --> Could not find the language line "Home"
ERROR - 2024-11-08 18:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 18:55:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 18:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 19:11:10 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 19:15:12 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:15:43 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:19:23 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:38:02 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:43:57 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:49:23 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:53:42 --> Could not find the language line "Home"
ERROR - 2024-11-08 19:59:56 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 20:19:23 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:24:00 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:43:27 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:46:52 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:49:24 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:50:55 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:50:56 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:50:57 --> Could not find the language line "Home"
ERROR - 2024-11-08 20:53:31 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:19:24 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:25:06 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:25:44 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 21:35:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:49:24 --> Could not find the language line "Home"
ERROR - 2024-11-08 21:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-08 21:55:11 --> 404 Page Not Found: Storage/settings
ERROR - 2024-11-08 21:55:40 --> Could not find the language line "Home"
ERROR - 2024-11-08 22:19:30 --> Could not find the language line "Home"
ERROR - 2024-11-08 22:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-08 22:49:26 --> Could not find the language line "Home"
ERROR - 2024-11-08 22:55:49 --> Could not find the language line "Clothing"
ERROR - 2024-11-08 22:55:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-08 22:55:50 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 22:55:51 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 22:55:52 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-08 22:55:53 --> Could not find the language line "Home"
ERROR - 2024-11-08 22:55:53 --> Could not find the language line "Other"
ERROR - 2024-11-08 22:55:53 --> Could not find the language line "Other"
ERROR - 2024-11-08 23:19:26 --> Could not find the language line "Home"
ERROR - 2024-11-08 23:49:29 --> Could not find the language line "Home"
ERROR - 2024-11-08 23:55:05 --> 404 Page Not Found: Assets/css
