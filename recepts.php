<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="theme-color" content="#259b24">
		<meta name="keywords" content="<?php require "inc/config.php"; echo $keywords; ?>">
		<meta name="description" content="<?php echo $description; ?>">
		<title>ЕКО Дом - Рецепти</title>
		<link rel="stylesheet" href="style/style.css">
		<script src="scripts/jquery-latest.min.js"></script>
		<script src="scripts/jquery.masonry.min.js"></script>
		<script src="scripts/custom.js"></script>
		
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
		<script>
			$(function(){
				// Items
				setInterval(function(){
					$("#article").masonry({itemSelector : ".article"})
					$("#subcat").masonry({itemSelector : ".article"})
				}, 1);
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<header>
					<div class="center">
						<div id="logo">
							Рецепти
						</div>
						
						<label for="menu-toggle" id="openmenu">Меню</label>
						<input type="checkbox" id="menu-toggle"/>

						<div id="menu">
							<ul>
								<li><a href="index.php">Начало</a></li>
								<li>
									<label for="submenu-toggle" id="curent">Рецепти</label>
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

				<div id="content" class="center">
					<?php
						require "inc/config.php";						

						if(isset($_GET['cat'])){
							$cat = $_GET['cat'];
							$sql = mysql_query("SELECT * FROM recepts WHERE category='$cat' AND subcategory = '0'") or die(mysql_error());
							$result = mysql_fetch_assoc($sql);

							$subcat = mysql_num_rows(mysql_query("SELECT id FROM subcategories WHERE `for`='$cat'"));

							if ($subcat != 0){
								$sqlSC = mysql_query("SELECT * FROM subcategories WHERE `for`='$cat'") or die(mysql_error());

								echo'<div id="subcat">';

								while ($resultSC = mysql_fetch_assoc($sqlSC)) {
									echo '
										<a href="recepts.php?sub='.$resultSC['id'].'" class="article">
											<h3>'.$resultSC['name'].'</h3>
										</a>
									';
								}

								echo '</div>';
							}

							echo'<div id="article">';

							while ($result = mysql_fetch_assoc($sql)) {
								echo '
									<a href="recepts.php?id='.$result['id'].'" class="article">
										<div class="image">';
									if($result['small_image'] != NULL){
										echo'<img src="images/recepts/'.$result['id'].'/'.$result['small_image'].'" alt="" class="recepts">';
									}

								echo'	</div>
										<h3>'.$result['name'].'</h3>
									</a>
								';
							}

							echo '</div>';

							
						}elseif(isset($_GET['id'])){
							$id = $_GET['id'];
							$sql = mysql_query("SELECT * FROM recepts WHERE id='$id'") or die(mysql_error());
							$result = mysql_fetch_assoc($sql);

							$text = str_replace('<img alt="" src="', '<img alt="" src="images/recepts/'.$id.'/', $result['text']);
							$recepts = str_replace('<img alt="" src="', '<img alt="" src="images/recepts/'.$id.'/', $result['recepts']);

							echo'
								<div id="left_sidebar">
									<h2 class="recepts">'.$result['name'].'</h2>';	
								if($result['small_image'] != NULL){
									echo'<img src="images/recepts/'.$result['id'].'/'.$result['small_image'].'" alt="" class="recepts">';
								}

							echo $recepts.'
								</div>

								<div id="right_sidebar">
									<h2>'.$result['name'].'</h2>
							';
 
							if($result['video'] != NULL && $text!= NULL){
								echo'
									<iframe src="'.$result['video'].'" frameborder="0" allowfullscreen></iframe>
								'. $text;
							}elseif($text!= NULL){
								echo $text;
							}elseif($result['video'] != NULL){
								echo'
									<iframe src="'.$result['video'].'" frameborder="0" allowfullscreen></iframe>
								';
							}
							echo'
								</div>
							';
						}elseif(isset($_GET['sub'])){
							$subid = $_GET['sub'];
							$sql = mysql_query("SELECT * FROM recepts WHERE subcategory='$subid'") or die(mysql_error());
							
							echo'<div id="article">';

							while ($result = mysql_fetch_assoc($sql)) {
								echo '
									<a href="recepts.php?id='.$result['id'].'" class="article">
										<div class="image">';
									if($result['small_image'] != NULL){
										echo'<img src="images/recepts/'.$result['id'].'/'.$result['small_image'].'" alt="" class="recepts">';
									}

								echo'	</div>
										<h3>'.$result['name'].'</h3>
									</a>
								';
							}

							echo '</div>';
						}else{
							$sql = mysql_query("SELECT * FROM categories") or die(mysql_error());

							echo'<div id="article">';

							while ($result = mysql_fetch_assoc($sql)) {
								$cat = $result['id'];
								$row = mysql_num_rows(mysql_query("SELECT * FROM recepts WHERE category='$cat'"));
								echo '
									<a href="recepts.php?cat='.$result['id'].'" class="article center">
										<h3>'.$result['name'].'</h3>
										<h5>Има общо '.$row.' рецепти.</h5>
									</a>
								';
							}

							echo '</div>';
						}
					?>
				</div>

				<footer>
					<div class="center">

						<ul class="social">
							<li><a href="https://plus.google.com/109754114671350191105" id="google" target="_blank"></a></li>
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
	$page = "Рецепти";

	include ( 'inc/counter/counter.php');
	addinfo($page);
?>