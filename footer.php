<section class="cta">
	<div class="bg-grey section-cta">
		<img src="img/cta.png" alt="cta" class="cta-image">
		<div class="cta-form-wrapper container">
			<form action="handler.php" method="POST" class="cta-form">
				<h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
				<p class="cta-form-text">
					Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
					поможем даже в самых сложных случаях!
				</p>
				<div class="input-group-wrapper">
					<div class="input-group">
						<input id="user-name" type="text" name="username" class="input" placeholder=" " required>
						<label class="input-group-label" for="user-name">Имя</label>
					</div>
					<!-- /.input-group -->
					<div class="input-group">
						<input id="user-phone" type="tel" name="userphone" class="input" placeholder=" " required>
						<label class="input-group-label" for="user-phone">Номер телефона</label>
					</div>
					<!-- /.input-group -->
				</div>
				<!-- /.input-group-wrapper -->
				<div class="cta-form-footer">
					<button type="submit" class="button cta-form-button">Отправить заявку</button>
					<div class="notify">
						<svg class="notify-icon" width="12" height="12">
							<use href="img/sprite.svg#shield"></use>
						</svg>
						<p class="notify-text">
							Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
							конфиденциальность
							информации!
						</p>
					</div>
				</div>
			</form>
			<!-- /.cta-form -->
		</div>
		<!-- /.cta-form-wrapper -->
	</div>
</section>
<!-- /.cta -->
<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<svg class="logo-svg footer-logo">
				<use href="img/sprite.svg#logo"></use>
			</svg>
			<a href="Tel:+74996861014" class="footer-phone">+7 (499) 686-10-14</a>
			<div class="footer-info">
				<svg class="mark-icon" width="24" height="24">
					<use href="img/sprite.svg#mark"></use>
				</svg>
				<address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
			</div>
			<!-- /.footer-info -->
			<div class="footer-info">
				<svg class="mail-icon" width="24" height="24">
					<use href="img/sprite.svg#mail"></use>
				</svg>
				<a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
			</div>
			<!-- /.footer-info -->
			<div class="footer-social">
				<a href="#" class="footer-socia-link">
					<svg class="vk-icon" width="24" height="24">
						<use href="img/sprite.svg#vk"></use>
					</svg>
				</a>
				<a href="#" class="footer-social-link">
					<svg class="inst-icon" width="24" height="24">
						<use href="img/sprite.svg#inst"></use>
					</svg>
				</a>
			</div>
			<!-- /.footer-social -->
		</div>
		<!-- /.footer-top -->
	</div>
	<hr class="footer-seporator" />
	<div class="container">
		<div class="footer-bottom">
			<div class="footer-menu-wrapper">
				<h2 class="footer-menu-title">Контрактное производство</h2>
				<ul class="footer-menu-list footer-menu-column-2">
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Автомобильная химия</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Бытовая химия</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Дезинфицирующие средства</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Пищевые аэрозоли</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Косметическая продукция</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Краски аэрозольные</a></li>
				</ul>
			</div>
			<!-- /.footer-menu-wrapper -->
			<div class="footer-menu-wrapper">
				<h2 class="footer-menu-title">Собственные марки</h2>
				<ul class="footer-menu-list">
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AG-Tech</a></li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link">Автохимия AP</a></li>
				</ul>
			</div>
			<!-- /.footer-menu-wrapper -->
			<div class="footer-menu-wrapper">
				<ul class="footer-menu-list">
					<li class="footer-menu-item"><a href="/about.php" class="footer-menu-link footer-menu-link-bold">О компании</a>
					</li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
					</li>
					<li class="footer-menu-item"><a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
					</li>
				</ul>
			</div>
			<!-- /.footer-menu-wrapper -->
		</div>
		<!-- /.footer-bottom -->
	</div>
	<!-- /.container -->
	<hr class="footer-seporator" />
	<div class="container">
		<div class="footer-wrapper">
			<div class="footer-legal">
				<p class="copyright">© <?php echo date('Y') ?> «Aliance Production». Все права защищены.</p>
				<a href="#" class="footer-policy">Политики конфиденциальности</a>
			</div>
			<!-- /.footer-legal -->
			<div class="footer-author">
				<span class="made-in">Сделано в</span>
				<svg class="ruso-icon" width="52" height="11">
					<use href="img/sprite.svg#RUSO"></use>
				</svg>
			</div>
			<!-- /.footer-author -->
		</div>
		<!-- /.footer-wrapper -->
	</div>
	<!-- /.container -->
</footer>
<!-- /.footer -->
<div class="modal">
	<div class="modal-dilog">
		<h2 class="modal-title">Есть вопросы?</h2>
		<a href="" class="modal-close">
			<svg class="close-icon" width="24" height="24">
				<use href="img/sprite.svg#close"></use>
			</svg>
		</a>
		<p class="modal-text">
			Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и
			поможем даже в самых сложных случаях!
		</p>
		<form action="handler.php" method="POST" class="modal-form">
			<div class="input-group-wrapper input-group-vertical">
				<div class="input-group modal-input-group">
					<input id="modal-user-name" type="text" class="input modal-input" name="username" placeholder=" " required>
					<label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
				</div>
				<!-- /.input-group -->
				<div class="input-group modal-input-group">
					<input id="modal-user-phone" type="tel" class="input modal-input" name="userphone" placeholder=" " required>
					<label class="input-group-label modal-input-label" for="modal-user-phone">Номер телефона</label>
				</div>
				<!-- /.input-group -->
			</div>
			<!-- /.input-group-wrapper -->
			<div class="modal-form-footer">
				<button type="submit" class="button modal-form-button">Отправить заявку</button>
				<div class="notify">
					<svg class="notify-icon" width="12" height="12">
						<use href="img/sprite.svg#shield"></use>
					</svg>
					<p class="notify-text">
						Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную
						конфиденциальность
						информации!
					</p>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="modal sucsess">
	<div class="modal-dilog">
		<h2 class="modal-sucsess-title">Спасибо за заявку!</h2>
		<img src="img/thanks.png" width="360" height="310" alt="thanks">
		<a href="" class="modal-close">
			<svg class="close-icon" width="24" height="24">
				<use href="img/sprite.svg#close"></use>
			</svg>
		</a>
		<p class="modal-sucsess-text">
			Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
		</p>
		<a href="/" class="button modal-sucsess-button">Вернуться на главную</a>
	</div>
</div>
<!--Swiper-->
<script src="libs/swiper/js/swiper-bundle.min.js"></script>
<script src="js/just-validate.production.min.js"></script>
<script src="js/common.js"></script>