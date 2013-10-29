<?php /* Template Name: Press Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<?php $wp_query->query('showposts=5&order=DESC' . '&paged=' . $paged);
	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<a href="<?php the_permalink(); ?>">
		<div class="press-content">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</div>
	</a>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>