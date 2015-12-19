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
				<li>
					<a href="javascript:;">
						<i class="fa fa-bookmark-o"></i>
						<span class="title">
							Рецепти
						</span>
						<span class="arrow">
						</span>
					</a>
					<ul class="sub-menu">
						<li>
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
				<li class="active">
					
					<a href="javascript:;">
						<i class="fa fa-folder-o"></i>
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
						<li class="open">
							<a href="javascript:;">
								<i class="fa fa-folder-open-o"></i>
								Под категории
								<span class="arrow open">
								</span>
							</a>
							<ul class="active sub-menu" style="display: block;" >
								<li <?php if ($_GET['cat'] == "add") { echo 'class="active"'; }	?>>
									<a href="subcategories.php?cat=add">
										<i class="fa fa-puzzle-piece"></i>
										Добавяне
									</a>
								</li>
								<li <?php if ($_GET['cat'] == "edit") { echo 'class="active"'; } ?>>
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
							<a href="#">
								Катогории
							</a>
							<i class="fa fa-angle-right"></i>
							<a href="#">
								Подкатогории
							</a>
							<i class="fa fa-angle-right"></i>
							<?php
								if ($_GET['cat'] == "edit") {
									 echo '
										<a href="subcategories.php?cat=edit">
											Редактиране
										</a>
									'; 
								}elseif ($_GET['cat'] == "add") {
									 echo '
										<a href="subcategories.php?cat=add">
											Добавяне
										</a>
									'; 
								} 
							?>
						</li>
						
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<?php
						if($_GET['cat'] == 'add'){
					?>
					<form action="subcategories.php?cat=add&add=true" id="ajax_add" method="post" class="form-horizontal form-bordered form-label-stripped">
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">Под категория</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subcategory"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">За категория</label>
								<div class="col-md-9">
									<select class="form-control" name="for">
										<option value="">Избери категория</option>
										<?php
											$sqlC = mysql_query("SELECT * FROM categories");
											while($mfaC=mysql_fetch_assoc($sqlC)){
												echo '
													<option value="'.$mfaC['id'].'">'.$mfaC['name'].'</option>
												';
											}
										?>
									</select>
								</div>
							</div>


							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-4">
										<div class="col-md-offset-3 col-md-5">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Добави</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- END FORM-->
					<?php
							if(isset($_GET['add']) && $_GET['add'] == 'true' && $_POST){
								$subcat = $_POST['subcategory'];
								$for = $_POST['for'];
								$sql = mysql_query("INSERT INTO subcategories(name, `for`) VALUES ('$subcat','$for')");

								if($sql){
									echo '<br><div class="alert alert-success" role="alert">Успешно добавихте под категорията.</div>';
								}
							}

						}elseif($_GET['cat'] == 'edit'){
							if(isset($_GET['edit']) AND $_GET['edit'] == 'true'){
								$id = $_GET["id"];
								$mfa = mysql_fetch_assoc(mysql_query("SELECT * FROM subcategories WHERE id = '$id'"));
					?>
					<form action="subcategories.php?cat=edit&edit=edited&id=<?php echo $_GET['id'] ?>" method="post" class="form-horizontal form-bordered form-label-stripped">
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">Под категория</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="subcategory" value="<?php echo $mfa['name']?>"/>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">За категория</label>
								<div class="col-md-9">
									<select class="form-control" name="for">
										<option value="">Избери категория</option>
										<?php
											$sqlC = mysql_query("SELECT * FROM categories");
											while($mfaC=mysql_fetch_assoc($sqlC)){

												if($mfa["for"]==$mfaC['id']){
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

							<div class="form-actions fluid">
								<div class="row">
									<div class="col-md-4">
										<div class="col-md-offset-1 col-md-5">
											<button type="submit" class="btn green"><i class="fa fa-check"></i> Редактирай</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- END FORM-->
					<?php
							}elseif(isset($_GET['edit']) AND $_GET['edit'] == 'edited'){
								$subcat = $_POST['subcategory'];
								$for = $_POST['for'];
								$id = $_GET["id"];
								$sql = mysql_query("UPDATE subcategories SET name = '$subcat', `for` = '$for' WHERE id='$id'") or die(mysql_error());

								if($sql){
									header("Location: subcategories.php?cat=edit");
								}
							}elseif(!isset($_GET['edit'])){
					?>
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									<th>
										 №
									</th>
									<th>
										 Името на подкатегорията
									</th>
									<th>
										 Опции
									</th>
								</tr>
							</thead>

							<tbody>
							<?php
								$sql = mysql_query("SELECT * FROM subcategories");

								while($mfa = mysql_fetch_assoc($sql)){
									
									echo "
										<tr>
											<td>".$mfa['id']."</td>
											<td>".$mfa['name']."</td>
											<td>
												<a href='subcategories.php?cat=edit&edit=true&id=".$mfa['id']."'>Редактиране</a> | 
												<a data-toggle='modal' href='#basic".$mfa['id']."'>Изтриване</a>
												<div class='modal fade' id='basic".$mfa['id']."' tabindex='-1' role='basic' aria-hidden='true'>
													<div class='modal-dialog'>
														<div class='modal-content'>
															<div class='modal-header'>
																<button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
																<h4 class='modal-title'>Изтриване</h4>
															</div>
															<div class='modal-body'>
																 Сигурни ли сте че искате да изтреете тази подкатегория.
															</div>
															<div class='modal-footer'>
																<button type='button' class='btn default' data-dismiss='modal'>Отказ</button>
																<a href='subcategories.php?cat=delete&id=".$mfa['id']."' class='btn blue'>Изтриване</a>
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
					<?php
							}
						}elseif($_GET['cat'] == 'delete'){
							$id = $_GET['id'];

							mysql_query("DELETE FROM subcategories WHERE id='$id'")or die(mysql_error());

							header("Location: subcategories.php?cat=edit");
						}
					?>
				</div>
			</div>
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
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/components-editors.js"></script>
<script src="assets/scripts/custom/table-managed.js"></script>
<script src="assets/scripts/core/app.js"></script>
<script src="assets/scripts/custom/ui-extended-modals.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   ComponentsEditors.init();
   TableManaged.init();
   UIExtendedModals.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>