<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-12-14 00:17:54 --> Could not find the language line "Home"
ERROR - 2024-12-14 00:19:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:22:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
		WHERE (a.description LIKE '%BEST PRICE%' OR (a.description LIKE '%BEST%' AND a.description LIKE '%PRICE%')) OR ((tag = 'BEST PRICE' OR tag = 'BEST PRICE')) 
		GROUP BY a.id
		ORDER BY result DESC LIMIT 18 OFFSET -18
ERROR - 2024-12-14 00:31:27 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-14 00:42:06 --> Could not find the language line "Home"
ERROR - 2024-12-14 00:43:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:43:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:43:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:43:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:44:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:46:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:46:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 00:48:00 --> Could not find the language line "Home"
ERROR - 2024-12-14 01:17:56 --> Could not find the language line "Home"
ERROR - 2024-12-14 01:23:30 --> 404 Page Not Found: Wp-includes/ID3
ERROR - 2024-12-14 01:23:30 --> 404 Page Not Found: Feed/index
ERROR - 2024-12-14 01:23:31 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2024-12-14 01:23:31 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2024-12-14 01:23:32 --> 404 Page Not Found: Web/wp-includes
ERROR - 2024-12-14 01:23:32 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2024-12-14 01:23:33 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2024-12-14 01:48:14 --> Could not find the language line "Home"
ERROR - 2024-12-14 01:54:25 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-14 02:15:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 02:18:06 --> Could not find the language line "Home"
ERROR - 2024-12-14 02:29:19 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-14 02:47:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 02:49:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 03:14:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 03:14:48 --> Could not find the language line "Home"
ERROR - 2024-12-14 03:17:54 --> Could not find the language line "Home"
ERROR - 2024-12-14 03:48:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 04:00:44 --> Could not find the language line "Home"
ERROR - 2024-12-14 04:06:17 --> Could not find the language line "Home"
ERROR - 2024-12-14 04:12:15 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-14 04:18:00 --> Could not find the language line "Home"
ERROR - 2024-12-14 04:46:51 --> Could not find the language line "Home"
ERROR - 2024-12-14 04:48:05 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:37:43 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-14 05:44:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:47:55 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:55:27 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:56:32 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:56:50 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:59:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 05:59:47 --> Could not find the language line "Home"
ERROR - 2024-12-14 05:59:51 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:01:16 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 06:10:04 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-14 06:10:23 --> 404 Page Not Found: 403shtml/index
ERROR - 2024-12-14 06:17:56 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:20:54 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:30:53 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:37:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 06:38:11 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:38:27 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:38:42 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:39:13 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:39:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:07 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:57 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:40:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:41:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 06:41:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:47:55 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:51:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:51:02 --> 404 Page Not Found: App/index
ERROR - 2024-12-14 06:51:02 --> 404 Page Not Found: Login/index
ERROR - 2024-12-14 06:51:02 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-14 06:51:02 --> 404 Page Not Found: Assets/mail
ERROR - 2024-12-14 06:51:02 --> 404 Page Not Found: Assets/mail
ERROR - 2024-12-14 06:53:07 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:56:34 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:58:06 --> Severity: Notice --> Undefined index: HTTP_USER_AGENT /home/samfit/public_html/application/controllers/Home.php 27
ERROR - 2024-12-14 06:58:08 --> Could not find the language line "Home"
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: Wordpress/index
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: Wp/index
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: Wp-admin/install.php
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: Blog/index
ERROR - 2024-12-14 06:58:09 --> 404 Page Not Found: New/index
ERROR - 2024-12-14 06:58:10 --> 404 Page Not Found: Newsite/index
ERROR - 2024-12-14 07:06:03 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-12-14 07:08:16 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-14 07:10:06 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-14 07:12:35 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:17:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:23:55 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:24:56 --> 404 Page Not Found: Sitemapxmlgz/index
ERROR - 2024-12-14 07:39:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 07:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 07:47:56 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:52:16 --> Could not find the language line "Home"
ERROR - 2024-12-14 07:56:18 --> Could not find the language line "Home"
ERROR - 2024-12-14 08:05:00 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-14 08:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 08:23:19 --> Could not find the language line "Home"
ERROR - 2024-12-14 08:23:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 08:41:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 08:47:58 --> Could not find the language line "Home"
ERROR - 2024-12-14 08:58:37 --> Could not find the language line "Socks"
ERROR - 2024-12-14 09:02:02 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2024-12-14 09:17:58 --> Could not find the language line "Home"
ERROR - 2024-12-14 09:30:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-14 09:32:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 09:47:55 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 09:47:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 09:47:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 09:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 09:48:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 09:54:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 09:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 10:17:58 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:18:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 10:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 10:18:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 10:18:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 10:20:26 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-14 10:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-14 10:27:03 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-12-14 10:31:58 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:47:59 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:51:24 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:52:16 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-12-14 10:52:16 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-12-14 10:52:16 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-12-14 10:52:17 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-14 10:52:17 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-14 10:52:28 --> 404 Page Not Found: Dsrdeletejson/index
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-12-14 10:52:35 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-12-14 10:53:56 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:55:41 --> Could not find the language line "Home"
ERROR - 2024-12-14 10:55:42 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-14 11:04:56 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:17:59 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:23:09 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:25:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 11:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 11:25:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 11:28:14 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:28:17 --> Could not find the language line "Other"
ERROR - 2024-12-14 11:36:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 11:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 11:46:59 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:47:58 --> Could not find the language line "Home"
ERROR - 2024-12-14 11:54:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-14 11:55:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-14 11:56:37 --> 404 Page Not Found: Metajson/index
ERROR - 2024-12-14 11:59:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-12-14 12:00:28 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-14 12:00:41 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-14 12:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 12:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 12:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 12:02:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-14 12:02:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-12-14 12:04:18 --> Could not find the language line "Home"
ERROR - 2024-12-14 12:12:09 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 12:18:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 12:25:37 --> Could not find the language line "Home"
ERROR - 2024-12-14 12:28:25 --> Could not find the language line "Home"
ERROR - 2024-12-14 12:32:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 12:33:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 12:46:24 --> Could not find the language line "Home"
ERROR - 2024-12-14 12:47:59 --> Could not find the language line "Home"
ERROR - 2024-12-14 13:18:00 --> Could not find the language line "Home"
ERROR - 2024-12-14 13:18:11 --> Could not find the language line "Perfume"
ERROR - 2024-12-14 13:31:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-12-14 13:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:48:00 --> Could not find the language line "Home"
ERROR - 2024-12-14 13:50:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:50:51 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:50:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:53:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:55:59 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:56:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:56:55 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:57:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:57:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 13:57:11 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:57:15 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:57:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:57:23 --> Could not find the language line "Home"
ERROR - 2024-12-14 13:57:25 --> Could not find the language line "Home"
ERROR - 2024-12-14 13:57:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:58:37 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:58:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 13:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:01:58 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:02:05 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:02:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:02:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:02:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:02:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:02:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:03:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:03:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:04:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:06:21 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:07:05 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-14 14:14:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:18:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 14:18:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 14:23:47 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:23:56 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:24:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:24:36 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:24:40 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:24:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:24:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:25:00 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:25:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:25:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:25:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:28:41 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:28:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:29:04 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:29:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:32:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:33:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:38:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:40:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 14:48:00 --> Could not find the language line "Home"
ERROR - 2024-12-14 14:52:18 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:52:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:52:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:53:01 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:53:20 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:53:29 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:53:33 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:53:44 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 14:58:41 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:10:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:12:08 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:12:08 --> 404 Page Not Found: App/index
ERROR - 2024-12-14 15:12:08 --> 404 Page Not Found: Login/index
ERROR - 2024-12-14 15:12:09 --> 404 Page Not Found: Assets/mail
ERROR - 2024-12-14 15:12:09 --> 404 Page Not Found: Assets/mail
ERROR - 2024-12-14 15:12:09 --> 404 Page Not Found: Assets/lib
ERROR - 2024-12-14 15:13:38 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:14:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:17:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:18:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:22:30 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:23:10 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:23:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:24:28 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-14 15:24:28 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:25:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:25:31 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:25:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:26:25 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:28:39 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:28:46 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:28:53 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:02 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:14 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:29 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 15:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:38:46 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:42:38 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 15:48:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 15:59:50 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-12-14 16:05:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 16:06:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 16:06:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 16:12:39 --> Could not find the language line "Home"
ERROR - 2024-12-14 16:16:41 --> Could not find the language line "Home"
ERROR - 2024-12-14 16:18:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 16:24:08 --> Could not find the language line "Home"
ERROR - 2024-12-14 16:24:40 --> Could not find the language line "Home"
ERROR - 2024-12-14 16:37:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-12-14 16:37:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'cart'
AND `items`.`sub_category` IN('products')
AND `items`.`gender` IN('category')
AND `items`.`price` >= 'products'
AND `items`.`price` <= 100
AND `items`.`color` IN('Wallets')
AND `transaction_item_sizes`.`size` IN('home')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-12-14 16:37:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-12-14 16:38:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 16:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-12-14 16:48:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 17:18:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 17:48:02 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:15:31 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:16:36 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:18:02 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:22:16 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:22:25 --> Could not find the language line "Home"
ERROR - 2024-12-14 18:24:08 --> Could not find the language line "Bracelets%20%26%20Necklaces"
ERROR - 2024-12-14 18:48:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 19:09:28 --> Could not find the language line "Home"
ERROR - 2024-12-14 19:18:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 19:48:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 20:18:03 --> Could not find the language line "Home"
ERROR - 2024-12-14 20:22:18 --> Could not find the language line "Home"
ERROR - 2024-12-14 20:22:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 20:22:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 20:23:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 20:23:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-12-14 20:37:37 --> Could not find the language line "Bracelets"
ERROR - 2024-12-14 20:37:37 --> Could not find the language line "Bracelets"
ERROR - 2024-12-14 20:37:37 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-12-14 20:37:37 --> 404 Page Not Found: /Hair%20%26%20Skin...
ERROR - 2024-12-14 20:37:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-14 20:37:38 --> Could not find the language line "Sunglasses"
ERROR - 2024-12-14 20:41:45 --> Could not find the language line "Home"
ERROR - 2024-12-14 20:47:52 --> Could not find the language line "Home"
ERROR - 2024-12-14 20:48:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 21:18:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 21:29:35 --> Could not find the language line "Home"
ERROR - 2024-12-14 21:29:36 --> Could not find the language line "Home"
ERROR - 2024-12-14 21:32:22 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 21:48:04 --> Could not find the language line "Home"
ERROR - 2024-12-14 22:18:06 --> Could not find the language line "Home"
ERROR - 2024-12-14 22:31:45 --> Could not find the language line "Home"
ERROR - 2024-12-14 22:37:26 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 22:42:24 --> Could not find the language line "Clothing"
ERROR - 2024-12-14 22:47:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-12-14 22:47:50 --> Could not find the language line "Home"
ERROR - 2024-12-14 22:48:06 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:09:29 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2024-12-14 23:13:01 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:18:11 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:31:29 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:32:57 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:36:25 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:38:07 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:39:31 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:48:07 --> Could not find the language line "Home"
ERROR - 2024-12-14 23:48:48 --> Could not find the language line "Home"
