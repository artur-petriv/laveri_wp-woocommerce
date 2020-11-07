<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title>LAVERI - accessories and bags brand shop</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="ie=edge" http-equivx="x-ua-compatible">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&amp;display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
	<header class="header">
		<div class="header__bar">
			<div class="container">
				<div class="header__bar-wrap">
					<div class="search">
						<form class="search__form"><input class="search__input" type="text" name="search" method="get"
								placeholder="Искать"><button class="search__submit" type="submit"><svg
									class="icon-magnifier search__icon">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#magnifier"></use>
								</svg></button></form>
					</div>
					<div class="header__content">
						<ul class="header__socials">
							<li class="header__social"><a class="header__social-link" href="#"><svg
										class="icon-facebook header__social-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#facebook"></use>
									</svg></a></li>
							<li class="header__social"><a class="header__social-link" href="#"><svg
										class="icon-vk header__social-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
									</svg></a></li>
							<li class="header__social"><a class="header__social-link" href="#"><svg
										class="icon-instagram header__social-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#instagram"></use>
									</svg></a></li>
							<li class="header__social"><a class="header__social-link" href="#"><svg
										class="icon-phone header__social-icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#phone"></use>
									</svg></a></li>
						</ul><a class="header__cart cart-header" href="#"><svg class="icon-cart header__cart-icon">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#cart"></use>
							</svg><span class="cart-header__title">Ваша корзина</span><span class="cart-header__dash">-</span><span
								class="cart-header__amount">0 грн.</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="header__menu">
			<div class="container">
				<nav class="header__nav nav-header">
					<ul class="nav-header__list">
						<li class="nav-header__item"><a class="nav-header__link" href="/laveri/brand/">
								<h4 class="nav-header__title">О бренде</h4>
							</a></li>
						<li class="nav-header__item"><a class="nav-header__link" href="/laveri/shop/">
								<h4 class="nav-header__title">Каталог</h4>
							</a></li>
						<li class="nav-header__item"><a class="nav-header__link" href="<?php bloginfo('url') ?>"><svg class="icon-logo header__logo">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#logo"></use>
								</svg></a></li>
						<li class="nav-header__item"><a class="nav-header__link" href="/laveri/contacts/">
								<h4 class="nav-header__title">Контакты</h4>
							</a></li>
						<li class="nav-header__item"><a class="nav-header__link" href="/laveri/delivery/">
								<h4 class="nav-header__title">Доставка</h4>
							</a></li>
						<li class="nav-header__mobile"><button class="hamburger hamburger--spin" type="button"><span
									class="hamburger-box"><span class="hamburger-inner"></span></span></button></li>
					</ul>
				</nav>
				<div class="nav-mob">
					<div class="nav-mob__wrap">
						<ul class="nav-mob__list">
							<li class="nav-mob__item"><a class="nav-mob__link" href="<?php bloginfo('url') ?>">Главная</a></li>
							<li class="nav-mob__item"><a class="nav-mob__link" href="./catalog.html">Каталог</a></li>
							<li class="nav-mob__item"><a class="nav-mob__link" href="./contacts.html">Контакты</a></li>
							<li class="nav-mob__item"><a class="nav-mob__link" href="./delivery.html">Доставка</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>