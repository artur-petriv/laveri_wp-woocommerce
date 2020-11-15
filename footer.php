	<footer class="footer">
		<div class="container">
			<div class="footer__wrap">
				<div class="footer__content content-footer">
					<div class="content-footer__column">
						<h4 class="content-footer__title">Laveri</h4>
						<ul class="content-footer__list">
							<li class="content-footer__item"><a class="content-footer__link" href="<?php bloginfo('url') ?>/brand/">О бренде</a></li>
							<li class="content-footer__item"><a class="content-footer__link" href="<?php bloginfo('url') ?>/contacts/">Контакты</a></li>
							<li class="content-footer__item"><a class="content-footer__link" href="<?php bloginfo('url') ?>/agreement/">Условия
									использования</a></li>
						</ul>
					</div>
					<div class="content-footer__column">
						<h4 class="content-footer__title">Покупателям</h4>
						<ul class="content-footer__list">
							<li class="content-footer__item"><a class="content-footer__link" href="<?php bloginfo('url') ?>/delivery/">Оплата и
									доставка</a></li>
							<li class="content-footer__item"><a class="content-footer__link" href="<?php bloginfo('url') ?>/faq/">FAQ</a></li>
						</ul>
					</div>
					<div class="content-footer__column">
						<h4 class="content-footer__title">Категории товаров</h4>
						<ul class="content-footer__list">
							<li class="content-footer__item"><a class="content-footer__link content-footer__link_category"
									href="./catalog.html">Сумки</a></li>
						</ul>
					</div>
					<div class="content-footer__column">
						<h4 class="content-footer__title">Подписывайтесь</h4>
						<ul class="content-footer__list content-footer__list_socials">
							<?php if( get_field('facebook', '58') ): ?>
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="<?php the_field('facebook_link', '58'); ?>"><svg
										class="icon-facebook content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#facebook"></use>
									</svg></a></li>
							<?php endif; ?>
							<?php if( get_field('instagram', '58') ): ?>
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="<?php the_field('instagram_link', '58'); ?>"><svg
										class="icon-instagram content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#instagram"></use>
									</svg></a></li>
							<?php endif; ?>
							<?php if( get_field('vkontakte', '58') ): ?>
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="<?php the_field('vkontakte_link', '58'); ?>"><svg
										class="icon-vk content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
									</svg></a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="footer__copyright"><span class="footer__text">© 2020 Laveri</span></div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.magnific').magnificPopup({
        type: 'image',
        gallery: {
          enabled: true,
        },
      });
    });
  </script>
</body>

</html>