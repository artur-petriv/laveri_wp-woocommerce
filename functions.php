<?php
add_action( 'wp_enqueue_scripts', 'theme_add_styles' );

function theme_add_scripts() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'laveri_style', get_template_directory_uri() .'/assets/css/main.css', array(), '1.0', true );
}
?>