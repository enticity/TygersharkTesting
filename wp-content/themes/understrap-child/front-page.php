<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>


<?php
// Get hero carousel slides
$query = new WP_Query( array( 'category_name' => 'hero-slider' ) );
$slides = [];

while ( $query->have_posts() ) :
	$query->the_post();
	$slides[] = [
		'url' => get_the_post_thumbnail_url( $post->ID, 'full' ),
		'content' => get_the_content()
	];
endwhile;
?>

<div id="hero" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php foreach($slides as $key => $slide): ?>
			<li data-target="#hero" data-slide-to="<?=$key;?>" class="<?php if ( $key == 0 ) { echo 'active'; } ?>"></li>
		<?php endforeach;?>
	</ol>
	<div class="carousel-inner">

		<?php foreach($slides as $key => $slide):?>
			<div class="carousel-item <?php if ( $key == 0 ) { echo 'active'; } ?>">
				<img class="d-block w-100" src="<?=$slide['url'];?>" alt="Slide">
				<div class="hero-caption carousel-caption d-none d-md-block"><?=$slide['content'];?></div>
			</div>
		<?php endforeach;?>

	</div>

	<a class="carousel-control-prev" href="#hero" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#hero" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>

</div>


<div class="container-fluid">
<div class="row">
	<div class="col-6 section--light advantage">
		<div class="row justify-content-center">
			<div class="col-8">
				<h2>THE AMPS <strong>ADVANTAGE</strong></h2>
				<p><strong>Still trying to land that dream job? Can’t decide exactly what you want to do for a living? Too busy for a full-time career? At AMPS, we can help.</strong></p>

				<p>At Amps Staffing Services, we do much more than simply provide jobs for qualified tradesmen. We provide career opportunities within the trades industry along with the flexibility to match virtually any lifestyle.</p>

				<p>AMPS has the connections and resourcing to help you achieve your goals. Our unique skills based assessment and job opportunity matching tools assist us in providing you with the right job opportunities that are matched to your abilities and interests.
				</p>
				
				<a href="#" class="button">Find out more</a>
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


<!-- What we offer -->
<div class="offer section--dark">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
				
				<div class="row">
					<div class="col-12 offer__heading">
						<h2 class="heading--light">What we <strong>offer</strong></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
					</div>
					
					<div class="col-4">
						<ul>
							<li>Advertisement of Open Positions</li>
							<li>Recruitment</li>
							<li>Structured Interview Process</li>
							<li>Background Checks</li>
							<li>Drug Testing</li>
						</ul>
					</div>
					
					<div class="col-4">
						<ul>
							<li>New Employee Orientation and Health 
							and Safety Training (OSHA)</li>
							
							<li>Payroll</li>
							
							<li>Health Insurance</li>
							
							<li>Dental and Vision</li>
						</ul>
					</div>
					
					<div class="col-4">
						<ul>
							<li>401K</li>
							
							<li>Healthcare Reform Act Compliance</li>
							
							<li>Health and Safety Compliance</li>
							<li>Dedicated on-site Representative for 
							Large Projects</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- / What we offer -->


<!-- Jobs just in -->
<div class="jobs section section--light">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">

				<!-- Section Heading -->
				<div class="section__heading row align-items-center">
					<div class="col-9">
						<h2 class="heading-dark">Jobs <strong>Just in</strong></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
					</div>
					<div class="col-3">
						<a href="#" class="button">See all opportunities</a>
					</div>
				</div>
				<!-- / Section heading -->
				

				<div class="row">

					<div class="col-4">
						<div class="jobs__item">
								<div class="job-item__date">january 17, 2017</div>

								<div class="job-item__content">
									<h3>CONVEYOR INSTALLER</h3>
									<h4>LAS VEGAS, NEVADA</h4>
									
									<p>We are currently seeking Conveyor Installers. The ideal Conveyor Installer will be a self-motivated and goal oriented individual who combines a strong work ethic with a positive attitude...</p>
									
									<a href="#" class="button">VIEW JOB</a>
								</div>
						</div>
					</div>

					<div class="col-4">
							<div class="jobs__item">
									<div class="job-item__date">january 17, 2017</div>
	
									<div class="job-item__content">
										<h3>CONVEYOR INSTALLER</h3>
										<h4>LAS VEGAS, NEVADA</h4>
										
										<p>We are currently seeking Conveyor Installers. The ideal Conveyor Installer will be a self-motivated and goal oriented individual who combines a strong work ethic with a positive attitude...</p>
										
										<a href="#" class="button">VIEW JOB</a>
									</div>
							</div>
						</div>

						<div class="col-4">
								<div class="jobs__item">
										<div class="job-item__date">january 17, 2017</div>
		
										<div class="job-item__content">
											<h3>CONVEYOR INSTALLER</h3>
											<h4>LAS VEGAS, NEVADA</h4>
											
											<p>We are currently seeking Conveyor Installers. The ideal Conveyor Installer will be a self-motivated and goal oriented individual who combines a strong work ethic with a positive attitude...</p>
											
											<a href="#" class="button">VIEW JOB</a>
										</div>
								</div>
							</div>

				</div>


			</div>
		</div>
	</div>
</div>
<!-- / Jobs just in -->


<!-- Job seeker -->
<div class="job-seeker section section--dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col-1"></div>
			<div class="col-4">
				<h2 class="heading--light">Are you a <strong>Job seeker?</strong></h2>
				<p>We’ll place you on assignments where you can succeed, and you’ll have the chance to gain valuable job experience with nationally respected companies of all sizes and locales. Amps Staffing offers great job opportunities with sound companies, a comprehensive benefits package, flexible scheduling and skills training. We provide quality opportunities for your future…and your life.</p>
				<a href="#" class="button">Apply now</a>
			</div>
		</div>
	</div>
</div>
<!-- / Job seeker -->


<!-- Employer -->
<div class="employer section section--dark">
	<div class="container-fluid">
		<div class="row">
			<div class="col-7"></div>
			<div class="col-4">
				<h2 class="heading--light">Are you an <strong>Employer?</strong></h2>
				<p>Finding qualified and reliable tradesmen, laborers, journeyman, foreman and supervisors is clearly one of the biggest challenges facing nearly every contractor and employer in North America. Let’s face it; you CANNOT continue to do the same things that you’ve always done. As the demand for a quality workforce continues to increase, a basic newspaper ad or a sign on the back of your trucks simply isn’t effective anymore.</p>
				<a href="#" class="button">Find out more</a>
			</div>
		</div>
	</div>
</div>
<!-- / Employer -->


<!-- Our People -->
<div class="people section section--light">
	<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-10">
					
					<div class="people-slider">
						<div class="row align-items-center">
							<div class="col-1"><div class="arrow arrow--left"></div></div>
							<div class="col-10 people-slider__content">
								<h2>Our <strong>People</strong></h2>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
								
								<cite>— John smith, DARANA HYBRID EMPLOYEE</cite>
							</div>
							<div class="col-1"><div class="arrow arrow--right"></div></div>
						</div>
					</div>

				</div>
			</div>
		</div>
</div>
<!-- / Out People -->


<!-- Having Trouble -->
<div class="help section--dark">

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
				<div class="row align-items-center">
					<div class="col-10">
						<h2 class="heading--light">HAVING <strong>TROUBLE?</strong></h2>
						<p>Can’t find what you’re looking for? Having trouble searching for a job? Contact us to see if we can help you.</p>
					</div>
					<div class="col-2">
						<a href="/contact-us" class="button">CONTACT US</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- / Having Trouble -->


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





<?php get_footer(); ?>
