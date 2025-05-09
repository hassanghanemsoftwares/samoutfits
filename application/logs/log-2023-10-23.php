<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-23 00:07:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 00:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 00:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 00:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 00:52:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 01:00:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 01:20:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 01:31:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 01:33:02 --> Could not find the language line "Home"
ERROR - 2023-10-23 01:44:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 01:44:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 01:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 02:18:02 --> Could not find the language line "Home"
ERROR - 2023-10-23 02:37:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 02:49:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 03:00:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 03:03:29 --> Could not find the language line "Home"
ERROR - 2023-10-23 03:44:07 --> Could not find the language line "Home"
ERROR - 2023-10-23 03:51:49 --> Could not find the language line "Home"
ERROR - 2023-10-23 03:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 03:52:49 --> Could not find the language line "Home"
ERROR - 2023-10-23 03:54:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 04:02:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 04:16:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 04:17:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:17:25 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:17:34 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:23:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:23:48 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:23:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 04:24:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 04:24:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 04:24:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:31:27 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 04:31:55 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:32:17 --> Could not find the language line "Other"
ERROR - 2023-10-23 04:32:19 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:32:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 04:32:42 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:40:03 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:44:07 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:45:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-23 04:51:03 --> Could not find the language line "Home"
ERROR - 2023-10-23 04:59:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 05:04:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 05:10:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 05:36:54 --> Could not find the language line "Home"
ERROR - 2023-10-23 05:38:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 05:39:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 05:51:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 06:06:32 --> Could not find the language line "Home"
ERROR - 2023-10-23 06:06:38 --> Could not find the language line "Home"
ERROR - 2023-10-23 06:11:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:34:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:39:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:39:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:39:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:40:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:40:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:41:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:41:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:41:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:41:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:41:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:42:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:42:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:43:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 06:44:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 06:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 06:44:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 06:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:54:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:54:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:54:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:54:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:55:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 06:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:55:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 06:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:04:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 07:04:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '13'
AND `transaction_item_sizes`.`size` IN('43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-23 07:04:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 07:05:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:07:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:08:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:08:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:08:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:09:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:17:56 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:18:08 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:23:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:23:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:26:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 07:30:48 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:36:47 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:36:55 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:39:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:40:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:40:29 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:41:05 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:41:57 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:42:01 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 07:42:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 07:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 07:48:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 07:52:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:02:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:07:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:11:11 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:16:08 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:16:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:16:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:24:02 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:24:10 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-23 08:25:06 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:25:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:37:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 08:41:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:52:25 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:53:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 08:56:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:57:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 08:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 08:59:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:00:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:00:54 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:01:55 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-23 09:03:25 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-23 09:04:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:10:45 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:12:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 09:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 09:15:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 09:16:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 09:16:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 09:18:32 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:18:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:18:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:19:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:19:34 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:27:46 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 09:28:04 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 09:28:21 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 09:28:23 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-23 09:28:37 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 09:28:38 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 09:28:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 09:28:54 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Lib/easing
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 09:29:11 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 09:31:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 09:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 09:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 09:34:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:37:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:41:21 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:42:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:42:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:43:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:49:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:52:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 09:53:55 --> Could not find the language line "Home"
ERROR - 2023-10-23 09:56:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 09:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:00:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:01:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:01:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:01:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:02:13 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:02:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:02:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:06:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:07:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:09:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:09:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:10:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:10:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:10:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:10:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:14:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:17:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:19:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:20:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:28:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:29:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 10:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:30:06 --> 404 Page Not Found: Sitemaptxt/index
ERROR - 2023-10-23 10:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:37:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 10:37:22 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-23 10:43:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:44:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 10:44:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-23 10:44:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 10:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:47:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 10:49:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:50:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:50:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:52:49 --> Could not find the language line "Home"
ERROR - 2023-10-23 10:57:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 10:58:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 11:01:58 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:04:09 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:05:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 11:05:46 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 11:05:59 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:09:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:10:18 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:14:05 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:15:37 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:22:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 11:24:56 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:47:39 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:48:23 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:48:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 11:49:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 11:49:45 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:52:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 11:54:29 --> Could not find the language line "Home"
ERROR - 2023-10-23 11:54:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 12:02:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 12:02:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 12:03:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 12:03:21 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:03:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:06:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:12:43 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-23 12:13:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:17:21 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 12:17:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-23 12:17:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 12:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:19:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:22:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:23:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:23:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:33:39 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:35:01 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:35:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 12:37:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:48:13 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 12:51:57 --> Could not find the language line "Home"
ERROR - 2023-10-23 12:59:20 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:02:22 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:06:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 13:08:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:12:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 13:12:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 13:13:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:15:03 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:29:50 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:30:27 --> Could not find the language line "Socks"
ERROR - 2023-10-23 13:30:39 --> Could not find the language line "Socks"
ERROR - 2023-10-23 13:30:46 --> Could not find the language line "Socks"
ERROR - 2023-10-23 13:36:56 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:37:43 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:37:58 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:38:11 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:41:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:41:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 13:46:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 13:48:12 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:49:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 13:51:07 --> Could not find the language line "Home"
ERROR - 2023-10-23 13:59:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:00:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:07:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:07:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:07:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:07:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:08:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:08:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:08:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:08:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:09:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:09:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:09:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:09:43 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:09:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:10:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:10:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:10:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:10:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:12:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:12:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:12:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:12:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:13:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:13:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:14:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:15:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:15:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:16:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 14:17:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:19:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:20:39 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:21:32 --> Could not find the language line "Other"
ERROR - 2023-10-23 14:21:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 14:22:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:28:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 14:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '20'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-23 14:28:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 14:34:02 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 14:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:39:11 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-23 14:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:47:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 14:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 14:51:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 14:52:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:00:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:00:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:02:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:04:52 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:05:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:05:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:17:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:19:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 15:19:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 15:28:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:28:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:29:35 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:29:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:29:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:30:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:30:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:31:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:31:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:31:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:31:25 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:32:09 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:33:17 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 15:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:35:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 15:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:37:22 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:41:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:43:39 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:43:41 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:43:43 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:45:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 15:46:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:47:59 --> Could not find the language line "Home"
ERROR - 2023-10-23 15:48:46 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:00:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:04:07 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-23 16:04:11 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:07:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:07:05 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:14:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:16:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:17:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:17:58 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-23 16:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:23:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:25:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:33:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:41:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-23 16:42:56 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:43:03 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:43:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:43:26 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 16:43:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:43:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:43:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:43:55 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:43:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:44:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:44:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:44:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:45:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:45:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:46:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:46:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:46:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:46:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 16:47:08 --> Could not find the language line "Other"
ERROR - 2023-10-23 16:47:12 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:47:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:47:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:47:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:47:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:47:40 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:47:44 --> Could not find the language line "Bracelets"
ERROR - 2023-10-23 16:47:49 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:48:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:48:05 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:48:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:48:23 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 16:48:47 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:50:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:52:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:52:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 16:54:03 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:54:25 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:55:43 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:55:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 16:56:58 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:00:02 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:07:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 17:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:14:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:17:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:21:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:22:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 17:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:22:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:22:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:23:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:24:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:25:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:27:08 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:28:22 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:33:11 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:37:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:38:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:39:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:40:26 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:41:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:41:48 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:41:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:41:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:42:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:42:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:42:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:42:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:43:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:43:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:43:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:15 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:44:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 17:44:24 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:44:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 17:44:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:45:14 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:46:01 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:46:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:46:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:47:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 17:47:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 17:47:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 17:47:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 17:48:43 --> Could not find the language line "Home"
ERROR - 2023-10-23 17:55:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 18:03:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:04:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:04:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:04:55 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-23 18:04:55 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-23 18:04:55 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-23 18:04:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-23 18:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:05:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:05:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:05:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:05:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:06:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:06:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:06:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 18:06:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 18:06:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 18:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:06:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:06:38 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:07:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:07:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:07:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:07:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:07:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:08:30 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:08:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:08:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 18:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:09:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:09:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:11:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:11:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:11:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:12:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:19:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:20:01 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:23:21 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:23:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:24:09 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:24:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:24:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:24:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:24:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:24:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:24:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:00 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:14 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:25:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-23 18:28:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:29:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:32:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:33:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:34:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:34:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:34:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:35:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:35:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:35:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:35:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:36:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:36:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:37:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:37:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:37:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:38:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:38:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:38:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:38:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:40:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:41:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:44:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:44:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:44:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 18:44:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:45:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:46:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:46:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:46:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 18:46:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 18:46:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 18:46:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:46:42 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:46:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 18:53:53 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:56:29 --> Could not find the language line "Home"
ERROR - 2023-10-23 18:59:13 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:01:32 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:03:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-23 19:11:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:12:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:12:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:12:27 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 19:12:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 19:12:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 19:12:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:13:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:13:18 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:13:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:13:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:13:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:13:51 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 19:13:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 19:13:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 19:14:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:14:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-23 19:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-23 19:14:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-23 19:17:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:17:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:18:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:19:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:21:21 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:22:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:23:32 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:24:19 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:24:22 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:24:39 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-23 19:24:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:24:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:27:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:27:20 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-23 19:28:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:31:12 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:31:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-23 19:31:44 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:31:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:32:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-23 19:33:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-23 19:33:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-23 19:33:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-23 19:33:56 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:34:13 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-23 19:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 19:35:16 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:36:48 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:36:58 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:37:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:37:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:37:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 19:38:55 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:39:03 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-23 19:39:04 --> 404 Page Not Found: Assets/images
ERROR - 2023-10-23 19:46:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:50:21 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:53:51 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:54:54 --> Could not find the language line "Home"
ERROR - 2023-10-23 19:56:30 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:01:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 20:06:36 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:07:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:10:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-23 20:16:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 20:16:18 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-23 20:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 20:23:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 20:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 20:38:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 20:40:17 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Lib/owlcarousel
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Lib/swiper
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 20:41:38 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 20:42:26 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:42:29 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:42:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 20:43:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 20:46:16 --> Could not find the language line "Home"
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Codejquerycom/jquery-3.4.1.min.js
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Mail/contact.js
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Js/common.js
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Connectfacebooknet/en_US
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Js/main.js
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Mail/jqBootstrapValidation.min.js
ERROR - 2023-10-23 20:48:04 --> 404 Page Not Found: Stackpathbootstrapcdncom/bootstrap
ERROR - 2023-10-23 21:12:01 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:17:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:23:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 21:49:00 --> Could not find the language line "Socks"
ERROR - 2023-10-23 21:49:02 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:49:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 21:53:01 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:53:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 21:53:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:54:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:54:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-23 21:54:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:54:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:55:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:55:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-23 21:55:13 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:55:15 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:55:33 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:55:39 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:55:45 --> Could not find the language line "Home"
ERROR - 2023-10-23 21:56:10 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:27 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:26:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 22:30:06 --> Could not find the language line "Other"
ERROR - 2023-10-23 22:34:59 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:35:04 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-23 22:46:50 --> Could not find the language line "Home"
ERROR - 2023-10-23 22:47:46 --> Could not find the language line "Home"
ERROR - 2023-10-23 23:23:43 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-23 23:25:06 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-23 23:28:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-23 23:45:06 --> Could not find the language line "Home"
ERROR - 2023-10-23 23:51:59 --> Could not find the language line "Home"
ERROR - 2023-10-23 23:53:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
