<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-06-14 00:00:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:04:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:04:27 --> Could not find the language line "Home"
ERROR - 2024-06-14 00:06:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 00:08:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:12:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:15:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 00:16:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:20:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:24:03 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:28:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:32:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 00:32:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 00:34:25 --> Could not find the language line "Home"
ERROR - 2024-06-14 00:40:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:44:05 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 00:52:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:52:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 00:56:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 00:59:51 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-06-14 01:00:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 01:04:28 --> Could not find the language line "Home"
ERROR - 2024-06-14 01:05:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 01:07:38 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-14 01:08:07 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 01:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:16:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:23:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 01:24:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:27:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 01:28:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:32:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:34:26 --> Could not find the language line "Home"
ERROR - 2024-06-14 01:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 01:36:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 01:40:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:40:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 01:44:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:44:10 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 01:46:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-14 01:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'cart'
AND `items`.`price` <= 'accounts'
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-14 01:46:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 01:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 01:48:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 01:50:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 01:52:11 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 01:52:46 --> Could not find the language line "Other"
ERROR - 2024-06-14 01:55:09 --> Could not find the language line "Socks"
ERROR - 2024-06-14 02:00:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:04:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:04:28 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:05:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:08:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:11:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 02:13:35 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-06-14 02:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 02:24:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:24:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:28:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:32:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:33:17 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-06-14 02:34:28 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:34:28 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:34:39 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:34:40 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:35:26 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:35:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:36:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:36:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:36:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:36:40 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:36:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:37:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:37:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:38:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:38:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:38:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:38:37 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:38:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:38:57 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:39:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:39:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:39:47 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:40:03 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:40:10 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:40:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:40:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:40:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:40:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:40:36 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:41:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:14 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:17 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:23 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:41:58 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:42:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:42:06 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 02:42:07 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 02:42:08 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:42:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:43:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:46:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:46:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:46:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:48:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:49:13 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-14 02:49:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 02:50:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:50:43 --> Could not find the language line "Socks"
ERROR - 2024-06-14 02:50:49 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:52:06 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-14 02:52:08 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:52:15 --> Could not find the language line "Other"
ERROR - 2024-06-14 02:52:17 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:55:22 --> Could not find the language line "Home"
ERROR - 2024-06-14 02:56:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 02:58:49 --> Could not find the language line "Home"
ERROR - 2024-06-14 03:01:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 03:03:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 03:04:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:04:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 03:05:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:05:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 03:06:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 03:06:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 03:06:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 03:07:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 03:08:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:09:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 03:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 03:12:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 03:22:03 --> Could not find the language line "Home"
ERROR - 2024-06-14 03:24:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:24:19 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 03:25:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:25:52 --> Could not find the language line "Home"
ERROR - 2024-06-14 03:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:28:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:28:23 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:34:31 --> Could not find the language line "Home"
ERROR - 2024-06-14 03:36:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:40:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:44:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:44:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 03:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 03:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 03:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:00:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:00:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 04:04:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:04:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:04:41 --> Could not find the language line "Home"
ERROR - 2024-06-14 04:08:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:12:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:12:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:15:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 04:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:18:35 --> 404 Page Not Found: 400shtml/index
ERROR - 2024-06-14 04:28:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-14 04:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:32:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:34:29 --> Could not find the language line "Home"
ERROR - 2024-06-14 04:36:28 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 04:36:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 04:36:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 04:40:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 04:43:14 --> Could not find the language line "Home"
ERROR - 2024-06-14 04:44:19 --> Could not find the language line "Home"
ERROR - 2024-06-14 04:49:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 04:52:30 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 04:56:31 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 05:00:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 05:00:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:04:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 05:04:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:04:33 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 05:07:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 05:08:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:08:32 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 05:16:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:24:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 05:28:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:32:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:34:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 05:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:40:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 05:41:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 05:44:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:46:43 --> Could not find the language line "Home"
ERROR - 2024-06-14 05:46:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 05:46:46 --> Could not find the language line "Home"
ERROR - 2024-06-14 05:55:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 05:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 05:57:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 06:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:04:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:05:13 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:07:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 06:07:03 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:07:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:11:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:12:39 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:15:10 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:15:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:15:45 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 06:15:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 06:16:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:16:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:16:41 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:17:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:17:27 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:17:45 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:18:03 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:18:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 06:22:38 --> Could not find the language line "Other"
ERROR - 2024-06-14 06:24:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:25:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 06:25:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:28:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 06:32:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:32:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:33:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 06:33:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 06:34:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:37:46 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 06:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 06:41:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:41:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:44:20 --> Could not find the language line "products"
ERROR - 2024-06-14 06:44:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:46:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:47:08 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 06:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 06:48:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:49:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 06:49:52 --> Could not find the language line "Home"
ERROR - 2024-06-14 06:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:56:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:56:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 06:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 07:00:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:03:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 07:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:04:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 07:04:29 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:05:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 07:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:07:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:12:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 07:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:19:16 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-14 07:21:10 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-14 07:21:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('Clothing')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 'category'
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-14 07:21:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 07:23:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:24:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:24:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 07:29:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 07:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:32:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 07:34:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:35:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:39:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 07:39:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:41:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 07:42:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:42:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 07:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:49:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 07:51:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 07:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:02:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 08:04:29 --> Could not find the language line "Home"
ERROR - 2024-06-14 08:06:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 08:12:18 --> Could not find the language line "Home"
ERROR - 2024-06-14 08:13:22 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-14 08:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:14:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:14:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:15:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:18:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:18:02 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 08:18:05 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 08:18:05 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 08:18:08 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 08:18:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 08:18:09 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 08:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:21:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 08:21:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 08:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 08:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 08:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 08:31:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 08:31:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 08:34:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 08:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:43:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:43:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 08:51:39 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-06-14 09:01:55 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 09:01:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 09:01:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 09:02:36 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:02:36 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:02:36 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:02:47 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:04:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:05:46 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:06:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%t170%' OR a.description LIKE '%t170%' OR a.color LIKE '%t170%' OR a.barcode LIKE '%t170%' OR a.category LIKE '%t170%' OR a.sub_category LIKE '%t170%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:06:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:07:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 09:07:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 09:16:43 --> Could not find the language line "Other"
ERROR - 2024-06-14 09:20:02 --> Could not find the language line "Socks"
ERROR - 2024-06-14 09:20:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:24:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:30:09 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:34:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:36:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:36:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 09:38:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:38:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:38:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%T174%' OR a.description LIKE '%T174%' OR a.color LIKE '%T174%' OR a.barcode LIKE '%T174%' OR a.category LIKE '%T174%' OR a.sub_category LIKE '%T174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%T174%' OR a.description LIKE '%T174%' OR a.color LIKE '%T174%' OR a.barcode LIKE '%T174%' OR a.category LIKE '%T174%' OR a.sub_category LIKE '%T174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:38:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%T174%' OR a.description LIKE '%T174%' OR a.color LIKE '%T174%' OR a.barcode LIKE '%T174%' OR a.category LIKE '%T174%' OR a.sub_category LIKE '%T174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:38:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:38:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 09:38:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39 OR transaction_items.warehouse_id = 44
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE tags.tag LIKE '%T174%' OR a.description LIKE '%T174%' OR a.color LIKE '%T174%' OR a.barcode LIKE '%T174%' OR a.category LIKE '%T174%' OR a.sub_category LIKE '%T174%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-06-14 09:38:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 09:39:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:41:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:46:07 --> Could not find the language line "Home"
ERROR - 2024-06-14 09:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:51:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:51:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:52:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-14 09:52:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-06-14 09:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 09:58:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 10:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 10:04:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 10:13:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 10:18:29 --> Could not find the language line "Other"
ERROR - 2024-06-14 10:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:28:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:29:05 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 10:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:34:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 10:49:10 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 10:49:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 10:50:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:51:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 10:54:43 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-14 10:57:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 10:57:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 10:57:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:01:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 11:04:34 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:10:05 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:13:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 11:13:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 11:16:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:17:12 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 11:18:51 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 11:21:13 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 11:22:39 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:25:11 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 11:25:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:31:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:31:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:34:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:35:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:37:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 11:37:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 11:37:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 11:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:37:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:41:28 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 11:43:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 11:49:16 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 11:49:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 11:49:22 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:53:03 --> Could not find the language line "Home"
ERROR - 2024-06-14 11:53:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 11:57:17 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 12:02:17 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:03:32 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-06-14 12:03:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Bags & Wallets'
AND `items`.`sub_category` IN('home')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 'products'
AND `items`.`color` IN('category')
AND `transaction_item_sizes`.`size` IN('Wallets')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-06-14 12:03:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:04:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:04:41 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:04:50 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 12:08:40 --> Could not find the language line "Other"
ERROR - 2024-06-14 12:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 12:12:42 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:12:44 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 12:13:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 12:13:32 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:14:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 12:14:50 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:16:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 12:18:00 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:23:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 12:23:52 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:26:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 12:26:46 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:28:16 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 12:28:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 12:28:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 12:29:00 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:33:23 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-14 12:34:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:35:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 12:35:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 12:48:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 12:48:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 12:52:30 --> Could not find the language line "Home"
ERROR - 2024-06-14 12:52:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:53:02 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:53:04 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:53:05 --> Could not find the language line "assets"
ERROR - 2024-06-14 12:53:05 --> Could not find the language line "assets"
ERROR - 2024-06-14 12:53:05 --> Could not find the language line "assets"
ERROR - 2024-06-14 12:53:05 --> Could not find the language line "assets"
ERROR - 2024-06-14 12:53:05 --> Could not find the language line "assets"
ERROR - 2024-06-14 12:56:30 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:56:51 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:56:52 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:56:55 --> Could not find the language line "Bracelet"
ERROR - 2024-06-14 12:57:05 --> Could not find the language line "Bracelet"
ERROR - 2024-06-14 12:57:10 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 12:59:09 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:04:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:04:34 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:06:33 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:06:54 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:07:28 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:07:29 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:07:29 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:07:29 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:07:29 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:07:29 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:08:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:12:46 --> 404 Page Not Found: Assets/js
ERROR - 2024-06-14 13:13:23 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:14:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 13:17:18 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:17:52 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:17:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 13:18:18 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:18:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:18:42 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-14 13:19:12 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:19:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 13:19:18 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:19:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:20:02 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:20:09 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:20:25 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:20:34 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:20:49 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:20:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:20:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:24:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:24:49 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:24:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:26:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 13:30:48 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-14 13:32:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:34:34 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:34:55 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:35:26 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:37:01 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:38:14 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:40:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:40:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:40:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:41:54 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 13:44:56 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:45:20 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:45:20 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:45:24 --> Could not find the language line "sunglasses"
ERROR - 2024-06-14 13:45:24 --> Could not find the language line "sunglasses"
ERROR - 2024-06-14 13:45:25 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:45:25 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:45:26 --> Could not find the language line "sunglasses"
ERROR - 2024-06-14 13:45:26 --> Could not find the language line "sunglasses"
ERROR - 2024-06-14 13:45:28 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:45:28 --> Could not find the language line "bracelets"
ERROR - 2024-06-14 13:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:51:08 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:51:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:51:25 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:51:25 --> Could not find the language line "Home"
ERROR - 2024-06-14 13:51:35 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:01 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:16 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:38 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:38 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:50 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:50 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:52:50 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:52:50 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:52:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:52:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:52:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 13:52:59 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:53:33 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:54:06 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:54:06 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:55:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 13:56:56 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 13:56:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 13:57:01 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 14:04:32 --> Could not find the language line "Socks"
ERROR - 2024-06-14 14:04:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 14:05:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:09:06 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:14:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 14:18:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 14:20:28 --> Could not find the language line "Home"
ERROR - 2024-06-14 14:21:25 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 14:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 14:25:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 14:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 14:33:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:34:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 14:37:19 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:38:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 14:45:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:49:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:52:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 14:53:28 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 14:54:34 --> Could not find the language line "Home"
ERROR - 2024-06-14 14:57:20 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 15:01:21 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 15:04:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 15:07:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 15:10:42 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:10:59 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:11:24 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 15:11:39 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:11:39 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:15:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 15:16:59 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:18:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 15:21:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 15:23:21 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 15:30:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 15:34:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 15:37:24 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 15:44:44 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:44:50 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:44:50 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 15:44:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 15:44:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 15:44:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 15:44:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 15:44:51 --> Could not find the language line "assets"
ERROR - 2024-06-14 15:50:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 15:52:53 --> Could not find the language line "Home"
ERROR - 2024-06-14 15:53:27 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 16:00:08 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:00:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:00:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:00:51 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:00:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:26 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 16:01:30 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:40 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:58 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:01:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:06 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:15 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:22 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:02:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 16:03:27 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:04:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:06:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 16:06:41 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:07:50 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-06-14 16:08:56 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:12:01 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:16:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 16:24:06 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 16:31:17 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:34:07 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:34:35 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:34:48 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 16:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 16:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 16:34:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 16:37:57 --> Could not find the language line "products"
ERROR - 2024-06-14 16:40:43 --> Could not find the language line "Home"
ERROR - 2024-06-14 16:47:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 17:04:36 --> Could not find the language line "Home"
ERROR - 2024-06-14 17:11:59 --> Could not find the language line "Home"
ERROR - 2024-06-14 17:17:25 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 17:17:31 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2024-06-14 17:21:34 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:25:36 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:29:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 17:33:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:34:36 --> Could not find the language line "Home"
ERROR - 2024-06-14 17:36:13 --> Could not find the language line "Home"
ERROR - 2024-06-14 17:37:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:40:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 17:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 17:41:37 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:49:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:53:38 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 17:58:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 17:58:31 --> Could not find the language line "products"
ERROR - 2024-06-14 18:00:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:00:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:00:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:01:21 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:01:22 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:01:24 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:01:39 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:04:38 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:05:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:09:49 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-06-14 18:12:38 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:12:57 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 18:12:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 18:13:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 18:13:12 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:13:19 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:13:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:13:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:13:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:13:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:13:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:13:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:14:01 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:14:16 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:34 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:38 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-06-14 18:14:39 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:15:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:17:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:17:40 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:21:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:25:41 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:28:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:28:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:33:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:33:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:34:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:37:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:41:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:41:43 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:45:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:48:06 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:53:44 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:56:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:56:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 18:56:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 18:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 18:57:45 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 18:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 18:59:19 --> Could not find the language line "Other"
ERROR - 2024-06-14 19:04:38 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:05:33 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:05:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:05:54 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:07:11 --> 404 Page Not Found: Products/products
ERROR - 2024-06-14 19:09:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:10:14 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:12:00 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:13:46 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 19:13:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:17:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 19:17:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 19:17:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:18:59 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 19:21:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:24:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:24:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:24:44 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:24:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:24:45 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:25:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:25:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 19:29:47 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 19:33:48 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 19:33:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:34:38 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:40:37 --> Could not find the language line "Home"
ERROR - 2024-06-14 19:41:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:44:38 --> Could not find the language line "Other"
ERROR - 2024-06-14 19:45:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 19:45:50 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 19:45:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-06-14 19:45:59 --> Unable to connect to the database
ERROR - 2024-06-14 19:45:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:46:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-06-14 19:46:16 --> Unable to connect to the database
ERROR - 2024-06-14 19:46:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:46:32 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-06-14 19:46:32 --> Unable to connect to the database
ERROR - 2024-06-14 19:46:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:47:38 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-06-14 19:47:38 --> Unable to connect to the database
ERROR - 2024-06-14 19:47:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:48:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No such file or directory /home/samfit/public_html/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2024-06-14 19:48:16 --> Unable to connect to the database
ERROR - 2024-06-14 19:48:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:49:47 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 111
ERROR - 2024-06-14 19:49:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 19:49:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-06-14 19:53:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 19:53:33 --> Could not find the language line "Sunglasses"
ERROR - 2024-06-14 19:53:54 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:04:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:09:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:13:52 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:15:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 20:15:58 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:17:40 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 20:17:41 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 20:17:43 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 20:17:45 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 20:17:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:17:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:21:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:24:06 --> Could not find the language line "products"
ERROR - 2024-06-14 20:24:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 20:29:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:33:55 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:35:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:36:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 20:37:54 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:44:16 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:45:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:46:11 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 20:49:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 20:49:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 20:57:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:01:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:01:57 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 21:04:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 21:05:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:09:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 21:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:13:58 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 21:16:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 21:17:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 21:17:51 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 21:17:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:22:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 21:25:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 21:26:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 21:26:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 21:26:31 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 21:31:02 --> Could not find the language line "Other"
ERROR - 2024-06-14 21:35:22 --> Could not find the language line "Socks"
ERROR - 2024-06-14 21:35:41 --> Could not find the language line "Socks"
ERROR - 2024-06-14 21:46:00 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 21:51:17 --> Could not find the language line "Disclaimer"
ERROR - 2024-06-14 21:51:20 --> Could not find the language line "Other"
ERROR - 2024-06-14 21:51:20 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 21:51:22 --> Could not find the language line "Perfume"
ERROR - 2024-06-14 21:51:22 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 21:51:24 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 21:51:31 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 21:51:32 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 21:58:04 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 21:58:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:01:42 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:10:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:13:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 22:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:15:57 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:17:10 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:18:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:20:23 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:22:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:22:30 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:24:39 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:25:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 22:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:26:48 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:29:27 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:29:28 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 22:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:33:22 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:33:47 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 22:34:07 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 22:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:34:19 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 22:34:28 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 22:35:04 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 22:35:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-06-14 22:35:15 --> Could not find the language line "Clothing"
ERROR - 2024-06-14 22:35:16 --> Could not find the language line "Bracelets"
ERROR - 2024-06-14 22:38:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:39:36 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
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
ERROR - 2024-06-14 22:41:41 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:42:08 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 22:45:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 22:46:03 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 22:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 22:58:33 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:00:24 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-06-14 23:02:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 23:03:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 23:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 23:14:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:16:01 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:17:28 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:18:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:22:12 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:22:13 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:26:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 23:26:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:26:17 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:28:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 23:29:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-06-14 23:30:08 --> Could not find the language line "Other"
ERROR - 2024-06-14 23:30:13 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:36:32 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:38:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:42:15 --> 404 Page Not Found: Assets/lib
ERROR - 2024-06-14 23:46:02 --> Query error: Expression #1 of ORDER BY clause is not in GROUP BY clause and contains nonaggregated column 'samfit_accounting.landing_page.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty
FROM `landing_page`
LEFT JOIN `items` ON `landing_page`.`item_id` = `items`.`id`
LEFT JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
LEFT JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
WHERE `landing_page`.`category` = 'Socks'
GROUP BY `items`.`id`
ORDER BY `landing_page`.`id` ASC
ERROR - 2024-06-14 23:50:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-06-14 23:58:17 --> 404 Page Not Found: Assets/css
