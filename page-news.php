<?php
	include('html-start.php');
?>
	<div aria-label="breadcrumb" class="breadcrumbNav">
		<div class="container px-0">
			<ol class="breadcrumb pl-0">
		    	<li class="breadcrumb-item"><a href="index.php">Главная</a></li>
	    		<li class="breadcrumb-item active" aria-current="page">Новости и акции</li>
		 	</ol>
		</div>
	</div>
	<section class="container">
		<div class="row">
			<div class="col-3">
				<h1>Новости и акции</h1>
			</div>
			<div class="col-1 d-flex justify-content-between">
				<a href="">
					<img src="img/icons/social1.png">
				</a>
				<a href="">
					<img src="img/icons/social2.png">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<div class="news-card">
					<div class="news-img news-img1">
						<!-- <img src="img/news/1.png"> -->
					</div>
					<div class="news-description">
						<p class="news-title">Название новости</p>
						<p class="news-date">02.02.2019</p>
						<p class="news-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="news-card">
					<div class="news-img news-img2">
						<!-- <img src="img/news/1.png"> -->
					</div>
					<div class="news-description">
						<p class="news-title">Название новости</p>
						<p class="news-date">02.02.2019</p>
						<p class="news-text">В своем стремлении повысить качество жизни, они забывают, что внедрение современных методик позволяет... <a href="">Читать далее</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include('html-end.php');
?>