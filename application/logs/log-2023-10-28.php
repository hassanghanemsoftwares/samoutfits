<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-28 00:02:17 --> Could not find the language line "Home"
ERROR - 2023-10-28 00:02:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 00:02:56 --> Could not find the language line "Home"
ERROR - 2023-10-28 00:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 00:37:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-28 00:49:50 --> Could not find the language line "Home"
ERROR - 2023-10-28 00:57:49 --> Could not find the language line "Home"
ERROR - 2023-10-28 01:06:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-28 01:49:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 01:54:41 --> Could not find the language line "Home"
ERROR - 2023-10-28 02:02:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 02:24:16 --> Could not find the language line "Home"
ERROR - 2023-10-28 02:32:21 --> Could not find the language line "Home"
ERROR - 2023-10-28 03:07:42 --> Could not find the language line "Home"
ERROR - 2023-10-28 03:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 03:43:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 03:48:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 04:23:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 04:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 04:54:20 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-28 04:54:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:21:44 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:33:05 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:36:27 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:40:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 05:40:54 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:42:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 05:43:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 05:48:21 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 05:49:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:50:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 05:54:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 06:11:15 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-28 06:11:16 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-28 06:11:16 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-28 06:11:16 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-28 06:12:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-28 06:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-28 06:12:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-28 06:15:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 06:15:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 06:15:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 06:15:34 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:20:37 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:28:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 06:30:29 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-28 06:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 06:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 06:39:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:39:28 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:40:19 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:40:43 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:43:58 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:51:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 06:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 06:54:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 06:56:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 06:56:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 06:56:48 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:01:17 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:09:42 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-10-28 07:09:47 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:24:10 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 07:29:57 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:33:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 07:33:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 07:36:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:40:10 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 07:41:11 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:44:29 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:46:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:50:26 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-28 07:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 07:52:43 --> Could not find the language line "Home"
ERROR - 2023-10-28 07:53:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:20:50 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:20:53 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:23:12 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:23:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:26:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:27:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:27:25 --> Could not find the language line "Socks"
ERROR - 2023-10-28 08:27:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:27:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:27:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:28:28 --> Could not find the language line "Socks"
ERROR - 2023-10-28 08:28:31 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:31:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:32:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:32:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:32:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-28 08:32:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-28 08:32:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-28 08:32:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-28 08:34:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:34:37 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-28 08:34:45 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:35:30 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:35:50 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:35:54 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:35:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:36:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:36:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:36:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:36:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 08:36:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:36:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:39:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:39:37 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:39:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:39:59 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:40:56 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:42:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 08:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:43:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:45:33 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:45:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:46:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:46:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:46:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:46:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:47:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:47:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:47:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:47:43 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:48:59 --> Could not find the language line "Home"
ERROR - 2023-10-28 08:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:54:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 08:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:56:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:01:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:02:28 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:02:40 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:02:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 09:03:25 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:03:38 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:06:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 09:06:48 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:06:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 09:08:54 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:14:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:15:10 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:31:23 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:31:47 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:31:53 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:32:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:33:20 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:35:22 --> 404 Page Not Found: Env/index
ERROR - 2023-10-28 09:35:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:35:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/controllers/Checkout.php 206
ERROR - 2023-10-28 09:35:42 --> Severity: Notice --> Undefined variable: results /home/samfit/public_html/application/controllers/Checkout.php 219
ERROR - 2023-10-28 09:35:55 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:36:12 --> Could not find the language line "Perfume"
ERROR - 2023-10-28 09:36:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:36:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:37:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:37:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:37:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:37:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:47:01 --> Could not find the language line "Bracelets"
ERROR - 2023-10-28 09:47:07 --> Could not find the language line "Bracelets"
ERROR - 2023-10-28 09:48:06 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-28 09:48:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-28 09:49:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:50:02 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:50:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:50:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:50:57 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:51:13 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:53:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 09:54:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 09:56:31 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:56:33 --> Could not find the language line "Home"
ERROR - 2023-10-28 09:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:05:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 10:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:09:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:09:38 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:11:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 10:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:22:58 --> Could not find the language line "products"
ERROR - 2023-10-28 10:23:53 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:25:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:25:26 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:26:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:27:56 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:29:12 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:31:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-28 10:33:23 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:45:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 10:48:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:48:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 10:49:01 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:49:39 --> Could not find the language line "Home"
ERROR - 2023-10-28 10:54:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:55:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 10:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 11:01:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 11:01:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 11:01:35 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-28 11:01:37 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-28 11:01:40 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-28 11:01:45 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-28 11:01:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 11:01:48 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:02:21 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-28 11:02:27 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:02:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-28 11:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:02:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:02:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:02:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:03:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:03:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:03:10 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:03:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 11:04:00 --> Could not find the language line "Other"
ERROR - 2023-10-28 11:04:04 --> Could not find the language line "Other"
ERROR - 2023-10-28 11:04:13 --> Could not find the language line "Other"
ERROR - 2023-10-28 11:04:20 --> Could not find the language line "Other"
ERROR - 2023-10-28 11:04:27 --> Could not find the language line "Other"
ERROR - 2023-10-28 11:04:33 --> Could not find the language line "Perfume"
ERROR - 2023-10-28 11:05:08 --> Could not find the language line "Socks"
ERROR - 2023-10-28 11:05:12 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-28 11:05:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 11:06:21 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 11:06:21 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 11:06:55 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:15:12 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:22:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:51:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 11:54:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 11:55:54 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:00:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:00:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:01:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:01:22 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:01:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:01:48 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:01:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:02:01 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:02:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:03:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:03:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 12:03:29 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:04:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 12:04:11 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:04:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:04:42 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:05:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:05:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:05:17 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:07:48 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:08:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:08:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:10:12 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:10:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:11:31 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:11:35 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:11:38 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:12:39 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:12:42 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:12:58 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:15:28 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:16:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:29:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:31:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:31:37 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:32:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:33:37 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:36:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:40:07 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:40:31 --> 404 Page Not Found: Products/index
ERROR - 2023-10-28 12:46:59 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:49:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:52:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:54:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 12:54:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:54:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 12:59:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 13:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 13:08:52 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:13:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 13:13:26 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:22:21 --> Could not find the language line "Other"
ERROR - 2023-10-28 13:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 13:25:30 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:28:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 13:37:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:37:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:39:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:40:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 13:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 13:45:37 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:48:34 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-28 13:49:15 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:50:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:50:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:51:40 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:52:13 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:52:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:54:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:56:05 --> Could not find the language line "Home"
ERROR - 2023-10-28 13:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 13:59:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:03:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:13:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:16:01 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:16:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 14:17:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 14:17:55 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-28 14:22:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-28 14:23:26 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:26:34 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:27:36 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:28:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:28:25 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:28:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:28:34 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:28:46 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:34:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-28 14:36:50 --> Could not find the language line "Hair%20"
ERROR - 2023-10-28 14:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:40:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:40:16 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:41:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:41:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:42:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:42:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-28 14:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('Polo')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('XXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-28 14:42:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-28 14:43:49 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:44:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:45:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:45:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:46:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:47:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:49:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:49:38 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:49:41 --> Could not find the language line "Home"
ERROR - 2023-10-28 14:53:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 14:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:54:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 14:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 14:58:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 14:59:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:00:53 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:01:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:01:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 15:02:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:02:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:02:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:03:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:03:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:04:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:04:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:04:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:14:50 --> Could not find the language line "Other"
ERROR - 2023-10-28 15:16:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 15:19:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 15:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 15:42:19 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:44:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 15:45:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 15:49:43 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:50:06 --> Could not find the language line "Home"
ERROR - 2023-10-28 15:59:10 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:00:05 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:00:46 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:02:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:05:13 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:06:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 16:07:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 16:14:16 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:19:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 16:25:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 16:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:40:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 16:45:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 16:51:23 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:51:27 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:52:54 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:53:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 16:55:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 16:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 17:11:16 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:11:16 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:11:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 17:12:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 17:19:33 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:19:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 17:20:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 17:21:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 17:21:47 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:22:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:24:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 17:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 17:33:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 17:39:14 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:41:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:49:28 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-28 17:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 17:57:30 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:07:03 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:08:22 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:10:06 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:14:27 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:20:19 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:21:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 18:23:12 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:30:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:31:28 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:32:13 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:36:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 18:51:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 18:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 18:59:21 --> Could not find the language line "Home"
ERROR - 2023-10-28 18:59:21 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:00:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 19:00:20 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:01:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:06:00 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:08:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-28 19:10:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:12:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:17:52 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:19:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 19:19:18 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:20:20 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:22:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 19:28:11 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:29:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:31:32 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-28 19:40:22 --> Could not find the language line "Home"
ERROR - 2023-10-28 19:41:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 19:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 19:47:51 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:04:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:11:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:12:32 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:13:25 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:13:26 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:13:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:14:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:14:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:14:46 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:14:52 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:15:25 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:15:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:15:42 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:15:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 20:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:16:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:17:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:17:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 20:19:28 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:20:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 20:20:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-28 20:20:22 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:20:29 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:25:22 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:26:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 20:33:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-28 20:33:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 20:49:25 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:50:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 20:51:50 --> Could not find the language line "Perfume"
ERROR - 2023-10-28 20:56:39 --> Could not find the language line "Home"
ERROR - 2023-10-28 21:08:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 21:16:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 21:17:34 --> Could not find the language line "Home"
ERROR - 2023-10-28 21:17:44 --> Could not find the language line "Home"
ERROR - 2023-10-28 21:30:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 21:48:33 --> Could not find the language line "products"
ERROR - 2023-10-28 21:52:48 --> Could not find the language line "Socks"
ERROR - 2023-10-28 21:58:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 21:58:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 21:58:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 21:58:13 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-28 21:58:17 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-28 21:58:25 --> 404 Page Not Found: Sitemap/index
ERROR - 2023-10-28 21:58:31 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-28 21:58:35 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-28 21:58:46 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-28 22:02:58 --> Could not find the language line "Home"
ERROR - 2023-10-28 22:03:55 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-28 22:04:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:04:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:04:41 --> Could not find the language line "Other"
ERROR - 2023-10-28 22:07:56 --> Could not find the language line "Home"
ERROR - 2023-10-28 22:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:08:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 22:08:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 22:08:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:08:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 22:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 22:27:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 22:31:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 22:32:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 22:47:01 --> Could not find the language line "Home"
ERROR - 2023-10-28 22:47:01 --> Could not find the language line "Home"
ERROR - 2023-10-28 22:48:08 --> Could not find the language line "Home"
ERROR - 2023-10-28 22:48:40 --> Could not find the language line "Home"
ERROR - 2023-10-28 23:01:29 --> Could not find the language line "Home"
ERROR - 2023-10-28 23:02:24 --> Could not find the language line "Home"
ERROR - 2023-10-28 23:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 23:03:11 --> Could not find the language line "Home"
ERROR - 2023-10-28 23:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-28 23:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-28 23:26:01 --> Could not find the language line "Perfume"
ERROR - 2023-10-28 23:28:43 --> Could not find the language line "Home"
ERROR - 2023-10-28 23:35:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-28 23:39:44 --> Could not find the language line "Crocs"
ERROR - 2023-10-28 23:41:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-28 23:46:34 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-28 23:47:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-28 23:59:39 --> Could not find the language line "Home"
