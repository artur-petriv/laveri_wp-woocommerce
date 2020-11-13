<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package laveri2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="page__head head-page">
		<div class="head-page__left">
			<h1 class="head-page__title"><?php the_title() ?></h1>
		</div>
		<div class="head-page__right">
			<div class="breadcrumbs"><a class="breadcrumbs__link" href="<?php bloginfo('url') ?>">Home</a><span
					class="breadcrumbs__tag">»</span><span class="breadcrumbs__current"><?php the_title() ?></span></div>
		</div>
	</div>


	<div class="page__content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'laveri2' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .page__content -->

</article><!-- #post-<?php the_ID(); ?> -->
