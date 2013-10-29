<div class="footer-content">
	<div class="useful-links">
		<h4>Useful Links</h4>
		<ul>
			<li>Sertas Derose</li>
			<li>Taserala Miases</li>
			<li>Mertae Nekastreas</li>
			<li>Verode Fase Laiaisua</li>
			<li>Avertelero Ferose</li>
			<li>Taserto Yndolase</li>
			<li>Mertaeory Uisyase</li>
			<li>Verode Fertase</li>
		</ul>
		<a href="" class="morebutton">
		More
		</a>
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
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php endwhile; ?>
		</div>
		<a href="http://express.businessonmarketst.com/wp/soho/gallery/" class="viewall">View All</a>
	</div>
	<div class="quickmessage">
		<h4>Quick Message</h4>
		<p><span>Sertas deros serala miasesertae nekastrearod aisuaverte lero ferose:</span></p>
		<form>
			<input type="text" name="name" placeholder="Your Name">
			<textarea name="message" placeholder="Message"></textarea>
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="footer-contact">
		<img src="<?php echo get_template_directory_uri(); ?>/images/widgets_logo.png" />
		<p>28 Jackson Blvd Ste 1020</p>
		<p><span>Chicago, IL</span></p>
		<p>60604-2340</p>
		<div class="box-divider">
		</div>
		<a href="" class="email">infodemolink.org</a>
	</div>
</div>
<div class="page-divider">
</div>
<div class="footer">
	<div class="footer-left">
		<a href="http://express.businessonmarketst.com/wp/soho/"><img src="<?php echo get_template_directory_uri(); ?>/images/widgets_logo.png" /></a>
		<p>&copy;2013&middot;Privacy Policy</p>
	</div>
	<div class="footer-right">
		<ul>
			<li><a href="">Facebook</a></li>
			<li>&middot;</li>
			<li><a href="">Twitter</a></li>
			<li>&middot;</li>
			<li><a href="">Flickr</a></li>
		</ul>
	</div>
</div>
</div>
<?php get_template_part('express','overlay'); ?>
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
    center: new google.maps.LatLng(32.830567,-117.150843),
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('contact-page-map'),
    mapOptions);

var contentString = '<div id="mapcontent">'+'<div class="mapcontent-text">'+'<p><span>Business on Market St</span></p>'+
'<p>7975 Raytheon RD Suite 310</p>'+'<p>San Diego, CA 92115</p>'+'<p>P // 858.598.5477</p>'+'</div>'+'<img src="http://businessonmarketst.com/wp-content/themes/BusinessonThemeStreet/images/map-content-image.png">'+'</div>';

var infowindow = new google.maps.InfoWindow({
content: contentString
});


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

var image = 'http://businessonmarketst.com/wp-content/themes/BusinessonThemeStreet/images/BMS_Map_Icon.png';
  var myLatLng = new google.maps.LatLng(32.830567,-117.150843);
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