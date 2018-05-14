<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );



function wpb_load_fa() {
 
wp_enqueue_style( 'wpb-fa', 'https://fonts.googleapis.com/css?family=cursive' );
 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
}
?>
