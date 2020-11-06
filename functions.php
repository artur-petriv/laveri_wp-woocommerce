<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Add Styles
function theme_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'laveri-style', get_template_directory_uri() . '/assets/css/main.css' );
}

// Add Scripts
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/main.min.js', [jquery],null, true );
}


// Register header Menu
// function theme_register_nav_menu() {
// 	register_nav_menu( 'first-menu', 'Шапка сайта - меню' ); 
// }

// Change id to Menu li elements
// add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
// function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
// 	return $args->theme_location === 'first-menu' ? '' : $menu_id;
// }

// Change class to Menu li elements
// add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
// function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
// 	if ( $args->theme_location === 'first-menu' ) {
// 		$classes = [
// 			'nav-header__item'
// 		];
// 		if ( $item->current ) {
// 			$classes[] = 'nav-header__item_active';
// 		}
// 	}
// 	return $classes;
// }

// Add chass to Menu li > a links
// add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
// function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
// 	if ( $args->theme_location === 'first-menu' ) {
// 		$atts['class'] = 'nav-header__link';
// 		if ( $item->current ) {
// 			$atts['class'] .= ' nav-header__link_active';
// 		}
// 	}
// 	return $atts;
// }

?>