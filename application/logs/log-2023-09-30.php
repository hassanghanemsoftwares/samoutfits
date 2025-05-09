<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-09-30 00:02:04 --> Could not find the language line "Home"
ERROR - 2023-09-30 00:04:22 --> Could not find the language line "Home"
ERROR - 2023-09-30 00:05:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 00:05:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 00:06:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 00:09:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 00:18:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 00:51:17 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:02:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:02:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:02:27 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:02:27 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:31:24 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 01:32:21 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 01:34:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:35:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 01:35:54 --> Could not find the language line "Home"
ERROR - 2023-09-30 01:46:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 01:56:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 02:03:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 02:03:02 --> Could not find the language line "products"
ERROR - 2023-09-30 02:50:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 03:44:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 04:12:31 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:18:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:22:15 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:27:56 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:35:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:55:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 04:56:24 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:01:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:06:18 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:08:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:10:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:13:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:13:31 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:13:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:14:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:14:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:14:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:36 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:50 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:14:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:14:57 --> Could not find the language line "Socks"
ERROR - 2023-09-30 05:15:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:15:20 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:15:25 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:15:57 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:16:20 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:16:45 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:16:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:16:57 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:18:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:24:40 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:25:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:25:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:26:33 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 05:26:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:26:44 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:27:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:27:28 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 05:27:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:27:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:28:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:29:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:31:26 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:31:46 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:31:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:32:02 --> Could not find the language line "Perfume"
ERROR - 2023-09-30 05:32:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:32:13 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:32:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:32:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 05:33:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:33:12 --> Could not find the language line "Socks"
ERROR - 2023-09-30 05:33:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:33:46 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:33:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:34:14 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:34:56 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:35:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 05:35:28 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 05:35:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:35:56 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 05:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:36:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:49:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:50:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 05:50:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:50:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 05:50:54 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:01:31 --> Could not find the language line "Other"
ERROR - 2023-09-30 06:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:08:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:09:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:10:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:15:38 --> 404 Page Not Found: Media/com_acym
ERROR - 2023-09-30 06:15:38 --> 404 Page Not Found: Media/com_acym
ERROR - 2023-09-30 06:15:38 --> 404 Page Not Found: Language/en-GB
ERROR - 2023-09-30 06:15:40 --> 404 Page Not Found: Media/com_acym
ERROR - 2023-09-30 06:15:40 --> 404 Page Not Found: Language/en-GB
ERROR - 2023-09-30 06:15:40 --> 404 Page Not Found: Media/com_acym
ERROR - 2023-09-30 06:27:38 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:32:37 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:37:14 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:37:14 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:43:31 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:45:32 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 06:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:48:55 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 06:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:48:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:49:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:50:02 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:50:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:50:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:50:24 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 06:50:34 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 06:50:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 06:54:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 06:54:59 --> Could not find the language line "Home"
ERROR - 2023-09-30 06:59:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 07:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:00:22 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:02:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-30 07:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-30 07:02:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 07:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 07:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:08:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:09:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:10:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:17:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:18:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:19:11 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:36:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:39:21 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:39:32 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 07:39:52 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 07:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:40:11 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 07:40:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:40:32 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:40:44 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:40:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:02 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:42:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 07:42:57 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 07:42:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:46:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:46:45 --> Could not find the language line "Home"
ERROR - 2023-09-30 07:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 07:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:00:05 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:00:55 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:01:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:01:29 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:13:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:17:20 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:21:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:28:54 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:31:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:34:41 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:37:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 08:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:40:04 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 08:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:48:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:49:33 --> Could not find the language line "Home"
ERROR - 2023-09-30 08:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 08:57:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:00:19 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:02:48 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:04:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:08:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 09:08:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 09:08:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 09:08:47 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-30 09:08:51 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-30 09:08:53 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-09-30 09:08:59 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-30 09:09:05 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-30 09:09:07 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-09-30 09:09:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:09:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:09:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:10:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:10:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:10:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:11:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:11:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:11:31 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:11:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:11:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:12:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:12:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:12:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:12:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:13:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:13:46 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:14:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:14:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:14:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:14:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:15:40 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 09:15:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:15:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:16:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:16:13 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 09:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:16:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:16:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:16:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:17:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:17:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:17:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:17:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:18:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 09:18:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:18:25 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:18:52 --> Could not find the language line "Other"
ERROR - 2023-09-30 09:18:55 --> Could not find the language line "Other"
ERROR - 2023-09-30 09:19:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:23:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:24:02 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:24:03 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:27:54 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:30:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:30:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:30:40 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:30:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:30:47 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:31:01 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:31:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:31:18 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:32:42 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 09:32:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:32:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:37:17 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:39:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:48:18 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:48:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:48:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 09:54:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:58:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:59:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 09:59:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:59:17 --> Could not find the language line "Home"
ERROR - 2023-09-30 09:59:24 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 09:59:41 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 10:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 10:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 10:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 10:11:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 10:14:15 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:14:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:19:22 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:24:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:37:05 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:37:38 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 10:40:06 --> 404 Page Not Found: Home/accounting
ERROR - 2023-09-30 10:43:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-30 10:43:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-30 10:43:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 10:47:10 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 10:52:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:54:31 --> Could not find the language line "Socks"
ERROR - 2023-09-30 10:58:01 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 10:58:11 --> Could not find the language line "Home"
ERROR - 2023-09-30 10:58:16 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 10:58:30 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 11:00:46 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:06:27 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 11:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:19:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:22:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:26:21 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:26:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:29:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:29:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:29:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:30:30 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 11:31:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:31:17 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:32:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:34:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:34:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:40:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:44:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:46:37 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 11:47:20 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 11:51:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 11:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:54:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-09-30 11:55:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:55:24 --> Could not find the language line "Hair%20"
ERROR - 2023-09-30 11:56:41 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:56:54 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:57:06 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:57:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:57:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 11:59:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 11:59:45 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:00:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:02:02 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-09-30 12:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-09-30 12:02:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 12:03:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:04:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 12:04:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 12:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:14:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 12:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:16:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:18:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:19:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:21:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:23:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:25:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:28:24 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:31:43 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 12:35:06 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 12:35:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:36:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:37:26 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:40:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:42:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:52:55 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 12:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:54:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:55:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:55:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:57:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:57:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 12:58:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:58:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 12:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:00:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:13:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:13:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:14:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 13:15:20 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:17:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:26:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:28:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:30:00 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:31:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 13:34:51 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-09-30 13:34:51 --> Unable to connect to the database
ERROR - 2023-09-30 13:34:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 13:35:27 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-09-30 13:35:27 --> Unable to connect to the database
ERROR - 2023-09-30 13:35:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 13:35:27 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-09-30 13:35:27 --> Unable to connect to the database
ERROR - 2023-09-30 13:35:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 13:35:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2023-09-30 13:35:41 --> Unable to connect to the database
ERROR - 2023-09-30 13:35:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-09-30 13:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 13:44:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 13:52:50 --> Could not find the language line "Other"
ERROR - 2023-09-30 13:53:57 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:54:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:54:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:55:31 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:56:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 13:57:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:01:19 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:01:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 14:02:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:06:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 14:06:56 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:10:24 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:12:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 14:17:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:19:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:20:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:20:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:20:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:21:47 --> Could not find the language line "Socks"
ERROR - 2023-09-30 14:23:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:24:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:24:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:25:21 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:25:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:26:20 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:42:39 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:42:41 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:44:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:44:08 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:49:24 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-09-30 14:50:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:50:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:51:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:53:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:54:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:54:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 14:55:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:05:31 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-09-30 15:05:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 15:05:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:07:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:24:36 --> Could not find the language line "products"
ERROR - 2023-09-30 15:25:19 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:27:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:34:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:35:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:37:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:42:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:43:01 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:01 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:10 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:17 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 15:43:35 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:38 --> Could not find the language line "Perfume"
ERROR - 2023-09-30 15:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:43:54 --> Could not find the language line "Perfume"
ERROR - 2023-09-30 15:43:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:43:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 15:43:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 15:44:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:44:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 15:51:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 15:59:45 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:00:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:01:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:06:26 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:13:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:13:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:13:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:15:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:16:03 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 16:16:23 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 16:16:43 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:16:49 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:16:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:18:54 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:19:27 --> Could not find the language line "Perfume"
ERROR - 2023-09-30 16:19:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:19:38 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 16:19:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:20:26 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 16:39:43 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:40:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:42:16 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 16:42:22 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 16:42:24 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 16:42:34 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 16:44:33 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:44:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:45:32 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:45:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 16:45:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 16:45:47 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:45:49 --> Could not find the language line "Socks"
ERROR - 2023-09-30 16:46:00 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:46:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:46:15 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:46:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 16:46:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 16:48:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 16:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:01:22 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 17:12:48 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:19:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:20:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:21:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 17:24:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:25:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:27:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:28:13 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 17:28:50 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:34:56 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:35:05 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:35:33 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:35:44 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 17:36:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:36:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:36:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:36:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:36:55 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:36:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:37:00 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:37:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 17:37:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 17:38:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 17:38:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 17:38:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:38:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:42:37 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:44:56 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:55:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 17:55:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 17:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:00:11 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:00:41 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:02:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:02:21 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:03:12 --> Could not find the language line "Perfume"
ERROR - 2023-09-30 18:03:18 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:03:39 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:03:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:07:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:07:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:07:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:08:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:09:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:10:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:11:15 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:15:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 18:23:28 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:24:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:25:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 18:25:25 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:25:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 18:25:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 18:26:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:26:17 --> Could not find the language line "Socks"
ERROR - 2023-09-30 18:26:44 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:27:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:28:40 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:29:28 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:30:13 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-09-30 18:41:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:43:48 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 18:52:36 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:55:05 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:57:17 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:58:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 18:58:57 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:01:45 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:04:30 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:11:48 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:11:53 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 19:12:26 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:01 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:01 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:02 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:04 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:04 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:04 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:05 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:16:06 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:24:38 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:28:38 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:28:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:29:28 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:29:44 --> Could not find the language line "Sunglasses"
ERROR - 2023-09-30 19:29:49 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 19:31:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:35:07 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:35:28 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:48:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:48:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:48:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:48:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:50:59 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:51:28 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:52:41 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:53:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:53:27 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:54:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:55:00 --> Could not find the language line "Home"
ERROR - 2023-09-30 19:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 19:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 20:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 20:02:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:02:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:03:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:06:38 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:15:37 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:16:14 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:23:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 20:56:01 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-09-30 21:01:59 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:03:09 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:13:31 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:13:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 21:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 21:26:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:26:53 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:26:58 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 21:27:20 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 21:27:36 --> Could not find the language line "Bracelets"
ERROR - 2023-09-30 21:27:37 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:28:51 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:29:00 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 21:29:12 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:42:43 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:49:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 21:50:34 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:50:52 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:51:48 --> Could not find the language line "Home"
ERROR - 2023-09-30 21:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 21:55:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 21:56:15 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:09:02 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:10:29 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:26:27 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:29:04 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:33:40 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:33:49 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 22:34:04 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 22:34:14 --> Could not find the language line "Clothing"
ERROR - 2023-09-30 22:34:58 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:35:54 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:35:59 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:36:42 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:37:27 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:56:16 --> Could not find the language line "Home"
ERROR - 2023-09-30 22:56:28 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:56:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:57:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:58:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-09-30 22:58:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:58:31 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:59:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:59:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:59:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 22:59:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-09-30 23:00:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:00:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:00:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:00:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:00:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:00:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-09-30 23:06:23 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:09:46 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:11:05 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:30:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-09-30 23:32:11 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:37:00 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:37:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-09-30 23:44:03 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:52:20 --> Could not find the language line "Home"
ERROR - 2023-09-30 23:54:39 --> Could not find the language line "Home"
