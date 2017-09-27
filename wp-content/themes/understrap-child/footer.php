<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<!-- Footer -->
<div class="footer">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
				
				<img class="footer__logo" src="/wp-content/uploads/2017/09/cropped-Vector-Smart-Object.png" alt="Amps">

				<div class="row">
					<div class="col-3">
						<strong class="company">AMPS — Corporate Office</strong>
						
						<p class="icon-address">
							3111 Bellbrook Drive<br>
							Memphis, TN 38116  USA</p>

						<p>
							<span class="icon-email">info@amps.com</span><br>
							<span class="icon-tel">901-396-5998</span></p>

					</div>

					<div class="col-3">
						<h4>JOB <strong>SEEKERS</strong></h4>
						<ul>
							<li><a href="#">AMPS Advantage</a></li>
							<li><a href="#">Train With AMPS</a></li>
							<li><a href="#">Register</a></li>
							<li><a href="#">Place With AMPS</a></li>
							<li><a href="#">Find A Job</a></li>
						</ul>
					</div>
					<div class="col-3">
						<h4>THE <strong>EMPLOYERS</strong></h4>
						<ul>
							<li><a href="/about-us">About Us</a></li>
							<li><a href="#">AMPS For Employers</a></li>
							<li><a href="#">AMPS Training</a></li>
							<li><a href="#">Staff Login</a></li>
							<li><a href="/contact-us">Contact Us</a></li>
						</ul>
					</div>
					<div class="col-3">
						<h4>SOCIAL <strong>FEED</strong></h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-10">
			<div class="row">
				<div class="col-10">
					© 2017 AMPS  //  All Rights Reserved.
				</div>
				<div class="col-2 footer__social">
					<a href="#" class="social social--facebook">Facebook</a>
					<a href="#" class="social social--linkedin">LinkedIn</a>
					<a href="#" class="social social--twitter">Twitter</a>
				</div>
			</div>
</div></div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>




