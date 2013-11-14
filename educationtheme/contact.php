<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="panel contact-page-title">
		<h1>Contact Us</h1>
	</div>
	<div class="panel contact-page-content">
		<div id="contact-page-map">
		</div>
		<div class="contact-info">
<?php 
		$args=array(
			'post_type' => 'contactinfo'
		);

		$blogPosts = new WP_Query($args);

		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
			<h2>Contact Info</h2>
			<p><span><?php echo get_post_meta(get_the_ID(), 'contact1', true) ?><br />
			<?php echo get_post_meta(get_the_ID(), 'contact2', true) ?><br />
			<?php echo get_post_meta(get_the_ID(), 'contact3', true) ?></span><br />
			Telephone: <?php echo get_post_meta(get_the_ID(), 'contact4', true) ?><br />
			FAX: <?php echo get_post_meta(get_the_ID(), 'contact5', true) ?><br />
			E-mail: <a href="mailto:<?php echo get_post_meta(get_the_ID(), 'contact6', true) ?>"><?php echo get_post_meta(get_the_ID(), 'contact6', true) ?></a></p>
<?php endwhile; ?>
		</div>
		<div class="contact-form">
			<?php if ( dynamic_sidebar('contactbox') ) : else : endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>