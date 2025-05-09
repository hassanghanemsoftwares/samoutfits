<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-27 00:14:36 --> Could not find the language line "Home"
ERROR - 2025-02-27 00:22:04 --> Could not find the language line "Perfume"
ERROR - 2025-02-27 00:44:33 --> Could not find the language line "Home"
ERROR - 2025-02-27 00:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 00:50:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 00:50:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 01:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 01:04:04 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 01:14:33 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:18:49 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:27:28 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:31:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 01:31:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 01:43:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-27 01:44:34 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 01:54:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:54:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:54:41 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-27 01:55:59 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:56:11 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 01:56:46 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:57:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:57:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 01:58:30 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:58:32 --> Could not find the language line "Socks"
ERROR - 2025-02-27 01:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 01:58:52 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-27 01:58:58 --> Could not find the language line "Socks"
ERROR - 2025-02-27 01:59:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 01:59:13 --> Could not find the language line "Home"
ERROR - 2025-02-27 01:59:19 --> Could not find the language line "Home"
ERROR - 2025-02-27 02:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 02:01:40 --> Could not find the language line "Other"
ERROR - 2025-02-27 02:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 02:14:17 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 02:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 02:14:17 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 02:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 02:14:34 --> Could not find the language line "Home"
ERROR - 2025-02-27 02:22:37 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-27 02:44:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 03:14:35 --> Could not find the language line "Home"
ERROR - 2025-02-27 03:34:48 --> Could not find the language line "Home"
ERROR - 2025-02-27 03:44:35 --> Could not find the language line "Home"
ERROR - 2025-02-27 04:14:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 04:20:50 --> Could not find the language line "Home"
ERROR - 2025-02-27 04:44:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 05:14:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 05:17:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 05:32:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-27 05:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 05:44:36 --> Could not find the language line "Home"
ERROR - 2025-02-27 05:54:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 05:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 06:01:19 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:14:36 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:15:14 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 06:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 06:39:17 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:40:23 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:44:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 06:49:52 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:00:29 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:08:00 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:10:51 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:14:36 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:16:41 --> Could not find the language line "products"
ERROR - 2025-02-27 07:24:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:30:58 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 07:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 07:39:05 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:44:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:49:16 --> Could not find the language line "Home"
ERROR - 2025-02-27 07:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 08:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 08:04:18 --> Could not find the language line "Home"
ERROR - 2025-02-27 08:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 08:14:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 08:31:06 --> Could not find the language line "Other"
ERROR - 2025-02-27 08:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 08:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 08:44:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 09:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 09:29:51 --> Could not find the language line "Home"
ERROR - 2025-02-27 09:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 09:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 09:49:45 --> Could not find the language line "Home"
ERROR - 2025-02-27 09:55:05 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:03:43 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-27 10:03:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:03:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 10:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 10:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 10:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:15:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:15:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:15:58 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:44:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 10:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 10:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 10:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:11:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-27 11:14:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 11:15:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-27 11:19:54 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-27 11:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:33:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-27 11:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:34:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-27 11:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:34:10 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-27 11:44:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 11:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:51:06 --> Could not find the language line "Home"
ERROR - 2025-02-27 11:53:25 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-27 11:54:12 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-27 11:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:55:31 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-27 11:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 11:56:26 --> Could not find the language line "Home"
ERROR - 2025-02-27 11:58:14 --> Could not find the language line "Home"
ERROR - 2025-02-27 11:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 12:00:06 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:00:56 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:01:38 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:01:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:02:11 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:02:14 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 12:02:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-27 12:02:17 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:02:18 --> Could not find the language line "Other"
ERROR - 2025-02-27 12:02:25 --> Could not find the language line "Other"
ERROR - 2025-02-27 12:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:22:58 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:23:34 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:23:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 12:24:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:24:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 12:34:52 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-27 12:39:01 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:39:08 --> Could not find the language line "Other"
ERROR - 2025-02-27 12:44:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:47:01 --> Could not find the language line "Home"
ERROR - 2025-02-27 12:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:00:04 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:04:16 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:14:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 13:14:28 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:14:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:14:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 13:16:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:31:42 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:44:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 13:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 13:57:09 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 14:07:01 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 14:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 14:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:19:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-27 14:23:25 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:23:35 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:26:08 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:44:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 14:55:21 --> Could not find the language line "Home"
ERROR - 2025-02-27 15:14:42 --> Could not find the language line "Home"
ERROR - 2025-02-27 15:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 15:22:20 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 15:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 15:22:20 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 15:30:31 --> Could not find the language line "Home"
ERROR - 2025-02-27 15:44:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 15:45:56 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-27 15:45:56 --> Could not find the language line "Home"
ERROR - 2025-02-27 15:45:57 --> Could not find the language line "Home"
ERROR - 2025-02-27 16:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 16:28:22 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-27 16:32:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-27 16:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-27 16:44:42 --> Could not find the language line "Home"
ERROR - 2025-02-27 16:59:32 --> Could not find the language line "products"
ERROR - 2025-02-27 16:59:41 --> Could not find the language line "Home"
ERROR - 2025-02-27 17:14:42 --> Could not find the language line "Home"
ERROR - 2025-02-27 17:22:14 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-27 17:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 17:38:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-27 17:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-27 17:38:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-27 17:44:42 --> Could not find the language line "Home"
ERROR - 2025-02-27 17:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 18:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 18:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 18:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-27 18:14:43 --> Could not find the language line "Home"
ERROR - 2025-02-27 18:19:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 18:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 18:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 18:34:58 --> Could not find the language line "Home"
ERROR - 2025-02-27 18:44:43 --> Could not find the language line "Home"
ERROR - 2025-02-27 18:46:02 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-27 18:48:08 --> Could not find the language line "Home"
ERROR - 2025-02-27 19:05:04 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-02-27 19:14:43 --> Could not find the language line "Home"
ERROR - 2025-02-27 19:15:27 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 19:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 19:18:41 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 19:18:41 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 19:44:43 --> Could not find the language line "Home"
ERROR - 2025-02-27 19:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:09:39 --> Could not find the language line "Home"
ERROR - 2025-02-27 20:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 20:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:30:11 --> Could not find the language line "products"
ERROR - 2025-02-27 20:44:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 20:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 20:57:24 --> Could not find the language line "Other"
ERROR - 2025-02-27 20:58:14 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:11:43 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 21:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:14:44 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:15:50 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:17:19 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:18:45 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:27:24 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:27:33 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:29:02 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-27 21:29:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 21:29:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-27 21:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 21:30:15 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:33:08 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:40:02 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:44:45 --> Could not find the language line "Home"
ERROR - 2025-02-27 21:51:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-27 22:14:46 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:17:01 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:19:15 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:24:21 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-27 22:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:29:42 --> Could not find the language line "Perfume"
ERROR - 2025-02-27 22:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:30:16 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 22:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-27 22:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:32:38 --> 404 Page Not Found: Assets/img
ERROR - 2025-02-27 22:32:38 --> 404 Page Not Found: Assets/img
ERROR - 2025-02-27 22:32:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-27 22:34:37 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:39:15 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:42:18 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:44:46 --> Could not find the language line "Home"
ERROR - 2025-02-27 22:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 22:56:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 23:14:47 --> Could not find the language line "Home"
ERROR - 2025-02-27 23:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 23:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 23:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-27 23:31:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-27 23:35:55 --> Could not find the language line "Clothing"
ERROR - 2025-02-27 23:44:47 --> Could not find the language line "Home"
