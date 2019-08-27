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
							<p class="rounded-card-title">Имя</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a  data-fancybox data-animation-duration="700" data-src="#review" href="javascript:;">Читать далее</a></p>
								<div style="display: none;" id="review" class="animated-modal">
									<div class="card">
										<div class="card-header">
											<h1>Отзыв</h1>
										</div>
										<div class="card-body row">
											<div class="col-lg-6 col-12">
												<div class="imgw100">
													<img src="img/reviews/1.png">
												</div>
											</div>
											<div class="col-lg-6 col-12">
												<p class="rounded-card-title">Екатерина</p>
												<p class="rounded-card-date">02.02.2019</p>
												<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет.</p>
											</div>
											<div class="col-12">
												<p>
													С другой стороны, существующая теория предоставляет широкие возможности для благоприятных перспектив. Но сложившаяся структура организации требует определения и уточнения своевременного выполнения сверхзадачи. 
												</p>
												<p class="mb-0">
													Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: понимание сути ресурсосберегающих технологий, в своем классическом представлении, допускает внедрение системы обучения кадров, соответствующей насущным потребностям.
												</p>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>

				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img2">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Имя</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a  data-fancybox data-animation-duration="700" data-src="#review" href="javascript:;">Читать далее</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img2">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Имя</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a  data-fancybox data-animation-duration="700" data-src="#review" href="javascript:;">Читать далее</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="rounded-card">
						<div class="rounded-card-img reviews-img1">
						</div>
						<div class="rounded-card-description">
							<p class="rounded-card-title">Имя</p>
							<p class="rounded-card-date">02.02.2019</p>
							<p class="rounded-card-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a  data-fancybox data-animation-duration="700" data-src="#review" href="javascript:;">Читать далее</a></p>
						</div>
					</div>
				</div>

			</div>
			<div class="row pagination-tools page-reviews-pagination">
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
				<div class="col-lg-4 col-12 offset-lg-2 offset-0">
					<form class="my-form-group d-lg-block d-none">
						<h2>Оставить отзыв</h2>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-12">
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
							<div class="form-group col-lg-6 col-12">
								<input type="email" class="" placeholder="E-mail" required="">
								<textarea class="" rows="3" placeholder="Комментарий" required=""></textarea>
								<input type="submit" class="greenBtn"  value="Отправить">
							</div>
						</div>
					</form>
					<form class="my-form-group d-block d-lg-none">
						<h2>Оставить отзыв</h2>
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
								<input type="submit" class="greenBtn"  value="Отправить">
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