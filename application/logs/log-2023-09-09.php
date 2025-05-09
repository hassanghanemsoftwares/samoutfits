<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-09 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 00:11:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 00:15:29 --> Could not find the language line "Home"
ERROR - 2023-09-09 00:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 00:32:48 --> Could not find the language line "Home"
ERROR - 2023-09-09 00:35:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 00:37:45 --> Could not find the language line "Home"
ERROR - 2023-09-09 00:50:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-09 01:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:03:17 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:44:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 01:46:36 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:55:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 01:56:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 01:56:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:57:48 --> Could not find the language line "Home"
ERROR - 2023-09-09 01:59:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 02:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 02:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:00:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 03:02:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 03:02:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 03:38:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:38:54 --> Could not find the language line "Home"
ERROR - 2023-09-09 03:39:29 --> Could not find the language line "Home"
ERROR - 2023-09-09 04:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 04:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 04:38:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-09 04:52:04 --> Could not find the language line "Home"
ERROR - 2023-09-09 04:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 04:59:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 05:09:55 --> Could not find the language line "Disclaimer"
ERROR - 2023-09-09 05:13:27 --> Could not find the language line "Home"
ERROR - 2023-09-09 05:13:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 05:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 05:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 05:49:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 05:51:37 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-09 05:59:52 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:11:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:17:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:34:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 06:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:36:56 --> Could not find the language line "Perfume"
ERROR - 2023-09-09 06:37:03 --> Could not find the language line "Other"
ERROR - 2023-09-09 06:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:46:23 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:48:25 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 06:57:56 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:58:35 --> Could not find the language line "Home"
ERROR - 2023-09-09 06:59:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 07:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 07:04:48 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:56 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:56 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:48:02 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:48:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 07:57:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 07:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 07:58:27 --> Could not find the language line "Home"
ERROR - 2023-09-09 07:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:11:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/catego
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/categor
ERROR - 2023-09-09 08:21:15 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-09-09 08:21:15 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-09-09 08:21:15 --> Could not find the language line "Sh"
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/cate
ERROR - 2023-09-09 08:21:15 --> Could not find the language line "Shoe"
ERROR - 2023-09-09 08:21:15 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/categ
ERROR - 2023-09-09 08:21:15 --> Could not find the language line "Sho"
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/index
ERROR - 2023-09-09 08:21:15 --> 404 Page Not Found: Products/c
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Products/index
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Produc/index
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Produ/index
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Prod/index
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Pro/index
ERROR - 2023-09-09 08:21:16 --> 404 Page Not Found: Product/index
ERROR - 2023-09-09 08:21:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: Products/cate
ERROR - 2023-09-09 08:21:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: Products/categor
ERROR - 2023-09-09 08:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: Products/cate
ERROR - 2023-09-09 08:21:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: Products/ca
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: P/index
ERROR - 2023-09-09 08:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:17 --> 404 Page Not Found: Products/index
ERROR - 2023-09-09 08:21:18 --> 404 Page Not Found: Products/index
ERROR - 2023-09-09 08:21:18 --> 404 Page Not Found: Produc/index
ERROR - 2023-09-09 08:21:18 --> 404 Page Not Found: Produ/index
ERROR - 2023-09-09 08:21:18 --> 404 Page Not Found: Products/ca
ERROR - 2023-09-09 08:21:18 --> Could not find the language line "Sho"
ERROR - 2023-09-09 08:21:18 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:18 --> Could not find the language line "Shoe"
ERROR - 2023-09-09 08:21:18 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 08:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('assets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:21:28 --> Could not find the language line "Sho"
ERROR - 2023-09-09 08:21:28 --> Could not find the language line "Sho"
ERROR - 2023-09-09 08:21:29 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:29 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:29 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:29 --> Could not find the language line "S"
ERROR - 2023-09-09 08:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:21:34 --> 404 Page Not Found: Products/c
ERROR - 2023-09-09 08:21:34 --> 404 Page Not Found: Products/c
ERROR - 2023-09-09 08:21:34 --> 404 Page Not Found: Products/c
ERROR - 2023-09-09 08:22:06 --> 404 Page Not Found: Products/cat
ERROR - 2023-09-09 08:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:35:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 08:35:23 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 08:43:35 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:50:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 08:50:17 --> Could not find the language line "Home"
ERROR - 2023-09-09 08:50:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:02:23 --> 404 Page Not Found: Licensetxt/index
ERROR - 2023-09-09 09:04:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:04:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:04:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:04:32 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:04:32 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:13:24 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-09 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 09:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 09:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 09:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 09:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 09:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 09:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 09:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 09:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 09:33:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 09:33:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 09:40:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 09:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:07 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:31 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:48 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:13:51 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:14:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 10:14:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:16:44 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:18:32 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:18:54 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:18:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 10:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:20:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 10:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 10:23:50 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:23:50 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:23:50 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:23:50 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 10:39:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:48:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 10:50:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 10:50:28 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:00:41 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:10:06 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:10:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:10:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:11:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:29:03 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:41:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 11:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:44:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 11:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 11:58:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-09 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:07:29 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:11:09 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:20:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:21:50 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:25:20 --> Could not find the language line "Socks"
ERROR - 2023-09-09 12:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:39:52 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:43:33 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:43:34 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:43:44 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:44:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 12:44:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:44:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 12:44:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 12:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:45:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 12:45:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 12:45:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:45:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-09 12:45:26 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:48:21 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:48:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 12:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 12:57:46 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 13:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:01:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 13:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:02:45 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:02:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 13:02:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 13:03:03 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:03:03 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:04:36 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:05:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 13:05:38 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:05:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 13:05:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:05:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 13:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:10:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 13:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 13:10:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 13:10:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 13:10:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 13:10:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 13:10:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 13:10:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 13:10:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 13:10:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 13:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:26:23 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:27:25 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 13:55:08 --> Could not find the language line "Home"
ERROR - 2023-09-09 13:55:09 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:05:52 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 14:07:01 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:10:26 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:22:44 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 14:26:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 14:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-09 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 15:20:18 --> Could not find the language line "Home"
ERROR - 2023-09-09 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 15:37:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 15:37:52 --> Could not find the language line "Home"
ERROR - 2023-09-09 15:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 15:52:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 16:00:08 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:11:58 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:14:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-09 16:14:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-09 16:15:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:20:33 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:20:55 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:20:58 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:33:57 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:38:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 16:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 16:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 16:46:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 16:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 16:59:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:02:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 17:04:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:04:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:05:04 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:12:22 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:14:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:15:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:18:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:19:33 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:19:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:20:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:21:05 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:21:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:22:17 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:22:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 17:22:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-09 17:22:49 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:22:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:33:37 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:50:12 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:50:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:51:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:52:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:53:09 --> Could not find the language line "Home"
ERROR - 2023-09-09 17:56:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:56:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 17:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 17:57:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 17:57:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 17:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:00:06 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:00:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:05:25 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:05:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:07:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:08:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:11:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:14:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:15:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:16:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:16:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:17:21 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:17:44 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:17:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:17:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:02 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:18:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:18:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:48 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 18:18:54 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:19:02 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:19:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-09 18:19:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:19:08 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:20:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:24:36 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:24:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:25:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 18:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:26:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 18:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:26:49 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:26:51 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 18:28:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:30:37 --> Could not find the language line "Home"
ERROR - 2023-09-09 18:33:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:01:22 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 19:03:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 19:23:00 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 19:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:40 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:34:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:40:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 19:50:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-09 19:55:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 19:56:17 --> Could not find the language line "Other"
ERROR - 2023-09-09 19:57:52 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:00:44 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:33:24 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:47:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 20:52:47 --> Could not find the language line "Home"
ERROR - 2023-09-09 20:58:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:07:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:07:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 21:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 21:08:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 21:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 21:08:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 21:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 21:09:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 21:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 21:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 21:10:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:14:09 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:25:29 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:26:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 21:29:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-09 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-09 21:41:46 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:47:39 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:47:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-09 22:58:23 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:58:36 --> Could not find the language line "Home"
ERROR - 2023-09-09 22:58:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-09 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:00:21 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 23:01:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 23:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 23:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-09 23:01:42 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-09 23:06:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-09 23:06:42 --> Could not find the language line "Other"
ERROR - 2023-09-09 23:16:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-09 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:28:54 --> Could not find the language line "Home"
ERROR - 2023-09-09 23:30:15 --> Could not find the language line "Home"
