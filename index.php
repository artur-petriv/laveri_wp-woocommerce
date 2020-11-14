<?php
/*
Template Name: Главная Кастом
Template Post Type: page
*/
?>

<?php get_header(); ?>

	<div class="slider-main">
		<div class="container">
			<div class="swiper-container">
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
			<h2 class="featured-products__title">Featured Products</h2>
			<div class="featured-products__list">
				<div class="product"><a class="product__link" href="./card.html">
						<div class="product__images">
							<div class="product__image product__image-front"><img class="product__img" src="img/product_01.jpg"
									alt="Product"></div>
							<div class="product__image product__image-back"><img class="product__img" src="img/product_02.jpg"
									alt="Product"></div>
						</div>
					</a><a class="product__link" href="./card.html">
						<h3 class="product__title">Сумка Bordon синий крокодил</h3>
					</a>
					<div class="product__rate"><span class="product__rate-text">Not rated</span></div>
					<div class="product__price">2500 грн.</div><a class="product__button">В корзину</a>
				</div>
				<div class="product"><a class="product__link" href="./card.html">
						<div class="product__images">
							<div class="product__image product__image-front"><img class="product__img" src="img/product_01.jpg"
									alt="Product"></div>
							<div class="product__image product__image-back"><img class="product__img" src="img/product_02.jpg"
									alt="Product"></div>
						</div>
					</a><a class="product__link" href="./card.html">
						<h3 class="product__title">Сумка Bordon синий крокодил</h3>
					</a>
					<div class="product__rate"><span class="product__rate-text">Not rated</span></div>
					<div class="product__price">2500 грн.</div><a class="product__button">В корзину</a>
				</div>
				<div class="product"><a class="product__link" href="./card.html">
						<div class="product__images">
							<div class="product__image product__image-front"><img class="product__img" src="img/product_01.jpg"
									alt="Product"></div>
							<div class="product__image product__image-back"><img class="product__img" src="img/product_02.jpg"
									alt="Product"></div>
						</div>
					</a><a class="product__link" href="./card.html">
						<h3 class="product__title">Сумка Bordon синий крокодил</h3>
					</a>
					<div class="product__rate"><span class="product__rate-text">Not rated</span></div>
					<div class="product__price">2500 грн.</div><a class="product__button">В корзину</a>
				</div>
				<div class="product"><a class="product__link" href="./card.html">
						<div class="product__images">
							<div class="product__image product__image-front"><img class="product__img" src="img/product_01.jpg"
									alt="Product"></div>
							<div class="product__image product__image-back"><img class="product__img" src="img/product_02.jpg"
									alt="Product"></div>
						</div>
					</a><a class="product__link" href="./card.html">
						<h3 class="product__title">Сумка Bordon синий крокодил</h3>
					</a>
					<div class="product__rate"><span class="product__rate-text">Not rated</span></div>
					<div class="product__price">2500 грн.</div><a class="product__button">В корзину</a>
				</div>
				<div class="product"><a class="product__link" href="./card.html">
						<div class="product__images">
							<div class="product__image product__image-front"><img class="product__img" src="img/product_01.jpg"
									alt="Product"></div>
							<div class="product__image product__image-back"><img class="product__img" src="img/product_02.jpg"
									alt="Product"></div>
						</div>
					</a><a class="product__link" href="./card.html">
						<h3 class="product__title">Сумка Bordon синий крокодил</h3>
					</a>
					<div class="product__rate"><span class="product__rate-text">Not rated</span></div>
					<div class="product__price">2500 грн.</div><a class="product__button">В корзину</a>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>