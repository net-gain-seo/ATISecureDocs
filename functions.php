<?php
function my_theme_enqueue_styles() {

    $parent_style = 'mc_main'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( 'Barlow Condensed', 'https://fonts.googleapis.com/css?family=Barlow+Condensed:400,400i,600,700', false );
    wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,400i', false );
    
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>
