<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-05 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 00:01:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 00:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 00:35:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 00:35:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 00:35:34 --> Could not find the language line "Home"
ERROR - 2023-09-05 01:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-05 01:02:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 01:25:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 02:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-05 02:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-05 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 03:00:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 03:00:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-05 03:02:27 --> Could not find the language line "Home"
ERROR - 2023-09-05 03:15:40 --> Could not find the language line "Home"
ERROR - 2023-09-05 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 03:38:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 04:06:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 04:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 04:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 04:36:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 04:39:23 --> Could not find the language line "Home"
ERROR - 2023-09-05 04:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 04:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 04:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 04:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 05:00:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 05:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 05:00:53 --> Could not find the language line "Home"
ERROR - 2023-09-05 05:21:04 --> Could not find the language line "Home"
ERROR - 2023-09-05 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-05 05:38:26 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 06:03:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 06:03:58 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:04:46 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:13:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 06:24:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:24:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 06:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:49:25 --> Could not find the language line "Home"
ERROR - 2023-09-05 06:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 06:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 06:57:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:36:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 07:36:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('39', '38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 07:38:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 07:38:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 07:40:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 07:41:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 07:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 07:41:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-05 07:41:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-05 07:41:26 --> Could not find the language line "Hair%20"
ERROR - 2023-09-05 07:41:34 --> Could not find the language line "Socks"
ERROR - 2023-09-05 07:41:37 --> Could not find the language line "Socks"
ERROR - 2023-09-05 07:41:52 --> Could not find the language line "Other"
ERROR - 2023-09-05 07:41:56 --> Could not find the language line "Other"
ERROR - 2023-09-05 07:42:03 --> Could not find the language line "Other"
ERROR - 2023-09-05 07:42:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 07:42:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`price` <= '3'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 07:44:41 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:45:34 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:46:25 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:46:55 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:46:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:50:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:50:35 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:50:39 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:51:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 07:55:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 07:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 07:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:04:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 08:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 08:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 08:11:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 08:11:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '31'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 08:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 08:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:48 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:19:48 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 08:20:40 --> Could not find the language line "Home"
ERROR - 2023-09-05 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:02 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:02 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:02 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:08:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:11:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:17:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:17:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:17:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-09-05 09:17:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-09-05 09:17:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-09-05 09:17:23 --> Severity: Notice --> A non well formed numeric value encountered /home/samfit/public_html/application/views/products/category.php 179
ERROR - 2023-09-05 09:17:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 09:17:42 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:18:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:20:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:23:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:23:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:26:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 09:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:52:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:52:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:52:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-05 09:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:53:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:54:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:55:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:56:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 09:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 09:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 09:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:00:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 10:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 10:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:02:20 --> Could not find the language line "Home"
ERROR - 2023-09-05 10:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:07:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 10:07:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '24'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 10:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:22:18 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-05 10:24:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 10:24:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 10:24:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 10:26:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 10:27:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 10:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 10:45:36 --> Could not find the language line "Home"
ERROR - 2023-09-05 10:49:46 --> Could not find the language line "Home"
ERROR - 2023-09-05 10:51:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 10:53:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 10:53:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 10:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:00:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:05:19 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 11:06:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:17:40 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:22:25 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 11:36:52 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:38:59 --> Could not find the language line "Home"
ERROR - 2023-09-05 11:39:02 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-05 11:42:32 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-05 11:57:39 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:01:36 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:02:10 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 12:04:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:26:24 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 12:27:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 12:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 12:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:39:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 12:39:19 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-09-05 12:39:19 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-09-05 12:39:19 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-09-05 12:39:20 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-09-05 12:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:45:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 12:47:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-05 12:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 13:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:04:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 13:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 13:08:57 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:08:57 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:11:52 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:15:19 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:28:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:32:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 13:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 13:49:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 13:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 13:56:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:05:42 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:10:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:13:32 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:15:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:19:01 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:22:02 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:52:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 14:52:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-05 14:55:00 --> Could not find the language line "Home"
ERROR - 2023-09-05 14:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 14:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-05 15:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:03:14 --> Could not find the language line "Other"
ERROR - 2023-09-05 15:03:20 --> Could not find the language line "Hair%20"
ERROR - 2023-09-05 15:03:23 --> Could not find the language line "Hair%20"
ERROR - 2023-09-05 15:04:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 15:04:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 15:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 15:04:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 15:17:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:21:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 15:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 15:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:26:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 15:26:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 15:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:28:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-05 15:31:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:32:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 15:32:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-05 15:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 15:41:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 15:51:31 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:01:18 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:08:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 16:09:27 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 16:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 16:15:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-09-05 16:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 16:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:30:48 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:31:49 --> Could not find the language line "Home"
ERROR - 2023-09-05 16:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 16:57:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 16:57:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:03:34 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:04:50 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 17:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 17:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 17:04:55 --> 404 Page Not Found: Home/accounts
ERROR - 2023-09-05 17:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:10:37 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:10:37 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:10:38 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:10:38 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:10:38 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:10:38 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:21:38 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:25:03 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:30:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:32:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:33:51 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-05 17:37:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 17:38:07 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:38:22 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 17:43:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 17:43:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-05 17:43:32 --> Could not find the language line "Home"
ERROR - 2023-09-05 17:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:01:46 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:01:47 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:09:03 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:11:56 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:12:49 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:13:22 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:14:42 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:14:45 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:14:45 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:15:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 18:15:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 18:15:45 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:16:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 18:16:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 18:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:24:34 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:25:36 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:33:43 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:33:51 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:34:54 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:35:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 18:35:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 18:35:45 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:46:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:48:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 18:49:10 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:49:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-05 18:49:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 18:49:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 18:49:24 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:56:08 --> Could not find the language line "Home"
ERROR - 2023-09-05 18:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:02:27 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:02:56 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:03:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:04:08 --> Could not find the language line "Bracelets"
ERROR - 2023-09-05 19:04:11 --> Could not find the language line "Bracelets"
ERROR - 2023-09-05 19:04:57 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:05:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:05:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:05:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:05:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:05:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:05:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-05 19:06:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 19:06:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 19:07:21 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:07:22 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:08:00 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:08:42 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:08:43 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:08:44 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-09-05 19:08:44 --> 404 Page Not Found: Wp-json/index
ERROR - 2023-09-05 19:08:50 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-05 19:08:51 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:09:03 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:10:58 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:11:02 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:11:03 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:11:23 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:11:23 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:11:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 19:11:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 19:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-05 19:11:36 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-05 19:13:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:13:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:13:22 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:13:23 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:13:51 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:14:03 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:30:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:31:41 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:31:42 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:35:25 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:44:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 19:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 19:45:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 19:47:41 --> Could not find the language line "Home"
ERROR - 2023-09-05 19:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:10 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:19 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:02:39 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:02:46 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:04:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:04:31 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:06:36 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:08:29 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:08:59 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:09:00 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:10:36 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:22:57 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:22:58 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:23:09 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:24:37 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:25:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:29:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 20:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-05 20:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 20:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 21:00:27 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:16 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:11:17 --> Could not find the language line "Home"
ERROR - 2023-09-05 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 22:01:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 22:01:33 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:16:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 22:16:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 22:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 22:16:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 22:16:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 22:16:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-05 22:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 22:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 22:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 22:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-09-05 22:17:05 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:19:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:19:56 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:27:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:27:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-05 22:27:25 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:27:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 22:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 22:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-05 22:27:55 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:28:06 --> Could not find the language line "Socks"
ERROR - 2023-09-05 22:28:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 22:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-05 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:23:29 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:29:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-05 23:29:23 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:34:34 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:50:15 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:51:01 --> Could not find the language line "Home"
ERROR - 2023-09-05 23:52:34 --> Could not find the language line "Home"
