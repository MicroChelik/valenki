<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
		    	<li class="breadcrumb-item"><a href="index.php">Каталог</a></li>
		    	<li class="breadcrumb-item"><a href="index.php">Подраздел каталога</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Подраздел каталога</li>
		 	</ol>
		</div>
	</div>
	<section class="product-details">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-5">
					<div class="slider-product">
						<div class="product-card">
							<img src="img/product-img.png" class="product-img">
							<p class="product-new">
								н<br>о<br>в<br>и<br>н<br>к<br>а
							</p>
						</div>
						<div class="product-card">
							<img src="img/product-img.png" class="product-img">
							<p class="product-sale"><img src="img/icons/percent.svg"></p>
						</div>
						<div class="product-card">
							<img src="img/product-img.png" class="product-img">
						</div>
						<div class="product-card">
							<img src="img/product-img.png" class="product-img">
						</div>
					</div>
					<div class="slider-for-product">
						<div>
							<div class="slider-for-product-img">
								<img src="img/product-img.png" class="product-img">
							</div>
						</div>
						<div>
							<div class="slider-for-product-img">
								<img src="img/product-img.png" class="product-img">
							</div>
						</div>
						<div>
							<div class="slider-for-product-img">
								<img src="img/product-img.png" class="product-img">
							</div>
						</div>
						<div>
							<div class="slider-for-product-img">
								<img src="img/product-img.png" class="product-img">
							</div>
						</div>
					</div>
					<div class="row justify-content-between slider-for-product-arrows arrows d-flex">
						<div class="col-auto">
							<img src="img/icons/arrow-left.svg" class="slider-for-product-prev" alt="назад">
						</div>
						<div class="col-auto">
							<img src="img/icons/arrow-right.svg" class="slider-for-product-next" alt="вперед">
						</div>
					</div>
				</div>
				<div class="col-6">
					<h1>Название товара<br>в две строчки</h1>
					<button class="redBtn">Вернуться к каталогу</button>
					<div class="d-flex mb-2 text-uppercase">
						<p class="mr-4">Артикул - <span>12345</span></p>
						<p>Наличие - <span>изготовление в течение недели</span></p>
					</div>
					<div class="d-flex mb-4">
						<p class="mb-0">ЦВЕТ:</p>
						<div class="product-colors">
							<div class="color-white active"></div>
							<div class="color-grey"></div>
							<div class="color-black"></div>
						</div>
						<button class="greyBtn">ТАБЛИЦА РАЗМЕРОВ</button>
					</div>
					<div class="d-flex mb-4">
						<select class="select-white mr-4">
							<option>Размер</option>
							<option>Размер</option>
						</select>
						<div class="d-flex cardValue">
							<button class="dec">-</button>
							<input type="text" value="1"/>
							<button class="inc">+</button>
						</div>
					</div>
					<div class="buttons">
						<button class="greyBtn active">Без подошвы</button>
						<button class="greyBtn">Подошва полиуретан</button>
						<button class="greyBtn">Подошва ТЭП</button>
						<button class="greyBtn">Подошва резина</button>
						<button class="greyBtn">Калоши</button>
					</div>
					<div class="d-flex align-items-center">
						<p class="total mr-4 mb-0">Итог: <span>1800</span>  ₽</p>
						<button class="greenBtn">Заказать</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container product-description">
		<div class="row">
			<div class="col-12">
				<p>
					Безусловно, курс на социально-ориентированный национальный проект напрямую зависит от новых принципов формирования материально-технической и кадровой базы. Имеется спорная точка зрения, гласящая примерно следующее: акционеры крупнейших компаний будут объявлены нарушающими общечеловеческие нормы этики и морали.
				</p>
				<p>
					Прежде всего, высокотехнологичная концепция общественного уклада создает необходимость включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса новых принципов формирования материально-технической и кадровой базы. И нет сомнений, что базовые сценарии поведения пользователей формируют глобальную экономическую сеть и при этом -  объективно рассмотрены соответствующими инстанциями. Имеется спорная точка зрения, гласящая примерно следующее: акционеры крупнейших компаний будут объявлены нарушающими общечеловеческие нормы этики и морали. Лишь явные признаки победы институциализации ассоциативно распределены по отраслям.
				</p>
			</div>
		</div>
	</section>
	<section class="container related-product">
		<div class="row">
			<div class="col-12">
				<h2>Сопутствующие товары</h2>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-new">
						н<br>о<br>в<br>и<br>н<br>к<br>а
					</p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-sale"><img src="img/icons/percent.svg"></p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
		</div>
	</section>
	<section class="container related-product">
		<div class="row">
			<div class="col-12">
				<h2>Просмотренные товары</h2>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-new">
						н<br>о<br>в<br>и<br>н<br>к<br>а
					</p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-sale"><img src="img/icons/percent.svg"></p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
			<div class="col-3">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
		</div>
	</section>
	<section class="ask-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-5 offset-1">
					<form class="my-form-group">
						<h2>Задать вопрос</h2>
						<div class="row justify-content-center">
							<div class="col-6">
								<input type="text" class="" placeholder="Имя">
								<input type="tel" class="" placeholder="Номер телефона">
								<div class="d-flex align-items-center div-inputfile">
									<img src="img/icons/attachment.png" class="mr-2">
									<input type="file" class="inputfile" id="file">
									<label for="file" class="mb-0 mr-3">Прикрепить файл:</label>
									<p class="user-file">+ File1.jpg</p>
								</div>
								<p>Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a></p>
							</div>
							<div class="form-group col-6">
								<input type="email" class="" placeholder="E-mail (по желанию)">
								<textarea class="" rows="3" placeholder="Комментарий"></textarea>
								<input type="submit" class="greenBtn">
							</div>
						</div>
					</form>
				</div>
				<div class="col-6 ask-us-img pr-0">
					<img src="img/bg2.png">
				</div>
			</div>
		</div>
	</section>


<?php
	include('html-end.php');
?>