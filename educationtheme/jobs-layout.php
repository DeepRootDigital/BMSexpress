<?php /* Template Name: Jobs Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="panel jobspage-title-area">
		<h1>Title of this Page</h1>
	</div>
	<div class="panel jobspage-content-area">
		<h2>Sub-Title of This Page</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
        <div class="panel jobspage-listings-title">
             <h3>Job&nbsp;Listings</h3>
        </div>
	<?php 
		$temp = $wp_query; 
  		$wp_query = null; 
  		$wp_query = new WP_Query(); 
  		$wp_query->query('post_type=Jobs'.'&paged='.$paged.'&posts_per_page=3'); 

  		while ($wp_query->have_posts()) : $wp_query->the_post();				
		?>
	<div class="panel jobspage-listing-area">
		<h4><?php the_title(); ?></h3>
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