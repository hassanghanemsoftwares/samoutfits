<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-10-13 00:12:01 --> Could not find the language line "Home"
ERROR - 2024-10-13 00:31:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 00:42:08 --> Could not find the language line "Home"
ERROR - 2024-10-13 01:11:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 01:41:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 01:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 01:55:18 --> Could not find the language line "Home"
ERROR - 2024-10-13 02:11:56 --> Could not find the language line "Home"
ERROR - 2024-10-13 02:18:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 02:27:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-13 02:42:07 --> Could not find the language line "Home"
ERROR - 2024-10-13 02:55:35 --> Could not find the language line "products"
ERROR - 2024-10-13 03:11:57 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:12:36 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:13:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 03:13:53 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:14:08 --> Could not find the language line "Clothing"
ERROR - 2024-10-13 03:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 03:17:42 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:23:30 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-10-13 03:27:13 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:36:32 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:38:55 --> Could not find the language line "Home"
ERROR - 2024-10-13 03:41:57 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:11:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:16:09 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 04:26:12 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:36:21 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:38:32 --> Could not find the language line "Home"
ERROR - 2024-10-13 04:41:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 05:11:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 05:24:50 --> Could not find the language line "Clothing"
ERROR - 2024-10-13 05:28:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 05:41:57 --> Could not find the language line "Home"
ERROR - 2024-10-13 06:11:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 06:16:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 06:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 06:41:57 --> Could not find the language line "Home"
ERROR - 2024-10-13 07:12:00 --> Could not find the language line "Home"
ERROR - 2024-10-13 07:17:06 --> Could not find the language line "Home"
ERROR - 2024-10-13 07:40:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 07:41:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 08:11:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 08:22:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 08:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 08:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 08:25:55 --> Could not find the language line "Home"
ERROR - 2024-10-13 08:41:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 08:43:41 --> Could not find the language line "Home"
ERROR - 2024-10-13 08:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-10-13 09:11:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 09:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 09:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 09:31:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-10-13 09:42:00 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:06:34 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:12:01 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:26:14 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:28:02 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:38:40 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:41:59 --> Could not find the language line "Home"
ERROR - 2024-10-13 10:42:15 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:12:01 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 11:29:04 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:32:27 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:42:01 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:52:25 --> Could not find the language line "Home"
ERROR - 2024-10-13 11:59:06 --> Could not find the language line "Home"
ERROR - 2024-10-13 12:04:33 --> Could not find the language line "Home"
ERROR - 2024-10-13 12:12:03 --> Could not find the language line "Home"
ERROR - 2024-10-13 12:36:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-13 12:36:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-13 12:36:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-13 12:36:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-10-13 12:42:02 --> Could not find the language line "Home"
ERROR - 2024-10-13 13:12:02 --> Could not find the language line "Home"
ERROR - 2024-10-13 13:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 13:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 13:31:04 --> Could not find the language line "Home"
ERROR - 2024-10-13 13:42:02 --> Could not find the language line "Home"
ERROR - 2024-10-13 13:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 13:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 14:12:04 --> Could not find the language line "Home"
ERROR - 2024-10-13 14:36:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 14:42:02 --> Could not find the language line "Home"
ERROR - 2024-10-13 15:12:03 --> Could not find the language line "Home"
ERROR - 2024-10-13 15:19:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 15:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 15:42:03 --> Could not find the language line "Home"
ERROR - 2024-10-13 15:42:34 --> Could not find the language line "products"
ERROR - 2024-10-13 16:12:04 --> Could not find the language line "Home"
ERROR - 2024-10-13 16:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 16:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 16:40:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 16:42:03 --> Could not find the language line "Home"
ERROR - 2024-10-13 16:53:39 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:12:04 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:12:56 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:13:19 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:13:42 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:13:55 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:14:39 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:15:11 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:15:13 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:15:15 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:15:16 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:15:20 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:15:35 --> Could not find the language line "Perfume"
ERROR - 2024-10-13 17:15:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:15:41 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:17:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:28:37 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:28:56 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:30:01 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 17:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 17:31:58 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:42:07 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:55:11 --> Could not find the language line "Home"
ERROR - 2024-10-13 17:58:14 --> Could not find the language line "Home"
ERROR - 2024-10-13 18:03:45 --> Could not find the language line "Home"
ERROR - 2024-10-13 18:05:17 --> Could not find the language line "Home"
ERROR - 2024-10-13 18:07:15 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-10-13 18:12:05 --> Could not find the language line "Home"
ERROR - 2024-10-13 18:19:14 --> 404 Page Not Found: Storage/settings
ERROR - 2024-10-13 18:19:32 --> Could not find the language line "Clothing"
ERROR - 2024-10-13 18:42:05 --> Could not find the language line "Home"
ERROR - 2024-10-13 18:58:40 --> Could not find the language line "Home"
ERROR - 2024-10-13 19:06:38 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2024-10-13 19:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 19:12:05 --> Could not find the language line "Home"
ERROR - 2024-10-13 19:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 19:32:38 --> Could not find the language line "Home"
ERROR - 2024-10-13 19:33:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 19:42:09 --> Could not find the language line "Home"
ERROR - 2024-10-13 19:43:59 --> Could not find the language line "Bracelets"
ERROR - 2024-10-13 20:12:06 --> Could not find the language line "Home"
ERROR - 2024-10-13 20:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 20:42:06 --> Could not find the language line "Home"
ERROR - 2024-10-13 20:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 21:05:40 --> Could not find the language line "Home"
ERROR - 2024-10-13 21:12:08 --> Could not find the language line "Home"
ERROR - 2024-10-13 21:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 21:33:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-10-13 21:42:07 --> Could not find the language line "Home"
ERROR - 2024-10-13 21:50:35 --> Could not find the language line "Clothing"
ERROR - 2024-10-13 22:12:10 --> Could not find the language line "Home"
ERROR - 2024-10-13 22:15:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-10-13 22:42:11 --> Could not find the language line "Home"
ERROR - 2024-10-13 22:45:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-10-13 22:45:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-10-13 22:45:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-10-13 22:54:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 23:12:10 --> Could not find the language line "Home"
ERROR - 2024-10-13 23:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-10-13 23:42:17 --> Could not find the language line "Home"
