<?php
/*
Template Name: Стандартная страница
Template Post Type: page
*/
?>

<?php get_header(); ?>

	<section class="brand">
    <div class="container">
      <div class="page">
        <div class="page__head head-page">
          <div class="head-page__left">
            <h1 class="head-page__title"><?php the_title() ?></h1>
          </div>
          <div class="head-page__right">
            <div class="breadcrumbs"><a class="breadcrumbs__link" href="<?php bloginfo('url') ?>">Главная</a><span
                class="breadcrumbs__tag">»</span><span class="breadcrumbs__current"><?php the_title() ?></span></div>
          </div>
        </div>
        <div class="page__content">
					<?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>