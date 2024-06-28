<div class="mobile-menu">
	<ul class="mobile-menu-nav">
		<li class="mobile-menu-nav-item">
			<a href="/about.html" class="mobile-menu-link"><?= $page_title ?></a>
		</li>
		<li class="mobile-menu-nav-item">
			<a href="#" class="mobile-menu-link">Контрактное производство</a>
			<ul class="mobile-submenu">
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Автомобильная химия</a></li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Бытовая химия</a></li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
				</li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a></li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Косметическая продукция</a>
				</li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Краски аэрозольные</a></li>
			</ul>
		</li>
		<li class="mobile-menu-nav-item">
			<a href="#" class="mobile-menu-link">Собственные торговые марки</a>
			<ul class="mobile-submenu">
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Автохимия AG-Tech</a></li>
				<li class="mobile-submenu-item"><a class="mobile-submenu-link" href="#">Автохимия AP</a></li>
			</ul>
		</li>
		<li class="mobile-menu-nav-item">
			<a href="#" class="mobile-menu-link">Новости</a>
		</li>
		<li class="mobile-menu-nav-item">
			<a href="#" class="mobile-menu-link">Контакты</a>
		</li>
	</ul>
	<a href="tel:+74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
	<div class="mobile-info">
		<svg class="mark-icon" width="24" height="24">
			<use href="img/sprite.svg#mark"></use>
		</svg>
		<address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
	</div>
	<!-- /.monile-info -->
	<div class="mobile-info">
		<svg class="mail-icon" width="24" height="24">
			<use href="img/sprite.svg#mail"></use>
		</svg>
		<a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
	</div>
	<!-- /.monile-info -->
	<div class="mobile-info">
		<a href="#" class="mobile-info-vk">
			<svg class="vk-icon" width="24" height="24">
				<use href="img/sprite.svg#vk"></use>
			</svg>
		</a>
		<a href="#" class="mobile-info-inst">
			<svg class="inst-icon" width="24" height="24">
				<use href="img/sprite.svg#inst"></use>
			</svg>
		</a>
	</div>
	<!-- /.monile-info -->
</div>
<!-- /.mobile-menu -->
<nav class="navbar navber-light">
	<a href="#" class="mobile-menu-toggle">
		<div class="mobile-menu-line"></div>
		<div class="mobile-menu-line"></div>
		<div class="mobile-menu-line"></div>
	</a>
	<a href="./" class="header-logo">
		<svg class="logo-svg">
			<use href="img/sprite.svg#logo"></use>
		</svg>
	</a>
	<ul class="header-nav">
		<li class="header-nav-item">
			<a href="#" class="header-nav-link"><?= $page_title ?></a>
		</li>
		<li class="header-nav-item">
			<a href="#" class="header-nav-link">Контрактное производство</a>
		</li>
		<li class="header-nav-item">
			<a href="#" class="header-nav-link">Собственные торговые марки</a>
		</li>
		<li class="header-nav-item">
			<a href="#" class="header-nav-link">Новости</a>
		</li>
		<li class="header-nav-item">
			<a href="#" class="header-nav-link">Контакты</a>
		</li>
	</ul>
	<div class="header-phone">
		<svg class="phone-icon" width="24" height="24">
			<use href="img/sprite.svg#phone"></use>
		</svg>
		<a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
	</div>
	<!-- /.header-phone -->
	<button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
		<svg class="button-icon" width="24" height="24">
			<use href="img/sprite.svg#phone"></use>
		</svg>
		<span class="button-text">Получить консультацию</span>
	</button>
</nav>
<!-- /.navbar -->