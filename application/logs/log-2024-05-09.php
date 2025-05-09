<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-05-09 00:04:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 00:07:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 00:07:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 00:07:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 00:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:08:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:12:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:12:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:16:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-09 00:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-09 00:16:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 00:18:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 00:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:20:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:31:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 00:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:31:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 00:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:33:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:33:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:37:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:41:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:48:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 00:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:54:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:54:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 00:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 00:54:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:04:43 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 01:05:40 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 01:05:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 01:06:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-09 01:06:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-09 01:06:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 01:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:10:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:10:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:12:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 01:12:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 01:12:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 01:18:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 01:19:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:19:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:20:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 01:23:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:27:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 01:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:36:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:40:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:43:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 01:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:44:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 01:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 01:48:43 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 01:52:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 01:52:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 01:52:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 01:56:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-09 01:56:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-09 01:56:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 02:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:13:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:13:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:13:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 02:14:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 02:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:17:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:17:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:18:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 02:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 02:18:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 02:18:47 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 02:21:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:21:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:21:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:21:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:25:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:25:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:25:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:25:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 02:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 02:25:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 02:28:07 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 02:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:29:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:29:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:30:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 02:30:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 02:30:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 02:32:38 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 02:33:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 02:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:35:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 02:35:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 02:35:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 02:38:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:38:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 02:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:48:50 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 02:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:50:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 02:59:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 02:59:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 02:59:16 --> 404 Page Not Found: Products/index
ERROR - 2024-05-09 03:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:09:26 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 03:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:12:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 03:12:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Hats')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 03:12:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 03:18:45 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 03:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:27:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-09 03:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:28:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:44:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:48:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 03:55:15 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 03:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 03:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:02:01 --> Could not find the language line "Other"
ERROR - 2024-05-09 04:05:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:14:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 04:15:29 --> Could not find the language line "Socks"
ERROR - 2024-05-09 04:18:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 04:19:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 04:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:43:30 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 04:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:48:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 04:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:53:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 04:53:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 04:53:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 04:55:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 04:56:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 04:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 04:56:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 05:02:34 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:04:24 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:06:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:08:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:08:08 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:08:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:12:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 05:12:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 05:12:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 05:18:46 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:21:42 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:21:44 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-05-09 05:23:36 --> Could not find the language line "Home"
ERROR - 2024-05-09 05:23:37 --> Could not find the language line "Home"
ERROR - 2024-05-09 05:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:27:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 05:27:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 05:27:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 05:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:33:29 --> Could not find the language line "Home"
ERROR - 2024-05-09 05:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:41:37 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 05:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:48:48 --> Could not find the language line "Home"
ERROR - 2024-05-09 05:54:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 05:58:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:04:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:05:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 06:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 06:05:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 06:08:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:09:02 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-09 06:11:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 06:11:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 06:11:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 06:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:13:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:14:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:16:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:18:51 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:19:06 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 06:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:19:09 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 06:25:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 06:25:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 06:25:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 06:26:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 06:26:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 06:26:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 06:27:29 --> Could not find the language line "Other"
ERROR - 2024-05-09 06:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:29:19 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:44:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 06:45:49 --> Could not find the language line "Perfume"
ERROR - 2024-05-09 06:45:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 06:45:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 06:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 06:48:46 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:49:05 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:49:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 06:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:04:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:09:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:09:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:09:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:09:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:11:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 07:11:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 07:12:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:12:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:13:23 --> Could not find the language line "Home"
ERROR - 2024-05-09 07:18:49 --> Could not find the language line "Home"
ERROR - 2024-05-09 07:21:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 07:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:21:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 07:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:23:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:25:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:26:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:29:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:29:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:29:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:29:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 07:34:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 07:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:35:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:38:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:38:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Hats')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:38:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:39:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:39:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:39:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:39:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 07:39:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:41:09 --> Could not find the language line "Home"
ERROR - 2024-05-09 07:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:44:30 --> Could not find the language line "products"
ERROR - 2024-05-09 07:45:09 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-09 07:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:46:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 07:46:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 07:48:47 --> Could not find the language line "Home"
ERROR - 2024-05-09 07:49:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 07:49:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 07:49:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 07:50:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 07:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:55:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 07:55:28 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 07:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:04:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:08:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:08:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:10:26 --> Could not find the language line "products"
ERROR - 2024-05-09 08:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:11:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 08:12:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 08:15:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:15:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:16:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 08:16:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 08:18:49 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:20:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:20:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 08:21:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:21:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:22:45 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:25:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:25:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:27:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:27:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:27:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:27:15 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:27:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:27:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:33:23 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:35:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:35:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:35:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:36:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:37:52 --> Could not find the language line "products"
ERROR - 2024-05-09 08:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:45:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:45:12 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-09 08:45:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 08:48:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 08:48:49 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:53:09 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:53:21 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:54:29 --> Could not find the language line "Home"
ERROR - 2024-05-09 08:57:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 08:57:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 08:57:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 08:57:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 08:58:38 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:02:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 09:02:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 09:02:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:06:18 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:07:16 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:07:17 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:07:23 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:09:36 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:09:59 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 09:10:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 09:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 09:10:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:11:01 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:11:20 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:11:30 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-05-09 09:12:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 09:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:18:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-09 09:18:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-05-09 09:18:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:18:50 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:20:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 09:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:26:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 09:28:44 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 09:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:31:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:31:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 09:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:35:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 09:36:19 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:39:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 09:39:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 09:39:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:39:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 09:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 09:39:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:40:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 09:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 09:40:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 09:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:47:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:47:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:47:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 09:48:49 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:55:15 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:58:14 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:58:22 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:59:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:59:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 09:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 09:59:51 --> Could not find the language line "Home"
ERROR - 2024-05-09 09:59:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:00:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:00:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 10:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:08:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:08:29 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 10:09:57 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 10:09:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Wallets')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 10:09:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 10:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:10:43 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:10:43 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:12:20 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:13:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 10:13:13 --> Could not find the language line "products"
ERROR - 2024-05-09 10:14:22 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:14:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:14:33 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:14:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:14:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:14:51 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:20 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:24 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:32 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 10:16:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:16:40 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:17:07 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:17:13 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:17:21 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:18:02 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:18:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 10:18:51 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:18:56 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:19:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:19:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:20:05 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:20:31 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:20:43 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:20:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 10:20:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 10:20:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 10:20:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:21:00 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:21:11 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:21:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:22:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:23:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 10:23:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:25:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:25:50 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:29:01 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:29:09 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:29:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 10:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:30:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 10:30:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:30:34 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:31:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:31:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:31:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:34:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:36:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:37:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 10:37:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 10:37:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 10:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:38:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:39:32 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 10:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:40:31 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:43:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 10:43:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:44:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:47:24 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:47:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 10:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:48:50 --> Could not find the language line "Home"
ERROR - 2024-05-09 10:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:49:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:50:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:50:26 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:55:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:56:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:57:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:57:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:57:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 10:57:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 10:57:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:59:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 10:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:59:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 10:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 10:59:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 10:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 10:59:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:00:03 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:00:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:01:34 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:01:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:01:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:01:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:02:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:02:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:04:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:05:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:09:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:11:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:11:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Other')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:11:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:12:17 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:14:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:14:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:18:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:18:50 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:20:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:21:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:22:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:22:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:22:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:22:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:22:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:23:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:23:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:23:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:23:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:25:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:25:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:26:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:27:48 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:27:48 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:27:48 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:28:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:29:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:29:57 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:30:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:34:31 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:36:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:36:33 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:37:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:39:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:40:05 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:40:35 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:41:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:41:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:43:07 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:43:38 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:44:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:44:16 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 11:44:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:44:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:45:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:45:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:45:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:45:39 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:46:10 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:47:29 --> Could not find the language line "products"
ERROR - 2024-05-09 11:48:50 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:49:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 11:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:51:26 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:51:31 --> Could not find the language line "Home"
ERROR - 2024-05-09 11:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:52:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:55:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:55:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 11:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:56:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 11:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:59:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 11:59:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 11:59:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 11:59:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 11:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:00:27 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 12:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:02:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:04:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:06:29 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:06:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:06:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 12:06:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 12:06:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 12:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:11:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 12:11:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 12:11:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 12:11:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 12:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:12:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 12:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:17:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:18:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:19:37 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:19:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:20:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 12:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:20:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:21:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:25:10 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:25:10 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:25:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 12:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:28:29 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 12:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:30:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:30:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 12:30:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 12:30:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 12:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:33:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:36:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:36:30 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:40:06 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 12:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:40:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 12:42:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:45:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:45:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:46:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:47:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:48:51 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:50:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:51:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:54:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 12:54:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 12:54:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 12:54:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 12:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:55:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:57:22 --> Could not find the language line "Home"
ERROR - 2024-05-09 12:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 12:58:21 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 12:58:27 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 12:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:03:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:03:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:03:58 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:06:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:09:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:13:03 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:13:53 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-09 13:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:16:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:17:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:18:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:18:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:18:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:19:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:19:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:20:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 13:21:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:24:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:25:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 13:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:26:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:35:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 13:35:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 13:35:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 13:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:36:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 13:36:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 13:36:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 13:36:46 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:38:10 --> Could not find the language line "users"
ERROR - 2024-05-09 13:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:40:03 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-09 13:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:40:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:42:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:42:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:44:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 13:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 13:44:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 13:44:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 13:44:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 13:44:43 --> Could not find the language line "Disclaimer"
ERROR - 2024-05-09 13:44:51 --> Could not find the language line "Other"
ERROR - 2024-05-09 13:44:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:45:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 13:45:17 --> Could not find the language line "Other"
ERROR - 2024-05-09 13:45:23 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:45:36 --> Could not find the language line "Other"
ERROR - 2024-05-09 13:45:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:45:48 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:45:50 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:46:37 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:47:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 13:47:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:47:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:48:00 --> Could not find the language line "Other"
ERROR - 2024-05-09 13:48:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:48:10 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:48:14 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:48:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:48:51 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:49:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 13:49:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 13:49:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 13:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:49:46 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:49:47 --> Could not find the language line "Other"
ERROR - 2024-05-09 13:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:51:20 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 13:51:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-05-09 13:51:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:52:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 13:52:42 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 13:52:45 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 13:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:55:15 --> Could not find the language line "Home"
ERROR - 2024-05-09 13:55:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 13:59:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 13:59:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 13:59:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 14:00:37 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:05:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 14:05:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 14:05:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 14:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:06:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:11:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 14:13:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:13:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:15:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:16:58 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 14:17:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 14:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:18:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:19:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:20:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:24:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:24:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 14:26:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:27:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:27:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:30:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:30:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 14:31:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 14:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:34:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:35:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:35:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:35:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:35:54 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:35:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:36:02 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:37:11 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 14:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:37:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 14:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 14:37:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 14:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:40:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:45:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:45:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:47:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 14:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 14:47:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 14:47:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:47:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:48:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:48:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 14:48:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 14:48:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 14:48:54 --> Could not find the language line "Home"
ERROR - 2024-05-09 14:50:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:51:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:51:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:51:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:51:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:53:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:54:32 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 14:56:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:56:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:57:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:57:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:58:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:58:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:58:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 14:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:59:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 14:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:02:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:04:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:04:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:04:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:05:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:19 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:05:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:26 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 15:05:49 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:05:53 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:05:57 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:06:03 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:06:08 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 15:06:35 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:06:41 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:06:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:06:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:06:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:06:59 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:07:05 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:07:09 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:07:25 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:08:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:08:18 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 15:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:08:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:08:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:11:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:11:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:12:40 --> Could not find the language line "products"
ERROR - 2024-05-09 15:13:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:14:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:14:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:14:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:16:07 --> Could not find the language line "products"
ERROR - 2024-05-09 15:18:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:19:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:21:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:21:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:21:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:22:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:22:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:22:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:22:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:24:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 15:24:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 15:24:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 15:24:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:26:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 15:28:01 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 15:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 15:28:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 15:30:41 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 15:32:48 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:33:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 15:34:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-05-09 15:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-09 15:34:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 15:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:35:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:36:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 15:36:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:36:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:36:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:36:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 15:36:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 15:36:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 15:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:37:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:37:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:37:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:39:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 15:40:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:40:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:40:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:40:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:41:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:41:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 15:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:43:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 15:44:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 15:45:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:46:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 15:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 15:46:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 15:48:11 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2024-05-09 15:48:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 15:48:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 15:48:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 15:48:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:49:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:51:07 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:51:40 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 15:52:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:52:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:52:29 --> Could not find the language line "Home"
ERROR - 2024-05-09 15:52:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 15:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 15:59:31 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:01:15 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:08:44 --> Could not find the language line "Other"
ERROR - 2024-05-09 16:09:45 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:11:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 16:15:28 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:16:19 --> Could not find the language line "products"
ERROR - 2024-05-09 16:16:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 16:16:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 16:16:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 16:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:18:54 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:20:43 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 16:22:00 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:23:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:26:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 16:26:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 16:26:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 16:27:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 16:28:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 16:28:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 16:28:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 16:30:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-05-09 16:35:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 16:37:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 16:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 16:37:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 16:37:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-05-09 16:38:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:39:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 16:40:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 16:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:48:53 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:51:29 --> Could not find the language line "Home"
ERROR - 2024-05-09 16:51:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:53:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 16:53:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 16:53:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 16:58:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 16:59:28 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:00:07 --> Could not find the language line "products"
ERROR - 2024-05-09 17:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:08:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 17:08:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 17:08:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 17:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:13:46 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 17:13:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 17:13:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 17:16:43 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:18:54 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:24:20 --> Could not find the language line "Other"
ERROR - 2024-05-09 17:24:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 17:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 17:24:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 17:26:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:28:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 17:28:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 17:28:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 17:28:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 17:28:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 17:28:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 17:29:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 17:30:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:33:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:34:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:34:34 --> Could not find the language line "Perfume"
ERROR - 2024-05-09 17:34:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:34:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:35:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:36:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:36:45 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 17:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:36:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:37:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:37:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:37:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 17:37:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 17:37:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:38:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:38:54 --> Could not find the language line "Other"
ERROR - 2024-05-09 17:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:38:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:39:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-05-09 17:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:41:04 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 17:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:41:41 --> Could not find the language line "Other"
ERROR - 2024-05-09 17:42:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:43:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:43:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 17:46:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:46:50 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 17:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:47:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 17:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-05-09 17:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:48:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:49:02 --> 404 Page Not Found: Images/login5.jpg
ERROR - 2024-05-09 17:49:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 17:49:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 17:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:50:26 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 17:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:51:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:54:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:54:59 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:55:12 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 17:55:42 --> Could not find the language line "Home"
ERROR - 2024-05-09 17:56:34 --> Could not find the language line "Clothing"
ERROR - 2024-05-09 17:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 17:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:00:26 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-09 18:00:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:00:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:01:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 18:02:06 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:03:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 18:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:05:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:06:25 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:08:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:18:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:19:56 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:20:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 18:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 18:20:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 18:23:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 18:23:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 18:23:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 18:27:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:30:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:33:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 18:33:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 18:45:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 18:45:25 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:46:22 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:46:27 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:47:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 18:47:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 18:47:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 18:48:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 18:49:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 18:50:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 18:50:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 18:50:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 18:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:02:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:02:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:02:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:02:24 --> Could not find the language line "Home"
ERROR - 2024-05-09 19:03:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:03:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:03:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:08:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:08:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Clothing'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:08:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:14:24 --> Could not find the language line "Home"
ERROR - 2024-05-09 19:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:16:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:18:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 19:19:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:19:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:19:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:19:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:19:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:19:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:40:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 19:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:45:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 19:48:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 19:50:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:50:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:51:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 19:52:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 19:52:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 19:52:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 19:56:18 --> Could not find the language line "Home"
ERROR - 2024-05-09 20:07:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 20:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 20:07:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 20:08:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 20:14:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 20:17:59 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-05-09 20:18:57 --> Could not find the language line "Home"
ERROR - 2024-05-09 20:24:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 20:24:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 20:24:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 20:36:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 20:36:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 20:36:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 20:36:54 --> Could not find the language line "Home"
ERROR - 2024-05-09 20:37:37 --> Could not find the language line "Other"
ERROR - 2024-05-09 20:42:18 --> Could not find the language line "Home"
ERROR - 2024-05-09 20:42:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 20:46:32 --> Could not find the language line "Other"
ERROR - 2024-05-09 20:48:56 --> Could not find the language line "Home"
ERROR - 2024-05-09 20:53:18 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-09 20:54:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 20:57:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 20:57:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 20:57:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:00:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:00:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:00:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:00:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:00:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:00:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:00:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:00:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:00:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:03:36 --> Could not find the language line "Other"
ERROR - 2024-05-09 21:03:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:03:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:04:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:04:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:04:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:06:16 --> Could not find the language line "Other"
ERROR - 2024-05-09 21:08:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:08:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:08:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:18:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:18:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:18:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:18:59 --> Could not find the language line "Home"
ERROR - 2024-05-09 21:22:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 21:23:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:23:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:23:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 21:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 21:27:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 21:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:31:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:31:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:36:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:36:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:36:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:37:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:37:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:43:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 21:44:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:44:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:44:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:48:59 --> Could not find the language line "Home"
ERROR - 2024-05-09 21:53:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:53:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:54:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 21:55:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:55:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:55:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:55:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:55:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:55:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:55:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:55:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:57:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 21:58:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:58:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:58:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:59:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 21:59:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 21:59:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 21:59:42 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:02:05 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:02:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:02:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:02:59 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:02:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:04:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:04:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:04:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:06:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:06:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:08:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:08:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:08:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:08:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 22:09:16 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:09:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:09:22 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:13:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 22:15:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:15:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:15:34 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:16:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:16:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:16:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:16:32 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:16:40 --> Could not find the language line "Bracelets"
ERROR - 2024-05-09 22:16:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:16:52 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:16:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-05-09 22:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:17:23 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:18:09 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:18:59 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:19:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:19:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:21:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:21:38 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:21:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:24:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:26:06 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:26:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:26:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Other'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:26:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:27:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:29:12 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:29:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:29:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:29:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:30:30 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:31:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-05-09 22:32:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:32:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:32:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:34:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:34:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:34:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:36:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:36:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:36:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:37:31 --> Could not find the language line "products"
ERROR - 2024-05-09 22:37:38 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 22:40:23 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:40:41 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:40:55 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:40:56 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:43:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-05-09 22:43:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:43:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:43:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:44:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 22:46:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:46:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:46:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 22:47:40 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 22:49:01 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:51:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:51:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:51:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:51:16 --> Could not find the language line "Perfume"
ERROR - 2024-05-09 22:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:51:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 22:52:03 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 22:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 22:52:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 22:52:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 22:54:27 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:56:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:56:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:56:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:57:03 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:57:56 --> Could not find the language line "Home"
ERROR - 2024-05-09 22:58:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 22:59:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 22:59:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Shoes')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 22:59:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 22:59:28 --> Could not find the language line "Other"
ERROR - 2024-05-09 22:59:45 --> Could not find the language line "Home"
ERROR - 2024-05-09 23:03:11 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:03:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:03:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:04:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:04:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:04:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:05:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:07:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:07:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:07:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 23:08:06 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:09:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:09:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:09:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:15:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:19:03 --> Could not find the language line "Home"
ERROR - 2024-05-09 23:22:00 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:24:54 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:25:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:25:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:25:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:25:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:25:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:25:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 23:26:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:26:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:26:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:29:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:29:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:29:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:29:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:29:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:29:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:30:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:30:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:30:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:31:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:32:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:32:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:32:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:33:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:33:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:33:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:34:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:35:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:35:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:35:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:37:14 --> Could not find the language line "products"
ERROR - 2024-05-09 23:38:45 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:38:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:38:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 23:39:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:39:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:39:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:40:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('users')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:40:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:40:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:40:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:40:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:40:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:40:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:41:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:41:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:43:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:44:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-05-09 23:46:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:47:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:48:16 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 23:48:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:48:55 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:48:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-05-09 23:49:01 --> Could not find the language line "Home"
ERROR - 2024-05-09 23:49:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:52:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:52:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:52:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:53:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:53:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:53:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:54:02 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:54:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:54:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:54:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-05-09 23:56:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 23:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 23:56:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-05-09 23:57:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-05-09 23:58:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-05-09 23:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'users'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-05-09 23:58:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
