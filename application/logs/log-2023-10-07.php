<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-10-07 00:00:41 --> Could not find the language line "products"
ERROR - 2023-10-07 00:04:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 00:04:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 00:04:37 --> Could not find the language line "Home"
ERROR - 2023-10-07 00:04:37 --> Could not find the language line "Home"
ERROR - 2023-10-07 00:04:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 00:04:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 00:04:45 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:45 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:46 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:46 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:47 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:47 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:48 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:48 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:50 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:50 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:50 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:51 --> 404 Page Not Found: Home/home
ERROR - 2023-10-07 00:04:51 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:51 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:51 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:04:51 --> 404 Page Not Found: Users/home
ERROR - 2023-10-07 00:07:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 00:40:11 --> Could not find the language line "Socks"
ERROR - 2023-10-07 00:51:05 --> 404 Page Not Found: Stylephp/index
ERROR - 2023-10-07 01:01:27 --> Could not find the language line "products"
ERROR - 2023-10-07 01:04:52 --> Could not find the language line "Home"
ERROR - 2023-10-07 01:05:05 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:05:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 01:06:16 --> Could not find the language line "Home"
ERROR - 2023-10-07 01:06:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:06:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:07:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:07:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:07:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:08:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:08:27 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 01:09:26 --> Could not find the language line "Other"
ERROR - 2023-10-07 01:12:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 01:12:48 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 01:12:51 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 01:13:49 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:13:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:14:04 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:14:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:14:10 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:14:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 01:14:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 01:14:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 01:16:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 01:20:21 --> Could not find the language line "Socks"
ERROR - 2023-10-07 01:31:27 --> Could not find the language line "products"
ERROR - 2023-10-07 01:52:10 --> Could not find the language line "Home"
ERROR - 2023-10-07 01:52:10 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:01:27 --> Could not find the language line "products"
ERROR - 2023-10-07 02:11:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:11:47 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 02:12:03 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:21:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:26:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 02:31:27 --> Could not find the language line "products"
ERROR - 2023-10-07 02:32:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:32:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:33:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:34:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:35:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 02:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:35:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 02:35:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 02:35:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:35:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 02:35:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 02:41:08 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:01:27 --> Could not find the language line "products"
ERROR - 2023-10-07 03:05:05 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-10-07 03:07:46 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:08:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 03:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 03:09:53 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-10-07 03:11:04 --> 404 Page Not Found: News/wp-includes
ERROR - 2023-10-07 03:11:10 --> 404 Page Not Found: 2022/wp-includes
ERROR - 2023-10-07 03:11:36 --> 404 Page Not Found: Wp-includes/css
ERROR - 2023-10-07 03:12:44 --> 404 Page Not Found: Test/wp-includes
ERROR - 2023-10-07 03:15:55 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2023-10-07 03:17:10 --> 404 Page Not Found: Web/wp-includes
ERROR - 2023-10-07 03:17:40 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2023-10-07 03:17:43 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2023-10-07 03:17:44 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2023-10-07 03:18:11 --> 404 Page Not Found: Well-known/dze.php
ERROR - 2023-10-07 03:18:12 --> 404 Page Not Found: Well-known/utchiha505.php
ERROR - 2023-10-07 03:18:13 --> 404 Page Not Found: 01php/index
ERROR - 2023-10-07 03:18:13 --> 404 Page Not Found: 02php/index
ERROR - 2023-10-07 03:18:14 --> 404 Page Not Found: 0zphp/index
ERROR - 2023-10-07 03:18:14 --> 404 Page Not Found: 1php/index
ERROR - 2023-10-07 03:18:15 --> 404 Page Not Found: 1337php/index
ERROR - 2023-10-07 03:18:15 --> 404 Page Not Found: 1h6j5php/index
ERROR - 2023-10-07 03:18:16 --> 404 Page Not Found: 1indexphp/index
ERROR - 2023-10-07 03:18:16 --> 404 Page Not Found: 1indexphp/index
ERROR - 2023-10-07 03:18:17 --> 404 Page Not Found: 2indexphp/index
ERROR - 2023-10-07 03:18:17 --> 404 Page Not Found: 2indexphp/index
ERROR - 2023-10-07 03:18:18 --> 404 Page Not Found: 3indexphp/index
ERROR - 2023-10-07 03:18:19 --> 404 Page Not Found: 3xphp/index
ERROR - 2023-10-07 03:18:19 --> 404 Page Not Found: 403php/index
ERROR - 2023-10-07 03:18:20 --> 404 Page Not Found: 404php/index
ERROR - 2023-10-07 03:18:20 --> 404 Page Not Found: 4pricephp/index
ERROR - 2023-10-07 03:18:21 --> 404 Page Not Found: Aboutphp/index
ERROR - 2023-10-07 03:18:21 --> 404 Page Not Found: Adminphp/index
ERROR - 2023-10-07 03:18:22 --> 404 Page Not Found: Admin/controller
ERROR - 2023-10-07 03:18:22 --> 404 Page Not Found: Alfaphp/index
ERROR - 2023-10-07 03:18:23 --> 404 Page Not Found: ALFA_DATA/alfacgiapi
ERROR - 2023-10-07 03:18:23 --> 404 Page Not Found: Autoload_classmapphp/index
ERROR - 2023-10-07 03:18:24 --> 404 Page Not Found: Baindexphp/index
ERROR - 2023-10-07 03:18:24 --> 404 Page Not Found: Cphp/index
ERROR - 2023-10-07 03:18:25 --> 404 Page Not Found: Cphp/index
ERROR - 2023-10-07 03:18:25 --> 404 Page Not Found: Cryptedphp/index
ERROR - 2023-10-07 03:18:26 --> 404 Page Not Found: Css/4O4.php
ERROR - 2023-10-07 03:18:26 --> 404 Page Not Found: Deadcode1975xxxxxxxxxxxxxxxxxxxxxxxxxxxxphp/index
ERROR - 2023-10-07 03:18:27 --> 404 Page Not Found: DKIZphp/index
ERROR - 2023-10-07 03:18:27 --> 404 Page Not Found: Docphp/index
ERROR - 2023-10-07 03:18:28 --> 404 Page Not Found: Fwphp/index
ERROR - 2023-10-07 03:18:28 --> 404 Page Not Found: Goodphp/index
ERROR - 2023-10-07 03:18:29 --> 404 Page Not Found: Googlephp/index
ERROR - 2023-10-07 03:18:29 --> 404 Page Not Found: Haxorphp/index
ERROR - 2023-10-07 03:18:30 --> 404 Page Not Found: Hehephp/index
ERROR - 2023-10-07 03:18:30 --> 404 Page Not Found: Image/screenshot_1.php
ERROR - 2023-10-07 03:18:31 --> 404 Page Not Found: Images/vuln.php
ERROR - 2023-10-07 03:18:31 --> 404 Page Not Found: Images/wp-2019.php
ERROR - 2023-10-07 03:18:32 --> 404 Page Not Found: Iniphp/index
ERROR - 2023-10-07 03:18:32 --> 404 Page Not Found: Lock360php/index
ERROR - 2023-10-07 03:18:33 --> 404 Page Not Found: Lufixphp/index
ERROR - 2023-10-07 03:18:33 --> 404 Page Not Found: Madphp/index
ERROR - 2023-10-07 03:18:34 --> 404 Page Not Found: Marijuanaphp/index
ERROR - 2023-10-07 03:18:34 --> 404 Page Not Found: Massphp/index
ERROR - 2023-10-07 03:18:35 --> 404 Page Not Found: Media-adminphp/index
ERROR - 2023-10-07 03:18:35 --> 404 Page Not Found: Miniphp/index
ERROR - 2023-10-07 03:18:36 --> 404 Page Not Found: Mininewphp/index
ERROR - 2023-10-07 03:18:36 --> 404 Page Not Found: New-indexphp/index
ERROR - 2023-10-07 03:18:37 --> 404 Page Not Found: Old-indexphp/index
ERROR - 2023-10-07 03:18:37 --> 404 Page Not Found: Payoutphp/index
ERROR - 2023-10-07 03:18:38 --> 404 Page Not Found: Piphp/index
ERROR - 2023-10-07 03:18:38 --> 404 Page Not Found: Priv8php/index
ERROR - 2023-10-07 03:18:39 --> 404 Page Not Found: R00Tphp/index
ERROR - 2023-10-07 03:18:39 --> 404 Page Not Found: Radiophp/index
ERROR - 2023-10-07 03:18:40 --> 404 Page Not Found: Reminderphp/index
ERROR - 2023-10-07 03:18:40 --> 404 Page Not Found: Screenshot_1php/index
ERROR - 2023-10-07 03:18:41 --> 404 Page Not Found: Shellphp/index
ERROR - 2023-10-07 03:18:41 --> 404 Page Not Found: Smallphp/index
ERROR - 2023-10-07 03:18:42 --> 404 Page Not Found: Srxphp/index
ERROR - 2023-10-07 03:18:42 --> 404 Page Not Found: Up-konphp/index
ERROR - 2023-10-07 03:18:43 --> 404 Page Not Found: Upphp/index
ERROR - 2023-10-07 03:18:44 --> 404 Page Not Found: Uploadphp/index
ERROR - 2023-10-07 03:18:44 --> 404 Page Not Found: Uploadphp/index
ERROR - 2023-10-07 03:18:45 --> 404 Page Not Found: Uploads/up.php
ERROR - 2023-10-07 03:18:45 --> 404 Page Not Found: Uploads/xleet.php
ERROR - 2023-10-07 03:18:46 --> 404 Page Not Found: Upsphp/index
ERROR - 2023-10-07 03:18:46 --> 404 Page Not Found: Utchihaphp/index
ERROR - 2023-10-07 03:18:47 --> 404 Page Not Found: Wikindexphp/index
ERROR - 2023-10-07 03:18:47 --> 404 Page Not Found: Wp-admin/fx.php
ERROR - 2023-10-07 03:18:48 --> 404 Page Not Found: Wp-admin/images
ERROR - 2023-10-07 03:18:48 --> 404 Page Not Found: Wp-admin/includes
ERROR - 2023-10-07 03:18:49 --> 404 Page Not Found: Wp-admin/maint
ERROR - 2023-10-07 03:18:49 --> 404 Page Not Found: Wp-admin/maint
ERROR - 2023-10-07 03:18:50 --> 404 Page Not Found: Wp-admin/priv8.php
ERROR - 2023-10-07 03:18:50 --> 404 Page Not Found: Wp-admin/rss.php
ERROR - 2023-10-07 03:18:51 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2023-10-07 03:18:51 --> 404 Page Not Found: Wp-admin/xleet.php
ERROR - 2023-10-07 03:18:52 --> 404 Page Not Found: Wp-blogphp/index
ERROR - 2023-10-07 03:18:52 --> 404 Page Not Found: Wp-content/wp-activate.php
ERROR - 2023-10-07 03:18:53 --> 404 Page Not Found: Wp-content/fw.php
ERROR - 2023-10-07 03:18:53 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-07 03:18:54 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-07 03:18:54 --> 404 Page Not Found: Wp-content/plugins
ERROR - 2023-10-07 03:18:55 --> 404 Page Not Found: Wp-content/themes
ERROR - 2023-10-07 03:18:55 --> 404 Page Not Found: Wp-content/upgrade
ERROR - 2023-10-07 03:18:56 --> 404 Page Not Found: Wp-content/upload.php
ERROR - 2023-10-07 03:18:56 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:57 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:57 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:58 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:58 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:59 --> 404 Page Not Found: Wp-content/uploads
ERROR - 2023-10-07 03:18:59 --> 404 Page Not Found: Wp-easyphp/index
ERROR - 2023-10-07 03:19:00 --> 404 Page Not Found: Wp-godphp/index
ERROR - 2023-10-07 03:19:00 --> 404 Page Not Found: Wp-includes/24.php
ERROR - 2023-10-07 03:19:01 --> 404 Page Not Found: Wp-includes/indeh.php
ERROR - 2023-10-07 03:19:01 --> 404 Page Not Found: Wp-includes/ms-pie.php
ERROR - 2023-10-07 03:19:02 --> 404 Page Not Found: Wp-includes/radio.php
ERROR - 2023-10-07 03:19:03 --> 404 Page Not Found: Wp-includes/theme-templates-private.php
ERROR - 2023-10-07 03:19:03 --> 404 Page Not Found: Wp-includes/uplaod.php
ERROR - 2023-10-07 03:19:04 --> 404 Page Not Found: Wp-includes/v22.php
ERROR - 2023-10-07 03:19:05 --> 404 Page Not Found: Wp-includes/wp-2019.php
ERROR - 2023-10-07 03:19:05 --> 404 Page Not Found: Wp-includes/wp-includes
ERROR - 2023-10-07 03:19:06 --> 404 Page Not Found: Wp-includes/wp-site.php
ERROR - 2023-10-07 03:19:06 --> 404 Page Not Found: Wp-includes/xmrlpc.php
ERROR - 2023-10-07 03:19:07 --> 404 Page Not Found: Wp-includes/xx.php
ERROR - 2023-10-07 03:19:07 --> 404 Page Not Found: Wp-includes/1index.php
ERROR - 2023-10-07 03:19:08 --> 404 Page Not Found: Wp-includes/admin-bar.php
ERROR - 2023-10-07 03:19:08 --> 404 Page Not Found: Wp-includes/assets
ERROR - 2023-10-07 03:19:09 --> 404 Page Not Found: Wp-includes/block-supports
ERROR - 2023-10-07 03:19:09 --> 404 Page Not Found: Wp-includes/css
ERROR - 2023-10-07 03:19:10 --> 404 Page Not Found: Wp-includes/customize
ERROR - 2023-10-07 03:19:11 --> 404 Page Not Found: Wp-includes/js
ERROR - 2023-10-07 03:19:11 --> 404 Page Not Found: Wp-includes/ms-files.php
ERROR - 2023-10-07 03:19:12 --> 404 Page Not Found: Wp-includes/pomo
ERROR - 2023-10-07 03:19:12 --> 404 Page Not Found: Wp-includes/pomo
ERROR - 2023-10-07 03:19:13 --> 404 Page Not Found: Wp-infophp/index
ERROR - 2023-10-07 03:19:13 --> 404 Page Not Found: Wp-xphp/index
ERROR - 2023-10-07 03:19:14 --> 404 Page Not Found: Wpphp/index
ERROR - 2023-10-07 03:19:14 --> 404 Page Not Found: Wp_logxphp/index
ERROR - 2023-10-07 03:19:15 --> 404 Page Not Found: Wp_wrong_datlibphp/index
ERROR - 2023-10-07 03:19:15 --> 404 Page Not Found: Wpxphp/index
ERROR - 2023-10-07 03:19:16 --> 404 Page Not Found: Wsophp/index
ERROR - 2023-10-07 03:19:16 --> 404 Page Not Found: Wxophp/index
ERROR - 2023-10-07 03:19:17 --> 404 Page Not Found: Xphp/index
ERROR - 2023-10-07 03:19:17 --> 404 Page Not Found: Xlphp/index
ERROR - 2023-10-07 03:19:18 --> 404 Page Not Found: Xleetphp/index
ERROR - 2023-10-07 03:19:18 --> 404 Page Not Found: Xltphp/index
ERROR - 2023-10-07 03:19:19 --> 404 Page Not Found: Xmlphp/index
ERROR - 2023-10-07 03:19:19 --> 404 Page Not Found: Xmlrqcphp/index
ERROR - 2023-10-07 03:19:20 --> 404 Page Not Found: Xwxxphp/index
ERROR - 2023-10-07 03:19:20 --> 404 Page Not Found: XxXphp/index
ERROR - 2023-10-07 03:19:21 --> 404 Page Not Found: Xxphp/index
ERROR - 2023-10-07 03:19:21 --> 404 Page Not Found: Wp-2018php/index
ERROR - 2023-10-07 03:19:22 --> 404 Page Not Found: Wp-2019php/index
ERROR - 2023-10-07 03:19:22 --> 404 Page Not Found: Wp-2020php/index
ERROR - 2023-10-07 03:19:23 --> 404 Page Not Found: Wp-2021php/index
ERROR - 2023-10-07 03:19:24 --> 404 Page Not Found: Wp-2022php/index
ERROR - 2023-10-07 03:19:24 --> 404 Page Not Found: Wp-22php/index
ERROR - 2023-10-07 03:19:27 --> Could not find the language line "products"
ERROR - 2023-10-07 03:19:48 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2023-10-07 03:20:12 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2023-10-07 03:20:18 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2023-10-07 03:20:31 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2023-10-07 03:21:26 --> 404 Page Not Found: Website/wp-includes
ERROR - 2023-10-07 03:37:33 --> Could not find the language line "products"
ERROR - 2023-10-07 03:38:25 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:38:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:39:26 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:43:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:46:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 03:46:36 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:46:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:47:58 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:50:49 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:54:41 --> Could not find the language line "Home"
ERROR - 2023-10-07 03:55:27 --> Could not find the language line "products"
ERROR - 2023-10-07 04:13:27 --> Could not find the language line "products"
ERROR - 2023-10-07 04:31:27 --> Could not find the language line "products"
ERROR - 2023-10-07 04:31:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 04:39:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 04:49:28 --> Could not find the language line "products"
ERROR - 2023-10-07 04:50:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 04:55:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:00:35 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:07:35 --> Could not find the language line "products"
ERROR - 2023-10-07 05:12:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:25:28 --> Could not find the language line "products"
ERROR - 2023-10-07 05:27:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:28:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:31:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:34:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:42:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:42:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:43:27 --> Could not find the language line "products"
ERROR - 2023-10-07 05:43:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:45:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 05:46:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:49:46 --> Could not find the language line "assets"
ERROR - 2023-10-07 05:50:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:53:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:54:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:55:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:55:16 --> Could not find the language line "Perfume"
ERROR - 2023-10-07 05:55:22 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:55:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:55:51 --> Could not find the language line "Perfume"
ERROR - 2023-10-07 05:55:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 05:58:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 05:58:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:00:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:01:27 --> Could not find the language line "products"
ERROR - 2023-10-07 06:01:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:02:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:02:12 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:02:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:02:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 06:02:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('XL')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 06:02:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 06:04:21 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:04:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:10:18 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:11:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:13:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:13:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:13:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:16:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:19:27 --> Could not find the language line "products"
ERROR - 2023-10-07 06:27:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:27:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:27:24 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:27:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:27:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:27:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:27:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:27:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:27:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:27:52 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:28:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:30:43 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:30:51 --> 404 Page Not Found: 2021/wp-includes
ERROR - 2023-10-07 06:31:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 06:31:41 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 06:31:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 06:33:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:33:39 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 06:34:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:35:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:35:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:35:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 06:37:16 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:37:35 --> Could not find the language line "products"
ERROR - 2023-10-07 06:37:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:38:53 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:38:59 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 06:39:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:40:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:40:06 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:45:58 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:46:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:54:44 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:55:28 --> Could not find the language line "products"
ERROR - 2023-10-07 06:58:26 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:58:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:58:35 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:59:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 06:59:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 06:59:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:01:18 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:01:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:01:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:01:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:01:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:03:18 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:03:36 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:09:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:13:27 --> Could not find the language line "products"
ERROR - 2023-10-07 07:24:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:24:42 --> Could not find the language line "products"
ERROR - 2023-10-07 07:29:01 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-07 07:29:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 07:30:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 07:35:57 --> Could not find the language line "products"
ERROR - 2023-10-07 07:47:13 --> Could not find the language line "products"
ERROR - 2023-10-07 07:58:28 --> Could not find the language line "products"
ERROR - 2023-10-07 08:01:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 08:02:22 --> 404 Page Not Found: Wpphp/index
ERROR - 2023-10-07 08:02:26 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-07 08:03:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:07:11 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-07 08:08:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 08:09:25 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-10-07 08:09:43 --> 404 Page Not Found: Products/products
ERROR - 2023-10-07 08:17:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 08:17:02 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:18:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 08:18:57 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:19:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 08:20:25 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 08:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 08:20:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 08:20:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 08:21:35 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 08:23:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 08:27:57 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:31:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:32:12 --> 404 Page Not Found: Products/products
ERROR - 2023-10-07 08:34:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 08:35:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 08:35:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 08:39:27 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:41:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:43:27 --> Could not find the language line "products"
ERROR - 2023-10-07 08:43:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:45:48 --> Could not find the language line "Crocs"
ERROR - 2023-10-07 08:50:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 08:54:42 --> Could not find the language line "products"
ERROR - 2023-10-07 09:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:02:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:02:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:03:08 --> Could not find the language line "Home"
ERROR - 2023-10-07 09:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:04:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:05:57 --> Could not find the language line "products"
ERROR - 2023-10-07 09:09:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 09:15:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:17:12 --> Could not find the language line "products"
ERROR - 2023-10-07 09:23:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 09:25:24 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-07 09:34:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 09:39:07 --> Could not find the language line "Home"
ERROR - 2023-10-07 09:43:29 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 09:43:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-07 09:43:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 09:46:10 --> Could not find the language line "products"
ERROR - 2023-10-07 09:47:15 --> Could not find the language line "Home"
ERROR - 2023-10-07 09:56:26 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:01:13 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-07 10:04:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:05:08 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:06:51 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:08:22 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:11:36 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 10:11:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('41')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 10:11:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 10:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:12:41 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:12:47 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:13:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:13:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:13:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:13:54 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:13:58 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 10:14:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:15:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:16:11 --> Could not find the language line "products"
ERROR - 2023-10-07 10:19:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:20:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:20:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:25:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:28:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:29:07 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:29:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:29:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:29:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:30:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:31:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:31:16 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:31:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:32:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:32:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:32:39 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:32:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:32:57 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:32:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:33:05 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:33:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 10:33:06 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:33:40 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:34:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:34:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:34:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:34:55 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:35:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:35:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:35:19 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:35:39 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 10:37:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:38:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:43:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:44:13 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 10:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('40')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 10:44:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 10:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:50:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 10:50:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
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
ERROR - 2023-10-07 10:50:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 10:51:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:52:41 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:52:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:53:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:53:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:54:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:54:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:54:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:54:24 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:54:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:54:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 10:54:51 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:54:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:54:58 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:55:17 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:55:18 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:55:25 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:55:39 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 10:57:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 10:57:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:59:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 10:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:02:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:02:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:02:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:03:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:03:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:04:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:04:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:05:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:05:51 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:05:57 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 11:06:05 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 11:06:16 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 11:06:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:36:52 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-07 11:38:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:46:12 --> Could not find the language line "products"
ERROR - 2023-10-07 11:47:37 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:48:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:48:14 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:48:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:48:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:48:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 11:48:59 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:49:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 11:49:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 11:50:13 --> Could not find the language line "products"
ERROR - 2023-10-07 11:54:14 --> Could not find the language line "products"
ERROR - 2023-10-07 11:58:15 --> Could not find the language line "products"
ERROR - 2023-10-07 12:02:16 --> Could not find the language line "products"
ERROR - 2023-10-07 12:03:46 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:05:00 --> 404 Page Not Found: Env/index
ERROR - 2023-10-07 12:05:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:05:04 --> 404 Page Not Found: Env/index
ERROR - 2023-10-07 12:05:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:09:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:11:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:12:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 12:19:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 12:20:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:30:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:34:57 --> Could not find the language line "Bags%20%and%20Wallets"
ERROR - 2023-10-07 12:35:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:36:03 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:36:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:36:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:36:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:42:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 12:42:52 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:42:52 --> Could not find the language line "Home"
ERROR - 2023-10-07 12:43:18 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:12:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:13:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:13:20 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 13:13:27 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:13:32 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 13:13:33 --> Could not find the language line "assets"
ERROR - 2023-10-07 13:14:07 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 13:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:14:54 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 13:15:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:17:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:20:37 --> Could not find the language line "assets"
ERROR - 2023-10-07 13:23:49 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:23:56 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:26:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:27:41 --> Could not find the language line "Perfume"
ERROR - 2023-10-07 13:27:48 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:28:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:29:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:29:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:29:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:29:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:30:18 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:31:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:42 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:31:45 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:32:10 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:32:27 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:32:28 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-10-07 13:32:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:35:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:36:37 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:36:43 --> Could not find the language line "products"
ERROR - 2023-10-07 13:37:20 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 13:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('39')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 13:37:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 13:40:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:43:45 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:43:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:44:08 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:44:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:44:24 --> Could not find the language line "Other"
ERROR - 2023-10-07 13:44:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:45:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:45:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:45:26 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:45:47 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 13:45:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 13:45:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:46:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:46:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:46:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:47:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:47:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:47:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:47:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:47:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:48:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:48:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:48:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:48:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:49:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 13:49:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:49:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 13:52:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:01:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:01:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:01:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:01:38 --> Could not find the language line "assets"
ERROR - 2023-10-07 14:01:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:02:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:02:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:02:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:02:52 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:03:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:03:29 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:03:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:04:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:05:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:05:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:05:20 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:05:37 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:05:38 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:05:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:06:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:06:04 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-10-07 14:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` = 'Clothing'
AND `items`.`price` <= '29'
AND `transaction_item_sizes`.`size` IN('S')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-10-07 14:06:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 564
ERROR - 2023-10-07 14:06:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:06:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:07:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:07:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:08:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:08:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:08:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:08:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:08:55 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:08:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:09:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:09:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:09:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:09:30 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:09:31 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:09:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:09:36 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:26 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:28 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:30 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:10:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:10:48 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:11:45 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:12:08 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:13:22 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:13:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:13:37 --> Could not find the language line "products"
ERROR - 2023-10-07 14:13:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:14:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:16:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 14:19:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:19:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:20:34 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 14:21:42 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 14:21:56 --> Could not find the language line "products"
ERROR - 2023-10-07 14:22:45 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 14:22:56 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:24:44 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:24:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:24:50 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 14:24:55 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 14:28:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:30:16 --> Could not find the language line "products"
ERROR - 2023-10-07 14:33:45 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:43:33 --> Could not find the language line "products"
ERROR - 2023-10-07 14:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:48:13 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:49:21 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:53:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:53:48 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:55:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 14:56:43 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:57:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 14:57:19 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 14:59:58 --> Could not find the language line "products"
ERROR - 2023-10-07 15:00:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:01:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 15:01:26 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:05:19 --> 404 Page Not Found: Sites/all
ERROR - 2023-10-07 15:05:27 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:06:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:06:44 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:06:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:07:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:08:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:08:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:08:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:08:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:08:52 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:09:01 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:09:10 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:09:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:09:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:10:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:10:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:12:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:12:22 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-10-07 15:12:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:12:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:16:37 --> Could not find the language line "products"
ERROR - 2023-10-07 15:17:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:18:46 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:19:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:20:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:24:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:28:38 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:33:16 --> Could not find the language line "products"
ERROR - 2023-10-07 15:40:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:40:56 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 15:40:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 15:41:00 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:41:35 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 15:42:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:42:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:46:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:46:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:47:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 15:49:55 --> Could not find the language line "products"
ERROR - 2023-10-07 15:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 15:58:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:00:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:00:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:00:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:00:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:00:57 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:05:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 16:06:34 --> Could not find the language line "products"
ERROR - 2023-10-07 16:06:43 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:19:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:23:13 --> Could not find the language line "products"
ERROR - 2023-10-07 16:31:17 --> Could not find the language line "Socks"
ERROR - 2023-10-07 16:34:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 16:34:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:34:56 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 16:35:02 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 16:38:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:39:52 --> Could not find the language line "products"
ERROR - 2023-10-07 16:55:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:55:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 16:56:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:56:31 --> Could not find the language line "products"
ERROR - 2023-10-07 16:56:58 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:57:37 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:58:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 16:59:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:09:03 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:09:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 17:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:10:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 17:10:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:10:40 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:10:46 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 17:10:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 17:10:47 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:11:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:11:18 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 17:11:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-10-07 17:11:29 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:11:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:11:46 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 17:11:49 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:11:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:11:58 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:12:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:13:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:13:10 --> Could not find the language line "products"
ERROR - 2023-10-07 17:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:14:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:18:03 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:18:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:18:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:19:36 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:21:29 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:22:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:23:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:28:10 --> Could not find the language line "products"
ERROR - 2023-10-07 17:28:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:30:29 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 17:30:29 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:33:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:34:25 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:34:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:35:39 --> Could not find the language line "products"
ERROR - 2023-10-07 17:37:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:39:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:39:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:41:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:45:16 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:46:55 --> Could not find the language line "products"
ERROR - 2023-10-07 17:50:48 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:51:27 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:51:47 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 17:54:06 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:56:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:58:10 --> Could not find the language line "products"
ERROR - 2023-10-07 17:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:59:00 --> Could not find the language line "Home"
ERROR - 2023-10-07 17:59:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:59:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 17:59:54 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:00:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:00:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:00:47 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:00:52 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 18:01:22 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 18:01:54 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:02:24 --> Could not find the language line "Perfume"
ERROR - 2023-10-07 18:02:35 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:02:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:03:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:03:12 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 18:03:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:06:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:09:25 --> Could not find the language line "products"
ERROR - 2023-10-07 18:11:46 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:13:44 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:20:40 --> Could not find the language line "products"
ERROR - 2023-10-07 18:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-10-07 18:29:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:31:03 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:31:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:31:55 --> Could not find the language line "products"
ERROR - 2023-10-07 18:31:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:33:14 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:33:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:34:41 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:34:51 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:34:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:35:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:35:41 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:35:57 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:04 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:09 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:11 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:36:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:36:19 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:36:21 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:36:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:37:19 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:39:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:39:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:39:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:39:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:40:04 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-10-07 18:40:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:41:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:41:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:41:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:41:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:43:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:43:09 --> Could not find the language line "products"
ERROR - 2023-10-07 18:44:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:44:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:44:30 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:45:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:46:39 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:47:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:47:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:48:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:49:10 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:49:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:49:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:49:56 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:50:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:50:13 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:50:17 --> Could not find the language line "Socks"
ERROR - 2023-10-07 18:50:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:50:34 --> Could not find the language line "Bracelets"
ERROR - 2023-10-07 18:50:40 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:50:45 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:50:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:51:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:52:13 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:53:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:53:33 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:53:45 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:53:58 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:54:17 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:54:25 --> Could not find the language line "products"
ERROR - 2023-10-07 18:54:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 18:54:43 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:54:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:54:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 18:54:57 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:55:51 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:56:50 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:57:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:58:02 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:58:44 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:59:06 --> Could not find the language line "Home"
ERROR - 2023-10-07 18:59:53 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:00:05 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:00:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:00:38 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 19:00:56 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 19:01:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 19:01:04 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-10-07 19:01:25 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:05:40 --> Could not find the language line "products"
ERROR - 2023-10-07 19:07:23 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:12:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:12:32 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:12:40 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:12:56 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:19:40 --> Could not find the language line "products"
ERROR - 2023-10-07 19:26:26 --> Could not find the language line "products"
ERROR - 2023-10-07 19:28:04 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:32:02 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:33:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:33:21 --> Could not find the language line "products"
ERROR - 2023-10-07 19:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:34:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:34:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:36:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:37:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:37:22 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:37:39 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:39:16 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:40:16 --> Could not find the language line "products"
ERROR - 2023-10-07 19:42:21 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:42:51 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:44:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 19:44:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:47:12 --> Could not find the language line "products"
ERROR - 2023-10-07 19:50:14 --> Could not find the language line "Home"
ERROR - 2023-10-07 19:54:07 --> Could not find the language line "products"
ERROR - 2023-10-07 19:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:01:03 --> Could not find the language line "products"
ERROR - 2023-10-07 20:07:58 --> Could not find the language line "products"
ERROR - 2023-10-07 20:08:01 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:09:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:10:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:10:37 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:12:09 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:13:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:14:53 --> Could not find the language line "products"
ERROR - 2023-10-07 20:21:49 --> Could not find the language line "products"
ERROR - 2023-10-07 20:28:44 --> Could not find the language line "products"
ERROR - 2023-10-07 20:35:40 --> Could not find the language line "products"
ERROR - 2023-10-07 20:39:02 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:39:53 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 20:40:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:40:21 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 20:40:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:41:10 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:41:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:42:35 --> Could not find the language line "products"
ERROR - 2023-10-07 20:42:50 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 20:44:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 20:44:11 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:49:30 --> Could not find the language line "products"
ERROR - 2023-10-07 20:49:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:49:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 20:56:26 --> Could not find the language line "products"
ERROR - 2023-10-07 20:57:21 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:03:21 --> Could not find the language line "products"
ERROR - 2023-10-07 21:06:40 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:06:53 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:07:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 21:08:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 21:08:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 21:08:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:10:16 --> Could not find the language line "products"
ERROR - 2023-10-07 21:17:12 --> Could not find the language line "products"
ERROR - 2023-10-07 21:18:28 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:18:44 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:18:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 21:18:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 21:23:13 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:24:07 --> Could not find the language line "products"
ERROR - 2023-10-07 21:25:17 --> Could not find the language line "Hair%20%25and%20Skin%20Products"
ERROR - 2023-10-07 21:25:42 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:28:02 --> Could not find the language line "products"
ERROR - 2023-10-07 21:31:57 --> Could not find the language line "products"
ERROR - 2023-10-07 21:35:53 --> Could not find the language line "products"
ERROR - 2023-10-07 21:39:48 --> Could not find the language line "products"
ERROR - 2023-10-07 21:41:22 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:41:22 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:43:43 --> Could not find the language line "products"
ERROR - 2023-10-07 21:44:31 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:44:40 --> Could not find the language line "Home"
ERROR - 2023-10-07 21:47:38 --> Could not find the language line "products"
ERROR - 2023-10-07 21:51:33 --> Could not find the language line "products"
ERROR - 2023-10-07 21:55:28 --> Could not find the language line "products"
ERROR - 2023-10-07 21:59:24 --> Could not find the language line "products"
ERROR - 2023-10-07 22:03:19 --> Could not find the language line "products"
ERROR - 2023-10-07 22:07:14 --> Could not find the language line "products"
ERROR - 2023-10-07 22:12:25 --> Could not find the language line "Home"
ERROR - 2023-10-07 22:12:34 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 22:12:49 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 22:13:07 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 22:13:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 22:13:18 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 22:27:08 --> Could not find the language line "Home"
ERROR - 2023-10-07 22:28:48 --> Could not find the language line "Home"
ERROR - 2023-10-07 22:29:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 22:32:54 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 22:41:59 --> Could not find the language line "Home"
ERROR - 2023-10-07 22:47:23 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:04:41 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:17:55 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:19:56 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:26:44 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2023-10-07 23:28:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 23:31:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:31:39 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:31:57 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 23:31:57 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-10-07 23:32:02 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:32:06 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:32:15 --> Could not find the language line "Clothing"
ERROR - 2023-10-07 23:32:17 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:35:19 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-10-07 23:35:20 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:38:07 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:38:49 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 23:39:54 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 23:40:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-10-07 23:40:34 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:41:33 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:51:53 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:52:03 --> Could not find the language line "Perfume"
ERROR - 2023-10-07 23:52:12 --> Could not find the language line "Home"
ERROR - 2023-10-07 23:59:06 --> Could not find the language line "Home"
