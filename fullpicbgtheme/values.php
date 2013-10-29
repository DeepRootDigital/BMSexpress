<?php /* Template Name: Values Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="values-content">
		<h2>Our Values</h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>