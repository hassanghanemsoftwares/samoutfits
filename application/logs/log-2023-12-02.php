<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-12-02 00:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:00:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:11:41 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:43 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:13:49 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:15:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:15:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 00:16:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 00:25:36 --> 404 Page Not Found: Chosenphp/index
ERROR - 2023-12-02 00:27:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 00:30:24 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:32:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 00:42:02 --> Could not find the language line "Home"
ERROR - 2023-12-02 00:49:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 00:49:10 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 00:55:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 00:57:50 --> Could not find the language line "products"
ERROR - 2023-12-02 00:59:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 01:00:16 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:03:25 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 01:06:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 01:07:45 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:07:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 01:08:17 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 01:11:00 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:11:01 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:12:36 --> Could not find the language line "Other"
ERROR - 2023-12-02 01:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 01:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 01:21:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:30:18 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:38:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:46:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 01:46:44 --> Could not find the language line "Home"
ERROR - 2023-12-02 01:47:17 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-02 01:47:47 --> Could not find the language line "Other"
ERROR - 2023-12-02 01:47:48 --> Could not find the language line "Other"
ERROR - 2023-12-02 01:56:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 01:56:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 01:58:15 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 02:00:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 02:05:33 --> Could not find the language line "Home"
ERROR - 2023-12-02 02:08:59 --> Could not find the language line "Perfume"
ERROR - 2023-12-02 02:16:21 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 02:21:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 02:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-02 02:41:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 02:45:50 --> Could not find the language line "products"
ERROR - 2023-12-02 02:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 02:50:05 --> Could not find the language line "Home"
ERROR - 2023-12-02 02:58:01 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 03:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 03:08:20 --> Could not find the language line "products"
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 03:19:26 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:19:27 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 03:24:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 03:26:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 03:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 03:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 03:44:41 --> Could not find the language line "Home"
ERROR - 2023-12-02 03:45:40 --> Could not find the language line "Home"
ERROR - 2023-12-02 03:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 03:54:30 --> Could not find the language line "Home"
ERROR - 2023-12-02 04:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 04:01:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 04:26:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 04:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 04:32:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 04:39:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 04:49:46 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-02 04:56:39 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 04:58:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:00:50 --> Could not find the language line "products"
ERROR - 2023-12-02 05:01:50 --> Could not find the language line "Perfume"
ERROR - 2023-12-02 05:01:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:02:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:02:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 05:04:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:12:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:17:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:18:07 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:19:01 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:19:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:19:28 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 05:19:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 05:19:36 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:20:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:20:11 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:20:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:20:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:21:14 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:21:24 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:21:36 --> Could not find the language line "Perfume"
ERROR - 2023-12-02 05:21:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:22:00 --> Could not find the language line "Other"
ERROR - 2023-12-02 05:22:18 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:22:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:22:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:23:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:25:24 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:27:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:28:12 --> Could not find the language line "Other"
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:28:18 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:31:03 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:31:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:31:49 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:32:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:32:22 --> Could not find the language line "Socks"
ERROR - 2023-12-02 05:32:26 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:32:33 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:33:21 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 05:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:34:54 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 05:48:45 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:49:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:50:03 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:50:52 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:56:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 05:57:55 --> Could not find the language line "Home"
ERROR - 2023-12-02 05:58:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 05:58:43 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 05:58:43 --> 404 Page Not Found: Item/811808
ERROR - 2023-12-02 06:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:01:18 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:02:26 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:02:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 06:07:11 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 06:25:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 06:30:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:32:12 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 06:32:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 06:32:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 06:32:23 --> 404 Page Not Found: Well-known/traffic-advice
ERROR - 2023-12-02 06:32:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 06:34:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 06:34:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 06:34:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 06:34:51 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 06:34:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 06:41:11 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:43:41 --> Could not find the language line "products"
ERROR - 2023-12-02 06:46:49 --> Could not find the language line "Home"
ERROR - 2023-12-02 06:46:58 --> Could not find the language line "Socks"
ERROR - 2023-12-02 06:56:33 --> Could not find the language line "products"
ERROR - 2023-12-02 07:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:01:20 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:01:54 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:05:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 07:08:59 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-02 07:09:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 07:09:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 07:13:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 07:13:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:13:10 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 07:13:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:13:43 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 07:13:44 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 07:16:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:18:49 --> Could not find the language line "Socks"
ERROR - 2023-12-02 07:19:02 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:19:44 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:19:45 --> Could not find the language line "Socks"
ERROR - 2023-12-02 07:19:57 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 07:20:00 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 07:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:22:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:26:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:27:32 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:35:44 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:36:20 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:36:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:36:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 07:37:04 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:37:08 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:37:29 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:38:03 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:38:05 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 07:38:07 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:38:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:38:18 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:38:40 --> Could not find the language line "Home"
ERROR - 2023-12-02 07:38:59 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 07:39:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 07:39:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 07:42:47 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 07:42:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 14 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`sub_category` IN('Safety Footwear')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('All-43')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 07:42:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 07:43:18 --> Could not find the language line "products"
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:49:52 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 07:51:29 --> Could not find the language line "products"
ERROR - 2023-12-02 07:59:40 --> Could not find the language line "products"
ERROR - 2023-12-02 08:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:00:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:07:02 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:07:03 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:09:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:09:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:10:15 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 08:10:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:11:09 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 08:11:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:11:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:11:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 08:11:54 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:12:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:12:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:12:14 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 08:12:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:12:26 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:12:28 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:12:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:12:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:12:45 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 08:13:46 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 08:18:48 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 08:18:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('46')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 08:18:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 08:19:11 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:19:11 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:23:28 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:24:44 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:24:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:27:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:28:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:28:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:28:59 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:29:23 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:29:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:29:52 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:30:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:30:15 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:32:23 --> Could not find the language line "products"
ERROR - 2023-12-02 08:38:16 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:39:23 --> Could not find the language line "Home"
ERROR - 2023-12-02 08:49:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 08:51:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 08:54:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:55:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 08:55:17 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-02 08:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:55:40 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 08:55:41 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:00:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:03:45 --> Could not find the language line "products"
ERROR - 2023-12-02 09:09:38 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 09:09:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '19'
AND `transaction_item_sizes`.`size` IN('42')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 09:09:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 09:12:33 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 09:12:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 09:15:24 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:17:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:18:01 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:18:36 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:19:12 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-02 09:20:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:21:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:21:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:22:02 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:22:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:22:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:38:46 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:39:48 --> Could not find the language line "Home"
ERROR - 2023-12-02 09:46:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:48:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:48:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:50:49 --> Could not find the language line "Other"
ERROR - 2023-12-02 09:52:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:52:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 09:52:37 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:52:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 09:55:29 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:00:00 --> Could not find the language line "products"
ERROR - 2023-12-02 10:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:00:39 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:03:00 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:05:38 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:12:45 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 10:18:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:22:30 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:22:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 10:23:24 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:23:25 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 10:25:21 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-02 10:29:36 --> Could not find the language line "products"
ERROR - 2023-12-02 10:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:35:52 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:37:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:37:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:37:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:37:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 10:39:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 10:42:15 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:42:55 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:43:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 10:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 10:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 10:49:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 10:52:30 --> Could not find the language line "products"
ERROR - 2023-12-02 11:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:03:22 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:04:57 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:05:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:06:02 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:06:26 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:06:30 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:07:28 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:07:30 --> Could not find the language line "products"
ERROR - 2023-12-02 11:07:53 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 11:07:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 11:07:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 11:08:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:08:17 --> 404 Page Not Found: Apple-touch-icon-120x120-precomposedpng/index
ERROR - 2023-12-02 11:08:17 --> 404 Page Not Found: Apple-touch-icon-120x120png/index
ERROR - 2023-12-02 11:08:18 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2023-12-02 11:08:18 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-02 11:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:08:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:08:58 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 11:09:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:09:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 11:09:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 11:11:47 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 11:17:27 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 11:22:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 11:30:00 --> Could not find the language line "products"
ERROR - 2023-12-02 11:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 11:37:04 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:37:05 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:37:30 --> Could not find the language line "products"
ERROR - 2023-12-02 11:45:58 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:46:38 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 11:48:23 --> Could not find the language line "Home"
ERROR - 2023-12-02 11:50:24 --> Could not find the language line "Bracelets"
ERROR - 2023-12-02 12:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 12:03:45 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 12:10:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 12:11:27 --> 404 Page Not Found: Accounting/assets
ERROR - 2023-12-02 12:14:08 --> Could not find the language line "Bracelets"
ERROR - 2023-12-02 12:14:11 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 12:15:03 --> Could not find the language line "products"
ERROR - 2023-12-02 12:24:31 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 12:25:54 --> Could not find the language line "Home"
ERROR - 2023-12-02 12:26:15 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 12:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 12:40:54 --> Could not find the language line "Home"
ERROR - 2023-12-02 12:48:45 --> Could not find the language line "products"
ERROR - 2023-12-02 13:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:05:14 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 13:05:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 13:10:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:10:16 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:10:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:11:41 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:12:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 13:12:17 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:15:54 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:24:01 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:24:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:25:04 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 13:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:31:43 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 13:33:45 --> Could not find the language line "products"
ERROR - 2023-12-02 13:34:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 13:38:03 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-02 13:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 13:45:02 --> Could not find the language line "Home"
ERROR - 2023-12-02 13:54:34 --> Could not find the language line "products"
ERROR - 2023-12-02 13:57:18 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:00:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:02:00 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:03:00 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:03:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 14:03:51 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:14:08 --> Could not find the language line "products"
ERROR - 2023-12-02 14:16:57 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:21:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 14:25:40 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:27:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 14:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:31:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 14:31:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 14:33:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 14:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 14:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 14:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 14:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 14:36:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 12 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '9'
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 14:36:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 14:38:49 --> Could not find the language line "Home"
ERROR - 2023-12-02 14:39:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 14:46:01 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 15:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:00:49 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:02:31 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 15:02:40 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:06:08 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:06:09 --> 404 Page Not Found: Adstxt/index
ERROR - 2023-12-02 15:06:10 --> Could not find the language line "products"
ERROR - 2023-12-02 15:15:55 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:21:10 --> Could not find the language line "products"
ERROR - 2023-12-02 15:23:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 15:25:30 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 58
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 59
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 60
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 61
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 77
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 82
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 85
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/controllers/Products.php 91
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 52
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 53
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 59
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 61
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 65
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 71
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 77
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 117
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 136
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:21 --> Severity: Notice --> Trying to access array offset on value of type null /home/samfit/public_html/application/views/products/product_info.php 171
ERROR - 2023-12-02 15:26:59 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:27:15 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:27:20 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:27:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 15:28:01 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:32:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 15:32:26 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 15:33:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 15:34:27 --> Could not find the language line "Sunglasses"
ERROR - 2023-12-02 15:35:00 --> Could not find the language line "Home"
ERROR - 2023-12-02 15:36:48 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 16:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:00:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:00:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:00:53 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 16:05:44 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:06:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 16:06:17 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 16:06:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:06:39 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:08:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 16:10:43 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:14:45 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:16:32 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:23:20 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-12-02 16:24:40 --> Could not find the language line "Bags%20%25and%20Wallets"
ERROR - 2023-12-02 16:25:35 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:26:06 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 16:26:17 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:27:41 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:30:11 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:30:25 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:32:08 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:32:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 16:32:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:32:49 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:33:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:34:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 16:35:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:35:12 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 16:35:14 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:35:18 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:46:37 --> Could not find the language line "Home"
ERROR - 2023-12-02 16:55:09 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-02 16:58:09 --> Could not find the language line "products"
ERROR - 2023-12-02 17:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 17:06:42 --> Could not find the language line "Home"
ERROR - 2023-12-02 17:11:42 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 17:12:21 --> Could not find the language line "products"
ERROR - 2023-12-02 17:14:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 17:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 17:38:03 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 17:38:56 --> 404 Page Not Found: Well-known/assetlinks.json
ERROR - 2023-12-02 17:47:22 --> Could not find the language line "Home"
ERROR - 2023-12-02 17:49:20 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 17:54:47 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:00:36 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 18:02:17 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:12:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:13:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 18:16:36 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 18:18:50 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:22:07 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 18:22:08 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 18:22:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 18:22:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 18:22:26 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 18:22:52 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 18:22:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 18:22:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 18:23:01 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:24:40 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 18:25:24 --> 404 Page Not Found: Csvphp/index
ERROR - 2023-12-02 18:26:03 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 18:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 18:29:28 --> Could not find the language line "products"
ERROR - 2023-12-02 18:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:32:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:32:19 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2023-12-02 18:42:29 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:49:27 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 18:49:34 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 18:55:04 --> Could not find the language line "Home"
ERROR - 2023-12-02 18:57:48 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:00:11 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:00:53 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:02:45 --> Could not find the language line "Socks"
ERROR - 2023-12-02 19:03:22 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 19:04:00 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:04:40 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 19:08:02 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 19:10:57 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:12:42 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:16:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 19:24:08 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 19:32:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 19:57:00 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:00:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:00:43 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:04:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 20:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 20:10:58 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:11:26 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:16:01 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:19:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:19:34 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 20:20:07 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:29:02 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 20:30:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 20:44:42 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 20:59:34 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:00:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:01:07 --> Severity: Warning --> A non-numeric value encountered /home/samfit/public_html/application/controllers/Products.php 133
ERROR - 2023-12-02 21:01:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-28, 28' at line 13 - Invalid query: SELECT `items`.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result
FROM `items`
INNER JOIN `transaction_items` ON `transaction_items`.`item_id` = `items`.`id`
INNER JOIN `transaction_item_sizes` ON `transaction_items`.`id` = `transaction_item_sizes`.`transaction_item_id`
INNER JOIN `warehouses` ON `transaction_items`.`warehouse_id` = `warehouses`.`id`
WHERE `warehouses`.`warehouse` = 'Primary Warehouse'
AND `items`.`publish` = 1
AND `items`.`category` IN('Men Shoes', 'Women Shoes', 'Unisex Shoes', 'Shoes')
AND `items`.`price` <= '39'
AND `transaction_item_sizes`.`size` IN('45')
GROUP BY `items`.`id`
ORDER BY `result` DESC, `items`.`id` DESC
 LIMIT -28, 28
ERROR - 2023-12-02 21:01:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/samfit/public_html/system/core/Exceptions.php:271) /home/samfit/public_html/system/core/Common.php 570
ERROR - 2023-12-02 21:01:17 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:01:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:01:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:02:43 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:02:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:02:55 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:02:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:11 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:24 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:45 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 21:03:47 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:03:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:04:05 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:04:07 --> Severity: Notice --> Undefined variable: sub_categories /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:04:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/samfit/public_html/application/views/products/stock_clearance.php 47
ERROR - 2023-12-02 21:04:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:04:50 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:05:15 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:05:52 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:05:56 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 21:06:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:07:05 --> Could not find the language line "Hair%20%and%20Skin%20Products"
ERROR - 2023-12-02 21:07:13 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:07:20 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:07:33 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:07:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:07:57 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:08:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:09:23 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:09:51 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:09:58 --> 404 Page Not Found: Item/424238
ERROR - 2023-12-02 21:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:13:12 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:16:33 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 21:30:12 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:39:22 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:39:27 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:39:47 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:39:57 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:43:51 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:45:44 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:46:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:48:19 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:49:05 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:49:38 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:49:53 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 21:50:05 --> Could not find the language line "Home"
ERROR - 2023-12-02 21:57:45 --> Could not find the language line "products"
ERROR - 2023-12-02 22:00:13 --> Could not find the language line "Home"
ERROR - 2023-12-02 22:06:46 --> 404 Page Not Found: Products/products
ERROR - 2023-12-02 22:10:25 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 22:26:46 --> Could not find the language line "Home"
ERROR - 2023-12-02 22:26:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:27:07 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 22:27:19 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:27:35 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:27:49 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 22:27:53 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:27:58 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:28:05 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:28:20 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:28:31 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:28:39 --> Could not find the language line "Home"
ERROR - 2023-12-02 22:29:47 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 22:30:09 --> Could not find the language line "Home"
ERROR - 2023-12-02 22:30:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 22:42:45 --> Could not find the language line "Clothing"
ERROR - 2023-12-02 22:56:27 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 23:00:10 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:02:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:02:42 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:03:00 --> Could not find the language line "Socks"
ERROR - 2023-12-02 23:03:07 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:03:15 --> 404 Page Not Found: Assets/css
ERROR - 2023-12-02 23:03:19 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:05:58 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:30:10 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:36:28 --> 404 Page Not Found: Robotstxt/index
ERROR - 2023-12-02 23:36:36 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:52:20 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-18' at line 16 - Invalid query: SELECT a.*
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
ERROR - 2023-12-02 23:57:02 --> Could not find the language line "Home"
ERROR - 2023-12-02 23:57:45 --> Could not find the language line "products"
