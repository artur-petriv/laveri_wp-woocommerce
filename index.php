<?php
/*
Template Name: Главная Кастом
Template Post Type: page
*/
?>

<?php get_header(); ?>

	<div class="slider-main">
		<div class="container">
			<div class="swiper-container slider-main__slider">
				<div class="swiper-wrapper">
					<div class="slider-main__item swiper-slide"><img class="slider-main__img" src="<?php the_field('slider_image_1', '58'); ?>" alt="Bag"><a
							class="slider-main__link" href="./card.html">Подробнее<svg class="icon-arrow-right slider-main__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-right"></use>
							</svg></a></div>
					<div class="slider-main__item swiper-slide"><img class="slider-main__img" src="<?php the_field('slider_image_2', '58'); ?>" alt="Bag"><a
							class="slider-main__link" href="./card.html">Подробнее<svg class="icon-arrow-right slider-main__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-right"></use>
							</svg></a></div>
					<div class="slider-main__item swiper-slide"><img class="slider-main__img" src="<?php the_field('slider_image_3', '58'); ?>" alt="Bag"><a
							class="slider-main__link" href="./card.html">Подробнее<svg class="icon-arrow-right slider-main__icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-right"></use>
							</svg></a></div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
	<section class="featured-products">
		<div class="container">
			<h2 class="featured-products__title">Популярные товары</h2>
			<div class="featured-products__list">
				<?php echo do_shortcode('[products class="swiper-container similar-products__slider" limit="8" columns="1" orderby="date" order="DESC" visibility="visible"]'); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>