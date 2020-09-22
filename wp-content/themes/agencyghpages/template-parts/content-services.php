<?php 

/**
 * Testing the display from the Services part with a foreach loop instead of the WP Loop
 */

?>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">
                <?php echo esc_html( get_theme_mod( 'set_service_title', __( 'Services', 'agency-gh-pages' ) ) ); ?>
            </h2>
            <h3 class="section-subheading text-muted">
                <?php echo esc_html( get_theme_mod( 'set_service_subtitle', __( 'Lorem ipsum dolor sit amet consectetur.', 'agency-gh-pages' ) ) ); ?>
            </h3>
        </div>

        <div class="row text-center">

            <?php 
            
            /**
             * Displaying the services CPT with a simple foreach loop
             */

            $posts = get_posts(
                [
                    'numberpost'        =>  1,
                    'post_type'         =>  'services',
                    'orderby'           =>  'date',
                    'order'             =>  'ASC'
                ]

            );

            foreach( $posts as $post ) {
                //var_dump( $post );
            ?>

                <div class="col-md-4">
               
                    <?php echo $post->post_content; ?>
                    
                </div>

            <?php } ?>

        </div>
    </div>
</section>