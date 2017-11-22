<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Page-Contact-us
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>


  <!-- Map -->
<div class="map">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;key=AIzaSyAW-kOTUlPs0R0JCyJ3_78YyvzT0Vz_cGs"></script>
	<div id="map-canvas"></div>
	<script>
		var mapstyle = [
    {
        "stylers": [
            {
                "hue": "#ff1a00"
            },
            {
                "invert_lightness": true
            },
            {
                "saturation": -100
            },
            {
                "lightness": 33
            },
            {
                "gamma": 0.5
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#2D333C"
            }
        ]
    }
];

	var mapCenter = new google.maps.LatLng(35.063867, -90.027568);

	var mapZoom = 16;

	// Google Maps
	var mapOptions = {
		scrollwheel: false,
		scaleControl: false,
			zoom: mapZoom,
			center: mapCenter,
			disableDefaultUI: true,
			mapTypeId: google.maps.MapTypeId.ROADMAP, 
			styles: mapstyle
		}
		
		let mapCanvas = document.getElementById("map-canvas") || false;
		if ( mapCanvas ) {
			var map = new google.maps.Map(mapCanvas, mapOptions);
		}

		var iconBase = '/wp-content/uploads/';

		function addMarker(feature) {
			
			var w, h;
				w = feature.size.w;
				h = feature.size.h;
			var marker = new google.maps.Marker({
				position: feature.position,
				icon: new google.maps.MarkerImage( iconBase + feature.icon, null, null, null, new google.maps.Size(w, h)),
				map: map
				});
		}

		addMarker({
			position: new google.maps.LatLng(35.062467, -90.027568),
			icon: 'pin.png',
			size: {w: 162, h: 183}
		});
	</script>
</div>
<!-- / Map -->
  




<div class="container-fluid">
<div class="row">
	<div class="col-6 section--light">
    <div class="row justify-content-center">
        <div class="col-8 contact-us">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
  
	<div class="col-6 section--dark consultation">
		<div class="row justify-content-center">
			<div class="col-8">
				<h2>REQUEST A <strong>CONSULTATION</strong></h2>
				<p>We are your workforce integrators and we handle everything from recruitment to payroll. Get in touch with us today!</p>

				<form class="row">
					<div class="col-12">
						<input type="text" class="amps-input" name="name" placeholder="Name" required>
					</div>
					
					<div class="col-6">
						<input type="email" class="amps-input" name="name" placeholder="Email Address" required>
					</div>

					<div class="col-6">
						<input type="tel" class="amps-input" name="name" placeholder="Phone Number" required>
					</div>

					<div class="col-12">
						<textarea class="amps-input" name="name" placeholder="Message" required></textarea>
					</div>

					<div class="col-12" style="text-align: right">
						<input type="submit" class="button" value="Submit">
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
</div>


<?php get_footer(); ?>
