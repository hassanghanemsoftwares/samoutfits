<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-22 00:06:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 00:06:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 00:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 00:38:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 00:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 00:51:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 00:59:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-22 01:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 01:41:54 --> Could not find the language line "Home"
ERROR - 2023-08-22 01:58:20 --> Could not find the language line "Home"
ERROR - 2023-08-22 01:58:22 --> Could not find the language line "Home"
ERROR - 2023-08-22 01:59:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 02:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 02:00:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 02:01:06 --> Could not find the language line "Home"
ERROR - 2023-08-22 02:05:51 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-08-22 02:06:06 --> 404 Page Not Found: Sites/default
ERROR - 2023-08-22 02:06:31 --> 404 Page Not Found: Admin/controller
ERROR - 2023-08-22 02:06:38 --> 404 Page Not Found: Uploads/index
ERROR - 2023-08-22 02:06:52 --> 404 Page Not Found: Files/index
ERROR - 2023-08-22 02:11:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 02:11:45 --> Could not find the language line "Home"
ERROR - 2023-08-22 02:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 03:05:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 03:05:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 03:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 03:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 03:19:15 --> Could not find the language line "Home"
ERROR - 2023-08-22 03:41:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 04:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 04:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 04:47:33 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-22 04:47:57 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:03:48 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:10:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:11:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 05:11:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 05:12:06 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:13:19 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:13:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:15:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:16:25 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:29:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:47:26 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:48:05 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:48:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:51:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 05:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 05:54:31 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:02:16 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:10:05 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:11:51 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:12:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:14:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 06:14:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 06:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:25:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 06:25:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 06:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:35:11 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:37:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-22 06:37:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 06:37:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-22 06:38:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 06:38:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 06:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:45:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:48:02 --> Could not find the language line "Home"
ERROR - 2023-08-22 06:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 06:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:00:35 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:21:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:33:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:46:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 07:47:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 07:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 07:48:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 07:48:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 07:51:26 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:51:46 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-22 07:51:49 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:51:54 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 07:52:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 07:52:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:53:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:01 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:02 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:02 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:02 --> Could not find the language line "Home"
ERROR - 2023-08-22 07:53:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 07:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 07:53:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 07:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 07:58:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 07:58:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 08:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:05:10 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:05:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 08:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:06:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:07:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:08:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:08:07 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-22 08:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:09:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:17:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:17:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:18:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:28:40 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 08:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:33:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:33:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 08:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:35:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:35:23 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:35:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:43:20 --> 404 Page Not Found: Env/index
ERROR - 2023-08-22 08:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:47:52 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:47:59 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:52:54 --> Could not find the language line "Home"
ERROR - 2023-08-22 08:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 08:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:56:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:56:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 08:59:40 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:00:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:05:16 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:06:28 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-08-22 09:07:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:19:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 09:19:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 09:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:24:34 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:24:37 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:33:54 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:35:11 --> 404 Page Not Found: Env/index
ERROR - 2023-08-22 09:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:38:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 09:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 09:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:41:52 --> Could not find the language line "Home"
ERROR - 2023-08-22 09:55:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 09:55:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 09:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 09:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:01:24 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2023-08-22 10:04:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:09:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:13:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:20:35 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:23:22 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-22 10:27:04 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:27:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 10:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 10:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:29:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:30:57 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:32:59 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:35:21 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:38:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:40:09 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:40:26 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:45:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 10:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 10:59:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 10:59:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-22 10:59:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-22 11:00:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 11:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 11:00:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 11:00:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 11:03:26 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-22 11:07:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 11:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 11:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 11:15:12 --> Could not find the language line "products"
ERROR - 2023-08-22 11:17:56 --> Could not find the language line "products"
ERROR - 2023-08-22 11:19:18 --> Could not find the language line "products"
ERROR - 2023-08-22 11:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 11:24:10 --> Could not find the language line "Home"
ERROR - 2023-08-22 11:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 11:44:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 11:57:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 11:57:22 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:05:22 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:11:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:16:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 12:16:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 12:17:56 --> Could not find the language line "products"
ERROR - 2023-08-22 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:20:41 --> Could not find the language line "products"
ERROR - 2023-08-22 12:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:28:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:36:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 12:36:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 12:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:39:28 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:41:46 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:45:34 --> Could not find the language line "Home"
ERROR - 2023-08-22 12:47:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 12:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 12:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:00:27 --> Could not find the language line "products"
ERROR - 2023-08-22 13:00:28 --> Could not find the language line "products"
ERROR - 2023-08-22 13:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:06:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 13:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-22 13:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:14:51 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-22 13:14:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-22 13:14:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-22 13:14:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-22 13:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:15:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 13:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:18:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 13:18:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 13:19:32 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:19:34 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:19:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:19:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:26:48 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:33:39 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:36:38 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:38:24 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:40:53 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:41:28 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:41:30 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:41:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 13:50:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 13:50:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 13:50:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 13:51:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 13:52:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 13:52:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 13:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:01:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:01:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 14:01:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 14:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:06:10 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:06:11 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:07:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:08:32 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:26:30 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:27:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:28:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 14:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:30:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-22 14:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-22 14:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:43:15 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:43:43 --> 404 Page Not Found: C088-shoes/index
ERROR - 2023-08-22 14:43:45 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:46:08 --> Could not find the language line "products"
ERROR - 2023-08-22 14:48:30 --> Could not find the language line "products"
ERROR - 2023-08-22 14:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 14:53:17 --> Could not find the language line "products"
ERROR - 2023-08-22 14:55:36 --> Could not find the language line "products"
ERROR - 2023-08-22 14:57:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 14:57:59 --> Could not find the language line "products"
ERROR - 2023-08-22 14:58:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:00:31 --> Could not find the language line "products"
ERROR - 2023-08-22 15:01:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 15:02:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 15:02:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 15:05:05 --> Could not find the language line "products"
ERROR - 2023-08-22 15:05:30 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:06:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 15:06:34 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:07:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:09:49 --> Could not find the language line "products"
ERROR - 2023-08-22 15:09:50 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-22 15:11:32 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:14:37 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 15:15:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 15:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 15:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 15:18:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:19:18 --> Could not find the language line "products"
ERROR - 2023-08-22 15:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 15:30:06 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:31:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:31:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:33:32 --> Could not find the language line "products"
ERROR - 2023-08-22 15:38:15 --> Could not find the language line "products"
ERROR - 2023-08-22 15:39:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:47:43 --> Could not find the language line "products"
ERROR - 2023-08-22 15:52:28 --> Could not find the language line "products"
ERROR - 2023-08-22 15:56:53 --> Could not find the language line "Home"
ERROR - 2023-08-22 15:57:26 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:06:26 --> Could not find the language line "products"
ERROR - 2023-08-22 16:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:10:55 --> Could not find the language line "products"
ERROR - 2023-08-22 16:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:15:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:15:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:15:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:15:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:15:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:16:04 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:22:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 16:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:38:49 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:41:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:41:53 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:45:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:46:08 --> Could not find the language line "products"
ERROR - 2023-08-22 16:53:31 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:54:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-22 16:54:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 16:55:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 16:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:04:53 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:05:19 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:11:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:13:39 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:14:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:15:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 17:16:08 --> Could not find the language line "products"
ERROR - 2023-08-22 17:24:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:25:19 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:25:23 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:28:29 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:30:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:33:21 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:38:10 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:38:31 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:16 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:28 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:33 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:40:57 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:41:01 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:41:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:42:52 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:48:57 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 17:56:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 17:56:20 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:01:26 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:05:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:05:34 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:10:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 18:11:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:11:47 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:12:01 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:12:18 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:12:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 18:14:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:14:09 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:14:16 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 18:16:33 --> Could not find the language line "products"
ERROR - 2023-08-22 18:20:37 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:36:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Summer%' OR a.description LIKE '%Summer%' OR a.color LIKE '%Summer%' OR a.barcode LIKE '%Summer%' OR a.category LIKE '%Summer%' OR a.sub_category LIKE '%Summer%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 18:37:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-22 18:37:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-22 18:38:38 --> Could not find the language line "products"
ERROR - 2023-08-22 18:38:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 18:38:57 --> Could not find the language line "Home"
ERROR - 2023-08-22 18:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:03:52 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 19:07:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 19:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 19:11:45 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:16:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Running%' OR a.description LIKE '%Running%' OR a.color LIKE '%Running%' OR a.barcode LIKE '%Running%' OR a.category LIKE '%Running%' OR a.sub_category LIKE '%Running%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 19:17:38 --> Could not find the language line "products"
ERROR - 2023-08-22 19:30:05 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:30:05 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:30:05 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:30:06 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:30:06 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:30:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-22 19:33:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:34:36 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 19:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 19:39:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:48:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 19:48:49 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:57:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:58:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 19:59:42 --> Could not find the language line "products"
ERROR - 2023-08-22 20:00:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 20:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:01:20 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:04:41 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 20:05:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 20:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 20:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:17:38 --> Could not find the language line "products"
ERROR - 2023-08-22 20:19:09 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:29:23 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-08-22 20:36:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 20:41:44 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:45:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 20:47:38 --> Could not find the language line "products"
ERROR - 2023-08-22 20:57:11 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:57:11 --> Could not find the language line "Home"
ERROR - 2023-08-22 20:58:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 21:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-22 21:13:24 --> Could not find the language line "Other"
ERROR - 2023-08-22 21:14:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-22 21:15:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 21:17:39 --> Could not find the language line "products"
ERROR - 2023-08-22 21:29:30 --> Could not find the language line "Home"
ERROR - 2023-08-22 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 21:51:00 --> Could not find the language line "Home"
ERROR - 2023-08-22 21:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 21:57:57 --> Could not find the language line "products"
ERROR - 2023-08-22 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:09:32 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:10:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:15:57 --> Could not find the language line "products"
ERROR - 2023-08-22 22:21:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:22:24 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:22:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-22 22:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 22:24:17 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:26:19 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:26:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 22:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 22:26:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-22 22:26:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:27:21 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:27:39 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:27:50 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:27:55 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:28:03 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:28:06 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:28:07 --> Could not find the language line "Socks"
ERROR - 2023-08-22 22:28:08 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:28:16 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:28:55 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:28:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 22:29:04 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:33:57 --> Could not find the language line "products"
ERROR - 2023-08-22 22:56:50 --> Could not find the language line "Home"
ERROR - 2023-08-22 22:59:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-22 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:01:10 --> Could not find the language line "products"
ERROR - 2023-08-22 23:11:12 --> Could not find the language line "products"
ERROR - 2023-08-22 23:19:52 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:21:14 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:21:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:23:30 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:24:24 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:24:31 --> Could not find the language line "Perfume"
ERROR - 2023-08-22 23:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:24:54 --> Could not find the language line "Perfume"
ERROR - 2023-08-22 23:24:56 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:24:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 23:25:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 23:25:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-22 23:25:43 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-22 23:26:03 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:26:35 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-22 23:45:57 --> Could not find the language line "products"
ERROR - 2023-08-22 23:57:57 --> Could not find the language line "products"
