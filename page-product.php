<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
		    	<li class="breadcrumb-item"><a href="index.php">Каталог</a></li>
		    	<li class="breadcrumb-item"><a href="index.php">Подраздел каталога</a></li>
	    		<li class="breadcrumb-item active d-lg-block d-none" aria-current="page">Название товара</li>
		 	</ol>
		</div>
	</div>
	<section class="product-details">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5 col-12">
					<div class="slider-product">
						<div class="product-card">
							<a href="img/product-img.png" data-fancybox="images">
								<img src="img/product-img.png" class="product-img">
								<p class="product-new">
									н<br>о<br>в<br>и<br>н<br>к<br>а
								</p>
							</a>
							</div>
						<div class="product-card">
							<a href="img/product-img.png" data-fancybox="images">
								<img src="img/product-img.png" class="product-img">
								<p class="product-sale"><img src="img/icons/percent.svg"></p>
							</a>
						</div>
						<div class="product-card">
							<a href="img/product-img.png" data-fancybox="images">
								<img src="img/product-img.png" class="product-img">
							</a>
						</div>
						<div class="product-card">
							<a href="img/product-img.png" data-fancybox="images">
								<img src="img/product-img.png" class="product-img">
							</a>
						</div>
					</div>
					<div class="slider-for-product d-none d-lg-block">
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
					<div class="row justify-content-between slider-for-product-arrows arrows d-lg-flex d-none">
						<div class="col-auto">
							<img src="img/icons/arrow-left.svg" class="slider-for-product-prev" alt="назад">
						</div>
						<div class="col-auto">
							<img src="img/icons/arrow-right.svg" class="slider-for-product-next" alt="вперед">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<h1>Название товара<br>в две строчки</h1>
					<button class="redBtn">Вернуться к каталогу</button>
					<div class="d-lg-flex mb-2 text-uppercase">
						<p class="mr-4">Артикул - <span>12345</span></p>
						<p>Наличие - <span>изготовление в течение недели</span></p>
					</div>
					<div class="d-flex flex-wrap mb-4">
						<p class="mb-0">ЦВЕТ:</p>
						<div class="product-colors">
							<div class="color-white active"></div>
							<div class="color-grey"></div>
							<div class="color-black"></div>
						</div>
						<a data-fancybox data-animation-duration="700" data-src="#tableSize" href="javascript:;">
							<button class="greyBtn">ТАБЛИЦА РАЗМЕРОВ</button>
						</a>
							<div style="display: none;" id="tableSize" class="animated-modal">
								<div class="card">
									<div class="card-header">
										<h1>Размеры</h1>
									</div>
									<div class="card-body">
										<table>
											<tr>
												<th>Сантиметры</th>
												<th>ГОСТ</th>
												<th>Высота валенка</th>
											</tr>
											<tr>
												<td>14</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>15</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>16</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>14</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>15</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>16</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>14</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>15</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
											<tr>
												<td>16</td>
												<td>22,5</td>
												<td>24,0</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
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
					<div class="d-lg-flex align-items-center">
						<p class="total mr-4 mb-lg-0 mb-4">Итог: <span>1800</span>  ₽</p>
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
		</div>
		<div class="row related-product-slider">
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-new">
						н<br>о<br>в<br>и<br>н<br>к<br>а
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-sale"><img src="img/icons/percent.svg"></p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
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
		</div>
		<div class="row watched-product-slider">
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-new">
						н<br>о<br>в<br>и<br>н<br>к<br>а
					</p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
					<p class="product-sale"><img src="img/icons/percent.svg"></p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
				<div class="product-card">
					<img src="img/product-img.png" class="product-img">
					<p>Заголовок в одну строчку</p>
					<p>1 800 ₽</p>
				</div>
			</div>
			<div class="col-lg-3 col-12">
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
				<div class="col-lg-4 col-12 offset-lg-2 offset-0">
					<form class="my-form-group d-lg-block d-none">
						<h2>Задать вопрос</h2>
						<div class="row justify-content-center">
							<div class="col-6">
								<input type="text" class="" placeholder="Имя" required="">
								<input type="tel" class="" placeholder="Номер телефона" required="">
								<div class="d-flex align-items-center div-inputfile">
									<img src="img/icons/attachment.png" class="mr-2">
									<input type="file" class="inputfile" id="file">
									<label for="file" class="mb-0 mr-3">Прикрепить файл:</label>
									<p class="user-file">+ File1.jpg</p>
								</div>
								<p>Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a></p>
							</div>
							<div class="col-6">
								<input type="email" class="" placeholder="E-mail" required="">
								<textarea class="" rows="3" placeholder="Комментарий" required=""></textarea>
								<input type="submit" class="greenBtn" value="Отправить">
							</div>
						</div>
					</form>
					<form class="my-form-group d-block d-lg-none">
						<h2>Задать вопрос</h2>
						<div class="row justify-content-center">
							<div class="col-12">
								<input type="text" class="" placeholder="Имя" required="">
								<input type="tel" class="" placeholder="Номер телефона" required="">
								<input type="email" class="" placeholder="E-mail" required="">
								<textarea class="" rows="3" placeholder="Комментарий" required=""></textarea>
								<div class="d-flex align-items-center div-inputfile">
									<img src="img/icons/attachment.png" class="mr-2">
									<input type="file" class="inputfile" id="file">
									<label for="file" class="mb-0 mr-3">Прикрепить файл:</label>
									<p class="user-file">+ File1.jpg</p>
								</div>
								<p>Нажимая на кнопку, вы даете свое согласие на обработку персональных данных. <a href="">Узнать больше</a></p>
								<input type="submit" class="greenBtn" value="Отправить">
							</div>
						</div>
					</form>
				</div>
				<div class="col-6 d-none d-lg-flex ask-us-img pr-0">
					<img src="img/bg2.png">
				</div>
			</div>
		</div>
	</section>


<?php
	include('html-end.php');
?>