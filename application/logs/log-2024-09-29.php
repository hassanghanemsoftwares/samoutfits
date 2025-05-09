<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-09-29 00:19:54 --> Could not find the language line "Home"
ERROR - 2024-09-29 00:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 00:50:00 --> Could not find the language line "Home"
ERROR - 2024-09-29 01:19:54 --> Could not find the language line "Home"
ERROR - 2024-09-29 01:49:55 --> Could not find the language line "Home"
ERROR - 2024-09-29 02:20:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 02:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 02:49:51 --> Could not find the language line "Home"
ERROR - 2024-09-29 03:19:54 --> Could not find the language line "Home"
ERROR - 2024-09-29 03:49:52 --> Could not find the language line "Home"
ERROR - 2024-09-29 04:19:53 --> Could not find the language line "Home"
ERROR - 2024-09-29 04:49:51 --> Could not find the language line "Home"
ERROR - 2024-09-29 05:19:52 --> Could not find the language line "Home"
ERROR - 2024-09-29 05:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 05:49:52 --> Could not find the language line "Home"
ERROR - 2024-09-29 06:19:52 --> Could not find the language line "Home"
ERROR - 2024-09-29 06:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 06:49:53 --> Could not find the language line "Home"
ERROR - 2024-09-29 07:16:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 07:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 07:19:53 --> Could not find the language line "Home"
ERROR - 2024-09-29 07:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 07:22:29 --> Could not find the language line "products"
ERROR - 2024-09-29 07:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 07:49:53 --> Could not find the language line "Home"
ERROR - 2024-09-29 08:00:04 --> Could not find the language line "Home"
ERROR - 2024-09-29 08:19:54 --> Could not find the language line "Home"
ERROR - 2024-09-29 08:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 08:45:31 --> Could not find the language line "Home"
ERROR - 2024-09-29 08:49:55 --> Could not find the language line "Home"
ERROR - 2024-09-29 09:19:55 --> Could not find the language line "Home"
ERROR - 2024-09-29 09:49:55 --> Could not find the language line "Home"
ERROR - 2024-09-29 10:19:56 --> Could not find the language line "Home"
ERROR - 2024-09-29 10:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 10:49:56 --> Could not find the language line "Home"
ERROR - 2024-09-29 11:19:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 11:49:58 --> Could not find the language line "Home"
ERROR - 2024-09-29 11:53:41 --> Could not find the language line "Home"
ERROR - 2024-09-29 12:19:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 12:49:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 13:19:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 13:22:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-09-29 13:49:59 --> Could not find the language line "Home"
ERROR - 2024-09-29 13:52:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-29 13:52:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-29 13:52:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 14:19:58 --> Could not find the language line "Home"
ERROR - 2024-09-29 14:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 14:49:58 --> Could not find the language line "Home"
ERROR - 2024-09-29 15:19:59 --> Could not find the language line "Home"
ERROR - 2024-09-29 15:49:59 --> Could not find the language line "Home"
ERROR - 2024-09-29 15:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 15:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w179%' OR a.description LIKE '%w179%' OR a.color LIKE '%w179%' OR a.barcode LIKE '%w179%' OR a.category LIKE '%w179%' OR a.sub_category LIKE '%w179%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-09-29 15:56:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-09-29 15:56:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 15:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 16:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 16:20:00 --> Could not find the language line "Home"
ERROR - 2024-09-29 16:50:00 --> Could not find the language line "Home"
ERROR - 2024-09-29 17:20:01 --> Could not find the language line "Home"
ERROR - 2024-09-29 17:26:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 17:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 17:50:01 --> Could not find the language line "Home"
ERROR - 2024-09-29 17:59:11 --> Could not find the language line "Home"
ERROR - 2024-09-29 18:20:02 --> Could not find the language line "Home"
ERROR - 2024-09-29 18:50:02 --> Could not find the language line "Home"
ERROR - 2024-09-29 19:20:02 --> Could not find the language line "Home"
ERROR - 2024-09-29 19:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 19:21:53 --> Could not find the language line "Home"
ERROR - 2024-09-29 19:50:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 20:20:05 --> Could not find the language line "Home"
ERROR - 2024-09-29 20:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 20:31:35 --> Could not find the language line "Home"
ERROR - 2024-09-29 20:39:08 --> Could not find the language line "Home"
ERROR - 2024-09-29 20:42:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-09-29 20:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-09-29 20:42:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-09-29 20:50:05 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:10:54 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:10:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:11:57 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:12:06 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-09-29 21:20:08 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:29:08 --> Could not find the language line "Home"
ERROR - 2024-09-29 21:50:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:20:12 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:30:33 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:31:49 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:37:28 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:37:39 --> Could not find the language line "Home"
ERROR - 2024-09-29 22:50:11 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:20:12 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:24:29 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:26:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-09-29 23:33:08 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:33:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:34:09 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:34:14 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-09-29 23:50:16 --> Could not find the language line "Home"
ERROR - 2024-09-29 23:58:57 --> Could not find the language line "Home"
