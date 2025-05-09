<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="<?php echo base_url() ?>">
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<title><?php print(isset($_page_title) ? $_page_title : ' Default Page Title Here') ?></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-flatly3.min.css">
	<link rel="stylesheet" href="assets/css/styles.css?version=3.9">
	<?php
	if (isset($_moreCss)) :
		foreach ($_moreCss as $_css) {
			echo PHP_EOL, '<link rel="stylesheet" href="assets/', $_css, '.css?version=3.9">';
		}
	endif
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body><?php $this->load->view('templates/eco_nav') ?>
	<div class="container-fluid" style="margin: 2%;">