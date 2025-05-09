<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-21 00:09:41 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-21 00:13:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 00:34:40 --> Could not find the language line "Home"
ERROR - 2025-02-21 00:35:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 00:43:10 --> Could not find the language line "Home"
ERROR - 2025-02-21 00:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 00:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 01:13:11 --> Could not find the language line "Home"
ERROR - 2025-02-21 01:22:30 --> Could not find the language line "Home"
ERROR - 2025-02-21 01:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 01:33:55 --> Could not find the language line "Home"
ERROR - 2025-02-21 01:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 01:43:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 01:43:51 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 01:53:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-21 02:13:11 --> Could not find the language line "Home"
ERROR - 2025-02-21 02:29:30 --> Could not find the language line "Home"
ERROR - 2025-02-21 02:43:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 02:52:15 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-21 02:55:59 --> Could not find the language line "Home"
ERROR - 2025-02-21 02:56:04 --> Could not find the language line "Other"
ERROR - 2025-02-21 02:59:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:09:42 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:13:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:15:41 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:17:08 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:23:07 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:29:02 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:31:31 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:39:37 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-21 03:39:46 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-21 03:43:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 03:52:55 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:04:21 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 04:08:28 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:13:18 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:14:59 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 04:18:22 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:20:50 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:23:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-21 04:23:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-21 04:23:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-21 04:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 04:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 04:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 04:43:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 04:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 04:47:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 04:56:24 --> Could not find the language line "Home"
ERROR - 2025-02-21 05:09:41 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 05:13:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 05:43:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 06:03:55 --> Could not find the language line "Home"
ERROR - 2025-02-21 06:13:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 06:43:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 06:58:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-21 07:03:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 07:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 07:25:39 --> Could not find the language line "Other"
ERROR - 2025-02-21 07:30:44 --> Could not find the language line "Home"
ERROR - 2025-02-21 07:35:50 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-21 07:39:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 07:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 07:39:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 07:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 07:40:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 07:43:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 07:47:29 --> Could not find the language line "Home"
ERROR - 2025-02-21 08:00:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 08:04:08 --> Could not find the language line "Home"
ERROR - 2025-02-21 08:05:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Unisex%' OR a.description LIKE '%Unisex%' OR a.color LIKE '%Unisex%' OR a.barcode LIKE '%Unisex%' OR a.category LIKE '%Unisex%' OR a.sub_category LIKE '%Unisex%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 08:07:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Large Size%' OR (a.description LIKE '%Large%' AND a.description LIKE '%Size%')) OR ((tag = 'Large Size' OR tag = 'Big Sizes' OR tag = 'Large Size' OR tag = 'Size 45' OR tag = 'Size 46' OR tag = 'Size 47' OR tag = 'Size 48') AND (sub_category = 'Big Sizes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 08:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 08:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Winter%' OR a.description LIKE '%Winter%' OR a.color LIKE '%Winter%' OR a.barcode LIKE '%Winter%' OR a.category LIKE '%Winter%' OR a.sub_category LIKE '%Winter%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 08:22:51 --> Could not find the language line "Home"
ERROR - 2025-02-21 08:30:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-21 08:43:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 08:49:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 08:53:22 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:03:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 09:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 09:06:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 09:13:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:33:31 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:33:49 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:39:55 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 09:43:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 09:59:33 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:11:39 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-21 10:11:40 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:11:45 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:13:15 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:16:06 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:28:31 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-02-21 10:28:35 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-02-21 10:29:57 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:37:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 10:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 10:40:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 10:43:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 10:51:22 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 11:12:06 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:12:51 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:13:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:21:47 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:26:32 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:31:27 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:40:59 --> Could not find the language line "Home"
ERROR - 2025-02-21 11:43:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:01:38 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:01:39 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:11:25 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:21:30 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:25:25 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 12:43:17 --> Could not find the language line "Home"
ERROR - 2025-02-21 12:48:27 --> Could not find the language line "Home"
ERROR - 2025-02-21 13:05:02 --> Could not find the language line "Home"
ERROR - 2025-02-21 13:13:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 13:26:46 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-21 13:27:14 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-21 13:27:48 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-21 13:28:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-21 13:43:17 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:00:26 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-21 14:00:26 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:00:26 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:00:49 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:08:57 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-21 14:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:15:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:29:02 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 14:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 14:29:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 14:40:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 14:40:05 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:40:06 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:44:03 --> Could not find the language line "Home"
ERROR - 2025-02-21 14:47:17 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:47:22 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:49:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:49:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:49:08 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:49:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:49:09 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 14:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 14:51:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:03:50 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-21 15:06:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-21 15:07:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-21 15:08:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-21 15:13:17 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:23:59 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:24:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:51 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:52 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:53 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:24:55 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:25:24 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 15:26:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:26:16 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:27:06 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:31:44 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:31:48 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:31:57 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:34:03 --> Could not find the language line "Socks"
ERROR - 2025-02-21 15:36:23 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:37:19 --> Could not find the language line "Home"
ERROR - 2025-02-21 15:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:37:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:37:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 15:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-21 16:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 16:05:33 --> Could not find the language line "Home"
ERROR - 2025-02-21 16:06:03 --> Could not find the language line "Home"
ERROR - 2025-02-21 16:13:18 --> Could not find the language line "Home"
ERROR - 2025-02-21 16:43:18 --> Could not find the language line "Home"
ERROR - 2025-02-21 16:47:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 16:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 16:55:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 16:56:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Winter Collection%' OR (a.description LIKE '%Winter%' AND a.description LIKE '%Collection%')) OR ((sub_category = 'Winter Caps' OR sub_category = 'Winter collection' OR sub_category = 'Winter collection') AND (tag = 'Winter Collection' OR tag = 'Winter ' OR tag = 'Winter Collection')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 17:09:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-21 17:14:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Shoes%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Shoes%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport') AND (category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 17:19:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:21:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 17:41:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Sport Chic%' OR (a.description LIKE '%Sport%' AND a.description LIKE '%Chic%')) OR ((sub_category = 'Sportswear' OR sub_category = 'Sport & Casual') AND (tag = 'Sport Chic ' OR tag = 'Sport Shoes' OR tag = 'Sport' OR tag = 'Sport Chic ')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 17:43:20 --> Could not find the language line "Home"
ERROR - 2025-02-21 17:50:26 --> Could not find the language line "Home"
ERROR - 2025-02-21 17:56:58 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:10:03 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:13:19 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:14:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-21 18:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 18:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 18:17:12 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:24:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 18:29:23 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:30:59 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:43:20 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:46:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 18:48:03 --> Could not find the language line "Home"
ERROR - 2025-02-21 18:56:25 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:01:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-21 19:01:48 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-21 19:13:20 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:23:11 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:23:28 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 19:26:47 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:28:09 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-21 19:28:09 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:28:10 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-21 19:28:10 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-21 19:28:11 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-21 19:28:11 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-21 19:28:13 --> 404 Page Not Found: New/index
ERROR - 2025-02-21 19:28:13 --> 404 Page Not Found: Main/index
ERROR - 2025-02-21 19:28:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:28:44 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:35:01 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:35:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-21 19:41:13 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:43:21 --> Could not find the language line "Home"
ERROR - 2025-02-21 19:47:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 19:52:14 --> Could not find the language line "Home"
ERROR - 2025-02-21 20:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 20:13:21 --> Could not find the language line "Home"
ERROR - 2025-02-21 20:43:22 --> Could not find the language line "Home"
ERROR - 2025-02-21 21:13:21 --> Could not find the language line "Home"
ERROR - 2025-02-21 21:15:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 21:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 21:23:22 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-21 21:23:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%assets%' OR a.description LIKE '%assets%' OR a.color LIKE '%assets%' OR a.barcode LIKE '%assets%' OR a.category LIKE '%assets%' OR a.sub_category LIKE '%assets%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 21:23:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-21 21:40:21 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-21 21:40:21 --> Could not find the language line "Home"
ERROR - 2025-02-21 21:43:21 --> Could not find the language line "Home"
ERROR - 2025-02-21 21:57:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Size 48%' OR a.description LIKE '%Size 48%' OR a.color LIKE '%Size 48%' OR a.barcode LIKE '%Size 48%' OR a.category LIKE '%Size 48%' OR a.sub_category LIKE '%Size 48%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 22:04:57 --> Could not find the language line "Home"
ERROR - 2025-02-21 22:13:23 --> Could not find the language line "Home"
ERROR - 2025-02-21 22:15:27 --> Could not find the language line "Home"
ERROR - 2025-02-21 22:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Swimming shorts%' OR (a.description LIKE '%Swimming%' AND a.description LIKE '%shorts%')) OR ((tag = 'Swimming shorts' OR tag = 'Swimming shorts') AND (sub_category = 'Shorts')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-21 22:43:23 --> Could not find the language line "Home"
ERROR - 2025-02-21 23:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 23:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-21 23:08:49 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-21 23:08:49 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-21 23:11:15 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-21 23:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-21 23:13:24 --> Could not find the language line "Home"
ERROR - 2025-02-21 23:22:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-21 23:22:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-21 23:30:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-21 23:36:49 --> Could not find the language line "Home"
ERROR - 2025-02-21 23:43:23 --> Could not find the language line "Home"
ERROR - 2025-02-21 23:51:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-21 23:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-21 23:57:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-21 23:57:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
