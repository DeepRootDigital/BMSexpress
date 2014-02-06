<?php get_header(); ?>
<div id="mainarea">
	<div class="blogpost-content-area-single">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="blog-content-single">
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
			<div class="metabar">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon.png" /><?php the_category(); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" /><p><?php echo get_the_date(); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/person.png" /><p><?php the_author(); ?></p>
					<a href="<?php the_permalink(); ?>" class="permalink">Permalink</a><img src="<?php echo get_template_directory_uri(); ?>/images/permalink.png" />
			</div>
			<?php comments_template(); ?> 
		</div>
	<?php endwhile; endif; ?>
	<?php get_template_part('right','sidebar'); ?>	
	</div>
</div>
<?php get_footer(); ?>