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
				if (get_post_meta(get_the_ID(), 'link', true)) {
				?>
				<a href="<?php echo get_post_meta(get_the_ID(), 'link', true) ?>">
				<?php } ?>
				<li>
                                     <?php the_post_thumbnail(); ?>
                                     <div class="slider-textarea">
                                         <h2><?php the_title(); ?></h2>
                                         <?php the_content(); ?>
                                     </div>
                                </li>
                                <?php if (get_post_meta(get_the_ID(), 'link', true)) { ?>
                                </a>
                                <?php } ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
	<div class="page-divider">
	</div>
	<div class="featuredclients">
		<?php 
				$args=array(
                                'post_type' => 'newsevents',
                                'posts_per_page' => 6
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
			<div class="featuredclient">
				<a href="<?php the_permalink(); ?>"><div class="featuredclient-image">
					<?php the_post_thumbnail(); ?>
				</div></a>
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