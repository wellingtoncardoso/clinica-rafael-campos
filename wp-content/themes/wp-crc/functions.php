<?php

function wp_crc_load_scripts(){
    //style
    wp_enqueue_style( 'wp-crc-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style( 'wp-crc-app', get_stylesheet_directory_uri() . '/dist/app.css', array( 'wp-crc-style' ), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'wp_crc_load_scripts' );

// if the wp version is less then 5.2 we will create the wp_body_open function
if( ! function_exists( 'wp_body_open' ) ){
    function wp_body_open(){
        do_action( 'wp_body_open' );
    }
}