<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-05 00:02:01 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:07:36 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:13:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 00:24:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 00:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 00:31:46 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:35:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 00:42:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:12 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:42:29 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:30 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:30 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:42:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:42:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:42:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 00:43:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:43:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:44:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 00:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 00:56:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 00:56:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 00:56:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:56:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:57:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 00:58:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 00:58:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 00:58:33 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-05 01:01:45 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:04:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 01:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:13:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:13:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:17:14 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:27:30 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 01:30:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:30:19 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:30:50 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:31:43 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:39:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 01:47:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:47:13 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:47:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 01:48:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 01:50:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:50:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:51:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:51:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:51:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:51:05 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-05 01:51:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:51:53 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:52:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:52:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 01:52:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 01:56:29 --> Could not find the language line "Home"
ERROR - 2024-06-05 01:56:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 02:01:58 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 02:14:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:17:29 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:21:08 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 02:21:30 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-05 02:29:39 --> Could not find the language line "products"
ERROR - 2024-06-05 02:31:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:37:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:41:10 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:44:32 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:51:42 --> Could not find the language line "Home"
ERROR - 2024-06-05 02:54:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 02:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 02:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:00:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:00:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:00:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:01:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:01:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:01:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:01:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 03:02:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 03:14:30 --> Could not find the language line "Home"
ERROR - 2024-06-05 03:20:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 03:20:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 'Wallets'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 03:20:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 03:31:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 03:49:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 03:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:50:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:50:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:51:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:51:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:51:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 03:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 03:52:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 04:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 04:00:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 04:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 04:00:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 04:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 04:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 04:01:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 04:01:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 04:01:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 04:01:52 --> Could not find the language line "Home"
ERROR - 2024-06-05 04:31:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 04:44:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 04:51:34 --> Could not find the language line "Home"
ERROR - 2024-06-05 04:55:37 --> Could not find the language line "products"
ERROR - 2024-06-05 05:01:45 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:03:29 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:10:27 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:12:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:21:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 05:21:43 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:27:59 --> Could not find the language line "Other"
ERROR - 2024-06-05 05:31:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:40:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 05:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:50:57 --> Could not find the language line "Home"
ERROR - 2024-06-05 05:51:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:51:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:51:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:53:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:54:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:54:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 05:54:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 05:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:54:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:55:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:55:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 05:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:55:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 05:56:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 05:57:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 05:59:13 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 05:59:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:00:29 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 06:01:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 06:04:35 --> Could not find the language line "Home"
ERROR - 2024-06-05 06:09:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:11:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:11:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:11:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:13:44 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 06:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:14:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:15:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:18:06 --> Could not find the language line "Home"
ERROR - 2024-06-05 06:18:25 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 06:23:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:25:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:26:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 06:27:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:28:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 06:29:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:30:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:30:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:30:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:30:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 06:31:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:31:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 06:32:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:32:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:33:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:33:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:33:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:35:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:35:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:41:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:42:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:45:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:45:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:45:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:45:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:46:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:46:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:46:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:00 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:47:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:47:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 06:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:51:12 --> Could not find the language line "Other"
ERROR - 2024-06-05 06:52:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 06:53:40 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 06:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:56:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:57:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 06:58:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:58:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 06:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:01:50 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:04:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 07:07:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 07:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:09:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 07:21:05 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:24:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 07:26:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:26:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 07:27:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 07:28:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:31:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:38:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:38:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 07:39:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:39:17 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:39:35 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:39:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:39:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:40:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:41:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-05 07:41:23 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:42:06 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:42:25 --> Could not find the language line "Home"
ERROR - 2024-06-05 07:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 07:57:06 --> Could not find the language line "products"
ERROR - 2024-06-05 08:01:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 08:06:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:09:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:09:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:27:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 08:28:03 --> Could not find the language line "Home"
ERROR - 2024-06-05 08:31:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 08:34:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:40:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:41:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:44:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:45:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 08:46:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 08:46:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 08:46:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 08:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:47:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 08:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:47:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 08:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:54:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:55:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:55:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 08:56:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:01:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:01:50 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:02:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:02:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:02:19 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-06-05 09:06:13 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:06:13 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:06:13 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:17:20 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:18:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:19:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:19:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:20:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:21:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:22:20 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:22:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 09:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`price` <= 'Shoes'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 09:22:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 09:26:31 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:31:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:31:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:32:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:33:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:33:58 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:34:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 09:34:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:34:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 09:34:31 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:34:55 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:35:03 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:35:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:35:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:35:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:35:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:35:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:36:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:36:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:37:01 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:38:31 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:39:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:39:52 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-05 09:39:57 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:40:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-05 09:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:40:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-05 09:40:22 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-05 09:40:22 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:44:12 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:46:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:46:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:47:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:47:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:52:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 09:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:57:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 09:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 09:58:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 10:01:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:06:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:07:46 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:08:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 10:08:29 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:08:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:12:21 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:15:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 10:18:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:19:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:21:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:21:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:21:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:21:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:25:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:25:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:26:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:27:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:28:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:28:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:28:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:28:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:31:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:36:41 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:37:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:40:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:41:30 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:41:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:41:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:41:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:41:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:42:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 10:42:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:42:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:43:26 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:43:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:43:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:44:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:44:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:44:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:44:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 10:44:44 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 10:45:49 --> Could not find the language line "Home"
ERROR - 2024-06-05 10:48:02 --> Could not find the language line "products"
ERROR - 2024-06-05 11:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:01:50 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:06:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:10:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:11:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-05 11:12:39 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:13:41 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:14:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:15:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 11:15:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:15:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 11:17:42 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:19:05 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:19:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:20:04 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:20:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:25:41 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:26:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:26:40 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 11:26:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:27:04 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 11:27:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:27:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 11:27:30 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 11:27:41 --> Could not find the language line "Socks"
ERROR - 2024-06-05 11:28:25 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:29:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:29:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:30:06 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:31:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:32:45 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:32:45 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:33:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:36:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:39:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:39:46 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:40:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:41:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:41:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:41:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:42:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:43:19 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:43:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 11:43:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:44:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:44:30 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:44:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:44:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 11:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:45:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:45:20 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:45:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:45:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:45:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:46:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 11:46:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:46:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:46:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 11:46:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:46:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:46:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 11:46:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:48:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 11:48:34 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 11:48:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Clothing')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 11:48:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 11:49:46 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:50:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 11:50:20 --> Could not find the language line "Home"
ERROR - 2024-06-05 11:51:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-05 12:01:52 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:01:54 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 12:01:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 12:01:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 12:02:01 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:03:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 12:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:04:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 12:04:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 12:04:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 12:05:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 12:15:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:15:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:19:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:19:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:21:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:31:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:36:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 12:36:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:50:41 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:52:04 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:52:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 12:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:58:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 12:59:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 13:01:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:08:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:08:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:08:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:09:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:09:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:09:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:09:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:09:16 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:09:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 13:09:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 13:10:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:11:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:11:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:12:08 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:12:17 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:21:20 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2024-06-05 13:21:21 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2024-06-05 13:21:21 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2024-06-05 13:21:21 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2024-06-05 13:22:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 13:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:24:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:24:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:26:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 13:31:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:39:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 13:45:02 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 13:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 13:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-05 13:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 13:45:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m121%' OR a.description LIKE '%m121%' OR a.color LIKE '%m121%' OR a.barcode LIKE '%m121%' OR a.category LIKE '%m121%' OR a.sub_category LIKE '%m121%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-05 13:45:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 13:47:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 13:55:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 13:55:41 --> Could not find the language line "Home"
ERROR - 2024-06-05 13:56:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 13:57:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:01:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:01:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:02:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:02:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:02:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:11:08 --> Could not find the language line "Other"
ERROR - 2024-06-05 14:26:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:26:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:31:52 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:36:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:37:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:37:35 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:38:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:39:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:49:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:50:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:50:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:50:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:52:22 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:53:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:55:03 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 14:55:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 14:55:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 14:55:08 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:58:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:58:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:58:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:59:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:59:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:59:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 14:59:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 14:59:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 14:59:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 15:00:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 15:01:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:03:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 15:03:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 15:03:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:03:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:03:58 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:04:13 --> Could not find the language line "Socks"
ERROR - 2024-06-05 15:04:30 --> Could not find the language line "Socks"
ERROR - 2024-06-05 15:04:46 --> Could not find the language line "Socks"
ERROR - 2024-06-05 15:04:50 --> Could not find the language line "Socks"
ERROR - 2024-06-05 15:04:52 --> Could not find the language line "Socks"
ERROR - 2024-06-05 15:04:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:05:00 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 15:05:09 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:06:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:06:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:07:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:07:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:08:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:08:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:09:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:11:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:11:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:11:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:11:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:12:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 15:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:13:04 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:13:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:13:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:13:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:14:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:14:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:14:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:14:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:14:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:15:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:15:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:15:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:15:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:15:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:15:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:15:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:15:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:17:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:17:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:17:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:17:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:17:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:23:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:23:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:24:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:24:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:25:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:25:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:25:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:25:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:25:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:25:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:26:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:29:01 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:29:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:30:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:31:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:32:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:32:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:32:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:34:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:35:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:36:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:36:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:37:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:37:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:37:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:38:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:38:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:40:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:41:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:45:48 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:46:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:46:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:47:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:47:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:47:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:47:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:47:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:48:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:48:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:48:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:48:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:49:34 --> Could not find the language line "Home"
ERROR - 2024-06-05 15:49:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:49:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:50:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:50:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:51:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:51:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:51:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:52:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:52:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:52:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 15:52:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:52:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 15:53:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 15:59:04 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:00:27 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:00:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:00:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:01:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:02:06 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:02:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:03:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:03:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:03:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:03:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:03:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:03:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:04:44 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:05:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 16:05:29 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 16:05:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:06:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 16:07:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:07:05 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:07:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:07:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:07:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:07:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:08:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:08:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:08:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:08:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:09:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:09:29 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:09:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:09:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:10:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:11:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:11:27 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:12:10 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:12:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:12:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:12:26 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-05 16:12:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:12:40 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:12:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:13:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:13:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:13:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:13:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:14:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:15:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:17:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 16:17:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 16:17:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 16:18:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 16:18:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:19:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:20:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:20:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:22:10 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:23:34 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:24:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:25:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:25:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:26:24 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:31:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:34:02 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:41:18 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 16:41:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-05 16:41:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-05 16:41:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:41:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 16:42:18 --> Could not find the language line "Socks"
ERROR - 2024-06-05 16:44:31 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:45:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:46:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:46:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:48:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 16:50:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 16:51:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 16:52:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 16:53:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 16:56:22 --> Could not find the language line "Home"
ERROR - 2024-06-05 16:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:00:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:01:54 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:08:25 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:10:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:10:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:11:07 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:14:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 17:15:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:21:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 17:21:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('accounts')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 17:21:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 17:24:32 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:27:33 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:31:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:31:56 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:32:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:34:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:34:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:35:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:35:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:35:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:36:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 17:36:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 17:36:58 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:39:17 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:39:37 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:39:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-05 17:39:56 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:42:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:42:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 17:42:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 17:43:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 17:43:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:44:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 17:44:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 17:44:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 17:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:46:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:47:55 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:49:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:50:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 17:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:50:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 17:52:26 --> Could not find the language line "Home"
ERROR - 2024-06-05 17:57:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:01:57 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:03:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:03:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:03:42 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:04:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:04:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:05:13 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:05:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:05:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 18:06:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:07:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 18:07:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:07:36 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:07:44 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:07:53 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:08:52 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:09:02 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:16:25 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:23:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:30:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 18:31:55 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:36:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 18:36:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 18:36:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 18:36:26 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:36:27 --> Could not find the language line "Other"
ERROR - 2024-06-05 18:36:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:37:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:37:42 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:38:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:42:11 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:42:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-05 18:42:47 --> Could not find the language line "Other"
ERROR - 2024-06-05 18:42:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:43:11 --> Could not find the language line "Other"
ERROR - 2024-06-05 18:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:43:21 --> Could not find the language line "Other"
ERROR - 2024-06-05 18:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:43:26 --> Could not find the language line "Other"
ERROR - 2024-06-05 18:47:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:47:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:47:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 18:50:21 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:50:38 --> Could not find the language line "Home"
ERROR - 2024-06-05 18:59:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 18:59:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Wallets'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 18:59:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 19:01:56 --> Could not find the language line "Home"
ERROR - 2024-06-05 19:08:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:18:50 --> Could not find the language line "Home"
ERROR - 2024-06-05 19:19:27 --> Could not find the language line "Home"
ERROR - 2024-06-05 19:19:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 19:20:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:25:27 --> Could not find the language line "Home"
ERROR - 2024-06-05 19:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:25:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:25:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:25:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:26:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 19:26:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:26:18 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:26:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 19:27:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:27:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 19:27:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'home'
AND `items`.`price` <= 'home'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('cart')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-05 19:27:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 19:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:27:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:27:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:27:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 19:29:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 19:31:56 --> Could not find the language line "Home"
ERROR - 2024-06-05 19:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:45:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 19:53:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 20:01:56 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:02:21 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:06:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 20:06:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:10:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:10:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:10:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:11:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:14:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:14:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 20:20:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 20:24:15 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:25:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:25:47 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:25:51 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-05 20:26:10 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:26:16 --> Could not find the language line "Bracelets"
ERROR - 2024-06-05 20:26:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:26:39 --> Could not find the language line "Perfume"
ERROR - 2024-06-05 20:26:45 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:29:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 20:31:57 --> Could not find the language line "Home"
ERROR - 2024-06-05 20:52:44 --> Could not find the language line "Home"
ERROR - 2024-06-05 21:01:32 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 21:01:57 --> Could not find the language line "Home"
ERROR - 2024-06-05 21:02:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 21:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 21:03:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 21:16:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 21:21:34 --> 404 Page Not Found: Products/products
ERROR - 2024-06-05 21:30:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 21:30:51 --> Could not find the language line "Home"
ERROR - 2024-06-05 21:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 21:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 21:31:41 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 21:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 21:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 21:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 21:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-05 21:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2024-06-05 21:31:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-05 21:31:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 21:34:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 21:35:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 21:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 21:35:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 21:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 21:36:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 21:37:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 21:48:35 --> Could not find the language line "products"
ERROR - 2024-06-05 21:49:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 21:51:03 --> Could not find the language line "Other"
ERROR - 2024-06-05 21:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 21:57:30 --> Could not find the language line "Socks"
ERROR - 2024-06-05 21:58:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:01:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:07:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:10:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 22:14:31 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 22:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:24:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:26:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:28:58 --> Could not find the language line "products"
ERROR - 2024-06-05 22:32:01 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:33:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:35:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:37:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:42:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:43:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 22:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:43:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 22:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:44:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:44:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 22:44:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 22:44:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 22:47:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:50:08 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 22:50:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-05 22:52:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:53:08 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:53:36 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:53:37 --> Could not find the language line "Home"
ERROR - 2024-06-05 22:54:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 22:56:35 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 23:00:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:02:00 --> Could not find the language line "Home"
ERROR - 2024-06-05 23:05:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 23:05:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-05 23:05:52 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-06-05 23:15:28 --> Could not find the language line "Home"
ERROR - 2024-06-05 23:28:29 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-05 23:30:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 23:31:59 --> Could not find the language line "Home"
ERROR - 2024-06-05 23:32:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:32:16 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:33:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:33:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:33:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:33:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 23:37:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 23:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:42:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:42:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-05 23:42:41 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 23:43:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:43:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:43:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-05 23:47:56 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-06-05 23:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:52:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:52:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-05 23:54:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-05 23:55:19 --> 404 Page Not Found: Assets/css
