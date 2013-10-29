<?php get_header(); ?>
<div id="mainarea">
	<div class="featuredclient-single-area">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="featuredclient-single">
			<h2><?php the_title(); ?></h2>
			<?php the_post_thumbnail(); ?>
			<div class="featuredclient-single-right">
				<div class="featuredclient-single-profile">
					<h4><span>Client:</span> <?php the_title(); ?></h4>
					<h4><span>Date:</span> <?php echo get_the_date(); ?></h4>
					<h4><span>Info:</span> <?php echo get_post_meta(get_the_ID(), 'infoarea', true) ?></h4>
					<?php if (get_post_meta(get_the_ID(), 'linktowebsite', true)) { ?>
					<a href="<?php echo get_post_meta(get_the_ID(), 'linktowebsite', true) ?>">Launch Project</a>
					<?php } ?>
				</div>
				<?php the_content(); ?>
			</div>
			<div class="metabar">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon.png" /><?php the_category(); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" /><p><?php echo get_the_date(); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/person.png" /><p><?php the_author(); ?></p>
					<a href="<?php the_permalink(); ?>" class="permalink">Permalink</a><img src="<?php echo get_template_directory_uri(); ?>/images/permalink.png" />
			</div>
		</div>
	<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>