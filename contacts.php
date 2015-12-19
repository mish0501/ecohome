<?php
	require "inc/config.php";

	if(isset($_POST) and $_SERVER["REQUEST_METHOD"] == "POST"){
		$name		= $_POST['name'];
		$lastname	= $_POST['lastname'];
		$email		= $_POST['email'];
		$message	= $_POST['message'];
		
		$from = $name." ".$lastname."<".$email.">";
		$for  = "mmisho0501@gmail.com";
		$sub  = "Еко Дом - ".$name." ".$lastname." ти написа съобщение.";
		$text = $message;
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=utf-8\r\n";
		$headers .= "From: ".$from." \r\n";
		$headers .= "Reply-To: ".$from." \r\n";
		
		$mail = mail($for, $sub, $text, $headers);
		
		if($mail){
			echo "Съобщението е изпратено успешно.";
		}else{
			echo "Съобщението не изпратено.";
		}
	}else{
?>
<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="theme-color" content="#259b24">
		<meta name="keywords" content="<?php echo $keywords; ?>">
		<meta name="description" content="<?php echo $description; ?>">
		<title>ЕКО Дом - Рецепти</title>
		<link rel="stylesheet" href="style/style.css">
		<script src="scripts/jquery-latest.min.js"></script>
		<script src="scripts/jquery.autosize.min.js"></script>
		<script src="scripts/jquery.form.js"></script>
		<script src="scripts/jquery.validate.min.js"></script>
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
			$(function() {
				$('textarea').autosize();

				$('#contacts').validate({
					rules: {
						name: {
							required: true,
							minlength: 4,
							maxlength: 10
						},

						lastname: {
							required: true,
							minlength: 4,
							maxlength: 20
						},
						
						email: {
							required: true,
							email: true
						},
						
						message: {
							required: true,
							minlength: 10
						}
					},
					submitHandler: function (form){
						$("form#contacts").ajaxSubmit({
							type:		"POST",
							url:		"#",
							data:		$("form#contacts").serialize(),
							success:	function(msg){
								alert(msg);
								$("form#contacts")[0].reset();
							}
						});
						return false;
					}
				});
			});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<header>
					<div class="center">
						<div id="logo">
							Контакти
						</div>
						
						<label for="menu-toggle" id="openmenu">Меню</label>
						<input type="checkbox" id="menu-toggle"/>

						<div id="menu">
							<ul>
								<li><a href="index.php">Начало</a></li>
								<li>
									<label for="submenu-toggle">Рецепти</label>
									<input type="checkbox" id="submenu-toggle"/>
									<ul>
										<li><a href="recepts.php?cat=1">Еко козметика</a></li>
										<li><a href="recepts.php?cat=2">За дома</a></li>
										<li><a href="recepts.php?cat=3">Еко медицина</a></li>
									</ul>
								</li>
								<li><a href="contacts.php" id="curent">Контакти</a></li>
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

				<div id="content-contacts" class="center">
					<div id="about-us">
						<div id="misho">
							<div id="photo">
								<img src="images/site/misho.jpg" alt="">
							</div>
							<div id="text">
								<h2 id="name">Михаил Бисеров Георгиев</h2>
								<p><?php echo $misho; ?></p>
							</div>
						</div>
						<hr>
						<div id="miglena">
							<div id="photo">
								<img src="images/site/miglena.jpg" alt="">
							</div>
							<div id="text">
								<h2 id="name">Миглена Младенова Димитирова</h2>
								<p><?php echo $miglena; ?></p>
							</div>
						</div>
					</div>
					
					<form action="#" method="post" id="contacts">
						<div class="field two">
							<div class="first">
								<label for="name">Име</label>
								<input type="text" name="name" id="name">
							</div>
							<div class="second">
								<label for="lastname">Фамилия</label>
								<input type="text" name="lastname" id="lastname">
							</div>
						</div>
						<div class="field">
							<label for="email">Емейл</label>
							<input type="email" name="email" id="email">
						</div>
						<div class="field">
							<label for="message">Съобщение</label>
							<textarea name="message" id="message"></textarea>
						</div>
						<div id="button">
							<input type="submit" value="Изпрати">
						</div>
					</form>
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
	}
	
	$page = "Контакти" ;

	include ( 'inc/counter/counter.php');
	addinfo($page);
?>