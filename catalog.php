<?php 
if(isset($_POST['submit'])){
  // ini_set( 'display_errors', 1 );
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
								<h1 class="upper_n">Ознакомится с брендами</h1>

<H4 style="color: #ff0000; text-transform: uppercase;"><strong>-35% на монтаж кондиционера</strong></span></H4>
<H4 style="color: #ff0000; text-transform: uppercase;"><strong>Бесплатная доставка</strong></span></H4>
<H4 style="color: #ff0000; text-transform: uppercase;"><strong>Поможем подобрать климатическое оборудование</strong></span></H4>							</header>
	<!-- <div class="content">
									Качество работы кондиционера на 99% зависит от качества установки.
									</div> -->
						</div>
					</section>

				<!-- Main -->
					<div id="main">
						<!-- Two -->
					
					<section id="" class="spotlights2">
								<section id="b1">
									<a href="#contact" class="image scrolly" >
										<img src="brands/gree.png" alt="" data-position="0% 0%">
										<img src="img/gree.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
										<h3 style="padding-left:10px;" >серия Bora</h3>
										<table cellspacing="0" cellpadding="7" bordercolor="#00000a" border="1" width="467">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p><font color="#000000"><font size="2">GWH07AAA-K3NNA2A</font></font></p>
		</td>
		<td valign="BOTTOM" width="142">
			<p><font color="#000000"><font face="Calibri, serif"><span lang="en-US">21
			</span></font></font><font color="#000000"><font face="Calibri, serif">м.</font></font></p>
		</td>
		<td valign="BOTTOM" width="141">
			<p align="CENTER"><font color="#000000"><font size="2"><b>286,00</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p><font color="#000000"><font size="2"><span lang="en-US">GWH09AAA-K3NNA2A</span></font></font></p>
		</td>
		<td valign="BOTTOM" width="142">
			<p><font color="#000000"><font face="Calibri, serif"><span lang="en-US">27
			</span></font></font><font color="#000000"><font face="Calibri, serif">м.</font></font></p>
		</td>
		<td valign="BOTTOM" width="141">
			<p align="CENTER"><font color="#000000"><font size="2"><b>308,00</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p><font color="#000000"><font size="2"><span lang="en-US">GWH12AAB-K3NNA2A</span></font></font></p>
		</td>
		<td valign="BOTTOM" width="142">
			<p><font color="#000000"><font face="Calibri, serif"><span lang="en-US">36
			 </span></font></font><font color="#000000"><font face="Calibri, serif">м.</font></font></p>
		</td>
		<td valign="BOTTOM" width="141">
			<p align="CENTER"><font color="#000000"><font size="2"><b>350,00</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p><font color="#000000"><font size="2"><span lang="en-US">GWH18AAC-K3NNA2A</span></font></font></p>
		</td>
		<td valign="BOTTOM" width="142">
			<p><font color="#000000"> <font face="Calibri, serif"><span lang="en-US">54
			</span></font></font><font color="#000000"><font face="Calibri, serif">м.</font></font></p>
		</td>
		<td valign="BOTTOM" width="141">
			<p align="CENTER"><font color="#000000"><font size="2"><b>579,00</b></font></font></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p><font color="#000000"><font size="2"><span lang="en-US">GWH24AAD-K3NNA2A</span></font></font></p>
		</td>
		<td valign="BOTTOM" width="142">
			<p><font color="#000000"><font face="Calibri, serif"><span lang="en-US">72
			</span></font></font><font color="#000000"><font face="Calibri, serif">м.</font></font></p>
		</td>
		<td valign="BOTTOM" width="141">
			<p align="CENTER"><font color="#000000"><font size="2"><b>743,00</b></font></font></p>
		</td>
	</tr>
</tbody></table>
	
<h3 style="padding-left:10px;" >Бизнес инвертор Change Pro DC inverter (Cold Plazma)</h3>
		
<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P><FONT COLOR="#000000"><FONT SIZE=2>GWH09KF-K3DNA5G</FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">27 м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT SIZE=2><B>515</B></FONT></FONT><FONT COLOR="#000000"><FONT SIZE=2><SPAN LANG="en-US"><B>,00</B></SPAN></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P><FONT COLOR="#000000"><FONT SIZE=2>GWH12KF-K3DNA5G</FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">36 м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT SIZE=2><B>575</B></FONT></FONT><FONT COLOR="#000000"><FONT SIZE=2><SPAN LANG="en-US"><B>,00</B></SPAN></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P><FONT COLOR="#000000"><FONT SIZE=2>GWH18KG-K3DNA5G</FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">54 м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT SIZE=2><B>858</B></FONT></FONT><FONT COLOR="#000000"><FONT SIZE=2><SPAN LANG="en-US"><B>,00</B></SPAN></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P><FONT COLOR="#000000"><FONT SIZE=2>GWH24KG-K3DNA5G</FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Calibri, serif">72 м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT SIZE=2><B>929</B></FONT></FONT><FONT COLOR="#000000"><FONT SIZE=2><SPAN LANG="en-US"><B>,00</B></SPAN></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>								
									</a>
									<div class="content">
										<div class="inner">
											<header class="major mt2">
												<h3>Gree</h3>
											</header>
											<p>Gree – признанный мировой лидер в производстве современной, надежной и функциональной климатической техники. Оборудование компании широко представлено в более чем 100 странах по всему миру. Начиная с 1995 года Gree входит в Топ-100 крупнейших экспортеров Азии, а с 1996 из года в год удерживает статус ведущей компании Китая. Ежегодно корпорация подтверждает свое активное присутствие в отрасли кондиционирования и с 2012 года составляет серьезную конкуренцию производителям в США. Занять 50% мирового рынка – амбициозная цель, которую ставит перед собой руководство GREE Electric Appliances Inc. </p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section id="b2">
									<a href="#contact" class="image scrolly" >
										<img src="brands/mitsubishi.png" alt="" data-position="0% 0%" style="padding-right:20px;">
	
<img src="img/mitsub.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
										<h3 style="padding-left:10px;" >Настенные Classic Inverter</h3>

<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MSZ-HJ25VA</FONT></FONT></FONT></P>
		</TD>
		<TD ROWSPAN=2 WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER STYLE="margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">25
			м</FONT></FONT></P>
			<P ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD ROWSPAN=2 WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>874,00</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MUZ-HJ25VA</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MSZ-HJ35VA</FONT></FONT></FONT></P>
		</TD>
		<TD ROWSPAN=2 WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER STYLE="margin-bottom: 0cm"><FONT COLOR="#000000"><FONT FACE="Calibri, serif">35
			м</FONT></FONT></P>
			<P ALIGN=CENTER><BR>
			</P>
		</TD>
		<TD ROWSPAN=2 WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>1095,00</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MUZ-HJ35VA</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MSZ-HJ50VA</FONT></FONT></FONT></P>
		</TD>
		<TD ROWSPAN=2 WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">50
			м</FONT></FONT></P>
		</TD>
		<TD ROWSPAN=2 WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>1500,00</FONT></FONT></FONT></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141 VALIGN=BOTTOM>
			<P><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>MUZ-HJ50VA</FONT></FONT></FONT></P>
		</TD>
	</TR>
</TABLE>
												</a>
									<div class="content">
										<div class="inner">
											<header class="major mt2">
												<h3>Mitsubishi</h3>
											</header>
											</p>Кондиционеры Mitsubishi — это высокое качество и надежность, признанные во всем мире. Многие годы опыта и разработок привели к достижению лучших результатов и оптимального сочетания эргономичности, мощности и компактности — в одном изделии. Кондиционер Mitsubishi обладает привлекательной ценой и максимальной практичностью в использовании.</p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section id="b3">
									<a href="#contact" class="image scrolly">
										<img src="brands/neoclima.png" alt="" data-position="25% 25%" >
	
<img src="img/neoclima.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
										<h3 style="padding-left:10px;" >Неинвертор (холод/тепло до -5&deg;С)</h3>
<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-07AHQ</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>21
			м</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>335,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-09AHQ</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">27
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>350,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-12AHQ</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">36
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>415,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-18AHQ</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">54
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>667,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-24AHQ</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">72
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>869,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
</TABLE>
<h3 style="padding-left:10px;" >Инвертор (холод/тепло до -20&deg;С)</h3>
<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-09AHSI</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">27
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>520,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-09AHSI-B</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">27
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>520,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-12AHSI</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">36
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>549,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-12AHSI-B</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">36
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>549,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-18AHSI</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">54
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>802,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>NS/NU-24AHSI</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">72
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>935,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
</TABLE>

								</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Neoclima</h3>
											</header>
											<p>Климатический бренд NEOCLIMA появился на рынке СНГ в 2007 году как результат совместной деятельности международных инвесторов по созданию высокотехнологичного продукта, который по качеству и своим техническим возможностям превосходил бы существующие аналоги, но не вызывал ощущения недоступности.</p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section id="b4">
									<a href="#contact" class="image scrolly">
										<img src="brands/leberg.png" alt="" data-position="25% 25%" >
	<img src="img/leberg.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
										<h3 style="padding-left:10px;" >Инвертор Thor Wi-Fi</h3>
<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TOR09WF/LBU-TOR09WF</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">27
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>413,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TOR12WF/LBU-TOR12WF</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">36
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>432,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TOR18WF/LBU-TOR18WF</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">54
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>694,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TOR24WF/LBU-TOR24WF</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">72
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>916,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
</TABLE>
<h3 style="padding-left:10px;" >Неинвертор Tiara R410</h3>
<TABLE WIDTH=467 BORDER=1 BORDERCOLOR="#00000a" CELLPADDING=7 CELLSPACING=0>
	<COL WIDTH=141>
	<COL WIDTH=142>
	<COL WIDTH=141>
	<TR VALIGN=TOP>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Модель</P>
		</TD>
		<TD WIDTH=142>
			<P ALIGN=CENTER>Площадь помещения, кв.м</P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER>Стоимость, <SPAN LANG="en-US">USD</SPAN></P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TBA08/LBU-TBA08</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">24
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>225,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TBA10/LBU-TBA10</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">30
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>240,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TBA13/LBU-TBA13</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">39
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>320,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TBA19/LBU-TBA19</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">57
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>451,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>LBS-TBA26/LBU-TBA26</FONT></FONT></FONT></P>
		</TD>
		<TD WIDTH=142 VALIGN=BOTTOM>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Calibri, serif">76
			м</FONT></FONT></P>
		</TD>
		<TD WIDTH=141>
			<P ALIGN=CENTER><FONT COLOR="#000000"><FONT FACE="Arial, serif"><FONT SIZE=2>596,00
			</FONT></FONT></FONT>
			</P>
		</TD>
	</TR>
</TABLE>

								</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Leberg</h3>
											</header>
											<p>Компания была основана в 1963 г. и производила системы вентиляции и надежные чугунные древесные котлы для крупных текстильных фабрик. С 1992 г. компания вышла на рынок бытового кондиционирования и сразу завоевала поддержку потребителей своим качеством и приемлемой стоимостью.  Продуманная конструкция, высокая надежность комплектующих и многоступенчатый контроль производства позволил продукции LEBERG завоевать доверие к товару на рынке.</p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section id="b5">
									<a href="#contact" class="image scrolly">
										<img src="brands/panasonic.png" alt="" data-position="25% 25%" >

<img src="img/panas.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
										<h3 style="padding-left:10px;" >Инвертор (холод/тепло до -20&deg;С)</h3>
<table width="467" border="1" bordercolor="#00000a" cellpadding="7" cellspacing="0">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-UE
			7RKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">21 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">742,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-UE
			9RKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">27 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">788,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-UE12RKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">36 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">867,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-UE18RKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">54 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">1369,00
			</font></font></font>
			</p>
		</td>
	</tr>
</tbody></table>


<h3 style="padding-left:10px;" >Неинвертор (холод/тепло до -5&deg;С)</h3>	
<table width="467" border="1" bordercolor="#00000a" cellpadding="7" cellspacing="0">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-YW
			7MKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">21 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">484,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-YW
			9MKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">27 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">511,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">CS/CU-YW12MKD</font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p><font color="#000000"><font face="Calibri, serif">36 м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">607,00
			</font></font></font>
			</p>
		</td>
	</tr>
</tbody></table>								</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Panasonic</h3>
											</header>
											<p>В 1957 году Panasonic начала разработки в производстве кондиционеров. На сегодняшний день, на долю Panasonic приходится до 40% мировых объемов производства кондиционеров и их комплектующих. Кондиционеры Panasonic ценятся во всем мире за их надёжность и качество. Кондиционеры Panasonic воплотившие в себе полноценные воздухоочистители стали признаны во всем мире за идеальное качество сборки и современный дизайн. </p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>	
								<section id="b6">
									<a href="#contact" class="image scrolly">
										<img src="brands/toshiba.png" alt="" data-position="25% 25%" >


<img src="img/toshiba.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
						<h3 style="padding-left:10px;" >Инвертор (холод/тепло до -20&deg;С)</h3>
<table width="467" border="1" bordercolor="#00000a" cellpadding="7" cellspacing="0">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-05BKVG-EE/RAS-05BAVG-EE</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">15
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">632,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-07BKVG-EE/RAS-07BAVG-EE</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">21
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">651,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-10BKVG-EE/RAS-10BAVG-EE</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">30
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">684,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-13BKVG-EE/RAS-13BAVG-EE</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">29
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">750,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-16BKVG-EE/RAS-16BAVG-EE</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">48
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">1079,00
			</font></font></font>
			</p>
		</td>
	</tr>
</tbody></table>
<h3 style="padding-left:10px;" >Неинвертор (холод/тепло до -5&deg;С)</h3>
<table width="467" border="1" bordercolor="#00000a" cellpadding="7" cellspacing="0">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-07SKHP-E/RAS-07S2AH-E</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">21
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">470,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-07SKHP-E/RAS-07UAH-E4</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">21
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">470,00
			</font></font></font>
			</p>
		</td>
	</tr>
	<tr>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2"><span lang="en-US">RAS-13SKHP-E1/RAS-13S2AH-E1</span></font></font></font></p>
		</td>
		<td width="142" valign="BOTTOM">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">39
			м</font></font></p>
		</td>
		<td width="141">
			<p align="CENTER"><font color="#000000"><font face="Arial, serif"><font size="2">592,00
			</font></font></font>
			</p>
		</td>
	</tr>
</tbody></table>
									</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Toshiba</h3>
											</header>
											<p>Кондиционеры Toshiba - это кондиционеры, которые заботятся о своих потребителях! Сочетают в себе стильный дизайн, японское качество, инновационные технологии и высокую производительность. </p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								<section id="b7">
									<a href="#contact" class="image scrolly">
										<img src="brands/daikin.png" alt="" data-position="25% 25%" >
	
<img src="img/daikin.jpg" style="width:270px;margin:10px auto;" alt="" data-position="0% 0%">
						<h3 style="padding-left:10px;" >Инвертор (холод/тепло до -20&deg;С)</h3>
<table width="467" border="1" bordercolor="#00000a" cellpadding="7" cellspacing="0">
	<colgroup><col width="141">
	<col width="142">
	<col width="141">
	</colgroup><tbody><tr valign="TOP">
		<td width="141">
			<p align="CENTER">Модель</p>
		</td>
		<td width="142">
			<p align="CENTER">Площадь помещения, кв.м</p>
		</td>
		<td width="141">
			<p align="CENTER">Стоимость, <span lang="en-US">USD</span></p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">FTYN 20 L</font></font></p>
		</td>
		<td rowspan="2" width="142">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">20м</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
		<td rowspan="2" width="141">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">530</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><a name="_GoBack"></a><font color="#000000"> <font face="Calibri, serif">RYN
			25 L</font></font></p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">FTYN 25 LV1B</font></font></p>
		</td>
		<td rowspan="2" width="142">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">25м</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
		<td rowspan="2" width="141">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">547</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">RYN 25 LV1B</font></font></p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">FTYN 35 LV1B</font></font></p>
		</td>
		<td rowspan="2" width="142">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">35м</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
		<td rowspan="2" width="141">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">580</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">RYN 35 LV1B</font></font></p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">FTYN 50 LV1B</font></font></p>
		</td>
		<td rowspan="2" width="142">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">50м</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
		<td rowspan="2" width="141">
			<p align="CENTER" style="margin-bottom: 0cm"><font color="#000000"><font face="Calibri, serif">860</font></font></p>
			<p align="CENTER"><br>
			</p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">RYN 50 LV1B</font></font></p>
		</td>
	</tr>
	<tr valign="BOTTOM">
		<td width="141">
			<p><font color="#000000"> <font face="Calibri, serif">FTYN 60 LV1B</font></font></p>
		</td>
		<td rowspan="2" width="142">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">60м</font></font></p>
		</td>
		<td rowspan="2" width="141">
			<p align="CENTER"><font color="#000000"><font face="Calibri, serif">905</font></font></p>
		</td>
	</tr>
	<tr>
		<td width="141" valign="BOTTOM">
			<p><font color="#000000"> <font face="Calibri, serif">RYN 60 LV1B</font></font></p>
		</td>
	</tr>
</tbody></table>
								</a>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Daikin</h3>
											</header>
											<p>Компания Daikin стала одним из мировых лидеров производящих климатическую технику. Именно кондиционеры Дайкин сочетают в себе лучшие современные технические достижения, высокую надежность и огромное количество функций, которые значительно повысят комфорт жизни.</p>
											<ul class="actions">
												<li><a href="#contact" class="button scrolly">Связаться с менеджером</a></li>
											</ul>
										</div>
									</div>
								</section>
								
								
									<!-- brends end -->
							</section>			
	<section id="line2">
	<div class="content" style="text-align:center;width:100%;">
									Качество работы кондиционера на 99% зависит от качества установки.
									</div>
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
</script> </body>
</html>