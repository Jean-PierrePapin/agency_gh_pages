<?php 

/**
 * Template part for displaying the CPT team
 */

?>

<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
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
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>

           <!--  
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/1.jpg" alt="" />
                    <h4>Kay Garland</h4>
                    <p class="text-muted">Lead Designer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/2.jpg" alt="" />
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Marketer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/team/3.jpg" alt="" />
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Developer</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
        </div>
 -->
    </div>
</section>