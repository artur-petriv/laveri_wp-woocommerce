<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );

// Add styles
function theme_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'laveri-style', get_template_directory_uri() . '/assets/css/main.css' );
}

// Add scripts
function theme_scripts() {
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/main.min.js' );
}

?>