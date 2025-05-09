<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-26 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:05:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:10:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:32:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:32:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:32:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 00:37:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 00:52:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 00:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 00:58:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 01:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 01:36:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 01:42:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:03:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:03:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:03:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 02:03:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:46:40 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:55:16 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:55:17 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:56:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:57:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:58:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 02:58:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 02:58:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:00:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:14:53 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:29:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:29:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:29:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 03:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 03:31:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:31:15 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 03:31:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 03:31:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 03:31:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 03:31:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 03:31:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 03:32:20 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 04:02:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 04:02:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 04:02:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 04:08:16 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 04:16:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 04:18:17 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:18:49 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-05-26 04:18:50 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2023-05-26 04:18:52 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-05-26 04:23:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 04:24:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:30:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 04:58:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:10:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:25:28 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:27:50 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:28:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-26 05:28:32 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:28:35 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 05:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:28:49 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 05:28:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:28:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 05:28:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 05:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:29:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 05:29:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 05:29:32 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 05:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:38:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 05:54:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 05:56:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:13:22 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:13:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:13:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:16:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:19:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:22:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:25:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:26:55 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:28:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:28:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:28:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:29:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:29:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:29:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:30:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:30:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 06:30:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 06:30:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 06:30:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 06:32:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:39:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-26 06:41:29 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:43:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:44:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:44:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:45:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:45:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:46:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:46:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:46:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:46:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:47:00 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:47:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:47:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 06:47:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:47:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 06:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 06:48:28 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:03:56 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:05:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:05:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:06:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:12:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:12:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:13:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 07:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-26 07:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-26 07:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:16:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-26 07:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-26 07:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-26 07:16:28 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:18:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:18:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:18:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 07:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 07:18:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:18:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 07:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 07:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 07:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 07:18:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:23:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 07:27:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:31:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:39:06 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:39:12 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 07:39:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 07:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:50:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:51:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 07:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:00:41 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:01:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:04:06 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:07:07 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:09:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:12:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:15:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:15:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:15:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:18:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 08:18:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:18:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:29:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:32:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:33:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:33:24 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:38:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:39:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:41:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 08:45:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:48:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:48:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:55:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:55:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 08:56:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:00:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:04:58 --> Could not find the language line "Crocs"
ERROR - 2023-05-26 09:06:53 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 09:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:11:20 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:17:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:21:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 09:22:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 09:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:23:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:38:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 09:38:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 09:46:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:47:10 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 09:52:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 09:53:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:53:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:53:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:53:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:53:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:53:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 09:58:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:03:48 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 10:05:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 10:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 10:05:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 10:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 10:06:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:24:24 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:24:30 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:33:35 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:37:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:42:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 10:44:34 --> Could not find the language line "Home"
ERROR - 2023-05-26 10:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:02:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:02:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:02:50 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:10:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:11:41 --> 404 Page Not Found: Modules/mod_impact
ERROR - 2023-05-26 11:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:13:41 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 11:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 11:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 11:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:18:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 11:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:19:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:22:32 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:26:56 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:29:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:45:04 --> 404 Page Not Found: Components/com_ionfiles
ERROR - 2023-05-26 11:49:46 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 11:50:22 --> Could not find the language line "Home"
ERROR - 2023-05-26 11:50:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:04:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:14:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:14:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:14:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:14:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 12:15:10 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:17:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:17:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:27:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 12:28:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 12:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 12:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:29:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:35:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:35:38 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:36:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:36:57 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:38:28 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:38:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:38:40 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:39:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:41:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 12:58:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 12:59:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:05:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-26 13:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:12:09 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:18:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:18:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:23:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:23:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:24:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:24:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:24:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:24:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:25:34 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:25:46 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:31:55 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:34:27 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:37:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:43:47 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:47:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:47:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:47:45 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:49:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:50:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:51:47 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:52:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:52:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:52:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:52:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:53:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:53:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:53:36 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:53:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 13:55:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 13:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 13:55:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 13:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 13:57:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:58:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 13:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 13:59:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:06:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 14:07:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 14:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:07:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 14:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:07:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:08:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:08:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:11:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:11:31 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:11:57 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:12:07 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:12:42 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:13:05 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:13:17 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:13:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 14:13:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 14:13:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:14:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:14:22 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:14:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:14:30 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:14:50 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:15:00 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:15:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:15:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 14:15:23 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:15:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:16:17 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:16:44 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:17:02 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 14:19:53 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:19:55 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:21:21 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-26 14:21:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-26 14:21:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-26 14:21:22 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-26 14:23:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:23:56 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:27:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:32:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:33:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:38:37 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:41:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:45:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:56:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 14:57:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 14:57:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:00:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 15:01:36 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:01:46 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:03:50 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:05:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:06:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 15:07:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:07:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:09:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:10:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:10:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:10:27 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:17:38 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:29:42 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:29:52 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 15:29:52 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 15:29:52 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 15:29:52 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:32:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:32:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:32:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:36:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:40:38 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:41:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:45:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:48:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 15:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 15:48:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-26 15:48:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-26 15:51:27 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:53:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:53:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:53:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:53:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 15:54:09 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:56:29 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:56:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 15:56:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:57:05 --> Could not find the language line "Home"
ERROR - 2023-05-26 15:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 15:59:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:01:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:02:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:02:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:07:38 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:10:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:13:35 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:17:56 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:21:58 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:22:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:24:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:26:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:26:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:26:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:27:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:27:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 16:27:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:27:20 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:27:26 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 16:27:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:27:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:27:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:28:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:28:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:28:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:28:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:29:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:29:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:29:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:29:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 16:29:38 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:48:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 16:48:25 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-05-26 16:48:43 --> 404 Page Not Found: Sites/default
ERROR - 2023-05-26 16:48:49 --> 404 Page Not Found: Admin/controller
ERROR - 2023-05-26 16:48:57 --> 404 Page Not Found: Uploads/index
ERROR - 2023-05-26 16:49:12 --> 404 Page Not Found: Files/index
ERROR - 2023-05-26 16:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 16:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:02:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:02:09 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:02:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:03:06 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:03:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:03:30 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:03:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:06:20 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:07:30 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:26:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:27:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:27:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:27:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:27:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:28:30 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:28:30 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:28:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:28:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:28:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:28:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:28:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:29:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:29:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:31:03 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:31:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:31:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-26 17:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 17:41:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:41:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-26 17:41:57 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:42:01 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 17:42:20 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:43:34 --> Could not find the language line "Home"
ERROR - 2023-05-26 17:43:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 17:44:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 17:44:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 17:44:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 17:57:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:04:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-05-26 18:04:40 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:09:29 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:09:29 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:09:31 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 18:24:28 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:26:41 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:37:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:38:34 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:43:17 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:45:10 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:45:39 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:51:08 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:58:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 18:59:10 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-05-26 18:59:28 --> 404 Page Not Found: Sites/default
ERROR - 2023-05-26 18:59:34 --> 404 Page Not Found: Admin/controller
ERROR - 2023-05-26 18:59:43 --> 404 Page Not Found: Uploads/index
ERROR - 2023-05-26 19:00:04 --> 404 Page Not Found: Files/index
ERROR - 2023-05-26 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:04:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:05:01 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 19:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:05:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:05:27 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:05:39 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:06:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:07:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:07:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:07:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:07:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:08:49 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:18:31 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:18:31 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:18:31 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:18:57 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 19:18:57 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 19:18:57 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 19:18:57 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 19:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:23:57 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 19:27:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-26 19:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-26 19:58:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-26 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:01:56 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:03:06 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:03:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:03:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:03:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:03:17 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:03:44 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:03:50 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 20:03:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:04:00 --> Could not find the language line "Socks"
ERROR - 2023-05-26 20:04:05 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:04:33 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:05:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:13:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-26 20:13:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:16:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:32:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-26 20:48:47 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:48:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:48:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:48:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:48:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:48:59 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 20:49:15 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:49:18 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 20:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:49:33 --> Could not find the language line "Perfume"
ERROR - 2023-05-26 20:49:36 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:52:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:52:26 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:53:22 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:53:23 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:53:59 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:57:46 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:58:41 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 20:58:54 --> Could not find the language line "Home"
ERROR - 2023-05-26 20:59:11 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:06:52 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:08:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-26 21:09:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:10:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:11:10 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:11:46 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:16:18 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:19:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:21:41 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:27:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:27:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:28:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 21:28:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 21:28:16 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 21:28:17 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-26 21:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:34:00 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 21:51:50 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:51:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:51:51 --> Could not find the language line "Home"
ERROR - 2023-05-26 21:52:43 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:10:25 --> Could not find the language line "Bracelets"
ERROR - 2023-05-26 22:23:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:23:02 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:23:04 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-26 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:37:19 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:37:48 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:50:36 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:52:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:52:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 22:59:25 --> Could not find the language line "Home"
ERROR - 2023-05-26 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 23:01:24 --> Could not find the language line "Home"
ERROR - 2023-05-26 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-26 23:49:22 --> Could not find the language line "Home"
ERROR - 2023-05-26 23:54:38 --> Could not find the language line "Home"
