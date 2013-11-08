<?php /* Template Name: About Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>About Us</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="aboutus-content-area">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>