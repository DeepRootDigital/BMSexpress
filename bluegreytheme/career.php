<?php /* Template Name: Career Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="featurecontainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="left-career-content">
			<h2>careers</h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
		<div class="right-career-content">
			<?php 
				$args=array(
				'post_type' => 'jobopenings'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<div class="career-opportunities">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>