<?php get_header(); ?>
<div id="mainarea">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="page-title">
		<h1><?php the_title(); ?></h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="page-content-area">
             <div class="page-content-left">
	          <?php the_content(); ?>
             </div>
<?php endwhile; endif; ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>