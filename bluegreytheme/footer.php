<div class="footerarea">
	<div class="footerarea-left">
	</div>
	<div class="footerarea-right">
		<p>&copy;2013 Business on Market St.</p>
	</div>
</div>
<?php get_template_part('express','overlay'); ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
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
  var map = new google.maps.Map(document.getElementById('google-map'),
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