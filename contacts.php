<?php
/*
Template Name: Контакты
Template Post Type: page
*/
?>

<?php get_header(); ?>

<section class="contacts">
    <div class="container">
      <div class="page">
        <div class="page__head head-page">
          <div class="head-page__left">
            <h1 class="head-page__title" style="text-transform: uppercase"><?php the_title() ?></h1>
          </div>
          <div class="head-page__right">
            <div class="breadcrumbs"><a class="breadcrumbs__link" href="<?php bloginfo('url') ?>">Главная</a><span
                class="breadcrumbs__tag">»</span><span class="breadcrumbs__current"><?php the_title() ?></span></div>
          </div>
        </div>
        <div class="contacts__content content-contacts">
          <div class="content-contacts__map"></div>
          <div class="content-contacts__info">
            <table class="content-contacts__table">
              <tbody class="content-contacts__tbody">
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong><?php the_field('first-title') ?></strong></td>
                  <td class="content-contacts__td"><?php the_field('work-time_first') ?></td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"></td>
                  <td class="content-contacts__td"><?php the_field('work-time_second') ?></td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"></td>
                  <td class="content-contacts__td"><?php the_field('work-time_third') ?></td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong><?php the_field('phone-number_title') ?></strong></td>
                  <td class="content-contacts__td"><a class="content-contacts__link" href="tel:<?php the_field('phone-number_call') ?>"><?php the_field('phone-number_phone') ?></a></td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong><?php the_field('email_title') ?></strong></td>
                  <td class="content-contacts__td"><a class="content-contacts__link" href="#"><?php the_field('email') ?></a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer('contacts'); ?>