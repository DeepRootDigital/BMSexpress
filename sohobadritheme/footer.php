<div class="footer-content">
	<div class="useful-links">
		<h4>Useful Links</h4>
		<ul>
<?php 
			$args=array(
				'post_type' => 'usefullinks',
				'showposts' => 8
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<a href="<?php echo get_the_content(); ?>"><li><?php the_title(); ?></li></a>
<?php endwhile; ?>
		</ul>
<!--
		<a href="" class="morebutton">
		More
		</a>
-->
	</div>
	<div class="newfaces">
		<h4>New Faces</h4>
		<div class="newfaces-images">
			<?php 
			$args=array(
				'post_type' => 'featuredclients',
				'showposts' => 4
				);

			$blogPosts = new WP_Query($args);

			while ($blogPosts->have_posts()) : $blogPosts->the_post();
			?>
			<a href="<?php the_permalink(); ?>">
                        <div class="newfaces-single">
                              <?php the_post_thumbnail(); ?>
                        </div>
                        </a>
			<?php endwhile; ?>
		</div>
		<a href="http://www.badrikermani.com/clientgallery/" class="viewall">View All</a>
	</div>
	<div class="quickmessage">
		<h4>Quick Message</h4>
		<p><span>Sign up to learn more about our News and Promotions:</span></p>
		<form>
			<input type="text" name="name" placeholder="Your Name">
			<textarea name="message" placeholder="Message"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="footer-contact">
		<h4>Badri Kermani</h4>
                <?php 
		$args=array(
			'post_type' => 'contactinfo'
		);

		$blogPosts = new WP_Query($args);

		while ($blogPosts->have_posts()) : $blogPosts->the_post();
		?>
		<p><?php echo get_post_meta(get_the_ID(), 'contact2', true) ?></p>
		<p><span><?php echo get_post_meta(get_the_ID(), 'contact3', true) ?></span></p>
		<p><?php echo get_post_meta(get_the_ID(), 'contact4', true) ?></p>
                
		<div class="box-divider">
		</div>
		<a href="mailto:<?php echo get_post_meta(get_the_ID(), 'contact6', true) ?>" class="email"><?php echo get_post_meta(get_the_ID(), 'contact6', true) ?></a>
                <?php endwhile; ?>
	</div>
</div>
<div class="page-divider">
</div>
<div class="footer">
	<div class="footer-left">
		<a href="http://www.badrikermani.com/"><h4>Badri <br />Kermani</h4></a>
		<p>&copy;2013&middot;Privacy Policy&middot;<a href="http://www.businessonmarketst.com/" target="_blank">Developed by Business on Market St.</a></p>
	</div>
	<div class="footer-right">
		<ul>
			<li><a href="https://www.facebook.com/BadriKermaniHairstylist" target="_blank">Facebook</a></li>
			<li>&middot;</li>
			<li><a href="https://twitter.com/KermaniB" target="_blank">Twitter</a></li>
			<li>&middot;</li>
			<li><a href="http://www.pinterest.com/bkermanistylist/" target="_blank">Pinterest</a></li>
                        <li>&middot;</li>
			<li><a href="http://instagram.com/badri_kermani" target="_blank">Instagram</a></li>
		</ul>
	</div>
</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/function.js" type="text/javascript"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function mapinitialize() {

  // Create an array of styles.
  var styles = [
    {
      stylers: [
        { saturation: -100 }
      ]
    }
  ];



  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 17,
    mapTypeControl: false,
streetViewControl: false,
    center: new google.maps.LatLng(32.997021,-117.272079),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('contact-page-map'),
    mapOptions);

var contentString = '<div id="mapcontent">'+'<div class="mapcontent-text">'+'<p><span>Badri Kermani</span></p>'+
'<p>406 North Cedros Ave</p>'+'<p>Solana Beach, CA 92075</p>'+'<p>P // 619.886.5482</p>'+'</div>'+'</div>';

var infowindow = new google.maps.InfoWindow({
content: contentString
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

var image = 'http://express.businessonmarketst.com/wp/soho/wp-content/themes/sohotheme/images/map_pin.png';
  var myLatLng = new google.maps.LatLng(32.997021,-117.272079);
  var bmsmarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });

google.maps.event.addListener(bmsmarker,'click',function(){
infowindow.open(map,bmsmarker);
});

  bmsmarker.setMap(map);
              
}

google.maps.event.addDomListener(window, "load", mapinitialize);

</script>
</body>
</html>