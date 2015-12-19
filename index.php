<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="keywords" content="<?php require "inc/config.php"; echo $keywords; ?>">
		<meta name="description" content="<?php echo $description; ?>">
		<meta name="theme-color" content="#259b24">
		<title>ЕКО Дом</title>
		<link rel="stylesheet" href="style/style.css">
		<script src="scripts/jquery-latest.min.js"></script>
		<script src="scripts/jquery.touchSwipe.min.js"></script>
		<script src="scripts/unslider.min.js"></script>
		<script src="scripts/home.js"></script>
		
		<!-- Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/site/favicons/favicon-152.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/site/favicons/favicon-144.png">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/site/favicons/favicon-120.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/site/favicons/favicon-114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/site/favicons/favicon-72.png">
		<link rel="apple-touch-icon-precomposed" href="images/site/favicons/favicon-57.png">
		<link rel="icon" href="images/site/favicons/favicon-16.png" sizes="16x16">
		<link rel="icon" href="images/site/favicons/favicon-32.png" sizes="32x32">
		<link rel="icon" href="images/site/favicons/favicon-96.png" sizes="96x96">
		<link rel="icon" href="images/site/favicons/favicon-128.png" sizes="128x128">
		<link rel="icon" href="images/site/favicons/favicon-195.png" sizes="195x195">
		<link rel="icon" href="images/site/favicons/favicon-228.png" sizes="228x228">
		<link rel="shortcut icon" href="images/site/favicons/favicon.ico">
		<link rel="icon" sizes="16x16 24x24 32x32 48x48 64x64" href="images/site/favicons/favicon.ico">
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<header>
					<div class="center">
						<div id="logo">
							ЕКО Дом
						</div>

						<label for="menu-toggle" id="openmenu"><img src="images/site/menu.png" alt=""></label>
						<input type="checkbox" id="menu-toggle"/>

						<div id="menu">
							<ul>
								<li><a href="index.php" id="curent">Начало</a></li>
								<li>
									<label for="submenu-toggle">Рецепти</label>
									<input type="checkbox" id="submenu-toggle"/>
									<ul>
										<li><a href="recepts.php?cat=1">Еко козметика</a></li>
										<li><a href="recepts.php?cat=2">За дома</a></li>
										<li><a href="recepts.php?cat=3">Еко медицина</a></li>
									</ul>
								</li>
								<li><a href="contacts.php">Контакти</a></li>
								<li id="search">
									<div id="searchicon"></div>
									<form action="inc/search.php" method="post" id="searchform">
										<input type="text" name="search">
									</form>
								</li>
							</ul>
						</div>
					</div>
				</header>

				<div id="slider">

					<div id="left-side">
						<a href="#" class="unslider-arrow prev"></a>
					</div>

					<div id="right-side">
						<a href="#" class="unslider-arrow next"></a>
					</div>

					<div id="banner">
						<ul id="images">
							<li id="vid"><div class="center"><iframe src="https://www.youtube.com/embed/RaIT2DLPFL8" frameborder="0" allowfullscreen></iframe></div></li>
							<li id="vid"><div class="center"><iframe src="https://www.youtube.com/embed/CrfecZSMroc" frameborder="0" allowfullscreen></iframe></div></li>
							<li id="vid"><div class="center"><iframe src="https://www.youtube.com/embed/7LwBDHFrh_4" frameborder="0" allowfullscreen></iframe></div></li>
							<li><img src="images/recepts/1/large.png" alt=""></li>
						</ul>
					</div>
				</div>

				<div id="content-home" class="center">
					<div id="first-step">
						<div id="icon"></div>
						<h3>Прочети рецептата</h3>
					</div>
					<div id="second-step">
						<div id="icon"></div>
						<h3>Изгледай видеото</h3>
					</div>
					<div id="third-step">
						<div id="icon"></div>
						<h3>Изпробвай я вкъщи</h3>
					</div>
				</div>

				<footer>
					<div class="center">

						<ul class="social">
							<li><a href="https://plus.google.com/109754114671350191105" rel="publisher" id="google" target="_blank"></a></li>
							<li><a href="https://www.youtube.com/channel/UCWlGFngTTf4s46rp7MroP7A" id="youtube" target="_blank"></a></li>
							<li><a href="#" id="twitter" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/pages/%D0%95%D0%BA%D0%BE-%D0%94%D0%BE%D0%BC/855329267838600" id="facebook" target="_blank"></a></li>
						</ul>

						<h6>designed &amp; developped by Mihail Georgiev</h6>
					</div>
				</footer>
			</div>
		</div>			
	</body>
</html>
<?php
	$page = 'Начало';

	include ( 'inc/counter/counter.php');
	addinfo($page);
?>