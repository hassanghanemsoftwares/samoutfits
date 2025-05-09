<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-09 00:06:35 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 00:10:37 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:22:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 00:22:55 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:36:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 00:39:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 00:45:08 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:46:21 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:47:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:50:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:52:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:57:28 --> 404 Page Not Found: Env/index
ERROR - 2023-10-09 00:57:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 00:57:30 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2023-10-09 00:59:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 01:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 01:29:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 01:29:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:29:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 01:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 01:31:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:45:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:46:57 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:48:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:52:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:56:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 01:59:01 --> Could not find the language line "Home"
ERROR - 2023-10-09 01:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 01:59:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 02:00:35 --> Could not find the language line "Home"
ERROR - 2023-10-09 02:16:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-09 02:31:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-09 03:30:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 03:32:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 03:32:13 --> Could not find the language line "Home"
ERROR - 2023-10-09 03:35:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 03:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 03:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 04:00:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 04:01:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Big Sizes%' OR (a.description LIKE '%Big%' AND a.description LIKE '%Sizes%')) OR ((sub_category = 'Big Sizes' OR sub_category = 'Big Sizes') AND (tag = 'Big Sizes' OR tag = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 04:03:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 04:25:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 04:25:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 04:26:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 04:46:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 04:47:56 --> Could not find the language line "Home"
ERROR - 2023-10-09 04:49:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 04:56:41 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:00:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:11:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:18:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:22:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:42:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 05:44:18 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:47:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:54:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 05:57:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:00:35 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:06:56 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:18:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:20:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 06:20:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:21:31 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:23:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:24:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:27:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 06:31:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:31:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:31:12 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:39:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 06:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 06:55:18 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:55:19 --> Could not find the language line "Home"
ERROR - 2023-10-09 06:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 07:07:22 --> Could not find the language line "Home"
ERROR - 2023-10-09 07:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:12:28 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 07:13:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 07:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:16:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 07:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:26:25 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-09 07:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:43:11 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-09 07:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:50:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 07:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 07:52:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 07:52:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 07:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:12:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:24:19 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:24:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:24:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:24:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:25:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:25:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:26:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:28:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:28:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:28:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:29:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:30:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:30:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:18 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:31:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:32:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:32:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 08:32:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:33:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:33:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:34:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:34:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:34:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:35:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:35:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:35:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:35:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:36:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:36:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 08:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:46:42 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:50:01 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:50:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 08:50:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('40', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 08:50:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 08:50:31 --> Could not find the language line "Socks"
ERROR - 2023-10-09 08:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 08:58:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:58:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 08:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:00:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:04:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 09:07:38 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:08:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 09:09:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 09:09:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 09:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:30:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 09:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 09:30:57 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:31:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:32:43 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 09:35:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:42:13 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:43:00 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 09:43:07 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 09:44:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 09:44:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 09:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bracelets'
AND `items`.`price` <= '13'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 09:44:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 09:46:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:46:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-09 09:48:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 09:48:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:52:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 09:55:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:03:43 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:07:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 10:09:22 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:09:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 10:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:13:35 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:24:00 --> 404 Page Not Found: Sites/all
ERROR - 2023-10-09 10:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:30:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:36:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:37:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:38:35 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-09 10:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:40:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 10:46:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 10:47:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:48:20 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:49:10 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:50:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-09 10:50:54 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:51:37 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 10:51:39 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:51:49 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:54:14 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:55:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 10:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 10:57:59 --> Could not find the language line "Home"
ERROR - 2023-10-09 10:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:00:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 11:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:00:30 --> Could not find the language line "Crocs"
ERROR - 2023-10-09 11:11:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:13:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:16:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:17:12 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:18:40 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:18:43 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:20:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 11:20:35 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:20:46 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:24:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:26:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:26:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 11:26:53 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:26:56 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:27:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 11:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:27:22 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:30:59 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 11:40:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 11:58:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:00:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:04:03 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 12:12:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 12:12:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 12:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:12:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 12:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 12:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 12:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:19:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:19:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 12:19:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 12:19:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 12:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:23:31 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:24:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 12:24:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 12:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-09 12:24:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 12:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:26:11 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-09 12:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:28:07 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:28:15 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:28:17 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:28:22 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:39:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 12:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:43:41 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 12:44:09 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 12:44:18 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 12:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:51:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 12:53:07 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:54:11 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:55:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:55:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 12:55:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 12:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:56:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 12:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 12:56:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 12:56:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 12:56:37 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:57:17 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:57:21 --> Could not find the language line "Home"
ERROR - 2023-10-09 12:58:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 12:58:56 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-09 12:58:57 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-09 12:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:03:56 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:07:10 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:10:30 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:11:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:12:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:16:54 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:23:51 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:29:21 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:29:44 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:30:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:30:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 13:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:30:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 13:31:01 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:31:08 --> Could not find the language line "Socks"
ERROR - 2023-10-09 13:31:10 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:33:08 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:37:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 13:40:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:43:49 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-09 13:43:49 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-09 13:53:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-09 13:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:05:45 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:05:53 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:07:32 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:15:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 14:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 14:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:19:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-09 14:19:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-09 14:22:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:30:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 14:30:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 14:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:35:25 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:40:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 14:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 14:40:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 14:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 14:57:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 14:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 15:01:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 15:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-09 15:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-09 15:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 15:26:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:26:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:27:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 15:27:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 15:27:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:27:06 --> Could not find the language line "assets"
ERROR - 2023-10-09 15:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-09 15:34:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 15:38:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 15:41:45 --> Could not find the language line "Home"
ERROR - 2023-10-09 15:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 15:43:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 15:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 15:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:02:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:05:25 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:05:38 --> Could not find the language line "Socks"
ERROR - 2023-10-09 16:05:49 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:05:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:05:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:06:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:06:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:06:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:06:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 16:06:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:10:20 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:13:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:17:46 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:18:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:22:01 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:24:06 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:25:37 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:25:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:25:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:25:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:25:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:26:02 --> Could not find the language line "Socks"
ERROR - 2023-10-09 16:28:13 --> Could not find the language line "Socks"
ERROR - 2023-10-09 16:30:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:30:46 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:42:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:42:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:47:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:52:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 16:53:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 16:54:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 16:55:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:55:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 16:56:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:01:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:08:46 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 17:09:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 17:11:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 17:11:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:18:42 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:24:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:27:45 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:28:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:28:28 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:32:08 --> Could not find the language line "Socks"
ERROR - 2023-10-09 17:41:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:41:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:42:46 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:45:14 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:46:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:46:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 17:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 17:46:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 17:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:46:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 17:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:47:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-09 17:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:47:36 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:48:16 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:49:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:49:38 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:51:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:51:38 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 17:55:18 --> Could not find the language line "Home"
ERROR - 2023-10-09 17:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:01:07 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:03:10 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:03:22 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:07:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:12:57 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:15:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 18:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:16:11 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-10-09 18:16:22 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-09 18:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:18:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:18:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:19:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:19:28 --> Could not find the language line "Clot"
ERROR - 2023-10-09 18:19:28 --> 404 Page Not Found: Products/catego
ERROR - 2023-10-09 18:19:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:21:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:22:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:23:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:24:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:26:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:27:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:27:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:27:58 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:27:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:28:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:28:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:29:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:30:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:30:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:30:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:30:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:33:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:33:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:33:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 18:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:33:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 18:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:34:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 18:34:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:35:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:35:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 18:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:35:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:35:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:36:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:36:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:36:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:37:19 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:37:21 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:37:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:37:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:37:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:37:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:37:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:37:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:38:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:38:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:38:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:38:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-09 18:38:39 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:38:50 --> Could not find the language line "Perfume"
ERROR - 2023-10-09 18:39:01 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:39:07 --> Could not find the language line "Socks"
ERROR - 2023-10-09 18:39:32 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:40:29 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:40:53 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:41:08 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:41:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:41:17 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:44:28 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:44:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:45:05 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:48:11 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:51:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 18:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:53:37 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:54:06 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:54:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 18:55:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 18:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 18:55:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-09 18:55:32 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:56:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 18:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:00:30 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:26:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:27:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:27:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:27:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:27:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 19:27:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 19:27:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 19:28:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 19:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 19:31:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 19:33:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:37:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:37:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:37:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:42:08 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 19:43:48 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:46:55 --> Could not find the language line "Other"
ERROR - 2023-10-09 19:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:49:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-09 19:49:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-09 19:49:41 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-09 19:49:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-09 19:54:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 19:54:35 --> Could not find the language line "products"
ERROR - 2023-10-09 19:56:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 19:56:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 19:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 19:57:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:57:09 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:58:03 --> Could not find the language line "Home"
ERROR - 2023-10-09 19:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 19:59:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:02:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:03:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:03:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:04:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:04:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-09 20:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-09 20:04:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-09 20:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:05:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:06:11 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:06:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 20:06:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 20:06:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:06:26 --> Could not find the language line "Perfume"
ERROR - 2023-10-09 20:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:06:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:07:25 --> Could not find the language line "Perfume"
ERROR - 2023-10-09 20:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:07:52 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:12:04 --> Could not find the language line "Other"
ERROR - 2023-10-09 20:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:12:40 --> Could not find the language line "products"
ERROR - 2023-10-09 20:17:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-09 20:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:26:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 20:27:20 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:32:11 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:34:06 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:34:49 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:45:26 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:46:00 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:48:51 --> Could not find the language line "products"
ERROR - 2023-10-09 20:50:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-09 20:52:40 --> Could not find the language line "Other"
ERROR - 2023-10-09 20:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 20:54:17 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:55:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:55:19 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:55:36 --> Could not find the language line "Home"
ERROR - 2023-10-09 20:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:06:56 --> Could not find the language line "products"
ERROR - 2023-10-09 21:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:39:31 --> Could not find the language line "Home"
ERROR - 2023-10-09 21:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:41:04 --> Could not find the language line "Home"
ERROR - 2023-10-09 21:41:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 21:43:07 --> Could not find the language line "products"
ERROR - 2023-10-09 21:46:57 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:01:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 22:01:54 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:18:43 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:19:18 --> Could not find the language line "products"
ERROR - 2023-10-09 22:19:47 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:21:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:26:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 22:34:03 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:35:19 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:37:23 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:39:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 22:39:27 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:41:31 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:42:33 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:43:02 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:43:50 --> Could not find the language line "Home"
ERROR - 2023-10-09 22:54:01 --> Could not find the language line "products"
ERROR - 2023-10-09 22:56:42 --> Could not find the language line "products"
ERROR - 2023-10-09 22:59:24 --> Could not find the language line "products"
ERROR - 2023-10-09 23:02:06 --> Could not find the language line "products"
ERROR - 2023-10-09 23:04:48 --> Could not find the language line "products"
ERROR - 2023-10-09 23:07:29 --> Could not find the language line "products"
ERROR - 2023-10-09 23:10:11 --> Could not find the language line "products"
ERROR - 2023-10-09 23:15:35 --> Could not find the language line "products"
ERROR - 2023-10-09 23:18:51 --> Could not find the language line "Home"
ERROR - 2023-10-09 23:20:58 --> Could not find the language line "products"
ERROR - 2023-10-09 23:26:22 --> Could not find the language line "products"
ERROR - 2023-10-09 23:31:45 --> Could not find the language line "products"
ERROR - 2023-10-09 23:36:57 --> Could not find the language line "Home"
ERROR - 2023-10-09 23:37:09 --> Could not find the language line "products"
ERROR - 2023-10-09 23:37:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-09 23:40:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 23:40:14 --> Could not find the language line "Home"
ERROR - 2023-10-09 23:42:38 --> Could not find the language line "products"
ERROR - 2023-10-09 23:47:56 --> Could not find the language line "products"
ERROR - 2023-10-09 23:49:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-09 23:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-09 23:51:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-09 23:53:20 --> Could not find the language line "products"
ERROR - 2023-10-09 23:58:43 --> Could not find the language line "products"
