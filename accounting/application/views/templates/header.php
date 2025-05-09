<?php $uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// var_dump($uriSegments);exit;

?>
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
	<style>
	    .overflow-auto {
	        overflow:auto !important;
	    }
	</style>
	<?php
	if (isset($_moreCss)) :
		foreach ($_moreCss as $_css) {
			echo PHP_EOL, '<link rel="stylesheet" href="assets/', $_css, '.css?version=3.9">';
		}
	endif
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<?php
if(isset($uriSegments[1]) && isset($uriSegments[2]) && $uriSegments[2]=="login"){

}else{
	
 $this->load->view('templates/nav');
}

  ?>
	<div class="container-fluid" style="margin: 2%;">
		<?php if ($this->session->flashdata('user_loggedin')) : ?>
			<p id="msg_login" style="text-align: center;" class="alert alert-success" onclick="document.getElementById('msg_login').style.display ='none'"><strong><?php echo "*" . $this->session->flashdata('user_loggedin') . "*"; ?> </strong></p>
		<?php endif; ?>
		<?php if ($this->session->flashdata('user_loggedout')) : ?>
			<p id="msg_logout" style="text-align: center;" class="alert alert-success" onclick="document.getElementById('msg_logout').style.display ='none'"> <strong> <?php echo "*" . $this->session->flashdata('user_loggedout') . "*"; ?> </strong></p> <?php endif; ?>

		<?php if ($this->session->flashdata('no_activity_data')) : ?>
			<?php echo '<p class="alert alert-failed">' . $this->session->flashdata('no_activity_data') . '</p>'; ?>
		<?php endif; ?>