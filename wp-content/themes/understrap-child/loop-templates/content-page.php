<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>


<div class="page-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');"></div>

<!--
<div class="container-fluid">

	<div class="entry-content">

    <div class="row justify-content-center"><div class="col-10">
		  <?php the_content(); ?>
    </div></div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content 

</div>
-->