<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-16 00:06:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 00:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 00:07:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:07:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:10:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:12:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:15:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:17:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 00:20:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 00:38:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 01:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 01:03:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:16:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 01:19:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 01:30:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 01:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:37:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 01:45:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-16 01:45:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 01:45:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:46:24 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 01:54:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 01:57:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 01:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 01:58:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:03:26 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:03:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 02:03:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:27:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:33:58 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:45:55 --> Could not find the language line "Home"
ERROR - 2023-10-16 02:59:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 03:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 03:10:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 03:12:26 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-16 03:19:13 --> Could not find the language line "Home"
ERROR - 2023-10-16 03:21:56 --> Could not find the language line "Socks"
ERROR - 2023-10-16 03:32:54 --> Could not find the language line "Home"
ERROR - 2023-10-16 03:51:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 03:51:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 03:57:06 --> Could not find the language line "Other"
ERROR - 2023-10-16 04:04:03 --> Could not find the language line "Home"
ERROR - 2023-10-16 04:06:31 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-10-16 04:16:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 04:17:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 04:17:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 04:18:30 --> Could not find the language line "Socks"
ERROR - 2023-10-16 04:18:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-16 04:18:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-16 04:19:37 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-16 04:19:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-16 04:23:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 04:23:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:24:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 04:24:55 --> Could not find the language line "Home"
ERROR - 2023-10-16 04:25:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:25:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:25:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:26:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 04:40:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 05:04:05 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:11:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 05:14:02 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:14:02 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:16:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 05:18:30 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:18:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 05:18:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:28:03 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:34:03 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:42:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 05:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 05:43:31 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:43:36 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 05:43:47 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 05:43:59 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 05:44:01 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:44:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 05:45:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 05:49:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 05:49:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-16 05:53:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 05:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 06:00:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:05:42 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:05:53 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:06:27 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:07:39 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:07:51 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:08:05 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:08:06 --> Could not find the language line "Socks"
ERROR - 2023-10-16 06:08:08 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:08:15 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:08:50 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:09:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:09:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:22:16 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:25:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:26:38 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:26:51 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:33:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:33:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 06:33:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 06:35:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 06:41:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:44:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:44:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:45:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:46:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:46:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 06:47:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 06:47:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:50:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 06:51:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:53:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 06:53:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 06:57:03 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:00:09 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:02:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 07:06:00 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:04 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:07:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:08:15 --> Could not find the language line "Bracelets"
ERROR - 2023-10-16 07:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:12:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:14:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:16:03 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:16:44 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:20:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:27:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:28:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 07:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 07:28:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 07:40:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:46:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:48:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 07:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:50:31 --> Could not find the language line "Home"
ERROR - 2023-10-16 07:56:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 07:57:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 08:05:02 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:05:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:11:06 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:11:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:16:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:16:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 08:16:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 08:16:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 08:18:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 08:21:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:21:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 08:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:25:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:38:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 08:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` >= '11'
AND `items`.`price` <= '16'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 08:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 08:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:49:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 08:49:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 08:50:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:58:44 --> Could not find the language line "Home"
ERROR - 2023-10-16 08:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 08:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:00:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:01:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:01:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:02:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:03:44 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:03:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:07:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:10:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:11:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 09:24:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:25:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 09:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:28:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 09:29:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 09:31:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 09:31:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 09:40:35 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:42:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 09:42:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 09:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:42:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:46:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:51:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 09:51:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:54:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:55:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:55:47 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:55:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:55:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:55:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 09:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 09:57:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 10:09:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:18:35 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:18:45 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:18:45 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-16 10:19:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:19:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:19:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 10:19:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 10:19:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 10:20:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 10:20:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:20:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:20:38 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:21:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:21:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-16 10:21:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:28:13 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:28:13 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:28:52 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:28:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:29:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:29:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:32:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:32:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:33:17 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:34:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:35:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:36:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:41:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:45:58 --> Could not find the language line "Home"
ERROR - 2023-10-16 10:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 10:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 11:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 11:05:41 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:10:25 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:11:50 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:18:05 --> Could not find the language line "Hair%20"
ERROR - 2023-10-16 11:25:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:32:43 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:34:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 11:34:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 11:41:11 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:42:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 11:45:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 11:45:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 11:45:58 --> Could not find the language line "Other"
ERROR - 2023-10-16 11:49:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:54:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 11:55:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-16 11:55:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:55:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 11:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 11:58:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 11:58:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:11:51 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:13:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:16:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:20:44 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:22:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 12:22:14 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:24:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:26:21 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:31:47 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-16 12:32:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:32:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:34:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 12:38:37 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:38:45 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:42:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 12:43:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 12:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:44:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:45:04 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:45:16 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:45:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:48:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:50:17 --> Could not find the language line "Perfume"
ERROR - 2023-10-16 12:50:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 12:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 12:58:25 --> Could not find the language line "Home"
ERROR - 2023-10-16 12:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:04:53 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:05:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:05:22 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-16 13:05:22 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-16 13:05:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-16 13:05:23 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-16 13:05:24 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-16 13:06:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:10:30 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:16:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:18:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:21:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:24:06 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:25:18 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:25:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:32:42 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:33:54 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:33:56 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-16 13:33:56 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-16 13:33:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:33:57 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-16 13:33:58 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-16 13:33:58 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-16 13:33:59 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-16 13:33:59 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-16 13:33:59 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-16 13:34:00 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-16 13:34:00 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-16 13:34:01 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:34:01 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-16 13:34:01 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-16 13:34:01 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-16 13:34:02 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-16 13:34:02 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-16 13:34:03 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-16 13:34:03 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-16 13:34:03 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-16 13:35:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:35:29 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-16 13:36:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:36:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:36:11 --> 404 Page Not Found: Vscode/sftp.json
ERROR - 2023-10-16 13:36:11 --> 404 Page Not Found: About/index
ERROR - 2023-10-16 13:36:12 --> 404 Page Not Found: Debug/default
ERROR - 2023-10-16 13:36:12 --> 404 Page Not Found: V2/_catalog
ERROR - 2023-10-16 13:36:13 --> 404 Page Not Found: Ecp/Current
ERROR - 2023-10-16 13:36:13 --> 404 Page Not Found: Server-status/index
ERROR - 2023-10-16 13:36:14 --> 404 Page Not Found: Loginaction/index
ERROR - 2023-10-16 13:36:14 --> 404 Page Not Found: _all_dbs/index
ERROR - 2023-10-16 13:36:14 --> 404 Page Not Found: DS_Store/index
ERROR - 2023-10-16 13:36:15 --> 404 Page Not Found: Env/index
ERROR - 2023-10-16 13:36:15 --> 404 Page Not Found: Git/config
ERROR - 2023-10-16 13:36:16 --> 404 Page Not Found: Configjson/index
ERROR - 2023-10-16 13:36:17 --> 404 Page Not Found: Telescope/requests
ERROR - 2023-10-16 13:36:17 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:36:43 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:37:24 --> 404 Page Not Found: Git/config
ERROR - 2023-10-16 13:37:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:38:29 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:38:52 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:39:10 --> Could not find the language line "Hair%20"
ERROR - 2023-10-16 13:40:05 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:40:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 13:40:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 13:40:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 13:41:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:46:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 13:46:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 13:46:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 13:48:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:49:15 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:52:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 13:52:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:53:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:54:30 --> Could not find the language line "Home"
ERROR - 2023-10-16 13:54:32 --> 404 Page Not Found: Assets/js
ERROR - 2023-10-16 13:57:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 13:59:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 13:59:24 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:03:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 14:05:18 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:05:42 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:20:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:23:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:24:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:27:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 14:28:37 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:38:55 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:44:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:47:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:52:42 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:52:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:53:00 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:53:29 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:53:49 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:54:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 14:55:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 14:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 14:55:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 14:57:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:58:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 14:59:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:02:40 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:03:00 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:03:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:03:16 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:03:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:04:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:04:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:06:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:12:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:13:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 15:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 15:13:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 15:14:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:15:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:16:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:17:06 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:17:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:19:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:22:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:32:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:33:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:34:10 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-16 15:34:10 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-16 15:34:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-16 15:34:11 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-16 15:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:35:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:35:40 --> Could not find the language line "Socks"
ERROR - 2023-10-16 15:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:36:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 15:38:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:39:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:51:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 15:51:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('38')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 15:51:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 15:53:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:55:20 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:55:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 15:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:56:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:57:24 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 15:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 15:57:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 15:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 15:57:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 15:58:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:02:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:03:55 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:04:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:06:40 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:08:03 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-16 16:08:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:13:44 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:13:48 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:18:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:21:08 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:21:29 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:22:08 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:22:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:22:43 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:23:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:23:50 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 16:23:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 16:23:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 16:23:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 16:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 16:23:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 16:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 16:23:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 16:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 16:23:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 16:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 16:24:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:24:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:26:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:29:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 16:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:30:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 16:30:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 16:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 16:33:33 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:35:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 16:35:52 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:38:24 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:38:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 16:39:05 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:40:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:40:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:42:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 16:50:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 16:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:02:30 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:08:12 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:09:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:09:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:29:08 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:32:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:38:02 --> Could not find the language line "Socks"
ERROR - 2023-10-16 17:42:13 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:44:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:51:37 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:51:58 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:52:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 17:52:38 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:52:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:52:51 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:52:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:53:19 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:55:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:55:14 --> Could not find the language line "Socks"
ERROR - 2023-10-16 17:55:26 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:55:35 --> Could not find the language line "Perfume"
ERROR - 2023-10-16 17:55:39 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:55:48 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 17:56:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 17:56:40 --> Could not find the language line "Other"
ERROR - 2023-10-16 17:57:09 --> Could not find the language line "Home"
ERROR - 2023-10-16 17:57:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 17:59:01 --> Could not find the language line "Other"
ERROR - 2023-10-16 17:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:04:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 18:05:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 18:07:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-16 18:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:11:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:12:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:12:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 18:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '18'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-16 18:12:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 18:12:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:14:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:14:45 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:14:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:14:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:14:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:15:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:15:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:19:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 18:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 18:19:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 18:21:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:22:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:22:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:22:59 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:31:47 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:34:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:35:21 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:35:29 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:35:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:36:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:36:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:37:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:37:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 18:37:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:56:38 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:57:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 18:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 18:58:04 --> Could not find the language line "Socks"
ERROR - 2023-10-16 18:58:16 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-16 18:58:28 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 18:58:32 --> Could not find the language line "Home"
ERROR - 2023-10-16 18:58:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:00:15 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:00:16 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:00:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:00:29 --> Severity: Warning --> file_get_contents(https://...@2242&amp;action=sendsms&amp;from=SAM-OUTFITS&amp;to=81 838 853&amp;text=6104%20is%20your%20verification%20code%20for%20samoutfits.com): failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 /home/samfit/public_html/application/controllers/Users.php 69
ERROR - 2023-10-16 19:00:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2023-10-16 19:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:01:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:02:58 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:06:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-16 19:06:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:06:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:12:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:13:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-16 19:14:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:14:30 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:14:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:15:20 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:16:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 19:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:17:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:18:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 19:18:27 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:20:15 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:21:22 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:22:54 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:23:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 19:23:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 19:24:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 19:24:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-16 19:24:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-16 19:24:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-16 19:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:29:24 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:31:21 --> Could not find the language line "Bracelets"
ERROR - 2023-10-16 19:31:34 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:32:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:34:07 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:35:05 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:37:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 19:50:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 19:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-16 19:59:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 19:59:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:00:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:01:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:01:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:01:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:02:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:06:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:08:46 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:09:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-16 20:14:43 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:14:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 20:28:12 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:28:18 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:28:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:29:10 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:34:09 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:35:06 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:35:55 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2023-10-16 20:35:55 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2023-10-16 20:35:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-16 20:35:56 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Media/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Site/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2023-10-16 20:35:57 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2023-10-16 20:50:25 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:05:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 21:09:43 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:13:07 --> 404 Page Not Found: Wpphp/index
ERROR - 2023-10-16 21:23:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 21:31:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:32:11 --> 404 Page Not Found: %7Esamfit/index
ERROR - 2023-10-16 21:36:01 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:41:57 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:42:04 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:46:06 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:46:24 --> Could not find the language line "Home"
ERROR - 2023-10-16 21:47:19 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:10:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 22:20:04 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:20:18 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:35:29 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:40:36 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:51:52 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:51:54 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:59:08 --> Could not find the language line "Home"
ERROR - 2023-10-16 22:59:28 --> Could not find the language line "Home"
ERROR - 2023-10-16 23:02:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:07:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 23:07:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 23:07:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 23:07:20 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-16 23:07:23 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-16 23:07:26 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-16 23:07:30 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-16 23:07:34 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-16 23:07:36 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-16 23:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:07:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:08:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:08:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:08:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Casual%' OR a.description LIKE '%Casual%' OR a.color LIKE '%Casual%' OR a.barcode LIKE '%Casual%' OR a.category LIKE '%Casual%' OR a.sub_category LIKE '%Casual%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:08:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:09:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:09:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:09:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Gym%' OR a.description LIKE '%Gym%' OR a.color LIKE '%Gym%' OR a.barcode LIKE '%Gym%' OR a.category LIKE '%Gym%' OR a.sub_category LIKE '%Gym%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:10:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:10:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:10:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Delivery%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Delivery%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Delivery' OR tag = 'Lebanon Delivery')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:11:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:11:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:11:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:11:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:12:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:13:15 --> Could not find the language line "Home"
ERROR - 2023-10-16 23:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:13:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:13:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:14:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:14:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:14:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:14:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:15:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-16 23:15:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-16 23:15:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 23:15:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-16 23:15:56 --> Could not find the language line "Other"
ERROR - 2023-10-16 23:15:59 --> Could not find the language line "Other"
ERROR - 2023-10-16 23:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-16 23:30:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 23:32:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-16 23:32:35 --> Could not find the language line "Home"
