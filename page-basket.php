<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Корзина</li>
		 	</ol>
		</div>
	</div>
	<section class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Корзина</h1>
				</div>
				<div class="col-12">
					<div class="basket-card">
						<div class="col-lg-1 col-12 basket-card-div justify-content-end">
							<div class="basket-card-img imgw100">
								<img src="img/product-img.png">
							</div>
						</div>
						<div class="col-lg-2 col-12 basket-card-div pl-5">
							<p>Название товара в две строчки</p>
						</div>
						<div class="col-lg-2 col-12 offset-lg-1 offset-0 basket-card-div justify-content-lg-start justify-content-center">
							<p>Артикул - 12345</p>
						</div>
						<div class="col-lg-2 col-12 justify-content-lg-end justify-content-center basket-card-div">
							<div class="d-flex cardValue">
								<button class="dec">-</button>
									<input type="text" value="1"/>
								<button class="inc">+</button>
							</div>
						</div>
						<div class="col-lg-3 col-12 basket-card-div justify-content-center">
							<p>Стоимость: </p>
							<p class="price">1 800 ₽</p>
						</div>
						<div class="col-lg-1 order-lg-last order-first">
							<img src="img/icons/close.svg" class="delete-basket-product">
						</div>
					</div>
					<div class="basket-card">
						<div class="col-lg-1 col-12 basket-card-div justify-content-end">
							<div class="basket-card-img imgw100">
								<img src="img/product-img.png">
							</div>
						</div>
						<div class="col-lg-2 col-12 basket-card-div pl-5">
							<p>Название товара в две строчки</p>
						</div>
						<div class="col-lg-2 col-12 offset-lg-1 offset-0 basket-card-div justify-content-lg-start justify-content-center">
							<p>Артикул - 12345</p>
						</div>
						<div class="col-lg-2 col-12 justify-content-lg-end justify-content-center basket-card-div">
							<div class="d-flex cardValue">
								<button class="dec">-</button>
									<input type="text" value="1"/>
								<button class="inc">+</button>
							</div>
						</div>
						<div class="col-lg-3 col-12 basket-card-div justify-content-center">
							<p>Стоимость: </p>
							<p class="price">1 800 ₽</p>
						</div>
						<div class="col-lg-1 order-lg-last order-first">
							<img src="img/icons/close.svg" class="delete-basket-product">
						</div>
					</div>
					<div class="basket-finak-card">
						<div class="col-lg-3 col-12 basket-card-div">
							<img src="img/icons/close.svg" class="clear-basket">
							<p>Очистить корзину</p>
						</div>
						<div class="col-lg-3 col-12 total basket-card-div order-first order-lg-last">
							<p>Итог:</p>
							<p class="total-price">3 600 ₽</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Способ доставки</h1>
				</div>
				<div class="col-lg-auto col-6">
					<div class="delivery-way">
						<p>Самовывоз</p>
					</div>
				</div>
				<div class="col-lg-auto col-6">
					<div class="delivery-way">
						<p>СДЭК</p>
					</div>
				</div>
				<div class="col-lg-auto col-6">
					<div class="delivery-way">
						<p>Почта России</p>
					</div>
				</div>
				<div class="col-lg-auto col-6">
					<div class="delivery-way">
						<p>Транспортная компания</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Ваши данные</h1>
				</div>
			</div>
			<div class="row">
				<form class="order-form">
					<div class="col-lg-4 order-0">
						<input type="text" placeholder="ФИО">
						<input type="text" placeholder="Страна">
					</div>
					<div class="col-lg-2 order-0">
						<input type="email" placeholder="E-mail">
						<input type="text" placeholder="Город">
					</div>
					<div class="col-lg-2 order-0">
						<input type="tel" placeholder="Номер телефона">
						<input type="number" placeholder="Почтовый индекс">
					</div>
					<div class="col-lg-4 order-lg-0 order-2">
						<textarea placeholder="Комментарий"></textarea>
					</div>

					<div class="col-lg-7 order-lg-0 order-1">
						<input type="text" placeholder="Адрес" class="">
					</div>
					<div class="col-lg-3 order-lg-0 order-3">
						<p>Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a></p>
					</div>
					<div class="col-lg-2 ml-auto order-lg-0 order-4">
						<input type="submit" class="greenBtn">
					</div>
				</form>
			</div>
		</div>
	</section>

<?php
	include('html-end.php');
?>