<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-30 00:00:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 00:02:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 00:03:30 --> Could not find the language line "Home"
ERROR - 2023-08-30 00:03:36 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2023-08-30 00:03:42 --> 404 Page Not Found: Feed/index
ERROR - 2023-08-30 00:03:47 --> Could not find the language line "Home"
ERROR - 2023-08-30 00:03:51 --> Could not find the language line "Home"
ERROR - 2023-08-30 00:05:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 00:30:17 --> Could not find the language line "Home"
ERROR - 2023-08-30 01:00:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 01:23:28 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-30 01:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-30 01:51:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 01:56:43 --> Could not find the language line "Home"
ERROR - 2023-08-30 01:58:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:01:31 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:09:33 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:30:36 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:32:52 --> Could not find the language line "Home"
ERROR - 2023-08-30 02:34:37 --> Could not find the language line "Other"
ERROR - 2023-08-30 03:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 03:37:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-30 03:42:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 03:55:14 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-30 03:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 04:00:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 04:01:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 04:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 04:39:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 04:54:23 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-08-30 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:00:53 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:05:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:20:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-30 05:22:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:30:21 --> Could not find the language line "Home"
ERROR - 2023-08-30 05:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:00:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:01:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 06:04:44 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:08:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:10:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:11:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:12:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 06:12:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 06:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:15:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:15:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 06:15:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 06:16:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 06:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 06:18:27 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:20:47 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:20:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:21:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:21:37 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:22:47 --> Could not find the language line "Socks"
ERROR - 2023-08-30 06:22:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 06:22:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-30 06:23:06 --> Could not find the language line "Socks"
ERROR - 2023-08-30 06:23:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:23:20 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 06:23:33 --> Could not find the language line "Perfume"
ERROR - 2023-08-30 06:23:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:23:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:24:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:25:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:25:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:26:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 06:26:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 06:26:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:26:35 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-30 06:26:36 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-30 06:26:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-30 06:26:36 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-30 06:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:26:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:27:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:31 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:27:36 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:27:45 --> Could not find the language line "Bracelets"
ERROR - 2023-08-30 06:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:28:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 06:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:28:30 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:31:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 06:31:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 06:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:33:32 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:33:34 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:34:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:36:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:38:01 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:46:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:46:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 06:46:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 06:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:48:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:48:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:48:30 --> Could not find the language line "Home"
ERROR - 2023-08-30 06:50:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 06:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:07:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:10:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:10:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:10:37 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:11:19 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:12:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:12:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 07:12:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:15:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:15:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:16:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:16:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:25:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:25:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:28:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:29:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:29:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 07:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 07:30:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:33:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:33:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:46:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 07:46:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:48:06 --> 404 Page Not Found: Wp-touchjs/index
ERROR - 2023-08-30 07:49:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:51:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:53:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:56:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 07:57:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:57:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 07:58:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:00:21 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:03:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:04:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 08:04:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 08:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:07:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:07:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 08:08:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 08:08:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 08:08:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:10:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 08:10:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 08:10:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:10:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-30 08:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:19:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:21:32 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:23:38 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:23:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:26:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:32:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:33:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 08:33:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-30 08:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:35:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 08:35:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 08:37:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 08:37:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 08:37:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-30 08:37:57 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-08-30 08:37:58 --> 404 Page Not Found: Sitemapindexxml/index
ERROR - 2023-08-30 08:37:58 --> 404 Page Not Found: Sitemapindexxml/index
ERROR - 2023-08-30 08:37:59 --> 404 Page Not Found: Sitemap-indexxml/index
ERROR - 2023-08-30 08:37:59 --> 404 Page Not Found: Sitemap-indexxml/index
ERROR - 2023-08-30 08:38:00 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-08-30 08:38:00 --> 404 Page Not Found: Sitemap_indexxml/index
ERROR - 2023-08-30 08:38:01 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:38:01 --> Could not find the language line "Home"
ERROR - 2023-08-30 08:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:45:37 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 08:47:04 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 08:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 08:53:05 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 08:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:05:05 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:06:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 09:07:19 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:08:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 09:09:38 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:14:04 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:14:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 09:15:07 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:15:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:15:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:16:19 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:16:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 09:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 09:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:17:49 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:20:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:20:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:20:04 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:30:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 09:30:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:30:41 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:32:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 09:33:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:35:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 09:35:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 09:38:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 09:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-30 09:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:45:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 09:48:53 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 09:58:00 --> 404 Page Not Found: Products/products
ERROR - 2023-08-30 10:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:02:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:03:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:03:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:04:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:10:07 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:11:01 --> 404 Page Not Found: Assets/lib
ERROR - 2023-08-30 10:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:11:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:15:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:15:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:18:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:19:28 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-30 10:19:28 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-30 10:19:28 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-30 10:19:30 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-30 10:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:20:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:25:35 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:27:21 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:27:51 --> Could not find the language line "Socks"
ERROR - 2023-08-30 10:28:07 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:28:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 10:28:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 10:28:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:28:31 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:28:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 10:28:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:29:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:29:06 --> Could not find the language line "Perfume"
ERROR - 2023-08-30 10:29:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:29:33 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:29:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:30:10 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:33:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:35:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:35:32 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:35:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 10:37:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 10:37:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:38:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:41:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 10:51:51 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:00:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:00:33 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:08:01 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:09:56 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:10:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:10:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:10:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:14:20 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:22:10 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:27:31 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:33:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:35:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:35:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 11:53:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 11:55:43 --> Could not find the language line "Home"
ERROR - 2023-08-30 11:59:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:10:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:10:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:10:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:11:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:17:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 12:17:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 12:17:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:18:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 12:20:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:21:04 --> Could not find the language line "Socks"
ERROR - 2023-08-30 12:21:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:26:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:28:47 --> Could not find the language line "Crocs"
ERROR - 2023-08-30 12:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:29:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:30:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:32:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 12:32:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 12:34:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 12:34:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 12:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:34:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 12:47:20 --> Could not find the language line "Home"
ERROR - 2023-08-30 12:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 12:52:07 --> Could not find the language line "Other"
ERROR - 2023-08-30 12:56:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 12:56:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 12:57:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 12:57:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-30 13:09:24 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-08-30 13:09:24 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-08-30 13:09:24 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-08-30 13:09:25 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-08-30 13:11:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 13:11:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-08-30 13:12:50 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:12:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:18:41 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:24:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:24:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:25:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 13:25:26 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-08-30 13:25:27 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-08-30 13:25:28 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:33:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:36:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:41:10 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:41:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:41:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:41:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:41:55 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:42:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 13:42:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 13:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 13:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 13:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:44 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:42:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:42:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:44:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:45:59 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-08-30 13:46:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 13:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:51:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 13:51:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 13:53:24 --> Could not find the language line "Home"
ERROR - 2023-08-30 13:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:57:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 13:57:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 13:57:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 13:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 13:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:00:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:00:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:00:58 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:01:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 14:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:01:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 14:02:08 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:02:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:03:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:03:28 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:03:29 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:03:32 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:05:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:05:41 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:05:58 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:06:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:06:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:07:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:07:46 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:07:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:08:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:08:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:09:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:10:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:10:17 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:10:27 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:11:00 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:11:45 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:11:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:11:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:11:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:00 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:09 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:14 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:15 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:12:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:12:57 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:13:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:13:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:13:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:16:49 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:16:50 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:16:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:16:55 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:18:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:18:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:18:19 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:18:40 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:18:47 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:19:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:19:54 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:20:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:20:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:21:01 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:23:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:23:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:23:33 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:23:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:23:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:24:10 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:24:24 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:24:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:24:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:24:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:24:50 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:24:53 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:25:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-08-30 14:25:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:25:18 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:25:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:25:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:25:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:11 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:23 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:26:33 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:35 --> Could not find the language line "Perfume"
ERROR - 2023-08-30 14:26:38 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:26:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:26:41 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:26:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:26:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:26:54 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:27:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:28:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:28:10 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:28:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:29:04 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:29:06 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:36:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:37:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:37:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:37:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:38:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 14:38:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 14:38:20 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-30 14:38:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 14:38:34 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-08-30 14:38:36 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:38:47 --> Could not find the language line "Perfume"
ERROR - 2023-08-30 14:38:50 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-30 14:38:54 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:39:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:39:04 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-08-30 14:39:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 14:39:19 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:39:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:39:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:39:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:39:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:40:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:40:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:51 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-30 14:41:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:42:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:42:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:43:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:43:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:43:22 --> Could not find the language line "Bracelets"
ERROR - 2023-08-30 14:43:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:43:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:43:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:43:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:44:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:44:22 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:44:37 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:44:52 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:45:21 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:45:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:45:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:46:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:46:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:46:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:47:18 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:47:33 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:47:48 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:48:02 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:48:17 --> Could not find the language line "Other"
ERROR - 2023-08-30 14:48:31 --> Could not find the language line "Perfume"
ERROR - 2023-08-30 14:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:50:01 --> Could not find the language line "Socks"
ERROR - 2023-08-30 14:50:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:50:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 14:50:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 14:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 14:52:27 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:52:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-08-30 14:53:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:53:51 --> Could not find the language line "Home"
ERROR - 2023-08-30 14:57:33 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 15:08:25 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:08:53 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:09:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:09:04 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 15:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 15:09:58 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:03 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:36 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:10:56 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:11:02 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:11:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 15:11:09 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 15:13:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:21:27 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:28:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-30 15:41:07 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:41:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 15:41:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 15:41:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-08-30 15:45:10 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 16:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:13:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:22:34 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:30:16 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 16:43:58 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:53:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 16:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 16:56:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 16:57:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 16:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:02:54 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-08-30 17:12:49 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:15:03 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:17:30 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:17:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:18:00 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:20:04 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:30:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:36:08 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:36:37 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:36:51 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:37:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:37:05 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:37:19 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:37:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:37:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:37:45 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:39:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:41:33 --> Could not find the language line "Other"
ERROR - 2023-08-30 17:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:44:35 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:45:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:46:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:54:05 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:55:30 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:56:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:56:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:56:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:56:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 17:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 17:57:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:11:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:27:29 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:32:40 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:49:09 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 18:49:59 --> Could not find the language line "Home"
ERROR - 2023-08-30 18:50:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 18:56:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 19:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:21:46 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:22:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:22:29 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 19:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:26:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 19:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:30:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:30:42 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:31:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:38:01 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:38:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:38:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:38:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-08-30 19:38:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-08-30 19:41:32 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:43:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:45:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:46:06 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:47:57 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:49:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 19:49:28 --> Could not find the language line "Home"
ERROR - 2023-08-30 19:50:22 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:00:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:00:59 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 20:10:05 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:10:19 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 20:10:26 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:10:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-30 20:10:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 20:10:53 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:11:07 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 20:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 20:11:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:18:44 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:18:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-08-30 20:23:10 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:33:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:34:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:36:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:36:59 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:37:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 20:37:36 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-30 20:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:38:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 20:38:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 20:38:15 --> Could not find the language line "Sunglasses"
ERROR - 2023-08-30 20:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 20:39:02 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:00:15 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 21:01:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 21:09:35 --> Could not find the language line "Disclaimer"
ERROR - 2023-08-30 21:20:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:25:23 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:26:05 --> Could not find the language line "Bracelets"
ERROR - 2023-08-30 21:26:46 --> Could not find the language line "Bracelets"
ERROR - 2023-08-30 21:27:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 21:27:52 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 21:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 21:45:36 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:49:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-08-30 21:54:17 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:54:17 --> Could not find the language line "Home"
ERROR - 2023-08-30 21:57:53 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:00:48 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 22:20:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-08-30 22:30:18 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:35:51 --> Could not find the language line "Clothing"
ERROR - 2023-08-30 22:37:55 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:42:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:43:12 --> Could not find the language line "Home"
ERROR - 2023-08-30 22:50:30 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-08-30 22:51:16 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-08-30 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-08-30 23:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 23:11:39 --> Could not find the language line "Home"
ERROR - 2023-08-30 23:25:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-08-30 23:30:14 --> Could not find the language line "Home"
ERROR - 2023-08-30 23:35:45 --> 404 Page Not Found: Robotstxt/index
