<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-01 00:00:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 00:03:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 00:04:19 --> Could not find the language line "products"
ERROR - 2024-06-01 00:04:30 --> Could not find the language line "Home"
ERROR - 2024-06-01 00:05:09 --> Could not find the language line "products"
ERROR - 2024-06-01 00:11:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 00:11:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 00:11:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 00:12:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 00:16:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 00:20:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 00:21:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 00:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 00:24:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 00:25:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 00:25:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 00:25:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 00:30:32 --> Could not find the language line "Home"
ERROR - 2024-06-01 00:40:50 --> Could not find the language line "Other"
ERROR - 2024-06-01 00:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 00:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 00:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 00:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 00:49:01 --> Could not find the language line "products"
ERROR - 2024-06-01 00:49:53 --> Could not find the language line "products"
ERROR - 2024-06-01 00:50:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 00:51:24 --> Could not find the language line "Home"
ERROR - 2024-06-01 00:52:01 --> Could not find the language line "accounts"
ERROR - 2024-06-01 00:53:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 00:56:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 00:56:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 00:56:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 01:00:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 01:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 01:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%sport%' OR a.description LIKE '%sport%' OR a.color LIKE '%sport%' OR a.barcode LIKE '%sport%' OR a.category LIKE '%sport%' OR a.sub_category LIKE '%sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-01 01:07:07 --> Could not find the language line "socks"
ERROR - 2024-06-01 01:07:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-01 01:08:02 --> Could not find the language line "other"
ERROR - 2024-06-01 01:08:49 --> Could not find the language line "Home"
ERROR - 2024-06-01 01:09:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 01:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 01:09:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 01:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-01 01:18:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 01:18:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 01:18:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 01:18:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 01:19:16 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:20:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:20:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:21:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:22:43 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:23:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 01:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 01:23:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 01:23:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:24:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-01 01:25:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 01:25:54 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:25:57 --> Could not find the language line "Other"
ERROR - 2024-06-01 01:26:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:27:12 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:27:47 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:28:15 --> Could not find the language line "Home"
ERROR - 2024-06-01 01:28:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:28:53 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-06-01 01:30:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 01:30:53 --> Could not find the language line "products"
ERROR - 2024-06-01 01:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:41:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:47:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 01:47:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:51:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:51:58 --> Could not find the language line "products"
ERROR - 2024-06-01 01:53:56 --> Could not find the language line "products"
ERROR - 2024-06-01 01:55:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:55:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 01:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 01:57:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 01:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 01:57:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 01:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 02:00:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 02:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 02:05:58 --> Could not find the language line "products"
ERROR - 2024-06-01 02:07:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 02:07:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 02:07:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 02:11:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 02:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 02:13:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:13:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:15:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 02:15:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 02:15:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 02:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 02:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:21:33 --> Could not find the language line "Other"
ERROR - 2024-06-01 02:27:38 --> Could not find the language line "Home"
ERROR - 2024-06-01 02:30:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 02:32:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 02:40:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 02:45:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 02:50:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 02:50:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 02:50:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 02:53:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-01 03:00:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 03:02:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 03:02:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 03:02:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 03:02:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 03:02:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 03:02:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 03:03:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 03:03:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:07:07 --> Could not find the language line "products"
ERROR - 2024-06-01 03:14:00 --> Could not find the language line "products"
ERROR - 2024-06-01 03:15:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 03:15:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 03:15:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 03:15:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 03:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 03:20:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:20:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:24:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:24:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 03:25:13 --> Could not find the language line "products"
ERROR - 2024-06-01 03:28:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:30:43 --> Could not find the language line "Home"
ERROR - 2024-06-01 03:32:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 03:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:36:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 03:37:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 03:37:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 03:40:04 --> Could not find the language line "Home"
ERROR - 2024-06-01 03:40:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 03:40:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 03:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 03:40:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 03:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 03:44:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 03:46:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 03:46:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 03:48:52 --> Could not find the language line "Home"
ERROR - 2024-06-01 03:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-01 03:56:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 03:56:31 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:00:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:01:41 --> Could not find the language line "products"
ERROR - 2024-06-01 04:04:08 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:09:15 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:12:27 --> Could not find the language line "socks"
ERROR - 2024-06-01 04:12:49 --> Could not find the language line "socks"
ERROR - 2024-06-01 04:16:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 04:19:40 --> Could not find the language line "socks"
ERROR - 2024-06-01 04:20:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 04:20:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 04:20:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 04:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%shoes%' OR a.description LIKE '%shoes%' OR a.color LIKE '%shoes%' OR a.barcode LIKE '%shoes%' OR a.category LIKE '%shoes%' OR a.sub_category LIKE '%shoes%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-01 04:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:30:51 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:32:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 04:32:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 04:33:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 04:33:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 04:33:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 04:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:34:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 04:40:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:41:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 04:42:19 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:43:14 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:44:21 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:44:44 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:45:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:47:10 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:49:24 --> Could not find the language line "Home"
ERROR - 2024-06-01 04:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:50:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 04:50:51 --> Could not find the language line "products"
ERROR - 2024-06-01 04:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 04:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 04:54:53 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-01 04:54:53 --> 404 Page Not Found: Assets/images
ERROR - 2024-06-01 04:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 04:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 04:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 04:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:00:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 05:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:04:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 05:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:07:02 --> Could not find the language line "products"
ERROR - 2024-06-01 05:07:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 05:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 05:07:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 05:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:14:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 05:14:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 05:14:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 05:14:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-01 05:14:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 05:14:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 05:18:02 --> Could not find the language line "Home"
ERROR - 2024-06-01 05:18:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 05:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:22:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 05:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:29:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 05:30:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 05:33:39 --> 404 Page Not Found: Products/index
ERROR - 2024-06-01 05:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 05:50:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 05:50:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 05:50:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 05:58:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 05:58:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 05:58:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 06:00:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 06:00:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 06:00:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 06:00:07 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-01 06:00:09 --> Could not find the language line "Other"
ERROR - 2024-06-01 06:00:09 --> Could not find the language line "Bracelets"
ERROR - 2024-06-01 06:00:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 06:00:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 06:00:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 06:00:12 --> Could not find the language line "Perfume"
ERROR - 2024-06-01 06:00:23 --> Could not find the language line "Other"
ERROR - 2024-06-01 06:00:34 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:08:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 06:19:33 --> Could not find the language line "other"
ERROR - 2024-06-01 06:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 06:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 06:22:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 06:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:24:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 06:25:02 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:25:10 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:28:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 06:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 06:28:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 06:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:30:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:38:14 --> Could not find the language line "products"
ERROR - 2024-06-01 06:39:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 06:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:42:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 06:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:45:05 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:47:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 06:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:51:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 06:51:57 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:53:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:54:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:55:01 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:55:06 --> Could not find the language line "Socks"
ERROR - 2024-06-01 06:55:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:55:57 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:58:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 06:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 06:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:00:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:09:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:10:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:12:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:12:12 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:29:24 --> Could not find the language line "products"
ERROR - 2024-06-01 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:29:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:30:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:31:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:40:03 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:41:53 --> Could not find the language line "Home"
ERROR - 2024-06-01 07:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:42:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 07:44:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 07:44:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 07:44:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 07:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:46:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 07:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 07:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 07:50:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 07:50:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 07:50:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 07:55:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 07:55:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 07:55:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 07:59:39 --> Could not find the language line "Other"
ERROR - 2024-06-01 08:00:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:01:53 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:02:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:06:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 08:06:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 08:06:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 08:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:06:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 08:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:11:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 08:13:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 08:13:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 08:13:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 08:15:50 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:16:23 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:16:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:17:52 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:18:04 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:18:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:18:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:18:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:18:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:19:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:19:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:19:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:19:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:20:44 --> Could not find the language line "products"
ERROR - 2024-06-01 08:26:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:30:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:38:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 08:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:40:49 --> Could not find the language line "products"
ERROR - 2024-06-01 08:41:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 08:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:53:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 08:57:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 08:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 08:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:00:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:01:49 --> Could not find the language line "products"
ERROR - 2024-06-01 09:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:02:50 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:05:27 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-06-01 09:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:09:54 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:13:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 09:13:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:15:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 09:15:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 09:15:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:22:57 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:23:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:30:24 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:30:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:36:20 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:45:25 --> Could not find the language line "products"
ERROR - 2024-06-01 09:46:13 --> Could not find the language line "Socks"
ERROR - 2024-06-01 09:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:46:35 --> Could not find the language line "Home"
ERROR - 2024-06-01 09:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:47 --> Could not find the language line "Socks"
ERROR - 2024-06-01 09:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:47:27 --> Could not find the language line "Socks"
ERROR - 2024-06-01 09:47:42 --> Could not find the language line "Socks"
ERROR - 2024-06-01 09:47:59 --> Could not find the language line "Socks"
ERROR - 2024-06-01 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 09:52:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 09:52:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 09:52:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 09:55:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 09:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 09:55:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 10:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:00:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:12:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:18:47 --> Could not find the language line "products"
ERROR - 2024-06-01 10:18:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 10:18:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 10:18:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 10:20:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 10:20:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 10:20:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 10:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:20:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:22:44 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:24:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 10:25:52 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:25:53 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:25:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 10:28:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 10:30:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:32:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 10:33:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-01 10:36:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 10:41:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 10:41:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 10:41:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 10:44:58 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:46:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 10:47:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 10:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 10:47:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 10:49:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 10:50:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 10:55:38 --> Could not find the language line "products"
ERROR - 2024-06-01 10:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:00:38 --> Could not find the language line "Home"
ERROR - 2024-06-01 11:04:26 --> Could not find the language line "Home"
ERROR - 2024-06-01 11:04:26 --> Could not find the language line "Home"
ERROR - 2024-06-01 11:06:55 --> Could not find the language line "Socks"
ERROR - 2024-06-01 11:07:08 --> Could not find the language line "other"
ERROR - 2024-06-01 11:07:14 --> Could not find the language line "socks"
ERROR - 2024-06-01 11:07:34 --> Could not find the language line "other"
ERROR - 2024-06-01 11:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:10:56 --> Could not find the language line "hats"
ERROR - 2024-06-01 11:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:18:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-01 11:18:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:18:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 11:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:25:28 --> Could not find the language line "Other"
ERROR - 2024-06-01 11:29:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:30:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:30:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 11:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 11:37:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 11:37:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 11:37:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 11:41:10 --> Could not find the language line "products"
ERROR - 2024-06-01 11:44:51 --> Could not find the language line "products"
ERROR - 2024-06-01 11:48:13 --> Could not find the language line "Home"
ERROR - 2024-06-01 11:52:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 11:55:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:55:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:56:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:57:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:57:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 11:58:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 11:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:00:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 12:00:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 12:00:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 12:00:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:01:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:05:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:07:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:08:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 12:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 12:17:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:18:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 12:18:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 12:18:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 12:19:13 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:23:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:23:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:23:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:24:21 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:24:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:24:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 12:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:24:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 12:24:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:27:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:28:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 12:28:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 12:28:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 12:29:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:30:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:30:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 12:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:33:14 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:33:20 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 12:33:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:33:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:34:31 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:35:07 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:35:25 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:35:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:36:00 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:36:26 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:38:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:39:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:39:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 12:39:42 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:39:49 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:39:58 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:36 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-01 12:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:42:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:42:58 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:43:00 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:46:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 12:46:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 12:46:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 12:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:47:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:47:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 12:48:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:49:15 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:49:16 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:51:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 12:53:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 12:55:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:56:19 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:56:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:56:56 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:57:01 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:57:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 12:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 12:57:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 12:57:31 --> Could not find the language line "Home"
ERROR - 2024-06-01 12:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 12:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:00:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 13:00:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 13:00:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 13:00:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:00:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:03:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 13:04:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 13:04:13 --> Could not find the language line "Perfume"
ERROR - 2024-06-01 13:04:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:04:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:04:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 13:04:58 --> Could not find the language line "Socks"
ERROR - 2024-06-01 13:06:52 --> Could not find the language line "Socks"
ERROR - 2024-06-01 13:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:09:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 13:09:10 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 13:09:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 13:10:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 13:10:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hair & Skin Products'
AND `items`.`price` <= '19'
AND `items`.`color` IN('N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 13:10:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 13:10:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 13:10:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 13:10:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 13:10:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hair & Skin Products'
AND `items`.`price` <= '19'
AND `items`.`color` IN('N')
AND `transaction_item_sizes`.`size` IN('A')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 13:10:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 13:11:59 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:12:21 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:13:00 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:17:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:23:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-01 13:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:28:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 13:28:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 13:28:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 13:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:30:17 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:30:26 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:30:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:30:46 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:31:05 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:31:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:31:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:31:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:32:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:32:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:32:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:32:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:32:57 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:33:17 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:33:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:33:34 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:34:51 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:38:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 13:38:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 13:38:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 13:44:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:44:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-01 13:44:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:45:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 13:45:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 13:45:20 --> Could not find the language line "Socks"
ERROR - 2024-06-01 13:45:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 13:45:32 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:50:48 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:54:33 --> Could not find the language line "Home"
ERROR - 2024-06-01 13:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 13:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:00:40 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:02:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 14:04:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:05:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:05:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:05:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:05:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:05:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:06:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:06:11 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:06:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:06:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 14:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:08:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:08:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 14:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:18:04 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:23:57 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:25:04 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:26:05 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:26:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:30:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:35:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 14:36:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:42:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 14:42:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 14:42:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 14:43:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:48:29 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:48:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 14:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 14:53:29 --> Could not find the language line "products"
ERROR - 2024-06-01 14:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:00:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:02:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-01 15:02:22 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:03:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 15:03:33 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:05:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:05:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:07:50 --> Could not find the language line "products"
ERROR - 2024-06-01 15:11:48 --> Could not find the language line "products"
ERROR - 2024-06-01 15:15:29 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:16:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:16:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:24:28 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:24:38 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:26:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:26:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:26:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:27:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 15:27:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 15:27:27 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:27:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 15:27:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 15:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:27:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:27:40 --> Could not find the language line "Bracelets"
ERROR - 2024-06-01 15:27:51 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:28:04 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:28:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 15:28:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-01 15:28:14 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:30:43 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:34:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 15:35:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:35:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:35:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:37:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:37:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:37:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:42:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 15:42:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 15:42:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 15:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 15:54:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 15:55:25 --> Could not find the language line "products"
ERROR - 2024-06-01 16:00:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:06:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 16:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 16:10:06 --> Could not find the language line "users"
ERROR - 2024-06-01 16:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 16:18:12 --> 404 Page Not Found: Users/products
ERROR - 2024-06-01 16:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 16:18:28 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:22:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 16:24:14 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:26:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 16:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:30:43 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:33:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 16:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 16:33:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 16:35:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 16:36:59 --> Could not find the language line "Home"
ERROR - 2024-06-01 16:39:02 --> Could not find the language line "other"
ERROR - 2024-06-01 16:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:44:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 16:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 16:44:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 16:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 16:58:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 16:58:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 16:58:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 16:59:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:00:43 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:01:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:03:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 17:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:06:28 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:15:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:19:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:19:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:19:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 17:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 17:19:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 17:21:22 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:23:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:24:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 17:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:27:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:28:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 17:28:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 17:30:44 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:32:30 --> Could not find the language line "users"
ERROR - 2024-06-01 17:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:39:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:41:38 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:43:33 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:43:33 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:44:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:46:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:47:58 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:48:35 --> Could not find the language line "accounts"
ERROR - 2024-06-01 17:49:05 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:49:09 --> Could not find the language line "accounts"
ERROR - 2024-06-01 17:52:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 17:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:54:06 --> Could not find the language line "Home"
ERROR - 2024-06-01 17:57:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 17:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 17:59:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 17:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 17:59:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 17:59:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 17:59:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 17:59:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 17:59:52 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:00:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 18:00:37 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:00:42 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:01:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 18:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:03:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 18:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:05:07 --> Could not find the language line "users"
ERROR - 2024-06-01 18:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:07:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 18:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:15:00 --> 404 Page Not Found: Home/products
ERROR - 2024-06-01 18:16:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 18:18:36 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:20:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 18:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:20:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 18:20:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 18:20:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 18:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 18:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 18:30:44 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:55:03 --> Could not find the language line "Home"
ERROR - 2024-06-01 18:57:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 18:58:37 --> 404 Page Not Found: Products/products
ERROR - 2024-06-01 18:59:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 18:59:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 18:59:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 19:00:44 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:02:04 --> Could not find the language line "users"
ERROR - 2024-06-01 19:02:18 --> Could not find the language line "users"
ERROR - 2024-06-01 19:06:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 19:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:14:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 19:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:18:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 19:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:24:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-01 19:25:48 --> 404 Page Not Found: Home/products
ERROR - 2024-06-01 19:30:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:32:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 19:39:33 --> Could not find the language line "products"
ERROR - 2024-06-01 19:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:49:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:50:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 19:50:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-01 19:50:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 19:50:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 19:50:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 19:50:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:51:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 19:56:03 --> Could not find the language line "products"
ERROR - 2024-06-01 19:57:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 19:59:01 --> Could not find the language line "Home"
ERROR - 2024-06-01 19:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:00:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:01:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 20:01:22 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:05:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 20:05:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 20:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 20:05:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 20:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:12:07 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:14:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 20:18:16 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:19:39 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 20:25:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 20:28:02 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:30:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:33:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 20:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:34:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 20:34:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 20:34:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 20:35:25 --> Could not find the language line "Home"
ERROR - 2024-06-01 20:37:19 --> Could not find the language line "accounts"
ERROR - 2024-06-01 20:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 20:44:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 20:47:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 20:54:20 --> 404 Page Not Found: Cart/products
ERROR - 2024-06-01 20:59:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:00:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:00:45 --> Could not find the language line "Home"
ERROR - 2024-06-01 21:00:55 --> Could not find the language line "Home"
ERROR - 2024-06-01 21:03:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:03:23 --> Could not find the language line "products"
ERROR - 2024-06-01 21:09:11 --> Could not find the language line "accounts"
ERROR - 2024-06-01 21:14:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:18:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:22:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:22:29 --> Could not find the language line "Home"
ERROR - 2024-06-01 21:25:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 21:26:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:28:06 --> Could not find the language line "users"
ERROR - 2024-06-01 21:30:46 --> Could not find the language line "Home"
ERROR - 2024-06-01 21:32:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:36:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:44:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 21:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:52:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:54:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 21:54:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 21:57:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:58:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:58:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 21:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 22:00:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 22:10:41 --> Could not find the language line "Home"
ERROR - 2024-06-01 22:10:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:11:23 --> Could not find the language line "Home"
ERROR - 2024-06-01 22:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 22:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:14:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 22:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:23:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 22:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 22:23:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 22:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 22:23:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 22:27:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:30:48 --> Could not find the language line "Home"
ERROR - 2024-06-01 22:31:26 --> Could not find the language line "users"
ERROR - 2024-06-01 22:31:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:32:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:35:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 22:39:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:40:34 --> Could not find the language line "Other"
ERROR - 2024-06-01 22:44:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-01 22:51:35 --> Could not find the language line "other"
ERROR - 2024-06-01 22:52:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-01 22:55:36 --> 404 Page Not Found: Products/products
ERROR - 2024-06-01 23:00:47 --> Could not find the language line "Home"
ERROR - 2024-06-01 23:00:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:00:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 23:04:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:04:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:08:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 23:12:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:12:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:14:14 --> Could not find the language line "users"
ERROR - 2024-06-01 23:14:53 --> Could not find the language line "Home"
ERROR - 2024-06-01 23:16:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 23:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 23:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:16:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-01 23:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 23:18:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-01 23:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-01 23:28:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 23:28:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 23:28:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 23:30:24 --> Could not find the language line "Home"
ERROR - 2024-06-01 23:30:24 --> Could not find the language line "Home"
ERROR - 2024-06-01 23:30:50 --> Could not find the language line "Home"
ERROR - 2024-06-01 23:45:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 23:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 23:45:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 23:46:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-01 23:46:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-01 23:46:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-01 23:54:20 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-06-01 23:56:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-01 23:58:24 --> 404 Page Not Found: Robotstxt/index
