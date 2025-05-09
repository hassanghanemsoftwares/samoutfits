<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-21 00:01:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:01:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:01:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:02:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 00:09:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:09:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:10:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:10:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:11:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:11:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:11:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:15:00 --> Could not find the language line "products"
ERROR - 2024-05-21 00:22:13 --> Could not find the language line "Home"
ERROR - 2024-05-21 00:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 00:28:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:28:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:28:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:29:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 00:30:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 00:31:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:31:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:31:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:31:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 00:31:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:36:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 00:36:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 00:38:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 00:38:44 --> Could not find the language line "Home"
ERROR - 2024-05-21 00:39:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 00:40:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 00:41:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:41:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:52:16 --> Could not find the language line "Home"
ERROR - 2024-05-21 00:53:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:53:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:53:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:54:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 00:54:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 00:54:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 00:56:25 --> Could not find the language line "products"
ERROR - 2024-05-21 00:59:37 --> Could not find the language line "products"
ERROR - 2024-05-21 01:01:45 --> Could not find the language line "Home"
ERROR - 2024-05-21 01:03:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 01:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 01:03:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 01:03:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 01:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 01:03:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 01:04:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 01:04:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 01:04:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 01:06:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:06:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:08:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:09:46 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 01:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 01:11:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 01:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 01:11:18 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-21 01:14:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 01:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:17:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:20:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:22:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 01:23:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 01:23:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 01:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 01:30:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 01:30:14 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 01:30:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 01:40:00 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-21 01:41:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:41:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 01:42:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 01:43:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 01:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 01:43:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 01:45:24 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-21 01:48:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 01:48:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 01:49:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 01:49:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 01:49:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 01:49:15 --> Could not find the language line "Other"
ERROR - 2024-05-21 01:52:17 --> Could not find the language line "Home"
ERROR - 2024-05-21 02:01:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 02:01:51 --> Could not find the language line "Home"
ERROR - 2024-05-21 02:07:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 02:07:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 02:07:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 02:12:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 02:22:15 --> Could not find the language line "Home"
ERROR - 2024-05-21 02:24:50 --> Could not find the language line "Other"
ERROR - 2024-05-21 02:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:32:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 02:32:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 02:32:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 02:32:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-21 02:32:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 02:32:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:33:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 02:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:40:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:40:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:40:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 02:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 02:52:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 02:54:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 02:54:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 02:54:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 02:56:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 02:56:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 02:56:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 02:57:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 02:57:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 03:03:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:03:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:03:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:07:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-21 03:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 03:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 03:11:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 03:22:15 --> Could not find the language line "Home"
ERROR - 2024-05-21 03:23:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:23:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:23:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:23:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:24:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:25:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:25:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:25:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 03:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 03:31:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 03:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 03:31:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 03:39:12 --> Could not find the language line "Home"
ERROR - 2024-05-21 03:41:22 --> Could not find the language line "Home"
ERROR - 2024-05-21 03:41:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 03:41:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 03:41:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 03:42:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 03:44:02 --> Could not find the language line "products"
ERROR - 2024-05-21 03:52:17 --> Could not find the language line "Home"
ERROR - 2024-05-21 03:52:44 --> Could not find the language line "Home"
ERROR - 2024-05-21 03:55:53 --> Could not find the language line "Bracelets"
ERROR - 2024-05-21 03:58:22 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:08:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:08:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:08:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:12:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 04:12:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 04:22:16 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:25:56 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:27:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:27:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:28:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:28:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:29:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 04:30:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:30:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:30:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:31:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:31:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:31:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:35:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 04:36:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 04:37:53 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:39:49 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:40:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:40:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:40:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:40:49 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 04:50:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:52:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:52:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 04:52:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:52:20 --> Could not find the language line "Home"
ERROR - 2024-05-21 04:54:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:54:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:54:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:58:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:58:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:58:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 04:59:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 04:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 04:59:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 05:11:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 05:11:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 05:11:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 05:12:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 05:12:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 05:12:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 05:13:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:13:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:17:44 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:17:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:17:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:17:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:17:48 --> 404 Page Not Found: Home/accounts
ERROR - 2024-05-21 05:17:48 --> 404 Page Not Found: Home/assets
ERROR - 2024-05-21 05:17:49 --> 404 Page Not Found: Home/home
ERROR - 2024-05-21 05:22:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:22:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:26:24 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:30:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:30:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:30:21 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 05:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:30:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 05:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:30:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:31:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 05:31:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:31:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:31:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 05:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 05:32:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:32:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 05:32:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 05:40:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 05:40:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 05:40:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 05:44:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:44:11 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:46:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:46:29 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-21 05:46:37 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:47:02 --> Could not find the language line "Bracelets"
ERROR - 2024-05-21 05:47:08 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:30 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:48 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:47:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 05:48:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:49:14 --> Could not find the language line "products"
ERROR - 2024-05-21 05:49:36 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:49:42 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:49:47 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:49:55 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:50:04 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:50:09 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:50:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:50:21 --> Could not find the language line "Other"
ERROR - 2024-05-21 05:50:25 --> Could not find the language line "Perfume"
ERROR - 2024-05-21 05:50:44 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-21 05:51:14 --> Could not find the language line "Socks"
ERROR - 2024-05-21 05:51:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 05:52:20 --> Could not find the language line "Home"
ERROR - 2024-05-21 05:52:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 05:52:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 05:52:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 05:54:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:03:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:03:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:03:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:05:50 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:06:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:07:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:17:16 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:20:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:20:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:20:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:20:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:20:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:21:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:21:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:21:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:22:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:25:22 --> Could not find the language line "products"
ERROR - 2024-05-21 06:29:50 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:31:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:32:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 06:32:08 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:32:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:32:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:32:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:32:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:32:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:33:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:33:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:34:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:34:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:34:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:34:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:34:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 06:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:36:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:36:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:38:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:42:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:42:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:42:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:50:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:52:16 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 06:52:35 --> Could not find the language line "Home"
ERROR - 2024-05-21 06:53:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 06:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 06:58:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 06:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 06:58:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 06:59:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:38 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:43 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:54 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 06:59:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 07:00:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 07:00:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 07:02:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 07:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 07:02:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 07:02:58 --> Could not find the language line "Home"
ERROR - 2024-05-21 07:03:29 --> Could not find the language line "products"
ERROR - 2024-05-21 07:05:43 --> Could not find the language line "products"
ERROR - 2024-05-21 07:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:18:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 07:18:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 07:18:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 07:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:22:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 07:22:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 07:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 07:22:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 07:23:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 07:23:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 07:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:26:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 07:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 07:26:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 07:27:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 07:28:34 --> Could not find the language line "Home"
ERROR - 2024-05-21 07:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:34:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 07:34:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 07:34:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 07:35:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:35:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:35:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:35:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:36:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:37:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:37:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:37:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:37:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 07:38:32 --> Could not find the language line "products"
ERROR - 2024-05-21 07:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 07:52:17 --> Could not find the language line "Home"
ERROR - 2024-05-21 07:59:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 07:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:00:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:00:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:01:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:05:14 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:05:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:08:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:08:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:12:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:12:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:12:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:12:57 --> Could not find the language line "products"
ERROR - 2024-05-21 08:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:21:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 08:21:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 08:22:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:22:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 08:26:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:26:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:26:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:29:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:29:32 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:29:33 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:29:36 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:30:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:30:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:31:44 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:35:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:35:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:35:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:39:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:40:53 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:41:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 08:41:40 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:41:41 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:41:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:43:31 --> Could not find the language line "products"
ERROR - 2024-05-21 08:43:45 --> Could not find the language line "products"
ERROR - 2024-05-21 08:44:45 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:48:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:48:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:52:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 08:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:53:26 --> Could not find the language line "Other"
ERROR - 2024-05-21 08:54:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:54:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:54:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:57:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 08:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 08:57:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 08:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 08:59:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 09:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:00:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:04:26 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:09:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 09:09:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 09:09:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 09:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:14:43 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:14:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 09:14:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 09:14:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 09:16:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 09:16:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 09:18:20 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:19:06 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-05-21 09:22:18 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:24:47 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:29:51 --> Could not find the language line "products"
ERROR - 2024-05-21 09:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:32:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 09:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:32:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 09:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 09:33:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 09:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:33:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:33:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 09:33:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 09:37:50 --> Could not find the language line "products"
ERROR - 2024-05-21 09:40:26 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:45:46 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:46:32 --> Could not find the language line "products"
ERROR - 2024-05-21 09:47:41 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:47:42 --> Could not find the language line "accounting"
ERROR - 2024-05-21 09:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:47:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 09:48:42 --> Could not find the language line "Other"
ERROR - 2024-05-21 09:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 09:51:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 09:51:58 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:52:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:53:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 09:53:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 09:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 09:53:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 09:54:44 --> Could not find the language line "Home"
ERROR - 2024-05-21 09:57:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 09:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 09:57:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 10:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:11:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:17:43 --> Could not find the language line "products"
ERROR - 2024-05-21 10:19:06 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:19:25 --> Could not find the language line "Other"
ERROR - 2024-05-21 10:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:22:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:27:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 10:27:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 10:28:37 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:32:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 10:32:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 10:32:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 10:32:21 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:33:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 10:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 10:33:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 10:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:38:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:38:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:38:27 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 10:38:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 10:38:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 10:38:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 10:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:39:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:39:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 10:39:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:39:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:39:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:39:49 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 10:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:41:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 10:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:41:47 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:43:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 10:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 10:51:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 10:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 10:51:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 10:52:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:52:24 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 10:55:25 --> Could not find the language line "Home"
ERROR - 2024-05-21 10:55:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 10:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 10:55:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:08:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 11:08:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 11:08:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:09:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 11:10:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 11:10:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 11:10:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:15:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 11:15:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 11:15:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:18:13 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:19:05 --> Could not find the language line "Socks"
ERROR - 2024-05-21 11:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:22:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:22:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:22:22 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:22:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:23:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:23:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:24:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:31:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 11:33:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 11:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:37:33 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:43:39 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:44:35 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:46:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 11:46:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 11:46:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 11:50:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 11:50:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 11:50:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 11:52:21 --> Could not find the language line "Home"
ERROR - 2024-05-21 11:57:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 12:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:08:50 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:17:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:17:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:18:23 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:20:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:20:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:21:08 --> Could not find the language line "products"
ERROR - 2024-05-21 12:21:54 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:21:57 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:22:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:22:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:22:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:22:21 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:22:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 12:23:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 12:25:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:25:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:28:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:28:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:28:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:28:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 12:28:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:38:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:38:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:38:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 12:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 12:47:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 12:47:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 12:47:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 12:52:21 --> Could not find the language line "Home"
ERROR - 2024-05-21 12:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:02:37 --> Could not find the language line "accounts"
ERROR - 2024-05-21 13:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:02:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:03:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:04:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:04:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:04:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:04:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:04:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:10:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:10:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:10:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:13:00 --> Could not find the language line "Home"
ERROR - 2024-05-21 13:19:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 13:19:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:19:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:20:24 --> Could not find the language line "products"
ERROR - 2024-05-21 13:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:22:21 --> Could not find the language line "Home"
ERROR - 2024-05-21 13:22:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:22:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:22:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:24:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 13:25:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 13:27:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:27:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:27:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:27:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 13:35:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:35:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:35:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:41:19 --> Could not find the language line "Home"
ERROR - 2024-05-21 13:42:31 --> Could not find the language line "Home"
ERROR - 2024-05-21 13:44:15 --> 404 Page Not Found: Products/products
ERROR - 2024-05-21 13:46:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 13:46:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 13:46:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 13:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 13:52:23 --> Could not find the language line "Home"
ERROR - 2024-05-21 13:59:48 --> Could not find the language line "products"
ERROR - 2024-05-21 14:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:05:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 14:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 14:05:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 14:06:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 14:06:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 14:06:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 14:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:12:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:15:35 --> Could not find the language line "products"
ERROR - 2024-05-21 14:21:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 14:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 14:21:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 14:22:22 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:03 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:17 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:38 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:41 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:41 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:24:43 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:28:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 14:32:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 14:32:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 14:32:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 14:34:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 14:34:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 14:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:34:41 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:36:10 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:36:47 --> Could not find the language line "products"
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:42:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:42:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:43:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:43:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:44:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:44:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 14:47:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:47:34 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 14:52:22 --> Could not find the language line "Home"
ERROR - 2024-05-21 14:54:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 14:54:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 14:54:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 14:56:49 --> Could not find the language line "Other"
ERROR - 2024-05-21 14:59:05 --> 404 Page Not Found: Products/index
ERROR - 2024-05-21 15:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:01:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:01:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:01:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:01:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:08:56 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:22:23 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:22:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:22:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:22:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:28:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:28:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 15:28:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:28:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:28:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:32:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:32:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:32:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:32:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:32:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 15:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:32:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:32:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:34:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:34:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:34:44 --> Could not find the language line "products"
ERROR - 2024-05-21 15:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:34:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:35:01 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:35:33 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:42:59 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:44:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-05-21 15:44:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:48:12 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:49:13 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:49:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:49:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:49:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:51:31 --> Could not find the language line "products"
ERROR - 2024-05-21 15:51:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 15:51:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 15:51:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 15:51:57 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:52:23 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 15:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 15:59:25 --> Could not find the language line "Home"
ERROR - 2024-05-21 15:59:55 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:05:10 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:09:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 16:09:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 16:09:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 16:15:57 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:16:23 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:17:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:18:11 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:20:02 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:21:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:22:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:22:24 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:22:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:22:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:23:17 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:23:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:24:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 16:24:26 --> Could not find the language line "Bracelets"
ERROR - 2024-05-21 16:24:44 --> Could not find the language line "Bracelets"
ERROR - 2024-05-21 16:25:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 16:25:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 16:25:05 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 16:25:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 16:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:30:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:30:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:31:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:31:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:31:15 --> Could not find the language line "Perfume"
ERROR - 2024-05-21 16:31:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:31:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:33:06 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:33:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 16:34:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:35:20 --> Could not find the language line "Home"
ERROR - 2024-05-21 16:35:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:35:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:36:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:36:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 16:41:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 16:50:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 16:50:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 16:50:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 16:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 16:52:24 --> Could not find the language line "Home"
ERROR - 2024-05-21 17:08:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:22:25 --> Could not find the language line "Home"
ERROR - 2024-05-21 17:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:24:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:24:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:24:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:26:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 17:26:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 17:26:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 17:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:26:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:26:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:26:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:36:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 17:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:39:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:39:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:46:50 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-05-21 17:52:25 --> Could not find the language line "Home"
ERROR - 2024-05-21 17:55:27 --> Could not find the language line "Home"
ERROR - 2024-05-21 17:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:58:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 17:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:06:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:06:49 --> Could not find the language line "Home"
ERROR - 2024-05-21 18:06:51 --> Could not find the language line "Home"
ERROR - 2024-05-21 18:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:08:35 --> Could not find the language line "Home"
ERROR - 2024-05-21 18:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:14:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:14:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:15:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:16:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:16:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:17:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:18:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:18:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 18:21:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-21 18:22:25 --> Could not find the language line "Home"
ERROR - 2024-05-21 18:30:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 18:33:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 18:33:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 18:33:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 18:34:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-21 18:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 18:50:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 18:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 18:50:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 18:52:26 --> Could not find the language line "Home"
ERROR - 2024-05-21 18:54:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 18:54:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 18:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 18:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:04:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:04:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:05:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:06:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:07:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:09:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:10:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:10:27 --> Could not find the language line "Socks"
ERROR - 2024-05-21 19:11:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:20:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:20:46 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 19:22:26 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:23:21 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 19:24:03 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:24:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 19:25:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:25:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:26:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:27:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:28:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:29:36 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 19:30:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:31:17 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:44:49 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:45:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:45:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 19:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:52:28 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 19:54:48 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:55:26 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:55:46 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:55:53 --> Could not find the language line "Home"
ERROR - 2024-05-21 19:58:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 19:58:58 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:07:03 --> Could not find the language line "Other"
ERROR - 2024-05-21 20:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:15:53 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:15:56 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:18:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 20:19:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 20:20:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 20:20:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 20:22:27 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:24:23 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-21 20:25:01 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:25:04 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 20:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:25:25 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 20:25:32 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:25:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-21 20:25:37 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:25:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 20:25:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-21 20:26:07 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:26:33 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:30:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 20:30:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 20:30:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 20:31:03 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:35:18 --> Could not find the language line "products"
ERROR - 2024-05-21 20:44:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 20:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:48:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 20:49:01 --> Could not find the language line "accounts"
ERROR - 2024-05-21 20:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:52:11 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-21 20:52:16 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:52:27 --> Could not find the language line "Home"
ERROR - 2024-05-21 20:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:54:41 --> Could not find the language line "products"
ERROR - 2024-05-21 20:55:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 20:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 20:55:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 20:55:42 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 20:56:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 20:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:02:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 21:11:00 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:22:27 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:24:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 21:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:29:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:29:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:31:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:31:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:32:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:32:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:33:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:33:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:33:46 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:34:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:36:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 21:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:40:13 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 21:40:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 21:40:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 21:40:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 21:41:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 21:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 21:41:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 21:48:03 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:52:40 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:55:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:56:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:56:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 21:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:58:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 21:58:15 --> Could not find the language line "Home"
ERROR - 2024-05-21 21:58:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 21:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:01:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:01:53 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:06:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 22:06:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Other')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 22:06:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 22:07:45 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-21 22:07:52 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-05-21 22:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:14:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 22:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:22:31 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:24:15 --> 404 Page Not Found: Metajson/index
ERROR - 2024-05-21 22:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:33:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:33:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:33:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 22:33:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 22:33:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-21 22:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:34:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 22:37:10 --> Could not find the language line "products"
ERROR - 2024-05-21 22:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 22:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 22:38:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 22:41:56 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:52:32 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 22:58:57 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:58:58 --> Could not find the language line "Home"
ERROR - 2024-05-21 22:59:09 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 23:03:24 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-21 23:09:04 --> Could not find the language line "Home"
ERROR - 2024-05-21 23:09:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 23:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:12:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:12:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:13:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:13:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-21 23:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-21 23:14:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 23:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:15:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:15:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:22:31 --> Could not find the language line "Home"
ERROR - 2024-05-21 23:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-21 23:23:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:23:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-21 23:24:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-21 23:33:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 23:33:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-21 23:37:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 23:37:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 23:37:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 23:39:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 23:48:59 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-21 23:50:36 --> Could not find the language line "Other"
ERROR - 2024-05-21 23:51:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-21 23:51:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-21 23:51:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-21 23:52:35 --> Could not find the language line "Home"
ERROR - 2024-05-21 23:53:44 --> Could not find the language line "accounts"
ERROR - 2024-05-21 23:55:56 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 23:57:11 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-21 23:59:47 --> Could not find the language line "Home"
