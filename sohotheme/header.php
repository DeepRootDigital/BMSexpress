<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Soho Theme</title>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less" />
	<script src="<?php echo get_template_directory_uri(); ?>/less-1.4.1.min.js" type="text/javascript"></script>

</head>
<body>
	<div class="main-body">
		<div class="topmenubar">
			<div class="logo-area">
				<a href="http://express.businessonmarketst.com/wp/soho/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
				<h3>Professional model agency</h3>
			</div>
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
		</div>