<?php /* Template Name: Services Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Services</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="page-content-area">
<div class="service-content-section">
<a href="http://badrikermani.com/contacts"><p style="font-family:Tahoma,sans-serif;font-size:1rem;color:#f48b0b;">Contact us now to schedule your appointment!</p></a>	
<?php 
		$args=array(
			'post_type' => 'services'
		);

		$blogPosts = new WP_Query($args);

		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
		<div class="single-service">
			<h2><?php the_title(); ?><span>&raquo;</span></h2>
			<div class="services-information">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile;?>
</div>
               <?php get_template_part('right','sidebar'); ?>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>