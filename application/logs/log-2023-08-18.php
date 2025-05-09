<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-18 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 00:07:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 00:12:47 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-18 00:18:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-18 00:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 00:37:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 00:37:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 00:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 00:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 00:42:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 00:48:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-18 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 01:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 01:39:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 02:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-18 02:01:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-18 02:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 02:45:08 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-18 02:46:04 --> Could not find the language line "Home"
ERROR - 2023-08-18 02:47:38 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:02:27 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:08:28 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 03:16:52 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 03:21:41 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 03:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 03:43:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 03:55:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 03:55:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 04:04:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 04:28:31 --> Could not find the language line "Home"
ERROR - 2023-08-18 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 04:32:52 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:08:32 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:14:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 05:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:30:54 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 05:38:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 05:50:41 --> Could not find the language line "Home"
ERROR - 2023-08-18 05:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:04:05 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:10:08 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:10:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:25:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 06:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:37:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Size 46%' OR a.description LIKE '%Size 46%' OR a.color LIKE '%Size 46%' OR a.barcode LIKE '%Size 46%' OR a.category LIKE '%Size 46%' OR a.sub_category LIKE '%Size 46%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-18 06:38:27 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:38:28 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:51:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 06:53:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 06:53:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 06:53:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Men Shoes%' OR (a.description LIKE '%Men%' AND a.description LIKE '%Shoes%')) OR ((tag = 'Men Shoes') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-18 06:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 06:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:01:45 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:01:58 --> Could not find the language line "assets"
ERROR - 2023-08-18 07:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:02:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:10:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:23:07 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 07:28:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 07:28:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 07:28:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:34:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 07:35:35 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-18 07:50:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:52:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 07:57:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 07:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 07:57:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:04:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:07:00 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:15:37 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:21:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:21:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 08:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 08:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:21:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:21:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:21:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 08:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Jeans')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 08:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:23:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:24:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 08:24:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 08:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:30:33 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:30:57 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:31:08 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 08:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:31:35 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 08:31:36 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:31:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 08:31:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 08:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 08:33:07 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:33:25 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:33:26 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-18 08:33:26 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-18 08:33:26 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:33:27 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-18 08:33:27 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-18 08:33:27 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-18 08:33:27 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-08-18 08:33:28 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-18 08:33:28 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-08-18 08:33:28 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-08-18 08:33:28 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-18 08:33:29 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-18 08:33:29 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-18 08:33:29 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-18 08:33:29 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-08-18 08:33:29 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-08-18 08:33:30 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-18 08:33:30 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-18 08:33:30 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-08-18 08:33:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:34:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:34:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 08:34:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:36:50 --> Could not find the language line "Home"
ERROR - 2023-08-18 08:39:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Footwear%' OR a.description LIKE '%Footwear%' OR a.color LIKE '%Footwear%' OR a.barcode LIKE '%Footwear%' OR a.category LIKE '%Footwear%' OR a.sub_category LIKE '%Footwear%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-18 08:40:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 08:42:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 08:42:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 08:43:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 08:45:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:51:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 08:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:04:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 09:05:58 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:06:21 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:06:40 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:06:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-18 09:06:49 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:07:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:07:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 09:07:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:07:54 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:10:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:11:53 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:12:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:13:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:13:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:14:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:14:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:15:02 --> Could not find the language line "assets"
ERROR - 2023-08-18 09:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:15:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:16:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:17:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:17:24 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:22:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:25:29 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:25:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 09:25:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:25:54 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-18 09:25:54 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-18 09:25:54 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-18 09:25:54 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-18 09:26:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:26:46 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:26:49 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:27:47 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:27:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:27:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:28:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 09:28:57 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:29:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 09:29:03 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:29:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:29:33 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:30:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:31:01 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:31:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:32:47 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:34:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:34:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:35:21 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:37:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:37:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:39:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:40:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:40:57 --> Could not find the language line "assets"
ERROR - 2023-08-18 09:41:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:44:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:46:39 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:46:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:46:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:48:01 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:49:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 09:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:49:21 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:49:43 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:49:56 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:50:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:50:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 09:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:50:51 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:52:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 09:56:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 09:58:38 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:00:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 10:00:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:06:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 10:09:04 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:11:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:11:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:11:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:11:19 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:11:26 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:15:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:17:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:17:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:17:51 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:18:03 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:18:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:18:34 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:19:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:20:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:20:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:21:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:21:30 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 10:22:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 10:22:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 10:22:39 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:22:42 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 10:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:23:20 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 10:23:23 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:23:36 --> Could not find the language line "Perfume"
ERROR - 2023-08-18 10:23:47 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:24:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:26:24 --> 404 Page Not Found: Storage/settings
ERROR - 2023-08-18 10:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:43:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:43:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:44:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 10:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:48:36 --> Could not find the language line "Home"
ERROR - 2023-08-18 10:49:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:54:31 --> Could not find the language line "Crocs"
ERROR - 2023-08-18 10:55:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:55:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:55:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:55:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:55:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 10:56:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:57:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:57:39 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 10:58:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 10:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 10:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 10:59:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:06:25 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 11:22:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 11:22:28 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:30:05 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:30:32 --> Could not find the language line "Crocs"
ERROR - 2023-08-18 11:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 11:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 11:53:17 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:53:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 11:54:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 11:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:09:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 12:10:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 12:10:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 12:11:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 12:11:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 12:11:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:12:05 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-18 12:12:06 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-18 12:12:06 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-18 12:12:07 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-18 12:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:12:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-18 12:12:15 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-18 12:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:13:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 12:13:29 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:19:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 12:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:19:55 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:20:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 12:20:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:21:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:21:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:21:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:22:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 12:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:23:02 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:23:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:23:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:23:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 12:23:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-18 12:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:23:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 12:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:27:36 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:28:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 12:28:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 12:29:25 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-18 12:29:26 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-18 12:29:26 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-18 12:29:26 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-18 12:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:30:22 --> 404 Page Not Found: Products/products
ERROR - 2023-08-18 12:30:53 --> 404 Page Not Found: Products/products
ERROR - 2023-08-18 12:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:45:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:46:35 --> 404 Page Not Found: Products/products
ERROR - 2023-08-18 12:47:39 --> 404 Page Not Found: Products/products
ERROR - 2023-08-18 12:50:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 12:50:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 12:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 12:58:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:02:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 13:09:41 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-08-18 13:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:09:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 13:09:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 13:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 13:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 13:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:15:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:23:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 13:23:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 13:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:31:17 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:35:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:36:42 --> Could not find the language line "Other"
ERROR - 2023-08-18 13:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:37:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 13:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:43:05 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:44:09 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:48:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 13:48:33 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:50:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 13:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:50:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 13:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:50:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 13:50:44 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:50:49 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:50:57 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-18 13:51:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 13:51:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 13:51:41 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:51:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 13:55:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 13:55:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 13:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:58:00 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 13:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 13:59:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:00:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:01:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 14:01:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-18 14:04:16 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:04:30 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:15:22 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:18:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 14:18:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 14:19:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-18 14:19:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-18 14:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:25:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:25:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 14:27:25 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:30:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 14:32:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 14:32:25 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:33:04 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 14:41:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 14:41:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:43:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:44:01 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 14:50:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:50:50 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:50:51 --> 404 Page Not Found: Home/assets
ERROR - 2023-08-18 14:51:28 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:51:29 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:52:09 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:52:22 --> Could not find the language line "Home"
ERROR - 2023-08-18 14:54:21 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 14:54:41 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 14:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:03:07 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:04:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:09:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 15:11:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 15:22:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:23:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-18 15:23:35 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-18 15:23:35 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-18 15:23:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-18 15:23:54 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:24:46 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 15:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:51:46 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 15:53:03 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:53:47 --> Could not find the language line "Socks"
ERROR - 2023-08-18 15:54:18 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:54:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 15:54:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 15:56:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 15:56:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 15:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 15:59:23 --> Could not find the language line "Home"
ERROR - 2023-08-18 16:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 16:00:26 --> Could not find the language line "Perfume"
ERROR - 2023-08-18 16:00:36 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 16:00:52 --> Could not find the language line "Home"
ERROR - 2023-08-18 16:01:01 --> Could not find the language line "Socks"
ERROR - 2023-08-18 16:01:11 --> Could not find the language line "Socks"
ERROR - 2023-08-18 16:01:56 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 16:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 16:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-18 16:41:00 --> Could not find the language line "Home"
ERROR - 2023-08-18 16:41:10 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-18 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:27:36 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-18 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:36:46 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:36:50 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:52:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 17:52:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 17:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:53:09 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:53:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 17:53:37 --> Could not find the language line "Home"
ERROR - 2023-08-18 17:54:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 17:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 17:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 18:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:00:47 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:07:58 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:08:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 18:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 18:08:30 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:08:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 18:09:03 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:11:48 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-18 18:13:02 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:14:49 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:18:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 18:19:07 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:31:05 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:31:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:44:06 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:44:07 --> Could not find the language line "Home"
ERROR - 2023-08-18 18:55:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:15:17 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:15:17 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:18:47 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:18:48 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:18:49 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:20:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 19:20:48 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:23:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 19:23:42 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:25:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 19:30:19 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:31:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 19:33:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-18 19:47:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:51:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 19:55:14 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:00:35 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:16:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-18 20:16:44 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-08-18 20:16:44 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-08-18 20:16:45 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-18 20:16:45 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2023-08-18 20:16:45 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2023-08-18 20:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:31:44 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 20:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 20:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 20:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 20:34:08 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:34:20 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 20:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 20:34:43 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 20:34:57 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 20:35:21 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 20:35:24 --> Could not find the language line "Home"
ERROR - 2023-08-18 20:35:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-18 20:35:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-18 21:00:26 --> Could not find the language line "Home"
ERROR - 2023-08-18 21:19:56 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-18 21:23:29 --> Could not find the language line "Home"
ERROR - 2023-08-18 21:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-18 21:32:51 --> Could not find the language line "Home"
ERROR - 2023-08-18 21:46:22 --> Could not find the language line "Home"
ERROR - 2023-08-18 21:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 21:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 21:57:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 21:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:04:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:05:44 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:06:00 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:06:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:06:26 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:15:29 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:25:21 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:25:47 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 22:25:49 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 22:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:27:21 --> Could not find the language line "Bracelets"
ERROR - 2023-08-18 22:27:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:32:43 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:33:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 22:33:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-18 22:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:36:44 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:39:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:39:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 22:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:39:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 22:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 22:40:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 22:40:20 --> Could not find the language line "Home"
ERROR - 2023-08-18 22:50:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-18 22:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 22:50:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-18 22:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-18 23:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-18 23:10:10 --> Could not find the language line "Home"
ERROR - 2023-08-18 23:30:24 --> Could not find the language line "Home"
ERROR - 2023-08-18 23:32:47 --> Could not find the language line "Home"
