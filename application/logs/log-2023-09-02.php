<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-02 00:00:24 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:04:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 00:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:07:44 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:08:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:10:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 00:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:34:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:36:10 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:37:29 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:38:43 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:43:20 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 00:54:54 --> Could not find the language line "Home"
ERROR - 2023-09-02 00:57:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-09-02 01:06:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 01:11:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 01:19:32 --> Could not find the language line "Home"
ERROR - 2023-09-02 01:19:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 01:30:19 --> Could not find the language line "Home"
ERROR - 2023-09-02 02:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 02:18:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 02:19:14 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-02 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 02:57:37 --> Could not find the language line "Home"
ERROR - 2023-09-02 02:58:25 --> Could not find the language line "Home"
ERROR - 2023-09-02 03:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 03:03:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 03:06:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 03:06:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 03:06:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 03:06:31 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-02 03:06:53 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-02 03:07:14 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-02 03:07:37 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-02 03:08:00 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-02 03:08:22 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-02 03:23:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 03:23:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 03:25:10 --> Could not find the language line "Other"
ERROR - 2023-09-02 03:25:31 --> Could not find the language line "Other"
ERROR - 2023-09-02 03:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 03:57:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 04:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-02 04:16:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 04:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 04:46:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-02 04:53:06 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:00:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:01:34 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:11:18 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:11:36 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:12:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:20:01 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:34:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:36:37 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:39:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:41:24 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:44:35 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:49:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 05:49:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:51:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 05:57:57 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-02 06:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:05:51 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:06:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-02 06:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:09:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 06:15:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 06:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:21:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 06:21:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 06:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:21:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 06:21:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 06:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:30:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 06:33:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:35:52 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:36:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-02 06:36:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-02 06:36:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-02 06:36:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-02 06:36:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-02 06:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-02 06:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-02 06:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-02 06:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-02 06:36:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-02 06:37:07 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:49:23 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:49:26 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:50:02 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:50:06 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:50:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 06:50:27 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:51:57 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:52:09 --> Could not find the language line "Home"
ERROR - 2023-09-02 06:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 06:58:58 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:00:18 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:00:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Dumpsql/index
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Backupsql/index
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Sitesql/index
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Mysqlsql/index
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Userssql/index
ERROR - 2023-09-02 07:08:28 --> 404 Page Not Found: Databasesql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Wp-content/mysql.sql
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: 1sql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Dbdumpsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Dbsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Tempsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Db_backupsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Datasql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Mysqldumpsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Localhostsql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Translatesql/index
ERROR - 2023-09-02 07:08:29 --> 404 Page Not Found: Sqlsql/index
ERROR - 2023-09-02 07:12:31 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:14:25 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:14:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:26:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:27:39 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:31:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 07:32:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:32:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:33:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:35:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:39:30 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:40:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:40:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:40:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:41:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:42:29 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:49:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:52:03 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:52:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:53:01 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:53:32 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-02 07:53:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:54:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:54:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 07:54:50 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:54:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:56:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:58:06 --> Could not find the language line "Home"
ERROR - 2023-09-02 07:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:58:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 07:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:00:09 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:01:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:01:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:01:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:01:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:01:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:01:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-02 08:06:29 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:11:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 08:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:15:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 08:17:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 08:17:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 08:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:19:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:19:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:28:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 08:28:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 08:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:34:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:48:29 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:49:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:49:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:50:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:50:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:53:09 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:53:10 --> Could not find the language line "Home"
ERROR - 2023-09-02 08:53:11 --> 404 Page Not Found: Public/home
ERROR - 2023-09-02 08:53:12 --> 404 Page Not Found: Static/admin
ERROR - 2023-09-02 08:53:12 --> 404 Page Not Found: Public/home
ERROR - 2023-09-02 08:53:12 --> 404 Page Not Found: Public/home
ERROR - 2023-09-02 08:53:13 --> 404 Page Not Found: Static/admin
ERROR - 2023-09-02 08:53:14 --> 404 Page Not Found: Static/admin
ERROR - 2023-09-02 08:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 08:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:00:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:11:19 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:12:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:12:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:14:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:21:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:23:45 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-02 09:23:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:31:58 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:32:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 09:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:34:55 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 09:35:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:35:18 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 09:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:35:27 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 09:35:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:35:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 09:36:03 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 09:36:29 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:36:33 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 09:37:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:37:08 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 09:37:16 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:40:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 09:40:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 09:41:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:51:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 09:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 09:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:02:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:07:27 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:07:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-02 10:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:13:09 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-02 10:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:15:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:15:53 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:16:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:16:46 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:17:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:17:18 --> Could not find the language line "Bracelets"
ERROR - 2023-09-02 10:17:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:17:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:18:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:18:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:19:20 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:19:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:19:34 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:20:10 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:20:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:20:36 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:21:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:21:11 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:21:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 10:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:34:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:47:34 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-02 10:49:33 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:52:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 10:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 10:59:59 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:00:59 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:16:22 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:17:35 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:20:46 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:20:50 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 11:45:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 11:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 11:46:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 11:46:26 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:46:27 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:46:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 11:56:24 --> Could not find the language line "Home"
ERROR - 2023-09-02 11:58:16 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 12:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:18:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-02 12:18:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:22:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:27:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:28:54 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:30:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:33:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:33:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 12:33:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 12:34:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 12:34:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:34:52 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:35:41 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:38:18 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:41:00 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:42:32 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:42:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:43:49 --> Could not find the language line "Home"
ERROR - 2023-09-02 12:48:43 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-09-02 12:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 12:57:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:00:53 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:12:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:13:33 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:13:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 13:14:08 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:14:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 13:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 13:19:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:27:46 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:30:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 13:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:35:05 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:36:41 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:37:30 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 13:39:16 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:41:44 --> Could not find the language line "Home"
ERROR - 2023-09-02 13:45:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 14:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 14:02:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 14:02:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 14:12:33 --> Could not find the language line "Home"
ERROR - 2023-09-02 14:12:33 --> Could not find the language line "Home"
ERROR - 2023-09-02 14:21:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 14:22:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 14:22:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 14:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 14:30:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 14:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 14:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:00:10 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:12:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-02 15:18:25 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:19:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:26:20 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:26:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-02 15:26:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-02 15:26:35 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-02 15:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:42:44 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:43:08 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:43:21 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:43:30 --> Could not find the language line "Socks"
ERROR - 2023-09-02 15:43:33 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:43:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:44:01 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:44:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:44:30 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:44:43 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:44:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 15:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:45:01 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:45:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:45:23 --> Could not find the language line "Socks"
ERROR - 2023-09-02 15:45:25 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:46:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 15:47:01 --> Could not find the language line "Home"
ERROR - 2023-09-02 15:55:54 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-02 16:00:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 16:00:20 --> Could not find the language line "Home"
ERROR - 2023-09-02 16:00:43 --> Could not find the language line "Home"
ERROR - 2023-09-02 16:05:59 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-02 16:09:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-02 16:09:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 16:10:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 16:19:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 17:00:08 --> Could not find the language line "Home"
ERROR - 2023-09-02 17:00:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 17:05:21 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-09-02 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-02 17:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 17:42:03 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:00:54 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:01:43 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-02 18:13:23 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:28 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:37 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:41 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:41 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:41 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:42 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:24:42 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:30:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-02 18:30:18 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:42:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 18:42:02 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:58:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 18:59:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 18:59:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:00:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:03:19 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:03:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-02 19:03:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:04:33 --> 404 Page Not Found: Assets/lib
ERROR - 2023-09-02 19:08:24 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:08:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:08:54 --> Could not find the language line "Socks"
ERROR - 2023-09-02 19:23:26 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:29:54 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:36:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-02 19:36:49 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:39:26 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:42:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:43:16 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:44:02 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:44:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:44:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:46:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:48:24 --> Could not find the language line "Home"
ERROR - 2023-09-02 19:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:51:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:53:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 19:59:31 --> Could not find the language line "Other"
ERROR - 2023-09-02 20:00:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:00:34 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:04:09 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:04:10 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-09-02 20:04:10 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-09-02 20:04:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:04:11 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-09-02 20:04:12 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-09-02 20:04:12 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-09-02 20:04:12 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-09-02 20:04:12 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-09-02 20:04:13 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-09-02 20:04:13 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-09-02 20:04:13 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-09-02 20:04:13 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-09-02 20:04:14 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-09-02 20:04:14 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-09-02 20:04:14 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-09-02 20:04:14 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-09-02 20:04:14 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-09-02 20:04:15 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-09-02 20:06:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:06:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:06:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:06:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:06:15 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:08:51 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:18:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:22:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:24:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 20:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:42:53 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:50:46 --> Could not find the language line "Socks"
ERROR - 2023-09-02 20:54:04 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:57:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 20:59:20 --> Could not find the language line "Socks"
ERROR - 2023-09-02 21:00:23 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:15:41 --> Could not find the language line "Other"
ERROR - 2023-09-02 21:17:34 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:17:34 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:17:35 --> 404 Page Not Found: Blog/index
ERROR - 2023-09-02 21:17:36 --> 404 Page Not Found: Blog/index
ERROR - 2023-09-02 21:17:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 21:17:36 --> 404 Page Not Found: Wp/index
ERROR - 2023-09-02 21:17:37 --> 404 Page Not Found: Wp/index
ERROR - 2023-09-02 21:17:37 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-09-02 21:17:38 --> 404 Page Not Found: Wordpress/index
ERROR - 2023-09-02 21:17:39 --> 404 Page Not Found: New/index
ERROR - 2023-09-02 21:17:39 --> 404 Page Not Found: New/index
ERROR - 2023-09-02 21:17:42 --> 404 Page Not Found: OLD/index
ERROR - 2023-09-02 21:17:43 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-02 21:17:43 --> 404 Page Not Found: OLD/index
ERROR - 2023-09-02 21:17:44 --> 404 Page Not Found: Bk/index
ERROR - 2023-09-02 21:17:44 --> 404 Page Not Found: Backup/index
ERROR - 2023-09-02 21:17:46 --> 404 Page Not Found: Bk/index
ERROR - 2023-09-02 21:30:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:30:23 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:44:27 --> Could not find the language line "Home"
ERROR - 2023-09-02 21:55:55 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:00:12 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:01:47 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:07:40 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:25:03 --> 404 Page Not Found: Wpphp/index
ERROR - 2023-09-02 22:30:14 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:30:18 --> 404 Page Not Found: Wp-admin/index
ERROR - 2023-09-02 22:51:46 --> 404 Page Not Found: Aws/credentials.xml
ERROR - 2023-09-02 22:58:17 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:58:26 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-02 22:58:32 --> Could not find the language line "Home"
ERROR - 2023-09-02 22:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 22:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 23:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-02 23:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 23:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 23:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-02 23:07:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-09-02 23:29:45 --> Could not find the language line "Clothing"
ERROR - 2023-09-02 23:30:18 --> Could not find the language line "Home"
