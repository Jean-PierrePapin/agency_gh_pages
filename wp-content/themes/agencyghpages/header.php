<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php wp_title(); ?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
        <?php wp_head(); ?>
    </head>
    <body id="page-top" <?php body_class(); ?> >
        
        <?php get_template_part( 'template-parts/content', 'navigation' ); ?>

        <header class="masthead">
            <div class="container">

                <div class="masthead-subheading">
                    <?php echo esc_html( get_theme_mod( 'set_header_title', __( 'Welcome To Our Studio!', 'agency-gh-pages' ) ) ); ?>
                </div>

                <div class="masthead-heading text-uppercase">
                    <?php echo esc_html( get_theme_mod( 'set_header_subtitle', __( 'It\'s Nice To Meet You', 'agency-gh-pages' ) ) ); ?>
                </div>

                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">
                    <?php echo esc_html( get_theme_mod( 'set_header_button', __( 'Tell Me More', 'agency-gh-pages' ) ) ); ?>
                </a>

            </div>
        </header>