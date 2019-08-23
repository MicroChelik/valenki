<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Отзывы</li>
		 	</ol>
		</div>
	</div>
	<section class="padding-bottom">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Отзывы</h1>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img1">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Название новости</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img2">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Название новости</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img2">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Название новости</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img1">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Название новости</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
						</div>
					</div>
				</div>

			</div>
			<div class="row pagination-tools">
				<div class="col-auto">
					<div class="pagination">
						<p class="first-page">1</p>
						<div class="prev-page">
							<img src="img/icons/arrowGreen.svg">
						</div>
						<ul>
							<li class="active">2</li>
							<li>3</li>
							<li>4</li>
							<li>5</li>
						</ul>
						<div class="next-page">
							<img src="img/icons/arrowGreen.svg">
						</div>
						<p class="last-page">50</p>
					</div>
				</div>
				<div class="col-3 products-on-page">
					<p>товаров на странице</p>
					<select>
						<option>16</option>
						<option>17</option>
						<option>18</option>
					</select>
				</div>
			</div>
		</div>
	</section>
	<section class="ask-us">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-5 offset-1">
					<form class="my-form-group">
						<h2>Оставить отзыв</h2>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-12">
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
							<div class="form-group col-lg-6 col-12">
								<input type="email" class="" placeholder="E-mail (по желанию)">
								<textarea class="" rows="3" placeholder="Комментарий"></textarea>
								<input type="submit" class="greenBtn">
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-6 col-12 ask-us-img pr-0">
					<img src="img/bg2.png">
				</div>
			</div>
		</div>
	</section>
<?php
	include('html-end.php');
?>