<?php
	ob_start();
	session_start();
	
	require("../inc/config.php");
	if(isset($_COOKIE["adminname"])){
		$username	= $_COOKIE["adminname"];
	}elseif(isset($_SESSION["adminname"])){
		$username	= $_SESSION["adminname"];
	}else{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ЕКО Дом | Редактиране на рецепта</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
<link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<a class="navbar-brand" href="index.html">
			<img src="assets/img/logo.png" alt="logo" class="img-responsive"/>
		</a>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" src="assets/img/avatar.png"/>
					<span class="username">
						 <?php echo $username; ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="logout.php">
							<i class="fa fa-key"></i> Изход
						</a>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse navbar-no-scroll">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="start">
					<a href="index.php">
						<i class="fa fa-home"></i>
						<span class="title">
							Начало
						</span>
					</a>
				</li>
				<li class="active">
					<a href="javascript:;">
						<i class="fa fa-bookmark-o"></i>
						<span class="title">
							Рецепти
						</span>
						<span class="arrow open">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="add.php">
								<i class="fa fa-puzzle-piece"></i>
								Добавяне
							</a>
						</li>
						<li class="active">
							<a href="edit.php">
								<i class="fa fa-cogs"></i>
								Редактиране
							</a>
						</li>
					</ul>
				</li>
				<li>
					
					<a href="javascript:;">
						<i class="fa fa-bookmark-o"></i>
						<span class="title">
							Категории
						</span>
						<span class="arrow open">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="categories.php?cat=add">
								<i class="fa fa-puzzle-piece"></i>
								Добавяне
							</a>
						</li>
						<li>
							<a href="categories.php?cat=edit">
								<i class="fa fa-cogs"></i>
								Редактиране
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-folder-open-o"></i>
								Подкатегории
								<span class="arrow">
								</span>
							</a>
							<ul class="active sub-menu">
								<li>
									<a href="subcategories.php?cat=add">
										<i class="fa fa-puzzle-piece"></i>
										Добавяне
									</a>
								</li>
								<li>
									<a href="subcategories.php?cat=edit">
										<i class="fa fa-cogs"></i>
										Редактиране
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="last">
					<a href="site_config.php">
						<i class="fa fa-cogs"></i>
						<span class="title">
							Настройки на сайта
						</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->
					<ul class="page-breadcrumb breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.php">
								Начало
							</a>
							<i class="fa fa-angle-right"></i>
							<a href="#">
								Рецепти
							</a>
							<i class="fa fa-angle-right"></i>
							<a href="edit.php">
								Редактиране
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<?php
				if(isset($_GET['id'])){
					$id = $_GET['id'];

					$mfa = mysql_fetch_assoc(mysql_query("SELECT * FROM recepts WHERE id='$id'"));

					if($_POST){

						function strip_only($str, $tags, $stripContent = false) {
							$content = '';
							if(!is_array($tags)) {
								$tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags));
								if(end($tags) == '') array_pop($tags);
							}
							foreach($tags as $tag) {
								if ($stripContent)
									 $content = '(.+</'.$tag.'[^>]*>|)';
								$str = preg_replace('#</?'.$tag.'[^>]*>'.$content.'#is', '', $str);
							}
							return $str;
						}

						function replace_p($recept){
							if(strpos($recept, "<p>") !== false){
								$replace = str_replace("<p>", '<p class="recepts">', $recept);
							}elseif(strpos($recept, '<p class="recepts" style="margin-left: 40px;">') !== false){
								$replace = str_replace('<p class="recepts" style="margin-left: 40px;">', '<p class="recepts" style="margin-left: 30.0pt;">', $recept);
							}elseif(strpos($recept, '<p class="recepts" style="margin-left: 36.0pt;">') !== false){
								$replace = str_replace('<p class="recepts" style="margin-left: 36.0pt;">', '<p class="recepts" style="margin-left: 30.0pt;">', $recept);
							}else{
								return $recept;
							}

							$replace = str_replace('<img alt=""', '<img class="recepts" alt=""', $recept);
							
							return $replace;
						}
						$tags = array('span', 'font');

						$name = $_POST["name"];
						if($_POST['subcategory']){
							$twice = explode( '-', $_POST['subcategory']);
							$category	 = $twice[0];
							$subcategory = $twice[1];
						}elseif($_POST['category']){
							$category	= $_POST['category'];
							$subcategory	= 0;
						}
						$text			= $_POST["text"];
						$video			= $_POST["video"];
						$small_image	= $_POST["small_image"];
						$recept			= $_POST["recept"];
						$recept = strip_only($recept, $tags);
						$recept = str_replace("<p>", '<p class="recepts">', $recept);
						$recept = replace_p($recept);
						$text = strip_only( $text, $tags);
						$text = str_replace("<p>", '<p class="recepts">', $text);
						$text = replace_p($text);
						
						$sqlU = mysql_query("UPDATE recepts SET name='$name', text='$text', video='$video', recepts='$recept', small_image='$small_image', category='$category', subcategory='$subcategory' WHERE id='$id'") or die(mysql_error());
						if($_FILES['files']){
							foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
								$file_name = $_FILES['files']['name'][$key];
								$file_size = $_FILES['files']['size'][$key];
								$file_tmp  = $_FILES['files']['tmp_name'][$key];
								$file_type = $_FILES['files']['type'][$key];	
										
								$desired_dir="../images/recepts/".$id;
								if(empty($errors)==true){
									if(is_dir($desired_dir)==false){
										mkdir("$desired_dir", 0755);		// Create directory if it does not exist
									}
									if(is_dir("$desired_dir/".$file_name)==false){
										move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
									}
								}else{
									print_r($errors);
								}
							}						
							if(empty($error)){
								echo "Рецептата е качена.";
							}
						}else{
							echo "Рецептата е качена.";
						}
					}else{
			?>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN FORM-->
					<form action="edit.php?id=<?php echo $mfa['id'] ?>" method="post" class="form-horizontal form-bordered form-label-stripped" enctype="multipart/form-data">
						<div class="form-body">

							<div class="form-group">
								<label class="control-label col-md-2">Заглавие</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="name" value="<?php echo $mfa['name']?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-2">Категория</label>
								<div class="col-md-9">
									<select class="form-control" name="category">
										<option value="">Избери категория</option>
										<?php
											$sqlC = mysql_query("SELECT * FROM categories");
											while($mfaC=mysql_fetch_assoc($sqlC)){

												if($mfa["category"]==$mfaC['id']){
													$selected=' selected="selected"';
												}else{
													$selected='';
												}

												echo '
													<option'.$selected.' value="'.$mfaC['id'].'">'.$mfaC['name'].'</option>
												';
											}
										?>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-2">Категория и подкатегории</label>
								<div class="col-md-9">
									<select class="form-control" name="subcategory">
										<option value="">Избери подкатегория</option>
										<?php
											$sqlC = mysql_query("SELECT * FROM categories");
											while($mfaC=mysql_fetch_assoc($sqlC)){
												echo '
													<optgroup label="'.$mfaC['name'].'">
													';
														$for = $mfaC['id'];											
														$sqlSC = mysql_query("SELECT * FROM subcategories WHERE `for`='$for'");
														while($mfaSC=mysql_fetch_assoc($sqlSC)){

															if($mfa["subcategory"]==$mfaSC['id']){
																$selected=' selected="selected"';
															}else{
																$selected='';
															}
															echo '
																<option '.$selected.' value="'.$mfaC['id'].'-'.$mfaSC['id'].'">'.$mfaSC['name'].'</option>
															';
														}
												echo'
													</optgroup>
												';
											}
										?>
									</select>
								</div>
							</div>


							<div class="form-group">
								<label class="control-label col-md-2">Рецепта</label>
								<div class="col-md-10">
									<textarea class="ckeditor form-control" name="recept" rows="6"><?php echo $mfa['recepts']?></textarea>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-2">Видео</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="video" value="<?php echo $mfa['video']?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-2">Малка снимка</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="small_image" value="<?php echo $mfa['small_image']?>"/>
								</div>
							</div>

							<div class="form-group last">
								<label class="control-label col-md-2">Текст</label>
								<div class="col-md-10">
									<textarea class="ckeditor form-control" name="text" rows="6"><?php echo $mfa['text']?></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-2">Снимки</label>
							<div class="col-md-10">
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<div class="input-group input-large">
										<div class="form-control uneditable-input span3" data-trigger="fileinput">
											<i class="fa fa-file fileinput-exists"></i>&nbsp;
											<span class="fileinput-filename">
											</span>
										</div>
										<span class="input-group-addon btn default btn-file">
											<span class="fileinput-new">
												 Избери файлове
											</span>
											<span class="fileinput-exists">
												 Промени
											</span>
											<input type="file" name="files[]" multiple>
										</span>
										<a href="#" class="input-group-addon btn default fileinput-exists" data-dismiss="fileinput">
											 Премахни
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="form-actions fluid">
							<div class="row">
								<div class="col-md-8">
									<div class="col-md-offset-3 col-md-10">
										<button type="submit" class="btn green"><i class="fa fa-check"></i> Редактирай</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- END FORM-->
				</div>
			</div>
			<?php
					}
				}else{
			?>
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
							<tr>
								<th>
									 №
								</th>
								<th>
									 Заглавие
								</th>
								<th>
									 Рецепта
								</th>
								<th>
									 Видео / Текст
								</th>
								<th>
									 Категория
								</th>
								<th>
									 Опции
								</th>
							</tr>
						</thead>

						<tbody>
						<?php
							$sql = mysql_query("SELECT * FROM recepts");

							while($mfa = mysql_fetch_assoc($sql)){
								$text = preg_replace("/&#?[a-z0-9]+;/i","", strip_tags($mfa['text'])); // Изчистване на кода
								$lenght = strlen($text);
								$limit = 25;
								if ($lenght > $limit) {
									$text = mb_substr($text,0,$limit) . "...";
								}

								$video = preg_replace("/&#?[a-z0-9]+;/i","", strip_tags($mfa['video'])); // Изчистване на кода
								$lenght = strlen($video);
								$limit = 25;
								if ($lenght > $limit) {
									$video = mb_substr($video,0,$limit) . "...";
								}

								$name = preg_replace("/&#?[a-z0-9]+;/i","", strip_tags($mfa['name'])); // Изчистване на кода
								$lenght = strlen($name);
								$limit = 25;
								if ($lenght > $limit) {
									$name = mb_substr($name,0,$limit) . "...";
								}

								$recept = preg_replace("/&#?[a-z0-9]+;/i","", strip_tags($mfa['recepts'])); // Изчистване на кода
								$lenght = strlen($recept);
								$limit = 25;
								if ($lenght > $limit) {
									$recept = mb_substr($recept,0,$limit) . "...";
								}

								$cat = $mfa['category'];
								$category = mysql_fetch_assoc(mysql_query("SELECT * FROM categories WHERE id='$cat'"));

									echo "
										<tr>
											<td>".$mfa['id']."</td>
											<td>".$name."</td>
											<td>".$recept."</td>
											<td>";
													if(!$mfa['video']==NULL){
														echo $video;
													}else{
														echo $text;
													}
									echo"
											</td>
											<td>".$category['name']."</td>
											<td>
												 <a href='edit.php?id=".$mfa['id']."'>Редактиране</a> | 
												 <a data-toggle='modal' href='#basic".$mfa['id']."'>Изтриване</a>
												<div class='modal fade' id='basic".$mfa['id']."' tabindex='-1' role='basic' aria-hidden='true'>
													<div class='modal-dialog'>
														<div class='modal-content'>
															<div class='modal-header'>
																<button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
																<h4 class='modal-title'>Изтриване</h4>
															</div>
															<div class='modal-body'>
																 Сигурни ли сте че искате да изтриете тази рецепта.
															</div>
															<div class='modal-footer'>
																<button type='button' class='btn default' data-dismiss='modal'>Отказ</button>
																<a href='../inc/delete.php?id=".$mfa['id']."' class='btn blue'>Изтриване</a>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- /.modal-dialog -->
												</div>
												<!-- /.modal -->
											</td>
										</tr>
										";
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
			<?php
				}
			?>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/components-editors.js"></script>
<script src="assets/scripts/custom/table-managed.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   ComponentsEditors.init();
   TableManaged.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>