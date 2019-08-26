<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?apikey=bb5a6aff-2144-414d-87dc-ed5295dd426a
&lang=ru_RU" type="text/javascript"></script>
	<title>Глазовские валенки</title>
</head>
<body>
	<header>
		<div class="first-line border-line">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 d-flex align-items-center">
						<a class="fancybox" href="#inline1">
							<img src="img/icons/placemark.png" alt="" class="placemarkImg">
						</a>
						<div id="inline1" style=" display: none;">
							<div class="card">
								<div class="card-header">
									<h1>Карта</h1>
								</div>
								<div class="card-body">
									<div class="topMap">
										<div id="myMapModal" style="width:auto;height:100%"></div>
									</div>
								</div>
							</div>
						</div>
						<p>Удмуртия, г. Глазов, ул. Глинки 2</p>
					</div>
					<div class="col-lg-4 offset-lg-1">
						<form action="" method="post" class="search">
							<input type="search" name="" placeholder="поиск" class="input" />
							<input type="submit" name="" value="" class="submit" />
						</form>
					</div>
					<div class="col-lg-5 first-line-info">
						<div>
							<p>Salex73@ya.ru</p>
						</div>
						<div class="blueBtnDiv greenTranspBtnDiv">
							<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
								<button class="blueBtn greenTranspBtn">ЗАКАЗАТЬ ЗВОНОК</button>
							</a>
								<div style="display: none;" id="orderCall" class="animated-modal">
									<div class="card">
										<div class="card-header">
											<h1>Заказать звонок</h1>
										</div>
										<div class="card-body">
											<form>
												<input type="text" placeholder="Имя">
												<input type="tel" placeholder="Номер телефона">
												<p>
													Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a>
												</p>
												<a data-fancybox data-animation-duration="700" data-src="#thanks" href="javascript:;">
													<input type="submit" placeholder="Заказать" class="greenBtn">
												</a>
											</form>
										</div>
									</div>
								</div>
								<div style="display: none;" id="thanks" class="animated-modal">
									<div class="card">
										<div class="card-header">
											<h1>Спасибо</h1>
										</div>
										<div class="card-body">
											<p>
												Ваша заявка успешно принята.
											</p>
											<button class="greenBtn" data-fancybox-close>Закрыть</button>
										</div>
									</div>
								</div>
						</div>
						<div>
							<p>+7 (34141) 3 84 94</p>
							<p>+7 (919) 910 64 83</p>
						</div>
						<div>
							<a href="page-basket.php">
								<img src="img/icons/basket.svg">
								<div class="counter">
									<p>2</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="second-line container">
			<div class="row">
				<div class="col-lg-2">
					<a href="index.php">
						<img src="img/logo.png" alt="">
					</a>
				</div>
				<div class="col-lg-10">
					<nav>
						<ul class="topmenu">
							<li><a href="">Главная</a></li>
							<li><a href="">О компании</a></li>
							<li><div class="li-div"><a href="" class="submenu-link">Каталог</a><div class="redArrow"></div></div>
								<ul class="submenu">
									<li><a href="">Женские валенки</a></li>
									<li><a href="">Мужские валенки</a></li>
									<li><a href="">Детские валенки</a></li>
								</ul>
							</li>
							<li><a href="">Оптовикам</a></li>
							<li><a href="">Новости и акции</a></li>
							<li><div class="li-div"><a href="" class="submenu-link">Для клиента </a><div class="redArrow"></div></div>
								<ul class="submenu">
									<li><a href="">Женские валенки</a></li>
									<li><a href="">Мужские валенки</a></li>
									<li><a href="">Детские валенки</a></li>
								</ul>
							</li>
							<li><a href="">Отзывы</a></li>
							<li><a href="">Контакты</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="mobile-line container">
			<div class="row">
				<div class="col-auto">
					<div id="nav-icon3">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</div>
				<div class="men">
					<ul class="topmenu">
						<li><a href="">Главная</a></li>
						<li><a href="">О компании</a></li>
						<li><div class="li-div"><a href="" class="submenu-link">Каталог</a> <div class="redArrow"></div></div>
							<ul class="submenu ssaaas">
								<li><a href="">Женские валенки</a></li>
								<li><a href="">Мужские валенки</a></li>
								<li><a href="">Детские валенки</a></li>
							</ul>
						</li>
						<li><a href="">Оптовикам</a></li>
						<li><a href="">Новости и акции</a></li>
						<li> <div class="li-div"> <a href="" class="submenu-link">Для клиента </a> <div class="redArrow"></div></div>
							<ul class="submenu">
								<li><a href="">Женские валенки</a></li>
								<li><a href="">Мужские валенки</a></li>
								<li><a href="">Детские валенки</a></li>
							</ul>
						</li>
						<li><a href="">Отзывы</a></li>
						<li><a href="">Контакты</a></li>
					</ul>
					<div class="prelast-mobile-line">
						<div class="col-6">
							<p><a href="tel:+7 (34141) 3 84 94">+7 (34141) 3 84 94</a>  <a href="tel:+7 (919) 910 64 83">+7 (919) 910 64 83</a></p>
						</div>
						<div class="col-6">
							<p><a href="mailto:Salex73@ya.ru">Salex73@ya.ru</a></p>
							<a data-fancybox data-animation-duration="700" data-src="#orderCall" href="javascript:;">
								<div class="blueBtnDiv greenTranspBtnDiv">
									<button class="blueBtn greenTranspBtn">ЗАКАЗАТЬ ЗВОНОК</button>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 last-mobile-line">
						<a class="fancybox" href="#inline1">
							<img src="img/icons/placemarkMob.svg">
						</a>
						<a href="tel:+7 (34141) 3 84 94">
							<img src="img/icons/call-answer.svg">
						</a>
						<a href="page-basket.php">
							<img src="img/icons/basketMob.svg">
						</a>
					</div>
				</div>
				<div class="col-auto">
					<a href="index.php" class="mobile-home-link">
						<img src="img/logo-mobile.png">
					</a>
				</div>
				<div class="col-auto">
					<div class="search-container">
					  <input type="text" placeholder="Поиск">
					  <div class="search"></div>
					</div>
				</div>
			</div>
		</div>
	</header>