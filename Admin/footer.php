<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{

$footer_logo = $_POST['footer_logo'];
// $tempname = $_FILES['footer_logo']['tmp_name'];
// $folder = "Upload/".$footer_logo;

$footer_title=$_POST['footer_title'];
$footer_text=$_POST['footer_text'];
$services=$_POST['services'];
$services_navbar=$_POST['services_navbar'];

$sql = "INSERT INTO `footer` (`footer_logo`, `footer_title`, `footer_text`, `services`, `services_navbar`) VALUES ('$footer_logo','$footer_title','$footer_text','$services','$services_navbar')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Updated successfully');</script>";
header('location:footer.php');
	// if(move_uploaded_file($tempname, $folder))
	// {
	// 	echo"<script>alert('Data has been Updated successfully');</script>";
	// header('location:footer.php');	
	// }
	// else
	// {
	// 	echo"<script>alert('Data has been Updated successfully');</script>";
	// 	header('location:footer.php');	
	// }
}


if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `footer` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$footer_logo = $_POST['footer_logo'];
// $tempname1 = $_FILES['footer_logo']['tmp_name'];
// $folder1 = "Upload/".$footer_logo;

$footer_title=$_POST['footer_title'];
$footer_text=$_POST['footer_text'];
$services=$_POST['services'];
$services_navbar=$_POST['services_navbar'];



$sql2 = "UPDATE `footer` SET id='$id',footer_logo='$footer_logo',footer_title='$footer_title',footer_text='$footer_text',services='$services',services_navbar='$services_navbar' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
echo"<script>alert('Data has been Updated successfully');</script>";
header('location:footer.php');
// if(move_uploaded_file($tempname1, $folder1))
// {
// 	echo"<script>alert('Data has been Updated successfully');</script>";
// 	header('location:footer.php');	
// }
// else
// {
// 	echo"<script>alert('Data has not been Updated successfully');</script>";
// 	header('location:footer.php');	
// }


}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `footer` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:footer.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:footer.php');
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
	<title>Add Footer Content</title>
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
					
						<h2 class="page-title">Add Footer Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Footer </div>
									<div class="panel-body">
										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label"> Footer logo</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="footer_logo" value=""> -->
						 							<textarea  id="editor1" class="form-control" name="footer_logo" value="<?php echo $row_Id['footer_logo'] ?>">
						 								<?php echo $row_Id['footer_logo'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Footer Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="footer_title" value=""> -->
						 							<textarea  id="editor2" class="form-control" name="footer_title" value="<?php echo $row_Id['footer_title'] ?>"><?php echo $row_Id['footer_title'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Footer Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor3" class="form-control" name="cta_text" id="cns" value=""> -->
						 							<textarea id="editor3" class="form-control" name="footer_text" value="<?php echo $row_Id['footer_text'] ?>"><?php echo $row_Id['footer_text'] ?></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Services</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="cta_btn" value=""> -->
						 							<textarea id="editor4" class="form-control" name="services" value="<?php echo $row_Id['services'] ?>"><?php echo $row_Id['services'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Services Navbar</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="cta_btn" value=""> -->
						 							<textarea id="editor5" class="form-control" name="services_navbar" value="<?php echo $row_Id['services_navbar'] ?>"><?php echo $row_Id['services_navbar'] ?></textarea>
												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Foter">
												</div>
											</div>

										</form>
										<?php } else { ?>
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label"> Footer logo</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="footer_logo" value=""> -->
						 							<textarea  id="editor1" class="form-control" name="footer_logo" value=""></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Footer Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="footer_title" value=""> -->
						 							<textarea  id="editor2" class="form-control" name="footer_title" value=""></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Footer Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor3" class="form-control" name="cta_text" id="cns" value=""> -->
						 							<textarea id="editor3" class="form-control" name="footer_text" value=""></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Services</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="cta_btn" value=""> -->
						 							<textarea id="editor4" class="form-control" name="services" value=""></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Services Navbar</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="services_navbar" value=""> -->
						 							<textarea id="editor5" class="form-control" name="services_navbar" value=""></textarea>
												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Footer">
												</div>
											</div>

										</form>
										<?php }?>

									</div>


									<div class="container">
											<div class="row">
												<div class="col-md-12" style="">
													<table class="table">
														<tr>
															<thead>
																<th>ID</th>
																<th>Footer Logo</th>
																<th>Footer Title</th>
																<th>Footer Text</th>
																<th>Services</th>
																<th>Services Navbar</th>
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql1 = "SELECT * FROM `footer`";
														$query1 = mysqli_query($con,$sql1);
														if (mysqli_num_rows($query1))
														{
															while ($row = mysqli_fetch_assoc($query1))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['footer_logo'] ;?></td>
																<td><?php echo $row['footer_title'] ;?></td>
																<td><?php echo $row['footer_text'] ;?></td>
																<td><?php echo $row['services'] ;?></td>
																<td><?php echo $row['services_navbar'] ;?></td>
																
																<td><a href="footer.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="footer.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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


		var editor = CKEDITOR.replace( 'editor1' );
		CKFinder.setupCKEditor(editor);
		CKEDITOR.replace( 'editor2', {
  
});
</script>

</body>

</html>