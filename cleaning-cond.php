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
							<li><a href="cleaning-cond.php">Чистка кондиционеров</a></li>
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
						<section class="doit">
							<h2>Жарко! Но кондиционер грязный и плохо холодит ?!</h2>

-35%VIP-БОНУС на чистку кондиционера 
-5%VIP-БОНУС на покупку кондиционера при заказе любой услуги !
Этот комплекс работ позволит Вам :
- в разгар сезона и наслаждаться чистым здоровым воздухом в доме и офисе
-эксплуатировать кондиционеры без риска 
-непредвиденных поломок </section>

<section>
	В стандартное комплексное обслуживание чистки кондиционера входит:

- чистка фильтров внутреннего блока парогенератором;
- чистка вентиляторов внутреннего и наружного блоков;
- чистка теплообменников внутреннего и наружного блоков;
- диагностика оборудования (проверка электронных плат, фреоно-магистрали, межблочного кабеля);
- проверка рабочего давления в системе;
- обработка антисептиком вентилятора и теплообменника внутреннего блока; - чистка и продувка дренажной системы.

<h3>Стоимость работ для наших клиентов:</h3>
- для бытовой системы - 349 (старая470)грн.
- для кассетной системы - 699грн.(старая 945)
- для канальной системы - от 749 грн.(старая 1010)

- приточно - вытяжная вентиляция - от 950 грн. (в зависимости от сложности работ)
-дозаправка фреоном 70 грн. за 100 грамм. 

На выполненную чистку кондиционера
- 6 месяцев сервисной гарантии.
</section>


<section>

Вы получаете расширенный комплекс профилактических услуг для всей системы

Любое загрязнение может стать причиной по которой кондиционер будет плохо холодить или охлажденный воздух будет иметь неприятный, затхлый запах. Чтобы избежать подобного, важно вовремя предпринимать профилактические меры.

Так, для кондиционеров, установленных в частных домах и квартирах, достаточно проводить одну чистку в год, весной. В торговых и офисных помещениях рекомендуется очищать климатическую систему два раза в год – весной и осенью. Сплит-системы же, установленные в крупных промышленных зданиях, нуждаются в ежеквартальном очищении.
Вся техника, при постоянном использовании, со временем изнашивается и становится менее эффективной. 

Прогоняя воздушный поток через внутренний блок, система охлаждает и фильтрует его, задерживая при этом крупную и частицы мелкой пыли, которая остается на фильтрах и теплообменнике.

Со временем, количество задержанной пыли увеличивается, забивая при этом сам теплообменник, вентилятор и фильтра. Постепенно пыль, смешиваясь во внутреннем блоке со влагой образует размножающиеся бактерии. Отсюда и неприятный запах из кондиционера, и снижение работоспособности, аллергии и частые простудные заболевания.
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
						<!-- социальные иконки 	<ul class="icons">								
								<li><a href="https://www.facebook.com/obslujivanie/" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul> -->
							<ul class="copyright">								
								<li>Мы в соцсетях: <a href="https://www.facebook.com/obslujivanie/" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li></li>
								<li>&copy; 2017 kingclimat</li>
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