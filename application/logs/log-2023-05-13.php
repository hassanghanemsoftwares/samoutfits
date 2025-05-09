<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-13 00:00:16 --> Could not find the language line "Home"
ERROR - 2023-05-13 00:13:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 00:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 01:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 01:06:43 --> Could not find the language line "Disclaimer"
ERROR - 2023-05-13 01:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 01:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 02:02:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 02:23:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 02:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 02:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 02:28:52 --> Could not find the language line "Home"
ERROR - 2023-05-13 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 02:46:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 03:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 03:27:06 --> Could not find the language line "Home"
ERROR - 2023-05-13 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:08:25 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 04:49:50 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:49:56 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-13 04:49:56 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-13 04:49:56 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-13 04:49:57 --> 404 Page Not Found: Home/accounting
ERROR - 2023-05-13 04:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 04:50:49 --> Could not find the language line "Home"
ERROR - 2023-05-13 04:53:34 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:04:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:19:54 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:20:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 05:23:20 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:23:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 05:24:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 05:24:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:24:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 05:24:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 05:24:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:26:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:34:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:47:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 05:47:28 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:48:28 --> Could not find the language line "Home"
ERROR - 2023-05-13 05:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 05:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:03:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:03:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 06:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 06:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:04:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 06:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:08:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 06:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:10:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 06:10:10 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:13:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:19:10 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:24:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 06:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 06:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:27:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:32:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:53:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 06:58:59 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:59:01 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:59:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-13 06:59:03 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-13 06:59:03 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-13 06:59:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-13 06:59:32 --> Could not find the language line "Home"
ERROR - 2023-05-13 06:59:54 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:01:20 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:01:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:14:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:14:26 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:15:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:15:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:15:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:15:26 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:15:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 07:15:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 07:16:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 07:16:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:37:43 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:38:29 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:41:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:44:32 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:44:56 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 07:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:49:17 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:49:31 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:52:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 07:54:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 07:54:43 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:56:06 --> Could not find the language line "Home"
ERROR - 2023-05-13 07:56:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:56:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:57:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:57:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:58:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:58:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:59:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:59:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:59:45 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 07:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 07:59:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:00:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 08:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:01:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 08:01:20 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:01:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 08:01:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:01:36 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:02:04 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:02:05 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:03:38 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:07:10 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:11:59 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:19:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:23:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:37:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:43:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 08:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:52:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 08:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 08:56:00 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:00:50 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:04:52 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:05:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:05:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:21:20 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-05-13 09:22:08 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 09:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:24:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-13 09:24:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:36:21 --> Could not find the language line "Other"
ERROR - 2023-05-13 09:37:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:39:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:39:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:39:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:47:35 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:48:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:49:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 09:50:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 09:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:52:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:52:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:54:29 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:54:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:55:18 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:55:23 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 09:56:01 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:56:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:56:21 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:56:22 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:56:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 09:56:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:56:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:56:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:56:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:56:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:56:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 09:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:56:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-05-13 09:58:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 09:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 09:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:08:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:15:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:15:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:26:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:27:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-05-13 10:27:25 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-05-13 10:27:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 10:27:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Well-known/change-password
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 10:27:38 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2023-05-13 10:29:53 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:31:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:31:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 10:31:34 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:31:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 10:31:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 10:32:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 10:33:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 10:34:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:34:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 10:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:38:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 10:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:48:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:56:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 10:59:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:00:51 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-05-13 11:00:53 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-05-13 11:00:56 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-05-13 11:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:02:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:04:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:04:36 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:04:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:04:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:05:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:07:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:11:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:17:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:17:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:18:08 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:18:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:19:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:21:16 --> Could not find the language line "Other"
ERROR - 2023-05-13 11:27:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-13 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:34:05 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:34:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:34:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 11:35:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:35:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 11:36:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 11:53:01 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:53:30 --> Could not find the language line "Home"
ERROR - 2023-05-13 11:58:19 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:01:47 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:12:26 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:20:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:22:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:22:39 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:22:44 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-13 12:22:44 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-13 12:22:44 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-13 12:22:44 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-13 12:22:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:22:58 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-13 12:22:59 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-13 12:22:59 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-13 12:22:59 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-13 12:23:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:23:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:23:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:25:51 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:30:50 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:45:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 12:45:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:47:43 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:47:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 12:47:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 12:47:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:50:37 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-13 12:50:37 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-13 12:50:38 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-13 12:50:38 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-13 12:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:53:07 --> Could not find the language line "Home"
ERROR - 2023-05-13 12:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:54:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 12:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 12:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:07:29 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:08:17 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:09:38 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:09:40 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:09:51 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:12:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 13:12:51 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:13:00 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:14:19 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:17:09 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:17:10 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:17:20 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:18:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:18:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:19:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:19:33 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:19:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:19:40 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:20:01 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:20:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:20:17 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:20:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:21:01 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:21:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:22:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:22:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 13:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:24:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:25:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:25:39 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:28:49 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-05-13 13:28:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-05-13 13:28:50 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-05-13 13:28:50 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-05-13 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:51:57 --> Could not find the language line "Home"
ERROR - 2023-05-13 13:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:58:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 13:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:01:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:01:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:01:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:01:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:01:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:18:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:18:47 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:20:05 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:25:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 14:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:28:36 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:28:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:31:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:32:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 14:32:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 14:32:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 14:32:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 14:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:32:54 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:33:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:34:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:36:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-13 14:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:37:45 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:40:39 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:41:37 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:43:43 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:44:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 14:48:05 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:48:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:48:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:49:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:50:24 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:51:02 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:51:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:51:45 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:51:50 --> 404 Page Not Found: Cartjson/index
ERROR - 2023-05-13 14:52:06 --> 404 Page Not Found: Cartjson/index
ERROR - 2023-05-13 14:52:21 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:52:23 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 14:52:25 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:52:42 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:52:44 --> 404 Page Not Found: Cartjson/index
ERROR - 2023-05-13 14:52:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 14:55:06 --> Could not find the language line "Home"
ERROR - 2023-05-13 14:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:01:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:04:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:08:46 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:09:50 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:10:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:11:10 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:11:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:11:24 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:11:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 15:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:12:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 15:12:47 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:13:03 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 15:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:13:52 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 15:14:01 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 15:14:35 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 15:14:38 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:15:38 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:15:43 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 15:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:16:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:16:46 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:17:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:17:14 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:17:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:17:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:18:57 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:19:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:19:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:19:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:20:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:20:27 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:20:38 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 15:20:58 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:21:05 --> Could not find the language line "Perfume"
ERROR - 2023-05-13 15:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:21:30 --> Could not find the language line "Perfume"
ERROR - 2023-05-13 15:21:32 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:21:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-13 15:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:22:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-13 15:22:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-13 15:22:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-13 15:22:33 --> Could not find the language line "Home"
ERROR - 2023-05-13 15:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:23:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 15:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:12:46 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-05-13 16:12:47 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-05-13 16:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:22:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:22:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:22:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:22:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:23:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:23:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:23:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:23:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:23:29 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:26:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:26:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:37:43 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:38:03 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:38:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:38:08 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:38:16 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:38:23 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:38:50 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:39:05 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:39:17 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:39:44 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:42:32 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:42:51 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 16:42:54 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:43:33 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:43:37 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 16:43:57 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:44:09 --> Could not find the language line "Socks"
ERROR - 2023-05-13 16:44:20 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:44:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:44:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-05-13 16:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-05-13 16:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:45:10 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:45:40 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 16:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:46:23 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 16:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:46:56 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:47:32 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:50:41 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:51:52 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:51:54 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:51:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:52:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:53:08 --> Could not find the language line "Home"
ERROR - 2023-05-13 16:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 16:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:01:24 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:01:44 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:01:47 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 17:13:32 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:16:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:16:26 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 17:16:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-13 17:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 17:24:31 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:25:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 17:36:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:38:45 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 17:54:16 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:54:42 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:57:58 --> Could not find the language line "Home"
ERROR - 2023-05-13 17:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:04:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:06:07 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:18:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:34:23 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:40:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:49:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 18:49:19 --> Could not find the language line "Perfume"
ERROR - 2023-05-13 18:49:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:49:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:50:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:50:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:50:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:51:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:51:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:51:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 18:51:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-05-13 18:52:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:52:16 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 18:52:34 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:53:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:54:46 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 18:55:37 --> Could not find the language line "Home"
ERROR - 2023-05-13 18:59:50 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:00:13 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:06:36 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:06:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 19:06:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-05-13 19:06:57 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:07:12 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:07:19 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:07:30 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 19:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:09:18 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:09:20 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 19:09:21 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:30:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:54:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:55:35 --> Could not find the language line "Home"
ERROR - 2023-05-13 19:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 19:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 19:57:55 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:01:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-05-13 20:06:36 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:06:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 20:06:54 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 20:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 20:07:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 20:07:28 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:07:40 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:33:25 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:44:33 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 20:48:47 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:48:53 --> Could not find the language line "Home"
ERROR - 2023-05-13 20:48:56 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 20:49:49 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:49:53 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:49:58 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:09 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:31 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:40 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 20:50:52 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 21:00:19 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:06:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:13:47 --> 404 Page Not Found: Storage/settings
ERROR - 2023-05-13 21:17:19 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:17:29 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:17:41 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:17:46 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:20:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-05-13 21:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 21:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 21:22:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 21:22:37 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 21:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 21:23:02 --> Could not find the language line "Bracelets"
ERROR - 2023-05-13 21:23:04 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-05-13 21:47:46 --> 404 Page Not Found: Admin/elfinder
ERROR - 2023-05-13 21:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 21:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-05-13 22:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 22:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 22:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 22:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-05-13 22:34:51 --> 404 Page Not Found: Wp-json/wp
ERROR - 2023-05-13 23:00:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:05:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 23:05:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 23:05:55 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-13 23:06:01 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-13 23:06:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-05-13 23:06:07 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-05-13 23:06:11 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-13 23:06:18 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-13 23:06:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-05-13 23:07:22 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:08:07 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:09:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-05-13 23:10:18 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:11:42 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 23:12:15 --> Could not find the language line "Other"
ERROR - 2023-05-13 23:12:18 --> Could not find the language line "Other"
ERROR - 2023-05-13 23:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-05-13 23:25:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:25:27 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:55:41 --> Could not find the language line "Home"
ERROR - 2023-05-13 23:55:59 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 23:56:29 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 23:56:55 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 23:57:35 --> Could not find the language line "Clothing"
ERROR - 2023-05-13 23:58:11 --> Could not find the language line "Home"
