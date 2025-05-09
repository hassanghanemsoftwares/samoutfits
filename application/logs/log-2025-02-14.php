<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-14 00:05:40 --> Could not find the language line "Home"
ERROR - 2025-02-14 00:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 00:13:56 --> Could not find the language line "Home"
ERROR - 2025-02-14 00:18:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 00:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-14 00:48:09 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-14 00:55:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%h421%' OR a.description LIKE '%h421%' OR a.color LIKE '%h421%' OR a.barcode LIKE '%h421%' OR a.category LIKE '%h421%' OR a.sub_category LIKE '%h421%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-14 01:13:55 --> Could not find the language line "Home"
ERROR - 2025-02-14 01:28:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Safety Shoes%' OR (a.description LIKE '%Safety%' AND a.description LIKE '%Shoes%')) OR ((category = 'Shoes')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-14 01:35:20 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-14 01:43:56 --> Could not find the language line "Home"
ERROR - 2025-02-14 01:52:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-14 01:59:06 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-14 02:13:55 --> Could not find the language line "Home"
ERROR - 2025-02-14 02:35:33 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-14 02:35:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('home')
AND `items`.`price` >= 'accounts'
AND `items`.`price` <= 100
AND `items`.`color` IN('products')
AND `transaction_item_sizes`.`size` IN('category')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-14 02:35:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-14 02:37:29 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-14 02:43:58 --> Could not find the language line "Home"
ERROR - 2025-02-14 02:59:09 --> Could not find the language line "Home"
ERROR - 2025-02-14 03:07:20 --> Could not find the language line "Socks"
ERROR - 2025-02-14 03:13:56 --> Could not find the language line "Home"
ERROR - 2025-02-14 03:14:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 03:14:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 03:43:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 03:44:32 --> Could not find the language line "Home"
ERROR - 2025-02-14 03:44:56 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 03:47:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 04:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 04:32:34 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-14 04:32:35 --> Could not find the language line "Home"
ERROR - 2025-02-14 04:32:36 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-14 04:32:36 --> 404 Page Not Found: Bc/index
ERROR - 2025-02-14 04:32:37 --> 404 Page Not Found: Bk/index
ERROR - 2025-02-14 04:32:37 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-14 04:32:38 --> 404 Page Not Found: New/index
ERROR - 2025-02-14 04:32:39 --> 404 Page Not Found: Main/index
ERROR - 2025-02-14 04:32:40 --> Could not find the language line "Home"
ERROR - 2025-02-14 04:44:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:17:26 --> 404 Page Not Found: Media/system
ERROR - 2025-02-14 05:17:29 --> 404 Page Not Found: Wp-includes/js
ERROR - 2025-02-14 05:27:04 --> Could not find the language line "Other"
ERROR - 2025-02-14 05:32:55 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:34:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:37:18 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-14 05:39:15 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-14 05:45:02 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:04:17 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:07:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:17:08 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:20:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:21:40 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:22:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:22:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:23:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:23:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:25:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:25:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:25:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:27:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:27:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:28:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:30:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:30:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:33:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:34:25 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:34:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:34:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:36:50 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:38:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:38:24 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:39:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:39:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 06:42:35 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-14 06:43:57 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:46:25 --> Could not find the language line "Home"
ERROR - 2025-02-14 06:55:37 --> Could not find the language line "Home"
ERROR - 2025-02-14 07:03:32 --> Could not find the language line "Home"
ERROR - 2025-02-14 07:04:33 --> Could not find the language line "Home"
ERROR - 2025-02-14 07:13:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 07:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 07:34:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Clothing%' OR a.description LIKE '%Clothing%' OR a.color LIKE '%Clothing%' OR a.barcode LIKE '%Clothing%' OR a.category LIKE '%Clothing%' OR a.sub_category LIKE '%Clothing%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-14 07:41:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 07:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 07:43:58 --> Could not find the language line "Home"
ERROR - 2025-02-14 07:50:25 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:09:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 08:13:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:30:53 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:30:53 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:42:54 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:43:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 08:45:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 09:04:32 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:04:33 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2025-02-14 09:04:34 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:04:43 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-14 09:04:44 --> 404 Page Not Found: Humanstxt/index
ERROR - 2025-02-14 09:04:44 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:04:45 --> 404 Page Not Found: Securitytxt/index
ERROR - 2025-02-14 09:04:45 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-14 09:05:10 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:05:44 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:13:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:32:15 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:33:09 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-14 09:33:09 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-02-14 09:33:09 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-02-14 09:33:11 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-14 09:33:11 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-14 09:33:32 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-02-14 09:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 09:33:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-02-14 09:33:39 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-02-14 09:34:57 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:35:52 --> Could not find the language line "Other"
ERROR - 2025-02-14 09:36:44 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:36:44 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-14 09:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 09:57:57 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 10:13:59 --> Could not find the language line "Home"
ERROR - 2025-02-14 10:21:57 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 10:22:01 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 10:22:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 10:22:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:32 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 10:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:22:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:29:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:34:30 --> Could not find the language line "Home"
ERROR - 2025-02-14 10:44:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 10:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:55:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 10:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:02:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-14 11:03:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-14 11:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:05:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:10:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:11:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 11:37:28 --> Could not find the language line "Home"
ERROR - 2025-02-14 11:39:34 --> Could not find the language line "Home"
ERROR - 2025-02-14 11:44:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 11:44:09 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-14 11:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:44:29 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-14 11:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2025-02-14 11:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 11:44:48 --> Could not find the language line "Home"
ERROR - 2025-02-14 11:50:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 12:14:00 --> Could not find the language line "Home"
ERROR - 2025-02-14 12:22:51 --> Could not find the language line "Home"
ERROR - 2025-02-14 12:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 12:40:12 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-02-14 12:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 12:57:25 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-14 13:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:05:40 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:12:13 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:12:33 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:13:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:14:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:14:30 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:21:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:22:00 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-14 13:22:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-14 13:24:16 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-14 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:24:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:24:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:25:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:27:45 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:28:43 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:36:48 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:43:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 13:44:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:45:42 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:48:24 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:49:02 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:50:41 --> Could not find the language line "Home"
ERROR - 2025-02-14 13:58:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:14:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:21:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 14:21:19 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-14 14:28:58 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:31:27 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:36:25 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:40:41 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-14 14:40:41 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:40:41 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-14 14:53:53 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:05:50 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-14 15:06:06 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:06:40 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:14:02 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:21:07 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:44:03 --> Could not find the language line "Home"
ERROR - 2025-02-14 15:47:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 16:03:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 16:14:03 --> Could not find the language line "Home"
ERROR - 2025-02-14 16:22:02 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 16:31:37 --> Could not find the language line "Home"
ERROR - 2025-02-14 16:44:02 --> Could not find the language line "Home"
ERROR - 2025-02-14 17:04:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 17:14:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 17:30:58 --> Could not find the language line "Home"
ERROR - 2025-02-14 17:33:24 --> Could not find the language line "products"
ERROR - 2025-02-14 17:44:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 17:47:43 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-14 17:47:43 --> Could not find the language line "Home"
ERROR - 2025-02-14 17:47:43 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:00:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-14 18:00:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'Other'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-14 18:00:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-14 18:07:16 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:14:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:15:27 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:44:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:45:37 --> Could not find the language line "Home"
ERROR - 2025-02-14 18:49:33 --> Could not find the language line "Home"
ERROR - 2025-02-14 19:01:29 --> Could not find the language line "Home"
ERROR - 2025-02-14 19:09:55 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-14 19:14:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 19:31:12 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 19:36:16 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 19:42:38 --> Could not find the language line "Home"
ERROR - 2025-02-14 19:44:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:14:05 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:44:05 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:48:15 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:55:19 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:55:51 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:56:47 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:59:52 --> Could not find the language line "Home"
ERROR - 2025-02-14 20:59:55 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:06:11 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:14:06 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:23:05 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:26:19 --> Could not find the language line "Crocs"
ERROR - 2025-02-14 21:31:18 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 21:44:05 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:46:41 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:48:45 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:48:46 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-14 21:48:46 --> 404 Page Not Found: Readmehtml/index
ERROR - 2025-02-14 21:48:46 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:48:46 --> 404 Page Not Found: Changelogtxt/index
ERROR - 2025-02-14 21:48:46 --> 404 Page Not Found: Readmetxt/index
ERROR - 2025-02-14 21:55:31 --> Could not find the language line "Home"
ERROR - 2025-02-14 21:57:01 --> Could not find the language line "Home"
ERROR - 2025-02-14 22:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 22:03:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 22:04:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 22:05:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-14 22:06:04 --> Could not find the language line "Home"
ERROR - 2025-02-14 22:11:23 --> Could not find the language line "Clothing"
ERROR - 2025-02-14 22:14:06 --> Could not find the language line "Home"
ERROR - 2025-02-14 22:22:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 22:27:16 --> Could not find the language line "Home"
ERROR - 2025-02-14 22:41:49 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-14 22:44:08 --> Could not find the language line "Home"
ERROR - 2025-02-14 22:46:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Trendy%' OR a.description LIKE '%Trendy%' OR a.color LIKE '%Trendy%' OR a.barcode LIKE '%Trendy%' OR a.category LIKE '%Trendy%' OR a.sub_category LIKE '%Trendy%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-14 22:50:34 --> Could not find the language line "Socks"
ERROR - 2025-02-14 22:50:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-14 22:56:11 --> Could not find the language line "Home"
ERROR - 2025-02-14 23:14:08 --> Could not find the language line "Home"
ERROR - 2025-02-14 23:21:21 --> Could not find the language line "Home"
ERROR - 2025-02-14 23:31:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-14 23:44:09 --> Could not find the language line "Home"
ERROR - 2025-02-14 23:46:57 --> Could not find the language line "Disclaimer"
ERROR - 2025-02-14 23:47:05 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-14 23:47:05 --> Could not find the language line "Home"
ERROR - 2025-02-14 23:47:05 --> Could not find the language line "Home"
