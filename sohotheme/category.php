<?php get_header(); ?>
<?php global $thisCat;
$thisCat = get_query_var('cat');
?>
<div id="mainarea">
	<div class="page-title">
		<h1><?php single_cat_title(); ?></h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="gallery-area">
		<?php 
				$args=array(
				'post_type' => 'featuredclients',
				'cat' => $thisCat
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
			<div class="gallery-single">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>"><div class="morebutton">Read More</div></a>
			</div>
		<?php endwhile; ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>