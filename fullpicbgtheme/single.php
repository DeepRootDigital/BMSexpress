<?php get_header(); ?>
<div id="mainarea">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blog-content-single">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>