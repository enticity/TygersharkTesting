<?php
 /*Template Name: Store List*/

get_header(); ?>
<div id="primary">
    <div id="content" role="main" style="max-width: 960px; margin: 0 auto; padding: 50px 0" >
    <?php
    $mypost = array( 'post_type' => 'stores', );
    $loop = new WP_Query( $mypost );
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">

                <div style="float: right; margin: 10px">
                    <?php the_post_thumbnail( array( 100, 100 ) ); ?>
                </div>

                <h2><?php echo esc_html( get_post_meta( get_the_ID(), 'store_title', true ) ); ?><br /></h2> 
                <strong>Address: </strong> <?php echo esc_html( get_post_meta( get_the_ID(), 'store_add', true ) ); ?><br />
                <strong>City: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_city', true ) ); ?><br />
                <strong>Province: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_prov', true ) ); ?><br />
                <strong>Country: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_country', true ) ); ?><br />
                <strong>Email: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_email', true ) ); ?><br />
                <strong>Phone: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_phone', true ) ); ?><br />
                 <strong>Description: </strong>  <?php echo esc_html( get_post_meta( get_the_ID(), 'store_desc', true ) ); ?><br />
               
                <br />
            </header>

            <div class="entry-content"><?php the_content(); ?></div>
        </article>

    <?php endwhile; ?>
    </div>
</div>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>
