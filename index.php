<?php require_once "main.php"; InitСookie(); ?>

<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="UTF-8">		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">		   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"  integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>		 
		<link rel="stylesheet" href="flipclock.css">
		<link rel="stylesheet" href="messi.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="image/x-icon" href="img/globe.svg" />
		<title>Coursework2</title>
	</head>

<body>

	<!--===== Секция главной страницы =====-->				
	<!-- Навигация -->	
	<header>
		<nav class="navbar navbar-expand-lg fixed-top show1">
			<div class="container-fluid">	
				<button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbar-collapse"> 				
					<span class="navbar-toggler-icon"></span>
				</button>
				<canvas id="draw" width="250" height="60"></canvas>				
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item"><a class="nav-link py-3 px-4 px-lg-4 click1" href="#page-top">
							<i class="fa fa-home"></i> ГЛАВНАЯ</a></li>
						<li class="nav-item"><a class="nav-link py-3 px-4 px-lg-4 click2" href="#about">
							<i class="fa fa-id-badge"></i> ОБО МНЕ</a></li>
						<li class="nav-item"><a class="nav-link py-3 px-4 px-lg-4 click3" href="#portfolio">
							<i class="fa fa-briefcase"></i> ПОРТФОЛИО</a></li>
						<li class="nav-item"><a class="nav-link py-3 px-4 px-lg-4 click4" href="#services">
							<i class="fa fa-cogs"></i> УСЛУГИ</a></li>							
					</ul>
				</div>						 						
			</div>							
		</nav>			
		<!-- Конец навигации -->				
		<div class = "container-fluid" id = "page-top">
			<div class="row" >
				<div class="col-lg-12">
					<!-- Иконки -->
					<div class = "container icons">
						<div class="row">
							<div class="col-4 d-flex align-items-center justify-content-center">
								<img src="img/html5.png" class="img-fluid" style="height: 80px">
							</div>
							<div class="col-4 d-flex align-items-center justify-content-center">
								<img src="img/css3.png" class="img-fluid" style="height: 80px">
							</div>
							<div class="col-4 d-flex align-items-center justify-content-center">
								<img src="img/js.png" class="img-fluid" style="height: 80px">	
							</div>
						</div>
					</div>
					<!-- Конец иконок -->			
					<div class="offer text-center" >
						<h1 class="d-none display-2 d-sm-flex justify-content-center show2" >Сайт под ключ</h1>
						<h1 class="d-sm-none show1">Сайт под ключ</h1>																											
						<p><a class="btn btn-lg button1">Заказать</a></p>
					<!-- Гарантии -->	
						<img src="img/money.png" class="col-6 col-md-2 show3">				
					</div>
				</div>
			</div>
		</div>	
	</header>
	<!--===== Конец секции главной страницы =====-->	
	
	<!-- ======= Секция "Обо мне" ======= -->
    <section class="section" id="about">				
		<div class="container-fluid about" >
			<div class="row" >
				<div class="col-12">				
					<h4 class="title">Обо мне</h4>	
					<p id = "drawing1"></p>			
				</div>
			</div>	
			<div class="row pb-5">				
				<div class="col-12 col-md-12 col-lg-4 text-center profile">								
					<img class="img-fluid rounded-circle col-6 col-md-4 col-lg-7 mx-auto" src="img/foto.jpg" alt="" />				
				</div>					
				<div class="col-12 col-md-6 col-lg-4 text-center pt-4"> 
				<table class="table table-hover table-sm">
					<tbody>
						<tr class="text-danger">
							<td><b>Ответственность</b></td>		
						</tr>
						<tr class="">
							<td><b>Аналитический склад ума</b></td>	
						</tr>
						<tr class="text-danger">
							<td><b>Умение решать задачи</b></td>
						</tr>
						<tr class="">
							<td><b>Коммуникабельность</b></td>
						</tr>
						<tr class="text-danger">
							<td><b>Алгоритмизированный подход</b></td>
							</tr>	
					</tbody>				
				</table>
				</div>	
				<div id="chart" class ="col-12 col-md-6 col-lg-4 text-center chart">					
				</div>						
			</div>				
			<div class="row">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="wcard">
						<div class="wcard-block block-1">
							<h3 class="wcard-title">Frontend</h3>
							<p class="wcard-text">Вёрстаю красивые и современные веб-страницы с полной адаптивностью под любые 
							устройства и полноценной интерактивностью.</p>
						</div>
					</div>
				</div>			
				<div class="col-12 col-md-6 col-lg-4">
					<div class="wcard ">
						<div class="wcard-block block-2">
							<h3 class="wcard-title">Backend</h3>
							<p class="wcard-text">Разработываю сложную backend логику для уже готового frontend'а, 
							либо по подробному техническому заданию.</p>
						</div>
					</div>
				</div>							
				<div class="col-12 col-md-12 col-lg-4">
					<div class="wcard ">
						<div class="wcard-block block-3">
							<h3 class="wcard-title">Fullstack</h3>
							<p class="wcard-text">Создаю полноценные сайты и веб-приложения, включающий в себя 
							 сложную бизнес логику и высокопроизводительные серверные скрипты.</p>
						</div>
					</div>
				</div>
			</div>				
		</div>			    
	</section>
	<!-- ======= Конец секции "Обо мне" ======= -->
		
	<!-- ======= Секция "Портфолио" ======= -->
    <section class="section" id="portfolio">		
		<div class="container-fluid portfolio">
			<div class="row">
				<div class="col-12">				
					<h4 class="title">Портфолио</h4>	
					<p id = "drawing2"></p>			
				</div>
			</div>
			<div class="row d-flex justify-content-between text-center">				
				<div class="col-12 col-md-6 col-lg-3 site1">
					<h3>Сайт услуг</h3>				
					<div><img class="img-fluid mx-auto pic2" src="img/pic2.jpg" alt=""></div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 site2">
					<h3>Сайт магазина</h3>					
					<div><img class="img-fluid mx-auto pic3" src="img/pic3.jpg" alt=""></div>															
				</div>
				<div class="col-12 col-md-6 col-lg-3 site3">
					<h3>Сайт отеля</h3>				
					<div><img class="img-fluid mx-auto pic4" src="img/pic4.jpg" alt=""></div>
				</div>	
				<div class="col-12 col-md-6 col-lg-3 site4">
					<h3>Сайт компании</h3>					
					<div><img class="img-fluid mx-auto pic5" src="img/pic5.jpg" alt=""></div>														
				</div>
			</div>						
		</div>
	</section>		
	<!-- ======= Конец секции "Портфолио" ======= -->
	
	<!-- ======= Секция "Услуги" ======= -->
	<section class="section" id="services">		
		<div class="container-fluid services">
			<div class="row">
				<div class="col-12">				
					<h4 class="title">Услуги</h4>	
					<p id = "drawing3"></p>			
				</div>
			</div>		
			<div class="row pb-5 text-center">
				<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
					<div class="card card1">
						<img class="card-img-top" alt="" src="img/pic6.jpg" />
						<div class="card-block pt-3">
							<h5 class="card-title">сайт-визитка</h5>
							<p class="card-text">Цена от 20000 руб.</p>
							<p><a class="btn btn-primary button2">Заказать</a></p>		
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
					<div class="card card2">
						<img class="card-img-top" alt="" src="img/pic7.jpg" />
						<div class="card-block pt-3">
							<h5 class="card-title">landing page</h5>
							<p class="card-text">Цена от 15000 руб.</p>
							<p><a class="btn btn-primary button2">Заказать</a></p>		
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
					<div class="card card3">
						<img class="card-img-top" alt="" src="img/pic8.jpg" />
						<div class="card-block pt-3">
							<h5 class="card-title">интернет-магазин</h5>
							<p class="card-text">Цена от 40000 руб.</p>
							<p><a class="btn btn-primary button2">Заказать</a></p>		
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
					<div class="card card4">
						<img class="card-img-top" alt="" src="img/pic9.jpg" />
						<div class="card-block pt-3">
							<h5 class="card-title">реклама</h5>
							<p class="card-text">Цена от 8000 руб.</p>
							<p><a class="btn btn-primary button2">Заказать</a></p>		
						</div>
					</div>
				</div>
			</div>		
			<div class="row">			
				<div class="col-md-12 footer text-center" >
					<div class= "pb-3" >
						<a href="https://wa.me/79218615029"><img src="img/whatsapp.png" class="link1" style="height: 30px"></a>
						<a href="https://t.me/name_kolpak_ea"><img src="img/telegram.png" class="link2 pl-4" style="height: 30px"></a>
						<a href="https://www.facebook.com/evgeniy.kolpak/"><img src="img/facebook.png" class="link3 pl-4" style="height: 30px"></a></br>												
					</div>
					<strong>Copyright © 2021 Евгений Колпак</strong>
				</div>
			</div>
		</div>
	</section>	
	<!-- ======= Конец секции "Услуги" ======= -->
		
	<!-- ======= Секция диалоговых окон ======= -->		
	<?php
				if (isset($_COOKIE["dialog"]))
				{
					print $_COOKIE["dialog"];
				}
				
	?>

	<dialog class = "text-center " id = "dialog2">
		<form action="getform.php" id = "form" method="POST" enctype="multipart/form-data" class = "needs-validation" novalidate>				
			<p class="close" id = "closeDialog2"></p>
			<h3 class = "form_title text-dark">Оставьте вашу заявку</h3>
			<div class = "form-group">
				<input id = "formName" type="text" name="name" class="form-control form-input"  placeholder="Имя*" required>
			</div>
			<div class = "form-group">
				<input id = "formEmail" type="email" name="email" class="form-control form-input"  placeholder="E-mail*" required>
				<small id="emailHelp" class="form-text text-info" style = "font-size: 11px;">Мы никогда никому не передадим Вашу электронную почту.</small>
			</div>
			<div class = "form-group">
				<textarea id = "formMessage" name="message" class="form-control form-input" rows="3" placeholder="Сообщение"></textarea>
			</div>
			<div class="form-group">
			  <input id="formFile" type="file" name = "file" class="form-control form-control-sm  form-input text-warning" accept = ".jpg, .png, .gif">
			</div>
			<div class="form-group">
				 <div class="custom-control custom-checkbox ">
					<input type="checkbox" class="custom-control-input" id="invalidCheck" checked required>
					<label class = "custom-control-label text-info" for="invalidCheck">Я даю своё согласие на обработку персональных данных в соответствии с 
					<a href = "http://www.consultant.ru/document/cons_doc_LAW_61801/6c94959bc017ac80140621762d2ac59f6006b08c/" class = "text-success">Условиями</a>*</label>
					<div class="invalid-feedback">
						Вы должны согласиться с условиями перед отправкой.
					</div>		  
				  </div>
			</div>
			<div class = "form-group">
				<input type="submit" name = "submit" class="btn button2" value="Отправить"></input>
			</div>
		</form>
	</dialog>
	<script>
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Получите все формы, к которым мы хотим применить пользовательские стили проверки Bootstrap
		var forms = document.getElementsByClassName('needs-validation');
		// Зацикливайтесь на них и предотвращайте подчинение
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
	</script>		
													
<!--
				<div class="socials-links show8">	
					<h6 class = "pb-0">Контакты</h6>
					<h6 class = "tel">Тел: +7(921)861-50-29</h6>
					<h6 class = "mail">E-mail: kolpak_ea@mail.ru</h6>				
					<a href="https://wa.me/79218615029"><img src="img/whatsapp.png" class="link1" style="height: 30px"></a>
					<a href="https://t.me/name_kolpak_ea"><img src="img/telegram.png" class="link2 pl-4 " style="height: 30px"></a>
					<a href="https://www.facebook.com/evgeniy.kolpak/"><img src="img/facebook.png" class="link3 pl-4 " style="height: 30px"></a> </br>
				</div>				
-->

		<!-- ======= Конец секции диалоговых окон ======= -->							
<!--
		<div id = "drawing5"></div>	
-->

	<!-- Пакет jQuery и JavaScript с Popper -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!--	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>			
<!--	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="flipclock.min.js"></script>
	<script src="messi.min.js"></script>
	<script src="./svg.min.js"></script>		
	<script type="module" src="./main.js"></script> 



  </body>
</html>
