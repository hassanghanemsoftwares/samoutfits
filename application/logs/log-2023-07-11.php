<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-11 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 00:04:00 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-11 00:04:00 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-11 00:04:00 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-11 00:04:01 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-11 00:16:19 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-07-11 00:18:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 00:46:11 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-07-11 00:56:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 00:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 00:57:53 --> Could not find the language line "Home"
ERROR - 2023-07-11 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 01:55:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 01:55:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 02:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 02:03:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 02:21:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 02:30:01 --> Could not find the language line "Home"
ERROR - 2023-07-11 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 02:30:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-11 02:51:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 02:53:41 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:03:07 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:03:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:04:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:04:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 03:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 03:05:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 03:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 03:05:51 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 03:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 03:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 03:55:27 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:08:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 04:16:47 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-07-11 04:16:47 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:16:47 --> 404 Page Not Found: Wp/index
ERROR - 2023-07-11 04:16:48 --> 404 Page Not Found: Bc/index
ERROR - 2023-07-11 04:16:48 --> 404 Page Not Found: Bk/index
ERROR - 2023-07-11 04:16:48 --> 404 Page Not Found: Backup/index
ERROR - 2023-07-11 04:16:48 --> 404 Page Not Found: New/index
ERROR - 2023-07-11 04:16:49 --> 404 Page Not Found: Main/index
ERROR - 2023-07-11 04:16:49 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:19:41 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:39:31 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:42:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 04:44:07 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:44:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:51:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 04:51:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:53:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 04:53:33 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:54:30 --> Could not find the language line "Home"
ERROR - 2023-07-11 04:55:45 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:12:07 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 05:40:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 05:50:54 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:52:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 05:53:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 05:53:35 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:57:03 --> Could not find the language line "Home"
ERROR - 2023-07-11 05:57:58 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 05:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:05:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 06:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 06:07:00 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:31:44 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-11 06:32:57 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:33:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:33:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:36:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 06:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:44:26 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:45:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:45:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 06:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:50:20 --> Could not find the language line "Home"
ERROR - 2023-07-11 06:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 06:59:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-11 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:02:40 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:10:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 07:10:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:11:53 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:14:07 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:14:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 07:14:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 07:23:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:40:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:53:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 07:53:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 07:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 07:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:00:26 --> Could not find the language line "Home"
ERROR - 2023-07-11 08:06:58 --> Could not find the language line "Home"
ERROR - 2023-07-11 08:13:56 --> Could not find the language line "Home"
ERROR - 2023-07-11 08:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 08:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:36:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 08:40:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 08:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 08:46:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 08:46:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 08:59:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 08:59:30 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:09:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:11:56 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:19:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 09:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:20:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:20:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:20:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:23:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 09:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:27:41 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:31:19 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:35:35 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:38:26 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:40:05 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:42:01 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:47:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:47:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:48:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:48:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:48:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 09:50:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 09:59:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 09:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:02:01 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:02:04 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:02:06 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:05:46 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:05:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 10:05:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 10:05:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 10:05:49 --> 404 Page Not Found: Home/accounts
ERROR - 2023-07-11 10:05:49 --> 404 Page Not Found: Home/home
ERROR - 2023-07-11 10:07:20 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:07:29 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:07:30 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-11 10:12:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:15:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:21:54 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:22:03 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:25:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 10:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 10:25:24 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:27:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:28:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 10:28:22 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:28:39 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:30:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 10:30:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 10:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:35:36 --> Could not find the language line "Home"
ERROR - 2023-07-11 10:36:41 --> Could not find the language line "assets"
ERROR - 2023-07-11 10:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 10:49:42 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:00:24 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:03:02 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:08:24 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:21:43 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:43:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:44:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-11 11:44:26 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:44:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 11:45:31 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:45:32 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:46:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 11:46:25 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:49:29 --> Could not find the language line "Home"
ERROR - 2023-07-11 11:52:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:14:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:18:04 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:25:22 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:25:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:25:36 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:25:38 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 12:26:02 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:26:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 12:26:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:31:33 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:32:00 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:32:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:36:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 12:36:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 12:38:48 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:39:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:39:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-11 12:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:39:34 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:39:36 --> Could not find the language line "Perfume"
ERROR - 2023-07-11 12:39:43 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:44:01 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:44:14 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:44:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:46:54 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:48:25 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:48:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:48:33 --> Could not find the language line "Perfume"
ERROR - 2023-07-11 12:48:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:48:40 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:49:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:49:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:49:26 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:50:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-11 12:50:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-11 12:50:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:51:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:51:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:51:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 12:51:55 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:51:57 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:53:24 --> Could not find the language line "Home"
ERROR - 2023-07-11 12:53:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 12:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 12:56:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 12:56:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:04:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:04:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:06:02 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:06:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 13:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:08:17 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:08:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:08:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('XS')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:09:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:09:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:09:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Jeans')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:10:01 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:10:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:10:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:10:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:11:00 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:11:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:14:57 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:15:48 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:15:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:16:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:16:23 --> Could not find the language line "Socks"
ERROR - 2023-07-11 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:16:38 --> Could not find the language line "Socks"
ERROR - 2023-07-11 13:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:17:03 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:17:11 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:17:33 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:17:46 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:17:47 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:17:54 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:18:10 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:18:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:18:36 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:18:48 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 13:19:04 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:19:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 13:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:20:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 13:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:23:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:27:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:29:59 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:30:00 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:30:02 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:35:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:35:23 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:35:34 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:37:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:37:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:39:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:50:21 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:51:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Black', 'White')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:51:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:52:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 13:52:37 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:52:38 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-11 13:53:01 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:53:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:55:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 13:55:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:37 --> Could not find the language line "Home"
ERROR - 2023-07-11 13:55:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:55:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:56:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:56:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:56:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:56:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:56:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:56:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:56:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:56:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:56:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Sweatpants')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:57:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:57:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 13:58:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:58:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:58:28 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-11 13:58:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 13:58:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-11 13:58:29 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-11 13:58:29 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-11 13:58:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 13:58:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 13:59:05 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:01:47 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:02:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:02:36 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:02:37 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:02:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:03:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:03:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:03:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:03:47 --> Could not find the language line "assets"
ERROR - 2023-07-11 14:03:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:04:08 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:04:13 --> Could not find the language line "Perfume"
ERROR - 2023-07-11 14:04:19 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:04:34 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:04:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:05:54 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:06:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:06:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:06:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:06:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 14:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-11 14:06:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:06:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:07:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:07:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:08:05 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:08:16 --> Could not find the language line "Other"
ERROR - 2023-07-11 14:08:29 --> Could not find the language line "Other"
ERROR - 2023-07-11 14:08:30 --> Could not find the language line "Other"
ERROR - 2023-07-11 14:09:36 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:09:58 --> Could not find the language line "Other"
ERROR - 2023-07-11 14:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:13:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:17:59 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 14:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:22:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:22:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 14:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:27:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 14:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:45:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 14:45:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 14:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:49:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 14:51:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:53:52 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:54:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 14:55:52 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-11 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 15:00:55 --> Could not find the language line "Home"
ERROR - 2023-07-11 15:03:52 --> 404 Page Not Found: Wp-admin/css
ERROR - 2023-07-11 15:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 15:04:16 --> 404 Page Not Found: Sites/default
ERROR - 2023-07-11 15:04:24 --> 404 Page Not Found: Admin/controller
ERROR - 2023-07-11 15:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 15:04:31 --> 404 Page Not Found: Uploads/index
ERROR - 2023-07-11 15:04:46 --> 404 Page Not Found: Files/index
ERROR - 2023-07-11 15:14:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 15:14:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 15:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 15:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 15:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 15:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 15:35:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 15:39:52 --> Could not find the language line "Home"
ERROR - 2023-07-11 15:54:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 15:57:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 15:57:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 16:00:10 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:00:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:01:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-11 16:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:06:43 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 16:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:06:48 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-11 16:06:48 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-11 16:06:49 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-11 16:06:49 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-11 16:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:07:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:11:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-11 16:11:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-11 16:15:55 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:15:59 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:27:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 16:29:07 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:30:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 16:40:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:40:44 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:40:53 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:41:31 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:43:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:45:49 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:45:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 16:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:46:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 16:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:54:20 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:55:03 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:58:55 --> Could not find the language line "Home"
ERROR - 2023-07-11 16:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 16:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:01:04 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:01:04 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:06:38 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:07:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:07:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:07:21 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:07:30 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:07:35 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:28:22 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:37:45 --> Could not find the language line "Home"
ERROR - 2023-07-11 17:40:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:40:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:43:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:43:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:44:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:44:10 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 17:50:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 17:53:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:02:37 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:02:39 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:02:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-11 18:02:42 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-11 18:02:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-11 18:02:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-11 18:03:00 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:03:01 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-11 18:03:01 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-11 18:03:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-11 18:03:02 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-11 18:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:03:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:04:35 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:07:58 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-11 18:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 18:43:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 18:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:45:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-11 18:45:10 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:45:33 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:48:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 18:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:51:05 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 18:58:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 18:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:00:39 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:00:57 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 19:01:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 19:01:55 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:02:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 19:02:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 19:05:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 19:05:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-11 19:06:48 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:15:24 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:35:37 --> Could not find the language line "Home"
ERROR - 2023-07-11 19:35:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 19:39:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 19:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 20:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:08:13 --> 404 Page Not Found: Wp-includes/blocks
ERROR - 2023-07-11 20:08:14 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-07-11 20:10:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 20:20:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:20:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:20:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:20:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:20:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:20:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:29:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:31:10 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 20:47:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:47:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:47:09 --> Could not find the language line "Home"
ERROR - 2023-07-11 20:48:16 --> 404 Page Not Found: Administrator/components
ERROR - 2023-07-11 20:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:00:18 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:01:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:04:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:07:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-11 21:09:08 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:12:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-07-11 21:12:47 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:12:53 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:13:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-11 21:13:51 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:13:58 --> Could not find the language line "Bracelets"
ERROR - 2023-07-11 21:14:17 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:16:50 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-11 21:17:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 21:17:25 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-11 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:32:03 --> Could not find the language line "Home"
ERROR - 2023-07-11 21:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 21:37:28 --> Could not find the language line "Home"
ERROR - 2023-07-11 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 22:04:34 --> Could not find the language line "Home"
ERROR - 2023-07-11 22:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-11 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 22:56:15 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:18:50 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:20:22 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:32:34 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:32:56 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:43:27 --> Could not find the language line "Disclaimer"
ERROR - 2023-07-11 23:46:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-11 23:46:26 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-07-11 23:46:27 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-07-11 23:46:29 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:46:40 --> Could not find the language line "Home"
ERROR - 2023-07-11 23:55:02 --> Could not find the language line "Home"
