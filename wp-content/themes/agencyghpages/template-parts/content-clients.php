<?php 

/**
 * Testing the display from the Clients part
 */

?>

<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row">

            <?php
            
            /**
             * WP_Query to display the clients with the WP Loop
             */
            
            /**
             * WP_Query arguments 
             */ 

            $args = [
                'post_type'         => 'client',
                'nopaging'          =>  false,
                'posts_per_page'    =>  '4',
                'order'             =>  'ASC',
                'orderby'           =>  'ID'
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

                    <div class="col-md-3 col-sm-6 my-3">
                        <?php echo get_the_post_thumbnail(
                                    $query->post_id,
                                    'thumbnail',
                                    ['class' => 'img-fluid d-block mx-auto']

                        ); ?>
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

        </div>
    </div>
</div>