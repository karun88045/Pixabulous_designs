<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{
$banner_title=$_POST['banner_title'];
$banner_text=$_POST['banner_text'];
$btn_content=$_POST['btn_content'];


$sql = "INSERT INTO `banner` (`banner_title`,`banner_text`,`btn_content`) values ('$banner_title','$banner_text','$btn_content')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:banner.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `banner` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$banner_title=$_POST['banner_title'];
$banner_text=$_POST['banner_text'];
$btn_content=$_POST['btn_content'];

$sql2 = "UPDATE `banner` SET id='$id',banner_title='$banner_title',banner_text='$banner_text',btn_content='$btn_content' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
if($query2)
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:banner.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:banner.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `banner` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:banner.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:banner.php');
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
	<title>Add Banner Content</title>
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
					
						<h2 class="page-title">Add Banner Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Banner</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<!-- <div class="form-group">
												<label class="col-sm-2 control-label">Banner </label>
												<div class="col-sm-8">
													<input type="file" value="" name="images"  class="form-control"> </div>
											</div> -->
											<div class="form-group">
												<label class="col-sm-2 control-label">Banner Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="banner_title" id="cns" value="" > -->
													<textarea class="form-control" name="banner_title" id="editor1" value="<?php echo $row_Id['banner_title'] ?>" >
														<?php echo $row_Id['banner_title'] ?>"
													</textarea>
						 
						 
													
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Banner text</label>
												<div class="col-sm-8">

													<!-- <input type="text" class="form-control" name="banner_text" id="cns" value="" > -->
													<textarea class="form-control" name="banner_text" id="editor2" value="<?php echo $row_Id['banner_text'] ?>" ><?php echo $row_Id['banner_text'] ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button Content</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="btn_content" value="" > -->
													<textarea class="form-control" id="editor3" name="btn_content" value="<?php echo $row_Id['btn_content'] ?>"><?php echo $row_Id['btn_content'] ?></textarea>
												</div>

											</div>

												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Banner">
												</div>
											</div>

										</form>
										<?php } else { ?>
											<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<!-- <div class="form-group">
												<label class="col-sm-2 control-label">Banner </label>
												<div class="col-sm-8">
													<input type="file" value="" name="images"  class="form-control"> </div>
											</div> -->
											<div class="form-group">
												<label class="col-sm-2 control-label">Banner Title</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="banner_title" id="cns" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Banner text</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="banner_text" id="cns" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button Content</label>
												<div class="col-sm-8">
													<input type="text" id="editor3" class="form-control" name="btn_content" id="cns" value="" required="required">
						 
												</div>
											</div>

												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Banner">
												</div>
											</div>

										</form>
											<?php }?>

									</div>



									<div class="container">
											<div class="row">
												<div class="col-md-10" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>ID</th>
																<th>BANNER TITLE</th>
																<th>BANNER TEXT</th>
																<th>BUTTON</th>
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `banner`";
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
																<td><?php echo $row['banner_title'] ;?></td>
																<td><?php echo $row['banner_text'] ;?></td>
																<td><?php echo $row['btn_content'] ;?></td>
																<td><a href="banner.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="banner.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
</script>
</body>

</html>