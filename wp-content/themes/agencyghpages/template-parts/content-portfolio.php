<?php 

/**
 * Testing the display from the Portfolio part with WP_Query and foreach loop
 * Source: https://stefanledin.se/how-to-use-a-foreach-loop-with-wp_query/
 */

?>

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <div class="row">

            <?php

            /**
             * WP_Query class use to display 6 CPT portfolio
             */

            $args = [
                'post_type'         =>  'portfolio',
                'nopaging'          =>  false,
                'posts_per_page'    =>  '6',
                'order'             =>  'ASC',
                'orderby'           =>  'ID'
            ];
            

            $posts = new WP_Query( $args );
            $posts = $posts->get_posts();

            foreach( $posts as $post ) {
                //var_dump($post);
                ?>

                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">

                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
                        </a>

                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?php echo $post->post_title; ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?php echo $post->post_content; ?></div>
                        </div>

                    </div>
                </div>


                <?php
            }

            ?>


  <!--           <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/01-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Threads</div>
                        <div class="portfolio-caption-subheading text-muted">Illustration</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/02-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Explore</div>
                        <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/03-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Finish</div>
                        <div class="portfolio-caption-subheading text-muted">Identity</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/04-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Lines</div>
                        <div class="portfolio-caption-subheading text-muted">Branding</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/05-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Southwest</div>
                        <div class="portfolio-caption-subheading text-muted">Website Design</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/06-thumbnail.jpg" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Window</div>
                        <div class="portfolio-caption-subheading text-muted">Photography</div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>