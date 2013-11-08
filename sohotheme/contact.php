<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>Contact Us</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="contact-area">
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
			<h3><?php echo get_post_meta(get_the_ID(), 'contactheader', true) ?></h3>
			<h4>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</h4>
			<p><?php echo get_the_content(); ?></p>
			<p><span><?php echo get_post_meta(get_the_ID(), 'contact1', true) ?><br />
			<?php echo get_post_meta(get_the_ID(), 'contact2', true) ?><br />
			<?php echo get_post_meta(get_the_ID(), 'contact3', true) ?></span><br />
			Telephone: <?php echo get_post_meta(get_the_ID(), 'contact4', true) ?><br />
			FAX: <?php echo get_post_meta(get_the_ID(), 'contact5', true) ?><br />
			E-mail: <a href="mailto:<?php echo get_post_meta(get_the_ID(), 'contact6', true) ?>"><?php echo get_post_meta(get_the_ID(), 'contact6', true) ?></a></p>
<?php endwhile; ?>
		</div>
		<div class="contact-form">
			<h3>Contact Form</h3>
			<form method="POST" action="mailformprocess.php">
				<input name="name" placeholder="name*" type="text" required>
				<input name="email" placeholder="email*" type="email" required>
				<input name="phone" placeholder="phone*" type="text" required>
				<textarea placeholder="message*" name="message" required></textarea>
				<input type="reset" value="Clear" class="morebutton">
				<input type="submit" value="Send" class="morebutton">
			</form>
		</div>
	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>