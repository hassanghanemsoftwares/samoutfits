<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-01-26 00:01:00 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-01-26 00:11:28 --> Could not find the language line "Home"
ERROR - 2025-01-26 00:15:00 --> Could not find the language line "Home"
ERROR - 2025-01-26 00:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 00:32:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 00:45:01 --> Could not find the language line "Home"
ERROR - 2025-01-26 00:47:38 --> Could not find the language line "Home"
ERROR - 2025-01-26 00:55:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-26 00:55:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-01-26 00:58:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 01:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 01:15:00 --> Could not find the language line "Home"
ERROR - 2025-01-26 01:17:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 01:45:01 --> Could not find the language line "Home"
ERROR - 2025-01-26 02:15:01 --> Could not find the language line "Home"
ERROR - 2025-01-26 02:33:04 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-01-26 02:33:05 --> Could not find the language line "Home"
ERROR - 2025-01-26 02:33:05 --> 404 Page Not Found: Wp/index
ERROR - 2025-01-26 02:33:06 --> 404 Page Not Found: Bc/index
ERROR - 2025-01-26 02:33:06 --> 404 Page Not Found: Bk/index
ERROR - 2025-01-26 02:33:07 --> 404 Page Not Found: Backup/index
ERROR - 2025-01-26 02:33:08 --> 404 Page Not Found: New/index
ERROR - 2025-01-26 02:33:09 --> 404 Page Not Found: Main/index
ERROR - 2025-01-26 02:33:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 02:45:03 --> Could not find the language line "Home"
ERROR - 2025-01-26 02:59:18 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 03:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 03:15:02 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:29:34 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:31:33 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:33:55 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:36:03 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:39:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-26 03:42:25 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:43:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-01-26 03:45:02 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:52:59 --> Could not find the language line "Home"
ERROR - 2025-01-26 03:58:26 --> Could not find the language line "Home"
ERROR - 2025-01-26 04:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:12:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-26 04:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-26 04:12:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 04:15:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 04:23:36 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-26 04:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 04:34:10 --> Could not find the language line "Home"
ERROR - 2025-01-26 04:37:31 --> Could not find the language line "Home"
ERROR - 2025-01-26 04:45:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 04:47:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-01-26 04:57:26 --> Could not find the language line "Home"
ERROR - 2025-01-26 05:15:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 05:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 05:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 05:28:35 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 05:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 05:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 05:45:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:03:10 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:15:05 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:20:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:22:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 06:36:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:37:00 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:45:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 06:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 06:50:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-26 06:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 06:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 07:15:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 07:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 07:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 07:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 07:44:51 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 07:45:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 07:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 08:15:05 --> Could not find the language line "Home"
ERROR - 2025-01-26 08:15:53 --> Could not find the language line "Home"
ERROR - 2025-01-26 08:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 08:45:06 --> Could not find the language line "Home"
ERROR - 2025-01-26 08:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 09:05:56 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 09:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 09:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 09:15:06 --> Could not find the language line "Home"
ERROR - 2025-01-26 09:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 09:27:00 --> 404 Page Not Found: Assets/lib
ERROR - 2025-01-26 09:45:06 --> Could not find the language line "Home"
ERROR - 2025-01-26 10:03:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-01-26 10:08:57 --> Could not find the language line "Crocs"
ERROR - 2025-01-26 10:15:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 10:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 10:30:45 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-01-26 10:35:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 10:45:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 11:00:15 --> Could not find the language line "Home"
ERROR - 2025-01-26 11:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 11:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 11:15:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 11:37:32 --> Could not find the language line "Home"
ERROR - 2025-01-26 11:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 11:45:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 11:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 11:53:53 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:01:25 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:06:38 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-26 12:06:38 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:08:27 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:15:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:27:05 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:30:55 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:30:55 --> 404 Page Not Found: Assets/mail
ERROR - 2025-01-26 12:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:36:33 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 12:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 12:43:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 12:45:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 12:49:00 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-01-26 12:53:38 --> Could not find the language line "Home"
ERROR - 2025-01-26 13:07:00 --> Could not find the language line "Home"
ERROR - 2025-01-26 13:08:26 --> Could not find the language line "Other"
ERROR - 2025-01-26 13:15:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 13:29:14 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2025-01-26 13:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 13:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 13:45:08 --> Could not find the language line "Home"
ERROR - 2025-01-26 13:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 13:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 13:54:14 --> Could not find the language line "Home"
ERROR - 2025-01-26 14:15:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 14:30:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 14:30:04 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-26 14:30:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 14:33:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-26 14:45:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 14:48:43 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:00:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-01-26 15:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:15:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:27:43 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 15:45:09 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:49:25 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:49:40 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 15:49:58 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 15:50:06 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 15:50:07 --> Could not find the language line "Home"
ERROR - 2025-01-26 15:59:31 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 16:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 16:15:10 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:24:16 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 16:29:36 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:37:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-26 16:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-26 16:37:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 16:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 16:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 16:39:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-01-26 16:39:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-01-26 16:39:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 16:45:14 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:52:19 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:54:35 --> 404 Page Not Found: Metajson/index
ERROR - 2025-01-26 16:54:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 16:54:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 17:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 17:15:10 --> Could not find the language line "Home"
ERROR - 2025-01-26 17:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 17:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 17:35:04 --> Could not find the language line "Home"
ERROR - 2025-01-26 17:38:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 17:45:10 --> Could not find the language line "Home"
ERROR - 2025-01-26 17:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 17:53:36 --> Could not find the language line "Home"
ERROR - 2025-01-26 18:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:15:11 --> Could not find the language line "Home"
ERROR - 2025-01-26 18:15:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-01-26 18:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:40:17 --> Could not find the language line "Home"
ERROR - 2025-01-26 18:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 18:45:11 --> Could not find the language line "Home"
ERROR - 2025-01-26 18:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:06:22 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:11:27 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:15:11 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:15:28 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:21:29 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:45:11 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:45:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 19:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:54:23 --> Could not find the language line "Other"
ERROR - 2025-01-26 19:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 19:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:09:08 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:10:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:11:20 --> Could not find the language line "Perfume"
ERROR - 2025-01-26 20:13:10 --> Could not find the language line "Perfume"
ERROR - 2025-01-26 20:13:11 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:15:12 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:41:36 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:42:20 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:42:29 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:45:12 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-01-26 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-26 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-26 20:45:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 20:45:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-01-26 20:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 20:52:36 --> Could not find the language line "Home"
ERROR - 2025-01-26 20:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:03:35 --> Could not find the language line "Home"
ERROR - 2025-01-26 21:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:15:12 --> Could not find the language line "Home"
ERROR - 2025-01-26 21:17:58 --> Could not find the language line "Home"
ERROR - 2025-01-26 21:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:28:40 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-01-26 21:28:40 --> Could not find the language line "Home"
ERROR - 2025-01-26 21:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 21:45:13 --> Could not find the language line "Home"
ERROR - 2025-01-26 22:06:59 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-01-26 22:06:59 --> Could not find the language line "Home"
ERROR - 2025-01-26 22:15:14 --> Could not find the language line "Home"
ERROR - 2025-01-26 22:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 22:36:57 --> Could not find the language line "Clothing"
ERROR - 2025-01-26 22:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 22:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 22:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 22:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 22:45:19 --> Could not find the language line "Home"
ERROR - 2025-01-26 23:15:17 --> Could not find the language line "Home"
ERROR - 2025-01-26 23:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-01-26 23:45:16 --> Could not find the language line "Home"
