<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-12 00:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 00:03:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 00:03:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 00:03:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 00:03:49 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:05:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:05:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 00:09:39 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 00:09:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 00:15:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:16:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:17:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 00:17:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:19:18 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 00:19:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Shoes')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 00:19:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 00:21:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:21:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:25:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:29:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:32:46 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:33:32 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-06-12 00:33:32 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-06-12 00:33:32 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-06-12 00:33:33 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-12 00:33:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-12 00:33:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:33:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-06-12 00:33:49 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-06-12 00:33:50 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:35:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:37:38 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:37:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:37:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 00:37:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 00:40:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 00:45:38 --> Could not find the language line "Other"
ERROR - 2024-06-12 00:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 00:51:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 00:53:40 --> Could not find the language line "Socks"
ERROR - 2024-06-12 00:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:03:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:03:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:04:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:05:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 01:05:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 01:06:00 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 01:06:18 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:08:35 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-12 01:09:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 01:10:20 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:10:20 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:10:20 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:11:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:18:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 01:22:56 --> Could not find the language line "Other"
ERROR - 2024-06-12 01:25:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:25:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 01:25:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 01:25:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:26:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:28:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:29:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:33:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 01:34:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:39:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:43:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 01:48:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:53:45 --> Could not find the language line "Other"
ERROR - 2024-06-12 01:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 01:57:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 01:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:02:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 02:03:50 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:03:53 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:04:39 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:04:43 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:04:49 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:04:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:05:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:05:47 --> Could not find the language line "Other"
ERROR - 2024-06-12 02:05:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:07:18 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:09:29 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:09:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:18:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 02:25:49 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-12 02:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 02:33:51 --> Could not find the language line "Home"
ERROR - 2024-06-12 02:33:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:36:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 02:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 02:45:52 --> Could not find the language line "Other"
ERROR - 2024-06-12 02:45:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:48:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 02:49:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 02:50:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 02:59:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:00:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:03:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:03:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:13:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 03:13:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 03:17:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 03:17:53 --> Could not find the language line "Other"
ERROR - 2024-06-12 03:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 03:19:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 03:23:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 03:23:33 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:24:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:25:36 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:30:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 03:33:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:36:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:45:01 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:45:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-12 03:47:10 --> Could not find the language line "Home"
ERROR - 2024-06-12 03:49:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 03:56:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:03:53 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:06:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:22:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:25:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:25:10 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:27:02 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:29:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:32:11 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-12 04:33:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:41:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 04:42:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:42:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:42:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:44:21 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:46:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 04:49:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:51:36 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:54:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:55:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 04:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 04:56:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:58:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-12 04:58:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 04:58:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 04:59:17 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:03:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:06:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 05:09:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 05:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 05:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 05:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 05:23:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 05:24:15 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:26:14 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:29:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 05:30:46 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-12 05:33:50 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:39:50 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:48:37 --> Could not find the language line "Home"
ERROR - 2024-06-12 05:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:00:09 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:00:46 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:01:04 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:02:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 06:03:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:04:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 06:08:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 06:08:47 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:21:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 06:24:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 06:26:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 06:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:30:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 06:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:32:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:33:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:33:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:33:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:34:08 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:34:16 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:34:33 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:34:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 06:34:47 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:35:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:36:10 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:38:21 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:38:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 06:39:33 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:44:40 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:44:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:51:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:51:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:52:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:52:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:52:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:52:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:52:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 06:52:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('view')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Clothing')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 06:52:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 06:54:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 06:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 06:57:18 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:57:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:57:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:58:02 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:58:13 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:58:13 --> Could not find the language line "Home"
ERROR - 2024-06-12 06:58:16 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:01:38 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:01:39 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:01:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 07:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:03:53 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:04:16 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:04:18 --> 404 Page Not Found: Api/user
ERROR - 2024-06-12 07:04:19 --> 404 Page Not Found: Index/user
ERROR - 2024-06-12 07:04:20 --> 404 Page Not Found: Static/css
ERROR - 2024-06-12 07:04:20 --> 404 Page Not Found: Aktv/img
ERROR - 2024-06-12 07:04:21 --> 404 Page Not Found: Static/home
ERROR - 2024-06-12 07:04:22 --> 404 Page Not Found: Static/wap
ERROR - 2024-06-12 07:04:23 --> 404 Page Not Found: Index_files/bankCheck.js
ERROR - 2024-06-12 07:04:24 --> 404 Page Not Found: H5/static
ERROR - 2024-06-12 07:04:25 --> 404 Page Not Found: Phone/images
ERROR - 2024-06-12 07:04:25 --> 404 Page Not Found: Api/banner
ERROR - 2024-06-12 07:04:26 --> 404 Page Not Found: Mobile/film
ERROR - 2024-06-12 07:04:27 --> 404 Page Not Found: Static/home
ERROR - 2024-06-12 07:04:27 --> 404 Page Not Found: Static/index
ERROR - 2024-06-12 07:04:28 --> 404 Page Not Found: Static/common
ERROR - 2024-06-12 07:04:29 --> 404 Page Not Found: Public/mobile
ERROR - 2024-06-12 07:04:29 --> 404 Page Not Found: Resource/home
ERROR - 2024-06-12 07:04:30 --> 404 Page Not Found: Front/index
ERROR - 2024-06-12 07:04:31 --> 404 Page Not Found: Static/admincp
ERROR - 2024-06-12 07:04:31 --> 404 Page Not Found: Views/commData
ERROR - 2024-06-12 07:04:32 --> 404 Page Not Found: Mobile/v3
ERROR - 2024-06-12 07:04:33 --> 404 Page Not Found: GetConfig/getArticle.do
ERROR - 2024-06-12 07:04:33 --> 404 Page Not Found: Public/home
ERROR - 2024-06-12 07:04:34 --> 404 Page Not Found: Installinc/vipsignInstall.css
ERROR - 2024-06-12 07:04:35 --> 404 Page Not Found: Wap/static
ERROR - 2024-06-12 07:04:35 --> 404 Page Not Found: Api/public
ERROR - 2024-06-12 07:04:36 --> 404 Page Not Found: Admin/webadmin.php
ERROR - 2024-06-12 07:04:37 --> 404 Page Not Found: Static/customer
ERROR - 2024-06-12 07:04:37 --> 404 Page Not Found: Source/20220119
ERROR - 2024-06-12 07:04:39 --> 404 Page Not Found: Api/system
ERROR - 2024-06-12 07:04:40 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:04:42 --> 404 Page Not Found: Public/static
ERROR - 2024-06-12 07:04:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:05:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:07:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 07:07:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:08:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 07:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:08:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 07:08:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:08:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:11:01 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 07:11:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:11:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:23 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:12:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:12:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:12:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 07:12:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:12:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:13:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:14:30 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 07:15:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:16:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:16:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:16:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:16:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:25:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 07:27:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-12 07:33:41 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:33:51 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:37:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:37:46 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:38:22 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:38:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 07:40:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:41:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:41:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:41:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:44:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:46:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:47:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:47:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:48:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:49:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:50:45 --> Could not find the language line "Home"
ERROR - 2024-06-12 07:51:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 07:52:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:52:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:52:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:52:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:53:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:54:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 07:54:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:56:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 07:57:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:01:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:03:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 08:04:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:06:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 08:07:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:15:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:15:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:16:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:16:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:17:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:17:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:18:21 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-06-12 08:18:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 08:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:22:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:23:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:23:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 08:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:24:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:24:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:26:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 08:26:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:27:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:27:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 08:28:02 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:28:03 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 08:28:13 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 08:28:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:28:22 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 08:28:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 08:28:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 08:28:37 --> Could not find the language line "Home"
ERROR - 2024-06-12 08:28:42 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 08:28:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 08:30:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:31:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:31:33 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-12 08:32:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:32:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 08:32:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:32:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:32:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:33:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:33:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:33:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:33:53 --> Could not find the language line "Home"
ERROR - 2024-06-12 08:34:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 08:34:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:34:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:34:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:35:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:35:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:35:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:35:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:35:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:35:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:35:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:36:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:36:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 08:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:37:17 --> Could not find the language line "products"
ERROR - 2024-06-12 08:42:31 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 08:42:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 08:46:10 --> Could not find the language line "products"
ERROR - 2024-06-12 08:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:46:29 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 08:47:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 08:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:56:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:58:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:58:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 08:58:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:02:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:02:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:02:49 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 09:03:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:06:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 09:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 09:13:36 --> 404 Page Not Found: Sitemapsxml/index
ERROR - 2024-06-12 09:19:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:20:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:20:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 09:22:24 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:23:21 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:23:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:27:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:27:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 09:27:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:28:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:28:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:28:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:28:08 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 09:28:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-12 09:28:15 --> Could not find the language line "Socks"
ERROR - 2024-06-12 09:28:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 09:28:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 09:32:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:33:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:38:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 09:40:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:40:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:41:00 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:42:05 --> Could not find the language line "Home"
ERROR - 2024-06-12 09:44:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:44:50 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:45:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:45:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:47:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:47:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:47:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:47:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:48:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:48:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:48:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:48:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:49:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 09:49:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:49:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 09:49:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:54:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:58:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 09:58:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 10:01:00 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:01:09 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:02:45 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 10:03:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:04:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:05:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:06:43 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 10:10:41 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 10:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:14:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:16:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:16:45 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:17:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 10:19:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:19:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:20:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 10:21:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:21:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 10:30:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:30:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:30:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:33:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:36:48 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:37:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 10:37:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:37:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 10:37:15 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:37:28 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:37:30 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:37:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 10:38:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:42:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:42:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:42:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:43:44 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:46:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:48:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:50:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:53:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 10:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 10:53:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 10:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 10:55:45 --> Could not find the language line "Socks"
ERROR - 2024-06-12 10:58:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:03:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 11:05:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:05:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:05:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:06:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:07:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:17 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 11:08:30 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:08:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:09:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:09:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 11:19:07 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:20:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:21:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:23:07 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:26:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:30:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:33:45 --> Could not find the language line "products"
ERROR - 2024-06-12 11:33:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:34:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:35:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:38:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 11:40:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 11:42:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 11:43:30 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:44:34 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:44:35 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:44:44 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 11:44:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 11:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:46:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:48:44 --> Could not find the language line "Other"
ERROR - 2024-06-12 11:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:53:04 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:53:45 --> Could not find the language line "Home"
ERROR - 2024-06-12 11:57:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 11:58:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 11:58:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 12:01:54 --> 404 Page Not Found: Products/products
ERROR - 2024-06-12 12:02:39 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:03:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:04:29 --> Could not find the language line "products"
ERROR - 2024-06-12 12:06:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:08:02 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:09:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:10:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:10:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:13:00 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:14:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 12:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:22:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 12:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:22:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:26:09 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 12:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:26:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:28:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:30:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:33:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:34:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 12:36:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 12:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:39:00 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:39:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 12:39:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 12:41:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:43:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:43:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:44:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:45:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:45:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:45:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:46:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:47:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:47:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:47:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:47:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:47:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:47:56 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 12:48:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:48:52 --> Could not find the language line "Socks"
ERROR - 2024-06-12 12:50:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:50:36 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-12 12:50:37 --> Could not find the language line "Home"
ERROR - 2024-06-12 12:50:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:52:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:52:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:52:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:53:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:54:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:54:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:54:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 12:55:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:58:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 12:58:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 12:58:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:03:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:03:06 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:03:07 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:03:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:03:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:08:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:08:36 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:08:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:08:53 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:08:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:08:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:09:26 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:09:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:09:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:14:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:14:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:19:36 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:22:14 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:22:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 13:22:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:24:57 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-12 13:26:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:27:05 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:27:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:27:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:27:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:27:19 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:33:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:38:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:38:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 13:38:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 13:39:08 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:39:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 13:39:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 13:39:41 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:39:43 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:39:45 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:39:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:40:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 13:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 13:48:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 13:50:11 --> Could not find the language line "Home"
ERROR - 2024-06-12 13:59:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:03:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:04:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:20:25 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:20:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:26:09 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-12 14:26:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:26:29 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:26:30 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:27:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:31:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 14:33:11 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:33:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:41:52 --> Could not find the language line "Home"
ERROR - 2024-06-12 14:43:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:45:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:46:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 14:55:24 --> Could not find the language line "Other"
ERROR - 2024-06-12 14:55:37 --> Could not find the language line "Socks"
ERROR - 2024-06-12 14:59:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:00:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:03:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:10:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:11:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 15:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'home'
AND `items`.`sub_category` IN('users')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 15:11:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 15:14:23 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-12 15:14:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:14:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:15:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:15:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:15:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:15:32 --> Could not find the language line "Other"
ERROR - 2024-06-12 15:15:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:16:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:18:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:18:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:19:08 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:19:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-12 15:19:30 --> Could not find the language line "Socks"
ERROR - 2024-06-12 15:19:40 --> Could not find the language line "Socks"
ERROR - 2024-06-12 15:19:50 --> Could not find the language line "Socks"
ERROR - 2024-06-12 15:20:01 --> Could not find the language line "Socks"
ERROR - 2024-06-12 15:20:12 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 15:20:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-12 15:20:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 15:20:51 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 15:20:58 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 15:21:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 15:21:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:21:28 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 15:21:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:22:00 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 15:22:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 15:33:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:43:38 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:43:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:43:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:43:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:44:21 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:44:22 --> Could not find the language line "Home"
ERROR - 2024-06-12 15:44:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:44:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:44:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:44:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:44:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:44:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:45:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:45:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:45:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:45:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 15:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:46:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:46:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:46:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:46:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 15:46:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:46:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 15:53:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 15:53:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:03:57 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:08:37 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:11:34 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:12:17 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:12:47 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 16:17:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:19:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:21:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 16:22:19 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:22:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:22:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 16:23:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:24:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:26:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:26:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:28:32 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:33:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:33:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 16:44:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 16:45:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:47:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 16:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:54:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 16:55:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 16:55:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 16:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:00:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 17:00:48 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:00:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:00:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:01:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:01:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:01:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:01:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:01:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:01:34 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:01:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:01:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:01:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:02:35 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:02:41 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:02:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:02:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:02:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:02:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:02:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:03:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:03:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:03:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:03:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:03:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:03:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:03:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:04:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:04:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:04:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:04:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:04:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:04:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:04:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:04:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:04:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:05:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:06:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:07:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:07:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 17:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:08:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:08:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:08:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:08:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:08:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:09:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:09:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:09:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:09:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:10:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:10:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:10:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:10:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:10:13 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:10:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:11:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:12:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:12:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:12:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 17:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:12:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:12:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:13:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:13:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:13:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:13:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:13:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:13:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:14:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:14:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:14:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:14:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:15:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:15:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:15:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:15:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:15:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:15:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:15:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:15:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:15:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:16:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:16:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:16:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:18:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:23:40 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 17:23:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 17:23:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 17:33:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:50:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:51:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:51:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 17:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:51:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:56:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 17:57:50 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-12 17:57:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 17:57:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 17:58:56 --> Could not find the language line "Home"
ERROR - 2024-06-12 17:59:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:59:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:59:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:59:43 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 17:59:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 17:59:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 17:59:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 18:03:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:05:13 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:05:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 18:07:30 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:12:13 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:12:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:17:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-12 18:17:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 18:17:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 18:19:14 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:20:49 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:20:54 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:22:05 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:22:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:24:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 18:30:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:30:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:30:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:32:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 18:33:58 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:51:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 18:56:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:57:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:58:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 18:58:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 18:59:40 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:00:15 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:01:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 19:03:05 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:03:59 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:05:14 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:06:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 19:11:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:13:51 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:14:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:18:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 19:23:55 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:26:45 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:27:09 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:27:09 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-12 19:27:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Hats'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Shoes'
AND `items`.`price` <= 'users'
AND `items`.`color` IN('users')
AND `transaction_item_sizes`.`size` IN('users')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-12 19:27:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-12 19:34:01 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:52:28 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:53:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:53:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:54:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:54:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:56:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:56:24 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:57:39 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:57:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:58:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:58:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:59:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:59:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 19:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:59:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 19:59:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 19:59:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:00:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:00:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:01:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:01:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:01:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:01:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:02:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:03:20 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:03:52 --> Could not find the language line "Perfume"
ERROR - 2024-06-12 20:03:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:04:00 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:04:01 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:04:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:04:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 20:04:12 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:04:18 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 20:05:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:07:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:08:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:08:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:10:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:10:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:10:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:10:40 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:10:42 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:11:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:11:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 20:14:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:14:23 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:14:28 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:34:01 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:36:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 20:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 20:45:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:45:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:53:30 --> Could not find the language line "Other"
ERROR - 2024-06-12 20:53:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:55:36 --> Could not find the language line "Home"
ERROR - 2024-06-12 20:55:43 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 20:55:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 20:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 20:57:41 --> Could not find the language line "Bracelets"
ERROR - 2024-06-12 20:57:42 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 20:59:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 20:59:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 21:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:04:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:07:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:12:07 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:14:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:14:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:15:56 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 21:16:09 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:16:17 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:16:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:17:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:17:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:18:34 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 21:27:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 21:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:34:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:34:10 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:46:19 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 21:46:53 --> 404 Page Not Found: Metajson/index
ERROR - 2024-06-12 21:46:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:48:49 --> Could not find the language line "Home"
ERROR - 2024-06-12 21:51:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:51:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 21:52:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 21:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 22:04:02 --> Could not find the language line "Home"
ERROR - 2024-06-12 22:16:42 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 22:20:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 22:20:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 22:24:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:24:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 22:25:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 22:28:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:28:08 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-12 22:31:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 22:32:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:33:40 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-12 22:34:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 22:40:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 22:41:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 22:44:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:44:35 --> Could not find the language line "Home"
ERROR - 2024-06-12 22:45:10 --> Could not find the language line "Home"
ERROR - 2024-06-12 22:52:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:52:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:56:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 22:58:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 23:00:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:04:03 --> Could not find the language line "Home"
ERROR - 2024-06-12 23:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:08:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:12:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:13:17 --> Could not find the language line "Home"
ERROR - 2024-06-12 23:13:38 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:13:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 23:13:42 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 23:14:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:14:19 --> Could not find the language line "products"
ERROR - 2024-06-12 23:14:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:14:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:14:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:15:09 --> Could not find the language line "Other"
ERROR - 2024-06-12 23:15:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:15:33 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:15:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:15:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-12 23:16:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-12 23:20:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:28:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 23:32:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:33:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%m120%' OR a.description LIKE '%m120%' OR a.color LIKE '%m120%' OR a.barcode LIKE '%m120%' OR a.category LIKE '%m120%' OR a.sub_category LIKE '%m120%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-12 23:34:04 --> Could not find the language line "Home"
ERROR - 2024-06-12 23:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:45:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:48:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-12 23:50:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:52:14 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-12 23:56:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-12 23:56:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-06-12 23:58:50 --> Could not find the language line "Clothing"
