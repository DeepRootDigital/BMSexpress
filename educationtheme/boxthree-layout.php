<?php /* Template Name: Box and Three Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="panel boxthreepage-title-area">
		<h1>Title of this Page</h1>
	</div>
	<div class="panel boxthreepage-content-area">
		<h2>Sub-Title of This Page</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area1') ) : else : endif; ?>
	</div>
	<div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area2') ) : else : endif; ?>
	</div>
	<div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area3') ) : else : endif; ?>
	</div>
</div>
</div>
<?php get_footer(); ?>