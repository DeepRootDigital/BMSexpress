<?php get_header(); ?>
<div id="mainarea">
	<div class="featurecontainer">
		<div class="featurecontainer-strip">
			<?php 
				$args=array(
				'post_type' => 'featuredslides'
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<a href="<?php the_permalink(); ?>">
			<div class="featureitem">
				<div class="featureitem-name" onmouseover="$(this).css('background-color','<?php echo get_post_meta(get_the_ID(), 'boxcolor', true) ?>'); $(this).parent().find('.featureitem-overlay').css('opacity','1');" onmouseout="$(this).css('background-color','#77848c'); $(this).parent().find('.featureitem-overlay').css('opacity','0');">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="featureitem-image" style="background-image:url('<?php echo $feat_image; ?>');">
				</div>
				<div class="featureitem-overlay" style="background-image:url('<?php echo $feat_image; ?>');" onmouseover="$(this).parent().find('.featureitem-name').css('background-color','<?php echo get_post_meta(get_the_ID(), 'boxcolor', true) ?>'); $(this).css('opacity','1');" onmouseout="$(this).parent().find('.featureitem-name').css('background-color','#77848c'); $(this).css('opacity','0');">
					<div class="featureitem-overlay-overlay">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			</a>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="control-left">
	</div>
	<div class="control-right">
	</div>
</div>
<?php get_footer(); ?>