<?php get_header(); ?>
<div id="mainarea">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="panel blogpage-title-area">
			<h1><?php the_title(); ?></h1>
                </div>
                <div class="panel blogpage-content-area">
			<?php the_post_thumbnail(); ?>
			<?php the_content(); ?>
                </div>
                <div class="panel blogpage-comment-area">
		        <?php comments_template(); ?>
		</div>
	<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer(); ?>