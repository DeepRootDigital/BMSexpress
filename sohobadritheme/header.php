<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title><?php wp_title(''); ?></title>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
        <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less" />
	<script src="<?php echo get_template_directory_uri(); ?>/less-1.4.1.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47824907-1', 'badrikermani.com');
  ga('send', 'pageview');

</script>
	<div class="main-body">
		<div class="topmenubar">
			<div class="logo-area">
				<a href="http://www.badrikermani.com">Badri<br />Kermani</a>
				<h3>Professional Cosmetologist</h3>
			</div>
			<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
		</div>