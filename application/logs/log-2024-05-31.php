<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-31 00:00:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 00:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 00:12:39 --> Could not find the language line "Home"
ERROR - 2024-05-31 00:13:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 00:13:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 00:13:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 00:13:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 00:19:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 00:19:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 00:19:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 00:20:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 00:20:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Shoes')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 00:20:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 00:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 00:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 00:30:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 00:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 00:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 00:45:36 --> Could not find the language line "products"
ERROR - 2024-05-31 00:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 00:52:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 00:52:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 00:56:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 00:56:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:00:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:00:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:02:13 --> Could not find the language line "products"
ERROR - 2024-05-31 01:04:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:04:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:12:10 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:14:12 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:16:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 01:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 01:16:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 01:16:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 01:17:12 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 01:20:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:21:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 01:21:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-31 01:21:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 01:21:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 01:21:30 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:24:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:30:19 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:32:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 01:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:36:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:38:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 01:40:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 01:48:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 01:52:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 01:55:49 --> Could not find the language line "Home"
ERROR - 2024-05-31 01:56:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 01:56:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 01:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 01:58:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 01:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 01:58:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 02:00:15 --> Could not find the language line "Home"
ERROR - 2024-05-31 02:04:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 02:12:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 02:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 02:12:24 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 02:18:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 02:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 02:18:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 02:30:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 02:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 02:33:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 02:33:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 02:33:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 02:33:59 --> Could not find the language line "Home"
ERROR - 2024-05-31 02:36:30 --> Could not find the language line "Home"
ERROR - 2024-05-31 02:36:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 02:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 02:40:24 --> Could not find the language line "Other"
ERROR - 2024-05-31 02:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 02:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 02:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 02:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 02:48:26 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 02:48:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 02:48:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 02:53:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 02:59:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 02:59:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 02:59:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 03:00:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:02:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 03:02:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 03:02:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 03:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 03:16:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 03:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 03:19:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 03:20:07 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-31 03:20:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 03:21:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 03:24:09 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-31 03:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 03:25:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 03:28:51 --> Could not find the language line "products"
ERROR - 2024-05-31 03:30:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 03:41:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 03:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 03:41:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 03:46:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 03:52:01 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:53:47 --> Could not find the language line "products"
ERROR - 2024-05-31 03:55:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:55:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:55:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:55:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 03:55:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 03:55:25 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-31 03:56:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 03:56:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 03:56:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 03:56:34 --> Could not find the language line "products"
ERROR - 2024-05-31 03:56:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 04:00:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:00:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 04:00:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 04:00:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 04:02:34 --> Could not find the language line "products"
ERROR - 2024-05-31 04:06:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 04:07:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:16:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 04:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 04:16:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 04:16:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 04:16:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 04:16:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 04:17:53 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:19:43 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 04:19:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 04:19:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 04:19:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 04:25:50 --> Could not find the language line "products"
ERROR - 2024-05-31 04:27:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 04:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 04:30:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:30:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 04:30:54 --> Could not find the language line "socks"
ERROR - 2024-05-31 04:30:57 --> Could not find the language line "Perfume"
ERROR - 2024-05-31 04:30:57 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 04:30:57 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-31 04:30:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 04:31:00 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 04:31:00 --> Could not find the language line "Bracelets"
ERROR - 2024-05-31 04:31:00 --> Could not find the language line "Other"
ERROR - 2024-05-31 04:31:01 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-31 04:31:03 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 04:31:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 04:33:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 04:33:34 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:37:02 --> Could not find the language line "other"
ERROR - 2024-05-31 04:37:32 --> Could not find the language line "Other"
ERROR - 2024-05-31 04:47:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 04:48:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 04:48:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 04:48:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 04:51:40 --> Could not find the language line "Home"
ERROR - 2024-05-31 04:55:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 04:56:06 --> Could not find the language line "products"
ERROR - 2024-05-31 04:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 05:00:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 05:04:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 05:04:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 05:04:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 05:11:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 05:16:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 05:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 05:30:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 05:32:41 --> Could not find the language line "Perfume"
ERROR - 2024-05-31 05:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 05:36:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 05:42:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 05:42:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 05:42:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 05:48:44 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 05:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 05:50:25 --> 404 Page Not Found: Storage/settings
ERROR - 2024-05-31 05:51:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-31 05:51:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-31 05:54:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 05:59:57 --> Could not find the language line "products"
ERROR - 2024-05-31 06:00:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:01:08 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 06:02:36 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:02:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 06:02:57 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:07:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 06:07:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 06:07:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 06:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:18:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 06:18:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 06:18:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 06:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:24:47 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 06:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:24:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 06:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:30:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:32:47 --> Could not find the language line "Socks"
ERROR - 2024-05-31 06:32:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:36:48 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:36:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 06:38:19 --> Could not find the language line "products"
ERROR - 2024-05-31 06:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:39:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 06:39:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-31 06:39:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 06:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:43:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 06:43:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 06:44:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 06:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:48:05 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:48:49 --> Could not find the language line "Other"
ERROR - 2024-05-31 06:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 06:55:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 06:56:48 --> Could not find the language line "Home"
ERROR - 2024-05-31 07:00:19 --> Could not find the language line "Home"
ERROR - 2024-05-31 07:00:34 --> Could not find the language line "products"
ERROR - 2024-05-31 07:00:41 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-31 07:02:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 07:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:09:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 07:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 07:09:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 07:12:33 --> Could not find the language line "Home"
ERROR - 2024-05-31 07:12:42 --> Could not find the language line "Home"
ERROR - 2024-05-31 07:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:16:14 --> Could not find the language line "products"
ERROR - 2024-05-31 07:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:24:19 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 07:30:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 07:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:31:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 07:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 07:31:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 07:32:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 07:32:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 07:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:40:46 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 07:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:44:55 --> Could not find the language line "Other"
ERROR - 2024-05-31 07:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 07:52:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 07:57:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-31 08:00:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:00:56 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-31 08:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:04:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 08:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 08:04:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 08:06:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 08:08:58 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-31 08:16:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 08:16:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 08:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 08:22:01 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:24:58 --> Could not find the language line "Other"
ERROR - 2024-05-31 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:28:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 08:28:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 08:28:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 08:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:30:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:33:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 08:36:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 08:36:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 08:36:55 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:36:56 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:37:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 08:39:30 --> Could not find the language line "products"
ERROR - 2024-05-31 08:41:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 08:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 08:48:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 08:49:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 08:52:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:52:34 --> Could not find the language line "Home"
ERROR - 2024-05-31 08:52:41 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-05-31 08:53:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 08:55:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 08:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 08:55:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 08:57:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 08:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 08:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:00:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:01:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:01:40 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:05:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:08:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 09:09:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:09:58 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:10:01 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:10:01 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:13:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:17:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:25:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:28:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:28:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 09:29:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:29:11 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 09:29:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 09:30:15 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 09:30:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:32:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 09:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 09:32:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 09:33:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:40:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-31 09:41:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:41:46 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:53:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 09:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 09:57:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 09:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:00:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:01:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:05:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:05:55 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-31 10:05:58 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:07:41 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:35 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:44 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:46 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:12:30 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 10:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 10:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:17:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:17:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:18:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:18:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 10:18:42 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:19:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:19:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:21:12 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 10:21:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:21:34 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:22:49 --> Could not find the language line "products"
ERROR - 2024-05-31 10:23:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:23:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-31 10:23:55 --> Could not find the language line "socks"
ERROR - 2024-05-31 10:24:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-31 10:24:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-31 10:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:27:35 --> Could not find the language line "products"
ERROR - 2024-05-31 10:29:11 --> Could not find the language line "Other"
ERROR - 2024-05-31 10:29:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:30:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:31:47 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:33:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 10:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:36:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 10:36:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 10:36:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 10:37:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:39:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 10:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:40:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 10:40:46 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:40:47 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:45:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:46:31 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 10:52:40 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:53:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:53:32 --> Could not find the language line "Socks"
ERROR - 2024-05-31 10:53:33 --> Could not find the language line "products"
ERROR - 2024-05-31 10:57:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 10:57:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 10:58:51 --> Could not find the language line "socks"
ERROR - 2024-05-31 11:00:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 11:01:05 --> Could not find the language line "Home"
ERROR - 2024-05-31 11:01:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 11:01:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 11:05:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:08:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 11:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 11:09:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:09:44 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 11:13:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:14:58 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-31 11:17:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:21:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:26:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 11:26:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 11:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 11:29:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 11:29:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 11:30:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 11:33:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:37:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:45:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:48:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 11:48:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 11:48:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 11:49:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 11:57:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:00:25 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:00:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 12:01:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:02:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:17:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-31 12:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 12:17:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 12:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:28:41 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:29:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 12:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 12:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 12:29:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:30:22 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:34:24 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:34:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 12:34:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 12:34:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 12:37:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:41:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:45:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 12:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:50:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 12:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 12:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:00:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:01:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 13:02:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:02:28 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:02:46 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:03:55 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 13:09:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 13:09:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 13:09:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 13:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:13:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 13:20:37 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:24:24 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:29:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 13:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:29:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 13:29:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 13:29:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 13:30:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:30:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:30:51 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:33:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 13:33:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 13:33:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 13:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:46:42 --> Could not find the language line "Home"
ERROR - 2024-05-31 13:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 13:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 13:57:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-31 13:57:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-31 13:57:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-31 13:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:01:02 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:01:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:09:04 --> 404 Page Not Found: Biz/index
ERROR - 2024-05-31 14:09:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:09:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:09:10 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:09:39 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:10:36 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:12:33 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:13:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 14:17:04 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:18:33 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:18:44 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:19:29 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:19:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 14:21:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 14:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:21:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 14:21:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 14:21:45 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-05-31 14:21:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 14:21:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 14:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:24:54 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:27:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-05-31 14:27:51 --> Unable to connect to the database
ERROR - 2024-05-31 14:27:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 14:29:15 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-31 14:29:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 14:29:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 14:29:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 14:29:58 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:31:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:31:37 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:32:12 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:33:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 14:36:49 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:37:16 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:38:14 --> Could not find the language line "products"
ERROR - 2024-05-31 14:38:35 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:39:13 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:40:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:41:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:41:48 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:41:51 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:43:59 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:44:15 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:45:54 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:46:10 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:48:06 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:49:06 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:54:16 --> Could not find the language line "Home"
ERROR - 2024-05-31 14:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 14:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:01:06 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:01:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:01:43 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:02:12 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:03:05 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:11:56 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:14:30 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:16:14 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:25:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 15:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 15:30:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 15:30:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 15:30:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 15:30:25 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:30:25 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:33:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:33:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 15:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 15:42:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 15:42:53 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:48:58 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 15:51:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 15:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 15:51:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 15:55:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 15:55:50 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:00:25 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:02:08 --> Could not find the language line "other"
ERROR - 2024-05-31 16:04:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:09:31 --> Could not find the language line "socks"
ERROR - 2024-05-31 16:11:07 --> Could not find the language line "other"
ERROR - 2024-05-31 16:11:50 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:13:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 16:13:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 16:13:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 16:13:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 16:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:15:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 16:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 16:15:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 16:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:26:44 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:30:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 16:30:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 16:30:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:33:56 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:33:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 16:37:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 16:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 16:37:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 16:42:18 --> Could not find the language line "Home"
ERROR - 2024-05-31 16:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:53:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-31 16:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 16:58:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 17:00:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 17:03:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 17:03:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 17:03:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 17:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:11:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 17:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:13:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 17:13:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 17:13:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 17:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:19:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 17:21:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 17:21:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 17:21:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 17:27:48 --> Could not find the language line "products"
ERROR - 2024-05-31 17:30:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 17:30:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 17:35:40 --> Could not find the language line "products"
ERROR - 2024-05-31 17:36:31 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 17:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:43:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 17:47:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 17:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:51:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 17:54:37 --> Could not find the language line "Home"
ERROR - 2024-05-31 17:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 17:55:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 17:55:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 17:55:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 17:56:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 17:56:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 17:56:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 17:56:47 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-31 17:57:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 17:57:31 --> Could not find the language line "Other"
ERROR - 2024-05-31 17:57:57 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:00:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:03:24 --> Could not find the language line "Other"
ERROR - 2024-05-31 18:04:29 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:04:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:05:45 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:06:01 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:06:02 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:08:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:16:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 18:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 18:16:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 18:19:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 18:23:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:27:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:30:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:31:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:31:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 18:33:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 18:33:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 18:33:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 18:35:04 --> Could not find the language line "products"
ERROR - 2024-05-31 18:35:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 18:39:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:43:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 18:43:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 18:43:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 18:43:32 --> Could not find the language line "Other"
ERROR - 2024-05-31 18:43:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:46:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:46:19 --> Could not find the language line "Bracelets"
ERROR - 2024-05-31 18:46:36 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:46:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 18:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 18:47:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:47:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 18:47:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-31 18:47:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 18:47:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:47:53 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:48:04 --> Could not find the language line "Home"
ERROR - 2024-05-31 18:49:19 --> Could not find the language line "products"
ERROR - 2024-05-31 18:50:01 --> Could not find the language line "products"
ERROR - 2024-05-31 18:51:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 18:51:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-31 18:51:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 18:51:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:52:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 18:52:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 18:52:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 18:55:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 18:59:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:00:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 19:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 19:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 19:02:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:06:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 19:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 19:06:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:07:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-31 19:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:07:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:07:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 19:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 19:07:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:10:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 19:11:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:13:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 19:14:53 --> Could not find the language line "Home"
ERROR - 2024-05-31 19:15:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:19:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:23:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-31 19:23:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-31 19:23:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:27:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:30:28 --> Could not find the language line "Home"
ERROR - 2024-05-31 19:35:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:36:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 19:37:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 19:38:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 19:39:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:43:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 19:46:06 --> Could not find the language line "Home"
ERROR - 2024-05-31 19:47:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 19:47:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 19:47:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:47:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:49:10 --> Could not find the language line "Other"
ERROR - 2024-05-31 19:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 19:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 19:50:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 19:51:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:55:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 19:59:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:00:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 20:00:28 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:03:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:05:17 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:09:07 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:10:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:10:29 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:12:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:16:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:17:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 20:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 20:17:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 20:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:20:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:29 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:37:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 20:37:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 20:37:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 20:41:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 20:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 20:41:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 20:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:46:08 --> Could not find the language line "Home"
ERROR - 2024-05-31 20:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:48:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 20:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 20:52:30 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 20:55:41 --> Could not find the language line "Other"
ERROR - 2024-05-31 20:56:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 20:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-31 21:00:31 --> Could not find the language line "Home"
ERROR - 2024-05-31 21:02:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 21:02:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 21:02:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 21:05:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 21:05:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 21:05:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 21:05:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:08:46 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-05-31 21:09:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:10:16 --> Could not find the language line "products"
ERROR - 2024-05-31 21:11:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 21:11:59 --> Could not find the language line "products"
ERROR - 2024-05-31 21:13:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:26:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:30:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 21:33:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 21:37:23 --> Could not find the language line "products"
ERROR - 2024-05-31 21:38:39 --> Could not find the language line "Home"
ERROR - 2024-05-31 21:39:51 --> Could not find the language line "products"
ERROR - 2024-05-31 21:41:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:43:05 --> Could not find the language line "Other"
ERROR - 2024-05-31 21:43:20 --> Could not find the language line "Home"
ERROR - 2024-05-31 21:45:26 --> Could not find the language line "products"
ERROR - 2024-05-31 21:45:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:46:14 --> Could not find the language line "Home"
ERROR - 2024-05-31 21:49:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 21:51:53 --> Could not find the language line "hats"
ERROR - 2024-05-31 21:52:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-31 22:00:29 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:02:54 --> Could not find the language line "products"
ERROR - 2024-05-31 22:02:54 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:03:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 22:04:27 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:04:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 22:08:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 22:08:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 22:08:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 22:08:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-31 22:09:27 --> Could not find the language line "Clothing"
ERROR - 2024-05-31 22:13:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 22:16:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:16:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 22:16:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 22:16:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 22:17:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 22:19:23 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:20:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 22:20:36 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:22:26 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:30:30 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:31:34 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:33:21 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:33:29 --> Could not find the language line "products"
ERROR - 2024-05-31 22:41:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 22:42:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 22:42:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 22:42:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 22:45:50 --> Could not find the language line "Home"
ERROR - 2024-05-31 22:47:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 22:51:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 22:54:06 --> Could not find the language line "products"
ERROR - 2024-05-31 22:55:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 22:55:49 --> Could not find the language line "products"
ERROR - 2024-05-31 22:59:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:00:34 --> Could not find the language line "Home"
ERROR - 2024-05-31 23:03:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:07:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:11:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:15:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:15:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 23:15:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 23:19:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 23:19:18 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 23:19:19 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-31 23:23:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-31 23:26:58 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-31 23:28:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 23:28:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 23:29:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 23:29:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-31 23:30:32 --> Could not find the language line "Home"
ERROR - 2024-05-31 23:32:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-31 23:33:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 23:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 23:33:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 23:37:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 23:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-31 23:37:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 23:37:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-31 23:37:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-31 23:37:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-31 23:39:02 --> Could not find the language line "products"
ERROR - 2024-05-31 23:49:12 --> Could not find the language line "Home"
ERROR - 2024-05-31 23:51:57 --> Could not find the language line "products"
