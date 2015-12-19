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
<title>ЕКО Дом | Добавяне на рецепта</title>
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
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-toastr/toastr.min.css"/>
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
				<li>
					<a href="javascript:;">
						<i class="fa fa-bookmark-o"></i>
						<span class="title">
							Рецепти
						</span>
						<span class="arrow open">
						</span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="add.php">
								<i class="fa fa-puzzle-piece"></i>
								Добавяне
							</a>
						</li>
						<li>
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
				<li class="active last">
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
							<a href="site_config.php">
								Настройки на сайта
							</a>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN FORM-->
			<?php
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
				$tags = array('span', 'font', 'p');

				if($_POST){
					$keywords = $_POST["keywords"];
					$misho = strip_only($_POST["misho"], $tags);
					$miglena = strip_only($_POST["miglena"], $tags);
					$description = strip_only($_POST["description"], $tags);
					
					$sql = mysql_query("UPDATE sitedata SET keywords='$keywords', misho='$misho', miglena='$miglena', description='$description'") or die(mysql_error());

					if($sql){
						echo "Информацията е обновена.";
					}

				}else{
			?>
			<form action="site_config.php" method="post" class="form-horizontal form-bordered form-label-stripped" >
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-2">Ключови думи</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="keywords" value="<?php echo $keywords;?>" />
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2">Михаил</label>
						<div class="col-md-10">
							<textarea class="ckeditor form-control" name="misho" rows="6"><?php echo $misho; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2">Миглена</label>
						<div class="col-md-10">
							<textarea class="ckeditor form-control" name="miglena" rows="6"><?php echo $miglena; ?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-2">Описание</label>
						<div class="col-md-10">
							<textarea class="ckeditor form-control" name="description" rows="6"><?php echo $description; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-actions fluid">
					<div class="row">
						<div class="col-md-8">
							<div class="col-md-offset-3 col-md-10">
								<button type="submit" class="btn green"><i class="fa fa-check"></i> Обнови</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			<?php
				}
			?>
			<!-- END FORM-->
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
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
<script src="assets/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/components-editors.js"></script>
<script src="assets/scripts/custom/components-form-tools.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   ComponentsEditors.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>