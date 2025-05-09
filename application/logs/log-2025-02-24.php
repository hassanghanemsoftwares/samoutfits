<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-24 00:13:51 --> Could not find the language line "Home"
ERROR - 2025-02-24 00:31:28 --> Could not find the language line "Crocs"
ERROR - 2025-02-24 00:43:53 --> Could not find the language line "Home"
ERROR - 2025-02-24 00:51:21 --> Could not find the language line "0"
ERROR - 2025-02-24 01:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 01:13:52 --> Could not find the language line "Home"
ERROR - 2025-02-24 01:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c908%' OR a.description LIKE '%c908%' OR a.color LIKE '%c908%' OR a.barcode LIKE '%c908%' OR a.category LIKE '%c908%' OR a.sub_category LIKE '%c908%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 01:43:52 --> Could not find the language line "Home"
ERROR - 2025-02-24 02:11:00 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-24 02:13:53 --> Could not find the language line "Home"
ERROR - 2025-02-24 02:19:39 --> Could not find the language line "Home"
ERROR - 2025-02-24 02:24:27 --> Could not find the language line "Home"
ERROR - 2025-02-24 02:43:54 --> Could not find the language line "Home"
ERROR - 2025-02-24 02:59:45 --> Could not find the language line "Home"
ERROR - 2025-02-24 03:13:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 03:20:25 --> Could not find the language line "Home"
ERROR - 2025-02-24 03:43:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 03:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 03:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 03:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 03:49:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 03:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 03:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 03:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 03:49:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 03:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 03:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 03:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 03:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%w181%' OR a.description LIKE '%w181%' OR a.color LIKE '%w181%' OR a.barcode LIKE '%w181%' OR a.category LIKE '%w181%' OR a.sub_category LIKE '%w181%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 03:49:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 03:49:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 03:49:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 03:49:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 03:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 03:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 04:03:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-24 04:03:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-24 04:03:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 04:13:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 04:15:34 --> Could not find the language line "Home"
ERROR - 2025-02-24 04:43:54 --> Could not find the language line "Home"
ERROR - 2025-02-24 04:53:15 --> Could not find the language line "Home"
ERROR - 2025-02-24 05:08:11 --> Could not find the language line "Home"
ERROR - 2025-02-24 05:09:01 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-24 05:13:54 --> Could not find the language line "Home"
ERROR - 2025-02-24 05:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 05:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 05:43:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 05:50:16 --> Could not find the language line "Home"
ERROR - 2025-02-24 05:53:54 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:00:27 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:08:32 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:13:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:17:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-24 06:20:29 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:21:30 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:21:37 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 06:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 06:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 06:26:39 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 06:29:01 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:32:17 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-02-24 06:43:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:49:29 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:53:28 --> Could not find the language line "Home"
ERROR - 2025-02-24 06:56:22 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:00:36 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:09:49 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:13:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:16:25 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 07:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 07:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 07:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 07:43:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:47:35 --> Could not find the language line "Home"
ERROR - 2025-02-24 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 07:59:40 --> Could not find the language line "Home"
ERROR - 2025-02-24 08:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:04:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 08:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:06:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:10:22 --> Could not find the language line "Home"
ERROR - 2025-02-24 08:13:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 08:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:39:38 --> Could not find the language line "Home"
ERROR - 2025-02-24 08:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:43:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 08:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 08:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:13:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:15:01 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-24 09:15:20 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:15:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-24 09:16:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-24 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:25:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:25:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:26:40 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:29:37 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:31:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-24 09:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 09:32:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-24 09:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:44:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 09:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:47:03 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-24 09:47:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:47:13 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-24 09:47:13 --> Could not find the language line "Home"
ERROR - 2025-02-24 09:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 09:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:02:46 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:13:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:16:10 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:16:16 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 10:16:35 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:16:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:16:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:17:26 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:17:55 --> Could not find the language line "Other"
ERROR - 2025-02-24 10:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:24:04 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:24:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:25:29 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:26:13 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:27:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:38:25 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:40:14 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:47:16 --> Could not find the language line "Home"
ERROR - 2025-02-24 10:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:49:21 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-24 10:56:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 10:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 10:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:02:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 11:02:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 11:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:04:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-24 11:11:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-24 11:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:13:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:18:34 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:18:35 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:20:22 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:23:23 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:28:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 11:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:38:07 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:38:22 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:38:42 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:38:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:39:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:39:27 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:39:35 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 11:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-24 11:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 11:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 12:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 12:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 12:06:10 --> Could not find the language line "Home"
ERROR - 2025-02-24 12:13:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 12:34:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-24 12:43:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:07:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:13:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:25:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-24 13:27:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-24 13:36:40 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 13:43:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:49:32 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:53:40 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:54:46 --> Could not find the language line "Home"
ERROR - 2025-02-24 13:59:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:08:36 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:13:28 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:13:59 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:14:27 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:20:32 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:43:59 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:48:39 --> Could not find the language line "Home"
ERROR - 2025-02-24 14:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 14:58:42 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:07:41 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:07:41 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:15:43 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:20:42 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-24 15:36:21 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:36:30 --> Could not find the language line "Other"
ERROR - 2025-02-24 15:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:51:24 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:51:25 --> Could not find the language line "Home"
ERROR - 2025-02-24 15:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:55:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 15:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:04:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 16:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:04:18 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-02-24 16:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:06:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:07:42 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:27 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:10:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:10:56 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:11:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:11:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:11:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:12:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-24 16:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:04 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:07 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:34 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:04 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:13:10 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:30 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:13:35 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 16:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:15:24 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:27 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-24 16:16:27 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:18:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:23:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:44:00 --> Could not find the language line "Home"
ERROR - 2025-02-24 16:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 16:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:01:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-24 17:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:14:01 --> Could not find the language line "Home"
ERROR - 2025-02-24 17:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:27:29 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-24 17:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:42:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-24 17:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-24 17:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 17:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 18:04:34 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:11:43 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:14:02 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:19:52 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:20:12 --> Could not find the language line "Other"
ERROR - 2025-02-24 18:22:58 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:22:59 --> 404 Page Not Found: 404error_testhtml/index
ERROR - 2025-02-24 18:23:00 --> 404 Page Not Found: Contact_us/index
ERROR - 2025-02-24 18:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 18:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 18:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 18:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-24 18:58:15 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-24 18:58:15 --> Could not find the language line "Home"
ERROR - 2025-02-24 19:14:02 --> Could not find the language line "Home"
ERROR - 2025-02-24 19:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-24 19:46:47 --> Could not find the language line "Home"
ERROR - 2025-02-24 19:52:45 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:07:42 --> Could not find the language line "Other"
ERROR - 2025-02-24 20:14:02 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:19:08 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:21:52 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:26:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 20:34:51 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:44:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:46:32 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-24 20:55:39 --> Could not find the language line "Home"
ERROR - 2025-02-24 20:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 21:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 21:14:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 21:14:31 --> Could not find the language line "Home"
ERROR - 2025-02-24 21:17:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-24 21:18:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-24 21:42:08 --> Could not find the language line "Home"
ERROR - 2025-02-24 21:44:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 21:59:11 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:13:04 --> Could not find the language line "Clothing"
ERROR - 2025-02-24 22:14:03 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:18:47 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:22:54 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:24:16 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:25:52 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:27:29 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:37:29 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:44:05 --> Could not find the language line "Home"
ERROR - 2025-02-24 22:57:55 --> Could not find the language line "Home"
ERROR - 2025-02-24 23:02:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-24 23:14:07 --> Could not find the language line "Home"
ERROR - 2025-02-24 23:15:46 --> Could not find the language line "Home"
ERROR - 2025-02-24 23:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 23:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-24 23:23:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-24 23:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-24 23:44:04 --> Could not find the language line "Home"
ERROR - 2025-02-24 23:52:01 --> Could not find the language line "Home"
ERROR - 2025-02-24 23:52:02 --> Could not find the language line "Home"
