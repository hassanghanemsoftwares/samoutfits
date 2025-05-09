<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 00:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 00:14:17 --> Could not find the language line "Home"
ERROR - 2023-03-01 00:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 00:55:53 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:02:04 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-03-01 01:03:23 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:19:23 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:20:55 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-03-01 01:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:50:55 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:50:56 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-01 01:50:56 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-01 01:50:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:50:58 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-01 01:50:58 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-01 01:50:58 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-01 01:50:58 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-01 01:50:59 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-01 01:51:00 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-01 01:51:00 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-01 01:51:00 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-01 01:52:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 01:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:58:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 01:58:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 02:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 02:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 02:14:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 02:42:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 02:57:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:09:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 03:09:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:10:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:25:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:26:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:27:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:27:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 03:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 03:28:23 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-03-01 03:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 03:29:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:29:08 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 03:29:33 --> Could not find the language line "Home"
ERROR - 2023-03-01 03:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:10:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 04:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 04:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 04:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 04:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 04:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 04:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 04:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 04:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 04:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 04:27:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 04:27:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 04:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 04:29:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-01 04:29:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:40:18 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:41:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 04:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 05:00:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:02:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 05:03:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:10:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:11:49 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:16:31 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 05:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 05:22:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:30:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 05:49:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:51:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 05:55:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:10:47 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:13:33 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:21:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:22:31 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:38:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 06:43:25 --> Could not find the language line "socks"
ERROR - 2023-03-01 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:01:48 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:01:51 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:07:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:08:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:11:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:12:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:13:34 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:13:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-01 07:14:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:14:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:14:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:14:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:14:53 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:15:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:15:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:15:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:15:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:16:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:16:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:17:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:18:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:25:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:26:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:29:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:30:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:30:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:30:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:31:53 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:35:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 07:37:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:37:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:37:52 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:38:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:39:00 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-03-01 07:39:00 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-03-01 07:39:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:39:01 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-03-01 07:39:01 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-03-01 07:39:01 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-03-01 07:39:02 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-03-01 07:39:03 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-03-01 07:39:03 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-03-01 07:39:03 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-03-01 07:39:03 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-03-01 07:39:03 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-03-01 07:39:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-01 07:39:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-01 07:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-01 07:39:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-01 07:39:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-01 07:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-01 07:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-01 07:39:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-03-01 07:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-01 07:39:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-03-01 07:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:50:35 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:50:49 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:51:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:55:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 07:59:21 --> Could not find the language line "Home"
ERROR - 2023-03-01 07:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:03:17 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:05:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:06:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:13:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:15:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:18:20 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:18:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:18:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:29:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:30:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:30:56 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:31:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:31:20 --> Could not find the language line "Socks"
ERROR - 2023-03-01 08:31:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:31:42 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:32:00 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:32:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:38:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:50:52 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:51:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 08:51:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 08:51:46 --> Could not find the language line "Home"
ERROR - 2023-03-01 08:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 08:57:52 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:04:51 --> 404 Page Not Found: Assets/plugins
ERROR - 2023-03-01 09:05:48 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:07:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:07:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:13:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-01 09:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:15:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-01 09:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:27:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:28:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:38:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:38:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:38:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:41:53 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:45:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:50:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:51:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:51:18 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:55:30 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:56:48 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:57:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-03-01 09:57:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:57:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 09:58:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:59:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:59:24 --> Could not find the language line "Home"
ERROR - 2023-03-01 09:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 09:59:51 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:00:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:01:10 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:03:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:03:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:03:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:03:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:03:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:03:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:06:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:11:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:16:53 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:17:18 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:17:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:17:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 10:19:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 10:19:52 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:22:27 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:24:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:26:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:27:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:27:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:27:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:27:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:27:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:27:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:29:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:29:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:29:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 10:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:34:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:39:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:41:04 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:41:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-01 10:41:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-03-01 10:41:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:41:47 --> Could not find the language line "Socks"
ERROR - 2023-03-01 10:41:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:42:16 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 10:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:46:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:48:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:48:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:53:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:54:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:56:07 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 10:58:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 10:59:45 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:59:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:59:48 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-03-01 10:59:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:59:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:59:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 10:59:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:01:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:01:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:02:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:02:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:02:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:02:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:02:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:02:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:03:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:03:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:08:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:09:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:09:29 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:09:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:09:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:09:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:10:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:10:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:10:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:10:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:10:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:11:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:11:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:13:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:14:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:14:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:14:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:14:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:15:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:15:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:16:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 11:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:21:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:21:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:21:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:21:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:21:04 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:22:37 --> Could not find the language line "Socks"
ERROR - 2023-03-01 11:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:25:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:25:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 11:29:30 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:29:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:30:35 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:30:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:30:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:30:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:31:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:31:55 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:32:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:34:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:35:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:36:42 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:37:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:40:00 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:40:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:41:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:41:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:41:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:41:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:41:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:42:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:42:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 11:42:42 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:43:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:44:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:45:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:47:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:49:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:50:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:50:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:50:20 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 11:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 11:51:12 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 11:51:29 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 11:51:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 11:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:56:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 11:59:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 11:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:00:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-01 12:00:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:00:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-01 12:00:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:01:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-01 12:01:34 --> Could not find the language line "Sunglasses"
ERROR - 2023-03-01 12:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:05:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:13:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:13:55 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:26:46 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:35:31 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:37:30 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 12:37:45 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 12:37:50 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 12:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:47:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:48:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:48:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:50:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:51:00 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:51:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 12:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 12:59:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:03:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:04:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:07:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:11:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:15:30 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:16:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:17:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:25:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:39:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 13:42:00 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:44:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 13:44:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:45:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:50:34 --> 404 Page Not Found: Env/index
ERROR - 2023-03-01 13:50:35 --> Could not find the language line "Home"
ERROR - 2023-03-01 13:50:38 --> 404 Page Not Found: Vendor/phpunit
ERROR - 2023-03-01 13:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 13:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:00:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:01:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 14:01:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 14:01:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 14:01:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 14:01:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 14:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 14:01:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 14:01:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 14:03:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:08:29 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:10:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:15:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:16:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:20:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:27:18 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:40:35 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:44:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 14:52:27 --> Could not find the language line "Home"
ERROR - 2023-03-01 14:53:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:00:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:01:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:02:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 15:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:05:07 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:05:21 --> 404 Page Not Found: Home/inde
ERROR - 2023-03-01 15:06:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:09:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:14:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:15:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:17:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:17:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:18:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:20:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:28:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:30:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:31:04 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:31:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:32:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:32:17 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:32:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:32:48 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:33:36 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:35:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:35:20 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:35:34 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:35:57 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:36:07 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 15:37:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:41:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:41:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:44:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:45:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:46:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:46:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:48:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:51:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:55:27 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:55:27 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:55:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:55:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 15:56:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:57:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 15:59:48 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:00:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:01:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:08:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:17:23 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:22:39 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:24:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:24:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:31:51 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:32:33 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:33:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:33:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:35:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:36:27 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:37:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:38:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:38:46 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:40:48 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:44:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:49:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:54:46 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:54:51 --> Could not find the language line "Home"
ERROR - 2023-03-01 16:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 16:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:02:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:05:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:13:07 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:13:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:16:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:17:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:18:21 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:19:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:22:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:29:39 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:29:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:31:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:37:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:41:07 --> Could not find the language line "Perfume"
ERROR - 2023-03-01 17:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:42:55 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:43:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:44:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:46:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:47:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:49:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:50:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:51:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:51:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:51:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:51:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:51:16 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:51:34 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:55:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:55:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 17:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:58:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:58:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:58:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 17:58:24 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-03-01 17:58:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:06:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:07:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:08:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:08:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:15:52 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:15:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:16:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:16:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:16:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:16:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:16:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:17:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:17:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:17:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:17:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:17:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:17:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 18:17:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:18:28 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:19:24 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:20:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:21:34 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:22:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 18:22:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:36:08 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:38:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:43:24 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-03-01 18:47:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:51:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:51:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 18:52:19 --> 404 Page Not Found: Assets/global
ERROR - 2023-03-01 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:06:59 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 19:09:01 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:09:21 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:09:32 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:09:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:10:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:24:02 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:24:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:25:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:31:03 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:34:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:34:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:34:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:34:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:36:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:36:29 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:37:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:37:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:39:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:39:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:39:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:40:07 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:40:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:41:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:43:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:44:54 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 19:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:48:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:50:42 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:51:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 19:52:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:53:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:55:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 19:55:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-03-01 19:56:17 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:57:09 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 19:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:57:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:58:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 19:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 19:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:00:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:02:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:03:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:12:40 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:16:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 20:28:10 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:31:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:37:55 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:38:22 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:40:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:48:26 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:48:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:54:21 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:54:40 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:54:47 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 20:54:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 20:58:40 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:00:40 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:00:50 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:05:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:11:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:14:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 21:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:16:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:16:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:16:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:16:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:17:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 21:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 21:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:28:44 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 21:33:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:33:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:33:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:33:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:33:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 21:33:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 79
ERROR - 2023-03-01 21:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-03-01 22:00:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:02:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:02:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:03:00 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:12:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:13:04 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:19:30 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:19:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 22:19:36 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 22:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 22:22:19 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:22:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:23:39 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:24:54 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:30:10 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:33:23 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:33:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:34:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:35:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:36:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:38:38 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:39:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:39:39 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:39:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:40:40 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:40:41 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:42:45 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:45:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:48:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:50:57 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:56:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 22:57:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 22:57:25 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:00:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-03-01 23:01:10 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:05:17 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:05:28 --> Could not find the language line "Bracelets"
ERROR - 2023-03-01 23:05:43 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:13:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 23:18:14 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:22:47 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:23:18 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:23:35 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 23:24:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:24:37 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:26:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 23:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 23:29:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 23:29:37 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 23:29:39 --> Could not find the language line "Socks"
ERROR - 2023-03-01 23:30:13 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:31:12 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 23:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 23:38:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 23:41:06 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:44:27 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-03-01 23:46:05 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:47:58 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:47:59 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:49:09 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 23:50:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-03-01 23:52:14 --> Could not find the language line "Clothing"
ERROR - 2023-03-01 23:52:15 --> Could not find the language line "Home"
ERROR - 2023-03-01 23:58:08 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
