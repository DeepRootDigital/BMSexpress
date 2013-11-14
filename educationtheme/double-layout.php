<?php /* Template Name: Double Right Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="triple-left">
		<div class="panel triplepage-title-area">
			<h1>Title of this Page</h1>
		</div>
		<div class="panel triplepage-content-area">
			<h2>Sub-Title of This Page</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<div class="triple-right">
		<div class="panel triplepage-widget-area">
                        <?php if ( dynamic_sidebar('double_sidearea1') ) : else : endif; ?>
		</div>
		<div class="panel triplepage-widget-area">
                        <?php if ( dynamic_sidebar('double_sidearea2') ) : else : endif; ?>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>