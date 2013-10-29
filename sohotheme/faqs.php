<?php /* Template Name: FAQS Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="page-title">
		<h1>FAQS</h1>
	</div>
	<div class="page-divider">
	</div>
	<div class="faqs-content-area">
		<?php 
		$args=array(
			'post_type' => 'faqs'
		);

		$blogPosts = new WP_Query($args);

		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
			<div class="faqs-single">
				<div class="faqs-question">
					<h3>Q?</h3><h5><?php echo get_post_meta(get_the_ID(), 'question', true) ?></h5>
				</div>
				<div class="faqs-answer">
					<h3>A.</h3><p><?php echo get_post_meta(get_the_ID(), 'answer', true) ?></p>
				</div>
			</div>
		<?php endwhile; ?>

	</div>
	<div class="page-divider">
	</div>
</div>
<?php get_footer(); ?>