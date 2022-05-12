<?php
register_nav_menus(array('Main' => 'Menu_es'));
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo', array(
    'height'               => 150,
    'width'                => auto,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );
function number_of_posts_per_page( $number ) {
    $number->set( 'posts_per_page', 15 );
    if (is_search()){
        $number->set( 'posts_per_page', 1 );
    }
}
add_action('pre_get_posts', 'number_of_posts_per_page');
?>