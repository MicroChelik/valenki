<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Контакты</li>
		 	</ol>
		</div>
	</div>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Контакты</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="map">
		<div id="ymap_ctrl_display" class="overmap" style="display: none; width: 100%; position: absolute; background-color: rgba(0, 0, 0, 0.5); z-index: 100; pointer-events: none;">
		    <div style="position: relative; top: 50%; left: 0; right: 0; color: white; text-align: center; font-size: 1.8em; pointer-events: none;">Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
		</div>
		<div id="myMap" style="width:auto;height:100%"></div>
	</section>

	<section class="container">
		<div class="row">
			<div class="col-12">
				<h1>Где можно купить нашу продукцию?</h1>
			</div>
			<div class="col-12 questions cities">
					<div class="accordion" id="accordionExample">
					  <div class="card">
					    <div class="card-header" id="question1">
					      <h5 class="mb-0">
					        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					           <img src="img/icons/faqDown.svg">Удмуртия
					        </button>
					      </h5>
					    </div>
					    <div id="collapseOne" class="collapse show" aria-labelledby="question1" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="question2">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          <img src="img/icons/faqDown.svg">Московская область
					        </button>
					      </h5>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="question2" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="question3">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          <img src="img/icons/faqDown.svg">Кировская область
					        </button>
					      </h5>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="question3" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="question4">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					          <img src="img/icons/faqDown.svg">Республика Хакасия
					        </button>
					      </h5>
					    </div>
					    <div id="collapseFour" class="collapse" aria-labelledby="question4" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="question5">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
					          <img src="img/icons/faqDown.svg">Иркутская область
					        </button>
					      </h5>
					    </div>
					    <div id="collapseFive" class="collapse" aria-labelledby="question5" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="question6">
					      <h5 class="mb-0">
					        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
					          <img src="img/icons/faqDown.svg">Оренбург
					        </button>
					      </h5>
					    </div>
					    <div id="collapseSix" class="collapse" aria-labelledby="question6" data-parent="#accordionExample">
					      <div class="card-body">
					        <p class="city">г. Глазов</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					      <div class="card-body">
					        <p class="city">г. Ижевск</p>
					        <p class="adress">ул. Глинки, 2, цех, тел: +7(912) 850-57-11, +7(912) 850-57-26</p>
					        <p class="adress">Центральный рынок г. Глазова, вход со стороны гор.администрации</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
		</div>
	</section>







	<section class="ask-us">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-5 col-12 offset-lg-1 offset-0">
					<form class="my-form-group">
						<h2>Написать нам</h2>
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
				<div class="col-6 ask-us-img pr-0">
					<img src="img/bg2.png">
				</div>
			</div>
		</div>
	</section>
<?php
	include('html-end.php');
?>