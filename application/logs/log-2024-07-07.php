<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-07 00:12:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 00:12:41 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 00:16:53 --> Could not find the language line "Home"
ERROR - 2024-07-07 00:20:20 --> Could not find the language line "products"
ERROR - 2024-07-07 00:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 00:31:08 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 00:43:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 00:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 00:54:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:05:25 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 01:09:59 --> Could not find the language line "Other"
ERROR - 2024-07-07 01:12:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:16:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 01:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 01:32:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:32:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:38:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:40:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:43:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:45:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:46:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 01:47:24 --> Could not find the language line "Home"
ERROR - 2024-07-07 01:48:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:48:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:48:38 --> Could not find the language line "Home"
ERROR - 2024-07-07 01:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 01:55:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 01:58:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-07 01:58:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-07 01:58:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-07 01:59:32 --> Could not find the language line "Socks"
ERROR - 2024-07-07 01:59:42 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 02:09:51 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:09:51 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:16:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 02:23:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 02:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 02:29:27 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:38:14 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:38:59 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:41:41 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 02:46:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:47:41 --> Could not find the language line "Home"
ERROR - 2024-07-07 02:48:48 --> Could not find the language line "products"
ERROR - 2024-07-07 03:10:28 --> Could not find the language line "Home"
ERROR - 2024-07-07 03:16:55 --> Could not find the language line "Home"
ERROR - 2024-07-07 03:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 03:25:44 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-07 03:42:50 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-07-07 03:44:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 03:46:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 03:46:55 --> Could not find the language line "Home"
ERROR - 2024-07-07 03:56:17 --> Could not find the language line "products"
ERROR - 2024-07-07 04:11:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 04:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 04:16:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 04:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 04:22:21 --> Could not find the language line "Home"
ERROR - 2024-07-07 04:33:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 04:35:57 --> Could not find the language line "Home"
ERROR - 2024-07-07 04:43:27 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-07-07 04:46:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 04:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:00:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 05:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 05:16:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-07 05:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-07 05:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-07 05:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-07 05:19:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-07 05:19:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-07-07 05:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-07 05:19:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-07 05:33:27 --> Could not find the language line "Other"
ERROR - 2024-07-07 05:46:57 --> Could not find the language line "Home"
ERROR - 2024-07-07 05:47:03 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:00:41 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:07:04 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 06:08:22 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 06:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:12:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 06:12:37 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:12:38 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:14:57 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:16:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:33:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 06:39:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:42:06 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:42:10 --> Could not find the language line "Perfume"
ERROR - 2024-07-07 06:42:11 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:42:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-07 06:42:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-07 06:42:17 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:43:06 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:44:08 --> Could not find the language line "Bracelets"
ERROR - 2024-07-07 06:45:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 06:46:43 --> Could not find the language line "products"
ERROR - 2024-07-07 06:46:57 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 06:58:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 06:58:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 06:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 06:59:22 --> Could not find the language line "Home"
ERROR - 2024-07-07 06:59:41 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:00:14 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:01:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 07:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:02:49 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:03:22 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:03:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:06:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 07:09:49 --> Could not find the language line "products"
ERROR - 2024-07-07 07:13:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 07:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:14:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:15:58 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:16:06 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:16:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:17:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:18:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-07 07:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:24:46 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:25:19 --> Could not find the language line "products"
ERROR - 2024-07-07 07:27:31 --> Could not find the language line "products"
ERROR - 2024-07-07 07:33:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-07 07:33:47 --> Could not find the language line "products"
ERROR - 2024-07-07 07:33:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:36:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 07:37:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:40:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 07:43:37 --> Could not find the language line "Bracelets"
ERROR - 2024-07-07 07:43:37 --> Could not find the language line "Bracelets"
ERROR - 2024-07-07 07:45:14 --> Could not find the language line "products"
ERROR - 2024-07-07 07:46:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:52:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 07:53:55 --> Could not find the language line "Home"
ERROR - 2024-07-07 07:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 07:59:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 08:00:18 --> Could not find the language line "Home"
ERROR - 2024-07-07 08:01:46 --> Could not find the language line "products"
ERROR - 2024-07-07 08:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:16:59 --> Could not find the language line "Home"
ERROR - 2024-07-07 08:19:09 --> Could not find the language line "products"
ERROR - 2024-07-07 08:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:37:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 08:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:40:40 --> Could not find the language line "products"
ERROR - 2024-07-07 08:47:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 08:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 08:58:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 08:59:41 --> Could not find the language line "products"
ERROR - 2024-07-07 09:10:51 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-07 09:12:36 --> Could not find the language line "products"
ERROR - 2024-07-07 09:17:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 09:22:37 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:29:49 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:31:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:38:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:40:20 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:44:30 --> Could not find the language line "products"
ERROR - 2024-07-07 09:44:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-07-07 09:45:53 --> Could not find the language line "products"
ERROR - 2024-07-07 09:47:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 09:51:46 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 09:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:53:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 09:58:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 10:14:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-07 10:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 10:17:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 10:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 10:27:23 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:27:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:27:58 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:29:57 --> Could not find the language line "products"
ERROR - 2024-07-07 10:30:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 10:39:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 10:41:27 --> Could not find the language line "Other"
ERROR - 2024-07-07 10:41:44 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 10:43:20 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:46:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 10:46:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 10:47:01 --> Could not find the language line "Home"
ERROR - 2024-07-07 10:50:48 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 10:55:11 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:02:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-07 11:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 11:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 11:14:56 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 11:15:39 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 11:17:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 11:33:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 11:34:44 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:35:17 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:35:19 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:35:28 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:35:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 11:41:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 11:41:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 11:47:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 11:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:08:17 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:08:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 12:08:46 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:09:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 12:17:01 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:19:04 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:22:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 12:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 12:30:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 12:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:40:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 12:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 12:43:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 12:47:01 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:50:00 --> Could not find the language line "Home"
ERROR - 2024-07-07 12:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:03:14 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:03:50 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:03:51 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:10:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 13:11:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 13:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:17:01 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-07 13:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:37:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 13:37:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 13:43:18 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:43:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 13:46:02 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:46:11 --> Could not find the language line "Perfume"
ERROR - 2024-07-07 13:46:16 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:46:16 --> Could not find the language line "Perfume"
ERROR - 2024-07-07 13:46:16 --> Could not find the language line "Perfume"
ERROR - 2024-07-07 13:46:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:46:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:47:02 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:47:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:48:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:48:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:49:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:49:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:49:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:49:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:50:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:50:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:51:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:54:02 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 13:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 13:58:18 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:20 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:21 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:22 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:27 --> Could not find the language line "Perfume"
ERROR - 2024-07-07 13:58:29 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:43 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:45 --> Could not find the language line "Home"
ERROR - 2024-07-07 13:58:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:59:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:59:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 13:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 13:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:00:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:01:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:01:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:02:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:02:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:02:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:03:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:03:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:03:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:04:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:04:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:04:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:05:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:05:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:06:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:06:39 --> Could not find the language line "Other"
ERROR - 2024-07-07 14:07:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:07:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:07:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:07:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:07:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 14:08:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:08:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:11:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:11 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 14:11:12 --> Could not find the language line "Home"
ERROR - 2024-07-07 14:12:20 --> Could not find the language line "Socks"
ERROR - 2024-07-07 14:13:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:17:04 --> Could not find the language line "Home"
ERROR - 2024-07-07 14:22:23 --> Could not find the language line "Home"
ERROR - 2024-07-07 14:22:32 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 14:22:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 14:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:28:04 --> Could not find the language line "products"
ERROR - 2024-07-07 14:29:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:36:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:36:19 --> Could not find the language line "products"
ERROR - 2024-07-07 14:39:45 --> Could not find the language line "Home"
ERROR - 2024-07-07 14:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:41:40 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 14:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 14:43:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 14:43:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 14:47:02 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:14:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 15:15:29 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:17:03 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:23:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 15:35:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-07 15:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:44:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 15:47:03 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:54:29 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:55:06 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:55:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 15:55:40 --> Could not find the language line "Home"
ERROR - 2024-07-07 15:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 15:56:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:57:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:57:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:57:51 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:57:58 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:58:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 15:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 16:00:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 16:00:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 16:00:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 16:00:46 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 16:01:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 16:02:22 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 16:04:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 16:10:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 16:10:42 --> Could not find the language line "products"
ERROR - 2024-07-07 16:13:12 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-07 16:17:02 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:17:04 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 16:25:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 16:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 16:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 16:32:31 --> Could not find the language line "Home"
ERROR - 2024-07-07 16:33:21 --> Could not find the language line "Other"
ERROR - 2024-07-07 16:36:12 --> Could not find the language line "products"
ERROR - 2024-07-07 17:05:23 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-07 17:06:54 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:13:40 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:15:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:16:14 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:17:04 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:31:17 --> Could not find the language line "Home"
ERROR - 2024-07-07 17:31:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 17:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 17:38:53 --> Severity: Notice --> Undefined variable: done /home/samfit/public_html/application/controllers/Checkout.php 447
ERROR - 2024-07-07 17:39:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 18:00:39 --> Could not find the language line "products"
ERROR - 2024-07-07 18:03:19 --> Could not find the language line "products"
ERROR - 2024-07-07 18:07:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 18:17:05 --> Could not find the language line "Home"
ERROR - 2024-07-07 18:18:18 --> Could not find the language line "products"
ERROR - 2024-07-07 18:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:27:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 18:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 18:47:05 --> Could not find the language line "Home"
ERROR - 2024-07-07 18:54:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 18:55:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:02:56 --> Could not find the language line "Home"
ERROR - 2024-07-07 19:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:12:07 --> Could not find the language line "Home"
ERROR - 2024-07-07 19:12:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:17:05 --> Could not find the language line "Home"
ERROR - 2024-07-07 19:18:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:18:38 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 19:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 19:41:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 19:41:45 --> Could not find the language line "products"
ERROR - 2024-07-07 19:42:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:42:27 --> Could not find the language line "Home"
ERROR - 2024-07-07 19:44:39 --> Could not find the language line "Bracelets"
ERROR - 2024-07-07 19:45:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:47:06 --> Could not find the language line "Home"
ERROR - 2024-07-07 19:55:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 19:56:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 20:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:17:06 --> Could not find the language line "Home"
ERROR - 2024-07-07 20:22:45 --> 404 Page Not Found: Storage/settings
ERROR - 2024-07-07 20:22:46 --> 404 Page Not Found: Storage/settings
ERROR - 2024-07-07 20:22:46 --> 404 Page Not Found: Storage/settings
ERROR - 2024-07-07 20:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:32:18 --> Could not find the language line "Home"
ERROR - 2024-07-07 20:35:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 20:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:40:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 20:41:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-07 20:41:39 --> Could not find the language line "Bracelets"
ERROR - 2024-07-07 20:42:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 20:45:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 20:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:47:07 --> Could not find the language line "Home"
ERROR - 2024-07-07 20:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:52:23 --> Could not find the language line "Home"
ERROR - 2024-07-07 20:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:53:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-07 20:53:58 --> Could not find the language line "Other"
ERROR - 2024-07-07 20:54:03 --> Could not find the language line "Other"
ERROR - 2024-07-07 20:54:13 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-07 20:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 20:56:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 21:05:38 --> Could not find the language line "Socks"
ERROR - 2024-07-07 21:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:17:07 --> Could not find the language line "Home"
ERROR - 2024-07-07 21:18:31 --> Could not find the language line "products"
ERROR - 2024-07-07 21:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:29:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 21:31:08 --> Could not find the language line "Home"
ERROR - 2024-07-07 21:31:40 --> Could not find the language line "Home"
ERROR - 2024-07-07 21:31:42 --> Could not find the language line "Home"
ERROR - 2024-07-07 21:33:46 --> Could not find the language line "products"
ERROR - 2024-07-07 21:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 21:42:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 21:47:08 --> Could not find the language line "Home"
ERROR - 2024-07-07 21:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 22:00:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 22:03:12 --> Could not find the language line "products"
ERROR - 2024-07-07 22:11:23 --> Could not find the language line "Home"
ERROR - 2024-07-07 22:11:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 22:16:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 22:17:08 --> Could not find the language line "Home"
ERROR - 2024-07-07 22:19:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 22:36:27 --> Could not find the language line "Home"
ERROR - 2024-07-07 22:36:49 --> Could not find the language line "Home"
ERROR - 2024-07-07 22:47:09 --> Could not find the language line "Home"
ERROR - 2024-07-07 23:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 23:05:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-07 23:17:11 --> Could not find the language line "Home"
ERROR - 2024-07-07 23:22:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-07 23:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-07 23:24:48 --> 404 Page Not Found: Products/products
ERROR - 2024-07-07 23:47:10 --> Could not find the language line "Home"
ERROR - 2024-07-07 23:49:12 --> Could not find the language line "Home"
ERROR - 2024-07-07 23:58:09 --> Could not find the language line "Other"
