<?php /* Template Name: News Events Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>News &amp; Events</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="newsevents-content-area">
		<div class="newsevents-area">
			<h2>Latest news &amp; events</h2>
			<?php 
			$args=array(
				'post_type' => 'newsevents'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="newsevents-single">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<h4><?php echo get_the_date(); ?></h4>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>"><div class="morebutton">More</div></a>
			</div>
			<?php endwhile; ?>
		</div>
		<div class="right-sidebar">
			<h2>What People Say About Us</h2>
			<?php 
			$args=array(
				'post_type' => 'testimonials',
				'posts_per_page' => 3
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="testimonials-sidebar-single">
				<?php the_excerpt(); ?>
				<h4><?php the_title(); ?></h4>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>