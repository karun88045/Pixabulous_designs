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
	<title>Add Services Graphics Content</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Add Services Graphics Content </h2>
						<a href="add_services.php" class="ms-end">Back To Add Services</a>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"><a href="services_graphic1.php" class="btn btn-primary">Add Services Graphic</a></div>
									<div class="panel-body">
											<div class="row">
												<h2 class="text-center">What is Graphic Designs?</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Title</th>
																<th>Text</th>
																<th>Image</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_graphic1`";
														$query = mysqli_query($mysqli,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['title'] ;?></td>
																<td><?php echo substr($row['text'], 0,100) ;?></td>
																<td><?php echo $row['image'] ;?></td>
																
																<td><a href="services_graphic1.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_graphic1.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
															</thead>
														</tr>
														<?php
															}
														}
														?>

													</table>
												</div>
											</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading"><a href="services_graphic2.php" class="btn btn-primary">Add Graphics Galary</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">Graphics Gallery</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Galary</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_graphic2`";
														$query = mysqli_query($mysqli,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['galary'] ;?></td>
																
																<td><a href="services_graphic2.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_graphic2.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
															</thead>
														</tr>
														<?php
															}
														}
														?>

													</table>
												</div>
											</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading"><a href="services_graphic3.php" class="btn btn-primary">Add Design Your Bussiness</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">Designing Your Business With Pixabulous Designs, The Ultimate Graphic Design Company</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Title</th>
																<th>Text1</th>
																<th>Text2</th>
																
																<th>Image</th>
																<th>Title1</th>
																<th>List1</th>
																<th>List2</th>
																<th>List3</th>
																<th>List4</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_graphic3`";
														$query = mysqli_query($mysqli,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo substr($row['title'],0,20) ;?></td>
																<td><?php echo substr($row['text1'], 0,50) ;?></td>
																<td><?php echo substr($row['text2'],0,50) ;?></td>
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['title1'] ;?></td>
																<td><?php echo $row['list1'] ;?></td>
																<td><?php echo $row['list2'] ;?></td>
																<td><?php echo $row['list3'] ;?></td>
																<td><?php echo $row['list4'] ;?></td>
																
																<td><a href="services_graphic3.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_graphic3.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
															</thead>
														</tr>
														<?php
															}
														}
														?>

													</table>
												</div>
											</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading"><a href="services_graphic4.php" class="btn btn-primary">Add How Do We Work</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">How Do We Work?</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Title</th>
																<th>Text</th>
																<th>List</th>
																<th>Image</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_graphic4`";
														$query = mysqli_query($mysqli,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['title'] ;?></td>
																<td><?php echo $row['text'] ;?></td>
																<td><?php echo $row['list'] ;?></td>
																<td><?php echo $row['image'] ;?></td>
																
																<td><a href="services_graphic4.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_graphic4.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
															</thead>
														</tr>
														<?php
															}
														}
														?>

													</table>
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

</script>


<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/ckfinder/ckfinder.js"></script>
<script type="text/javascript">
	CKEDITOR.replace('editor1');
	CKEDITOR.replace('editor2');
	CKEDITOR.replace('editor3');
	CKEDITOR.replace('editor4');
	CKEDITOR.replace('editor5');
	CKEDITOR.replace('editor6');
	CKEDITOR.replace('editor7');
	CKEDITOR.replace('editor8');
	CKEDITOR.replace('editor9');
	CKEDITOR.replace('editor10 ');
	config.extraPlugins = 'uploadimage';
	config.imageUploadUrl = '/uploader/upload.php?type=Images';
</script>
</body>
</html>
