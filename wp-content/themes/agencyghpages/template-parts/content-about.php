<?php 

/**
 * Template part for displaying the About CPT
 */

?>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">
                <?php echo esc_html( get_theme_mod( 'set_about_title', __( 'About', 'agency-gh-pages' ) ) ); ?>
            </h2>
            <h3 class="section-subheading text-muted">
                <?php echo esc_html( get_theme_mod( 'set_about_subtitle', __( 'Lorem ipsum dolor sit amet consectetur.', 'agency-gh-pages' ) ) ); ?>
            </h3>
        </div>

        <ul class="timeline">

            <?php

            /**
             * WP_Query to display the timeline with the Loop in order to display the custom post display 
             * 'about' with the CSS files for the timeline
             * 
             */

            // WP_Query arguments
            $args = [
                'post_type'         =>  'about',
                'nopaging'          =>  false,
                'posts_per_page'    =>  '10',
                'order'             =>  'ASC',
                'orderby'           =>  'ID'
            ];
            
            /**
             * To access the WP_Query class
             */

            $query = new WP_Query( $args );

            /**
             * Beginning of the Loop
             */

            if( $query->have_posts() ) {

                // Count variable to display on the timeline on the left of right
                $count = 0;

                while( $query->have_posts() ) {
                    $query->the_post();
                    //var_dump($query);

                    if( ( $count % 2 ) == 0 ) {
                        ?>

                        <li>    

                            <div class="timeline-image">
                                <?php echo get_the_post_thumbnail( 
                                        $query->post_id, 
                                        'post-thumbnail', 
                                        [ 'class' => 'rounded-circle img-fluid' ] 
                                    ); ?>
                                
                            </div>

                            <div class="timeline-panel">

                                <div class="timeline-heading">
                                    <h4><?php echo the_custom_meta(); ?></h4>
                                    <h4 class="subheading"><?php the_title(); ?></h4>
                                </div>

                                <div class="timeline-body">
                                        <?php the_content(); ?>
                                </div>

                            </div>
                            
                        </li>

                        <?php   

                        // Incrementation of count
                        $count += 1;

                    } elseif( ! ( $count % 2 ) == 0 ) {
                        ?>

                        <li class="timeline-inverted">

                            <div class="timeline-image">
                                <?php echo get_the_post_thumbnail( 
                                        $query->post_id, 
                                        'post-thumbnail', 
                                        [ 'class' => 'rounded-circle img-fluid' ] 
                                    ); ?>
                            </div>
                            

                            <div class="timeline-panel">

                                <div class="timeline-heading">
                                    <h4><?php echo the_custom_meta(); ?></h4>
                                    <h4 class="subheading"><?php the_title(); ?></h4>
                                </div>

                                <div class="timeline-body">
                                    <?php the_content(); ?>
                                </div>

                            </div>

                        </li>
                        
                        <?php

                        // Incrementation of count
                        $count += 1;
                    }


                }   

            } else { // Just to display in case, there is not CPTs
                
                echo   '<div class="container">
                            <div class="row">
                                <h1 class="justify-content-center">Sorry, there is not post to display!</h1>
                            </div>
                        </div>';
    
            }

            /**
             * End of the Loop
             */

            ?>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        Be Part
                        <br />
                        Of Our
                        <br />
                        Story!
                    </h4>
                </div>
            </li> 
        
        </ul>
    </div>
</section>