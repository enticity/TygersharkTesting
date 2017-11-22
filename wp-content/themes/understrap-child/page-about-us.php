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

<div class="container-fluid">
  <div class="row">
    <div class="col-6 job-search section section--dark" style="background-image: url(/wp-content/uploads/2017/09/job-search.jpg);">
      <h3>Job <strong>Search</strong></h3>
      <hr>
      <p>Search for jobs in your area.
  AMPS adds new job listings on a regular basis so please check back if you can’t find exactly what you’re looking for.</p>
      <a href="#" class="button">Job Search</a>
    </div>
    <div class="col-6 having-trouble section section--dark" style="background-image: url(/wp-content/uploads/2017/09/need-help.jpg);">
      <h3>Having <strong>Trouble</strong></h3>
      <hr>
      <p>Can’t find what you’re looking for? Having trouble searching for a job?
      Contact us to see if we can help you.</p>
      <a href="#" class="button">Contact Us</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
