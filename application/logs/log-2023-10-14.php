<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-14 00:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 00:18:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 00:18:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 00:18:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 00:22:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 00:34:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 00:35:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 00:40:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 00:43:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 00:43:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 00:55:30 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:11:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 01:17:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 01:25:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 01:38:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 01:40:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:41:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 01:42:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:42:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 01:46:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 01:59:34 --> Could not find the language line "Home"
ERROR - 2023-10-14 02:27:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 02:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 02:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 02:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 02:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 03:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 03:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 03:16:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 03:29:55 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:33:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 03:35:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:41:13 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:43:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 03:43:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-14 03:43:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:43:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 03:44:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 03:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 03:50:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:03:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 04:12:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 04:12:32 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:12:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 04:44:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:51:32 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:51:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:51:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:52:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:56:13 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:57:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 04:58:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 04:58:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:58:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:59:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:59:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 04:59:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 04:59:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:00:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:00:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:01:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:01:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:01:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:01:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:02:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:02:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:03:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 05:03:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:05:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:26:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:28:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 05:29:44 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:34:52 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-14 05:37:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:38:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 05:38:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:38:28 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:38:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 05:42:30 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:51:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 05:51:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-14 05:51:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 05:52:19 --> Could not find the language line "Home"
ERROR - 2023-10-14 05:52:32 --> Could not find the language line "assets"
ERROR - 2023-10-14 05:55:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-14 06:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:14:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 06:21:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 06:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:28:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:28:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:28:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:29:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:30:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:36:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:38:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 06:39:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 06:39:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 06:39:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 06:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 06:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 06:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 06:39:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 06:39:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 06:39:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 06:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:50:19 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:52:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 06:57:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 06:59:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 06:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 06:59:47 --> Could not find the language line "Socks"
ERROR - 2023-10-14 07:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:06:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:07:08 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 07:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:10:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:20:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 07:23:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 07:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 07:23:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 07:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:27:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 07:29:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:30:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:30:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 07:30:50 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:34:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:42:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:42:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:49:20 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:49:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:49:28 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:52:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 07:54:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 07:54:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 07:54:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 07:55:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:55:28 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:55:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:55:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:57:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:58:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:58:17 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:58:19 --> Could not find the language line "Home"
ERROR - 2023-10-14 07:59:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:02:01 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-14 08:02:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-14 08:02:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-14 08:02:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-14 08:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:04:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:04:55 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:06:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:06:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:06:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:24:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 08:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 08:24:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 08:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:29:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:29:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:29:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 08:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 08:41:13 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:47:03 --> 404 Page Not Found: Products/products
ERROR - 2023-10-14 08:50:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 08:50:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 08:54:34 --> Could not find the language line "Home"
ERROR - 2023-10-14 08:59:49 --> 404 Page Not Found: Products/products
ERROR - 2023-10-14 09:04:10 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-14 09:08:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 09:14:59 --> Could not find the language line "Home"
ERROR - 2023-10-14 09:20:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 09:44:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 09:47:04 --> 404 Page Not Found: Products/products
ERROR - 2023-10-14 09:47:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 09:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 09:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 09:55:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 09:55:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 09:55:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 09:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 10:03:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 10:03:11 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-14 10:03:14 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-14 10:03:53 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-14 10:03:57 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-14 10:04:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 10:04:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:04:44 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-14 10:04:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:05:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 10:05:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:05:49 --> Could not find the language line "Other"
ERROR - 2023-10-14 10:05:51 --> Could not find the language line "Other"
ERROR - 2023-10-14 10:05:53 --> Could not find the language line "Other"
ERROR - 2023-10-14 10:05:56 --> Could not find the language line "Other"
ERROR - 2023-10-14 10:05:58 --> Could not find the language line "Other"
ERROR - 2023-10-14 10:06:00 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 10:06:27 --> Could not find the language line "Socks"
ERROR - 2023-10-14 10:06:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 10:07:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 10:07:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 10:26:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 10:28:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:28:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:29:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 10:29:03 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-10-14 10:29:04 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-14 10:29:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 10:31:02 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:35:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:48:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:48:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:49:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:49:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:50:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:50:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 10:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 10:59:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:04:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:05:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:05:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:06:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:07:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:07:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-14 11:07:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-14 11:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:07:38 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:07:50 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:09:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:09:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:11:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:12:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:13:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:13:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:15:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:17:42 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:20:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:28:18 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:28:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:30:09 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-14 11:30:20 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:30:59 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:31:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:31:55 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-14 11:32:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:32:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:32:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:32:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:32:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:33:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:36:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:37:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:37:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-14 11:39:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:39:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:40:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:40:32 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:41:38 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 11:42:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:42:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:47:33 --> Could not find the language line "Home"
ERROR - 2023-10-14 11:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 11:48:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 12:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:05:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:08:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 12:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 12:10:32 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:13:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 12:13:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:19:09 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:23:38 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:24:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 12:24:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 12:24:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:25:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:26:42 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:33:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:37:17 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:37:18 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:41:39 --> Could not find the language line "Socks"
ERROR - 2023-10-14 12:42:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:43:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 12:45:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:50:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 12:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 13:04:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:10:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:14:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 13:14:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:14:19 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:14:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:15:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:22:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 13:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 13:22:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 13:22:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 13:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 13:29:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:29:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:40:16 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:40:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:42:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 13:46:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 13:46:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:46:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:48:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 13:54:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 13:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:02:23 --> Could not find the language line "Crocs"
ERROR - 2023-10-14 14:02:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 14:04:38 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:05:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:09:46 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:09:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:11:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:11:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:13:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 14:14:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:14:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:14:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:14:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 14:14:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 14:14:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 14:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:17:13 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:17:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:18:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:18:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:18:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:19:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:19:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:19:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:19:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:20:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:20:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:20:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:20:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 14:25:43 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:36:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:41:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-14 14:41:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-14 14:41:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-14 14:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:43:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-14 14:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:45:56 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:48:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:48:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:49:09 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:49:11 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:50:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 14:50:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:50:53 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:52:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 14:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 14:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 15:01:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-14 15:06:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-14 15:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 15:39:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 15:43:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 15:56:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 15:57:16 --> Could not find the language line "Home"
ERROR - 2023-10-14 15:59:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:00:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:01:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:06:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:17:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 16:17:46 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:18:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:18:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:19:41 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:19:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 16:26:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:31:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:32:18 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 16:32:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 16:33:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 16:34:02 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:34:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:43:00 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:44:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 16:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:47:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:49:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:51:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:54:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:58:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:58:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 16:59:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:17 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:59:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 16:59:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 16:59:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 16:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:00:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:00:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 17:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 17:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:01:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 17:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:02:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:02:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:03:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 17:05:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:05:35 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 17:05:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:06:18 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 17:06:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:06:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:06:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:06:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:06:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-14 17:06:53 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:06:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 17:07:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:07:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:07:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 17:07:34 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:13:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:17:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:18:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:20:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:20:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:22:23 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:22:56 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 17:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:24:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 17:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:25:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 17:25:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:26:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:26:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:26:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:26:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-14 17:27:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 17:33:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 17:34:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 17:34:20 --> Could not find the language line "Home"
ERROR - 2023-10-14 17:34:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 17:34:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 18:02:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 18:02:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:03:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:10:46 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:14:56 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:17:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 18:21:42 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:21:55 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:23:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:25:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 18:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:28:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:31:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:31:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 18:31:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 18:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:31:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 18:32:33 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 18:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:33:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:33:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:34:03 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:34:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:34:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:36:31 --> Could not find the language line "Socks"
ERROR - 2023-10-14 18:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:39:14 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:43:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:44:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:46:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:47:11 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:47:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:48:15 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:49:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-14 18:49:33 --> Could not find the language line "Socks"
ERROR - 2023-10-14 18:49:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:50:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:50:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:50:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:50:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:50:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:51:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 18:51:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 18:54:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 18:57:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 18:58:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 19:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 19:01:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:01:42 --> Could not find the language line "Socks"
ERROR - 2023-10-14 19:01:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:01:47 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 19:01:48 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 19:03:34 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:03:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 19:03:59 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 19:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 19:04:20 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 19:12:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-14 19:13:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:04 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:12 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:26 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:19:11 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:24:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 19:31:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 19:32:34 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:36:30 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:52:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:52:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:52:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 19:53:04 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 19:53:16 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:56:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 19:56:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:01:17 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:04:49 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:05:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-14 20:06:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-14 20:06:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-14 20:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 20:10:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 20:14:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 20:17:53 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:25:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 20:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 20:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 20:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 20:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 20:49:01 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:50:18 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:50:24 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 20:52:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:53:16 --> Could not find the language line "Perfume"
ERROR - 2023-10-14 20:53:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:53:46 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:53:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:53:59 --> Could not find the language line "Home"
ERROR - 2023-10-14 20:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:01:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:05:06 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:05:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:06:02 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:06:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 21:06:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:07:08 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:08:39 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:09:07 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:10:29 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:22:40 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:22:43 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:22:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:31:45 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:33:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 21:33:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:33:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-14 21:33:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 21:52:28 --> Could not find the language line "Home"
ERROR - 2023-10-14 21:53:11 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:03:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 22:03:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 22:03:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 22:03:21 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-14 22:03:28 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-14 22:03:32 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:03:33 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-14 22:03:41 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-14 22:03:49 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-14 22:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:04:05 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-14 22:04:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:04:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:05:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:05:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:07:51 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:09:37 --> Could not find the language line "Other"
ERROR - 2023-10-14 22:09:41 --> Could not find the language line "Other"
ERROR - 2023-10-14 22:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-14 22:15:25 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:16:22 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:32:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 22:38:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-14 22:40:04 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:40:05 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:41:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 22:43:10 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 22:43:54 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:44:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:44:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:44:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-14 22:53:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 22:53:36 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:54:57 --> Could not find the language line "Home"
ERROR - 2023-10-14 22:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-14 23:06:27 --> Could not find the language line "Home"
ERROR - 2023-10-14 23:17:31 --> Could not find the language line "Home"
ERROR - 2023-10-14 23:20:56 --> Could not find the language line "Home"
ERROR - 2023-10-14 23:33:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-14 23:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-14 23:44:18 --> Could not find the language line "Home"
ERROR - 2023-10-14 23:56:36 --> 404 Page Not Found: Assets/css
