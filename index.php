<?php 
if(isset($_POST['submit'])){
 //  ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
     
    $to = "zavgordniy89@mail.ru"; // this is your Email address
    $from = 'kingclimat@gmail.com'; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Поступил запрос с сайта kingclimat.com";
    $message = $first_name . " " . $phone . " Оставил следующее сообщение:" . "\n\n" . $_POST['message'];
//$headers = "От:" . $from .  PHP_EOL;
    mail($to,$subject,$message,$headers);
    header('Location: success.php');
    }
?>
<!DOCTYPE HTML>
<html lang="ru">
	<head>
		<title>Обслуживание кондиционеров в Киеве</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		 
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
					<div class="linker">
						<a href="tel:(067)354-6364" class="phone upper_n"><i class="fa fa-phone"></i>(067)354-6364</a>
						<a href="tel:(095)378-0504" class="phone upper_n"><i class="fa fa-phone"></i>(095)378-0504</a>
						<a href="#contact" class="phone scrolly upper_n hide680"><i class="fa fa-volume-control-phone phone3"></i>Оставить заявку</a>
						</div>
						<nav>
							<a href="#menu">Меню</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Главная</a></li>
							<li><a href="catalog.php">Кондиционеры</a></li>
							<li><a href="services.php">Услуги</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
				<div class="logo_cont"><a href="index.php" class="logo"><img src="img/logo.png"></a> 
				<div class="l1"><span class="upper_n ff">KingClimat</span><p style="color:#BDA611;">Установка и обслуживание кондиционеров</p></div>
				</div>	
						<div class="inner">
						<img src="img/44_13.png" style="float:right; max-width:30%;margin-top:40px;">
							<header class="major" style="max-width:65%;">
								<h1 class="upper_n">Обслуживание кондиционеров в Киеве</h1><H4 style="color: #ff0000; text-transform: uppercase;"><strong>-35% на все услуги!</strong></span></H4>							</header>
							<!--<div class="content">
								 <p>Экономьте время и деньги!</p>
								<ul class="actions red">
								 	<li><a href="#two" class="button next scrolly">Получить Подарок</a></li>
								</ul>
							</div>-->
						</div>
					</section>

				<!-- Main -->
					<div id="main">
											<!-- Two -->
							<section id="two">
								<div class="inner">
								<img src="img/hand.jpg" style="float:right; max-width:40%;">
									<header class="major" style="max-width:58%;">
										<h2 class="upper_n">Хотите провести лето с комфортом?</h2>
										<h2 class="upper_n yel">Экономьте время!<br> Приведите кондиционер в порядок уже сегодня!</h2>
									</header>
								</div>
							</section>
												<!-- section services-->
							<section id="services" >
							<div class="inner">
							<div style="width:100%;text-align:center;"><h2 class="upper_n">Услуги</h2></div>
							<div class="row">

											<!-- Break -->
											<div class="4u 6u(medium) 12u(small)">
												<h3>Сервисное обслуживание кондиционеров</h3>
												<p>Сервисное обслуживание кондиционеров – важный момент во время эксплуатации климатической техники. Своевременная профилактика избавит вас от необходимости прибегать к ремонтным услугам, а то и вовсе – приобретать новый агрегат.</p><i style="color: red;" >
От 200 грн</i>											<a href="services.php" class="button">Подробнее</a>
											</div>
										<div class="4u 6u(medium) 12u(small)">
												<h3>Чистка кондиционеров</h3>
												<p>Любое загрязнение может стать причиной по которой кондиционер будет плохо холодить или охлажденный воздух будет иметь неприятный, затхлый запах. Чтобы избежать подобного, важно вовремя предпринимать профилактические меры.</p>
<i style="color: red;" >
От 200 грн</i>												<a href="services.php" class="button">Подробнее</a>
											</div>
											<div class="4u 12u(medium) 12u(small)">
												<h3>Установка кондиционеров</h3>
												<p>Установка и монтаж кондиционеров – задача не из простых. Она требует хорошей сноровки, технологической подкованности и определенного багажа знаний. Специалисты нашей компании обладают всем необходимым для того, чтобы произвести все работы качественно и оперативно.</p>
	<i style="color: red;" >
От 700 грн</i>											<a href="services.php" class="button">Подробнее</a>
											</div>	
											</div>
											<div style="margin-top:15px;"></div>
											<div class="row">
											<div class="4u 6u(medium) 12u(small)">
												<h3>Демонтаж кондиционера</h3>
												<p>Приобрели новую сплит-систему? Вероятно, вам понадобится демонтаж старого кондиционера. Специалисты настоятельно рекомендуют обращаться за профессиональной помощью.</p>
	<i style="color: red;" >
От 450 грн</i>											<a href="services.php" class="button">Подробнее</a>
											</div>
											
											<div class="4u 6u(medium) 12u(small)">
												<h3>Заправка кондиционера</h3>
												<p>Заправка кондиционера крайне важна для правильного функционирования системы охлаждения воздуха. Наши специалисты готовы выполнить все необходимые работы и оперативно восстановить функциональности вашего оборудования.</p>
<i style="color: red;" >
От 50 грн</i>												<a href="services.php" class="button">Подробнее</a>
											</div>
											
											<div class="4u 12u(medium) 12u(small) mfixpad">
												<h3>Установка зимнего комплекта кондиционера</h3>
												<p>Одной из самых востребованных услуг нашей компании является установка зимнего комплекта кондиционера. Такая оснастка необходима, если вы планируете эксплуатировать климатическую технику при температуре ниже 5°С.</p>
<i style="color: red;" >
От 1400 грн</i>												<a href="services.php" class="button">Подробнее</a>
											</div>
										
										</div>
										</div>
							</section>
														<!-- prem-->
							<section id="prem">
								<div class="inner">
								<div class="row">
								<h2 class="upper_n">6 причин, почему нужно выбрать нас</h2>
									<div class="4u 6u(medium) 12u(small) k1"><div class="ic"><i class="fa fa-gift" aria-hidden="true"></i></div><span class="image fit"><h4 class="upper_n"><blockquote>Мы оказываем только качественные услуги - при этом имеем самые низкие цены на рынке!</blockquote></h4></span></div>
															<div class="k1 4u 6u(medium) 12u(small)"><div class="ic"><i class="fa fa-clock-o" aria-hidden="true"></i>
</div><span class="image fit"><h4 class="upper_n"><blockquote>Весь процесс обслуживания кондиционера занимает до 30 минут вашего времени!</blockquote></h4></span></div>
<div class="4u 6u(medium) 12u(small) k1"><div class="ic"><i class="fa fa-calendar" aria-hidden="true"></i></div><span class="image fit"><h4 class="upper_n"><blockquote>Процесс обслуживания происходит строго в оговоренное с вами время. Мы всегда приезжаем вовремя!</blockquote></h4></span></div>
															<div class="4u 6u(medium) 12u(small) k1"><div class="ic"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div><span class="image fit"><h4 class="upper_n"><blockquote>Наш персонал - наша гордость. Все сотрудники обладают высокой квалификацией и имеют огромный опыт работы.</blockquote></h4></span></div>
															<!-- Break -->
															
															<div class="4u 6u(medium) 12u(small) k1"><div class="ic"><i class="fa fa-group" aria-hidden="true"></i></div><span class="image fit"><h4 class="upper_n"><blockquote>Мы имеем 10 лет успешной работы на рынке - это тысячи довольных клиентов.</blockquote></h4></span></div>
															<div class="4u 6u(medium) 12u(small) k1"><div class="ic"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div><span class="image fit"><h4 class="upper_n"><blockquote>Гарантия на выполненное нами обслуживание кондиционера - 6 месяцев.</blockquote></h4></span></div>
								</div>

<a class="button fit scrolly" href="#contact "><i class="fa fa-volume-control-phone phone3"></i>Оставить заявку</a>							
								</div>
							</section>
														<!-- line -->
							<section id="line2">
							<h3 class="upper_n red">Позвони до 10 мая - и получи карту VIP-клиента!</h3>
							</section>
							<!-- brands1 -->
								<section id="line2" style="text-align:center;">
							<h3>7 лидеров продаж</h3>
							</section>
							<section id="brands1" class="tiles">
								<article style="width:25%">
									
									<header class="major">	<img src="brands/gree.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b1" class="link">Gree</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 299$</a></p>
									</header>
								</article>
								<article style="width:25%">
									
									<header class="major"><img src="brands/mitsubishi.png" alt="" />
									<h3 class="linker"><a href="catalog.php#b2" class="link">Mitsubishi</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 599$</a></p>
									</header>
								</article>
								<article style="width:25%">
									
									<header class="major"><img src="brands/neoclima.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b3" class="link">Neoklima</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 299$</a></p>
									</header>
								</article>
								<article style="width:25%">
									
									<header class="major">	<img src="brands/leberg.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b4" class="link">Leberg</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 249$</a></p>
									</header>
								</article>
								
							</section>
							<!-- brands2 -->
							<section id="brands2" class="tiles">
								<article style="width:33%">
									
									<header class="major"><img src="brands/panasonic.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b5" class="link">Panasonic</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 529$</a></p>
									</header>
								</article>
								<article style="width:33%">
									
									<header class="major">	<img src="brands/toshiba.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b6" class="link">Toshiba</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 519$</a></p>
									</header>
								</article>
								<article style="width:33%">
								
									<header class="major"><img src="brands/daikin.png" alt="" />
										<h3 class="linker"><a href="catalog.php#b7" class="link">Daikin</a></h3>
										<p></p><p><a class="button fit upper_2" href="catalog.php">От 499$</a></p>
									</header>
								</article>							
							</section>

							<!-- line -->
							<section id="line">
							<h2 class="upper_n">Полное обслуживание кондиционера - до 30 минут</h2>
							</section>
						




					</div>

				<!-- Contact -->
					<section id="contact">
					<div style="width:100%;text-align:center;margin-top:15px;"><h2 class="upper_n">Оформить заявку</h2></div>
						<div class="inner">
						
							<section>
								<form method="post" action="">
									<div class="field half first">
										<label for="name">Имя</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="phone">Телефон</label>
										<input type="text" name="phone" id="phone" />
									</div>
									<div class="field">
										<label for="message">Сообщение</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Отправить" class="special" /></li>
										<li><input type="reset" value="Очистить" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section class="pad_small">
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">Kingklimat@gmail.com</a>
									</div>
								</section>
								<section class="pad_small">
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Телефон</h3>
										<span><a href="tel:(067) 354-6364">(067) 354-6364</a></span><br />
										<span><a href="tel:(095) 378-0504">(095) 378-0504</a></span>
									</div>
								</section>
								<section class="pad_small">
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Наш адрес:</h3>
										<span>г. Киев<br />
										Проспект В. Лобановского, 119<br />
										Украина</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
						<!--социальные иконки	<ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul> -->
							<ul class="copyright">
								<li>&copy; 2017 kingclimat</li><li></a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	<script type="text/javascript">
  (function(d, w, s) {
	var widgetHash = 'ilakwjh0ev262emon2qd', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
	gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
	var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script> </body>
</html>