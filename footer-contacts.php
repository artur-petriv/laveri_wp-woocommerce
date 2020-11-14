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
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="#"><svg
										class="icon-facebook content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#facebook"></use>
									</svg></a></li>
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="#"><svg
										class="icon-instagram content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#instagram"></use>
									</svg></a></li>
							<li class="content-footer__item content-footer__item_social"><a class="content-footer__link" href="#"><svg
										class="icon-vk content-footer__icon">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/img/sprite.svg#vk"></use>
									</svg></a></li>
						</ul>
					</div>
				</div>
				<div class="footer__copyright"><span class="footer__text">© 2020 Laveri</span></div>
			</div>
		</div>
	</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<?php wp_footer(); ?>
	<script>
		 // Google maps function
    function initMap() {
        const map = new google.maps.Map(document.querySelector(`.content-contacts__map`), {
            center: {
                lat: 50.4608176,
                lng: 30.4949624,
            },
            zoom: 14,
            disableDefaultUI: !0,
        })

        const marker = new google.maps.Marker({
            position: { lat: 50.4609176, lng: 30.4956624 },
            map,
        })
        marker.addListener(`click`, function () {})
    }

    // Init gooogle map
    // initMap()
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvt_XnVi4vJyFx1LhfRK_tm-5F3IPhOj0&amp;language=ru&amp;callback=initMap" async="" defer=""></script>
</body>

</html>