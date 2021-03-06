<?php

add_action( 'wp_enqueue_scripts', 'theme_styles' );
add_action( 'wp_footer', 'theme_scripts' );
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Left Sidebar',
		'id'            => "left_sidebar",
		'description'   => 'Описание сайдбара',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}

// Add Styles
function theme_styles() {
	wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	wp_enqueue_style( 'woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	wp_enqueue_style( 'laveri-style', get_template_directory_uri() . '/assets/css/main.css' );


}

// Add Scripts
function theme_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), null, true );
}

// Add Woocommerce Support
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
	function mytheme_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
}

// Change the Breadcrumb separator
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter', 20 );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' &raquo; ';
	return $defaults;
}

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
				$output = '<div class="product__image product__image-front">';

        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID, $size, array('class' => 'product__img') );
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
add_action( 'woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image', 15 ) ; 

function add_on_hover_shop_loop_image( $size = 'shop_catalog' ) {
		if(!empty(wc_get_product()->get_gallery_image_ids())) {
			$image_id = wc_get_product()->get_gallery_image_ids()[0] ; 
		
			echo '<div class="product__image product__image-back">';

			if ( $image_id ) {

					echo wp_get_attachment_image( $image_id, array("300", "300"), "", array( "class" => "product__img" ) ) ;

			} else {  //assuming not all products have galleries set

					echo wp_get_attachment_image( wc_get_product()->get_image_id(), array("300", "300"), "", array( "class" => "product__img" ) ) ; 

			}
			echo '</div>';
		} else {
			global $post, $woocommerce;
			$size = 'shop_catalog';
			echo '<div class="product__image product__image-back">';
				if ( has_post_thumbnail() ) {               
            echo get_the_post_thumbnail( $post->ID, $size, array('class' => 'product__img') );
        } else {
             echo wc_placeholder_img( $size );
             // Alternative
						 // $output .= '<img class="123" src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="300px" height="300px" />';
				}
			echo '</div>';
		}
}

// Test 3
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_before_shop_loop_item_wrap', 5 ) ; 
function woocommerce_before_shop_loop_item_wrap( $size = 'shop_catalog' ) {
	echo '<div class="product__images">';
}

// Test 4
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_before_shop_loop_item_wrap_close', 20 ) ; 
function woocommerce_before_shop_loop_item_wrap_close( $size = 'shop_catalog' ) {
	echo '</div>';
}

// Test 5
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 15 );


// Add filter
function woocommerce_template_loop_product_title() {
	echo '<h3 class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'product__title' ) ) . '">' . get_the_title() . '</h3>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

// Add rating element
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating_custom', 5 );
function woocommerce_template_loop_rating_custom() {
	echo '<div class="product__rate"><span class="product__rate-text">Not rated</span></div>';
}

// Change currency symbol
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'UAH': $currency_symbol = ' грн.'; break;
     }
     return $currency_symbol;
}

// Change quantity of produtct on shop page (temporal changes)
// add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 4;' ), 20 );
add_filter( 'loop_shop_per_page', function($cols) {return 8;}, 20 );


// Remove Sidebar sinhle-product
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Add actions to content-single-product page
add_action( 'woocommerce_before_single_product', 'woocommerce_breadcrumb', 13 );
add_action( 'woocommerce_before_single_product', 'add_page_head_wraps', 11 );
function add_page_head_wraps() {
	echo "<div class='page__wrap'>";
	echo "<div class='page__head head-page'>";
}

add_action( 'woocommerce_before_single_product', 'add_page_head_wraps_close', 40 );
function add_page_head_wraps_close() {
	echo "</div'>";
	echo "</div>";
}

// Remove upsale and relate-products on content-single-product (temporal changes)
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action('woocommerce_after_single_product', 'woocommerce_output_related_products', 10);


// Change content-single-product descripton position
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 25 );


function wc_get_gallery_image_html_custom( $attachment_id, $main_image = false ) {
	$flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
	$gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
	$thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
	$image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
	$full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
	$thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
	$full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
	$alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
	$image             = wp_get_attachment_image(
		$attachment_id,
		$image_size,
		false,
		apply_filters(
			'woocommerce_gallery_image_html_attachment_image_params',
			array(
				'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
				'data-src'                => esc_url( $full_src[0] ),
				'data-large_image'        => esc_url( $full_src[0] ),
				'data-large_image_width'  => esc_attr( $full_src[1] ),
				'data-large_image_height' => esc_attr( $full_src[2] ),
				'class'                   => esc_attr( $main_image ? 'galery-card__img' : '' ),
			),
			$attachment_id,
			$image_size,
			$main_image
		)
	);

	return '<a class="galery-card__link magnific" href="' . esc_url( $full_src[0] ) . '">' . $image . '</a>';
}

// Change Stock names
add_filter( 'woocommerce_get_availability', 'custom_get_availability', 1, 2);
function custom_get_availability( $availability, $_product ) {
if ( $_product->is_in_stock() ) $availability['availability'] = __('В наличии', 'woocommerce');
if ( !$_product->is_in_stock() ) $availability['availability'] = __('Нет в наличии', 'woocommerce');
    return $availability;
}


// Off z-lib compression
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


// Change content-single-product
// remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 25 );

// Register header Menu
function theme_register_nav_menu() {
	register_nav_menu( 'first-menu', 'Шапка сайта - меню' ); 
}


// Thumbnail function
function laveri2_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}
	if ( is_singular() ) :
		?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div><!-- .post-thumbnail -->
	<?php else : ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
			?>
		</a>

		<?php
	endif;
}


//  Define image sizes
function yourtheme_woocommerce_image_dimensions() {
	global $pagenow;
 
	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

  	$catalog = array(
		'width' 	=> '300',	// px
		'height'	=> '300',	// px
		'crop'		=> 1 		// true
	);

	$single = array(
		'width' 	=> '456',	// px
		'height'	=> '456',	// px
		'crop'		=> 0 		// true
	);

	$thumbnail = array(
		'width' 	=> '180',	// px
		'height'	=> '180',	// px
		'crop'		=> 0 		// false
	);

	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}

add_action( 'after_switch_theme', 'yourtheme_woocommerce_image_dimensions', 1 );

add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
        'width' => 180,
        'height' => 180,
        'crop' => 0,
    );
} );



// 
add_action( 'woocommerce_shortcode_before_products_loop', 'roka_before_products_shortcode_loop', 1, 10 );
add_action( 'woocommerce_shortcode_after_products_loop', 'roka_after_products_shortcode_loop', 0, 10 );

function roka_before_products_shortcode_loop( $atts ) {
    $GLOBALS[ 'roka_woocommerce_loop_template' ] =
        ( isset( $atts[ 'class' ] ) ? $atts[ 'class' ] : '' );
}

function roka_after_products_shortcode_loop( $atts ) {
    $GLOBALS[ 'roka_woocommerce_loop_template' ] = '';
}

// Change position woocommerce search result
// remove_action( 'woocommerce_no_products_found', 'wc_no_products_found', 10 );
// add_action( 'woocommerce_after_main_content', 'wc_no_products_found', 10 );

// 
// add_action( 'wp', 'per_row' );
// function per_row() {
    
//     if ( is_product_category() ) {
//         add_filter('loop_shop_columns', 'loop_columns');
//             if (!function_exists('loop_columns')) {
//                 function loop_columns() {
//                 return 2; // 5 products per row
//                 }
//             }
//         }
        
//     if( is_product() ){
//         add_filter('loop_shop_columns', 'loop_columns');
//             if (!function_exists('loop_columns')) {
//                 function loop_columns() {
//                 return 2; // 6 products per row
//                 }
//             }
//     }
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