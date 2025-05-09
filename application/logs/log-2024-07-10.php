<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-07-10 00:05:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 00:11:36 --> Could not find the language line "Home"
ERROR - 2024-07-10 00:17:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 00:24:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 00:31:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 00:47:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 00:54:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 01:04:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 01:05:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 01:11:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 01:17:46 --> Could not find the language line "Home"
ERROR - 2024-07-10 01:20:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 01:36:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 01:37:42 --> Could not find the language line "products"
ERROR - 2024-07-10 01:38:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 01:41:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 01:41:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 01:41:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 01:42:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 01:45:46 --> Could not find the language line "products"
ERROR - 2024-07-10 01:47:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 01:56:28 --> Could not find the language line "products"
ERROR - 2024-07-10 02:02:50 --> Could not find the language line "products"
ERROR - 2024-07-10 02:07:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:10:00 --> Could not find the language line "products"
ERROR - 2024-07-10 02:10:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:11:43 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:12:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:17:46 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:25:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:25:55 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:27:41 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:30:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 02:36:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:39:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:40:31 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:40:37 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 02:40:38 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 02:40:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:41:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:41:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:41:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:41:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:41:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:42:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:42:33 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 02:42:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:42:54 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 02:42:59 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 02:43:03 --> Could not find the language line "Socks"
ERROR - 2024-07-10 02:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:43:06 --> Could not find the language line "Socks"
ERROR - 2024-07-10 02:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:44:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 02:44:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:46:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:47:52 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:47:54 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 02:47:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 02:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 03:02:34 --> 404 Page Not Found: Apple-app-site-association/index
ERROR - 2024-07-10 03:03:21 --> Could not find the language line "hats"
ERROR - 2024-07-10 03:11:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 03:13:30 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 03:17:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 03:17:52 --> Could not find the language line "Home"
ERROR - 2024-07-10 03:22:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 03:24:08 --> Could not find the language line "Home"
ERROR - 2024-07-10 03:39:44 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-10 03:47:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:00:38 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 04:17:48 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:21:17 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:23:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 04:26:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 04:46:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 04:48:12 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:51:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:52:02 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 04:52:03 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-07-10 04:52:49 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-10 04:53:03 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 04:53:03 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 04:54:03 --> Could not find the language line "Perfume"
ERROR - 2024-07-10 04:54:04 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-07-10 04:55:09 --> Could not find the language line "products"
ERROR - 2024-07-10 04:55:37 --> Could not find the language line "Home"
ERROR - 2024-07-10 04:55:38 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-07-10 04:59:37 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 04:59:37 --> Severity: error --> Exception: Too few arguments to function Products::category(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and at least 1 expected /home/samfit/public_html/application/controllers/Products.php 110
ERROR - 2024-07-10 05:00:38 --> Severity: error --> Exception: Too few arguments to function Products::view(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/samfit/public_html/application/controllers/Products.php 21
ERROR - 2024-07-10 05:01:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 05:01:15 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:01:39 --> Severity: error --> Exception: Too few arguments to function Products::view(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/samfit/public_html/application/controllers/Products.php 21
ERROR - 2024-07-10 05:02:40 --> Severity: error --> Exception: Too few arguments to function Products::view(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/samfit/public_html/application/controllers/Products.php 21
ERROR - 2024-07-10 05:03:40 --> Severity: error --> Exception: Too few arguments to function Products::view(), 0 passed in /home/samfit/public_html/system/core/CodeIgniter.php on line 532 and exactly 1 expected /home/samfit/public_html/application/controllers/Products.php 21
ERROR - 2024-07-10 05:10:04 --> 404 Page Not Found: Assets/uploads
ERROR - 2024-07-10 05:15:01 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:17:38 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:17:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:18:22 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:19:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 05:20:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 05:22:33 --> Could not find the language line "products"
ERROR - 2024-07-10 05:23:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 05:28:43 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:35:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 05:41:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:47:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 05:48:56 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-10 05:56:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 05:58:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 06:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:07:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:08:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:14:05 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:17:22 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:17:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:19:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:21:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:23:00 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:23:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:23:09 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:23:16 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:25:09 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 06:26:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 06:34:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:35:37 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:36:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 06:36:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 06:36:31 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:39:23 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:39:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:41:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 06:41:17 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 06:41:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:42:03 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:42:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:42:31 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:42:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 06:43:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:43:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:44:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:46:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:46:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 06:47:34 --> 404 Page Not Found: Products/products
ERROR - 2024-07-10 06:47:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:47:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:47:50 --> Could not find the language line "Home"
ERROR - 2024-07-10 06:55:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:55:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:55:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:55:36 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 06:56:38 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:01:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:03:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:04:05 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:04:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:04:41 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:04:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:07:57 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:07:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:07:58 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:08:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:08:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:08:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:08:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:08:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:09:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:09:43 --> Severity: Notice --> Array to string conversion /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 07:09:44 --> Severity: Notice --> Array to string conversion /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 07:09:44 --> Severity: Notice --> Array to string conversion /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 07:09:44 --> Severity: Notice --> Array to string conversion /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 07:09:44 --> Severity: Notice --> Array to string conversion /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 07:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:11:14 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:11:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:11:44 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 07:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:11:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:12:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:13:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 07:15:21 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2024-07-10 07:15:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:16:34 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:17:15 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:17:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:18:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:18:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:19:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:19:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:19:43 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:20:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:20:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:20:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:21:20 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:21:42 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:21:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:23:38 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:23:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:24:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:24:41 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:25:01 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:25:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:25:16 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:25:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:25:18 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:25:22 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:26:12 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:26:21 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:26:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:27:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:28:33 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:28:34 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:28:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:24 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:29:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:30:03 --> Could not find the language line "Disclaimer"
ERROR - 2024-07-10 07:30:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:30:14 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:30:16 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:30:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:30:25 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:30:38 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:30:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:30:44 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:30:44 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:30:53 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:31:06 --> Could not find the language line "Bags%20%26%20Wallets"
ERROR - 2024-07-10 07:31:09 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:31:35 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:31:37 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:32:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 07:32:16 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:32:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:32:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:32:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:33:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:33:13 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 07:33:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:33:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:33:59 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:34:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:34:10 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:34:13 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:34:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:34:41 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:35:37 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:35:43 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:36:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 07:36:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:47:00 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 07:47:11 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:24 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:31 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 07:47:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:49:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 07:54:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 07:55:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:04:41 --> Could not find the language line "Other"
ERROR - 2024-07-10 08:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:11:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:11:40 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:13:32 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:15:13 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:16:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:16:19 --> Severity: error --> Exception: syntax error, unexpected ')' /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 08:16:37 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:16:37 --> Severity: error --> Exception: syntax error, unexpected ')' /home/samfit/public_html/application/views/products/category.php 53
ERROR - 2024-07-10 08:17:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:17:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:19:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 08:24:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 08:24:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 08:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:24:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:27:22 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:30:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:30:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:31:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 08:31:42 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:32:35 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:32:50 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:33:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:33:39 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:33:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:33:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:34:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 08:34:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:34:44 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 08:36:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 08:38:23 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:44:43 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:45:49 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:30 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:45 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:47 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:46:55 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:47:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 08:47:52 --> Could not find the language line "Home"
ERROR - 2024-07-10 08:50:47 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 08:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 08:52:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 09:22:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 09:22:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 09:27:34 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:48:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 09:48:02 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:48:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:49:22 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:51:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:57:42 --> Could not find the language line "Home"
ERROR - 2024-07-10 09:58:28 --> Could not find the language line "hats"
ERROR - 2024-07-10 10:00:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:00:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:01:11 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:02:18 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:04:04 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:04:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:05:54 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:05:55 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:06:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:06:17 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:06:59 --> Could not find the language line "Socks"
ERROR - 2024-07-10 10:08:19 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 10:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:11:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:12:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:12:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:12:33 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:12:41 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:13:02 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:15:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:17:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:17:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:17:52 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:18:16 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 10:21:06 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:21:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:21:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:22:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:24:31 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:25:00 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:25:35 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:25:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:26:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:27:39 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:28:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:28:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:31:16 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:32:06 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:32:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:32:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:33:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:34:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:38:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:40:08 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 10:40:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:40:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 10:42:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:43:40 --> 404 Page Not Found: Adstxt/index
ERROR - 2024-07-10 10:43:40 --> 404 Page Not Found: App-adstxt/index
ERROR - 2024-07-10 10:43:40 --> 404 Page Not Found: Sellersjson/index
ERROR - 2024-07-10 10:43:42 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-10 10:43:42 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-10 10:44:00 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:44:04 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-10 10:44:04 --> 404 Page Not Found: Well-known/apple-app-site-association
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/related-website-set.json
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/privacy-sandbox-attestations.json
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/gpc.json
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/security.txt
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/change-password
ERROR - 2024-07-10 10:44:05 --> 404 Page Not Found: Well-known/resource-that-should-not-exist-whose-status-code-should-not-be-200
ERROR - 2024-07-10 10:44:33 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:46:31 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:47:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:48:22 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 10:48:22 --> 404 Page Not Found: Assets/lib
ERROR - 2024-07-10 10:48:22 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:53:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 10:54:35 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:56:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 10:57:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:02:44 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:02:54 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:02:55 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 11:03:08 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:03:15 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:03:35 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:03:36 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:03:36 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:16:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 11:17:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:20:59 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:24:07 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:24:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 11:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 11:24:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:26:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 11:27:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:36:57 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 11:42:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 11:47:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 11:50:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:01:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 12:10:20 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:11:28 --> 404 Page Not Found: Products/products
ERROR - 2024-07-10 12:17:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:19:30 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:33 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 12:19:39 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 12:19:39 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:22:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:29:54 --> Could not find the language line "Socks"
ERROR - 2024-07-10 12:32:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:32:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:33:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:34:30 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:34:43 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:36:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:36:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:36:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:37:54 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:40:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:43:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:44:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:44:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:45:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 12:47:55 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:48:00 --> Could not find the language line "hats"
ERROR - 2024-07-10 12:48:33 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:48:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:49:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 12:53:37 --> Could not find the language line "Other"
ERROR - 2024-07-10 12:53:48 --> Could not find the language line "Home"
ERROR - 2024-07-10 12:57:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 13:03:29 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 13:08:11 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:10:16 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:11:12 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:11:12 --> Could not find the language line "products"
ERROR - 2024-07-10 13:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:14:53 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:17:54 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:18:21 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:18:28 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 13:18:29 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 13:18:32 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 13:18:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 13:21:34 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:29:06 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:33:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:37:09 --> Could not find the language line "products"
ERROR - 2024-07-10 13:42:28 --> 404 Page Not Found: Products/products
ERROR - 2024-07-10 13:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:45:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:45:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:47:54 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:49:07 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:50:05 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 13:53:14 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:53:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:53:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:41 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:53:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:52 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:55 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:53:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:55:26 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:55:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:55:40 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 13:56:02 --> Could not find the language line "products"
ERROR - 2024-07-10 13:57:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 13:58:37 --> Could not find the language line "Home"
ERROR - 2024-07-10 13:58:41 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:02:07 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:03:13 --> Could not find the language line "products"
ERROR - 2024-07-10 14:03:24 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:03:32 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:04:28 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:05:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:07:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:07:49 --> Could not find the language line "products"
ERROR - 2024-07-10 14:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:12:57 --> 404 Page Not Found: /hair%20%26%20skin...
ERROR - 2024-07-10 14:14:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:17:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:17:55 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:37:43 --> Could not find the language line "products"
ERROR - 2024-07-10 14:44:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 14:47:55 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:50:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 14:52:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 14:53:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 14:57:05 --> Could not find the language line "Home"
ERROR - 2024-07-10 14:58:47 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:58:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 14:59:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 15:01:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 15:02:13 --> Could not find the language line "Home"
ERROR - 2024-07-10 15:03:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 15:07:26 --> Could not find the language line "products"
ERROR - 2024-07-10 15:10:26 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 15:13:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 15:17:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 15:18:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 15:28:34 --> Could not find the language line "products"
ERROR - 2024-07-10 15:46:53 --> Could not find the language line "hats"
ERROR - 2024-07-10 15:47:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 15:57:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 15:59:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 15:59:53 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 15:59:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 16:00:05 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:02:52 --> Could not find the language line "Other"
ERROR - 2024-07-10 16:04:06 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:04:11 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:04:57 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:05:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:05:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 16:05:25 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:05:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:05:35 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:05:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:06:00 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:06:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:06:10 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 16:06:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 16:06:25 --> Could not find the language line "Socks"
ERROR - 2024-07-10 16:07:07 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:07:10 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:11:39 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:11:45 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:12:04 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 16:13:48 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:16:38 --> Could not find the language line "Bracelets"
ERROR - 2024-07-10 16:17:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:22:29 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:22:34 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:22:43 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 16:36:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 16:38:49 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 16:41:55 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 143
ERROR - 2024-07-10 16:41:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 17 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Other'
AND `items`.`sub_category` IN('cart')
AND `items`.`gender` IN('products')
AND `items`.`price` >= 'category'
AND `items`.`price` <= 100
AND `items`.`color` IN('home')
AND `transaction_item_sizes`.`size` IN('products')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2024-07-10 16:41:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2024-07-10 16:47:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 16:49:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 16:53:50 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 16:59:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 17:01:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 17:03:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:07:16 --> Could not find the language line "Other"
ERROR - 2024-07-10 17:07:24 --> Could not find the language line "Other"
ERROR - 2024-07-10 17:07:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 17:07:35 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:08:35 --> Could not find the language line "Socks"
ERROR - 2024-07-10 17:08:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:17:37 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 17:17:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:24:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:28:49 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:33:59 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:37:32 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:38:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:40:13 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:41:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:42:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:47:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:49:26 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 17:49:28 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 17:49:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:50:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:50:34 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 17:50:38 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:50:43 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:50:59 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 17:51:00 --> 404 Page Not Found: Cart/cart
ERROR - 2024-07-10 17:51:10 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 17:51:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 17:52:48 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 17:53:13 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 17:53:19 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:53:21 --> Could not find the language line "Home"
ERROR - 2024-07-10 17:58:12 --> Could not find the language line "Other"
ERROR - 2024-07-10 17:59:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 18:00:28 --> Could not find the language line "Other"
ERROR - 2024-07-10 18:07:36 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:09:08 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:09:16 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:09:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:09:19 --> Could not find the language line "Other"
ERROR - 2024-07-10 18:09:22 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:10:20 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-10 18:10:36 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:15:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:17:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:33:53 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:36:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:38:13 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 18:43:42 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:44:54 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:45:12 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:47:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:54:40 --> Could not find the language line "Home"
ERROR - 2024-07-10 18:57:14 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 18:59:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 19:07:04 --> Could not find the language line "Home"
ERROR - 2024-07-10 19:07:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 19:07:56 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 19:07:59 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 19:17:58 --> Could not find the language line "Home"
ERROR - 2024-07-10 19:21:56 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 19:27:51 --> Could not find the language line "Home"
ERROR - 2024-07-10 19:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 19:44:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 19:50:59 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:14:25 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:16:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:17:20 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 20:17:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2024-07-10 20:17:42 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:17:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 20:17:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 20:18:08 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:18:27 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 20:19:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 20:20:23 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 20:20:53 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 20:21:10 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:21:32 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 20:22:35 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:22:55 --> Could not find the language line "Socks"
ERROR - 2024-07-10 20:23:53 --> Could not find the language line "Socks"
ERROR - 2024-07-10 20:26:50 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:29:17 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:30:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 20:31:05 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:31:56 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 20:32:34 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:44:26 --> Could not find the language line "Home"
ERROR - 2024-07-10 20:53:43 --> Could not find the language line "products"
ERROR - 2024-07-10 21:08:39 --> Could not find the language line "products"
ERROR - 2024-07-10 21:10:47 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 21:11:50 --> Could not find the language line "Clothing"
ERROR - 2024-07-10 21:14:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 21:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 21:33:52 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 21:36:35 --> Could not find the language line "Home"
ERROR - 2024-07-10 21:36:44 --> Could not find the language line "Home"
ERROR - 2024-07-10 21:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 21:38:29 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 21:44:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 21:46:47 --> Could not find the language line "Home"
ERROR - 2024-07-10 21:47:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 21:47:26 --> Could not find the language line "Hair%20%26%20Skin%20Products"
ERROR - 2024-07-10 21:55:26 --> Could not find the language line "products"
ERROR - 2024-07-10 22:09:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 22:14:30 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:15:36 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:22:34 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:29:07 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:32:54 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:33:19 --> Could not find the language line "Socks"
ERROR - 2024-07-10 22:36:24 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:36:48 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:44:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:49:02 --> Could not find the language line "Home"
ERROR - 2024-07-10 22:52:17 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:52:27 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:53:11 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:55:58 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:56:13 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:56:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2024-07-10 22:56:48 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:57:18 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:57:45 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 22:59:18 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:00:20 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:02:27 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:02:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:02:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:12 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:25 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:33 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:42 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2024-07-10 23:03:57 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:04:02 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 23:04:11 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 23:04:13 --> Could not find the language line "Sunglasses"
ERROR - 2024-07-10 23:04:19 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:04:25 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:04:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:04:31 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:04:31 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:04:32 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:04:33 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:04:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2024-07-10 23:07:56 --> Could not find the language line "hats"
ERROR - 2024-07-10 23:14:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:23:36 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2024-07-10 23:44:28 --> Could not find the language line "Home"
ERROR - 2024-07-10 23:54:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 23:54:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2024-07-10 23:54:17 --> Could not find the language line "Home"
