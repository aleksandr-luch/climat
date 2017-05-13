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
		<title>Купить кондиционер в Киеве</title>
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
					<section id="banner" class="major banner_services">
				<div class="logo_cont"><a href="index.php" class="logo"><img src="img/logo.png"></a> 
				<div class="l1"><span class="upper_n ff">KingClimat</span><p style="color:#BDA611;">Установка и обслуживание кондиционеров</p></div>
				</div>	
				<!-- Контент баннера -->
						<div class="inner">
						<img src="img/man.png" style="float:right; max-width:30%;">
							<header class="major" style=" max-width:65%;">
								<h1 class="upper_n">Услуги</h1>
							</header>
							<div class="content" style=" max-width:50%;">
									<a href="#s1" class="button next scrolly half">Сервисное обслуживание</a>
									<a href="#s2" class="button next scrolly half">Чистка кондиционера</a>
								

							</div>	
							<div class="content" style=" max-width:50%;">
								<a href="#s3" class="button next scrolly half">Установка кондиционеров</a>
									<a href="#s4" class="button next scrolly half">Демонтаж кондиционера</a>
									
							</div>
							<div class="content" style=" max-width:50%;">
								<a href="#s5" class="button next scrolly half">Заправка кондиционера</a>
									<a href="#s6" class="button next scrolly half">Установка зимнего комплекта кондиционера</a>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">
						<!-- Two -->
					
					<section id="" class="spotlights2">
								<section id="s1">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s1.png" alt="" data-position="0% 0%">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major mt2">
												<h3>Сервисное обслуживание</h3>
											</header>
											<p>Не включается кондиционер? Не греет или, наоборот, не холодит? Срочно вызывайте мастера: возможно, это – первый симптом поломки устройства, который все еще можно исключить.</p>
											<p>Сервисное обслуживание кондиционеров – важный момент во время эксплуатации климатической техники. Своевременная профилактика избавит вас от необходимости прибегать к ремонтным услугам, а то и вовсе – приобретать новый агрегат.</p>
											<p>В ходе сервисных работ, наши специалисты выполняют целый комплекс работ:</p>
											<ul>
											<li>Предварительную диагностику устройства;</li>
											<li>Проверку и очистку наружного/внутреннего блоков;</li>
											<li>Очистку дренажной системы кондиционера;</li>
											<li>Восполнение фреона;</li>
											<li>Проверку давления в агрегате;</li>
											<li>Инструктаж по использованию техники и многое другое.</li>
											</ul>
											<p>Наша компания готова предоставить качественное сервисное обслуживание и продлить период использования вашего кондиционера до максимальной отметки. Звоните.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
<i style="color: red;" >
От 200 грн</i>											</ul>
										</div>
									</div>
								</section>
								<section id="s2">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s2.png" alt="" data-position="top center">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major mt2">
												<h3>Чистка кондиционера</h3>
											</header>
											<p>Чистка кондиционера – важнейшая часть технического обслуживания климатической техники.</p>
											</p>Любое загрязнение может стать причиной по которой кондиционер будет плохо холодить или охлажденный воздух будет иметь неприятный, затхлый запах. Чтобы избежать подобного, важно вовремя предпринимать профилактические меры.</p>
											</p>Так, для кондиционеров, установленных в частных домах и квартирах, достаточно проводить одну чистку в год, весной. В торговых и офисных помещениях рекомендуется очищать климатическую систему два раза в год – весной и осенью. Сплит-системы же, установленные в крупных промышленных зданиях, нуждаются в ежеквартальном очищении.</p>
											<p>Стандартная процедура профессиональной чистки кондиционера включает:</p>
											<ul>
											<li>Очистку и дезинфекцию всех блоков и узлов;</li>
											<li>Восстановление уровня фреона;</li>
											<li>Проверку всех агрегатов на работоспособность;</li>
											<li>Очистку системы дренажа;</li>
											<li>Проверку герметичности фреоновой магистрали.</li>
											</ul>
											</p>Если вы заинтересованы в бесперебойной работе кондиционера, звоните нам. Профессиональные мастера готовы своевременно провести очистку техники, обеспечив тем самым, ее правильное функционирование и отличную работоспособность.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
<i style="color: red;" >
От 200 грн</i>											</ul>
										</div>
									</div>
								</section>
								<section id="s3">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s3.png" alt="" data-position="25% 25%">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Установка кондиционеров</h3>
											</header>
											<p>Установка и монтаж кондиционеров – задача не из простых. Она требует хорошей сноровки, технологической подкованности и определенного багажа знаний. Специалисты нашей компании обладают всем необходимым для того, чтобы произвести все работы качественно и оперативно.</p>
											<p>По статистике, в 73% случаях неправильный монтаж сплит-системы является основной причиной его поломки. От установки кондиционеров напрямую зависит срок эксплуатации, исправность и эффективность работы климатической техники.</p>
											<p>Мы предлагаем вам услуги знающих, квалифицированных специалистов, которые смогут обеспечить вашей технике всегда исправную и бесперебойную работу.</p>
											<p>Цена на установку кондиционера зависит от нескольких факторов:</p>
											<ul>
											<li>Типа монтажа;</li>
											<li>Уровня сложности проводимых работ;</li>
											<li>Вида системы охлаждения воздуха;</li>
											<li>Необходимости использования дополнительных материалов.</li>
											</ul>
											<p>Чтобы узнать точную стоимость установки сплит-системы, свяжитесь с нашим менеджером. Предварительная консультация бесплатна.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
 <i style="color: red;" >
От 700 грн</i>											</ul>
										</div>
									</div>
								</section>
								<section id="s4">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s4.jpg" alt="" data-position="25% 25%">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Демонтаж кондиционера</h3>
											</header>
											<p>Приобрели новую сплит-систему? Вероятно, вам понадобится демонтаж старого кондиционера. Специалисты настоятельно рекомендуют обращаться за профессиональной помощью.</p>
											<p>Процесс демонтажа сплит-системы технологически непростой, а потому одно неверное движение и вы рискуете обрести массу проблем. Например, выпустить весь фреон, повторная заправка которого – удовольствие не из дешевых. Звоните нам, мы всегда готовы помочь.</p>
											<p>Наши специалисты оказывают полный спектр услуг по разборке климатической техники. Мы выполняем демонтаж:</p>
											<ul>
											<li>Сплит-систем;</li>
											<li>Кассетных кондиционеров;</li>
											<li>Канальных кондиционеров.</li>
											</ul>
											<p>Обращайтесь к нам, чтобы оставить уверенность в исправности демонтированного кондиционера. Для сохранения и длительного хранения оборудования, наши специалисты закупорят трубы верхнего блока и аккуратно уложат его в предварительно подготовленные коробки.</p>
											<p>Возникли вопросы? Набирайте номер нашего контакт-центра. Консультация бесплатна.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
<i style="color: red;" >
От 450 грн</i>											</ul>
										</div>
									</div>
								</section>
								<section id="s5">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s5.png" alt="" data-position="25% 25%">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Заправка кондиционера</h3>
											</header>
											<p>Заправка кондиционера крайне важна для правильного функционирования системы охлаждения воздуха. Наши специалисты готовы выполнить все необходимые работы и оперативно восстановить функциональности вашего оборудования.</p>
											<p>Мало кто знает, но даже после идеальной установки кондиционера, хладагент (фреон), находящийся внутри него, со временем исчезает. В норме, техника теряет в год 8% фреона. Но даже такая незначительная цифра способна значительно ухудшить работу сплит-системы. Крайне важно вовремя ее дозаправить, в противном случае ваше оборудование может перестать охлаждать воздух, покрываться инеем или льдом, долго включаться и т.д.</p>
											<p>Наши специалисты готовы предоставить широкий спектр услуг:</p>
											<ul>
											<li>Дозаправку кондиционера хладагентом;</li>
											<li>Обнаружение неисправностей и вероятных утечек;</li>
											<li>Устранение проблемных зон;</li>
											<li>Подготовка оборудования к бесперебойной работе.</li>
											</ul>
											<p>Свяжитесь с менеджером, чтобы узнать цену заправки кондиционера или уточнить нюансы и детали сотрудничества. Мы рады каждому.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
	<i style="color: red;" >
От 50 грн</i>										</ul>
										</div>
									</div>
								</section>
																<section id="s6">
									<a href="#contact" class="image scrolly">
										<img src="img/s/s6.jpg" alt="" data-position="25% 25%">
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Установка зимнего комплекта кондиционера</h3>
											</header>
											<p>Одной из самых востребованных услуг нашей компании является установка зимнего комплекта кондиционера. Такая оснастка необходима, если вы планируете эксплуатировать климатическую технику при температуре ниже 5°С.</p>
											<p>Классический зимний комплект для кондиционера состоит из:</p>
											<ul>
											<li>Подогрева узлов внешнего блока;</li>
											<li>Подогрева дренажной системы;</li>
											<li>Регулятора оборотов вентилятора.</li>
											</ul>
											<p> Установка зимнего комплекта системы кондиционирования позволяет эксплуатировать оборудование круглогодично, не беспокоясь о его исправности. Подобное оснащение делает ваш кондиционер универсальным устройством, которое идеально работает знойным летом и морозной зимой.</p>
											<p>Остались вопросы? Набирайте номер нашего контакт-центра. Ни один вопрос не останется без профессионального ответа.</p>
											<ul class="actions">
												<li><a href="#contact" class="button">Заказать</a></li>
	<i style="color: red;" >
От 1400 грн</i>										</ul>
										</div>
									</div>
								</section>
							</section>			

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
</script> 	</body>
</html>