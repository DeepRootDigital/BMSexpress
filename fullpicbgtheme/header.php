<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title>Full Image Theme</title>
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/b7bad643-0e26-4472-8d36-6cc0e2505e04.css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less" />
	<script src="<?php echo get_template_directory_uri(); ?>/less-1.4.1.min.js" type="text/javascript"></script>
</head>
<body class="<?php wp_title(''); ?>">
	<div class="topmenubar">
		<div class="topmenubar-left">
			<a href="http://express.businessonmarketst.com/wp/fullbg/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
			</a>
		</div>
		<div class="topmenubar-right">
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
		</div>
	</div>