<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="featurecontainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="left-contactus-content">
			<div id="google-map">
			</div>	
		</div>
		<div class="right-contactus-content">
			<h2>contact us</h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>