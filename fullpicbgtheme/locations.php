<?php /* Template Name: Locations Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<?php 
				$args=array(
				'post_type' => 'locations'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
	?>
	<div class="locations-single">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>