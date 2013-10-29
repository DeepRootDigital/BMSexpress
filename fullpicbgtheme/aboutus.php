<?php /* Template Name: About Us Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="aboutus-content">
		<h2>about us</h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>