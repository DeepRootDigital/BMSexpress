<?php /* Template Name: Gallery Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Gallery</h1>
	</div>
	<div class="page-divider">
	</div>
        <div class="categories-area">
<ul class="featured-categories-area">
<?php
$customPostTaxonomies = get_object_taxonomies('featuredclients');

if(count($customPostTaxonomies) > 0)
{
     foreach($customPostTaxonomies as $tax)
     {
	     $args = array(
         	  'orderby' => 'name',
	          'show_count' => 0,
        	  'pad_counts' => 0,
	          'hierarchical' => 1,
        	  'taxonomy' => $tax,
        	  'title_li' => ''
        	);

	     wp_list_categories( $args );
     }
}
?>
</ul>
</div>
	<div class="gallery-area">
		<?php 
$temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('post_type=featuredclients'.'&paged='.$paged.'&posts_per_page=6'); 

  while ($wp_query->have_posts()) : $wp_query->the_post();				
		?>
			<div class="gallery-single">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>"><div class="morebutton">Read More</div></a>
			</div>
		<?php endwhile; ?>
	</div>
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
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>