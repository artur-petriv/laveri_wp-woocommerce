<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Add Styles
function theme_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'laveri-style', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css' );
}

// Add Scripts
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/main.min.js', [jquery],null, true );
}

// Add Woocommerce Support
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
}

// Change the Breadcrumb separator
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' &raquo; ';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter', 20 );


// Remove Sidebar woocommerce
add_action( 'woocommerce_before_main_content', 'remove_sidebar' );
function remove_sidebar() {
	if ( is_shop() ) {
		remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
	}
}

// Change Result_count position
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_archive_description', 'woocommerce_result_count', 15);

// Remove notice
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10 );

// Change Breadcrumb position
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 40 );

// Change Breadcrumb wrapper
add_filter( 'woocommerce_breadcrumb_defaults', 'change_breadcrumbs_wrapper' );
function change_breadcrumbs_wrapper( $defaults ) {
	$defaults[ 'wrap_before' ] = '<div class="breadcrumbs">';
	$defaults[ 'wrap_after' ] = '</div>';
	return $defaults;
}

// Add class for a.product__link
if ( ! function_exists( 'woocommerce_template_loop_product_link_open' ) ) {
	function woocommerce_template_loop_product_link_open() {
		global $product;
		$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
		echo '<a href="' . esc_url( $link ) . '" class="product__link">';
	}
}

// Test
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog' ) {
        global $post, $woocommerce;
        $output = '<div class="product__images">';

        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID, $size );
        } else {
             $output .= wc_placeholder_img( $size );
             // Alternative
						 // $output .= '<img class="123" src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
        }                       
        $output .= '</div>';
        return $output;
    }
}

// Test 2
add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image' ) ; 

function add_on_hover_shop_loop_image( $size = 'shop_catalog' ) {

		$image_id = wc_get_product()->get_gallery_image_ids()[0] ; 
		
		echo '<div class="product__image product__image-back">';

    if ( $image_id ) {

        echo wp_get_attachment_image( $image_id, array("300", "300"), "", array( "class" => "product__img" ) ) ;

    } else {  //assuming not all products have galleries set

        echo wp_get_attachment_image( wc_get_product()->get_image_id(), array("300", "300"), "", array( "class" => "product__img" ) ) ; 

		}
		echo '</div>';

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