<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Education Theme</title>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/5cc222b9-2547-4576-862c-a7998111fc85.css"/>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.less" />
	<script src="<?php echo get_template_directory_uri(); ?>/less-1.4.1.min.js" type="text/javascript"></script>
</head>
<body>
     <div id="fb-root"></div>
     <script>(function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=343438149133992";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));</script>
	<div class="main-body <?php if ( is_front_page() ) {echo 'thisishome';} ?>" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/background.jpg');">
		<div class="sidemenubar <?php if ( is_front_page() ) {echo 'thisishome';} ?>">
			<div class="logo-area">
				<a href="http://express.businessonmarketst.com/wp/education/">Education Center</a>
				<h3>The Spot of Higher Learning</h3>
			</div>
			<div class="main-menu">
				<?php wp_nav_menu(array('theme_location' => 'Header Nav',)); ?>
			</div>
			<div class="social-section">
                                <?php if ( dynamic_sidebar('social_area') ) : else : endif; ?>
			</div>
                        <div class="whitenessbuff">
                        </div>
			<div class="whitebuffer">
			</div>
		</div>