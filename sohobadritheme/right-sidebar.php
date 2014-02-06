<div class="right-sidebar">
	<div class="sidebar-categories">
		<?php wp_list_categories(); ?>
	</div>
	<div class="sidebar-archives">
		<h3>Archives</h3>
		<?php wp_get_archives(); ?>
	</div>
	<div class="sidebar-recent">
		<h3>Recent Posts</h3>
		<?php $wp_query->query('showposts=5&order=DESC' . '&paged=' . $paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="sidebar-recent-single">
			<div class="sidebar-recent-single-left">
				<?php the_post_thumbnail(); ?>
				<div class="morebutton">Read More</div>
			</div>
			<div class="sidebar-recent-single-right">
				<h5><?php echo get_the_date(); ?></h5>
				<h4><?php the_title(); ?></h4>
				<p><?php echo substr(get_the_excerpt(),0,70); ?>...</p>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>