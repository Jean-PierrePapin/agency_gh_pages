<?php 

/**
 * Template part for displaying the contact form
 */

?>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>

        <?php 
        
        /**
         * WP_Query class use to display 1 CPT contact form with the WPForm plugin
         */

        $args = [
            'post_type'         =>  'contact form',
            'nopaging'          =>  false,
            'posts_per_page'    =>  '2',
            'order'             =>  'ASC',
            'orderby'           =>  'ID'
        ];

        $query = new WP_Query( $args );
        

        if( $query->have_posts() ) {
            while( $query->have_posts() ) {
                $query->the_post();

                //var_dump($query->post_content);
                echo $query->post_content;

            }
        }


        ?>

    </div>
</section>