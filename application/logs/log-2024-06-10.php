<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-10 00:02:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 00:03:13 --> Could not find the language line "Home"
ERROR - 2024-06-10 00:08:40 --> Could not find the language line "users"
ERROR - 2024-06-10 00:17:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 00:17:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 00:17:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 00:19:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 00:28:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 00:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 00:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 00:30:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 00:33:11 --> Could not find the language line "Home"
ERROR - 2024-06-10 00:42:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:42:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:42:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 00:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 00:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:43:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 00:43:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 00:43:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 00:43:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:44:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:45:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:45:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:45:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 00:45:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 00:45:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:45:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:46:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:48:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:48:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 00:48:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 00:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 00:49:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 00:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 01:03:14 --> Could not find the language line "Home"
ERROR - 2024-06-10 01:03:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 01:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 01:03:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 01:03:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:08:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:15:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:15:32 --> Could not find the language line "accounts"
ERROR - 2024-06-10 01:31:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:33:12 --> Could not find the language line "Home"
ERROR - 2024-06-10 01:33:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 01:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:33:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 01:34:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 01:34:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 01:34:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 01:34:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 01:34:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 01:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 01:46:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 01:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 01:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 01:56:29 --> Could not find the language line "Perfume"
ERROR - 2024-06-10 01:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 01:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 01:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 02:01:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:03:14 --> Could not find the language line "Home"
ERROR - 2024-06-10 02:12:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:15:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 02:16:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 02:17:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-10 02:17:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:18:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 02:19:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 02:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:23:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:25:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:31:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:33:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 02:35:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 02:35:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 02:35:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 02:37:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 02:37:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 02:37:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 02:39:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 02:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:47:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:48:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:48:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:49:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:49:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:49:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:49:56 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 02:50:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:50:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 02:51:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:51:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:51:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:52:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:53:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:53:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:53:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:54:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:54:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:55:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:56:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:56:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:57:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 02:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 02:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:00:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:03:14 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:03:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:03:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:04:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:04:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:05:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:06:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:06:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:06:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:08:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:08:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:10:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:10:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:10:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:10:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:11:09 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:11:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:11:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:11:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:11:42 --> Could not find the language line "Other"
ERROR - 2024-06-10 03:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:12:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:12:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:13:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:13:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:14:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:15:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:15:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:15:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:16:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:16:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:16:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:16:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:17:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:18:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:18:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:18:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:18:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:19:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 03:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 03:20:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:20:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:21:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:22:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:22:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:26:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:30:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 03:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 03:30:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 03:33:12 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:38:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 03:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 03:47:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 03:47:46 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:50:40 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:51:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:55:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 03:55:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 03:59:42 --> Could not find the language line "Home"
ERROR - 2024-06-10 03:59:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 04:03:13 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:03:44 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:05:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:05:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:05:33 --> Could not find the language line "Other"
ERROR - 2024-06-10 04:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:14:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:14:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:14:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:15:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:15:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:15:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:16:43 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 04:30:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:33:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:34:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 04:34:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 04:35:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 04:35:50 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:37:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 04:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:39:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:39:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:42:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:42:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:42:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 04:45:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 04:46:49 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:49:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 04:49:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 04:49:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 04:50:08 --> Could not find the language line "Home"
ERROR - 2024-06-10 04:54:47 --> Could not find the language line "Socks"
ERROR - 2024-06-10 05:00:09 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 05:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 05:02:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 05:03:13 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:04:38 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:09:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 05:10:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 05:15:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 05:15:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 05:16:56 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:18:41 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 05:30:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 05:33:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 05:33:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:44:31 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-10 05:45:00 --> Could not find the language line "Home"
ERROR - 2024-06-10 05:47:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 05:59:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 06:00:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 06:03:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 06:05:25 --> Could not find the language line "Home"
ERROR - 2024-06-10 06:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 06:08:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 06:08:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 06:08:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 06:30:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 06:30:15 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-10 06:32:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 06:33:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 06:34:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 06:35:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 06:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:39:05 --> Could not find the language line "accounts"
ERROR - 2024-06-10 06:41:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 06:41:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 06:41:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 06:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:47:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 06:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:48:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 06:48:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 06:48:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 06:50:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 06:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:03:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 07:08:37 --> Could not find the language line "Home"
ERROR - 2024-06-10 07:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:13:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 07:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:21:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 07:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 07:21:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 07:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 07:27:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:31:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:33:14 --> Could not find the language line "Home"
ERROR - 2024-06-10 07:35:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:39:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:43:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:44:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:47:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:47:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:47:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:47:35 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:47:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:51:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 07:51:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 07:51:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 07:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:52:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 07:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:53:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 07:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:54:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 07:54:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 07:55:52 --> Could not find the language line "accounts"
ERROR - 2024-06-10 08:03:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:03:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:10:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 08:14:43 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:20:01 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-06-10 08:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:23:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:23:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 08:24:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:26:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 08:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:26:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:27:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 08:28:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 08:28:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 08:28:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 08:30:10 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:32:58 --> Could not find the language line "Socks"
ERROR - 2024-06-10 08:33:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:33:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:39:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 08:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:42:46 --> Could not find the language line "Other"
ERROR - 2024-06-10 08:47:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:47:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:53:05 --> Could not find the language line "Home"
ERROR - 2024-06-10 08:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 08:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 08:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:55:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 08:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:59:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 08:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:00:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 09:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:00:30 --> Could not find the language line "Perfume"
ERROR - 2024-06-10 09:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:03:18 --> Could not find the language line "Home"
ERROR - 2024-06-10 09:04:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:13:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:16:56 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-06-10 09:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:19:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:24:43 --> Could not find the language line "Home"
ERROR - 2024-06-10 09:24:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:28:40 --> Could not find the language line "Home"
ERROR - 2024-06-10 09:28:41 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-06-10 09:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 09:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:32:57 --> Could not find the language line "Home"
ERROR - 2024-06-10 09:33:17 --> Could not find the language line "Home"
ERROR - 2024-06-10 09:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:38:43 --> Could not find the language line "Perfume"
ERROR - 2024-06-10 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:43:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-10 09:43:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-10 09:44:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 09:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:49:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:49:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 09:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:56:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 09:56:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 09:56:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 09:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 09:58:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 09:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 09:58:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 09:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:01:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:01:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:01:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:02:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:03:18 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:03:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 10:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:13:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 10:15:34 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:16:17 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:16:44 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:16:54 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:17:02 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:17:06 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-10 10:17:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-10 10:19:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 10:19:51 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 10:20:47 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:30:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 10:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:33:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:35:52 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 10:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:39:53 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 10:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 10:45:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 10:46:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:47:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 10:49:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 10:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:49:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 10:49:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-10 10:49:58 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:50:14 --> Could not find the language line "Socks"
ERROR - 2024-06-10 10:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:50:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:50:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 10:51:03 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:51:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 10:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:52:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 10:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 10:53:46 --> Could not find the language line "Perfume"
ERROR - 2024-06-10 10:53:56 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:54:44 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:54:54 --> Could not find the language line "Home"
ERROR - 2024-06-10 10:57:51 --> Could not find the language line "Other"
ERROR - 2024-06-10 10:59:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 11:03:19 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:03:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 11:08:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 11:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 11:20:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 11:20:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 11:20:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 11:20:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 11:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 11:21:42 --> Could not find the language line "accounts"
ERROR - 2024-06-10 11:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:24:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:27:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:30:12 --> Could not find the language line "products"
ERROR - 2024-06-10 11:33:19 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:37:44 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:46:25 --> Could not find the language line "accounts"
ERROR - 2024-06-10 11:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 11:55:06 --> Could not find the language line "Other"
ERROR - 2024-06-10 11:55:10 --> Could not find the language line "Other"
ERROR - 2024-06-10 11:55:36 --> Could not find the language line "Other"
ERROR - 2024-06-10 11:55:56 --> Could not find the language line "Other"
ERROR - 2024-06-10 11:56:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-10 11:56:28 --> Could not find the language line "Home"
ERROR - 2024-06-10 11:59:18 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:00:06 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:00:33 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:01:42 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:01:47 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:02:11 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:02:23 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:03:10 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:03:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:04:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 12:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 12:04:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 12:05:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 12:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 12:05:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 12:12:17 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:12:31 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:12:53 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:13:35 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:15:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 12:15:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 12:16:28 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:16:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 12:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:22:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:23:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:25:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:33:21 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:34:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 12:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:36:25 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:39:00 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 12:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 12:43:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 12:43:40 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:46:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 12:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 12:46:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 12:46:37 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:48:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 12:48:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 12:52:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 12:52:52 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-06-10 12:52:53 --> Could not find the language line "Home"
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: Wp/index
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: Bc/index
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: Bk/index
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: Backup/index
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: New/index
ERROR - 2024-06-10 12:52:53 --> 404 Page Not Found: Main/index
ERROR - 2024-06-10 12:52:53 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:03:19 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:04:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:04:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:05:47 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:08:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:08:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:08:39 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:08:59 --> Could not find the language line "Socks"
ERROR - 2024-06-10 13:10:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:18:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 13:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:20:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:20:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:22:19 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:24:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 13:24:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 13:24:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:24:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 13:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:28:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:33:21 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:43:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:43:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:43:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 13:43:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 13:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:48:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 13:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 13:58:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 13:58:32 --> Could not find the language line "Home"
ERROR - 2024-06-10 13:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:01:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:02:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:03:20 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 14:03:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 14:03:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:04:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 14:04:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 14:04:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 14:07:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:07:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:07:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:07:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:08:03 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-10 14:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:11:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:11:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 14:12:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:16:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-10 14:18:10 --> Could not find the language line "products"
ERROR - 2024-06-10 14:18:42 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:19:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:19:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 14:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 14:26:35 --> Could not find the language line "Other"
ERROR - 2024-06-10 14:27:01 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:27:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:31:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:33:19 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:33:55 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:34:01 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:35:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:35:37 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:38:13 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:38:59 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:39:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:43:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:43:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 14:43:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 14:47:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:49:11 --> Could not find the language line "Home"
ERROR - 2024-06-10 14:51:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:55:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 14:55:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 14:59:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 15:03:21 --> Could not find the language line "Home"
ERROR - 2024-06-10 15:05:29 --> Could not find the language line "Home"
ERROR - 2024-06-10 15:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:12:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:12:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 15:13:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 15:13:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 15:13:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 15:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 15:13:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 15:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 15:13:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 15:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%H540%' OR a.description LIKE '%H540%' OR a.color LIKE '%H540%' OR a.barcode LIKE '%H540%' OR a.category LIKE '%H540%' OR a.sub_category LIKE '%H540%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 15:13:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 15:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 15:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:20:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:33:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 15:34:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:37:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 15:38:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:42:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:46:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:48:47 --> Could not find the language line "Home"
ERROR - 2024-06-10 15:49:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 15:50:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:54:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 15:54:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 15:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:54:57 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-10 15:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 15:59:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:02:55 --> Could not find the language line "products"
ERROR - 2024-06-10 16:03:21 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:03:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:07:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:11:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:15:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 16:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 16:27:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 16:28:18 --> Could not find the language line "Other"
ERROR - 2024-06-10 16:31:53 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:32:01 --> Could not find the language line "Bracelets"
ERROR - 2024-06-10 16:32:16 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:33:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:33:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 16:36:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 16:38:32 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 16:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 16:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 16:43:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 16:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 16:47:14 --> Could not find the language line "Home"
ERROR - 2024-06-10 16:52:24 --> Could not find the language line "Other"
ERROR - 2024-06-10 16:55:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:56:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:57:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 16:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 16:58:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 17:03:06 --> Could not find the language line "Other"
ERROR - 2024-06-10 17:03:22 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:07:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 17:07:10 --> Could not find the language line "Clothes"
ERROR - 2024-06-10 17:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 17:11:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 17:11:12 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:11:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 17:13:49 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 17:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 17:31:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 17:31:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 17:31:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 17:33:21 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:36:26 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:36:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 17:36:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 17:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 17:37:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 17:37:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 17:37:27 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:37:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:37:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 17:38:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 17:38:47 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 17:39:09 --> Could not find the language line "Home"
ERROR - 2024-06-10 17:44:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 17:48:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 17:48:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 17:52:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 17:53:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 17:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 17:53:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 18:01:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:03:23 --> Could not find the language line "Home"
ERROR - 2024-06-10 18:05:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:05:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 18:08:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:14:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:18:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:19:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 18:27:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:28:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 18:28:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 18:28:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 18:32:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:33:23 --> Could not find the language line "Home"
ERROR - 2024-06-10 18:35:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:37:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 18:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 18:37:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 18:38:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 18:38:04 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-10 18:38:04 --> Could not find the language line "Bracelets"
ERROR - 2024-06-10 18:38:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-10 18:38:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 18:38:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-10 18:38:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 18:38:14 --> Could not find the language line "Perfume"
ERROR - 2024-06-10 18:38:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 18:38:20 --> Could not find the language line "Other"
ERROR - 2024-06-10 18:38:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:39:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:51:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:51:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 18:54:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 18:56:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 18:56:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:00:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 19:01:03 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:02:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 19:03:23 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:04:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 19:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:10:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:10:42 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 19:12:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:13:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:16:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 19:18:38 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:20:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:28:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 19:28:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 19:28:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 19:32:53 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:33:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 19:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:49:42 --> Could not find the language line "Home"
ERROR - 2024-06-10 19:50:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 19:53:36 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 19:54:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 19:55:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 19:55:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 19:55:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 19:55:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 19:58:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:00:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 20:01:51 --> Could not find the language line "Home"
ERROR - 2024-06-10 20:02:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:03:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 20:06:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:07:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:07:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:07:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:08:28 --> Could not find the language line "Other"
ERROR - 2024-06-10 20:12:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-10 20:16:44 --> Could not find the language line "Home"
ERROR - 2024-06-10 20:17:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 20:26:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:27:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 20:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-10 20:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:33:24 --> Could not find the language line "Home"
ERROR - 2024-06-10 20:34:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:34:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:34:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:36:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:36:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:36:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:37:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 20:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 20:38:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:39:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 20:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 20:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:40:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:42:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:45:50 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-10 20:46:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 20:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 20:46:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:48:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:48:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:48:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 20:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 20:49:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 20:50:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 20:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 20:52:15 --> Could not find the language line "Home"
ERROR - 2024-06-10 20:56:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 20:58:56 --> Could not find the language line "Socks"
ERROR - 2024-06-10 20:59:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 20:59:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 20:59:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 20:59:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 21:03:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 21:03:28 --> Could not find the language line "Home"
ERROR - 2024-06-10 21:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 21:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 21:05:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 21:07:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 21:10:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 21:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'accounts'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 21:10:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 21:11:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 21:15:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 21:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 21:19:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 21:19:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 21:33:25 --> Could not find the language line "Home"
ERROR - 2024-06-10 21:34:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 21:38:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 21:42:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 21:42:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-10 21:42:54 --> Could not find the language line "Home"
ERROR - 2024-06-10 21:46:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 21:58:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 22:03:26 --> Could not find the language line "Home"
ERROR - 2024-06-10 22:10:19 --> Could not find the language line "accounts"
ERROR - 2024-06-10 22:13:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 22:18:04 --> Could not find the language line "accounts"
ERROR - 2024-06-10 22:33:26 --> Could not find the language line "Home"
ERROR - 2024-06-10 22:36:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 22:39:59 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-10 22:42:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 22:46:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 22:49:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 22:49:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 22:49:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 22:50:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 22:54:19 --> Could not find the language line "Other"
ERROR - 2024-06-10 22:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 22:54:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 22:54:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 22:54:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 22:54:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-10 22:55:34 --> Could not find the language line "Home"
ERROR - 2024-06-10 22:55:56 --> Could not find the language line "Home"
ERROR - 2024-06-10 22:57:38 --> Could not find the language line "Home"
ERROR - 2024-06-10 23:02:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:02:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:03:31 --> Could not find the language line "Home"
ERROR - 2024-06-10 23:05:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:05:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:09:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:09:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:09:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 23:13:30 --> Could not find the language line "Home"
ERROR - 2024-06-10 23:13:32 --> 404 Page Not Found: Home/accounts
ERROR - 2024-06-10 23:13:32 --> 404 Page Not Found: Home/assets
ERROR - 2024-06-10 23:13:32 --> 404 Page Not Found: Home/home
ERROR - 2024-06-10 23:16:06 --> Could not find the language line "0"
ERROR - 2024-06-10 23:18:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:27:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:27:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:27:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-10 23:29:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:29:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:30:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:32:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:32:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:33:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:33:30 --> Could not find the language line "Home"
ERROR - 2024-06-10 23:37:50 --> Could not find the language line "Other"
ERROR - 2024-06-10 23:43:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:43:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:43:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 23:43:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:44:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:47:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-10 23:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-10 23:47:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:47:25 --> Could not find the language line "Home"
ERROR - 2024-06-10 23:50:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-10 23:51:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 23:55:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-10 23:57:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-10 23:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-10 23:57:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-10 23:59:21 --> 404 Page Not Found: Assets/lib
