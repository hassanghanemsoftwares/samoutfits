<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-27 00:01:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:01:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 00:02:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 00:02:30 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:04:01 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:07:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:08:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 00:13:21 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:13:21 --> Could not find the language line "Home"
ERROR - 2023-10-27 00:27:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 01:05:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-27 01:14:29 --> Could not find the language line "Home"
ERROR - 2023-10-27 01:25:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 01:31:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 01:41:58 --> Could not find the language line "Home"
ERROR - 2023-10-27 01:59:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:00:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:13:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 02:31:53 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:41:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:48:25 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:48:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 02:48:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:49:43 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:49:49 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 02:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 02:50:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 02:50:32 --> Could not find the language line "Home"
ERROR - 2023-10-27 02:59:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:00:12 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:00:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:13:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-27 03:26:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:29:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:40:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 03:53:38 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:02:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 04:14:16 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:14:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 04:14:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:14:19 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2023-10-27 04:14:29 --> 404 Page Not Found: Securitytxt/index
ERROR - 2023-10-27 04:14:29 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2023-10-27 04:14:29 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:14:30 --> 404 Page Not Found: Humanstxt/index
ERROR - 2023-10-27 04:14:30 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-10-27 04:14:49 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:15:36 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-27 04:16:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 04:17:38 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:17:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 04:18:21 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:18:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 04:18:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 04:19:30 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:40:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:41:22 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:41:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 04:41:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 04:42:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 04:42:20 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:44:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:44:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:52:17 --> Could not find the language line "Home"
ERROR - 2023-10-27 04:54:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 04:56:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:05:58 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:09:49 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:13:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:17:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:18:42 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:33:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 05:35:00 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:35:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:43:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:48:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:49:00 --> Could not find the language line "Home"
ERROR - 2023-10-27 05:50:14 --> Could not find the language line "Socks"
ERROR - 2023-10-27 05:51:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:08:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 06:09:56 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:18:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:24:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:24:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:24:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:25:07 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:26:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:26:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 06:34:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:35:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:35:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:36:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:36:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 06:37:13 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:48:14 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:53:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:56:07 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:56:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:57:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:58:26 --> Could not find the language line "Home"
ERROR - 2023-10-27 06:58:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 06:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:58:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 06:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:59:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 06:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 06:59:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:00:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:00:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:00:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:01:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:01:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:05:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 07:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '16'
AND `transaction_item_sizes`.`size` IN('44')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-27 07:05:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 07:09:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:12:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 07:12:06 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:13:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:13:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:21:20 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:21:24 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:23:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:24:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:28:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:33:55 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-27 07:36:53 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:37:22 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:44:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:45:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:45:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:45:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:46:13 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:46:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:47:11 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:47:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:47:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:47:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:48:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:48:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:48:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 07:48:47 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:49:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 07:49:16 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:50:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:50:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 07:55:42 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 07:59:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:01:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:03:00 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:03:02 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-10-27 08:03:02 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-10-27 08:03:02 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-10-27 08:03:03 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-27 08:05:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:05:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:06:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:06:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:07:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 08:07:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 08:07:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 08:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:09:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:09:44 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:10:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:10:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:11:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:12:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 08:14:37 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 08:14:52 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 08:15:06 --> Could not find the language line "Hair%20"
ERROR - 2023-10-27 08:19:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:19:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:22:43 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:23:21 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:31:17 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:42:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:42:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:43:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:44:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:44:15 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:44:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:44:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:44:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:35 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:45:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:45:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:45:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 08:46:22 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:46:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:46:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:46:48 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:46:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:46:59 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:46:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:47:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:47:35 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:47:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-27 08:47:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:48:06 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 08:48:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:49:14 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 08:49:19 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 08:49:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 08:49:29 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:55:18 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-27 08:55:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 08:56:23 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:59:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 08:59:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:00:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:05:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:06:53 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:09:25 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:09:53 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:11:03 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:11:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 09:11:17 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:15:03 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:15:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 09:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:19:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:23:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:24:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:24:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:26:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 09:26:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 09:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:30:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:31:13 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:32:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:41:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:42:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:45:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:46:56 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:48:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 09:50:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:57:17 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 09:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 09:57:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 09:57:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 09:58:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:02:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:05:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:08:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:09:36 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:09:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:09:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:10:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:11:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:13:30 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:13:35 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:18:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:26:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:27:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:28:37 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 10:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `items`.`color` IN('White')
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-27 10:28:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 10:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:37:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:45:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:49:06 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:49:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 10:59:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 10:59:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:04:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:05:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:08:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:09:00 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:09:20 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:19:42 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 11:24:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 11:24:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 11:25:44 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:27:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:28:49 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:30:24 --> Could not find the language line "Socks"
ERROR - 2023-10-27 11:30:37 --> Could not find the language line "Socks"
ERROR - 2023-10-27 11:31:24 --> Could not find the language line "Socks"
ERROR - 2023-10-27 11:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:45:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:45:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:51:52 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:54:14 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:57:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:58:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 11:59:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 11:59:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:00:24 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:00:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:02:15 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:05:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 12:05:06 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:15:11 --> Could not find the language line "Hair%20"
ERROR - 2023-10-27 12:15:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:15:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 12:16:05 --> Could not find the language line "Hair%20"
ERROR - 2023-10-27 12:18:08 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 12:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:18:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:20:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:22:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:23:15 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 12:23:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 12:23:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 12:23:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 12:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:26:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:28:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:30:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:31:51 --> 404 Page Not Found: Products/products
ERROR - 2023-10-27 12:33:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:40:39 --> Could not find the language line "Socks"
ERROR - 2023-10-27 12:45:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:49:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:52:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 12:52:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 12:52:50 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 12:53:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 12:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 12:56:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:56:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:57:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:57:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:57:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:58:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:58:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:58:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 12:58:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:58:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:59:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:59:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 12:59:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 13:00:22 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-27 13:00:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 13:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 13:01:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 13:09:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:10:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:13:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:14:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:15:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:21:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:21:52 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:22:23 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:25:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 13:34:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:34:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:50:20 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:52:36 --> Could not find the language line "Home"
ERROR - 2023-10-27 13:52:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:55:24 --> 404 Page Not Found: Env/index
ERROR - 2023-10-27 13:55:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 13:57:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 13:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:01:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:04:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:11:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 14:11:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 14:11:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 14:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:14:56 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 14:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 14:14:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 14:15:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 14:15:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 14:15:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 14:15:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:15:49 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:15:50 --> 404 Page Not Found: Home/assets
ERROR - 2023-10-27 14:16:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:16:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:16:51 --> Could not find the language line "Hair%20"
ERROR - 2023-10-27 14:16:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 14:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 14:16:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 14:17:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:17:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:18:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:18:21 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-27 14:18:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:19:23 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:20:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:20:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:28:07 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:32:22 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:33:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:34:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:34:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 14:34:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:35:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:35:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:35:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 14:39:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:41:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:45:25 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:45:26 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:46:36 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:46:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 14:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 14:53:06 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 14:53:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 14:53:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 15:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:07:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:09:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:09:55 --> 404 Page Not Found: Products/products
ERROR - 2023-10-27 15:10:14 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:10:15 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:19:03 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:20:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:21:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:24:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 15:34:29 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:44:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:46:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:51:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:51:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:52:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:54:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:54:42 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:55:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 15:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('44-45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-27 15:55:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 15:55:42 --> Could not find the language line "Home"
ERROR - 2023-10-27 15:55:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:56:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:56:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:56:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:56:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:56:40 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:56:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:57:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:58:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:58:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:58:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:59:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:59:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:59:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 15:59:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 15:59:32 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:00:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:00:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:05:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:06:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:07:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:08:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:11:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:11:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:11:59 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:12:04 --> Could not find the language line "Socks"
ERROR - 2023-10-27 16:12:24 --> Could not find the language line "Socks"
ERROR - 2023-10-27 16:12:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:12:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:12:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:12:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:12:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:13:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:13:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:13:39 --> Could not find the language line "Other"
ERROR - 2023-10-27 16:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:15:08 --> Could not find the language line "Other"
ERROR - 2023-10-27 16:15:11 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:15:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:15:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 16:15:37 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:15:52 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:16:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:16:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:17:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:17:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:17:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:17:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:17:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:17:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:18:54 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:19:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:22:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:23:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:24:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:26:49 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:26:57 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:27:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:27:22 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:28:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:29:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 16:30:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:35:05 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-27 16:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:38:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:39:12 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:40:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:42:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:43:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:43:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:44:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 16:46:43 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:47:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:48:07 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:48:23 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:48:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:51:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:55:03 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:57:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:57:11 --> Could not find the language line "Home"
ERROR - 2023-10-27 16:59:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 16:59:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:00:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:00:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:00:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:01:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:01:16 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:01:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:01:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:12:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 17:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 17:12:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 17:13:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 17:13:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 17:13:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 17:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:14:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:14:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:14:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:15:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:15:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:15:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 17:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('XXXL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-27 17:15:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 17:16:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:16:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:16:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:16:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:16:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:16:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:16:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:17:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:17:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:17:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:17:30 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:18:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:19:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:19:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:20:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:20:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:20:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:25:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:27:06 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:28:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:28:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:29:42 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:32:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:33:09 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:34:54 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:35:52 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:37:05 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:39:39 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:42:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:44:06 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:46:28 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:47:08 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:47:23 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:48:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:51:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:51:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:51:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:52:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-27 17:54:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:55:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:55:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:55:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:56:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 17:57:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 17:59:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 17:59:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:00:31 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:09:10 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:10:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:10:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:10:25 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 18:10:27 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 18:10:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:12:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:13:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 18:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 18:13:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 18:13:31 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:14:43 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:14:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:16:54 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:17:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:17:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:19:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:19:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:20:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:20:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:20:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:20:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:21:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:21:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:21:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:21:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:22:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-27 18:23:56 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:27:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:32:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:32:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 18:36:12 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:38:16 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:43:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:49:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:51:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:56:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:43 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 18:56:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 18:56:54 --> Could not find the language line "Disclaimer"
ERROR - 2023-10-27 18:57:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 18:57:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('47', '46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-27 18:57:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 18:59:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 18:59:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:00:50 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:06:17 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 100
ERROR - 2023-10-27 19:07:11 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:07:12 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:08:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 19:08:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 19:08:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 19:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:14:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:15:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:17:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:17:13 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:17:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:18:49 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 19:18:52 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:29:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-27 19:29:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-27 19:29:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-27 19:30:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:31:32 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 19:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:34:43 --> Could not find the language line "Other"
ERROR - 2023-10-27 19:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:49:18 --> Could not find the language line "Other"
ERROR - 2023-10-27 19:55:17 --> Could not find the language line "Home"
ERROR - 2023-10-27 19:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 19:59:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:01:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 20:01:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 20:02:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 20:02:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 20:03:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:03:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-27 20:07:24 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:07:24 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:16:38 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:18:45 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-27 20:18:47 --> 404 Page Not Found: Storage/settings
ERROR - 2023-10-27 20:19:35 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:34:27 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:34:27 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:35:33 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:37:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 20:42:03 --> Could not find the language line "Home"
ERROR - 2023-10-27 20:42:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 20:54:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:02:03 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-27 21:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:02:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 21:03:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 21:05:18 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:06:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:07:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:07:51 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:08:02 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:15:55 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:25:10 --> Could not find the language line "Socks"
ERROR - 2023-10-27 21:30:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 21:30:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:32:03 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:32:38 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:38:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 21:51:48 --> Could not find the language line "Home"
ERROR - 2023-10-27 21:56:31 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:02:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-27 22:02:47 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:02:53 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:02:58 --> 404 Page Not Found: Admin/index
ERROR - 2023-10-27 22:03:35 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-27 22:16:35 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:22:45 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:33:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-27 22:42:41 --> Could not find the language line "Home"
ERROR - 2023-10-27 22:47:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%f00%' OR a.description LIKE '%f00%' OR a.color LIKE '%f00%' OR a.barcode LIKE '%f00%' OR a.category LIKE '%f00%' OR a.sub_category LIKE '%f00%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2023-10-27 22:57:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 22:59:38 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:07:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-27 23:07:34 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:17:17 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:30:51 --> Could not find the language line "Bracelets"
ERROR - 2023-10-27 23:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-27 23:38:19 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:51:40 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:51:46 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:54:54 --> Could not find the language line "Home"
ERROR - 2023-10-27 23:59:10 --> Could not find the language line "Home"
