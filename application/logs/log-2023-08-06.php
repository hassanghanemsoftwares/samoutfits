<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-06 00:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-06 00:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-06 00:07:06 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 00:24:20 --> Could not find the language line "Home"
ERROR - 2023-08-06 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-06 00:50:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 01:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 01:13:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 01:22:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 01:25:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 01:26:36 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-06 01:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 01:35:36 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 01:50:36 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 02:40:42 --> Could not find the language line "Home"
ERROR - 2023-08-06 03:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 03:00:42 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:07:54 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:18:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 03:29:30 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 03:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 03:36:42 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:44:20 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:46:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 03:46:08 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:52:16 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:54:04 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 03:56:39 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 04:00:15 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:04:59 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:09:44 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-06 04:32:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 04:47:18 --> Could not find the language line "Home"
ERROR - 2023-08-06 04:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 04:50:47 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:53:09 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 04:58:29 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:00:51 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:02:36 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:03:15 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:05:37 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:07:59 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:10:21 --> 404 Page Not Found: Products/products
ERROR - 2023-08-06 05:10:34 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:11:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 05:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 05:12:12 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:51:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 05:51:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:53:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 05:54:48 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:57:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 05:58:26 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:58:28 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:59:05 --> Could not find the language line "Home"
ERROR - 2023-08-06 05:59:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:10:09 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:11:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 06:12:45 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:12:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 06:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:18:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:19:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:19:48 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:19:50 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:19:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:20:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:20:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:21:27 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:23:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:26:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 06:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:28:04 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:29:45 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:32:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 06:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:45:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 06:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 06:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 06:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:00:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:02:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 07:02:55 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:04:31 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:04:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:05:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:08:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:08:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:08:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:09:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:09:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:12:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:16:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:17:07 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:17:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:18:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:19:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:20:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:20:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:20:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:21:00 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:21:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:21:21 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:21:23 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 07:21:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:21:41 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 07:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:21:55 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:22:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:22:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:22:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:22:38 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:24:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:24:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:24:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:25:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:25:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:25:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:26:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:26:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:27:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:27:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 07:27:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 07:27:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 07:28:48 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:29:12 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:29:46 --> Could not find the language line "Socks"
ERROR - 2023-08-06 07:30:10 --> Could not find the language line "Socks"
ERROR - 2023-08-06 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 07:30:17 --> Could not find the language line "Socks"
ERROR - 2023-08-06 07:30:21 --> Could not find the language line "Socks"
ERROR - 2023-08-06 07:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:31:03 --> Could not find the language line "Socks"
ERROR - 2023-08-06 07:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:31:54 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:32:40 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 07:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:33:03 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 07:33:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 07:33:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 07:34:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 07:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:38:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:38:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:38:41 --> Could not find the language line "assets"
ERROR - 2023-08-06 07:38:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:39:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:40:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:43:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 07:43:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:48:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:48:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:53:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:55:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:55:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:55:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 07:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:57:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 07:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:02:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 08:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-06 08:02:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 08:02:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 08:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 08:03:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 08:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 08:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 08:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:16:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:22:21 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:22:37 --> Could not find the language line "assets"
ERROR - 2023-08-06 08:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:27:31 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:36:37 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:39:05 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:39:09 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 08:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:45:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 08:45:20 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:47:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 08:47:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 08:48:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 08:48:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-06 08:49:17 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:49:20 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:54:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 08:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 08:54:37 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:54:48 --> Could not find the language line "Home"
ERROR - 2023-08-06 08:54:48 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-06 08:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:56:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 08:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 08:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:02:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:06:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:08:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:08:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:09:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:09:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 09:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Shorts')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('XL', 'XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 09:10:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:11:20 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:11:59 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:12:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 09:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:16:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 09:16:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 09:19:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:19:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:23:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 09:23:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-06 09:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:33:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:36:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 09:37:49 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:50:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-06 09:53:01 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:56:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:56:37 --> Could not find the language line "Home"
ERROR - 2023-08-06 09:56:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:57:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:57:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 09:58:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:58:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 09:58:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 10:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 10:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:25:35 --> Could not find the language line "Home"
ERROR - 2023-08-06 10:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:25:50 --> Could not find the language line "Home"
ERROR - 2023-08-06 10:26:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 10:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:27:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 10:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 10:32:37 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-06 10:32:37 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-06 10:32:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-06 10:32:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-06 10:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:40:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 10:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:50:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 10:50:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black', 'White')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 10:51:14 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-06 10:51:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-06 10:51:15 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-06 10:51:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-06 10:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 10:52:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 10:52:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:04:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:07:44 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:14:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 11:14:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:27:41 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:28:42 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 11:28:58 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:30:41 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:31:19 --> Could not find the language line "Socks"
ERROR - 2023-08-06 11:31:27 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:31:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 11:31:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 11:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:31:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 11:31:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 11:31:51 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:31:54 --> Could not find the language line "Perfume"
ERROR - 2023-08-06 11:32:03 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:32:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 11:33:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:33:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:33:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:33:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:34:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:34:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:35:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:38:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 11:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 11:39:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 11:41:07 --> Could not find the language line "Home"
ERROR - 2023-08-06 11:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 11:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:03:09 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:03:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:04:41 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-06 12:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:05:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:08:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 12:08:02 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:08:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:08:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:08:38 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:11:56 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:11:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 12:12:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:13:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:13:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 12:13:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:21:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:21:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:21:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:21:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 12:21:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '4'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 12:22:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 12:22:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 12:22:21 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 12:22:32 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 12:22:37 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 12:22:41 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 12:22:51 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 12:22:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 12:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bracelets'
AND `items`.`price` <= '5'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 12:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:25:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 12:25:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 12:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:35:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:35:58 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:37:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:39:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:42:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:42:55 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:44:26 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:45:02 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:45:46 --> Could not find the language line "Home"
ERROR - 2023-08-06 12:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 12:50:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:50:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 12:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:05:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 13:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-06 13:08:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 13:08:04 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:10:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:10:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:10:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:14:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:15:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:17:06 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:17:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:17:48 --> Could not find the language line "assets"
ERROR - 2023-08-06 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:31:53 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:36:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:36:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 13:36:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '26'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 13:38:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:41:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:41:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:42:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-06 13:42:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('White')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-06 13:42:49 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:42:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:43:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:44:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:44:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:44:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:46:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 13:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:46:30 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:46:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 13:47:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 13:47:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:47:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-06 13:47:31 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:48:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:48:19 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 13:49:03 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 13:49:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:49:35 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 13:49:39 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:49:39 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:50:40 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:51:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 13:51:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-06 13:51:54 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:51:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:52:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 13:53:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:53:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:53:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:53:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:53:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:53:50 --> Could not find the language line "Home"
ERROR - 2023-08-06 13:54:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-06 13:54:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 13:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 14:11:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 14:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 14:24:34 --> Could not find the language line "Home"
ERROR - 2023-08-06 14:27:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:28:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:28:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:28:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:28:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:29:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 14:30:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 14:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 14:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 14:40:31 --> Could not find the language line "Home"
ERROR - 2023-08-06 14:41:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:01:56 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:03:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:04:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:04:36 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 15:04:41 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 15:04:50 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:05:46 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:05:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:06:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:06:28 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:07:03 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 15:07:33 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:08:30 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:08:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:10:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:12:09 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:12:23 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:12:36 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 15:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:12:49 --> Could not find the language line "Hair%20"
ERROR - 2023-08-06 15:13:03 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:13:30 --> Could not find the language line "Bracelets"
ERROR - 2023-08-06 15:14:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 15:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:15:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:17:38 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:19:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:23:10 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-06 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:34:07 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 15:44:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 15:46:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 15:46:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 15:46:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 15:46:37 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-06 15:47:09 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-06 15:47:40 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-06 15:48:11 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-06 15:48:43 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-06 15:49:14 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-06 15:49:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:55:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:56:38 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:56:38 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:56:39 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:56:39 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:56:39 --> Could not find the language line "Home"
ERROR - 2023-08-06 15:57:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 15:59:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:00:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:01:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:02:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:05:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:07:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:08:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:09:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:11:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:12:09 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:12:19 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:13:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:14:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:17:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:21:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:22:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:24:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:24:35 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:26:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:27:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:28:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:30:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:33:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 16:33:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 16:33:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:35:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:36:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:38:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:39:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:40:22 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:40:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:42:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:43:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 16:44:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 16:44:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 16:46:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:47:51 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:49:28 --> Could not find the language line "Other"
ERROR - 2023-08-06 16:49:59 --> Could not find the language line "Other"
ERROR - 2023-08-06 16:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:53:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:53:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:53:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:53:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:53:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:53:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:54:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:54:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:54:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:54:47 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:55:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:56:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:56:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:56:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:56:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:57:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 16:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 16:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 16:57:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 17:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 17:08:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-06 17:11:22 --> Could not find the language line "Home"
ERROR - 2023-08-06 17:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 17:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:31:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:34:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 17:34:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 17:45:52 --> Could not find the language line "Home"
ERROR - 2023-08-06 17:47:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:47:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 17:50:23 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:01:09 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:12:37 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:19:54 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:20:10 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:21:01 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:21:04 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:21:35 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:29:23 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 18:45:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-06 18:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 18:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:13:47 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:14:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-06 19:19:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:19:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:19:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 19:20:23 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:20:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 19:21:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 19:21:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 19:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 19:21:57 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:24:47 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:30:34 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:30:34 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:49:16 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 19:52:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-06 19:52:41 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:52:56 --> Could not find the language line "Home"
ERROR - 2023-08-06 19:59:45 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:01:23 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-06 20:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 20:22:48 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:26:56 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 20:27:29 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-06 20:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 20:27:45 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-06 20:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 20:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:31:27 --> Could not find the language line "Home"
ERROR - 2023-08-06 20:51:21 --> Could not find the language line "Home"
ERROR - 2023-08-06 21:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 21:06:57 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-06 21:08:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 21:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 21:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-06 21:39:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 21:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 21:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-06 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:10:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-06 22:10:41 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:11:37 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:29:15 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:29:42 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:31:45 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:32:31 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:34:59 --> Could not find the language line "Home"
ERROR - 2023-08-06 22:40:20 --> Could not find the language line "Home"
ERROR - 2023-08-06 23:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-06 23:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-06 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-06 23:58:25 --> Could not find the language line "Clothing"
