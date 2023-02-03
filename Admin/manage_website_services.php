<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{
$title=$_POST['title'];
$text=$_POST['text'];

$image=$_FILES['image']['name'];
$tempname1=$_FILES['image']['tmp_name'];
$destination1="Upload1/".$image;


$sql = "INSERT INTO `services_website1`(`title`, `text`, `image`) VALUES ('$title','$text','$image')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
move_uploaded_file($tempname1,$destination1);
header('location:services_website.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `services_website1` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$title=$_POST['title'];
$text=$_POST['text'];

$image=$_FILES['image']['name'];
$tempname2=$_FILES['image']['tmp_name'];
$destination2="Upload1/".$image;

$sql2 = "UPDATE `services_website1` SET `id`='$d',`title`='$title',`text`='$text',`image`='$image' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
if($query2)
{
	move_uploaded_file($tempname2,$destination2);
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:services_website.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_website.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `services_website1` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:services_website.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_website.php');
}
}




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
	<title>Add Services Website Content</title>
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
						<h2 class="page-title">Add Services Website Content </h2>
						<a href="add_services.php" class="me-end">Back To Add Services</a>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"><a href="services_website.php" class="btn btn-primary">Add Services Website</a>

									</div>
									<div class="panel-body">
											<div class="row">
												<h2 class="text-center">Web Design</h2>
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
														$sql = "SELECT * FROM `services_website1`";
														$query = mysqli_query($con,$sql);
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
																
																<td><a href="services_website.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_website.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
									<div class="panel-heading"><a href="services_website1.php" class="btn btn-primary">Add Our Services Web Designs</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">Our Services For Web Design</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Title</th>
																<th>Text</th>
																<th>Image</th>
																<th>Image Title</th>
																<th>Image Text</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_website_1`";
														$query = mysqli_query($con,$sql);
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
																<td><?php echo substr($row['text'], 0,150) ;?></td>
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['image_title'] ;?></td>
																<td><?php echo $row['image_text'] ;?></td>
																
																<td><a href="services_website1.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_website1.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
									<div class="panel-heading"><a href="services_website2.php" class="btn btn-primary">Add Why Choose Us</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">Why Choose Us</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Title</th>
																<th>Text</th>
																<th>Image</th>
																<th>Image Title</th>
																<th>Image Text</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_website_2`";
														$query = mysqli_query($con,$sql);
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
																<td><?php echo substr($row['text'], 0,150) ;?></td>
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['image_title'] ;?></td>
																<td><?php echo $row['image_text'] ;?></td>
																
																<td><a href="services_website1.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_website1.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
									<div class="panel-heading"><a href="services_website3.php" class="btn btn-primary">Add Creators And Planners</a></div>
									<div class="panel-body">
										<div class="row">
											<h2 class="text-center">Add Creators And Planners</h2>
												<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Image</th>
																<th>Title</th>
																<th>Title1</th>
																<th>Text</th>
																
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `services_website_3`";
														$query = mysqli_query($con,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['title'] ;?></td>
																<td><?php echo $row['title1'] ;?></td>
																<td><?php echo $row['text'] ;?></td>
																
																<td><a href="services_website3.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="services_website3.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
