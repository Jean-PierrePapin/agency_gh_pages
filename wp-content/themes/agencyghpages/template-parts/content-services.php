<?php 

/**
 * Testing the display from the Services part with a foreach loop instead of the WP Loop
 */

?>

<!-- Services-->
<section class="page-section" id="services">
    <div class="container">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <div class="row text-center">

            <?php 
            
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

            <?php 

            }

            ?>
        </div>
    </div>
</section>