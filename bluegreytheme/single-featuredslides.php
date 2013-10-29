<?php get_header(); ?>
<div id="mainarea">
	<div class="featurecontainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<div class="featureitem">
				<div class="featureitem-name" onmouseover="$(this).css('background-color','<?php echo get_post_meta(get_the_ID(), 'boxcolor', true) ?>'); $(this).parent().find('.featureitem-overlay').css('opacity','1');" onmouseout="$(this).css('background-color','#77848c'); $(this).parent().find('.featureitem-overlay').css('opacity','0');">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="featureitem-image" style="background-image:url('<?php echo $feat_image; ?>');">
				</div>
				<div class="featureitem-overlay" style="background-image:url('<?php echo $feat_image; ?>');" onmouseover="$(this).parent().find('.featureitem-name').css('background-color','<?php echo get_post_meta(get_the_ID(), 'boxcolor', true) ?>'); $(this).css('opacity','1');" onmouseout="$(this).parent().find('.featureitem-name').css('background-color','#77848c'); $(this).css('opacity','0');">
				</div>
			</div>
			<div class="featureitem-single-content">
				<?php the_content(); ?>
			</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>