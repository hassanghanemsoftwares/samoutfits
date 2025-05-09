<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-04-12 00:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 00:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 00:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 00:40:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 00:47:51 --> Could not find the language line "Home"
ERROR - 2025-04-12 01:08:57 --> Could not find the language line "Home"
ERROR - 2025-04-12 01:08:57 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-12 01:08:57 --> Could not find the language line "Home"
ERROR - 2025-04-12 01:17:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 01:17:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-12 01:21:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 01:28:52 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2025-04-12 01:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 01:51:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 01:56:11 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 02:16:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 02:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 02:22:57 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-12 02:22:57 --> Could not find the language line "Home"
ERROR - 2025-04-12 02:22:57 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-12 02:22:58 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-12 02:22:58 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-12 02:22:58 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-12 02:22:59 --> 404 Page Not Found: New/index
ERROR - 2025-04-12 02:22:59 --> 404 Page Not Found: Main/index
ERROR - 2025-04-12 02:22:59 --> Could not find the language line "Home"
ERROR - 2025-04-12 02:23:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-12 02:38:14 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 02:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 02:52:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 03:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:30:56 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:38:31 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:38:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:38:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:38:53 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:43:59 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:45:26 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-12 03:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:48:36 --> Could not find the language line "Home"
ERROR - 2025-04-12 03:59:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 04:12:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 04:17:51 --> Could not find the language line "Home"
ERROR - 2025-04-12 04:26:37 --> Could not find the language line "Home"
ERROR - 2025-04-12 04:32:31 --> Could not find the language line "Home"
ERROR - 2025-04-12 04:34:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 04:47:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 05:12:28 --> Could not find the language line "Home"
ERROR - 2025-04-12 05:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 05:23:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 05:47:38 --> Could not find the language line "Home"
ERROR - 2025-04-12 05:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:04:41 --> Could not find the language line "Disclaimer"
ERROR - 2025-04-12 06:06:24 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-12 06:06:24 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:10:27 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:15:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:17:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:20:56 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 06:21:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:22:24 --> Could not find the language line "Socks"
ERROR - 2025-04-12 06:28:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:31:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:37:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:37:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:37:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:39:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:47:38 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:50:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:50:52 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:51:26 --> Could not find the language line "Home"
ERROR - 2025-04-12 06:56:38 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 06:59:12 --> Could not find the language line "Other"
ERROR - 2025-04-12 06:59:52 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-12 07:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:02:27 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:05:46 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:07:26 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:07:39 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2025-04-12 07:08:02 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:08:56 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:11:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:12:45 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:13:28 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:25 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:16:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%Online Shopping%' OR (a.description LIKE '%Online%' AND a.description LIKE '%Shopping%')) OR ((tag = 'Online Shopping' OR tag = 'Online Delivery' OR tag = 'Online Shopping')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-12 07:17:40 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:18:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:22:04 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:25:12 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:32:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:40:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:47:40 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:49:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:50:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:50:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:53:18 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 07:57:33 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:57:35 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:57:36 --> Could not find the language line "Home"
ERROR - 2025-04-12 07:59:07 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:00:30 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:00:31 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2025-04-12 08:00:31 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2025-04-12 08:00:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:00:32 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2025-04-12 08:00:32 --> 404 Page Not Found: Web/wp-includes
ERROR - 2025-04-12 08:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:05:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-12 08:08:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:08:56 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:17:40 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:19:21 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-12 08:19:21 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:19:21 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-12 08:19:21 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-12 08:19:22 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-12 08:19:22 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-12 08:19:22 --> 404 Page Not Found: New/index
ERROR - 2025-04-12 08:19:22 --> 404 Page Not Found: Main/index
ERROR - 2025-04-12 08:19:22 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:28:22 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:31:33 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:31:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:32:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:32:36 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-04-12 08:32:37 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-04-12 08:32:37 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-04-12 08:32:38 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 08:32:38 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-12 08:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:32:44 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:33:01 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-04-12 08:33:08 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-04-12 08:33:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:33:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:34:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:36:22 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:36:22 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-12 08:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:40:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:46:56 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:46:56 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 08:51:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 08:52:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 08:53:14 --> Could not find the language line "Home"
ERROR - 2025-04-12 09:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 09:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 09:47:40 --> Could not find the language line "Home"
ERROR - 2025-04-12 09:49:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-12 09:59:33 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:09:31 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:11:02 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:14:38 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:14:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-12 10:14:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:15:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-12 10:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:17:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2025-04-12 10:20:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:22:30 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:26:40 --> Could not find the language line "hats"
ERROR - 2025-04-12 10:27:06 --> Could not find the language line "hats"
ERROR - 2025-04-12 10:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2025-04-12 10:37:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 10:45:09 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2025-04-12 10:47:04 --> Could not find the language line "Home"
ERROR - 2025-04-12 10:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 11:04:41 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 11:05:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 11:17:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:19:26 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:21:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 11:21:26 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 11:30:37 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:30:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:30:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:30:53 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:31:01 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:44:30 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-12 11:44:31 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:44:31 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-12 11:44:31 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-12 11:44:31 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-12 11:44:31 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-12 11:44:32 --> 404 Page Not Found: New/index
ERROR - 2025-04-12 11:44:32 --> 404 Page Not Found: Main/index
ERROR - 2025-04-12 11:44:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:47:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:51:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:51:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 11:58:13 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:01:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:03:45 --> 404 Page Not Found: 403shtml/index
ERROR - 2025-04-12 12:05:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 12:05:50 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 12:06:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 12:10:08 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:10:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 12:13:15 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 12:14:19 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:17:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:23:59 --> Could not find the language line "Socks"
ERROR - 2025-04-12 12:27:53 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 12:31:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:46:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:47:11 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:47:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 12:56:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 12:56:51 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 12:57:57 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:00:44 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2025-04-12 13:00:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:03:21 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:03:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:07:51 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-12 13:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:18:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:28:40 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:29:30 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:34:49 --> Could not find the language line "products"
ERROR - 2025-04-12 13:35:08 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:36:57 --> 404 Page Not Found: Metajson/index
ERROR - 2025-04-12 13:36:58 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:36:58 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:37:17 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:38:59 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:39:52 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:40:12 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:40:17 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:40:32 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:41:11 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:41:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:41:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:42:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 13:47:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:48:41 --> Could not find the language line "Home"
ERROR - 2025-04-12 13:53:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 13:53:48 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 13:53:53 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 13:54:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 13:54:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 13:57:52 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 14:06:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 14:07:19 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:07:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:07:52 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:14:17 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2025-04-12 14:15:51 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 14:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:20:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:20:50 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:23:59 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 14:31:36 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:38:05 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 14:47:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 14:49:15 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 14:54:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 14:58:52 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-12 14:59:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-12 14:59:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-12 15:00:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2025-04-12 15:05:47 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 15:06:31 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:13:32 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 15:17:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:18:34 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:22:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 15:35:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 15:36:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 15:41:29 --> Could not find the language line "Socks"
ERROR - 2025-04-12 15:43:00 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:43:33 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:47:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 15:49:33 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 16:05:08 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 16:06:59 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:17:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:23:50 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:27:20 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:47:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:48:38 --> Could not find the language line "Home"
ERROR - 2025-04-12 16:51:07 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:03:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE tags.tag LIKE '%c885%' OR a.description LIKE '%c885%' OR a.color LIKE '%c885%' OR a.barcode LIKE '%c885%' OR a.category LIKE '%c885%' OR a.sub_category LIKE '%c885%'  
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2025-04-12 17:05:06 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:06:17 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:07:07 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:11:22 --> 404 Page Not Found: Sitemap/index
ERROR - 2025-04-12 17:17:45 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:21:32 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 17:29:07 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-12 17:29:07 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:29:07 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-12 17:29:07 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-12 17:29:07 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-12 17:29:08 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-12 17:29:08 --> 404 Page Not Found: New/index
ERROR - 2025-04-12 17:29:08 --> 404 Page Not Found: Main/index
ERROR - 2025-04-12 17:29:08 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:33:37 --> Could not find the language line "Home"
ERROR - 2025-04-12 17:47:14 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 17:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-12 18:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 18:17:46 --> Could not find the language line "Home"
ERROR - 2025-04-12 18:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 18:40:18 --> Could not find the language line "Home"
ERROR - 2025-04-12 18:42:27 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 18:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 18:44:11 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-12 18:44:13 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-12 18:47:45 --> Could not find the language line "Home"
ERROR - 2025-04-12 18:51:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 18:52:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 19:04:49 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:09:00 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:11:27 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:14:23 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:16:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:16:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:17:16 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:17:46 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:18:09 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:20:21 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:21:45 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:22:31 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:23:24 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 19:32:14 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:47:46 --> Could not find the language line "Home"
ERROR - 2025-04-12 19:57:17 --> Could not find the language line "Other"
ERROR - 2025-04-12 20:08:39 --> Could not find the language line "Clothing"
ERROR - 2025-04-12 20:17:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:25:23 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:28:35 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 20:32:17 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:44:21 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:45:58 --> 404 Page Not Found: Adstxt/index
ERROR - 2025-04-12 20:45:58 --> 404 Page Not Found: Sellersjson/index
ERROR - 2025-04-12 20:45:58 --> 404 Page Not Found: App-adstxt/index
ERROR - 2025-04-12 20:45:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 20:45:59 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-12 20:46:04 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2025-04-12 20:46:06 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/passkey-endpoints
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/web-identity
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/webauthn
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/change-password
ERROR - 2025-04-12 20:46:07 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2025-04-12 20:47:16 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:47:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:47:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:48:56 --> 404 Page Not Found: Assets/lib
ERROR - 2025-04-12 20:49:00 --> Could not find the language line "Home"
ERROR - 2025-04-12 20:49:03 --> Could not find the language line "Other"
ERROR - 2025-04-12 20:56:33 --> Could not find the language line "Other"
ERROR - 2025-04-12 21:07:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:11:28 --> 404 Page Not Found: Wordpress/index
ERROR - 2025-04-12 21:11:28 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:11:28 --> 404 Page Not Found: Wp/index
ERROR - 2025-04-12 21:11:28 --> 404 Page Not Found: Bc/index
ERROR - 2025-04-12 21:11:28 --> 404 Page Not Found: Bk/index
ERROR - 2025-04-12 21:11:29 --> 404 Page Not Found: Backup/index
ERROR - 2025-04-12 21:11:29 --> 404 Page Not Found: New/index
ERROR - 2025-04-12 21:11:29 --> 404 Page Not Found: Main/index
ERROR - 2025-04-12 21:11:30 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:14:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 21:14:34 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 21:17:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:28:56 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 21:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 21:29:42 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:29:44 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:37:25 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:38:38 --> 404 Page Not Found: Users/accounts
ERROR - 2025-04-12 21:39:24 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:47:49 --> Could not find the language line "Home"
ERROR - 2025-04-12 21:48:38 --> Could not find the language line "Other"
ERROR - 2025-04-12 21:49:42 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 21:49:43 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 21:56:04 --> Could not find the language line "Other"
ERROR - 2025-04-12 22:03:43 --> Could not find the language line "Home"
ERROR - 2025-04-12 22:11:46 --> 404 Page Not Found: Accounting/assets
ERROR - 2025-04-12 22:17:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 22:22:00 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 22:22:05 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2025-04-12 22:22:05 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2025-04-12 22:25:45 --> Could not find the language line "Home"
ERROR - 2025-04-12 22:34:46 --> Could not find the language line "Home"
ERROR - 2025-04-12 22:35:29 --> 404 Page Not Found: Assets/css
ERROR - 2025-04-12 22:35:37 --> Could not find the language line "Home"
ERROR - 2025-04-12 22:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:04:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2025-04-12 23:17:50 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:32:38 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:35:47 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:43:08 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:47:48 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:51:15 --> Could not find the language line "0"
ERROR - 2025-04-12 23:51:39 --> Could not find the language line "Home"
ERROR - 2025-04-12 23:59:31 --> Could not find the language line "Home"
