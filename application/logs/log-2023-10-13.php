<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-13 00:01:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 00:02:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 00:17:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 00:18:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 00:24:49 --> Could not find the language line "Home"
ERROR - 2023-10-13 00:48:34 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-13 00:54:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 00:57:28 --> Could not find the language line "Socks"
ERROR - 2023-10-13 01:00:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 01:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 01:08:24 --> Could not find the language line "Home"
ERROR - 2023-10-13 01:30:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 01:30:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 01:30:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 01:30:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 01:31:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 01:31:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 01:31:30 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-13 01:31:58 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-13 01:32:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 01:32:27 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-13 01:32:55 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-13 01:33:23 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-13 01:33:52 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-13 01:38:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 01:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 01:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 02:09:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 02:09:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 02:11:59 --> Could not find the language line "Other"
ERROR - 2023-10-13 02:12:28 --> Could not find the language line "Other"
ERROR - 2023-10-13 02:34:11 --> Could not find the language line "Home"
ERROR - 2023-10-13 02:58:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 03:00:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 03:34:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 03:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:00:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:09:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 04:10:17 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:20:10 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:26:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:26:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:29:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:29:38 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 04:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:30:06 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:30:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:34:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:34:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:35:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:36:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:36:21 --> Could not find the language line "Perfume"
ERROR - 2023-10-13 04:36:35 --> Could not find the language line "Other"
ERROR - 2023-10-13 04:48:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:49:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:51:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:53:50 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:55:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:55:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 04:56:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 04:59:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 04:59:10 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 04:59:35 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 04:59:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 04:59:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:00:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 05:01:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:01:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:01:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:02:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:03:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:03:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:03:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:04:18 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:05:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:11:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:21:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:21:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:21:53 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:24:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:27:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:27:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:27:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:28:15 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:28:39 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:29:16 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:29:30 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:29:34 --> Could not find the language line "Perfume"
ERROR - 2023-10-13 05:29:41 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:29:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 05:30:08 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:30:12 --> Could not find the language line "Socks"
ERROR - 2023-10-13 05:30:20 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:30:51 --> Could not find the language line "Other"
ERROR - 2023-10-13 05:30:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:33:18 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:33:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 05:34:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:34:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:34:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:35:40 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 05:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 05:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 05:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 05:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 05:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 05:39:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 05:39:49 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:40:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:40:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 05:40:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 05:42:15 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:43:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 05:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 05:44:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:46:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:50:53 --> Could not find the language line "Home"
ERROR - 2023-10-13 05:53:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 05:57:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 06:01:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 06:02:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 06:02:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:06:41 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:21:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:22:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:26:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:37:17 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:38:41 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:44:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:44:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 06:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:53:42 --> Could not find the language line "Socks"
ERROR - 2023-10-13 06:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 06:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:00:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:01:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:01:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:02:01 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:02:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-13 07:02:26 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:02:32 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:02:43 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:03:11 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:10:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:12:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 07:13:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:16:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 07:18:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 07:18:29 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:19:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:19:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:21:51 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:24:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:31:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:35:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:36:10 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:36:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:38:26 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:43:10 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:43:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 07:43:26 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:43:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 07:43:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:43:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 07:44:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 07:45:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:46:01 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:46:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:46:07 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-13 07:46:07 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-13 07:46:07 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-13 07:46:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-13 07:49:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:49:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:54:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:57:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:57:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 07:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 07:58:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:01:39 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:02:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:07:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 08:07:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 08:08:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:13:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:14:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:17:28 --> Could not find the language line "Other"
ERROR - 2023-10-13 08:23:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:29:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 08:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:43:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:43:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:46:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 08:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 08:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 08:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 08:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 08:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`price` <= '22'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 08:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 08:55:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:55:08 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:55:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 08:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 08:58:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 08:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:05:39 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:07:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 09:09:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:13:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 09:14:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:15:20 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:15:27 --> Could not find the language line "products"
ERROR - 2023-10-13 09:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:19:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 09:19:38 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:33:31 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 09:34:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:43:04 --> Could not find the language line "Crocs"
ERROR - 2023-10-13 09:43:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 09:43:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 09:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 09:44:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:44:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 09:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 09:46:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 09:48:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:52:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 09:58:20 --> Could not find the language line "Home"
ERROR - 2023-10-13 10:00:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 10:00:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 10:00:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 10:00:38 --> Could not find the language line "Home"
ERROR - 2023-10-13 10:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:16:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 10:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:21:59 --> Could not find the language line "Home"
ERROR - 2023-10-13 10:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 10:37:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 10:43:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 10:45:50 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 10:51:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 10:51:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 10:51:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 10:52:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 10:52:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 10:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 10:57:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 10:57:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:03:54 --> Could not find the language line "products"
ERROR - 2023-10-13 11:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:07:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:07:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:08:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:08:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 11:12:17 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:14:23 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:18:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:27:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 11:33:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:34:22 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-13 11:34:22 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-13 11:34:22 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-13 11:34:22 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-13 11:34:22 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-13 11:34:23 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-13 11:34:23 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-13 11:34:23 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-13 11:34:23 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-13 11:34:23 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-13 11:39:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:40:04 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 11:40:29 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:45:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 11:45:17 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:47:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 11:50:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:51 --> Could not find the language line "Home"
ERROR - 2023-10-13 11:50:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 11:51:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 11:51:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 11:58:54 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:09:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:15:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:16:13 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 12:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:26:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:35:18 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:35:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:35:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:35:41 --> Could not find the language line "assets"
ERROR - 2023-10-13 12:40:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:41:46 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:41:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:46:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 12:46:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 12:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 12:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:48:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:50:40 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 12:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:51:23 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 12:52:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:52:48 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 12:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:56:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 12:56:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:56:40 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:56:46 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:56:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:56:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-13 12:57:05 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 12:57:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 12:57:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:57:57 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-13 12:58:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 12:58:18 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:58:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 12:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:58:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 12:59:02 --> Could not find the language line "Home"
ERROR - 2023-10-13 12:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:59:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 12:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:59:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 12:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 12:59:56 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:00:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:00:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 13:01:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:01:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:01:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:01:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:01:21 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:01:30 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:01:53 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:01:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:01:57 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:02:02 --> Could not find the language line "Perfume"
ERROR - 2023-10-13 13:02:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:02:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 13:02:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 13:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:02:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 13:02:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 13:02:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:02:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:02:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 13:03:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:03:31 --> Could not find the language line "Socks"
ERROR - 2023-10-13 13:03:35 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:03:36 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-13 13:03:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-13 13:03:37 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-13 13:03:37 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-13 13:03:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:04:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:04:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 13:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:05:16 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:05:39 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:07:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 13:07:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 13:07:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 13:07:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 13:07:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 13:07:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 13:08:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 13:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '12'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 13:08:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 13:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 13:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '30'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 13:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 13:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:11:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:12:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 13:12:47 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:14:13 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:15:39 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:18:30 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:21:21 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:22:54 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:22:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:23:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 13:24:13 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:25:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:27:04 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:27:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 13:28:47 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:29:01 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:29:06 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:29:21 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:29:29 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:29:55 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:29:55 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:30:05 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:30:11 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:30:40 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:30:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:31:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:33:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:33:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:34:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:35:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:35:38 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:35:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:35:44 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:35:47 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:35:49 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:36:01 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:36:04 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:36:11 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:36:16 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:36:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:36:45 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:37:03 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:37:42 --> Could not find the language line "Hair%20"
ERROR - 2023-10-13 13:38:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:39:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:39:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:39:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:41:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:41:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:41:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:42:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:44:12 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:44:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:44:43 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:45:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:45:37 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:46:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 13:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:47:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:48:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:49:54 --> 404 Page Not Found: Products/products
ERROR - 2023-10-13 13:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 13:51:02 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:51:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:52:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:52:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 13:53:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:58:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 13:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 13:58:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 13:58:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 13:59:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:59:10 --> Could not find the language line "Home"
ERROR - 2023-10-13 13:59:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:00:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:04:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:05:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:06:02 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:08:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:08:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:08:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:09:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:09:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:09:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:13:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:18:19 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:20:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:20:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 14:20:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:27:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:29:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:29:49 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:30:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:32:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-13 14:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:33:38 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:33:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:33:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-13 14:37:59 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:44:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 14:49:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 14:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 14:56:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 14:56:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 14:57:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:03:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 15:07:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:08:18 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:11:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 15:11:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:18:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:19:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:20:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:24:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 15:24:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 15:24:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 15:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:26:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:32:06 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:32:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:32:11 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-13 15:32:11 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-13 15:32:12 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-13 15:32:12 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-13 15:34:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:42:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 15:48:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 15:48:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 15:50:34 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:51:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:52:08 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:52:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 15:52:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:52:40 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-13 15:52:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 15:54:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:55:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 15:56:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 15:59:21 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:00:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 16:00:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 16:00:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 16:00:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 16:00:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 16:00:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 16:00:43 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:06:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:09:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 16:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:11:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:13:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:17:16 --> 404 Page Not Found: Env/index
ERROR - 2023-10-13 16:22:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:26:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:31:34 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:32:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:34:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:41:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:42:37 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-13 16:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:48:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:49:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:51:32 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:51:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:52:11 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:55:07 --> Could not find the language line "Perfume"
ERROR - 2023-10-13 16:55:15 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:55:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:55:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:55:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:56:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:56:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:56:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:56:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 16:56:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 16:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 16:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:00:38 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:01:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:01:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:01:23 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:01:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:01:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:03:08 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-13 17:06:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 17:06:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 17:06:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 17:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:11:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 17:11:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:11:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:17:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:18:41 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:18:59 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:19:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:19:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:21:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:25:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 17:26:49 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:28:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:29:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:31:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:35:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:35:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:36:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:37:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:37:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 17:37:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 17:37:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 17:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:37:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 17:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:38:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 17:46:51 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:47:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 17:47:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 17:47:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 17:48:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 17:51:46 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:56:03 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:59:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:59:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 17:59:48 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:01:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:08:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:08:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:08:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:09:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:09:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:09:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:09:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:09:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('L')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-13 18:09:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:12:47 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:17:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 18:18:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:23:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:27:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:27:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:28:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:28:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:28:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:28:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:28:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:29:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:29:12 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:29:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 18:29:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 18:30:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 18:31:19 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:31:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 18:36:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:37:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:37:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:49:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:49:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:49:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:49:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 18:49:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:49:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-13 18:49:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-13 18:49:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-13 18:49:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:52:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:53:29 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:53:37 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 18:55:34 --> Could not find the language line "Home"
ERROR - 2023-10-13 18:56:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 18:58:08 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:00:34 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:01:20 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:01:41 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:02:39 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:05:59 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:06:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:07:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:07:37 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:07:56 --> Could not find the language line "Perfume"
ERROR - 2023-10-13 19:08:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:08:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 19:08:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 19:08:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Socks"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Socks"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:11:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:13:30 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:16:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:16:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:16:57 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:16:58 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:16:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:18:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:18:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:19:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:19:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:19:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:19:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:19:59 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:21:25 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:21:40 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:23:50 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 19:30:37 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 19:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 19:31:12 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 19:35:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 19:36:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-13 19:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:02:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:03:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 20:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:07:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-13 20:12:02 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:12:05 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:12:07 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:12:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:12:14 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-13 20:12:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:12:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:15:47 --> Could not find the language line "Other"
ERROR - 2023-10-13 20:17:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 20:17:06 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:23:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:33:19 --> Could not find the language line "Other"
ERROR - 2023-10-13 20:33:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:33:27 --> Could not find the language line "Other"
ERROR - 2023-10-13 20:33:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:34:13 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:35:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 20:36:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 20:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:40:18 --> Could not find the language line "Other"
ERROR - 2023-10-13 20:40:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 20:51:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 20:58:19 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:04:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 21:07:45 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 21:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 21:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 21:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 21:19:26 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:21:14 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:22:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:26:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:28:02 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:30:04 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 21:42:30 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-13 21:55:27 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:58:33 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:59:00 --> Could not find the language line "Home"
ERROR - 2023-10-13 21:59:36 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:11:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 22:11:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:12:34 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:12:54 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:14:55 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:18:09 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:23:43 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:34:44 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:41:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 22:41:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 22:42:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-13 22:47:42 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:48:51 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:49:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 22:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:50:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-13 22:50:52 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:51:54 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:51:54 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:52:11 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:52:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:52:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-13 22:52:45 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:57:24 --> Could not find the language line "Home"
ERROR - 2023-10-13 22:58:56 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:24:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 23:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-13 23:30:39 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:35:40 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:40:40 --> Could not find the language line "Bracelets"
ERROR - 2023-10-13 23:45:22 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:53:06 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:57:32 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:57:59 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-13 23:57:59 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-13 23:57:59 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-13 23:57:59 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-13 23:58:00 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-13 23:58:00 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-13 23:58:00 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-13 23:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-13 23:58:01 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-13 23:58:01 --> Could not find the language line "Home"
ERROR - 2023-10-13 23:58:02 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-13 23:58:03 --> 404 Page Not Found: Connectfacebooknet/en_US
