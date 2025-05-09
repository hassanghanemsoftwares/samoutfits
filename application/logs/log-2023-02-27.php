<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-02-27 00:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 00:16:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 00:31:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 00:35:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 00:35:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 00:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 00:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 00:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 00:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 00:35:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 00:35:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 00:51:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 00:59:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:08:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:32:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:35:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:36:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 01:38:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-27 01:39:51 --> Could not find the language line "Home"
ERROR - 2023-02-27 01:39:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 01:40:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 01:41:12 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 01:41:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 01:41:30 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:12:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:12:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:37:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 02:41:46 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:24:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:27:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:49:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:50:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 03:50:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 03:54:49 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-27 03:54:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:54:53 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:54:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:30 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:34 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:55:51 --> Could not find the language line "Home"
ERROR - 2023-02-27 03:59:46 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:08:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-27 04:14:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:14:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:22:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 04:22:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:29:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 04:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:31:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:36:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:43:34 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:43:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 04:44:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 04:54:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 04:59:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:01:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:09:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:10:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:10:06 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 05:10:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:11:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:11:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:13:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:15:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:16:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:17:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 05:17:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 05:17:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 05:17:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 05:17:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 05:17:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 05:17:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 05:17:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 05:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:37:51 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:37:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:37:53 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:42:24 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-02-27 05:56:30 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:58:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 05:59:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:07:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:09:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:11:00 --> 404 Page Not Found: Plugins/content
ERROR - 2023-02-27 06:21:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:22:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-27 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:35:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:35:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 06:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 06:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 06:57:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 07:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:02:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:05:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:10:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 07:10:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 07:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:11:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:18:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 07:18:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 07:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 07:18:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 07:18:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 07:18:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 07:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 07:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 07:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 07:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 07:19:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:19:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:19:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:22:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:23:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:24:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:26:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:28:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:28:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:30:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:36:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:36:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 07:36:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 07:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:37:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 07:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:45:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:52:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 07:57:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 07:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:02:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:18:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 08:18:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:24:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:27:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:42:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 08:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 08:56:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:00:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:00:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:04:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:04:59 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:05:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:15:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:17:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:18:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:19:41 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:20:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:22:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:33:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:39:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:40:59 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:46:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:52:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:53:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 09:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:59:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 09:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:00:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:02:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:04:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:08:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:12:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:15:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:17:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:22:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:23:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:29:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:29:53 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:29:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:31:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:32:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:41:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:41:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:45:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:45:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 10:46:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 10:59:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:06:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:10:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 11:18:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:19:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:22:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:22:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:26:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:30:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:34:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:40:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:41:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:41:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:43:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:45:41 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:57:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:58:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 11:58:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 11:58:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 11:58:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:00:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:04:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 12:05:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:17:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:18:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:19:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 12:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 12:24:23 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-02-27 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:37:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:43:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:44:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:44:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:46:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:48:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:48:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 12:48:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 12:48:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 12:52:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:52:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 12:59:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:03:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:03:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-27 13:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:05:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:10:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 13:10:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 13:10:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:12:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:14:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:23:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:27:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:28:59 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:29:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:34:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:34:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 13:36:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:40:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:42:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:42:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:47:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:49:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:49:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:49:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 13:50:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:53:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:53:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:54:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 13:54:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:06:09 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:15:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:20:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:22:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:22:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 14:22:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:23:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:23:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:23:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:24:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:38:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:39:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:41:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:43:44 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:43:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:44:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:47:51 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:47:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:48:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:48:34 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:48:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:49:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:49:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:49:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:49:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:49:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:53:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:54:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:55:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 14:56:15 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:57:17 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 14:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 14:58:01 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:00:52 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:01:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:05:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:06:40 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:06:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:08:21 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:08:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:08:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:08:50 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:08:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:08:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:04 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:09:22 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:09:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:09:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:09:56 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:10:03 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:04 --> Could not find the language line "Socks"
ERROR - 2023-02-27 15:10:14 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:10:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:10:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-27 15:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-02-27 15:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:32 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:10:37 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:10:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:10:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:10:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:11:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:11:20 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:11:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:11:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:12:13 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:12:42 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 15:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:20:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:24:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 15:26:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:27:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:28:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:28:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:29:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:30:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:36:56 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:37:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:47:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:48:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:49:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:50:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:51:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:52:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:53:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 15:54:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:55:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 15:59:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:01:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:05:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:05:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:07:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:07:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:11:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:12:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:13:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:13:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:14:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:15:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:16:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:16:41 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:16:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:17:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:17:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:18:09 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:20:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:21:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:26:29 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 16:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:30:30 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:32:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:34:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:35:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:37:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:38:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:39:53 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:46:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:47:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:49:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:55:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:56:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:56:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 16:58:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:00:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:00:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:03:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:03:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:04:19 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:04:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:05:41 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:07:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:13:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:20:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:20:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:21:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:22:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:23:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 17:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:23:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:23:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:24:56 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:26:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:28:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:31:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:31:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:32:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:32:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:33:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:37:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:41:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:42:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:43:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:43:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:43:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:44:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:45:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-27 17:45:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-27 17:45:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-27 17:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:46:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:46:09 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:46:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:46:41 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-27 17:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:51:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 17:51:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 17:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:54:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 17:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:01:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:01:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:02:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:02:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:02:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:03:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:03:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:03:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:03:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:03:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:04:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:04:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:04:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:05:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:06:07 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:06:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:06:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:07:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:08:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:08:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:08:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:09:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:09:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:09:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:14:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:19:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:20:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:21:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:25:00 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 18:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:26:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:27:04 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 18:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:27:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:27:31 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 18:27:56 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:29:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:29:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:29:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-02-27 18:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:29:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:29:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:30:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:30:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:30:51 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 18:31:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:31:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:32:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:34:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:34:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:36:03 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-27 18:43:30 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:44:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:46:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:47:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:47:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:47:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:47:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:47:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:51:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:54:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:55:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:55:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:55:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:55:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:56:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:56:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:56:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 18:56:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:56:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:56:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:57:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:58:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 18:59:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:59:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:59:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 18:59:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 18:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:00:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:00:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:01:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:01:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:01:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:01:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:02:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:02:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:02:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:02:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:03:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:03:16 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 19:03:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:03:29 --> Could not find the language line "Socks"
ERROR - 2023-02-27 19:03:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:04:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:04:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:04:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:04:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:07:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:07:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:07:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:07:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:08:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:08:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:08:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:08:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:08:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:09:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:09:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:10:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:10:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:10:08 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 19:10:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:10:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 19:11:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:13:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:14:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:15:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 19:16:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:24:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:25:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:30:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:34:36 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 19:38:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:39:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:41:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 19:44:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:44:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:45:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:51:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:51:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:51:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:51:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:52:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:52:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:53:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:56:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 19:57:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:01:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-27 20:03:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:03:46 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:04:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:06:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-27 20:12:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:13:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:13:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:14:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:14:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:15:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:16:44 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:18:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:19:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:19:34 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:20:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:21:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:21:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:21:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:24:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:24:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:25:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:25:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:26:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:27:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:27:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:27:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:28:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:31:56 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:32:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:33:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:35:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:36:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:36:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:36:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:36:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:36:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:38:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:38:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:38:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:38:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:38:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:39:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:40:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 20:42:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-02-27 20:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 20:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-02-27 20:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:42:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:44:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:44:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-02-27 20:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:45:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:45:18 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:45:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:45:55 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:46:39 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:46:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:47:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:47:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:49:48 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 20:49:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:49:54 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 20:51:37 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 20:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:51:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:53:09 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:53:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:53:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:53:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:53:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:53:53 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:53:58 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:54:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:54:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:54:28 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:54:51 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:54:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:55:16 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:55:47 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:55:58 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:56:30 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 20:56:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:57:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 20:57:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:57:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:57:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:57:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:57:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:57:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:57:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:57:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 20:58:30 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 20:58:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:58:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:58:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:58:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:58:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 20:58:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 20:58:45 --> Could not find the language line "Bracelets"
ERROR - 2023-02-27 21:00:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:06:18 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:07:27 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:11:09 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:11:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:12:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:13:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:14:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:14:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 21:18:41 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-02-27 21:18:41 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-02-27 21:18:42 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-02-27 21:18:42 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-02-27 21:18:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:19:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:19:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:21:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:21:16 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 21:21:33 --> Could not find the language line "Perfume"
ERROR - 2023-02-27 21:21:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:21:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 21:22:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:22:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 21:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 21:23:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-02-27 21:25:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 21:28:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:28:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:30:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:30:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:30:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 21:30:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:31:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:45:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:45:52 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:46:41 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:47:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:48:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 21:56:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-02-27 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:00:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:02:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:02:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:03:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:03:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:03:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:03:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:04:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:05:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:10:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:10:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:14:10 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:14:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:15:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:15:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:16:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:17:16 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:17:50 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 22:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 22:19:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:19:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:19:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:20:46 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:21:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:22:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:22:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:23:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:25:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:25:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 22:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 22:25:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 22:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 22:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 22:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 22:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-02-27 22:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Vans%' OR a.description LIKE '%Vans%' OR a.color LIKE '%Vans%' OR a.barcode LIKE '%Vans%' OR a.category LIKE '%Vans%' OR a.sub_category LIKE '%Vans%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-02-27 22:25:27 --> 404 Page Not Found: Assets/jquery-file-upload
ERROR - 2023-02-27 22:27:33 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:29:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:30:12 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:36:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:36:59 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:37:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 22:37:23 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:37:49 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:38:36 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:40:08 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:40:24 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:42:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:43:26 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:46:02 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:47:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:48:28 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:50:02 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-02-27 22:51:03 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:54:04 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:57:22 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:58:31 --> Could not find the language line "Home"
ERROR - 2023-02-27 22:59:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-02-27 22:59:39 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:00:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:00:20 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:01:54 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 23:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 23:02:24 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 23:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-02-27 23:03:14 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:03:27 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 23:06:06 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:08:55 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:10:40 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:10:54 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:10:57 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:11:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:14:35 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:15:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:16:35 --> Could not find the language line "Clothing"
ERROR - 2023-02-27 23:17:21 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:17:43 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:20:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:23:32 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:26:17 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:27:38 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:29:09 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:29:42 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:32:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:34:48 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:37:25 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:40:05 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:40:11 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:43:01 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:45:15 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:46:00 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:48:45 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:51:37 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:54:29 --> Could not find the language line "Home"
ERROR - 2023-02-27 23:57:16 --> Could not find the language line "Home"
