<?php /* Template Name: About Us Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="featurecontainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="left-aboutus-content">
			<h2>about us</h2>
			<?php the_content(); ?>
		</div>
		<div class="right-aboutus-content">
			<?php echo get_the_post_thumbnail(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>