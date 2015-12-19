<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="theme-color" content="#259b24">
		<title>ЕКО Дом - Търсене</title>
		<link rel="stylesheet" href="../style/style.css">
		<script src="../scripts/jquery-latest.min.js"></script>
		<script src="../scripts/jquery.masonry.min.js"></script>
		<script src="../scripts/custom.js"></script>
		<script>
			$(function(){
				// Items
				setInterval(function(){
					$("#article").masonry({itemSelector : ".article"})
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
							Търсене
						</div>
						
						<label for="menu-toggle" id="openmenu">Меню</label>
						<input type="checkbox" id="menu-toggle"/>

						<div id="menu">
							<ul>
								<li><a href="../index.php">Начало</a></li>
								<li><a href="../recepts.php">Рецепти</a></li>
								<li><a href="../contacts.php">Контакти</a></li>
								<li id="search">
									<div id="searchicon"></div>
									<form action="#" method="post" id="searchform">
										<input type="text" name="search">
									</form>
								</li>
							</ul>
						</div>
					</div>
				</header>

				<div id="content" class="center">
					<?php
						require "config.php";

						function permalink($string) {
							$find = array('a', 'b', 'v', 'g', 'd', 'e', 'zh', 'tz', 'ch', 'sh', 'sht', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'y', 'u', 'yu', 'ya');
							$replace = array('а', 'б', 'в', 'г', 'д', 'е', 'ж', 'ц', 'ч', 'ш', 'щ', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ь', 'ъ', 'ю', 'я');
							$string = strtolower(str_replace($find, $replace, $string));
							return $string;
						}

						$search_words = permalink($_POST['search']);
						$sql = mysql_query("SELECT * FROM recepts WHERE name LIKE '%".$search_words."%'");

						echo'<div id="article">';

						while ($result = mysql_fetch_assoc($sql)) {
							$cat = $result['category'];
							$cat = mysql_fetch_assoc(mysql_query("SELECT * FROM categories WHERE id='$cat'"));
							$subcat = $result['subcategory'];
							$subcat = mysql_fetch_assoc(mysql_query("SELECT * FROM subcategories WHERE id='$subcat'"));
							echo '
								<a href="../recepts.php?id='.$result['id'].'" class="article">
									<div class="image">';
									if($result['small_image'] != NULL){
										echo'<img src="images/recepts/'.$result['id'].'/'.$result['small_image'].'" alt="" class="recepts">';
									}
							echo'		</div>
									<h3>'.$result['name'].'</h3>';
									if($subcat != 0){
										echo'
											<h5>Категория: '.$cat['name'].'</h5>
											<h5>Под категория: '.$subcat['name'].'</h5>
										';
									}else{
										echo'
											<h5>Категория: '.$cat['name'].'</h5>
										';
									}
							echo'
								</a>
							';
						}

						echo '</div>';
					?>
				</div>

				<footer>
					<div class="center">

						<ul class="social">
							<li><a href="https://plus.google.com/109754114671350191105" id="google" target="_blank"></a></li>
							<li><a href="https://www.youtube.com/channel/UCWlGFngTTf4s46rp7MroP7A" id="youtube" target="_blank"></a></li>
							<li><a href="#" id="twitter" target="_blank"></a></li>
							<li><a href="#" id="facebook" target="_blank"></a></li>
						</ul>

						<h6>designed &amp; developped by Mihail Georgiev</h6>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>