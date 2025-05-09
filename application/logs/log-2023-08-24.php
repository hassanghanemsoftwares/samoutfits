<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-24 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 00:22:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 00:22:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-24 00:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-24 01:16:33 --> Could not find the language line "Home"
ERROR - 2023-08-24 01:23:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 01:30:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 01:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 01:48:05 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 02:25:36 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:34:05 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:38:57 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:42:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 02:46:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:53:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 02:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 03:20:33 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-24 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 03:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 03:33:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 03:33:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 03:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 03:51:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 03:51:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:10:43 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:41:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:52:49 --> Could not find the language line "Home"
ERROR - 2023-08-24 04:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:00:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:03:59 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 05:07:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:17:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:35:16 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:36:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 05:36:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:38:03 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:38:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 05:38:25 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:38:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 05:38:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 05:39:59 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:40:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 05:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 05:53:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 05:56:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:02:05 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:02:34 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:04:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:05:28 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:11:13 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:16:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 06:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 06:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:29:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 06:29:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 06:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:31:25 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:32:07 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:49:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 06:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:49:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:54:01 --> Could not find the language line "Home"
ERROR - 2023-08-24 06:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 06:59:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:00:07 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:00:54 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:03:31 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:08:40 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:08:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:08:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:09:52 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:11:57 --> Could not find the language line "Socks"
ERROR - 2023-08-24 07:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:12:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:12:34 --> Could not find the language line "Socks"
ERROR - 2023-08-24 07:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:12:45 --> Could not find the language line "Socks"
ERROR - 2023-08-24 07:12:54 --> Could not find the language line "Socks"
ERROR - 2023-08-24 07:13:00 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:13:02 --> Could not find the language line "Socks"
ERROR - 2023-08-24 07:13:07 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:13:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-24 07:13:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-24 07:13:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:13:42 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:13:43 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:17:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:24:40 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:27:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:29:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 07:29:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:36:27 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:37:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:42:23 --> Could not find the language line "Other"
ERROR - 2023-08-24 07:43:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-24 07:46:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 07:46:43 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:51:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:54:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 07:54:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 07:55:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 07:58:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 07:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:59:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 07:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:01:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:01:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 08:01:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 08:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:16:29 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-24 08:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:17:45 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-24 08:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:19:11 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-24 08:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:19:15 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-24 08:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:21:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:21:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 08:21:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 08:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:27:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:35:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:36:33 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:41:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:44:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 08:49:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 08:49:49 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:54:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:54:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 08:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:55:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:56:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:56:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 08:59:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:01:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:01:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:01:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:01:26 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:02:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:02:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:02:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:03:42 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:04:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-24 09:05:00 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:06:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 09:06:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 09:06:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '21'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 09:09:29 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-24 09:11:09 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-08-24 09:11:10 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-08-24 09:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:15:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 09:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 09:26:53 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:26:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:26:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 09:26:59 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:28:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-24 09:29:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 09:29:44 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:30:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-24 09:31:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-24 09:31:09 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:32:03 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:32:33 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:43:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 09:44:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 09:46:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 09:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:47:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:47:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:47:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:47:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:51:27 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:51:41 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:52:56 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-24 09:52:56 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-24 09:52:56 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-24 09:52:57 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-24 09:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:54:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 09:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 09:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:00:40 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-24 10:06:41 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:06:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 10:06:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 10:07:28 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:09:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:09:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 10:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:10:37 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:10:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 10:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:12:55 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 10:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:13:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:13:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:13:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:15:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:15:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:16:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:17:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:17:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:17:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:17:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:18:02 --> Could not find the language line "Socks"
ERROR - 2023-08-24 10:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:18:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:23:25 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:33:07 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:33:30 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:33:59 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:35:54 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:51:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 10:52:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 10:52:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:52:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 10:53:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:02:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:02:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 11:03:49 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:03:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:04:20 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:17:10 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:17:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:18:00 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:23:22 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:23:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 11:23:25 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:23:28 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 11:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:39:52 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:45:33 --> Could not find the language line "Home"
ERROR - 2023-08-24 11:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 11:50:34 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:04:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 12:04:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 12:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:07:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 12:07:39 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:13:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:13:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:20:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 12:20:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '10'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 12:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:23:41 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:26:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:30:31 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:35:02 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:35:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:39:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:31 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:39:43 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:49 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:39:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:41:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 12:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-24 12:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:42:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:43:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:43:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:48:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:49:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 12:49:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 12:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:54:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:55:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 12:55:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 12:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 12:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 13:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 13:06:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:09:59 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-24 13:11:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 13:11:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 13:13:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:16:57 --> Could not find the language line "Home"
ERROR - 2023-08-24 13:17:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 13:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:37:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 13:38:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-24 13:38:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-24 13:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:47:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 13:47:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 13:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 13:58:30 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:00:57 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:04:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:06:26 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:06:44 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:08:04 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:11:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 14:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:13:29 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 14:13:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 14:13:38 --> Could not find the language line "assets"
ERROR - 2023-08-24 14:13:48 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 14:14:16 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 14:14:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:14:49 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 14:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:21:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:22:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:23:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:28:26 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:33:30 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:34:37 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:46:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:53:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:53:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-24 14:53:59 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:54:53 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 14:58:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 14:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:06:58 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:24:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 15:28:58 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:30:12 --> Could not find the language line "Bracelets"
ERROR - 2023-08-24 15:39:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 15:45:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:48:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:55:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 15:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 15:57:44 --> Could not find the language line "Perfume"
ERROR - 2023-08-24 15:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:08:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:10:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:14:55 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:26:40 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 16:31:15 --> Could not find the language line "Perfume"
ERROR - 2023-08-24 16:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 16:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 16:46:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:07:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:08:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:09:00 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 17:15:08 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-24 17:18:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:18:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:27:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 17:29:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:40:44 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:54:57 --> Could not find the language line "Home"
ERROR - 2023-08-24 17:55:26 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:00:51 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:01:32 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:05:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:05:28 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:06:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:10:00 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:10:04 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:13:40 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:14:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 18:23:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:23:24 --> Could not find the language line "Socks"
ERROR - 2023-08-24 18:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:23:40 --> Could not find the language line "Socks"
ERROR - 2023-08-24 18:23:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:25:27 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:27:30 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:28:02 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:34:02 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:40:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:40:21 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:40:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 18:42:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:42:54 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:43:02 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:50:01 --> Could not find the language line "Home"
ERROR - 2023-08-24 18:55:18 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:05:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 19:05:39 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:05:52 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:13:45 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:30:28 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:56:50 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:57:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:57:23 --> Could not find the language line "Home"
ERROR - 2023-08-24 19:59:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 20:00:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:09:27 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:14:01 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:21:50 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-24 20:24:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:29:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:32:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 20:33:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 20:33:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 20:33:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:33:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:33:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:34:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:34:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:35:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 20:40:02 --> Could not find the language line "Home"
ERROR - 2023-08-24 20:40:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 20:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 20:51:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 20:51:26 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-24 20:51:29 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-24 20:51:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 20:51:35 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-24 20:51:40 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-24 20:51:43 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-24 20:51:47 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-24 20:57:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 20:57:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 20:58:13 --> Could not find the language line "Other"
ERROR - 2023-08-24 20:58:18 --> Could not find the language line "Other"
ERROR - 2023-08-24 21:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:04:35 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:10:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 21:10:33 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:19:11 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:24:54 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:51:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:52:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:53:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 21:54:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 21:54:14 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:54:41 --> Could not find the language line "Home"
ERROR - 2023-08-24 21:54:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-24 21:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 21:58:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-24 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:21:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:30:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 22:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:39:46 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:40:03 --> Could not find the language line "Perfume"
ERROR - 2023-08-24 22:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:46:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:46:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:46:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:47:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:47:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:48:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:48:43 --> Could not find the language line "Socks"
ERROR - 2023-08-24 22:48:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-24 22:49:49 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:50:13 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:50:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 22:50:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-24 22:50:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:51:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:51:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:51:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-24 22:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:52:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:53:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:53:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:53:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-24 22:54:17 --> Could not find the language line "Home"
ERROR - 2023-08-24 22:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-24 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:02:30 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:03:43 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 23:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 23:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-24 23:03:45 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-24 23:03:45 --> 404 Page Not Found: Home/home
ERROR - 2023-08-24 23:04:24 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:41:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:41:06 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:50:38 --> Could not find the language line "Home"
ERROR - 2023-08-24 23:58:03 --> Could not find the language line "Home"
