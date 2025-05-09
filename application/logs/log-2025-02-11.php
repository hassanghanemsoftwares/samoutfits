<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-11 00:01:13 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:01:14 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:01:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:01:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:01:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:15:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:16:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 00:17:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 00:21:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 00:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 00:31:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:31:38 --> Could not find the language line "users"
ERROR - 2025-02-11 00:34:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:41:51 --> Could not find the language line "users"
ERROR - 2025-02-11 00:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 00:42:49 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:43:12 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:45:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 00:47:13 --> Could not find the language line "users"
ERROR - 2025-02-11 00:56:20 --> 404 Page Not Found: Media/system
ERROR - 2025-02-11 00:56:24 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-11 01:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 01:11:43 --> Could not find the language line "users"
ERROR - 2025-02-11 01:12:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 01:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-11 01:18:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 01:26:06 --> Could not find the language line "accounts"
ERROR - 2025-02-11 01:30:53 --> Could not find the language line "accounts"
ERROR - 2025-02-11 01:43:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 01:45:37 --> Could not find the language line "accounts"
ERROR - 2025-02-11 01:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 01:46:47 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-11 01:57:35 --> Could not find the language line "accounts"
ERROR - 2025-02-11 01:58:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 02:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-11 02:24:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 02:36:04 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-11 02:36:05 --> Could not find the language line "Home"
ERROR - 2025-02-11 02:36:05 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-11 02:36:06 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-11 02:36:06 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-11 02:36:07 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-11 02:36:08 --> 404 Page Not Found: New/index
ERROR - 2025-02-11 02:36:09 --> 404 Page Not Found: Main/index
ERROR - 2025-02-11 02:36:09 --> Could not find the language line "Home"
ERROR - 2025-02-11 02:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-11 02:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 02:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 02:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 02:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 03:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 03:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 03:13:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 03:43:24 --> Could not find the language line "Home"
ERROR - 2025-02-11 03:58:43 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:05:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-11 04:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-11 04:05:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 04:13:22 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:21:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:21:25 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:21:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:21:38 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-11 04:22:03 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 04:22:38 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:23:02 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 04:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 04:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 04:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-11 04:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 04:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 04:54:47 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-11 05:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 05:05:57 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 05:08:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-11 05:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 05:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 05:29:51 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:29:52 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:29:53 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 05:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 05:40:50 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:43:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:54:46 --> Could not find the language line "Home"
ERROR - 2025-02-11 05:59:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 06:06:48 --> Could not find the language line "Home"
ERROR - 2025-02-11 06:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 06:13:15 --> Could not find the language line "Home"
ERROR - 2025-02-11 06:22:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 06:31:12 --> Could not find the language line "Home"
ERROR - 2025-02-11 06:36:32 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 06:43:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 06:48:30 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-11 06:55:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%V010%' OR a.description LIKE '%V010%' OR a.color LIKE '%V010%' OR a.barcode LIKE '%V010%' OR a.category LIKE '%V010%' OR a.sub_category LIKE '%V010%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 07:06:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-11 07:11:45 --> Could not find the language line "Home"
ERROR - 2025-02-11 07:13:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 07:16:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-11 07:28:57 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-11 07:28:57 --> Could not find the language line "Home"
ERROR - 2025-02-11 07:43:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 07:58:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:09:12 --> Could not find the language line "Socks"
ERROR - 2025-02-11 08:12:37 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:08 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:09 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:16:29 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 08:17:35 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:17:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 08:19:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 08:19:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:22:41 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:26:09 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:43:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 08:56:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-11 08:58:00 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:07:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 09:09:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 09:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:13:18 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:44 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-11 09:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:14:45 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:14:56 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:16:27 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:16:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:18:02 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:22:01 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:26:08 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:39:05 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:41:00 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:41:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:53:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:57:29 --> Could not find the language line "Home"
ERROR - 2025-02-11 09:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 09:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:11:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 10:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 10:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:17:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 10:17:17 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 10:17:24 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 10:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-11 10:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 10:49:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 10:49:21 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-11 11:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:09:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-11 11:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:16:08 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:21:24 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:23:00 --> Could not find the language line "Socks"
ERROR - 2025-02-11 11:28:00 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 11:30:12 --> Could not find the language line "Socks"
ERROR - 2025-02-11 11:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:34:33 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:34:45 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:36:55 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:42:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 11:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:43:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:49:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 11:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:53:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-11 11:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:53:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-11 11:54:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 11:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 11:56:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 11:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 11:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:01:13 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:02:17 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:02:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:02:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:03:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:03:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:03:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:03:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:05:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:05:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:06:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:06:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:06:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:06:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 12:06:46 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:06:59 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 12:08:12 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:08:18 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-11 12:09:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-11 12:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:26:10 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-11 12:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 12:43:20 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:52:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:52:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:52:39 --> Could not find the language line "Home"
ERROR - 2025-02-11 12:52:39 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:02:29 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:08:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 13:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:18:03 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:27:34 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-11 13:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:41:57 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:42:00 --> 404 Page Not Found: Cart/accounts
ERROR - 2025-02-11 13:42:00 --> 404 Page Not Found: Cart/home
ERROR - 2025-02-11 13:42:00 --> 404 Page Not Found: Home/assets
ERROR - 2025-02-11 13:43:19 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:47:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 13:47:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 13:47:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 13:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 13:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:50:47 --> Could not find the language line "Home"
ERROR - 2025-02-11 13:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 14:00:32 --> Could not find the language line "Home"
ERROR - 2025-02-11 14:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 14:08:59 --> Could not find the language line "Home"
ERROR - 2025-02-11 14:11:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 14:11:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 14:11:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 14:11:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 14:13:20 --> Could not find the language line "Home"
ERROR - 2025-02-11 14:17:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-11 14:17:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 14:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 14:43:20 --> Could not find the language line "Home"
ERROR - 2025-02-11 14:58:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 15:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:13:20 --> Could not find the language line "Home"
ERROR - 2025-02-11 15:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:22:06 --> Could not find the language line "Home"
ERROR - 2025-02-11 15:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:28:06 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 15:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 15:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-11 15:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 15:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%t063%' OR a.description LIKE '%t063%' OR a.color LIKE '%t063%' OR a.barcode LIKE '%t063%' OR a.category LIKE '%t063%' OR a.sub_category LIKE '%t063%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 15:28:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-11 15:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:36:24 --> Could not find the language line "Socks"
ERROR - 2025-02-11 15:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 15:43:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 15:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:10:56 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:13:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:14:10 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:17:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:22:41 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:25:43 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:28:41 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:43:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 16:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 16:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:09:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:13:21 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:13:26 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:17:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:19:13 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:31:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:36:36 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:43:22 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:49:55 --> Could not find the language line "Other"
ERROR - 2025-02-11 17:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:51:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:53:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 17:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:55:01 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:57:32 --> Could not find the language line "Home"
ERROR - 2025-02-11 17:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 17:57:40 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:00:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:05:47 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-11 18:05:48 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:05:49 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-11 18:05:49 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-11 18:05:50 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-11 18:05:50 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-11 18:05:52 --> 404 Page Not Found: New/index
ERROR - 2025-02-11 18:05:52 --> 404 Page Not Found: Main/index
ERROR - 2025-02-11 18:05:53 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:13:22 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-11 18:16:59 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:17:08 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:18:39 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 18:24:29 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:32 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:34 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:34 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:36 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:37 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:24:38 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:32:44 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:36:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:43:22 --> Could not find the language line "Home"
ERROR - 2025-02-11 18:43:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 18:43:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 18:49:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 18:57:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 19:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:06:14 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:10:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 19:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:13:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:17:43 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:22:42 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:22:42 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:22:43 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:32:42 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:33:33 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:37:54 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:38:02 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:38:44 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:38:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:39:29 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 19:39:52 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:40:09 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:40:35 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:40:37 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-11 19:40:51 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:41:14 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:41:47 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-11 19:41:47 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:42:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-11 19:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:43:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 19:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 19:46:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-11 19:50:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-11 19:51:34 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-02-11 19:51:48 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:13:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:14:01 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:14:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-11 20:14:52 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:15:31 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:17:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-11 20:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:18:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-11 20:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:22:53 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:22:55 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-11 20:22:55 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-11 20:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:27:58 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-11 20:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:28:37 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:43:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 20:51:51 --> Could not find the language line "Home"
ERROR - 2025-02-11 20:52:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 20:52:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-11 20:58:12 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:00:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 21:02:24 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 21:02:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-11 21:03:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-11 21:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 21:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 21:08:58 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:09:13 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:13:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:23:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-11 21:32:43 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:33:56 --> Could not find the language line "Perfume"
ERROR - 2025-02-11 21:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 21:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 21:43:23 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:55:22 --> Could not find the language line "Home"
ERROR - 2025-02-11 21:56:02 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 22:02:43 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:04:48 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:06:16 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:08:11 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:09:25 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:13:24 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:14:05 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:36:24 --> Could not find the language line "Home"
ERROR - 2025-02-11 22:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-11 23:03:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-11 23:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-11 23:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:36:13 --> Could not find the language line "Home"
ERROR - 2025-02-11 23:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:39:45 --> Could not find the language line "Home"
ERROR - 2025-02-11 23:39:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:16 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:21 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:33 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:48 --> Could not find the language line "Clothing"
ERROR - 2025-02-11 23:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:43:27 --> Could not find the language line "Home"
ERROR - 2025-02-11 23:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-11 23:59:57 --> Could not find the language line "Home"
