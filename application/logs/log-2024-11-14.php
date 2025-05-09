<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-14 00:06:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:13:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:17:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 00:20:37 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:35:25 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:37:16 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:39:45 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:45:12 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:50:09 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:50:36 --> Could not find the language line "Home"
ERROR - 2024-11-14 00:50:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-14 01:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 01:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 01:04:50 --> Could not find the language line "Home"
ERROR - 2024-11-14 01:12:51 --> Could not find the language line "Home"
ERROR - 2024-11-14 01:17:24 --> Could not find the language line "Crocs"
ERROR - 2024-11-14 01:20:42 --> Could not find the language line "Home"
ERROR - 2024-11-14 01:20:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-14 01:50:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 02:42:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 02:50:37 --> Could not find the language line "Home"
ERROR - 2024-11-14 03:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 03:19:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-14 03:19:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-14 03:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 03:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 03:20:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 03:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 03:50:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:01:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:20:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 04:39:07 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:50:40 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:59:05 --> Could not find the language line "Home"
ERROR - 2024-11-14 04:59:19 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-14 05:17:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 05:20:40 --> Could not find the language line "Home"
ERROR - 2024-11-14 05:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 05:37:07 --> Could not find the language line "Home"
ERROR - 2024-11-14 05:44:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-14 05:50:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:01:05 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 06:14:29 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:20:25 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:20:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:35:29 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:39:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-14 06:50:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 06:59:28 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:20:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:36:03 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:39:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 07:49:34 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:50:40 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:55:42 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:55:49 --> Could not find the language line "Home"
ERROR - 2024-11-14 07:55:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-14 07:55:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-11-14 07:55:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-14 08:07:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-14 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:17:58 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:19:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:20:19 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:20:40 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:20:41 --> Could not find the language line "Socks"
ERROR - 2024-11-14 08:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:22:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:22:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:31:18 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 08:38:36 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:50:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 08:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:04:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-14 09:07:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 09:18:13 --> Could not find the language line "Home"
ERROR - 2024-11-14 09:20:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 09:50:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 09:53:13 --> Could not find the language line "Home"
ERROR - 2024-11-14 10:15:30 --> Could not find the language line "products"
ERROR - 2024-11-14 10:20:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 10:28:17 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-11-14 10:42:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-14 10:50:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 10:51:21 --> Could not find the language line "Home"
ERROR - 2024-11-14 10:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 10:51:47 --> Could not find the language line "Home"
ERROR - 2024-11-14 10:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-14 11:08:18 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:14:35 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:18:30 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-11-14 11:19:00 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:20:42 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:27:11 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:35:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-14 11:37:04 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:50:42 --> Could not find the language line "Home"
ERROR - 2024-11-14 11:53:37 --> Could not find the language line "Socks"
ERROR - 2024-11-14 11:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 11:56:28 --> Could not find the language line "Socks"
ERROR - 2024-11-14 11:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 11:56:33 --> Could not find the language line "Socks"
ERROR - 2024-11-14 11:57:38 --> Could not find the language line "Socks"
ERROR - 2024-11-14 12:07:35 --> Could not find the language line "Other"
ERROR - 2024-11-14 12:08:25 --> Could not find the language line "Home"
ERROR - 2024-11-14 12:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:17:36 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 12:20:42 --> Could not find the language line "Home"
ERROR - 2024-11-14 12:22:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 12:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:23:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 12:27:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-14 12:38:57 --> Could not find the language line "Home"
ERROR - 2024-11-14 12:50:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:05:47 --> Could not find the language line "Other"
ERROR - 2024-11-14 13:06:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:10:07 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 13:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 13:17:47 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:20:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:27:19 --> Could not find the language line "Other"
ERROR - 2024-11-14 13:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 13:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 13:39:03 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:50:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:54:59 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-14 13:54:59 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:54:59 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 13:54:59 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 13:55:00 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-14 13:55:00 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:55:01 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 13:55:01 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 13:55:02 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-14 13:55:02 --> Could not find the language line "Home"
ERROR - 2024-11-14 13:55:02 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 13:55:02 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-14 14:20:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 14:23:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 14:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 14:41:45 --> Could not find the language line "Other"
ERROR - 2024-11-14 14:49:12 --> Could not find the language line "Home"
ERROR - 2024-11-14 14:50:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 14:51:14 --> Could not find the language line "Home"
ERROR - 2024-11-14 14:53:41 --> Could not find the language line "Other"
ERROR - 2024-11-14 14:53:46 --> Could not find the language line "Other"
ERROR - 2024-11-14 14:58:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:58:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:58:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:58:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:58:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:58:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 14:59:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 15:12:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-14 15:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 15:13:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-14 15:14:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-14 15:14:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-14 15:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 15:20:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 15:26:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 15:42:07 --> Could not find the language line "Home"
ERROR - 2024-11-14 15:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 15:50:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 15:59:03 --> Could not find the language line "Home"
ERROR - 2024-11-14 15:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 16:00:23 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:00:30 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:07:40 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:07:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:08:03 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:08:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:08:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:09:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:09:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:09:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 16:09:25 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:09:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:09:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:09:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:09:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:10:02 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:10:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:10:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:10:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:11:12 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:11:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:11:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:11:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:11:56 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:12:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:12:07 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:12:16 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:12:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:12:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:12:34 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:12:40 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:12:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:13:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:13:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:13:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:13:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:13:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:00 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:24 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:27 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:31 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:14:36 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:14:45 --> Could not find the language line "Perfume"
ERROR - 2024-11-14 16:14:48 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:14:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:15:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:15:22 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:15:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:15:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:15:38 --> Could not find the language line "Disclaimer"
ERROR - 2024-11-14 16:15:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:15:51 --> Could not find the language line "Socks"
ERROR - 2024-11-14 16:16:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-14 16:16:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:16:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:16:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:17:14 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-14 16:17:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:17:21 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-14 16:17:21 --> Could not find the language line "Socks"
ERROR - 2024-11-14 16:17:25 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:38 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:17:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:18:12 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-14 16:18:14 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:18:15 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:20:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:20:45 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:31:28 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:31:29 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:31:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:31:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:31:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:38:57 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:39:02 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 16:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 16:40:19 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:40:32 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:49:01 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:50:45 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:52:21 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-14 16:53:37 --> Could not find the language line "Home"
ERROR - 2024-11-14 16:55:27 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:03:13 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:03:14 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:06:32 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:08:33 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:08:52 --> Could not find the language line "Perfume"
ERROR - 2024-11-14 17:09:10 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:09:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:10:58 --> Could not find the language line "Perfume"
ERROR - 2024-11-14 17:11:10 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:20:45 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 17:27:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:46:19 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:48:43 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 17:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 17:49:33 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:50:44 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:50:45 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:52:22 --> Could not find the language line "Home"
ERROR - 2024-11-14 17:59:41 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:01:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-14 18:01:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-14 18:02:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-14 18:02:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-14 18:20:46 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 18:37:38 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:37:39 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:45:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:49:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-14 18:50:46 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:53:15 --> Could not find the language line "Clothing"
ERROR - 2024-11-14 18:56:15 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:56:58 --> Could not find the language line "Home"
ERROR - 2024-11-14 18:57:00 --> Could not find the language line "Home"
ERROR - 2024-11-14 19:05:21 --> Could not find the language line "Home"
ERROR - 2024-11-14 19:20:46 --> Could not find the language line "Home"
ERROR - 2024-11-14 19:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 19:50:46 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:12:06 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:20:46 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:25:01 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:25:17 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 20:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 20:27:54 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 20:28:34 --> Could not find the language line "Home"
ERROR - 2024-11-14 20:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 20:41:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 21:11:56 --> Could not find the language line "Home"
ERROR - 2024-11-14 21:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-14 21:39:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-14 21:39:04 --> Could not find the language line "Home"
ERROR - 2024-11-14 21:41:57 --> Could not find the language line "Home"
ERROR - 2024-11-14 22:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-11-14 22:11:57 --> Could not find the language line "Home"
ERROR - 2024-11-14 22:41:59 --> Could not find the language line "Home"
ERROR - 2024-11-14 22:54:11 --> Could not find the language line "Home"
ERROR - 2024-11-14 22:55:50 --> Could not find the language line "Home"
ERROR - 2024-11-14 22:56:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 22:56:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-14 22:56:58 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:03:36 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:12:02 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:13:36 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:14:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-14 23:23:37 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:42:00 --> Could not find the language line "Home"
ERROR - 2024-11-14 23:46:19 --> Could not find the language line "Home"
