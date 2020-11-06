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
            <h1 class="head-page__title" style="text-transform: uppercase"><?php the_title() ?></h1><span
              class="head-page__descr">Контакты / Шоу-рум</span>
          </div>
          <div class="head-page__right">
            <div class="breadcrumbs"><a class="breadcrumbs__link" href="<?php bloginfo('url') ?>">Home</a><span
                class="breadcrumbs__tag">»</span><span class="breadcrumbs__current"><?php the_title() ?></span></div>
          </div>
        </div>
        <div class="contacts__content content-contacts">
          <div class="content-contacts__map"></div>
          <div class="content-contacts__info">
            <table class="content-contacts__table">
              <tbody class="content-contacts__tbody">
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong>Шоу-рум</strong></td>
                  <td class="content-contacts__td">Время работы:</td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"></td>
                  <td class="content-contacts__td">Пн-Пт — с 9.00 до 19.00</td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"></td>
                  <td class="content-contacts__td">Сб-Вс — выходной</td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong>Конакты:</strong></td>
                  <td class="content-contacts__td"><a class="content-contacts__link" href="#">(090) 410-10-25</a></td>
                </tr>
                <tr class="content-contacts__tr">
                  <td class="content-contacts__td"><strong>E-mail:</strong></td>
                  <td class="content-contacts__td"><a class="content-contacts__link" href="#">info@baneli.com.ua</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>