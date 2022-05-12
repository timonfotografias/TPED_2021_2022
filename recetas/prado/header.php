<html>
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name');?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    </head>
    <body>
    <a href="<?php pll_home_url(''); ?>">
        <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            
            if ( has_custom_logo() ) {
                echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
        ?>
    </a>
        <h2><?php bloginfo('description');?></h2>

        <nav>
            <?php wp_nav_menu(array('menu'=>'Main')); ?>
        </nav>
        <?php get_search_form(); ?>