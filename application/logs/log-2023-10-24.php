<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-24 00:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 00:17:03 --> Could not find the language line "Home"
ERROR - 2023-10-24 00:27:04 --> Could not find the language line "Home"
ERROR - 2023-10-24 00:29:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 00:36:14 --> Could not find the language line "Home"
ERROR - 2023-10-24 00:56:54 --> Could not find the language line "Crocs"
ERROR - 2023-10-24 01:13:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-24 01:14:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 01:20:44 --> Could not find the language line "Home"
ERROR - 2023-10-24 01:28:27 --> Could not find the language line "Home"
ERROR - 2023-10-24 01:32:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 01:38:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 01:38:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 01:38:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-24 01:47:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 02:00:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 02:00:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 02:03:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 02:05:00 --> Could not find the language line "Socks"
ERROR - 2023-10-24 02:06:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 02:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 02:18:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 02:20:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 02:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 02:33:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-24 02:39:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 02:43:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 02:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 02:50:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 02:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 03:10:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 03:10:54 --> Could not find the language line "Home"
ERROR - 2023-10-24 03:35:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 03:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 03:41:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 03:45:06 --> Could not find the language line "Home"
ERROR - 2023-10-24 03:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 04:12:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 04:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 04:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 04:16:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 04:16:49 --> Could not find the language line "Home"
ERROR - 2023-10-24 04:26:03 --> Could not find the language line "Home"
ERROR - 2023-10-24 04:37:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 04:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 04:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 04:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 05:00:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:06:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:26:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 05:26:10 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:27:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:38:44 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:39:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 05:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 05:51:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:00 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:02 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:52:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 05:56:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:06:44 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:15:16 --> Could not find the language line "Socks"
ERROR - 2023-10-24 06:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:23:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 06:24:59 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:26:18 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:31:25 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:37:09 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:40:05 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:40:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 06:41:06 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:41:06 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:41:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:41:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 06:41:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:46:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 06:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:49:40 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:53:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:54:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:54:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:54:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-24 06:55:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:55:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:55:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:55:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:55:43 --> Could not find the language line "Home"
ERROR - 2023-10-24 06:55:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:55:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:56:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:56:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:56:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:56:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 06:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 06:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:05:30 --> Could not find the language line "Home"
ERROR - 2023-10-24 07:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:10:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:11:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:11:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:11:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 07:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 07:21:38 --> Could not find the language line "Home"
ERROR - 2023-10-24 07:23:33 --> Could not find the language line "Home"
ERROR - 2023-10-24 07:25:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 07:28:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 07:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 07:28:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 07:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:34:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:34:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:34:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:35:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 07:42:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 07:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 07:46:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 07:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:02:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 08:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:10:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-24 08:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:14:24 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:15:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:16:24 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:16:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-24 08:16:58 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:28:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:30:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:31:29 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:31:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:32:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:32:31 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:34:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:34:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:35:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:35:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 08:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:37:04 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:37:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:37:33 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:37:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:37:43 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:38:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:38:18 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:40:09 --> Could not find the language line "Home"
ERROR - 2023-10-24 08:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 08:44:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 08:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 08:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 08:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:03:53 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:07:31 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-24 09:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:17:00 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:17:25 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:21:50 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:24:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:25:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:25:31 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:26:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:26:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:26:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:26:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 09:27:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 09:27:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 09:27:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:27:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:28:10 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:30:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:30:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:31:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:31:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:33:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:33:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:33:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:34:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 09:34:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:37:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:38:07 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:38:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:38:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-24 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2023-10-24 09:38:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:38:54 --> 404 Page Not Found: Assets/lib
ERROR - 2023-10-24 09:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:39:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:39:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:40:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:41:30 --> Could not find the language line "Home"
ERROR - 2023-10-24 09:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:43:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:44:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:44:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 09:45:00 --> Could not find the language line "Other"
ERROR - 2023-10-24 09:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:45:40 --> Could not find the language line "Other"
ERROR - 2023-10-24 09:45:56 --> Could not find the language line "Other"
ERROR - 2023-10-24 09:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:46:24 --> Could not find the language line "Other"
ERROR - 2023-10-24 09:46:34 --> Could not find the language line "Socks"
ERROR - 2023-10-24 09:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:52:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 09:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 09:58:53 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:03:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 10:08:55 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:08:59 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:09:22 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:10:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:11:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:12:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:12:22 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:13:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:13:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:18:24 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:20:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:24:00 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:28:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:32:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:32:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:34:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:35:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:43:44 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:47:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:48:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:48:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:49:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 10:49:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:49:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:49:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:49:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:49:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 10:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 10:54:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:54:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-24 10:56:28 --> Could not find the language line "Home"
ERROR - 2023-10-24 10:57:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 11:00:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:04:35 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:06:49 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:07:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 11:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 11:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 11:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 11:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 11:08:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:12:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 11:19:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:21:05 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:25:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:26:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:26:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:27:02 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-24 11:27:02 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-24 11:28:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 11:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 11:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 11:28:23 --> 404 Page Not Found: Home/accounts
ERROR - 2023-10-24 11:28:26 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-24 11:28:26 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-24 11:28:47 --> 404 Page Not Found: Env/index
ERROR - 2023-10-24 11:28:49 --> 404 Page Not Found: Env/index
ERROR - 2023-10-24 11:34:29 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:47:42 --> Could not find the language line "Home"
ERROR - 2023-10-24 11:51:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 11:57:09 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:00:37 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:01:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 12:02:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:04:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 12:04:14 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:08:43 --> Could not find the language line "Perfume"
ERROR - 2023-10-24 12:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:21:03 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:33:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 12:34:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 12:34:07 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-24 12:34:11 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-24 12:34:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 12:34:18 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-24 12:34:23 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-24 12:34:27 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-24 12:34:30 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-24 12:35:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:39:50 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:40:36 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:41:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:41:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:41:56 --> Could not find the language line "Other"
ERROR - 2023-10-24 12:42:00 --> Could not find the language line "Other"
ERROR - 2023-10-24 12:42:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:42:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:42:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:42:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:42:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:44:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:44:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:48:12 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:48:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:49:42 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:50:06 --> Could not find the language line "Home"
ERROR - 2023-10-24 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:55:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 12:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 12:59:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:02:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 13:02:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:04:28 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:10:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:10:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:11:02 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:11:42 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:11:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:15:11 --> Could not find the language line "Other"
ERROR - 2023-10-24 13:15:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 13:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 13:15:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 13:16:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 13:16:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 13:16:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 13:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:25:38 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:37:57 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:47:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 13:52:37 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:54:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:56:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 13:56:49 --> Could not find the language line "Home"
ERROR - 2023-10-24 13:59:26 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:00:36 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:01:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:02:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:03:11 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:06:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 14:08:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:11:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 14:17:01 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:17:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-24 14:17:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-24 14:17:10 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-24 14:17:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-24 14:24:26 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:30:02 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:38:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 14:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 14:44:27 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:48:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 14:50:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:53:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 14:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:55:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 14:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 14:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:01:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-24 15:01:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-24 15:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 15:05:15 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:10:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 15:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:12:54 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:14:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 15:14:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 15:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:18:01 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:22:40 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-24 15:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:26:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 15:26:58 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 15:27:00 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 15:27:16 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 15:27:17 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 15:27:34 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-24 15:27:34 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 15:27:34 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 15:27:34 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 15:27:35 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 15:27:35 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 15:27:35 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 15:27:35 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 15:27:35 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 15:27:37 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 15:27:53 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 15:27:54 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 15:27:57 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 15:28:11 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 15:28:12 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 15:28:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 15:28:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:41:25 --> Could not find the language line "Other"
ERROR - 2023-10-24 15:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 15:48:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-24 15:54:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 15:54:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 15:58:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 16:00:58 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:02:14 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:46 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:02:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:13:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 16:17:54 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:23:29 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 16:25:40 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:27:40 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:29:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 16:29:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:30:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:31:37 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:36:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:39:53 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:39:55 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:39:57 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:40:43 --> Could not find the language line "Socks"
ERROR - 2023-10-24 16:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:43:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:43:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:43:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:44:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:44:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:44:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:45:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:46:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:48:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:50:40 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 16:52:27 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:52:30 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:52:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 16:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 16:52:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 16:52:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 16:52:50 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:52:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:52:55 --> Could not find the language line "Perfume"
ERROR - 2023-10-24 16:53:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 16:53:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 16:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 16:59:19 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:02:32 --> Could not find the language line "Socks"
ERROR - 2023-10-24 17:07:56 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:08:29 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:12:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 17:14:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 17:20:45 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:21:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:23:24 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:27:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:33:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 17:33:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-24 17:33:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 17:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 17:44:47 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:45:41 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:46:23 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:46:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 17:46:36 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:46:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 17:46:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-24 17:47:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:48:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 17:48:18 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:50:57 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:50:57 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:52:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 17:52:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 17:52:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 17:52:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 17:53:56 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:01:05 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:07:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 18:15:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 18:17:29 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:17:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:19:27 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:19:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 18:22:10 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:29:43 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:34:07 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:34:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-24 18:34:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-24 18:34:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-24 18:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 18:45:53 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:47:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:53:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 18:53:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:54:17 --> Could not find the language line "Home"
ERROR - 2023-10-24 18:55:58 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:13:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:16:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 19:21:27 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:23:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:29:06 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:29:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:30:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:30:32 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:31:01 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:33:52 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:34:16 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:34:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:34:55 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 19:58:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:59:14 --> Could not find the language line "Home"
ERROR - 2023-10-24 19:59:39 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:02:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-24 20:02:40 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:03:28 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:03:37 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 20:05:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 20:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 20:11:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:17:36 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:18:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 20:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 20:19:22 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:23:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 20:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 20:36:33 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:36:44 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:37:19 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:42:12 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:44:20 --> Could not find the language line "Home"
ERROR - 2023-10-24 20:50:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2022%' OR a.description LIKE '%2022%' OR a.color LIKE '%2022%' OR a.barcode LIKE '%2022%' OR a.category LIKE '%2022%' OR a.sub_category LIKE '%2022%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 20:51:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 20:52:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-24 20:54:06 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-24 20:56:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 21:01:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 21:14:23 --> Could not find the language line "Home"
ERROR - 2023-10-24 21:18:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 21:26:03 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-24 21:35:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 21:47:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-24 21:51:37 --> Could not find the language line "Home"
ERROR - 2023-10-24 21:53:07 --> Could not find the language line "Home"
ERROR - 2023-10-24 21:53:48 --> Could not find the language line "Home"
ERROR - 2023-10-24 21:57:34 --> 404 Page Not Found: Env/index
ERROR - 2023-10-24 22:00:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-24 22:25:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-24 22:26:31 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:41:08 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:41:13 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:41:31 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:42:31 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:45:23 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:51:33 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-24 22:55:01 --> Could not find the language line "Home"
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-24 22:56:25 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-24 23:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-24 23:06:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-24 23:27:21 --> Could not find the language line "Home"
ERROR - 2023-10-24 23:34:55 --> 404 Page Not Found: Robotstxt/index
