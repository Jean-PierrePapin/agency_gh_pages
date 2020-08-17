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
             * WP_Query class use to display 6 CPT portfolio with a foreach loop
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


            <?php } ?>

        </div>
    </div>
</section>