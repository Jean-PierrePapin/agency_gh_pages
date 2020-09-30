<?php 

/**
 * Template part for displaying the contact form
 */

?>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">

        <div class="text-center">
            <h2 class="section-heading text-uppercase">
                <?php echo esc_html( get_theme_mod( 'set_contact_title', __( 'Contact Us', 'agency-gh-pages' ) ) ); ?>
                
            </h2>
            <h3 class="section-subheading text-muted">
                <?php echo esc_html( get_theme_mod( 'set_contact_subtitle', __( 'Lorem ipsum dolor sit amet consectetur.', 'agency-gh-pages' ) ) ); ?>  
            </h3>
        </div>

        
            
        <?php echo do_shortcode( '[wpforms id="56"]' ); ?>
            
        
        
          
    </div>
</section>