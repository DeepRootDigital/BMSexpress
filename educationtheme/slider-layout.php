<?php /* Template Name: Slider Template */ ?>
<?php get_header(); ?>
<div id="mainarea">
	<div class="panel sliderpage-title-area">
                <h1>Education For Everyone</h1>
	</div>
	<div class="panel sliderpage-slider-area">
                <?php if ( dynamic_sidebar('education_slider') ) : else : endif; ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudorum</p>
	</div>
        <div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area1') ) : else : endif; ?>
	</div>
	<div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area2') ) : else : endif; ?>
	</div>
	<div class="panel boxthreepage-widget-area">
                <?php if ( dynamic_sidebar('three_area3') ) : else : endif; ?>
	</div>
</div>
</div>
<?php get_footer(); ?>