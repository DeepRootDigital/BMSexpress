<?php /* Template Name: Divisions Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<?php 
				$args=array(
				'post_type' => 'divisions'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
	?>
	<div class="divisions-single">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>