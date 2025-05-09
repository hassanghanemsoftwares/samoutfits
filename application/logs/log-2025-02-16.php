<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-02-16 00:02:14 --> Could not find the language line "Home"
ERROR - 2025-02-16 00:14:25 --> Could not find the language line "Home"
ERROR - 2025-02-16 00:44:22 --> Could not find the language line "Home"
ERROR - 2025-02-16 00:50:41 --> Could not find the language line "Home"
ERROR - 2025-02-16 00:50:43 --> Could not find the language line "Home"
ERROR - 2025-02-16 00:54:18 --> Severity: Notice --> Undefined index: discount /home/samfit/public_html/application/controllers/Checkout.php 29
ERROR - 2025-02-16 00:54:18 --> Severity: Notice --> Undefined index: coupon_id /home/samfit/public_html/application/controllers/Checkout.php 30
ERROR - 2025-02-16 00:54:18 --> Severity: Notice --> Undefined index: discount_type /home/samfit/public_html/application/controllers/Checkout.php 31
ERROR - 2025-02-16 00:54:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/helpers/url_helper.php 564
ERROR - 2025-02-16 01:14:24 --> Could not find the language line "Home"
ERROR - 2025-02-16 01:21:09 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-16 01:24:13 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2025-02-16 01:44:23 --> Could not find the language line "Home"
ERROR - 2025-02-16 01:52:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-16 02:14:23 --> Could not find the language line "Home"
ERROR - 2025-02-16 02:44:23 --> Could not find the language line "Home"
ERROR - 2025-02-16 03:14:23 --> Could not find the language line "Home"
ERROR - 2025-02-16 03:44:26 --> Could not find the language line "Home"
ERROR - 2025-02-16 03:48:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Tank tops%' OR (a.description LIKE '%Tank%' AND a.description LIKE '%tops%')) OR ((tag = 'Tank tops' OR tag = 'Tank tops') AND (sub_category = 'Tops')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-16 03:57:14 --> Could not find the language line "Home"
ERROR - 2025-02-16 03:57:25 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-16 03:57:35 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-16 03:57:43 --> 404 Page Not Found: Mail/index
ERROR - 2025-02-16 03:58:02 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-16 03:58:20 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-16 03:58:42 --> 404 Page Not Found: New/index
ERROR - 2025-02-16 03:59:06 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-16 03:59:11 --> 404 Page Not Found: Temp/index
ERROR - 2025-02-16 03:59:22 --> 404 Page Not Found: Blog/index
ERROR - 2025-02-16 04:01:00 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:05:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-16 04:14:24 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:20:14 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:44:25 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:46:37 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:56:39 --> Could not find the language line "Home"
ERROR - 2025-02-16 04:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Summer Look%' OR (a.description LIKE '%Summer%' AND a.description LIKE '%Look%')) OR ((sub_category = 'Summer Caps') AND (tag = 'Summer Look' OR tag = 'Summer' OR tag = 'Summer Look')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-16 05:08:01 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 05:11:40 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:14:25 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:15:44 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:21:13 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-16 05:21:13 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:44:25 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:45:54 --> Could not find the language line "Home"
ERROR - 2025-02-16 05:59:16 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:14:26 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:19:17 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:22:41 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:28:53 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-16 06:28:53 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:28:54 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:44:25 --> Could not find the language line "Home"
ERROR - 2025-02-16 06:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 07:04:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 07:14:26 --> Could not find the language line "Home"
ERROR - 2025-02-16 07:30:12 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-16 07:44:27 --> Could not find the language line "Home"
ERROR - 2025-02-16 07:53:13 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-16 07:53:13 --> Could not find the language line "Home"
ERROR - 2025-02-16 07:53:13 --> Could not find the language line "Home"
ERROR - 2025-02-16 07:57:44 --> Could not find the language line "Home"
ERROR - 2025-02-16 08:14:26 --> Could not find the language line "Home"
ERROR - 2025-02-16 08:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 08:20:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 08:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 08:26:20 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-16 08:44:27 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:02:49 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:04:15 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:04:20 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:14:28 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:18:19 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:29:27 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:30:48 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-16 09:30:48 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-02-16 09:30:48 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-02-16 09:30:48 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-16 09:30:48 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 09:30:52 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-02-16 09:30:53 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-16 09:30:54 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-02-16 09:30:54 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-02-16 09:32:09 --> Could not find the language line "Other"
ERROR - 2025-02-16 09:32:19 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:33:23 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-16 09:33:24 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:44:28 --> Could not find the language line "Home"
ERROR - 2025-02-16 09:50:06 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:13:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:14:27 --> Could not find the language line "Home"
ERROR - 2025-02-16 10:14:52 --> Could not find the language line "Home"
ERROR - 2025-02-16 10:16:46 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 10:17:05 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 10:17:25 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 10:18:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 10:25:01 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-02-16 10:33:21 --> Could not find the language line "Home"
ERROR - 2025-02-16 10:35:42 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-16 10:35:42 --> Could not find the language line "Home"
ERROR - 2025-02-16 10:37:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:40:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:42:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:44:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 10:44:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 10:47:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 11:04:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 11:13:08 --> Could not find the language line "Home"
ERROR - 2025-02-16 11:13:11 --> Could not find the language line "Home"
ERROR - 2025-02-16 11:13:12 --> Could not find the language line "Home"
ERROR - 2025-02-16 11:14:29 --> Could not find the language line "Home"
ERROR - 2025-02-16 11:26:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 11:40:27 --> Could not find the language line "Socks"
ERROR - 2025-02-16 11:44:29 --> Could not find the language line "Home"
ERROR - 2025-02-16 12:14:29 --> Could not find the language line "Home"
ERROR - 2025-02-16 12:33:31 --> Could not find the language line "Home"
ERROR - 2025-02-16 12:41:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 12:44:29 --> Could not find the language line "Home"
ERROR - 2025-02-16 12:46:31 --> Could not find the language line "Home"
ERROR - 2025-02-16 12:59:42 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:04:35 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:09:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 13:10:31 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:12:42 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:14:29 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:16:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 13:16:24 --> Could not find the language line "Sunglasses"
ERROR - 2025-02-16 13:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 13:33:06 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 13:38:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 13:40:07 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-02-16 13:44:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 13:45:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 14:11:21 --> Could not find the language line "Home"
ERROR - 2025-02-16 14:14:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 14:18:55 --> Could not find the language line "Home"
ERROR - 2025-02-16 14:42:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 14:44:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 14:51:09 --> Could not find the language line "Home"
ERROR - 2025-02-16 14:51:13 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-16 14:51:16 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-16 14:51:21 --> 404 Page Not Found: Samoutfits/index
ERROR - 2025-02-16 14:51:24 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-02-16 14:51:38 --> 404 Page Not Found: Backup/index
ERROR - 2025-02-16 14:51:43 --> 404 Page Not Found: New/index
ERROR - 2025-02-16 14:51:47 --> 404 Page Not Found: Wp/index
ERROR - 2025-02-16 14:51:50 --> 404 Page Not Found: Temp/index
ERROR - 2025-02-16 14:51:51 --> 404 Page Not Found: Blog/index
ERROR - 2025-02-16 14:54:03 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:09:20 --> Could not find the language line "Socks"
ERROR - 2025-02-16 15:14:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:19:44 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:19:45 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-16 15:29:39 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 15:30:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-02-16 15:30:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 15:30:42 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-16 15:30:42 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-16 15:34:09 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:38:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%Spring%' OR a.description LIKE '%Spring%' OR a.color LIKE '%Spring%' OR a.barcode LIKE '%Spring%' OR a.category LIKE '%Spring%' OR a.sub_category LIKE '%Spring%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-02-16 15:43:47 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:43:51 --> Could not find the language line "Socks"
ERROR - 2025-02-16 15:44:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 15:58:10 --> Could not find the language line "Other"
ERROR - 2025-02-16 16:08:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 16:10:22 --> Could not find the language line "Socks"
ERROR - 2025-02-16 16:14:30 --> Could not find the language line "Home"
ERROR - 2025-02-16 16:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 16:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 16:44:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 17:01:54 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-16 17:06:57 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-16 17:06:57 --> Could not find the language line "Home"
ERROR - 2025-02-16 17:06:57 --> Could not find the language line "Home"
ERROR - 2025-02-16 17:14:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-16 17:14:32 --> Could not find the language line "Home"
ERROR - 2025-02-16 17:29:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 17:39:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-02-16 17:44:31 --> Could not find the language line "Home"
ERROR - 2025-02-16 17:47:36 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 17:59:51 --> Could not find the language line "accounts"
ERROR - 2025-02-16 18:03:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2025-02-16 18:03:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'products'
AND `items`.`sub_category` IN('category')
AND `items`.`gender` IN('cart')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Hats')
AND `transaction_item_sizes`.`size` IN('accounts')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2025-02-16 18:03:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 18:14:32 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:16:59 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:21:10 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:22:05 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-02-16 18:22:05 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-02-16 18:22:05 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-02-16 18:22:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 18:22:06 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-16 18:22:29 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-02-16 18:22:36 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-02-16 18:22:40 --> Could not find the language line "Socks"
ERROR - 2025-02-16 18:23:55 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:25:39 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:25:40 --> 404 Page Not Found: Assets/lib
ERROR - 2025-02-16 18:32:54 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 18:44:32 --> Could not find the language line "Home"
ERROR - 2025-02-16 18:52:38 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-02-16 19:10:23 --> 404 Page Not Found: 400shtml/index
ERROR - 2025-02-16 19:14:34 --> Could not find the language line "Home"
ERROR - 2025-02-16 19:14:59 --> 404 Page Not Found: Assets/plugins
ERROR - 2025-02-16 19:15:01 --> 404 Page Not Found: Assets/vendor
ERROR - 2025-02-16 19:15:05 --> 404 Page Not Found: Plugins/jquery.filer
ERROR - 2025-02-16 19:15:08 --> 404 Page Not Found: Assets/admin
ERROR - 2025-02-16 19:15:10 --> 404 Page Not Found: Jqueryfiler/php
ERROR - 2025-02-16 19:21:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 19:31:33 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 19:39:28 --> Could not find the language line "Home"
ERROR - 2025-02-16 19:44:32 --> Could not find the language line "Home"
ERROR - 2025-02-16 19:46:19 --> Could not find the language line "Home"
ERROR - 2025-02-16 19:55:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 20:06:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:08:04 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:09:40 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:14:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:18:16 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:28:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 20:29:27 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-02-16 20:29:27 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:37:42 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2025-02-16 20:39:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 20:39:53 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-02-16 20:39:55 --> Could not find the language line "Home"
ERROR - 2025-02-16 20:44:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:14:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:20:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:20:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 21:25:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 21:25:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 21:25:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 21:29:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 21:31:59 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:33:26 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:33:55 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 21:44:33 --> Could not find the language line "Home"
ERROR - 2025-02-16 21:54:53 --> Could not find the language line "Home"
ERROR - 2025-02-16 22:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:03:36 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:03:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-02-16 22:03:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:05:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-02-16 22:12:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:14:34 --> Could not find the language line "Home"
ERROR - 2025-02-16 22:15:51 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 22:16:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:16:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:16:00 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:16:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:16:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:16:01 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-02-16 22:21:35 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 22:21:44 --> Could not find the language line "Clothing"
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:22:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:22:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:22:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:22:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:22:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:29:15 --> Could not find the language line "Home"
ERROR - 2025-02-16 22:33:35 --> 404 Page Not Found: Metajson/index
ERROR - 2025-02-16 22:33:35 --> Could not find the language line "Home"
ERROR - 2025-02-16 22:33:35 --> Could not find the language line "Home"
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Home.php 115
ERROR - 2025-02-16 22:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:34:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-02-16 22:34:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2025-02-16 22:44:36 --> Could not find the language line "Home"
ERROR - 2025-02-16 23:10:36 --> Could not find the language line "Home"
ERROR - 2025-02-16 23:10:53 --> Could not find the language line "Home"
ERROR - 2025-02-16 23:14:40 --> Could not find the language line "Home"
ERROR - 2025-02-16 23:31:30 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-02-16 23:44:36 --> Could not find the language line "Home"
ERROR - 2025-02-16 23:46:24 --> Could not find the language line "Home"
