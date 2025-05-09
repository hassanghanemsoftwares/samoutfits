<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-16 00:00:24 --> Could not find the language line "Home"
ERROR - 2023-08-16 00:22:08 --> Could not find the language line "Other"
ERROR - 2023-08-16 00:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 00:33:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-16 00:34:02 --> Could not find the language line "Home"
ERROR - 2023-08-16 00:51:44 --> Could not find the language line "Home"
ERROR - 2023-08-16 00:53:09 --> Could not find the language line "Home"
ERROR - 2023-08-16 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-16 01:21:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 01:21:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 01:24:05 --> Could not find the language line "Home"
ERROR - 2023-08-16 01:30:23 --> Could not find the language line "Home"
ERROR - 2023-08-16 01:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 02:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 02:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 03:06:50 --> Could not find the language line "Home"
ERROR - 2023-08-16 03:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-16 03:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 03:39:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 04:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:08:45 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 04:13:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 04:17:49 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:23:32 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-16 04:25:18 --> 404 Page Not Found: Aws/credentials
ERROR - 2023-08-16 04:28:43 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:28:43 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-16 04:28:44 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-16 04:28:44 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:28:44 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-08-16 04:28:44 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-08-16 04:28:45 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-08-16 04:28:45 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-08-16 04:28:45 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-08-16 04:28:45 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-08-16 04:28:46 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-08-16 04:28:46 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-08-16 04:28:46 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-08-16 04:28:46 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-08-16 04:28:46 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-08-16 04:28:47 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-08-16 04:28:47 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-08-16 04:28:47 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-08-16 04:28:47 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-08-16 04:30:20 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:35:09 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-16 04:53:11 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:54:03 --> Could not find the language line "Hair%20Skin%20%and%20Shaving%20Products"
ERROR - 2023-08-16 04:56:07 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:56:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 04:56:34 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:56:39 --> Could not find the language line "Perfume"
ERROR - 2023-08-16 04:56:44 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:56:48 --> Could not find the language line "Socks"
ERROR - 2023-08-16 04:57:11 --> Could not find the language line "Home"
ERROR - 2023-08-16 04:57:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:03:25 --> Could not find the language line "Hair%20%and%20Body%20Care"
ERROR - 2023-08-16 05:10:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:13:49 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:17:47 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:21:35 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:23:17 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-16 05:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 05:29:30 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 05:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 05:46:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 05:46:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 05:49:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-16 05:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 05:59:39 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:04:06 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:07:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-16 06:07:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:14:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:18:01 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:18:58 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:21:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 06:21:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-16 06:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:26:43 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:27:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 06:27:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:27:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 06:28:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 06:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:36:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:41:48 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:45:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 06:45:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:51:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 06:56:01 --> Could not find the language line "Home"
ERROR - 2023-08-16 06:59:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 06:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 07:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-16 07:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:06:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 07:06:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 07:10:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 07:10:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 07:10:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 07:10:04 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-16 07:10:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 07:10:16 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-16 07:10:29 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-16 07:10:41 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-16 07:10:54 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-16 07:11:06 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-16 07:16:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 07:20:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 07:20:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 07:21:17 --> Could not find the language line "Other"
ERROR - 2023-08-16 07:21:29 --> Could not find the language line "Other"
ERROR - 2023-08-16 07:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:27:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Daily wear%' OR (a.description LIKE '%Daily%' AND a.description LIKE '%wear%')) OR ((tag = 'Daily wear' OR tag = 'Footwear' OR tag = 'Daily wear') AND (sub_category = 'Sportswear'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 07:28:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:29:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 07:29:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 07:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:34:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 07:34:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-16 07:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:36:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:38:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 07:38:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 07:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:51:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 07:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 07:56:19 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:02:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 08:02:53 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:02:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 08:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:24:37 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:32:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:41:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:43:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:50:09 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:51:58 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:54:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:54:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:55:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:56:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:56:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:56:48 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:56:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:57:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:57:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 08:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 08:57:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:57:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:57:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:57:28 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:57:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:58:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:58:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:58:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:58:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:58:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:58:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 08:58:57 --> Could not find the language line "Home"
ERROR - 2023-08-16 08:58:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 08:59:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:59:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-16 08:59:27 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:07:49 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:09:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 09:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:20:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:25:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 09:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 09:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:34:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 09:34:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-16 09:37:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 09:37:38 --> Could not find the language line "Other"
ERROR - 2023-08-16 09:37:42 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 09:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:40:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:41:16 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 09:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:42:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:43:11 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:43:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:44:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:47:32 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-08-16 09:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:50:53 --> Could not find the language line "Home"
ERROR - 2023-08-16 09:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 09:53:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:12:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:15:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 10:15:36 --> Could not find the language line "Other"
ERROR - 2023-08-16 10:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:20:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 10:20:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 10:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:22:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:22:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 10:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:22:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 10:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:29:21 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:29:21 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:29:21 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:29:22 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:29:22 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:31:45 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:31:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 10:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:48:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 10:48:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 10:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 10:55:06 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:56:27 --> Could not find the language line "Home"
ERROR - 2023-08-16 10:59:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 11:00:59 --> Could not find the language line "Home"
ERROR - 2023-08-16 11:17:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 11:22:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 11:26:55 --> Could not find the language line "Other"
ERROR - 2023-08-16 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 11:38:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 11:41:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Lebanon Delivery%' OR (a.description LIKE '%Lebanon%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Lebanon Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:01:53 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:01:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 12:01:58 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:02:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:02:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:02:26 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:02:26 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:04:04 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:04:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:04:36 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:04:48 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:04:56 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:06:34 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-08-16 12:07:11 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:08:05 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:08:26 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:09:25 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:15:09 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:18:32 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:18:54 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:19:01 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:19:04 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:19:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-16 12:21:02 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:21:35 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:22:28 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:25:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 12:28:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:37:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 12:37:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-16 12:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:41:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:47:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 12:47:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 12:47:21 --> Could not find the language line "assets"
ERROR - 2023-08-16 12:47:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 12:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:49:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:49:43 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:49:45 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:54:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 12:55:07 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:55:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 12:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:55:20 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-16 12:55:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-16 12:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:55:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:55:52 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:55:52 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:55:54 --> Could not find the language line "Home"
ERROR - 2023-08-16 12:58:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 12:58:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 12:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 12:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:06:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 13:06:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-16 13:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:11:41 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:12:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 13:18:57 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:30:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 13:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('Black')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-16 13:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:34:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes'))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 13:39:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:42:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:47:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 13:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 13:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:50:24 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:51:33 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:52:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 13:52:25 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:53:34 --> Could not find the language line "Home"
ERROR - 2023-08-16 13:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 13:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:00:10 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:00:58 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:02:09 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:09:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:11:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 14:11:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 14:14:07 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:14:31 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:25:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:38:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 14:38:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 14:43:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-16 14:43:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-16 14:54:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:54:55 --> Could not find the language line "Home"
ERROR - 2023-08-16 14:54:56 --> Could not find the language line "Home"
ERROR - 2023-08-16 15:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 15:11:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 15:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:29:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 15:29:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 15:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 15:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 15:33:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND ((a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal '))) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 15:44:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 15:55:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 15:59:21 --> Could not find the language line "Home"
ERROR - 2023-08-16 16:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 16:05:36 --> Could not find the language line "Home"
ERROR - 2023-08-16 16:06:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 16:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 16:09:24 --> Could not find the language line "Home"
ERROR - 2023-08-16 16:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 16:58:20 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:01:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 17:06:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 17:09:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 17:09:30 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 17:13:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:13:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:18:54 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:25:00 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 17:59:30 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:00:23 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:00:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 18:00:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 18:01:02 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:09:14 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-08-16 18:09:16 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-08-16 18:09:19 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-08-16 18:09:23 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:12:54 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:23:07 --> Could not find the language line "Other"
ERROR - 2023-08-16 18:25:31 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:35:45 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 18:47:21 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:47:38 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:47:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 18:47:43 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:47:50 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:48:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 18:49:23 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 18:49:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 18:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 18:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 18:50:50 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:51:02 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:51:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-16 18:52:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 18:52:04 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:54:56 --> Could not find the language line "Home"
ERROR - 2023-08-16 18:55:39 --> Could not find the language line "Home"
ERROR - 2023-08-16 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-16 19:01:55 --> Could not find the language line "Home"
ERROR - 2023-08-16 19:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:03:35 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:13:41 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:16:30 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-16 20:18:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:18:39 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:18:42 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-16 20:18:44 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:19:54 --> Could not find the language line "Bracelets"
ERROR - 2023-08-16 20:20:04 --> Could not find the language line "Bracelets"
ERROR - 2023-08-16 20:20:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:21:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:21:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:22:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:22:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:22:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:22:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-16 20:23:08 --> Could not find the language line "Perfume"
ERROR - 2023-08-16 20:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:23:17 --> Could not find the language line "Perfume"
ERROR - 2023-08-16 20:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:23:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:24:04 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:24:18 --> Could not find the language line "Socks"
ERROR - 2023-08-16 20:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:24:29 --> Could not find the language line "Socks"
ERROR - 2023-08-16 20:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:25:11 --> Could not find the language line "Socks"
ERROR - 2023-08-16 20:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:25:18 --> Could not find the language line "Socks"
ERROR - 2023-08-16 20:25:31 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:27:38 --> Could not find the language line "Bracelets"
ERROR - 2023-08-16 20:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:27:51 --> Could not find the language line "Bracelets"
ERROR - 2023-08-16 20:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-16 20:46:47 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:48:02 --> Could not find the language line "Home"
ERROR - 2023-08-16 20:50:49 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:00:22 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:06:13 --> 404 Page Not Found: Wordpress/xmlrpc.php
ERROR - 2023-08-16 21:06:13 --> 404 Page Not Found: Wp/xmlrpc.php
ERROR - 2023-08-16 21:06:13 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-16 21:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (publish = 1) AND (tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%' ) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-16 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:33:14 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:34:13 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:36:44 --> Could not find the language line "Home"
ERROR - 2023-08-16 21:45:48 --> Could not find the language line "Home"
ERROR - 2023-08-16 22:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-16 22:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-16 22:32:03 --> Could not find the language line "Home"
ERROR - 2023-08-16 22:51:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-16 23:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-16 23:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-16 23:34:26 --> Could not find the language line "Home"
ERROR - 2023-08-16 23:38:43 --> Could not find the language line "Home"
