<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-21 00:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-21 00:07:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 00:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 00:38:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 00:43:01 --> Could not find the language line "Home"
ERROR - 2023-08-21 00:45:56 --> Could not find the language line "Home"
ERROR - 2023-08-21 01:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 01:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-21 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 02:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 02:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:00:19 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:02:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 03:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 03:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 03:22:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:22:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:22:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:22:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 03:54:41 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 04:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 04:16:10 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-21 04:16:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:16:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 04:16:13 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-08-21 04:16:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 04:18:03 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-21 04:18:05 --> 404 Page Not Found: Wp-cronphp/index
ERROR - 2023-08-21 04:22:54 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:23:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:24:01 --> Could not find the language line "Other"
ERROR - 2023-08-21 04:24:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:24:03 --> Could not find the language line "Other"
ERROR - 2023-08-21 04:24:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:24:04 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:24:05 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-21 04:24:05 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 04:24:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:24:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 04:24:08 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:32:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:36:39 --> Could not find the language line "Home"
ERROR - 2023-08-21 04:46:38 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:02:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:02:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:03:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:07:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 05:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:17:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:17:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:17:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:18:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:19:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:19:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:19:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 05:21:34 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:29:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:35:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 05:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 05:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:04:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:08:11 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-08-21 06:08:14 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-08-21 06:08:17 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-21 06:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:09:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 06:10:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:18:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 06:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:25:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 06:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 06:26:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 06:26:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 06:27:02 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:27:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:31:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:56:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 06:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:58:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 06:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:04:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:06:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:10:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:15:20 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:16:50 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:20:39 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:24:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 07:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 07:25:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 07:25:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 07:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:32:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 07:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:38:20 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:40:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:40:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:40:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:41:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:41:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:41:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:41:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:42:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:42:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:42:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:43:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:43:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 07:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:48:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 07:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45', '48')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-21 07:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:50:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:52:30 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 07:56:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 07:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 07:57:58 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:58:02 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-21 07:58:41 --> Could not find the language line "Home"
ERROR - 2023-08-21 07:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:00:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:00:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 08:00:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 08:01:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:01:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:02:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:07:22 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-21 08:08:38 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:09:43 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:09:45 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:10:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 08:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:12:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:13:03 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:14:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:14:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:15:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:17:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-21 08:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:21:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:21:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:21:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:22:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:22:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:22:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:22:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:23:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:23:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:23:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:23:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:24:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 08:26:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:31:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:34:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:34:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:38:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:38:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:43:55 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-21 08:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:45:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:46:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:46:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:46:30 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:46:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:46:47 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 08:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:50:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:51:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:54:33 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:54:35 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:54:49 --> Could not find the language line "Home"
ERROR - 2023-08-21 08:54:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 08:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 08:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:04:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:05:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:06:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:06:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:10:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:10:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:11:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:16:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 47%' OR a.description LIKE '%Size 47%' OR a.color LIKE '%Size 47%' OR a.barcode LIKE '%Size 47%' OR a.category LIKE '%Size 47%' OR a.sub_category LIKE '%Size 47%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 09:17:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:19:50 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:21:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:29:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 09:29:48 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:32:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:34:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:35:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:36:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:36:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:38:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:38:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:39:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:39:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 09:42:43 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:42:49 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 09:52:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 09:52:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 09:52:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 09:53:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:02:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:07:18 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-21 10:17:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:19:24 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:19:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:20:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:20:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:20:58 --> Could not find the language line "Perfume"
ERROR - 2023-08-21 10:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:21:25 --> Could not find the language line "Perfume"
ERROR - 2023-08-21 10:21:27 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:21:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 10:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:21:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 10:22:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:22:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 10:22:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:22:35 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:23:00 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:23:05 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:23:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:24:36 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:29:22 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:29:38 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:34:08 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:34:12 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 10:34:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:36:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:37:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 10:37:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 10:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:41:25 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:41:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:41:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:41:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:42:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:42:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:42:12 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 10:42:34 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 10:42:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 10:42:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 10:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:42:41 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:43:01 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:43:19 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:43:23 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:43:23 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:44:23 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:44:37 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:45:03 --> Could not find the language line "Socks"
ERROR - 2023-08-21 10:45:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:45:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:45:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 10:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 10:58:57 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:58:57 --> Could not find the language line "Home"
ERROR - 2023-08-21 10:58:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:00:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 11:00:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 11:00:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:00:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 11:00:55 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:01:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-21 11:01:21 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:01:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 11:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:01:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:01:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:02:04 --> Could not find the language line "Perfume"
ERROR - 2023-08-21 11:02:05 --> Could not find the language line "Perfume"
ERROR - 2023-08-21 11:02:05 --> Could not find the language line "Perfume"
ERROR - 2023-08-21 11:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:06:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 11:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:07:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 11:07:29 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:08:04 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:08:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 11:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 11:18:54 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:22:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Outfits%' OR a.description LIKE '%Outfits%' OR a.color LIKE '%Outfits%' OR a.barcode LIKE '%Outfits%' OR a.category LIKE '%Outfits%' OR a.sub_category LIKE '%Outfits%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-21 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 11:42:24 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:00:20 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 12:04:55 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:06:53 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:07:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 12:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 12:11:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 12:11:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 12:15:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 12:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 12:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:20:55 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:27:38 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:29:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:30:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 12:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 12:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:37:00 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:37:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 12:37:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 12:38:58 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:40:33 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:40:39 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:40:42 --> Could not find the language line "Bracelets"
ERROR - 2023-08-21 12:40:53 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:40:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-21 12:41:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:42:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 12:50:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 12:50:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-21 12:50:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 12:51:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 12:52:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:54:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:59:02 --> Could not find the language line "Home"
ERROR - 2023-08-21 12:59:09 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-21 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:00:58 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:06:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:07:09 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:07:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 13:10:28 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:11:50 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:22:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:29:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 13:29:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:30:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:31:38 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:31:56 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:32:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:49:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:51:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:53:36 --> Could not find the language line "Home"
ERROR - 2023-08-21 13:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 13:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:01:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:02:28 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:17:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:17:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:17:35 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:17:35 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:17:37 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:21:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:23:48 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:25:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 14:25:49 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:27:30 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:29:35 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:29:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 14:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:52:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 14:56:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-21 14:56:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-21 14:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 14:59:03 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:38:05 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:38:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:38:17 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:39:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:39:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 15:39:51 --> Could not find the language line "Home"
ERROR - 2023-08-21 15:40:22 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:01:06 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:06:25 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:06:41 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:13:29 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:16:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:42:50 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:43:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:43:21 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:43:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:43:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-08-21 16:43:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:48:33 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-21 16:54:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:55:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 16:58:36 --> Could not find the language line "Home"
ERROR - 2023-08-21 16:58:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-21 17:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:01:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-21 17:01:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-21 17:01:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-21 17:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-21 17:24:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 17:25:29 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 17:27:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:38:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 17:43:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:50:46 --> Could not find the language line "Home"
ERROR - 2023-08-21 17:59:03 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:00:54 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:11:09 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:19:36 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:19:59 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:22:07 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:30:28 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 18:49:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 18:56:54 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:58:00 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:58:00 --> Could not find the language line "Home"
ERROR - 2023-08-21 18:58:05 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:16:30 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:18:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:19:52 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:20:08 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:20:17 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:21:01 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 19:21:21 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-21 19:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 19:22:48 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:23:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 19:23:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:29:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:29:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:29:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:29:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:29:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:30:07 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:37:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 19:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:00:07 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:04:43 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:06:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:10:04 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:14:18 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:22:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:23:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-21 20:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:23:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-21 20:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:24:09 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-21 20:24:17 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:24:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 20:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:26:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:27:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:34:53 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:35:48 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:36:03 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:37:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:39:33 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 20:43:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-21 20:49:24 --> Could not find the language line "Home"
ERROR - 2023-08-21 20:53:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-21 20:57:30 --> Could not find the language line "Home"
ERROR - 2023-08-21 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-21 21:09:32 --> Could not find the language line "Home"
ERROR - 2023-08-21 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-21 21:31:53 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-21 21:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:36:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:38:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:39:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:39:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-21 21:45:31 --> Could not find the language line "Home"
ERROR - 2023-08-21 22:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-21 22:12:45 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-21 22:24:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 22:35:20 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 22:35:42 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 22:41:53 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 22:47:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 23:04:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'shoes'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2023-08-21 23:05:47 --> Could not find the language line "Home"
ERROR - 2023-08-21 23:11:43 --> Could not find the language line "Home"
ERROR - 2023-08-21 23:41:45 --> Could not find the language line "Home"
ERROR - 2023-08-21 23:56:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-21 23:56:12 --> Could not find the language line "Home"
ERROR - 2023-08-21 23:57:08 --> Could not find the language line "Home"
ERROR - 2023-08-21 23:58:03 --> Could not find the language line "Home"
