<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-06-30 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 00:27:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 00:47:18 --> Could not find the language line "Home"
ERROR - 2023-06-30 00:48:17 --> Could not find the language line "Home"
ERROR - 2023-06-30 00:48:44 --> Could not find the language line "Home"
ERROR - 2023-06-30 00:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 00:58:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 00:58:37 --> Could not find the language line "Home"
ERROR - 2023-06-30 01:00:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 01:00:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 01:17:38 --> Could not find the language line "Home"
ERROR - 2023-06-30 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-06-30 01:36:56 --> Could not find the language line "Home"
ERROR - 2023-06-30 01:36:56 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:26:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:42:17 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 02:44:20 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 02:44:32 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 02:44:40 --> Could not find the language line "Home"
ERROR - 2023-06-30 02:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 03:00:16 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 03:15:48 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:18:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:35:19 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:35:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:36:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:37:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:37:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:38:13 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:38:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:38:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:39:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:39:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:39:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:40:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:40:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:40:23 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:41:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:41:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:41:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:41:44 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:41:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:42:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:43:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 03:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:32 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 03:43:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:44:02 --> Could not find the language line "Home"
ERROR - 2023-06-30 03:44:50 --> Could not find the language line "Home"
ERROR - 2023-06-30 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 04:16:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 04:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 04:29:20 --> Could not find the language line "Home"
ERROR - 2023-06-30 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 04:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:02:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:02:30 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:04:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 05:06:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 05:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:44:26 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:53:50 --> Could not find the language line "Home"
ERROR - 2023-06-30 05:54:06 --> Could not find the language line "Socks"
ERROR - 2023-06-30 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:13:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:16:39 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:26:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 06:26:53 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:26:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:40:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:40:48 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:41:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:41:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:41:37 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:45:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:45:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:48:22 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:50:03 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 06:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:54:45 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:54:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:55:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 06:57:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 06:57:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`price` <= '8'
AND `items`.`color` IN('Navy')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 06:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 06:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:09:49 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:10:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 07:10:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-30 07:19:24 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:24:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:24:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:25:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:25:16 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:36:54 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:36:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:37:04 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:37:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:43:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 07:45:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:46:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 07:49:35 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:49:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:50:19 --> Could not find the language line "Home"
ERROR - 2023-06-30 07:50:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:50:38 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:51:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:52:15 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 07:52:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:03:43 --> Could not find the language line "Perfume"
ERROR - 2023-06-30 08:03:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:05:34 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:05:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:06:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:06:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:06:48 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:07:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:07:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:07:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:07:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:07:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:07:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:07:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 08:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:11:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:11:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:13:51 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:14:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:14:48 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:15:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 08:15:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:15:26 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:15:32 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:16:38 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:16:49 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 08:17:18 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 08:17:38 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 08:17:59 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:21:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:21:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:22:25 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:22:25 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:22:25 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:22:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 08:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 08:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:41:44 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-06-30 08:47:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 08:57:41 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 09:00:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:00:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:03:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 09:03:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 09:03:43 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:06:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:17:38 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:19:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:23:55 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:25:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:27:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:27:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:30:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 09:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:32:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:32:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:33:50 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:36:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:40:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 09:40:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-06-30 09:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:45:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:45:39 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:50:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 09:50:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 09:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:54:45 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:55:22 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:55:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:55:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:55:47 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:55:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:56:05 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:56:12 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 09:56:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:56:55 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:57:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:57:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:58:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:58:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 09:59:02 --> Could not find the language line "Home"
ERROR - 2023-06-30 09:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 09:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:01:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:07:37 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:07:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:07:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:07:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:07:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:07:43 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:11:51 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:25:06 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:25:08 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:25:08 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:25:09 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:26:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:26:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:29:19 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:34:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:41:57 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 10:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:46:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 10:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:51:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 10:58:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 10:58:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 10:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 11:00:00 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:01:20 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:08:36 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:12:16 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:12:54 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 11:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 11:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 11:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:35:18 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:43:46 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 11:44:03 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:46:00 --> Could not find the language line "Home"
ERROR - 2023-06-30 11:46:17 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 11:46:18 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 11:46:33 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:05:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:05:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 12:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 12:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 12:16:33 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:16:56 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:21:21 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:22:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 12:22:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '28'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 12:25:19 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:30:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 12:32:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 12:32:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '25'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 12:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 12:48:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 12:48:48 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:54:14 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 12:55:25 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:56:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 12:56:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 12:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 12:59:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 12:59:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '11'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:02:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-30 13:10:04 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:16:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:17:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:25:36 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:26:25 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:26:44 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:26:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:26:59 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:35:16 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:40:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:41:43 --> Could not find the language line "Home"
ERROR - 2023-06-30 13:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 13:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:11:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:13:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:16:02 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:19:34 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:20:43 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:20:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 14:21:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 14:21:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 14:21:50 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:30:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:32:00 --> Could not find the language line "Home"
ERROR - 2023-06-30 14:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:46:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 14:50:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:13:36 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-06-30 15:18:39 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:21:53 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:25:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:26:56 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:28:28 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:29:20 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:29:45 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:30:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:31:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-06-30 15:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`gender` IN('Male')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-06-30 15:31:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:31:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:32:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:32:47 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:39:40 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:41:53 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:42:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:42:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:43:00 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:43:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:43:27 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:44:02 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:44:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:44:34 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:44:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:45:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:45:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 15:48:51 --> Could not find the language line "Home"
ERROR - 2023-06-30 15:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:48:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 15:48:51 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:18:35 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:19:03 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:19:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 16:19:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 16:19:56 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:20:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 16:20:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 16:20:33 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:22:03 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:22:17 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 16:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:22:43 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 16:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:22:54 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 16:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:23:07 --> Could not find the language line "Bracelets"
ERROR - 2023-06-30 16:23:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:24:57 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:26:05 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:26:28 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:28:44 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:40:57 --> Could not find the language line "Other"
ERROR - 2023-06-30 16:50:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:50:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 16:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 16:51:58 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:01:41 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:02:23 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:02:36 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 17:03:04 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 17:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 17:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 17:12:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:18:03 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:32:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-06-30 17:34:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 17:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 17:37:03 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:43:05 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:46:18 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:47:57 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 17:48:36 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:48:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:49:18 --> Could not find the language line "Home"
ERROR - 2023-06-30 17:59:38 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:05:19 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:05:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 18:08:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:08:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:18:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 18:21:57 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:27:31 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:30:10 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 18:35:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 18:46:08 --> Could not find the language line "Home"
ERROR - 2023-06-30 18:49:40 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:00:18 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 19:12:09 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:20:07 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:33:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-06-30 19:34:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:34:16 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:34:27 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:34:42 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-30 19:34:43 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-30 19:34:43 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-30 19:34:44 --> 404 Page Not Found: Home/accounting
ERROR - 2023-06-30 19:38:28 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:45:08 --> Could not find the language line "Home"
ERROR - 2023-06-30 19:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 19:50:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 20:12:50 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-06-30 20:12:50 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-06-30 20:12:51 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-06-30 20:12:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-06-30 20:24:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 20:24:46 --> Could not find the language line "Home"
ERROR - 2023-06-30 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 20:43:00 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:16:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 21:18:44 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:20:59 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:25:58 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:26:19 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:26:42 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:27:12 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:27:29 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:27:41 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:28:40 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:28:51 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:29:01 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:30:34 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:31:09 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:31:47 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:32:09 --> Could not find the language line "Socks"
ERROR - 2023-06-30 21:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:32:29 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:32:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:32:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:33:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:21 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:33:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:33:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:33:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:34:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 21:34:40 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:48:54 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:53:48 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:53:56 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 21:54:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 21:54:16 --> Could not find the language line "Home"
ERROR - 2023-06-30 21:55:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:19:02 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:20:36 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:27:17 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:28:26 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:31:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 22:31:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:31:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:31:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-06-30 22:32:31 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:32:37 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:33:09 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:33:28 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:34:10 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-06-30 22:41:20 --> Could not find the language line "Home"
ERROR - 2023-06-30 22:45:42 --> Could not find the language line "Home"
ERROR - 2023-06-30 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-06-30 23:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 23:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-06-30 23:16:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 23:18:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-06-30 23:20:30 --> Could not find the language line "Other"
ERROR - 2023-06-30 23:30:14 --> Could not find the language line "Home"
