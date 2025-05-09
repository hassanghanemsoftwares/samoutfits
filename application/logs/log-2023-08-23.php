<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-23 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-23 00:09:57 --> Could not find the language line "products"
ERROR - 2023-08-23 00:15:57 --> Could not find the language line "products"
ERROR - 2023-08-23 00:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 00:33:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 00:33:57 --> Could not find the language line "products"
ERROR - 2023-08-23 00:39:57 --> Could not find the language line "products"
ERROR - 2023-08-23 00:41:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 00:44:17 --> Could not find the language line "products"
ERROR - 2023-08-23 00:48:32 --> Could not find the language line "products"
ERROR - 2023-08-23 00:52:49 --> Could not find the language line "products"
ERROR - 2023-08-23 00:57:06 --> Could not find the language line "products"
ERROR - 2023-08-23 00:59:02 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:00:55 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:01:23 --> Could not find the language line "products"
ERROR - 2023-08-23 01:02:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:05:40 --> Could not find the language line "products"
ERROR - 2023-08-23 01:09:58 --> Could not find the language line "products"
ERROR - 2023-08-23 01:18:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:22:49 --> 404 Page Not Found: Products/products
ERROR - 2023-08-23 01:27:06 --> 404 Page Not Found: Products/products
ERROR - 2023-08-23 01:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:39:57 --> Could not find the language line "products"
ERROR - 2023-08-23 01:44:15 --> Could not find the language line "products"
ERROR - 2023-08-23 01:47:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 01:50:31 --> Could not find the language line "products"
ERROR - 2023-08-23 01:53:40 --> Could not find the language line "products"
ERROR - 2023-08-23 02:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 02:13:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 02:14:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 02:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 02:44:54 --> Could not find the language line "Home"
ERROR - 2023-08-23 02:46:11 --> Could not find the language line "products"
ERROR - 2023-08-23 02:51:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-23 03:15:59 --> Could not find the language line "Home"
ERROR - 2023-08-23 03:28:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 03:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 03:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 03:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 03:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 03:46:13 --> Could not find the language line "products"
ERROR - 2023-08-23 03:51:05 --> Could not find the language line "products"
ERROR - 2023-08-23 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:05:43 --> Could not find the language line "products"
ERROR - 2023-08-23 04:16:12 --> Could not find the language line "products"
ERROR - 2023-08-23 04:19:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 04:21:05 --> Could not find the language line "products"
ERROR - 2023-08-23 04:25:59 --> Could not find the language line "products"
ERROR - 2023-08-23 04:26:27 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 04:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:30:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:34:58 --> Could not find the language line "products"
ERROR - 2023-08-23 04:42:45 --> Could not find the language line "products"
ERROR - 2023-08-23 04:47:33 --> Could not find the language line "Home"
ERROR - 2023-08-23 04:47:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 04:47:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 04:47:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 04:47:36 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-23 04:47:36 --> 404 Page Not Found: Home/home
ERROR - 2023-08-23 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:00:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:01:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:06:04 --> Could not find the language line "products"
ERROR - 2023-08-23 05:11:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:13:50 --> Could not find the language line "products"
ERROR - 2023-08-23 05:21:05 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:22:01 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:29:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-23 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:37:09 --> Could not find the language line "products"
ERROR - 2023-08-23 05:39:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:42:09 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:44:56 --> Could not find the language line "products"
ERROR - 2023-08-23 05:45:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 05:45:23 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:50:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:53:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-23 05:53:46 --> Could not find the language line "Home"
ERROR - 2023-08-23 05:54:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:02:12 --> Could not find the language line "products"
ERROR - 2023-08-23 06:06:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:06:57 --> Could not find the language line "products"
ERROR - 2023-08-23 06:07:01 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:07:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:16:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:18:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:21:07 --> 404 Page Not Found: Products/products
ERROR - 2023-08-23 06:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:25:52 --> 404 Page Not Found: Products/products
ERROR - 2023-08-23 06:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:30:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 06:30:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 06:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:30:38 --> Could not find the language line "products"
ERROR - 2023-08-23 06:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:31:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:33:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 06:33:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 06:35:20 --> Could not find the language line "products"
ERROR - 2023-08-23 06:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:38:21 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:40:31 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:42:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:46:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:50:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 06:51:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 06:53:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 06:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 06:56:09 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:56:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 06:56:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 06:56:14 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-23 06:56:16 --> 404 Page Not Found: Home/accounts
ERROR - 2023-08-23 06:56:16 --> 404 Page Not Found: Home/home
ERROR - 2023-08-23 06:56:16 --> 404 Page Not Found: Home/home
ERROR - 2023-08-23 06:56:16 --> 404 Page Not Found: Home/home
ERROR - 2023-08-23 06:56:20 --> 404 Page Not Found: Cart/accounts
ERROR - 2023-08-23 06:56:20 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-23 06:56:21 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-23 06:56:21 --> 404 Page Not Found: Cart/home
ERROR - 2023-08-23 06:56:21 --> Could not find the language line "accounts"
ERROR - 2023-08-23 06:56:22 --> 404 Page Not Found: Users/accounts
ERROR - 2023-08-23 06:56:23 --> 404 Page Not Found: Users/home
ERROR - 2023-08-23 06:56:23 --> 404 Page Not Found: Users/home
ERROR - 2023-08-23 06:56:23 --> 404 Page Not Found: Users/home
ERROR - 2023-08-23 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 07:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:08:30 --> Could not find the language line "products"
ERROR - 2023-08-23 07:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:13:14 --> Could not find the language line "products"
ERROR - 2023-08-23 07:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:14:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:15:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 07:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:24:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:27:28 --> Could not find the language line "products"
ERROR - 2023-08-23 07:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 07:32:11 --> Could not find the language line "products"
ERROR - 2023-08-23 07:36:55 --> Could not find the language line "products"
ERROR - 2023-08-23 07:41:39 --> Could not find the language line "products"
ERROR - 2023-08-23 07:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:53:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 07:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 07:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 07:59:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 07:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:02:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:03:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:05:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 08:06:01 --> Could not find the language line "assets"
ERROR - 2023-08-23 08:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:07:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:07:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:08:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 08:08:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 08:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:10:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 08:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 08:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:10:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 08:10:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Tops')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('M')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-23 08:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:12:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 08:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:14:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 08:14:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 08:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:17:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:18:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:26:18 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:33:08 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-23 08:33:08 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-23 08:33:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-23 08:33:09 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-23 08:33:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:34:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 08:34:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 08:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:37:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 08:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:39:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:43:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:50:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 08:51:36 --> Could not find the language line "Home"
ERROR - 2023-08-23 08:58:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 08:59:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 08:59:54 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-08-23 09:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:00:35 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:03:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:03:59 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:10:05 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:13:27 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:13:27 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:14:02 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:14:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 09:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:22:23 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:22:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:24:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 09:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:29:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:40:19 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:41:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:44:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 09:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 09:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:48:06 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:51:16 --> Could not find the language line "products"
ERROR - 2023-08-23 09:51:53 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-08-23 09:52:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 09:56:37 --> Could not find the language line "products"
ERROR - 2023-08-23 09:57:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:58:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 09:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:18:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:21:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 10:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:22:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:24:18 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:25:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:26:38 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:28:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:28:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 10:28:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:31:04 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:32:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:32:17 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:32:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:32:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:33:40 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:33:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:34:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:34:46 --> Could not find the language line "products"
ERROR - 2023-08-23 10:34:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:36:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:36:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:38:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:38:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:38:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:39:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:39:26 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:39:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:40:03 --> Could not find the language line "products"
ERROR - 2023-08-23 10:41:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:48:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:48:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:48:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:49:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:49:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:49:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 10:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 10:58:40 --> Could not find the language line "Home"
ERROR - 2023-08-23 10:59:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 11:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 11:01:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:04:09 --> Could not find the language line "Home"
ERROR - 2023-08-23 11:04:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-23 11:04:13 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-23 11:04:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-23 11:04:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-23 11:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:06:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:07:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 11:08:35 --> Could not find the language line "Home"
ERROR - 2023-08-23 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 11:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 11:42:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 11:42:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 11:43:58 --> Could not find the language line "Home"
ERROR - 2023-08-23 11:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:03:19 --> Could not find the language line "products"
ERROR - 2023-08-23 12:03:54 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:03:58 --> Could not find the language line "products"
ERROR - 2023-08-23 12:04:25 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 12:04:34 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:04:36 --> Could not find the language line "products"
ERROR - 2023-08-23 12:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:05:50 --> Could not find the language line "products"
ERROR - 2023-08-23 12:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:08:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 12:08:09 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:09:39 --> Could not find the language line "products"
ERROR - 2023-08-23 12:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:10:55 --> Could not find the language line "products"
ERROR - 2023-08-23 12:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:12:11 --> Could not find the language line "products"
ERROR - 2023-08-23 12:12:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 12:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-23 12:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:13:27 --> Could not find the language line "products"
ERROR - 2023-08-23 12:15:39 --> Could not find the language line "products"
ERROR - 2023-08-23 12:15:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:16:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:16:37 --> Could not find the language line "products"
ERROR - 2023-08-23 12:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:17:53 --> Could not find the language line "products"
ERROR - 2023-08-23 12:18:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 12:19:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 12:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:20:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:22:19 --> Could not find the language line "products"
ERROR - 2023-08-23 12:23:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 12:23:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-23 12:24:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 12:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 12:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:26:46 --> Could not find the language line "products"
ERROR - 2023-08-23 12:28:01 --> Could not find the language line "products"
ERROR - 2023-08-23 12:28:39 --> Could not find the language line "products"
ERROR - 2023-08-23 12:29:55 --> Could not find the language line "products"
ERROR - 2023-08-23 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:31:11 --> Could not find the language line "products"
ERROR - 2023-08-23 12:38:48 --> Could not find the language line "products"
ERROR - 2023-08-23 12:40:04 --> Could not find the language line "products"
ERROR - 2023-08-23 12:40:44 --> Could not find the language line "products"
ERROR - 2023-08-23 12:41:58 --> Could not find the language line "products"
ERROR - 2023-08-23 12:43:14 --> Could not find the language line "products"
ERROR - 2023-08-23 12:44:30 --> Could not find the language line "products"
ERROR - 2023-08-23 12:45:10 --> Could not find the language line "products"
ERROR - 2023-08-23 12:45:57 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:46:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:46:24 --> Could not find the language line "products"
ERROR - 2023-08-23 12:47:40 --> Could not find the language line "products"
ERROR - 2023-08-23 12:48:58 --> Could not find the language line "products"
ERROR - 2023-08-23 12:49:34 --> Could not find the language line "products"
ERROR - 2023-08-23 12:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 12:50:50 --> Could not find the language line "products"
ERROR - 2023-08-23 12:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-23 12:55:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 12:55:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 12:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-23 12:55:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 12:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 12:56:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 12:56:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 12:56:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 13:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:05:01 --> Could not find the language line "assets"
ERROR - 2023-08-23 13:05:25 --> Could not find the language line "products"
ERROR - 2023-08-23 13:05:36 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:05:58 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:06:41 --> Could not find the language line "products"
ERROR - 2023-08-23 13:07:19 --> Could not find the language line "products"
ERROR - 2023-08-23 13:08:35 --> Could not find the language line "products"
ERROR - 2023-08-23 13:11:45 --> Could not find the language line "products"
ERROR - 2023-08-23 13:11:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:12:22 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:13:01 --> Could not find the language line "products"
ERROR - 2023-08-23 13:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:14:17 --> Could not find the language line "products"
ERROR - 2023-08-23 13:14:55 --> Could not find the language line "products"
ERROR - 2023-08-23 13:16:11 --> Could not find the language line "products"
ERROR - 2023-08-23 13:19:24 --> Could not find the language line "products"
ERROR - 2023-08-23 13:20:37 --> Could not find the language line "products"
ERROR - 2023-08-23 13:23:50 --> Could not find the language line "products"
ERROR - 2023-08-23 13:24:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:25:04 --> Could not find the language line "products"
ERROR - 2023-08-23 13:26:32 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:27:41 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:28:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 13:28:39 --> Could not find the language line "assets"
ERROR - 2023-08-23 13:28:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 13:29:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 13:30:08 --> Could not find the language line "products"
ERROR - 2023-08-23 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:30:25 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:30:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 13:30:28 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:31:24 --> Could not find the language line "products"
ERROR - 2023-08-23 13:31:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:32:40 --> Could not find the language line "products"
ERROR - 2023-08-23 13:33:56 --> Could not find the language line "products"
ERROR - 2023-08-23 13:36:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:37:06 --> Could not find the language line "products"
ERROR - 2023-08-23 13:37:44 --> Could not find the language line "products"
ERROR - 2023-08-23 13:45:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 13:47:54 --> Could not find the language line "products"
ERROR - 2023-08-23 13:48:20 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:49:09 --> Could not find the language line "products"
ERROR - 2023-08-23 13:53:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 13:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 13:54:43 --> Could not find the language line "products"
ERROR - 2023-08-23 13:56:54 --> Could not find the language line "products"
ERROR - 2023-08-23 13:58:22 --> Could not find the language line "products"
ERROR - 2023-08-23 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:00:33 --> Could not find the language line "products"
ERROR - 2023-08-23 14:01:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:05:41 --> Could not find the language line "products"
ERROR - 2023-08-23 14:07:09 --> Could not find the language line "products"
ERROR - 2023-08-23 14:11:43 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 14:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 14:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 14:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 14:15:55 --> Could not find the language line "products"
ERROR - 2023-08-23 14:18:07 --> Could not find the language line "products"
ERROR - 2023-08-23 14:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 14:26:10 --> Could not find the language line "products"
ERROR - 2023-08-23 14:26:54 --> Could not find the language line "products"
ERROR - 2023-08-23 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:40:49 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:45:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-23 14:45:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-23 14:45:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:45:47 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-23 14:47:04 --> Could not find the language line "products"
ERROR - 2023-08-23 14:47:23 --> Could not find the language line "products"
ERROR - 2023-08-23 14:49:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 14:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 14:58:20 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:12:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:16:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:19:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 15:23:25 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:25:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:27:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 15:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:29:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:30:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 15:32:25 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:32:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%2023%' OR a.description LIKE '%2023%' OR a.color LIKE '%2023%' OR a.barcode LIKE '%2023%' OR a.category LIKE '%2023%' OR a.sub_category LIKE '%2023%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 15:33:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:35:49 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:39:05 --> Could not find the language line "Home"
ERROR - 2023-08-23 15:39:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:12:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:13:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 16:17:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:30:25 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:31:33 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:36:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:47:28 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:50:21 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:51:57 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:52:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:52:31 --> Could not find the language line "Home"
ERROR - 2023-08-23 16:52:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:53:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:53:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:54:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:54:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:55:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 16:56:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:56:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:56:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 16:56:46 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:20:27 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:20:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 17:20:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 17:21:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 17:21:06 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:21:36 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:21:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 17:21:45 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 17:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 17:23:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:08 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:44 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 17:24:33 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:24:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 17:26:19 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-23 17:26:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:30:58 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:30:58 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:33:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 17:35:23 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:43:17 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:43:21 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-23 17:45:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 18:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:00:44 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:01:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:03:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:06:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:22:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 18:22:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:43:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:45:00 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:45:35 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:46:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 18:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 18:48:55 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:49:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:49:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:49:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:49:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 18:49:30 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:49:31 --> Could not find the language line "Home"
ERROR - 2023-08-23 18:50:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 18:50:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 18:51:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 18:57:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:02:55 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:05:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:09:28 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:09:36 --> Could not find the language line "Socks"
ERROR - 2023-08-23 19:10:28 --> Could not find the language line "Socks"
ERROR - 2023-08-23 19:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:12:32 --> Could not find the language line "Socks"
ERROR - 2023-08-23 19:13:42 --> Could not find the language line "Socks"
ERROR - 2023-08-23 19:23:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:23:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:23:23 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:23:41 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:24:02 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:25:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:25:27 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:25:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:25:51 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:26:01 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:26:14 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:26:36 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:26:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:27:32 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:27:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:28:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:28:37 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 19:28:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:28:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:30:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:37:31 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:39:29 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:43:54 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:45:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:47:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:47:18 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 19:47:26 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:47:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 19:47:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:48:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:48:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:49:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:49:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:49:18 --> Could not find the language line "Home"
ERROR - 2023-08-23 19:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 19:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:00:41 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:03:28 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:07:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:07:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:08:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:08:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:09:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:09:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:10:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:29:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:33:03 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:35:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:37:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:37:49 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:37:51 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:40:25 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:41:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:41:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:42:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:42:41 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:43:08 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:43:16 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:43:35 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:43:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:43:44 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:44:01 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:44:24 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 20:44:46 --> Could not find the language line "Other"
ERROR - 2023-08-23 20:45:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:45:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:45:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:45:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:45:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:45:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 20:46:07 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:46:11 --> Could not find the language line "Socks"
ERROR - 2023-08-23 20:46:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:46:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 20:46:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:47:10 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:47:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 20:48:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 20:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:49:02 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:49:41 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:50:19 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:51:04 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:52:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:53:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:53:42 --> Could not find the language line "Home"
ERROR - 2023-08-23 20:53:56 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:54:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:56:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 20:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:57:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 20:59:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 20:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:00:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:01:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 21:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:04:57 --> Could not find the language line "Socks"
ERROR - 2023-08-23 21:05:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 21:05:17 --> Could not find the language line "Socks"
ERROR - 2023-08-23 21:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:05:32 --> Could not find the language line "Socks"
ERROR - 2023-08-23 21:05:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:06:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 21:09:39 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:18:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:33:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:33:37 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:33:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:48:53 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:51:36 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:53:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:54:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:54:42 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:55:31 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:55:46 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:55:56 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:56:28 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:56:42 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:56:51 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:57:06 --> Could not find the language line "Home"
ERROR - 2023-08-23 21:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 21:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:00:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:23:41 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:27:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 22:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:27:42 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:29:03 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:29:34 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:29:43 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:29:58 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:30:00 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:30:23 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:30:26 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:30:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 22:30:44 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:30:46 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:30:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 22:31:08 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:31:13 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:32:16 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:38:00 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:38:08 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 22:38:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:43:52 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:48:42 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:53:33 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:55:38 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:56:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:56:14 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:56:32 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:56:53 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:56:58 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 22:56:59 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 22:57:34 --> Could not find the language line "Home"
ERROR - 2023-08-23 22:57:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 22:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 22:58:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:00:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:02:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:11:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 23:11:15 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:18:03 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:18:03 --> 404 Page Not Found: Wp-includes/css
ERROR - 2023-08-23 23:18:03 --> 404 Page Not Found: Media/system
ERROR - 2023-08-23 23:18:41 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:21:33 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:24:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:27:40 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 23:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:28:30 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 23:28:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:31:11 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 23:32:24 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:32:47 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:33:10 --> Could not find the language line "Perfume"
ERROR - 2023-08-23 23:33:57 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:36:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:37:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:43:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-23 23:44:35 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 23:45:01 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:45:30 --> Could not find the language line "Bracelets"
ERROR - 2023-08-23 23:45:58 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:46:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:46:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:47:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:47:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:48:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-23 23:48:43 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-23 23:48:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-23 23:49:30 --> Could not find the language line "Other"
ERROR - 2023-08-23 23:49:59 --> Could not find the language line "Other"
ERROR - 2023-08-23 23:50:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:50:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-23 23:50:45 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-23 23:50:46 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-23 23:50:48 --> Could not find the language line "Home"
ERROR - 2023-08-23 23:51:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:51:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:51:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:51:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:51:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:51:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:51:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-23 23:52:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 23:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:53:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 23:56:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 23:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-23 23:56:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-23 23:57:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-23 23:57:57 --> 404 Page Not Found: Accounting/assets
