<?php 

/**
 * Index Page for the Agency - Start Bootstrap Theme
 */

get_header();

get_template_part( 'template-parts/content', 'services' );
get_template_part( 'template-parts/content', 'portfolio' );
get_template_part( 'template-parts/content', 'about' );
get_template_part( 'template-parts/content', 'team' );
get_template_part( 'template-parts/content', 'clients' );
get_template_part( 'template-parts/content', 'contact' );

get_footer();