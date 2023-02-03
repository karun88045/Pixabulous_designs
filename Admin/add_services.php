<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();




?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Add Header Content</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include('includes/header.php');?>
<div class="ts-main-content">
	<?php include('includes/sidebar.php');?>
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Add Services Content </h2>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Add Services</div>
								<div class="panel-body">
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_website_services.php" class="btn btn-primary"><h4>Web Designing</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_graphic_services.php" class="btn btn-primary"><h4>Graphics Designing</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_software_services.php" class="btn btn-primary"><h4>Software Development</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_logo_services.php" class="btn btn-primary"><h4>Logo Designing</h4></a></h4>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_mobile_services.php" class="btn btn-primary"><h4>Mobile App Development</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_editing_services.php" class="btn btn-primary"><h4>Video Editing</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_seo_services.php" class="btn btn-primary"><h4>Search Engine Optimization</h4></a>
									</div>
									<div class="col-md-12" style="margin:20px 0px;">
										<a href="manage_digital_services.php" class="btn btn-primary"><h4>Digital Marketing</h4></a>
									</div>
										
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div> 	
	</div>
</div>





<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor2');
	CKEDITOR.replace('editor3');
	CKEDITOR.replace('editor4');
	CKEDITOR.replace('editor5');
	config.extraPlugins = 'uploadimage';
	config.imageUploadUrl = '/uploader/upload.php?type=Images';
</script>
</body>

</html>