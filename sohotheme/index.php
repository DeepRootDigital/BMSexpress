<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Blog</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="blogpost-content-area">
		<div class="blogpost-area">
			<?php 
$temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('&paged='.$paged.'&posts_per_page=6'); 

  while ($wp_query->have_posts()) : $wp_query->the_post();				
		?>
			<div class="blog-single">
				<h3><?php the_title(); ?></h3>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>"><div class="morebutton">Read More</div></a>
				<div class="metabar">
					<img src="<?php echo get_template_directory_uri(); ?>/images/ribbon.png" /><?php the_category(); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png" /><p><?php echo get_the_date(); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/images/person.png" /><p><?php the_author(); ?></p>
					<a href="<?php the_permalink(); ?>" class="permalink">Permalink</a><img src="<?php echo get_template_directory_uri(); ?>/images/permalink.png" />
				</div>
			</div>
			<?php endwhile; ?>
<div class="gallery-pagination">
<?php global $wp_query;
 
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
) ); ?>
</div>
		</div>
		<?php get_template_part('right','sidebar'); ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>