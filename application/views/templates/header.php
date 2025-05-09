<!doctype html>
<html lang="en">

<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-G8WRT5EXP5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'G-G8WRT5EXP5');
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<base href="<?php echo base_url() ?>">
	<link rel="shortcut icon" href="assets/img/sam_logo2.png?v=4.1">
	<meta content="Online Shoes Store" name="description">
	<!--<meta name="facebook-domain-verification" content="xwrua9i6l1my5jnisvsse8x5bk6qmj" />-->
	<meta name="facebook-domain-verification" content="d0lqejbppuvwu3oyv7dl9wjcho51z2" />

	<title>Sam Outfits</title>
	<!-- <title><?php //print(isset($_page_title) ? $_page_title : ' Default Page Title Here') 
				?></title> -->
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> -->
	<link href="assets/css/font_roboto.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<!-- <link href="assets/css/font_awesome5.10.0.css" rel="stylesheet">   -->
	<!-- Libraries Stylesheet -->
	<link href="assets/lib/animate/animate.min.css" rel="stylesheet">
	<link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<!-- Customized Bootstrap Stylesheet -->
	<link href="assets/css/style.css?version=4.1" rel="stylesheet">
	<?php
	if (isset($_moreCss)) :
		foreach ($_moreCss as $_css) {
			echo PHP_EOL, '<link rel="stylesheet" href="assets/css/', $_css, '.css?version=3.7">';
		}
	endif
	?>

	<!-- Google tag (gtag.js) -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-4LZBW6DQQ3"></script> 
	<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-4LZBW6DQQ3'); </script> -->
	<!-- Meta Pixel Code -->
	<!-- <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '101417382894987');
    fbq('track', 'PageView');
    </script>
    <noscript>< img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=101417382894987&ev=PageView&noscript=1"
    /></noscript> -->
	<!-- End Meta Pixel Code -->

	<?php if (isset($_pixelMetaData)) { ?>
		<meta property="og:title" content="<?php echo $_pixelMetaData['description'].". ".$_pixelMetaData['title']  ?>">
		<meta property="og:description" content="<?php echo $_pixelMetaData['note'] ?>">
		<meta property="og:url" content="<?php echo $_pixelMetaData['url'] ?>">
		<meta property="og:image" content="<?php echo $_pixelMetaData['image'] ?>">
		<meta property="og:type" content="website">
		<meta property="product:retailer_item_id" content="<?php echo $_pixelMetaData['item_id'] ?>">
		<!--<meta property="og:product:price:amount" content="<?php echo $_pixelMetaData['price'] ?>">-->
		<meta property="product:price:currency" content="USD">
		<meta property="product:color" content="<?php echo $_pixelMetaData['color'] ?>" />
		<meta property="product:availability" content="<?php echo $_pixelMetaData['availability'] ?>">
	<?php } else { ?>
	  <meta property="og:title" content="Online Shopping">
    <meta property="og:description" content="موقع تسوق الكتروني لبناني متخصص بالالبسة والأحذية وتوابع الموضة من الألف الى الياء تم إنشائه
ليصبح الأوفر في لبنان">
    <meta property="og:image" content="<?php echo base_url(); ?>assets/img/sam_what_image.jpg?v=4.1">
    <meta property="og:url" content="https://samoutfits.com">
    <meta property="og:type" content="website">
	<?php } ?>
	<!-- For Twitter (Optional) -->
    <meta name="twitter:card" content="<?php echo base_url(); ?>assets/img/sam_what_image.jpg?v=4.1">
    <meta name="twitter:title" content="Online Shopping">
    <meta name="twitter:description" content="موقع تسوق الكتروني لبناني متخصص بالالبسة والأحذية وتوابع الموضة من الألف الى الياء تم إنشائه
ليصبح الأوفر في لبنان">
    <meta name="twitter:image" content="<?php echo base_url(); ?>assets/img/sam_what_image.jpg?v=4.1">
    
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-KV38C8MQ');
	</script>
	<!-- End Google Tag Manager -->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2361781068175260" crossorigin="anonymous"></script>
	<script>
		dataLayer.push({
			'event': 'Whatsapp'
		});
	</script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV38C8MQ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php $this->load->view('templates/nav') ?>
	<!-- <div class="container-fluid"> -->