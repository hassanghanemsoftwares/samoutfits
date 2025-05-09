<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-04-23 00:04:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 00:08:45 --> Could not find the language line "Home"
ERROR - 2024-04-23 00:09:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 00:14:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 00:17:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 00:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 00:31:06 --> Could not find the language line "products"
ERROR - 2024-04-23 00:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 00:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 00:42:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 00:42:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 00:42:07 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 00:44:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 00:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 00:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 00:58:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 01:04:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:05:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:05:37 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:08:11 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:12:18 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:14:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:14:28 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:18:04 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:21:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 01:21:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:25:15 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:26:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 01:30:15 --> Could not find the language line "Crocs"
ERROR - 2024-04-23 01:44:18 --> Could not find the language line "Home"
ERROR - 2024-04-23 01:46:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 01:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 01:46:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 01:53:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 01:56:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 02:07:59 --> Could not find the language line "Home"
ERROR - 2024-04-23 02:10:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 02:14:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 02:14:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 02:18:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 02:18:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('cart')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 02:18:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 02:30:58 --> 404 Page Not Found: Storage/settings
ERROR - 2024-04-23 02:31:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 02:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 02:42:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 02:42:41 --> Could not find the language line "Home"
ERROR - 2024-04-23 02:44:17 --> Could not find the language line "Home"
ERROR - 2024-04-23 02:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 02:58:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 03:02:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 03:14:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 03:18:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 03:44:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 03:46:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 03:50:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 03:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 03:56:17 --> Could not find the language line "Home"
ERROR - 2024-04-23 03:57:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 03:58:49 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-23 04:00:03 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 04:02:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 04:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 04:06:45 --> Could not find the language line "Socks"
ERROR - 2024-04-23 04:14:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 04:14:42 --> Could not find the language line "Home"
ERROR - 2024-04-23 04:15:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 04:23:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 04:34:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 04:38:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 04:40:44 --> Could not find the language line "Home"
ERROR - 2024-04-23 04:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 04:44:18 --> Could not find the language line "Home"
ERROR - 2024-04-23 04:54:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-23 04:54:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 04:54:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 05:01:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 05:04:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:06:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:10:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:14:20 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:16:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 05:18:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:18:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:18:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:22:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:25:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:26:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:42:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 05:42:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 05:44:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:45:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:45:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 05:46:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 05:49:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 05:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 05:50:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:54:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 05:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 05:54:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 05:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:01:03 --> Could not find the language line "Home"
ERROR - 2024-04-23 06:04:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 06:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:10:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:14:20 --> Could not find the language line "Home"
ERROR - 2024-04-23 06:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:14:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:14:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:15:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 06:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:22:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:24:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:26:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:26:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:30:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 06:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:30:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:30:48 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 06:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:42:50 --> Could not find the language line "Other"
ERROR - 2024-04-23 06:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:42:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:42:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:44:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 06:55:52 --> Could not find the language line "Home"
ERROR - 2024-04-23 06:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:56:33 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 06:58:41 --> Could not find the language line "Home"
ERROR - 2024-04-23 06:58:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:58:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 06:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 06:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:02:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:02:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:03:04 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 07:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 07:03:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 07:03:07 --> 404 Page Not Found: Home/accounts
ERROR - 2024-04-23 07:04:46 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:05:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:05:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:05:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:06:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 07:06:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:14:21 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:14:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:16:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 07:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:18:52 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 07:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:18:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:18:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:18:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:19:24 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 07:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:21:13 --> Could not find the language line "products"
ERROR - 2024-04-23 07:23:38 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:27:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:29:41 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:29:41 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:30:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:30:56 --> Could not find the language line "products"
ERROR - 2024-04-23 07:32:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 07:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:44:21 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:45:39 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:46:20 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 07:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 07:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:50:49 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:49 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:53 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:53 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:54 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:54 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:50:57 --> Could not find the language line "Home"
ERROR - 2024-04-23 07:51:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:51:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 07:51:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:51:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 07:56:27 --> Could not find the language line "Other"
ERROR - 2024-04-23 07:57:10 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:03:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:04:13 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 08:04:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 08:04:20 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 08:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:04:27 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 08:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:04:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:04:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:05:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:06:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:07:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:08:08 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:10:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 08:10:08 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:10:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:13:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:15 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:16 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:15:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 08:15:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:19:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:23:00 --> Could not find the language line "Other"
ERROR - 2024-04-23 08:23:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:24:06 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:25:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 08:25:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:26:17 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:27:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:27:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:30:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 08:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:31:20 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-04-23 08:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:35:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:39:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 08:39:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 08:39:07 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:40:11 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:44:20 --> Could not find the language line "Home"
ERROR - 2024-04-23 08:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:50:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 08:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 08:50:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 08:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 08:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:02:07 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:05:54 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:05:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:07:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:07:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:07:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:07:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 09:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:14:22 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:20:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:21:15 --> Could not find the language line "products"
ERROR - 2024-04-23 09:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:23:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:27:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:28:26 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-04-23 09:30:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 09:30:54 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:34:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 09:34:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Clothing'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 09:34:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 09:37:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 09:39:04 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:31 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 09:39:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:39:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:40:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 09:43:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:43:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:43:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 09:44:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:44:26 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:50:22 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:51:19 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-04-23 09:53:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:55:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:55:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:55:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 09:55:42 --> Could not find the language line "products"
ERROR - 2024-04-23 09:58:03 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:58:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 09:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:59:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:59:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:59:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 09:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 09:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:01:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 10:02:00 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:03:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:03:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:04:11 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:04:21 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-23 10:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:04:39 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:04:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:04:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:05:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:05:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:05:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Other')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 10:05:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 10:05:09 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:05:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 10:05:11 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:05:24 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:05:46 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:06:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:06:26 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:06:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:06:56 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:07:09 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:07:12 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 10:07:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:07:29 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 10:07:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:09:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:11:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:11:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:14:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:15:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:15:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:15:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:15:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 10:15:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 10:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:17:46 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:28:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 10:31:15 --> Could not find the language line "Disclaimer"
ERROR - 2024-04-23 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:33:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:33:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:36:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:37:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:37:16 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:37:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:37:36 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 10:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:39:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 10:39:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 10:39:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 10:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:43:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:43:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:44:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 10:47:16 --> Could not find the language line "Other"
ERROR - 2024-04-23 10:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:47:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:47:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:55:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:55:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:59:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 10:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:59:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 10:59:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:03:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:03:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:14:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 11:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:19:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:28:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 11:29:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:31:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:35:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:35:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:35:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 11:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:43:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:44:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 11:47:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 11:51:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 11:55:10 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:05:12 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:06:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 12:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:07:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 12:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:11:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:11:43 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:12:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:13:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:13:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:14:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:15:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:16:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:16:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:17:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:19:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:21:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 12:22:53 --> Could not find the language line "products"
ERROR - 2024-04-23 12:23:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:31:27 --> Could not find the language line "Perfume"
ERROR - 2024-04-23 12:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:32:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:35:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 12:36:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 12:36:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 12:36:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 12:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:41:01 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:41:14 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:44:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:45:02 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:45:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:52:02 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:52:02 --> Could not find the language line "Home"
ERROR - 2024-04-23 12:53:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 12:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:00:21 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 13:00:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:01:32 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 13:02:22 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 13:03:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:04:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 13:04:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'products'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 13:04:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 13:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:14:26 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:19:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:19:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:19:53 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:19:53 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:24:50 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:24:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:25:39 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:25:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:27:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:27:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:29:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:33:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:33:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:33:44 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 13:33:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('accounts')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 13:33:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 13:34:39 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:37:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:40:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:43:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:44:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 13:51:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:51:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 13:55:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:59:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 13:59:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:00:03 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:00:18 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:00:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:04:44 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:05:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:06:12 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:06:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 14:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 14:06:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 14:06:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 14:06:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 14:06:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:07:14 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:07:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:07:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:09:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:09:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:14:26 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:15:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:15:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:15:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:16:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:16:38 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:16:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:18:08 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:18:10 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:19:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:26:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:27:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:34:23 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:43:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:44:18 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:44:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:45:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:45:28 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:45:53 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:46:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:46:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:47:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:48:49 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:50:00 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:50:00 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:51:22 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:55:03 --> Could not find the language line "Home"
ERROR - 2024-04-23 14:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:55:51 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:55:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 14:58:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 14:59:43 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 14:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 14:59:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 14:59:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 14:59:47 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:01:36 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:06:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:06:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:11:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 15:11:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Hats'
AND `items`.`price` <= 'cart'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 15:11:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 15:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:14:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:15:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 15:15:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 15:15:42 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:15:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:15:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:15:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:15:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:17:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:19:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:19:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:32:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 15:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:35:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:36:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:43:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:44:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:46:42 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:46:47 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:47:26 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:47:30 --> Could not find the language line "Socks"
ERROR - 2024-04-23 15:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:47:39 --> Could not find the language line "Home"
ERROR - 2024-04-23 15:47:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 15:47:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 15:47:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:47:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:47:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 15:48:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 15:55:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 16:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:03:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:03:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:07:50 --> Could not find the language line "Perfume"
ERROR - 2024-04-23 16:07:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:08:37 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 16:13:02 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:14:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:14:34 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-23 16:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:23:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 16:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:28:10 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:28:20 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:28:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:29:57 --> Could not find the language line "products"
ERROR - 2024-04-23 16:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:32:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:32:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:38:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:44:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:50:03 --> Could not find the language line "products"
ERROR - 2024-04-23 16:51:55 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 16:51:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 16:52:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 16:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:00:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:00:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:02:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:03:42 --> Could not find the language line "products"
ERROR - 2024-04-23 17:04:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:04:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:07:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:11:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 17:11:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 17:11:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 17:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:14:28 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:15:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:17:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:19:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:19:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:20:00 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:20:44 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:26:05 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:28:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 17:28:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 17:28:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 17:28:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 17:32:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:38:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 17:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 17:38:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 17:38:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:38:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:38:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:39:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:40:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-23 17:40:54 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:43:05 --> Could not find the language line "products"
ERROR - 2024-04-23 17:43:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:44:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:44:27 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:47:17 --> Could not find the language line "Home"
ERROR - 2024-04-23 17:48:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:52:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 17:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:55:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 17:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:02:02 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:03:42 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:04:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:05:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:10:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 18:10:36 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-04-23 18:10:36 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-04-23 18:12:04 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:12:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 18:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:14:28 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:15:05 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:15:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:16:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:17:09 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:20:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:21:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:21:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:24:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:27:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:28:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:32:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:36:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:37:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:39:21 --> Could not find the language line "accounts"
ERROR - 2024-04-23 18:39:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:39:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:40:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:42:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:44:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 18:44:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:47:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:47:55 --> Could not find the language line "Sunglasses"
ERROR - 2024-04-23 18:47:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 18:48:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:48:05 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:48:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:48:16 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:48:31 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:48:34 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 18:48:40 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:48:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 18:48:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 18:48:56 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:48:57 --> Could not find the language line "Socks"
ERROR - 2024-04-23 18:49:06 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:49:18 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:49:21 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-04-23 18:49:21 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:49:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:49:41 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:49:47 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:49:57 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:49:59 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 18:50:49 --> Could not find the language line "Home"
ERROR - 2024-04-23 18:52:37 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 18:52:54 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 18:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:56:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 18:56:19 --> Could not find the language line "Socks"
ERROR - 2024-04-23 18:57:10 --> Could not find the language line "Socks"
ERROR - 2024-04-23 18:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 18:59:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 18:59:44 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:00:19 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 19:00:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 19:00:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 19:03:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 19:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('view')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 19:03:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 19:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:10:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:10:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:11:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 19:14:31 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:14:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 19:14:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:16:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-04-23 19:16:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 19:16:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 19:17:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:18:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:18:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:20:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:23:29 --> Could not find the language line "products"
ERROR - 2024-04-23 19:24:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:28:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:29:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 19:30:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 19:32:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:32:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:36:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:40:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:41:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 19:44:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:44:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:44:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:45:33 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:48:05 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:48:06 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:48:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:49:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 19:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-04-23 19:50:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 19:50:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:50:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 19:51:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:51:24 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:51:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:30 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:51:33 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:52:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:54:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:54:19 --> Could not find the language line "Home"
ERROR - 2024-04-23 19:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:56:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 19:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 19:59:25 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 20:00:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 20:00:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:03:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 20:03:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 20:04:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:08:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:12:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:14:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 20:16:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:18:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 20:19:32 --> Could not find the language line "products"
ERROR - 2024-04-23 20:20:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:21:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 20:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 20:24:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 20:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 20:28:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:32:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:34:15 --> Could not find the language line "Other"
ERROR - 2024-04-23 20:35:53 --> Could not find the language line "products"
ERROR - 2024-04-23 20:36:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:39:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 20:40:01 --> Could not find the language line "Home"
ERROR - 2024-04-23 20:40:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 20:44:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:44:29 --> Could not find the language line "Home"
ERROR - 2024-04-23 20:44:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 20:48:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:52:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:56:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 20:56:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 20:56:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:00:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:00:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:02:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 21:02:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('accounts')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 21:02:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 21:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:04:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:04:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:04:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:06:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:06:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 21:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 21:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:08:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 21:11:51 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:12:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:12:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:12:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:14:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:16:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:16:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:16:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:17:57 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:19:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:20:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:20:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:22:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:24:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:24:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:24:47 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:26:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 21:26:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 21:26:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 21:26:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:27:25 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:28:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:32:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:34:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 21:36:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:36:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:40:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:40:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:41:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:43:55 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:44:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:44:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:48:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:48:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:52:28 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 21:52:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:52:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 21:52:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 21:52:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:52:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 21:52:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 21:52:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 21:53:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 21:53:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Hats'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 21:53:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 21:56:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:56:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 21:56:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 21:59:22 --> Could not find the language line "Home"
ERROR - 2024-04-23 21:59:48 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:00:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:01:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:03:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:04:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:07:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 22:08:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:08:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-04-23 22:12:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:12:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 22:14:32 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:17:58 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:20:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:24:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:24:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:28:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:31:05 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 22:31:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 22:31:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 22:32:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:32:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:35:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:37:35 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 22:37:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 22:37:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 22:37:46 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:38:00 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:38:08 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:38:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 22:40:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:44:33 --> Could not find the language line "Home"
ERROR - 2024-04-23 22:44:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:47:05 --> Could not find the language line "Bracelets"
ERROR - 2024-04-23 22:48:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:49:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:50:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-04-23 22:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:52:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 22:56:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 22:58:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 23:00:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:03:22 --> Could not find the language line "products"
ERROR - 2024-04-23 23:04:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 23:08:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:08:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:08:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 23:12:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:12:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:14:35 --> Could not find the language line "Home"
ERROR - 2024-04-23 23:16:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:16:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:17:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-04-23 23:18:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 23:23:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-04-23 23:23:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-04-23 23:23:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-04-23 23:24:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:24:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:27:01 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 23:28:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:28:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:33:06 --> Could not find the language line "products"
ERROR - 2024-04-23 23:36:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:36:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-04-23 23:40:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:40:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:44:33 --> Could not find the language line "Home"
ERROR - 2024-04-23 23:44:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:48:40 --> Could not find the language line "Clothing"
ERROR - 2024-04-23 23:48:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-04-23 23:52:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:56:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-04-23 23:56:42 --> 404 Page Not Found: Assets/lib
