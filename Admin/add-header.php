<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{
$phone=$_POST['phone'];
$email=$_POST['email'];


$sql = "INSERT INTO `header` (`phone`,`email`) values ('$phone','$email')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:add-header.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];



// select query
$sql1 = "SELECT * FROM `header` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sql2 = "UPDATE `header` SET id='$id',phone='$phone',email='$email' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
if($query2)
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:add-header.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:add-header.php');
}
}



//code for delete header

if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `header` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:add-header.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:add-header.php');
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
	<title>Add Header Content</title>
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
					
						<h2 class="page-title">Add Header Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Header</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Phone No </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="phone" value="<?php echo $row_Id['phone'] ;?>">
														<?php echo $row_Id['phone'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor2" name="email" value="<?php echo $row['email']; ?>"><?php echo $row_Id['email']; ?></textarea>
						 
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Header">
												</div>
											</div>

										</form>
									<?php } else { ?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Phone No </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="phone" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="email" ></textarea>
						 
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Header">
												</div>
											</div>

										</form> 

									<?php }?>





										



									</div>


									<div class="container">
											<div class="row">
												<div class="col-md-8" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>ID</th>
																<th>PHONE</th>
																<th>EMAIL</th>
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														
														$sql = "SELECT * FROM `header`";
														$query = mysqli_query($con,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row1 = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row1['id'] ;?></td>
																<td><?php echo $row1['phone'] ;?></td>
																<td><?php echo $row1['email'] ;?></td>
																<td><a href="add-header.php?id=<?php echo $row1['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="add-header.php?delete=<?php echo $row1['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
	config.extraPlugins = 'uploadimage';
	config.imageUploadUrl = '/uploader/upload.php?type=Images';
</script>
</body>

</html>