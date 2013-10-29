<?php /* Template Name: Testimonials Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Testimonials</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="testimonials-content-area">
		<div class="testimonials-area">
			<?php 
			$args=array(
				'post_type' => 'testimonials'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="testimonials-single">
				<img src="<?php echo get_template_directory_uri(); ?>/images/quotes.png" />
				<?php the_content()?>
				<h4>&mdash; <?php the_title(); ?></h4>
			</div>
		<?php endwhile; ?>
		</div>
		<?php get_template_part('right','sidebar'); ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>