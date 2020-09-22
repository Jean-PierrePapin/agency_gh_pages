<?php 

/**
 * Template part for displaying the CPT team
 */

?>

<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">
                <?php echo esc_html( get_theme_mod( 'set_team_title', __( 'Our Amazing Team', 'agency-gh-pages' ) ) ); ?>
            </h2>
            <h3 class="section-subheading text-muted">
                <?php echo esc_html( get_theme_mod( 'set_team_subtitle', __( 'Lorem ipsum dolor sit amet consectetur.', 'agency-gh-pages' ) ) ); ?>
            </h3>
        </div>

        <div class="row">

            <?php

            /**
             * WP_Query to display the team with the WP Loop
             */

            // Wp_Query arguments
            $args = [
                'post_type'             =>  'team',
                'nopaging'              =>  false,
                'posts_per_page'        =>  '3',
                'order'                 =>  'ASC',
                'orderby'               =>  'ID'
            ];

            /**
             * Instantiate the WP_Query class
             */

            $query = new WP_Query( $args );

            /**
             * Beginning of the WP Loop
             */

            if( $query->have_posts() ) {
                while( $query->have_posts() ) {
                    $query->the_post();
                    ?>
                    
                    <div class="col-lg-4">
                        <div class="team-member">
                            <?php echo get_the_post_thumbnail( 
                                    $query->post_id, 
                                    'thumbnail', 
                                    ['class' => 'mx-auto rounded-circle'] 
                                ); ?> 
                            <h4><?php the_title(); ?></h4>
                            <?php echo the_content(); ?>
                        </div>
                    </div>

                    <?php
                }   
            } else {
                echo   '<div class="container">
                            <div class="row">
                                <h1 class="justify-content-center">Sorry, there is not post to display!</h1>
                            </div>
                        </div>';
            }

            ?>

            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">
                        <?php echo esc_html( get_theme_mod( 'set_team_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.', 'agency-gh-pages' ) ) ); ?>
                        
                    </p>
                </div>
            </div>

    </div>
</section>