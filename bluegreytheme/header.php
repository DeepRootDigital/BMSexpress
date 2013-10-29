<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title>Blue Grey Theme</title>
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/0af99cfc-bf74-4a18-a356-02503275a672.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
</head>
<body>
	<div class="topmenubar">
		<div class="topmenubar-right">
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
		</div>
	</div>
	<div class="separationbar">
		<div class="separationbar-left">
		</div>
	</div>
	<div class="informationbar">
		<div class="logoarea">
			<a href="http://express.businessonmarketst.com/wp/bluegrey/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo_davroc.gif" />
			</a>
		</div>
		<div class="informationbar-right">
			<h1>Denbrook Interior</h1>
			<p>wonder world of bathrooms</p>
		</div>
	</div>