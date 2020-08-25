<?php 

/**
 * Testing the display from the About part
 */

?>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
                'order'             =>  'DES',
                'orderby'           =>  'ID'
            ];

            // WP_Meta_Query arguments
            $meta_args = [

            ];
            
            /**
             * To access the WP_Query class
             */

            $query = new WP_Query( $args );

            /**
             * To access the WP_Meta_Query class
             */

            $meta_query = new WP_Meta_Query( $meta_args );

            /**
             * Beginning of the Loop
             */

            if( $query->have_posts() ) {

                while( $query->have_posts() ) {
                    $query->the_post();
                    //var_dump($query);
                    ?>
                    <li>    
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo the_post_thumbnail(); ?>" alt="" />
                        </div>

                        <div class="timeline-heading">
                            <h4><?php echo the_meta(); 
                            // get_post_meta( $meta_query->ID, 'year', true )   get_post_custom( $query->ID ) ?></h4>
                            <h4 class="subheading"><?php the_title(); ?></h4>
                        </div>

                        <div class="timeline-body">
                        
                            <p class="text-muted">
                                <?php the_content(); ?>
                            </p>

                        </div>
                    </li>

                    <?php
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
        
            <!-- 

            <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php //echo get_template_directory_uri(); ?>/assets/img/about/1.jpg" alt="" />
                </div>

                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>2009-2011</h4>
                        <h4 class="subheading">Our Humble Beginnings</h4>
                    </div>

                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php //echo get_template_directory_uri(); ?>/assets/img/about/2.jpg" alt="" />
                </div>

                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>March 2011</h4>
                        <h4 class="subheading">An Agency is Born</h4>
                    </div>

                    <div class="timeline-body">
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/3.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>December 2012</h4>
                        <h4 class="subheading">Transition to Full Service</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/about/4.jpg" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4>July 2014</h4>
                        <h4 class="subheading">Phase Two Expansion</h4>
                    </div>
                    <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                </div>
            </li>

            

            -->

        </ul>
    </div>
</section>