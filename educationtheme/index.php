<?php get_header(); ?>
<div id="mainarea">
	<div class="panel blogarchive-title-area">
		<h1>News &amp; Events</h1>
	</div>
	<?php 
		$temp = $wp_query; 
  		$wp_query = null; 
  		$wp_query = new WP_Query(); 
  		$wp_query->query('&paged='.$paged.'&posts_per_page=6'); 

  		while ($wp_query->have_posts()) : $wp_query->the_post();				
	?>
	<div class="panel blogarchive-singleblog-area">
		<h2><?php the_title(); ?></h2>
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
	<div class="pagination-box">
		<?php global $wp_query;
 	
			$big = 999999999; // need an unlikely integer
 
			echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages
				) 
			); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>