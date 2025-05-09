<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-11-06 00:04:32 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-11-06 00:04:32 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-11-06 00:04:32 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-11-06 00:04:33 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-11-06 00:07:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:07:45 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:08:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 00:08:04 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:08:20 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:08:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:09:30 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:09:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:10:41 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:19 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:22 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:23 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:11:28 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 00:17:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 00:36:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 00:37:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 00:37:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 00:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 00:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 00:37:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 00:37:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 00:38:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 00:38:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 00:40:40 --> Could not find the language line "Home"
ERROR - 2024-11-06 00:44:13 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 00:47:26 --> Could not find the language line "Home"
ERROR - 2024-11-06 00:50:48 --> Could not find the language line "Home"
ERROR - 2024-11-06 00:53:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-06 00:53:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Size 45%' OR a.description LIKE '%Size 45%' OR a.color LIKE '%Size 45%' OR a.barcode LIKE '%Size 45%' OR a.category LIKE '%Size 45%' OR a.sub_category LIKE '%Size 45%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 00:55:55 --> Could not find the language line "Home"
ERROR - 2024-11-06 01:08:42 --> Could not find the language line "Home"
ERROR - 2024-11-06 01:11:43 --> Could not find the language line "Home"
ERROR - 2024-11-06 01:17:25 --> Could not find the language line "Home"
ERROR - 2024-11-06 01:27:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 01:39:18 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 01:43:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 01:47:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 01:49:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 01:54:24 --> Could not find the language line "Other"
ERROR - 2024-11-06 01:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 02:10:12 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-06 02:11:22 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 02:12:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 02:17:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 02:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 02:49:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 03:10:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 03:10:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 03:10:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 03:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 03:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 03:17:38 --> Could not find the language line "Home"
ERROR - 2024-11-06 03:32:15 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-06 03:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 03:47:38 --> Could not find the language line "Home"
ERROR - 2024-11-06 03:54:58 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-06 04:01:16 --> Could not find the language line "Home"
ERROR - 2024-11-06 04:01:24 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 04:02:09 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 04:02:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 04:02:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 04:02:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 04:17:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 04:26:56 --> Could not find the language line "Home"
ERROR - 2024-11-06 04:31:41 --> Could not find the language line "Home"
ERROR - 2024-11-06 04:47:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:15:51 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:17:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:27:24 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:27:32 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:27:50 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:13 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:16 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:22 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:32 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:28:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:29:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 05:32:58 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:47:27 --> Could not find the language line "Home"
ERROR - 2024-11-06 05:50:33 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-11-06 05:52:30 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-11-06 05:57:05 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 06:00:27 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:05:02 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:09:40 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:11:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 06:17:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:20:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 06:23:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 06:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 06:31:14 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:40:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 06:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 06:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 06:57:01 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:03:28 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-11-06 07:16:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 07:17:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:20:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 07:21:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 07:27:03 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:41:46 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:42:06 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:42:39 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:44:07 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:47:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:48:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 07:52:11 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:52:46 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:57:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 07:58:00 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:58:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 07:58:04 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:58:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:58:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 07:58:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:58:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 07:59:49 --> Could not find the language line "Home"
ERROR - 2024-11-06 07:59:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 07:59:59 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:00:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 08:01:48 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:01:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:02:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:02:39 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:02:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:03:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:03:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:03:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 08:04:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:11:44 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:17:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:22:03 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:22:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:22:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:40:23 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:40:54 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:49:56 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:50:12 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:50:19 --> Could not find the language line "Home"
ERROR - 2024-11-06 08:54:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 08:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:05:09 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:05:10 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:05:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 09:14:50 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:17:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:18:48 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:18:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 09:20:36 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:20:40 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:20:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:27:14 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-06 09:27:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-11-06 09:27:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 09:33:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:33:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:34:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 09:36:00 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:36:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:36:06 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:36:28 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 09:37:40 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 09:38:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 09:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:40:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:42:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:45:19 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:54:00 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:55:06 --> Could not find the language line "Home"
ERROR - 2024-11-06 09:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 09:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 10:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 10:00:36 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:01:08 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:01:14 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:01:20 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:01:25 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:01:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 10:13:49 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:13:55 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:14:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:14:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:14:18 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:14:25 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 10:17:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:25:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Jogging%' OR a.description LIKE '%Jogging%' OR a.color LIKE '%Jogging%' OR a.barcode LIKE '%Jogging%' OR a.category LIKE '%Jogging%' OR a.sub_category LIKE '%Jogging%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 10:33:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 10:47:30 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:56:09 --> Could not find the language line "Home"
ERROR - 2024-11-06 10:56:33 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 10:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:02:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Sport%' OR a.description LIKE '%Sport%' OR a.color LIKE '%Sport%' OR a.barcode LIKE '%Sport%' OR a.category LIKE '%Sport%' OR a.sub_category LIKE '%Sport%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 11:02:53 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:02:58 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 11:03:02 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:03:13 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 11:03:16 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:03:48 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:04:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:04:09 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-06 11:04:11 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:04:14 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 11:04:16 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:13:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 11:14:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 11:16:20 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:16:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:16:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:16:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:16:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:16:21 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:17:06 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:17:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:17:50 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:17:51 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:17:51 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:17:51 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:17:51 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:17:51 --> 404 Page Not Found: Home/assets
ERROR - 2024-11-06 11:20:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-11-06 11:31:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:33:38 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:33:38 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:33:44 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:34:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:35:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-11-06 11:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:37:12 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:37:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:38:28 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:38:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:38:54 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:38:56 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:38:57 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:38:59 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:39:58 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:40:16 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:40:17 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:40:35 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 11:40:49 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-06 11:40:53 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:41:08 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:41:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-06 11:42:02 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-06 11:42:12 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:43:18 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-11-06 11:43:24 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:43:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:43:52 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:43:53 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:44:54 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 11:47:26 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:47:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:48:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:48:03 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:48:42 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:49:13 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:52:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:52:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:52:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:52:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 11:52:36 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 11:55:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 12:02:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE (a.description LIKE '%Sexy Appeal%' OR (a.description LIKE '%Sexy%' AND a.description LIKE '%Appeal%')) OR ((tag = 'Sexy Appeal ' OR tag = 'Sexy Appeal ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 12:05:17 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 12:07:04 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 12:11:17 --> Could not find the language line "Home"
ERROR - 2024-11-06 12:14:10 --> Could not find the language line "Other"
ERROR - 2024-11-06 12:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 12:17:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 12:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Fashion%' OR a.description LIKE '%Fashion%' OR a.color LIKE '%Fashion%' OR a.barcode LIKE '%Fashion%' OR a.category LIKE '%Fashion%' OR a.sub_category LIKE '%Fashion%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 12:44:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 12:44:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 12:45:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 12:45:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 12:46:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-11-06 12:46:41 --> Could not find the language line "Home"
ERROR - 2024-11-06 12:47:31 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:00:52 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 13:01:20 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:17:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:28:51 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:07 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:33 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:49 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:29:56 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-11-06 13:30:03 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 13:30:11 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:30:21 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:30:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:30:36 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:30:44 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:30:51 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-11-06 13:39:46 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:47:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 13:54:30 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-11-06 14:11:33 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 14:17:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 14:25:43 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-11-06 14:25:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-11-06 14:25:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 14:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:27:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:27:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:28:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:30:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 14:47:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 15:00:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 15:17:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 15:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 15:41:57 --> Could not find the language line "Home"
ERROR - 2024-11-06 15:47:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 15:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:02:30 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 16:02:31 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:02:32 --> Could not find the language line "Other"
ERROR - 2024-11-06 16:02:32 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 16:02:32 --> Could not find the language line "Other"
ERROR - 2024-11-06 16:02:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:02:34 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 16:02:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 16:17:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:21:52 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:22:16 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:23:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:23:10 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:23:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-06 16:23:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-11-06 16:23:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:23:33 --> Could not find the language line "Perfume"
ERROR - 2024-11-06 16:23:38 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:23:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:23:59 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:24:26 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:24:42 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:24:44 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 16:24:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:24:51 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:24:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-06 16:25:07 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:25:18 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 16:25:23 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:25:25 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 16:25:29 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:25:34 --> Could not find the language line "Socks"
ERROR - 2024-11-06 16:25:45 --> Could not find the language line "Socks"
ERROR - 2024-11-06 16:25:50 --> Could not find the language line "Socks"
ERROR - 2024-11-06 16:25:56 --> Could not find the language line "Socks"
ERROR - 2024-11-06 16:25:56 --> Could not find the language line "Socks"
ERROR - 2024-11-06 16:25:59 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:26:02 --> Could not find the language line "Bracelets"
ERROR - 2024-11-06 16:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:26:11 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 16:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:26:46 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 16:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:29:41 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:30:33 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:36:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:37:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:38:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:38:44 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:41:24 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 16:43:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 16:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 16:43:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 16:43:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-11-06 16:43:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-06 16:43:32 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-06 16:43:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-11-06 16:44:17 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:47:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 16:49:45 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 17:00:51 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 17:01:11 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 17:01:15 --> Could not find the language line "Perfume"
ERROR - 2024-11-06 17:06:14 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:17:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:38:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:43:05 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-06 17:43:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:43:06 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:43:06 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:43:08 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-06 17:43:08 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:43:08 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:43:09 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:43:10 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-11-06 17:43:10 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:43:11 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:43:11 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 17:47:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 17:55:45 --> Could not find the language line "Home"
ERROR - 2024-11-06 18:17:35 --> Could not find the language line "Home"
ERROR - 2024-11-06 18:42:32 --> Could not find the language line "Home"
ERROR - 2024-11-06 18:47:35 --> Could not find the language line "Home"
ERROR - 2024-11-06 18:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 18:48:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 18:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 18:48:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 18:49:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:49:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:49:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:49:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%w180%' OR a.description LIKE '%w180%' OR a.color LIKE '%w180%' OR a.barcode LIKE '%w180%' OR a.category LIKE '%w180%' OR a.sub_category LIKE '%w180%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:49:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:49:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2024-11-06 18:51:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%topmove%' OR a.description LIKE '%topmove%' OR a.color LIKE '%topmove%' OR a.barcode LIKE '%topmove%' OR a.category LIKE '%topmove%' OR a.sub_category LIKE '%topmove%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 18:51:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-11-06 19:17:35 --> Could not find the language line "Home"
ERROR - 2024-11-06 19:33:51 --> Could not find the language line "Home"
ERROR - 2024-11-06 19:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 19:47:35 --> Could not find the language line "Home"
ERROR - 2024-11-06 19:49:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 19:49:05 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-06 19:49:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 20:17:36 --> Could not find the language line "Home"
ERROR - 2024-11-06 20:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 20:47:39 --> Could not find the language line "Home"
ERROR - 2024-11-06 20:48:56 --> Could not find the language line "Home"
ERROR - 2024-11-06 20:49:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%Fall%' OR a.description LIKE '%Fall%' OR a.color LIKE '%Fall%' OR a.barcode LIKE '%Fall%' OR a.category LIKE '%Fall%' OR a.sub_category LIKE '%Fall%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-11-06 20:58:11 --> Could not find the language line "Home"
ERROR - 2024-11-06 20:58:28 --> 404 Page Not Found: Assets/mail
ERROR - 2024-11-06 21:10:15 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 21:13:16 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 21:13:30 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 21:13:32 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-11-06 21:18:57 --> Could not find the language line "Home"
ERROR - 2024-11-06 21:48:57 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:03:25 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:18:58 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:32:15 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:33:25 --> 404 Page Not Found: Metajson/index
ERROR - 2024-11-06 22:34:34 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:35:57 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:36:20 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:36:32 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 22:36:43 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 22:36:44 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:36:47 --> Could not find the language line "Clothing"
ERROR - 2024-11-06 22:37:02 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:37:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-11-06 22:37:17 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:48:46 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:48:58 --> Could not find the language line "Home"
ERROR - 2024-11-06 22:51:40 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:02:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-11-06 23:12:45 --> Could not find the language line "Other"
ERROR - 2024-11-06 23:14:37 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:18:56 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:19:00 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:27:57 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:30:05 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:33:28 --> Could not find the language line "Sunglasses"
ERROR - 2024-11-06 23:49:02 --> Could not find the language line "Home"
ERROR - 2024-11-06 23:51:50 --> Could not find the language line "Home"
