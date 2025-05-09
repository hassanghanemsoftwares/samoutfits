<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-05 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 00:18:25 --> Could not find the language line "Home"
ERROR - 2023-08-05 00:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 01:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-05 01:03:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 01:18:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:11:54 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:14:39 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:14:46 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:16:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:17:36 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 02:42:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 02:48:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 03:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 03:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 03:30:50 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-05 03:49:36 --> Could not find the language line "Home"
ERROR - 2023-08-05 03:50:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 03:50:51 --> Could not find the language line "Other"
ERROR - 2023-08-05 03:53:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:20:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 04:29:01 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:40:58 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-05 04:47:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:47:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:48:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:55:16 --> Could not find the language line "Bracelets"
ERROR - 2023-08-05 04:57:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-05 04:58:28 --> Could not find the language line "Home"
ERROR - 2023-08-05 04:59:51 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:00:08 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:00:32 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:03:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:03:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 05:09:29 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:25:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 05:27:09 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:27:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:30:47 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:33:00 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 05:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 05:48:00 --> Could not find the language line "Home"
ERROR - 2023-08-05 05:58:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:06:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:10:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:14:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:24:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-05 06:24:53 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:25:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:25:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:30:09 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:31:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:31:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:32:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 06:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:32:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 06:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:36:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:36:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:36:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:37:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:37:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:37:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:38:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:38:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:38:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:38:53 --> Could not find the language line "Other"
ERROR - 2023-08-05 06:39:02 --> Could not find the language line "Other"
ERROR - 2023-08-05 06:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:39:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 06:39:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:40:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 06:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 06:41:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:41:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:42:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 06:42:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 06:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:49:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 06:49:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 06:50:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 06:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:57:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 06:58:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 06:58:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 06:59:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:07:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 07:10:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-05 07:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:16:49 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:16:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 07:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:25:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 07:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 07:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:29:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:29:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:31:09 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:36:43 --> Could not find the language line "assets"
ERROR - 2023-08-05 07:39:44 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:43:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 07:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 07:43:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:43:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:44:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:46:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:46:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 07:46:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '20'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 07:46:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:46:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:47:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:47:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 07:56:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 07:57:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:01:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:02:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:04:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:04:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:08:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:08:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:08:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:08:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:08:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:08:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:09:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:09:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:09:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:09:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:09:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 08:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:10:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:11:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:15:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:15:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:16:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:17:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:17:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 08:17:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:18:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:19:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:19:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 08:19:37 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:21:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:23:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:23:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:23:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:23:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:23:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 08:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38', '39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 08:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:24:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-05 08:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:26:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:27:01 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:41:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:43:43 --> Could not find the language line "Home"
ERROR - 2023-08-05 08:43:45 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-05 08:43:45 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-05 08:43:45 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-05 08:43:46 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-05 08:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 08:46:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:02:05 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:04:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:04:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:05:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:05:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:05:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:06:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:06:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:06:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:06:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:07:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:07:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:08:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:08:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:08:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:08:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 09:09:16 --> Could not find the language line "products"
ERROR - 2023-08-05 09:12:46 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:21:31 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:21:40 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:21:41 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-05 09:21:54 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:23:03 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:23:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:23:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:23:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:23:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:23:31 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:23:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 09:23:46 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:37:06 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-05 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:40:16 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-05 09:40:16 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-05 09:40:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-05 09:40:17 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-05 09:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:43:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:43:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:50:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:50:38 --> Could not find the language line "Hair%20"
ERROR - 2023-08-05 09:50:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:50:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:51:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 09:51:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '5'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 09:51:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 09:51:51 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:52:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 09:53:39 --> Could not find the language line "Home"
ERROR - 2023-08-05 09:54:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 09:54:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:05:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 10:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:08:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 10:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 10:10:51 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:22:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:32:28 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:32:29 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:35:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 10:37:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 10:37:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 10:38:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 10:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 10:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:38:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:44:40 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:44:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 10:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:51:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 10:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:56:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 10:58:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:00:42 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:46:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-05 11:46:39 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:46:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 11:50:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 11:50:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:05:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 12:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42', '43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 12:07:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:09:17 --> Could not find the language line "products"
ERROR - 2023-08-05 12:10:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 12:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:11:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 12:11:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 12:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:21:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 12:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:22:24 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:23:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:26:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:27:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 12:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 12:35:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 12:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:36:41 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:43:02 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:47:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:50:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 12:53:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 12:54:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:57:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 12:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:05:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 13:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 13:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:13:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:13:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:17:40 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:18:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:18:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:21:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:21:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:22:25 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:23:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 13:23:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 13:23:45 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:33:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:34:00 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:34:01 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:34:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 13:34:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 13:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:34:45 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:36:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:36:44 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:37:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:37:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:42:53 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:43:04 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:43:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-05 13:46:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:46:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:46:45 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:47:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:49:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:49:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:49:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:49:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:50:21 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:50:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:50:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:50:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:50:58 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:51:54 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:52:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:52:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:52:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:52:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:53:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:53:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 13:53:43 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:53:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:53:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:53:49 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:53:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:53:59 --> Could not find the language line "Socks"
ERROR - 2023-08-05 13:54:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:54:19 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:54:23 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:54:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:54:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 13:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 13:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:54:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:55:09 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:55:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:55:25 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:56:06 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:56:10 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:56:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:56:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:56:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:56:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 13:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 13:57:49 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:59:37 --> Could not find the language line "Home"
ERROR - 2023-08-05 13:59:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:00:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 14:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 14:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:01:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:01:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:01:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:01:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 14:01:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-05 14:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:02:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:02:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:02:36 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:02:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:03:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:03:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:05:18 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:05:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:05:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:06:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:06:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:07:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:07:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:08:37 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:09:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 14:09:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:09:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:09:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:09:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 14:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:13:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:14:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:15:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:18:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:22:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:28:37 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 14:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:35:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 14:35:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 14:37:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:38:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 14:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:41:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-05 14:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-05 14:46:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 14:46:58 --> Could not find the language line "assets"
ERROR - 2023-08-05 14:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 14:50:23 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:10:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 15:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:14:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 15:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 15:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 15:17:25 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:18:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:19:07 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:19:55 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:20:22 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:20:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:20:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:21:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:21:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:23:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:23:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:23:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 15:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:26:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 15:26:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 15:26:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 15:26:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-05 15:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 15:58:31 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:00:29 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:02:27 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:05:23 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:29:04 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:30:47 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:31:38 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:31:41 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 16:32:04 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 16:33:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 16:33:58 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:34:27 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:34:35 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:37:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 16:42:10 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 16:42:45 --> Could not find the language line "Home"
ERROR - 2023-08-05 16:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:14:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:18:28 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:43:34 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:43:35 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:45:48 --> Could not find the language line "Home"
ERROR - 2023-08-05 17:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 17:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:55:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-05 17:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 17:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:02:40 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:09:27 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:11:58 --> 404 Page Not Found: Sftp-configjson/index
ERROR - 2023-08-05 18:12:00 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-08-05 18:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:23:38 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:26:03 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 18:26:52 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:27:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 18:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 18:27:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 18:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 18:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 18:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:43:19 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:43:28 --> Could not find the language line "Home"
ERROR - 2023-08-05 18:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 18:52:25 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:00:33 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 19:10:56 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-05 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:10:56 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 19:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 19:11:44 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:12:08 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:15:21 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:18:53 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:25:10 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:27:44 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:33:51 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:37:50 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:53:14 --> Could not find the language line "Home"
ERROR - 2023-08-05 19:54:48 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-08-05 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:01:42 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:03:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:04:30 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:04:32 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:04:40 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:04:41 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:05:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:06:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:06:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:07:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:07:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:08:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:08:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:09:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:09:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:10:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-05 20:10:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 20:11:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-05 20:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-05 20:38:06 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:10:43 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:10:47 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:12:51 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:17:21 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:17:53 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:25:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 21:46:59 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:50:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 21:51:46 --> Could not find the language line "Home"
ERROR - 2023-08-05 21:54:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:05:26 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:26:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:26:54 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-05 22:26:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-05 22:26:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-05 22:26:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-05 22:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:31:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:31:50 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:32:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:32:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:33:06 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:33:06 --> Could not find the language line "Home"
ERROR - 2023-08-05 22:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:33:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:34:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:34:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:37:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:41:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:55:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 22:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 22:59:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-05 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:01:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 23:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:01:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 23:01:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 23:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:04:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:05:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 23:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:07:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-05 23:19:44 --> 404 Page Not Found: Products/products
ERROR - 2023-08-05 23:26:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-05 23:26:03 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:28:43 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:29:41 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:30:38 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:31:31 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:32:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:32:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:32:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:32:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:33:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:33:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:33:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:33:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-05 23:34:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-05 23:34:45 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:42:20 --> Could not find the language line "Home"
ERROR - 2023-08-05 23:43:28 --> Could not find the language line "Home"
