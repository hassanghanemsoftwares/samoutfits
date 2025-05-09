<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-18 00:02:20 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:08:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:08:06 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:10:08 --> Could not find the language line "Other"
ERROR - 2024-06-18 00:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 00:16:54 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:18:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:19:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 00:19:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 00:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 00:26:51 --> Could not find the language line "Other"
ERROR - 2024-06-18 00:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 00:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 00:32:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:32:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:33:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:38:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:42:12 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:43:31 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:47:05 --> Could not find the language line "Home"
ERROR - 2024-06-18 00:51:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 00:51:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 01:01:30 --> Could not find the language line "Home"
ERROR - 2024-06-18 01:07:39 --> Could not find the language line "Home"
ERROR - 2024-06-18 01:12:06 --> 404 Page Not Found: Products/products
ERROR - 2024-06-18 01:16:02 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-18 01:16:53 --> Could not find the language line "Home"
ERROR - 2024-06-18 01:33:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 01:38:55 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-18 01:40:12 --> Could not find the language line "Other"
ERROR - 2024-06-18 01:44:39 --> Could not find the language line "Socks"
ERROR - 2024-06-18 01:45:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 01:46:57 --> Could not find the language line "Home"
ERROR - 2024-06-18 01:54:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 01:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 02:03:18 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-06-18 02:10:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-18 02:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-18 02:10:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-18 02:17:00 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 02:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 02:46:18 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:46:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 02:46:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 02:46:37 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 02:46:59 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:47:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 02:47:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 02:48:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 02:48:22 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:48:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 02:48:29 --> Could not find the language line "Perfume"
ERROR - 2024-06-18 02:48:33 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:48:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 02:48:44 --> Could not find the language line "Home"
ERROR - 2024-06-18 02:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 02:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 02:52:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 02:59:28 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-18 03:06:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-18 03:12:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 03:17:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 03:24:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 03:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 03:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 03:47:02 --> Could not find the language line "Home"
ERROR - 2024-06-18 03:47:10 --> Could not find the language line "Home"
ERROR - 2024-06-18 03:54:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 03:55:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 03:56:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-18 03:56:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-18 03:56:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-18 04:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:17:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 04:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:41:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 04:45:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 04:45:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 04:45:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 04:46:58 --> Could not find the language line "Home"
ERROR - 2024-06-18 04:49:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 04:52:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 04:53:29 --> Could not find the language line "Perfume"
ERROR - 2024-06-18 04:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 04:57:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 04:57:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 05:04:46 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:10:09 --> Could not find the language line "Other"
ERROR - 2024-06-18 05:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:16:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:24:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:25:25 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:25:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 05:25:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 05:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:27:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 05:28:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 05:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:36:37 --> Could not find the language line "Other"
ERROR - 2024-06-18 05:37:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-18 05:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 05:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:43:59 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:44:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 05:44:17 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:44:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 05:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 05:46:58 --> Could not find the language line "Home"
ERROR - 2024-06-18 05:51:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 05:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:03:26 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:16:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 06:16:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:17:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:17:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:17:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:18:00 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:18:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:18:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:21:01 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 06:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:29:15 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:33:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 06:45:06 --> Could not find the language line "Bracelets"
ERROR - 2024-06-18 06:46:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:46:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 06:46:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:47:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 06:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:48:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:48:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 06:48:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 07:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 07:11:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:13:24 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:15:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:15:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 07:16:57 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:19:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 07:19:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 07:19:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 07:24:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 07:27:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 07:27:29 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:27:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:28:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 07:31:50 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 07:31:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:31:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 07:36:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:40:36 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:41:44 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:44:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:44:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 07:46:58 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:47:45 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:48:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 07:52:33 --> Could not find the language line "Home"
ERROR - 2024-06-18 07:52:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:05:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 08:05:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:06:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 08:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 08:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 08:09:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:16:57 --> Could not find the language line "Home"
ERROR - 2024-06-18 08:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:21:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:23:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 08:26:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:27:21 --> Could not find the language line "Home"
ERROR - 2024-06-18 08:34:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:35:21 --> Could not find the language line "products"
ERROR - 2024-06-18 08:35:40 --> Could not find the language line "Home"
ERROR - 2024-06-18 08:38:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:42:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 08:47:06 --> Could not find the language line "Home"
ERROR - 2024-06-18 08:52:20 --> Could not find the language line "Home"
ERROR - 2024-06-18 08:59:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:03:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 09:05:45 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:11:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:16:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:17:00 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:18:55 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:23:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 09:24:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 09:28:36 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:28:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:32:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:36:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:41:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:45:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:45:49 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 09:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 09:46:58 --> Could not find the language line "Home"
ERROR - 2024-06-18 09:49:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 09:53:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:15:17 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:15:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 10:15:23 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-06-18 10:16:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 10:16:05 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-06-18 10:16:53 --> Could not find the language line "Other"
ERROR - 2024-06-18 10:16:59 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:18:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 10:22:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:22:54 --> Could not find the language line "Socks"
ERROR - 2024-06-18 10:26:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:27:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:33:32 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:34:11 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 10:34:24 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:34:32 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:32 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:40 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:35:02 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:35:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:35:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:37:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:38:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:39:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:41:01 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:41:13 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:42:09 --> Could not find the language line "Perfume"
ERROR - 2024-06-18 10:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:42:18 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:42:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 10:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:42:36 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:42:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:43:40 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:44:28 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:45:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:45:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 10:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:46:59 --> Could not find the language line "Home"
ERROR - 2024-06-18 10:46:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 10:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:49:33 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:49:34 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-18 10:51:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 10:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 10:56:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:00:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:04:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:05:51 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:08:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:10:36 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:10:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:16:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:16:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 11:16:59 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:19:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 11:21:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:24:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 11:25:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:27:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 11:29:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 11:33:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:34:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:37:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:41:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:47:00 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:54:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 11:54:25 --> Could not find the language line "products"
ERROR - 2024-06-18 11:56:11 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:56:16 --> Could not find the language line "Home"
ERROR - 2024-06-18 11:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 11:58:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:01:48 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:11:03 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:17:01 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:18:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-18 12:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:23:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:27:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:30:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 12:30:38 --> Could not find the language line "Bracelets"
ERROR - 2024-06-18 12:30:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 12:31:53 --> Could not find the language line "Perfume"
ERROR - 2024-06-18 12:31:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:34:29 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:40:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 12:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:40:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 12:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:40:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 12:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:40:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 12:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 12:41:39 --> Could not find the language line "products"
ERROR - 2024-06-18 12:42:45 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:43:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 12:43:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 12:43:07 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:43:34 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:44:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 12:44:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:47:03 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:48:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 12:52:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 12:55:40 --> Could not find the language line "Home"
ERROR - 2024-06-18 12:56:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:01:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:05:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:05:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:09:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:12:58 --> Could not find the language line "Other"
ERROR - 2024-06-18 13:13:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:16:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:17:00 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:17:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:17:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:17:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:18:37 --> Could not find the language line "Socks"
ERROR - 2024-06-18 13:19:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:19:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:20:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:21:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:21:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:22:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:22:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:23:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:23:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:25:05 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:25:43 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:25:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:26:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:26:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:26:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 13:26:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 13:26:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:26:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:26:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:26:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 13:27:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:27:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:27:47 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:28:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:28:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:28:35 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:30:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:33:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:33:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:33:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 13:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:43:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 13:46:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:47:01 --> Could not find the language line "Home"
ERROR - 2024-06-18 13:51:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:52:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 13:58:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 13:59:22 --> Could not find the language line "Other"
ERROR - 2024-06-18 13:59:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 13:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:03:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:07:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:17:02 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:20:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:24:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:25:15 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:25:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 14:25:27 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:25:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:25:33 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:28:46 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:28:49 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:32:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:36:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:39:50 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:39:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:40:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:40:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:40:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:40:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:41:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:41:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:41:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:41:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:41:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:42:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:42:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:42:44 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:42:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:42:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 14:42:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:42:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:43:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 14:43:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:43:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:43:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:43:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:43:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:43:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 14:44:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:44:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-18 14:44:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:44:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:44:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:44:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 14:45:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:45:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:03 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:47:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:47:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:48:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:48:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 14:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:49:11 --> Could not find the language line "Perfume"
ERROR - 2024-06-18 14:50:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 14:50:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 14:50:43 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 14:50:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-18 14:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:52:22 --> Could not find the language line "Home"
ERROR - 2024-06-18 14:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 14:56:24 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:01:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 15:02:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 15:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:07:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 15:08:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-18 15:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-18 15:08:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-18 15:08:49 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:09:27 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:17:03 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:17:53 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:20:44 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 15:22:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 15:24:29 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:29:06 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:34:12 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:35:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 15:35:25 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:38:24 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:47:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:52:58 --> Could not find the language line "Home"
ERROR - 2024-06-18 15:53:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 15:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 15:53:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:05:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 16:05:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 16:07:48 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:08:35 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-18 16:14:00 --> Could not find the language line "products"
ERROR - 2024-06-18 16:17:02 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:17:03 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:40:10 --> Could not find the language line "Bracelets"
ERROR - 2024-06-18 16:41:01 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:41:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 16:41:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 16:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 16:42:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-18 16:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 16:47:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:50:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 16:51:27 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:51:36 --> Could not find the language line "Home"
ERROR - 2024-06-18 16:54:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 16:55:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-18 17:06:52 --> Could not find the language line "Home"
ERROR - 2024-06-18 17:11:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:15:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 17:17:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 17:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 17:27:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:31:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:40:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:44:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:47:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 17:48:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:52:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 17:56:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 18:01:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 18:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 18:17:04 --> Could not find the language line "Home"
ERROR - 2024-06-18 18:21:28 --> Could not find the language line "Socks"
ERROR - 2024-06-18 18:21:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 18:22:19 --> Could not find the language line "Home"
ERROR - 2024-06-18 18:22:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-18 18:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 18:23:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 18:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 18:39:37 --> Could not find the language line "Home"
ERROR - 2024-06-18 18:45:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 18:47:05 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:02:28 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:02:54 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-18 19:05:56 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:08:33 --> Could not find the language line "products"
ERROR - 2024-06-18 19:08:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-18 19:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:17:05 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 19:20:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:24:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:27:45 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:28:23 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:28:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:28:25 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:28:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:32:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:36:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:37:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 19:41:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:43:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 19:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:47:07 --> Could not find the language line "Home"
ERROR - 2024-06-18 19:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 19:49:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:53:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 19:57:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:10:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:10:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 20:14:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:15:09 --> Could not find the language line "Home"
ERROR - 2024-06-18 20:17:06 --> Could not find the language line "Home"
ERROR - 2024-06-18 20:22:10 --> Could not find the language line "Home"
ERROR - 2024-06-18 20:22:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:26:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 20:31:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 20:47:07 --> Could not find the language line "Home"
ERROR - 2024-06-18 20:47:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 20:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Shoes%' OR a.description LIKE '%Shoes%' OR a.color LIKE '%Shoes%' OR a.barcode LIKE '%Shoes%' OR a.category LIKE '%Shoes%' OR a.sub_category LIKE '%Shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 20:56:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:00:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:04:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:05:17 --> Could not find the language line "products"
ERROR - 2024-06-18 21:05:20 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 21:11:46 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:12:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:15:33 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:16:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:17:09 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:21:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 21:24:40 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:29:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-18 21:32:38 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:47:11 --> Could not find the language line "Home"
ERROR - 2024-06-18 21:55:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 22:11:30 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:13:20 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:17:09 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 22:40:10 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:47:14 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:49:25 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:49:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 22:53:41 --> Could not find the language line "Home"
ERROR - 2024-06-18 22:55:53 --> Could not find the language line "Socks"
ERROR - 2024-06-18 22:56:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-18 22:56:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 22:56:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-18 23:04:45 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:13:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 23:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-18 23:17:12 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:21:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 23:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:30:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 23:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:35:20 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:36:47 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:37:08 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:43:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-18 23:45:48 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-18 23:47:12 --> Could not find the language line "Home"
ERROR - 2024-06-18 23:47:28 --> Could not find the language line "products"
ERROR - 2024-06-18 23:51:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-18 23:55:20 --> 404 Page Not Found: Assets/css
