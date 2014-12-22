<head>
	<!-- SEO -->
	<meta charset="utf-8" />
	<meta name="author" content="Thiago Braga" />
	<meta name="reply-to" content="thibraga06@gmail.com" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="chrome=1" />

	<!-- SITE DESCRIPTION -->
	<title><?php echo $title ?> :: <?php echo $page ?></title>
	<link href="<?php echo base_url('assets/img/favicon.ico') ?>" rel="shortcut icon" />
	<meta name="description" content="<?php echo $description ?>" />
	<meta name="keywords" content="<?php echo $keywords ?>" />

	<!-- FACEBOOK -->
	<meta property="og:title" content="<?php echo $title ?> :: <?php echo $page ?>" />
	<meta property="og:site_name" content="<?php echo $title ?> :: <?php echo $page ?>" />
	<meta property="og:description" content="<?php echo $description ?>" />
	<meta property="og:url" content="<?php echo base_url() ?>" />
	<meta property="og:image" content="<?php echo base_url('assets/img/facebook.jpg') ?>" />
	<meta property="og:type" content="website" />
	<meta property="fb:admins" content="100001599541810" />

	<!-- HTML5 SUPPORT FOR IE6-8 -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/js/plugins/html5shiv/html5shiv.js') ?>"></script>
	<![endif]-->

	<!-- CSS -->
	<?php if (ENVIRONMENT == 'production') : ?>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap.min.css" rel="stylesheet" />
	<?php else : ?>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" />
	<?php endif; ?>

	<link href="<?php echo base_url('assets/css/plugins/mediaelementplayer.css') ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet" />

	<?php if (!empty($css)) : ?>
		<?php foreach ($css as $file) : ?>
			<link href="<?php echo base_url("assets/css/$file.css") ?>" rel="stylesheet" />
		<?php endforeach; ?>
	<?php endif; ?>
</head>