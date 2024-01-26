<!DOCTYPE html>
<html lang="ru">

<head>
	<?php
	$page_title = 'Комплексное обеспечение товарами и расходными материалами бизнеса.';
	include_once('head.php'); ?>
</head>

<body class="front-page">
	<header class="header header-image">

		<?php include_once('menu.php'); ?>

		<div class="container">
			<div class="header-content">
				<div class="seporator"></div>
				<h1 class="header-title">Комплексное обеспечение товарами <br />и расходными материалами бизнеса</h1>
				<p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким
					доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа
					существующих паттернов поведения.</p>
				<button class="button">Подробнее о компании</button>
			</div>
			<!-- /.header-content -->

			<!-- Slider main container -->
			<div class="swiper features-slider">
				<!-- Additional required wrapper -->
				<ul class="swiper-wrapper header-features">
					<!-- Slides -->
					<li class="swiper-slide header-features-item">
						<svg class="logo-svg" width="36" height="36">
							<use href="img/sprite.svg#time"></use>
						</svg>
						<p class="header-features-text">Непрерывная работа <br />c 2017 года</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36" height="36">
							<use href="img/sprite.svg#certoficate"></use>
						</svg>
						<p class="header-features-text">Вся продукция сертифицирована</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36" height="36">
							<use href="img/sprite.svg#control"></use>
						</svg>
						<p class="header-features-text">Контроль качества <br />на всех этапах</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36" height="36">
							<use href="img/sprite.svg#delivery"></use>
						</svg>
						<p class="header-features-text">Возможны поставки по всей России</p>
					</li>
					<li class="swiper-slide header-features-item">
						<svg width="36" height="36">
							<use href="img/sprite.svg#speed"></use>
						</svg>
						<p class="header-features-text">Оперативное производство</p>
					</li>
				</ul>

				<!-- If we need navigation buttons -->
				<div class="slider-buttons">
					<div class="slider-button-prev">
						<svg width="36" height="24">
							<use href="img/sprite.svg#arrow-prev"></use>
						</svg>
					</div>
					<div class="slider-button-next">
						<svg width="36" height="24">
							<use href="img/sprite.svg#arrow-next"></use>
						</svg>
					</div>
				</div>
				<!-- /.slider-buttons -->
			</div>
		</div>
		<!-- /.container -->
	</header>
	<?php include_once('./tempate-parts/slider-1.php'); ?>
	<!-- /.section slider-1 -->
	<?php $block_title = "Контрактное производство";
	include_once('./tempate-parts/contract-block.php'); ?>
	<!-- /.section contract -->
	<?php $block_title = "Собственные торговые марки";
	include_once('./tempate-parts/tradmarks-block.php'); ?>
	<!-- /.section tradmarks -->
	<?php include_once('./tempate-parts/founder-block.php'); ?>
	<!-- /.section founder -->
	<?php include_once('./tempate-parts/clients-block.php'); ?>
	<!-- /.section clients -->
	<section class="section blog">
		<div class="container">
			<div class="seporator"></div>
			<h2 class="section-title">Блог экспертов в области производства</h2>
			<!-- Slider main container -->
			<div class="swiper blog-slider">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<a href="#" class="swiper-slide blog-card">
						<img src="img/blog/blog-1.jpg" alt="Post-1" class="blog-card-image">
						<h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
						<p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
							экономическую ситуацию, в равной степени предоставлены...</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<img src="img/blog/blog-2.jpg" alt="Post-2" class="blog-card-image">
						<h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
						<p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально
							разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
					</a>
					<a href="#" class="swiper-slide blog-card">
						<img src="img/blog/blog-1.jpg" alt="Post-3" class="blog-card-image">
						<h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
						<p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую
							экономическую ситуацию, в равной степени предоставлены...</p>
					</a>
				</div>

				<div class="blog-slider-footer">
					<a href="#" class="button-link">Весь блог</a>
					<!-- If we need navigation buttons -->
					<div class="blog-buttons primary-buttons-wrapper">
						<!-- If we need navigation buttons -->
						<div class="blog-button-prev primary-button-prev">
							<svg width="36" height="24">
								<use href="img/sprite.svg#arrow-prev"></use>
							</svg>
						</div>
						<div class="blog-button-next primary-button-next">
							<svg width="36" height="24">
								<use href="img/sprite.svg#arrow-next"></use>
							</svg>
						</div>
					</div>
					<!-- blog-buttons -->

				</div>
				<!-- /.blog-slider-footer -->
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- /.section blog -->

	<?php include_once('footer.php'); ?>

</body>

</html>