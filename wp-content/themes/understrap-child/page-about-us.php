<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Template Name: Page-About-US
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

  <?php while ( have_posts() ) : the_post(); ?>
    
    <?php 
    $post = get_post(15970);
    get_template_part( 'loop-templates/content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

<div class="section">
	<div class="container-fluid">
		<div class="row"  style="padding: 100px 0;">
			<div class="col-1"></div>
			<div class="col-5">
				<h2>About <strong>Us</strong></h2>
                <h4><strong>About Amps Staffing</strong></h4>
				<p>Amps Staffing Inc. has been in the business of providing recruitment and staffing solutions to the qualifies trades industry catering to employers for contractors, laborers, journeyman, foreman and supervisors since 2006. We have a dedicated team of HR professionals, recruiters, payroll &amp; benefits administrators and on-site representatives ready to assist with all your workforce needs.</p>
                <p>At AMPS we will make things easy for you. We will advertise, recruit, evaluate, run background checks, preform drug testing and process travel documents. We know the business of recruitment and we are devoted to it. We interview and select our candidate;s with your best interest in our minds.</p>
                <p>We understand the challenges that you face in the recruitment of qualified personnel and we offer our experience, knowledge and commitment to deliver the services and people that you need.</p>
                <p>If you're interested in joining Amps Staffing or would like more information about our staffing solutions and service, please feel free to contact us today!</p>
				<a href="#" class="button">Contact Us</a>
			</div>
            <div class="col-1"></div>
            <div class="col-4">
                <img src="/wp-content/uploads/2017/11/about-img.jpg" alt="About Amps Staffing Inc."/>
            </div>
	</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-6 job-search section section--dark" style="background-image: url(/wp-content/uploads/2017/09/need-help.jpg);">
      <h3>Job <strong>Search</strong></h3>
      <hr>
      <p>Search for jobs in your area.
  AMPS adds new job listings on a regular basis so please check back if you can’t find exactly what you’re looking for.</p>
      <a href="#" class="button">Job Search</a>
    </div>
    <div class="col-6 having-trouble section section--dark" style="background-image: url(/wp-content/uploads/2017/09/job-search.jpg);">
      <h3>Having <strong>Trouble</strong></h3>
      <hr>
      <p>Can’t find what you’re looking for? Having trouble searching for a job?
      Contact us to see if we can help you.</p>
      <a href="#" class="button">Contact Us</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
