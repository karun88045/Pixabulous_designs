<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{
$cta_title=$_POST['cta_title'];
$cta_text=$_POST['cta_text'];
$cta_btn=$_POST['cta_btn'];

$sql = "INSERT INTO `cta`(`cta_title`, `cta_text`, `cta_btn`) VALUES ('$cta_title','$cta_text','$cta_btn')";
$query = mysqli_query($con,$sql);

	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:call_to_action.php');
}

if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `cta` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$cta_title=$_POST['cta_title'];
$cta_text = $_POST['cta_text'];
$cta_btn=$_POST['cta_btn'];



$sql2 = "UPDATE `cta` SET id='$id',cta_title='$cta_title',cta_text='$cta_text',cta_btn='$cta_btn' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);

if(move_uploaded_file($tempname1, $folder1))
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:call_to_action.php');
}
else
{
	echo"<script>alert('Data has not been Updated successfully');</script>";
	header('location:call_to_action.php');
}
}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `cta` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:call_to_action.php');
}
else
{
	echo"<script>alert('Data has not been deleted successfully');</script>";
	header('location:call_to_action.php');	
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
	<title>Add Call To Action Content</title>
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
					
						<h2 class="page-title">Add Call To Action Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Call To Action </div>
									<div class="panel-body">
										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">CTA Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor1" class="form-control" name="cta_title" value="" > -->
													<textarea  id="editor1" class="form-control" name="cta_title" value="<?php echo $row_Id['cta_title'] ?>"><?php echo $row_Id['cta_title'] ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">CTA Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="cta_text" value="" > -->
													<textarea id="editor2" class="form-control" name="cta_text" value="<?php echo $row_Id['cta_text'] ?>"><?php echo $row_Id['cta_text'] ?></textarea>
						 
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">CTA Button</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor3" class="form-control" name="cta_btn" value=""> -->
													<textarea  id="editor3" class="form-control" name="cta_btn" value="<?php echo $row_Id['cta_btn'] ?>"><?php echo $row_Id['cta_btn'] ?></textarea>
						 
												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Call To Action">
												</div>
											</div>

										</form>
										<?php } else { ?>

											<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">CTA Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor1" class="form-control" name="cta_title" value="" > -->
													<textarea  id="editor1" class="form-control" name="cta_title" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">CTA Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="cta_text" value="" > -->
													<textarea id="editor2" class="form-control" name="cta_text" value=""></textarea>
						 
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">CTA Button</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor3" class="form-control" name="cta_btn" value=""> -->
													<textarea  id="editor3" class="form-control" name="cta_btn" value=""></textarea>
						 
												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Call To Action">
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
																<th>Call To Action Title</th>
																<th>Call To Action Text</th>
																<th>Call To Action Button</th>
																
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql1 = "SELECT * FROM `cta`";
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
																<td><?php echo $row['cta_title'] ;?></td>
																<td><?php echo $row['cta_text'] ;?></td>
																<td><?php echo $row['cta_btn'] ;?></td>
																
																<td><a href="call_to_action.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="call_to_action.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
</script>
</body>

</html>