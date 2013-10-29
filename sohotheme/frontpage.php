<?php /* Template Name: Frontpage Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="slider-area">
		<div class="slider-viewport">
			<ul class="slider-slides">
				<?php 
				$args=array(
				'post_type' => 'frontpageslider'
				);

				$blogPosts = new WP_Query($args);

				while ($blogPosts->have_posts()) : $blogPosts->the_post();
				?>
				<li><?php the_post_thumbnail(); ?></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<div class="page-divider">
	</div>
	<div class="featuredclients">
		<?php 
				$args=array(
				'post_type' => 'featuredclients'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
			<div class="featuredclient">
				<div class="featuredclient-image">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>
				<h4><?php the_title(); ?></h4>
				<p><?php echo get_the_date(); ?></p>
				<a href="<?php the_permalink(); ?>" class="featuredclient-link">
				+
				</a>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>