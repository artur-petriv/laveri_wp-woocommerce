<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Register header menu
function theme_register_nav_menu() {
	register_nav_menu( 'first-menu', 'Шапка сайта - меню' ); 
}

// Add class to menu li elements
add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	$classes[] = 'nav-header__item';
	return $classes;
}

// Add styles
function theme_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'laveri-style', get_template_directory_uri() . '/assets/css/main.css' );
}

// Add scripts
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/main.min.js', [jquery],null, true );
}

?>