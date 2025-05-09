<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-10 00:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:25:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:25:47 --> Could not find the language line "Socks"
ERROR - 2023-07-10 00:26:36 --> Could not find the language line "Socks"
ERROR - 2023-07-10 00:26:49 --> Could not find the language line "Socks"
ERROR - 2023-07-10 00:26:52 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:30:11 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:30:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 00:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 00:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 00:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 00:32:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:35:02 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:35:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:35:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 00:37:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 00:38:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 00:38:06 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-10 00:38:10 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-10 00:38:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 00:38:17 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-07-10 00:38:22 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-10 00:38:26 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-10 00:38:31 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-07-10 00:41:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 00:45:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 00:45:44 --> Could not find the language line "Other"
ERROR - 2023-07-10 00:45:55 --> Could not find the language line "Other"
ERROR - 2023-07-10 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 01:00:21 --> Could not find the language line "Home"
ERROR - 2023-07-10 01:12:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 01:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 01:40:17 --> Could not find the language line "Home"
ERROR - 2023-07-10 01:44:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 01:53:47 --> Could not find the language line "Home"
ERROR - 2023-07-10 01:59:06 --> Could not find the language line "Home"
ERROR - 2023-07-10 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 02:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 02:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-07-10 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 02:53:50 --> Could not find the language line "Socks"
ERROR - 2023-07-10 02:59:25 --> Could not find the language line "Home"
ERROR - 2023-07-10 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 03:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 03:10:59 --> Could not find the language line "Home"
ERROR - 2023-07-10 03:20:33 --> Could not find the language line "Home"
ERROR - 2023-07-10 03:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 03:56:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:03:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 04:17:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 04:28:20 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:29:18 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:29:19 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:29:19 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:29:20 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:35:10 --> Could not find the language line "Home"
ERROR - 2023-07-10 04:56:35 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:12:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 05:27:10 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:30:21 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:36:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 05:41:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 05:41:57 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:42:11 --> Could not find the language line "Socks"
ERROR - 2023-07-10 05:42:28 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:42:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 05:42:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 05:43:05 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:45:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:46:45 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:47:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 05:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 05:48:37 --> Could not find the language line "Home"
ERROR - 2023-07-10 05:54:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:00:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:05:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 06:07:09 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:07:11 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:07:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:08:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-10 06:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:10:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:11:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-10 06:11:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-10 06:11:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-10 06:11:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-10 06:13:29 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:13:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:13:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 06:14:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:14:38 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:20:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 06:21:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:23:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:25:12 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:25:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:25:27 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:25:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:25:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 06:25:33 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:25:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:25:41 --> 404 Page Not Found: Home/assets
ERROR - 2023-07-10 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:33:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 06:34:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 06:34:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 06:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:34:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 06:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:35:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 06:36:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:38:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:39:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:46 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:39:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:39:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:40:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:42:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:43:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 06:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:45:00 --> Could not find the language line "Home"
ERROR - 2023-07-10 06:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:50:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:51:19 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 06:55:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 06:55:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 06:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 06:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 06:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:01:34 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:02:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 07:02:15 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 07:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:03:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:04:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:06:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:07:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 07:07:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 07:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:16:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:21:45 --> Could not find the language line "Socks"
ERROR - 2023-07-10 07:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:23:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:24:53 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 07:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:25:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 07:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:25:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 07:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:26:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:27:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 07:27:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 07:29:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 07:29:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '15'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 07:30:26 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:32:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 07:32:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 07:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 07:33:34 --> Could not find the language line "Home"
ERROR - 2023-07-10 07:37:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 07:37:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 07:42:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:01:20 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:06:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:11:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:11:32 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:11:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 08:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:12:20 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 08:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:12:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 08:12:45 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:24:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:25:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:27:31 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:41:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 08:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 08:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:41:52 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:41:53 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:42:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:42:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:43:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:46:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:47:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 08:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:48:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 08:48:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 08:49:10 --> Could not find the language line "Perfume"
ERROR - 2023-07-10 08:49:22 --> Could not find the language line "Socks"
ERROR - 2023-07-10 08:49:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:49:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:50:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:50:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:50:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:50:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:50:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 08:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:54:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:54:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:54:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:54:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 08:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 08:59:39 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:04:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:05:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:10:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 09:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '22'
AND `transaction_item_sizes`.`size` IN('41', '42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 09:17:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:17:47 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:18:24 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:18:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:19:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 09:19:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 09:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:21:38 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:23:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-10 09:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 09:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:31:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:31:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:47:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 09:47:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '14'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 09:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:49:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 09:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:01:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:03:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 10:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 10:04:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:09:29 --> Could not find the language line "assets"
ERROR - 2023-07-10 10:09:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:10:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 10:11:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 10:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:14:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 10:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 10:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:17:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 10:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 10:29:34 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:30:27 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:31:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:36:46 --> Could not find the language line "Socks"
ERROR - 2023-07-10 10:37:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 10:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 10:40:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 10:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '8'
AND `transaction_item_sizes`.`size` IN('43', '44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 10:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:53:06 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:53:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:53:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:53:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:57:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 10:58:56 --> Could not find the language line "Home"
ERROR - 2023-07-10 10:59:28 --> 404 Page Not Found: _ignition/health-check
ERROR - 2023-07-10 10:59:31 --> 404 Page Not Found: Public/_ignition
ERROR - 2023-07-10 10:59:34 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-07-10 10:59:39 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:01:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 11:02:43 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:30:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:30:17 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:30:21 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 11:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:30:47 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 11:30:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:31:06 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 11:31:13 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 11:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:41:43 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:45:51 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:46:09 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:46:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:46:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:46:45 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:46:47 --> Could not find the language line "Home"
ERROR - 2023-07-10 11:46:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:46:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 11:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 11:54:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 12:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:09:31 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:12:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 12:13:55 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 12:14:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 12:14:05 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 12:14:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:14:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:14:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 12:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:29:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:30:20 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:37:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:43:41 --> Could not find the language line "Home"
ERROR - 2023-07-10 12:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:49:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 12:49:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 12:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:50:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:51:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:53:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-10 12:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:55:20 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-10 12:55:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:56:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:56:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:57:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 12:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 12:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 12:58:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:02:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 13:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:08:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:11:02 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:11:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-07-10 13:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:14:32 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:16:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:16:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:25:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:28:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:29:48 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:29:55 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:29:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:30:35 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:31:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:32:08 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:33:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:14 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:21 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:24 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:25 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:33:28 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:33:36 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 13:37:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 13:39:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 13:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 13:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:42:03 --> Could not find the language line "Other"
ERROR - 2023-07-10 13:42:14 --> Could not find the language line "Other"
ERROR - 2023-07-10 13:42:22 --> Could not find the language line "Other"
ERROR - 2023-07-10 13:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:44:32 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:44:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:44:52 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:45:40 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 13:46:27 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 13:46:44 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:46:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:47:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:47:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:47:44 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:47:58 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:48:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:48:32 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 13:48:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-07-10 13:50:19 --> Could not find the language line "Other"
ERROR - 2023-07-10 13:50:25 --> Could not find the language line "Perfume"
ERROR - 2023-07-10 13:50:36 --> Could not find the language line "Socks"
ERROR - 2023-07-10 13:50:40 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-10 13:51:08 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 13:51:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 13:51:48 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:52:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 13:52:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 13:52:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 13:52:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-10 13:52:10 --> Could not find the language line "Socks"
ERROR - 2023-07-10 13:52:10 --> Could not find the language line "Perfume"
ERROR - 2023-07-10 13:52:10 --> Could not find the language line "Other"
ERROR - 2023-07-10 13:58:47 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 13:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:06:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:07:43 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:08:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:12:36 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:21:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:23:24 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:24:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:24:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:27:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:39:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:39:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:39:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:39:51 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:42:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:42:04 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:42:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 14:42:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '23'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 14:43:33 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:43:42 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 14:43:46 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:44:31 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:44:42 --> Could not find the language line "Socks"
ERROR - 2023-07-10 14:45:02 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:45:48 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:45:49 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:45:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:45:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:46:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 14:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:50:27 --> Could not find the language line "Home"
ERROR - 2023-07-10 14:51:18 --> Could not find the language line "Socks"
ERROR - 2023-07-10 14:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 14:57:03 --> 404 Page Not Found: Env/index
ERROR - 2023-07-10 15:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:02:02 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 15:05:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:14:59 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:30:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:31:32 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 15:35:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:46:34 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:48:27 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:56:33 --> Could not find the language line "Home"
ERROR - 2023-07-10 15:57:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 15:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:00:51 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:06:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:06:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:06:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:06:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:06:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:09:37 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:09:37 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:10:59 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:12:40 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:13:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:27:32 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:29:33 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:29:44 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:29:55 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:30:08 --> Could not find the language line "Perfume"
ERROR - 2023-07-10 16:30:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:30:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:31:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:32:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 16:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:34:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:34:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:34:26 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:34:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:34:51 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:36:56 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:39:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:39:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:41:06 --> Could not find the language line "Home"
ERROR - 2023-07-10 16:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:43:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 16:50:43 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-10 16:55:55 --> Could not find the language line "Home"
ERROR - 2023-07-10 17:00:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 17:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:02:59 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:04:22 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-07-10 17:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:05:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:06:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 17:06:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 17:07:18 --> Could not find the language line "Home"
ERROR - 2023-07-10 17:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:10:30 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:11:13 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:11:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 17:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 17:11:23 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:12:07 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:12:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:13:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:17:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 17:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:18:36 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:18:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:27:27 --> Could not find the language line "Home"
ERROR - 2023-07-10 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 17:44:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:53:28 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 17:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 17:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:01:02 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:02:18 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:03:48 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:05:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:05:53 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:06:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:07:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:10:19 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:11:29 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:18:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:22:39 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:23:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 18:26:54 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:30:36 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:31:09 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:31:10 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:31:13 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-10 18:31:14 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-10 18:31:14 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-10 18:31:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-10 18:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:37:09 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-10 18:37:09 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-10 18:37:09 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-10 18:37:10 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-10 18:41:22 --> Could not find the language line "Bracelets"
ERROR - 2023-07-10 18:43:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-07-10 18:46:06 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-10 18:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:54:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:54:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:54:47 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:54:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:55:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:55:10 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:55:11 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:55:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:55:24 --> Could not find the language line "Home"
ERROR - 2023-07-10 18:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:58:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 18:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:00:14 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:11:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 19:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 19:12:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 19:12:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 19:12:28 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:12:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 19:12:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 19:12:41 --> Could not find the language line "Socks"
ERROR - 2023-07-10 19:13:04 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:13:35 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:15:20 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:19:24 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:19:25 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:27:43 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:32:36 --> 404 Page Not Found: Theme/assets
ERROR - 2023-07-10 19:35:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 19:37:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:41:03 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:51:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 19:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-07-10 19:51:47 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-07-10 19:51:47 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-07-10 19:51:48 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-07-10 19:51:48 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-07-10 19:53:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:54:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-07-10 19:54:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('42', '45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-07-10 19:54:50 --> Could not find the language line "Home"
ERROR - 2023-07-10 19:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 19:56:49 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:00:00 --> Could not find the language line "Socks"
ERROR - 2023-07-10 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 20:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 20:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 20:03:07 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 20:20:24 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 20:22:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 20:24:44 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:31:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-07-10 20:32:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:32:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:32:23 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:39:34 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-07-10 20:44:11 --> Could not find the language line "Home"
ERROR - 2023-07-10 20:47:49 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:00:17 --> Could not find the language line "Home"
ERROR - 2023-07-10 21:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 21:07:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 21:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 21:11:00 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:19:42 --> Could not find the language line "Home"
ERROR - 2023-07-10 21:30:16 --> Could not find the language line "Home"
ERROR - 2023-07-10 21:35:34 --> Could not find the language line "Home"
ERROR - 2023-07-10 21:35:57 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 21:36:41 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:36:50 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:37:03 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:37:10 --> Could not find the language line "Home"
ERROR - 2023-07-10 21:37:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-07-10 21:37:52 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:37:56 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:38:11 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 21:38:22 --> Could not find the language line "Clothing"
ERROR - 2023-07-10 22:00:15 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:12:09 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:12:34 --> 404 Page Not Found: Storage/settings
ERROR - 2023-07-10 22:23:08 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:23:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 22:23:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-07-10 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:30:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:31:13 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:32:35 --> Could not find the language line "Home"
ERROR - 2023-07-10 22:53:18 --> Could not find the language line "Home"
ERROR - 2023-07-10 23:01:33 --> Could not find the language line "Home"
ERROR - 2023-07-10 23:10:41 --> Could not find the language line "Home"
ERROR - 2023-07-10 23:30:19 --> Could not find the language line "Home"
ERROR - 2023-07-10 23:34:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-07-10 23:40:39 --> Could not find the language line "Home"
ERROR - 2023-07-10 23:53:26 --> 404 Page Not Found: Assets/css
