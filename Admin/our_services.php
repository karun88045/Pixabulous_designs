\<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add logo and navbar
if(isset($_POST['submit']))
{

$our_services_title=$_POST['our_services_title'];
$our_services_img = $_POST['our_services_img'];
$our_services_img_title=$_POST['our_services_img_title'];
$our_services_img_text=$_POST['our_services_img_text'];

$sql = "INSERT INTO `our_services`(`our_services_title`, `our_services_img`, `our_services_img_title`, `our_services_img_text`) VALUES ('$our_services_title','$our_services_img','$our_services_img_title','$our_services_img_text')";
 $query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:our_services.php');

}


if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `our_services` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$our_services_title=$_POST['our_services_title'];

$our_services_img = $_POST['our_services_img'];
// $tempname1 = $_FILES['our_services_img']['tmp_name'];
// $folder1 = "Upload/".$our_services_img;

$our_services_img_title=$_POST['our_services_img_title'];
$our_services_img_text=$_POST['our_services_img_text'];



$sql2 = "UPDATE `our_services` SET id='$id',our_services_title='$our_services_title',our_services_img='$our_services_img',our_services_img_title='$our_services_img_title',our_services_img_text='$our_services_img_text' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:our_services.php');	
// if(move_uploaded_file($tempname1, $folder1))
// {
// 	echo"<script>alert('Data has been Deleted successfully');</script>";
// 	header('location:our_services.php');
// }
// else
// {
// 	echo"<script>alert('Data has not been Deleted successfully');</script>";
// 	header('location:our_services.php');
// }

}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `our_services` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:our_services.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:our_services.php');
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
	<title>Add Services Content</title>
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
					
						<h2 class="page-title">Add Services Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Services </div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Title </label>
												<div class="col-sm-8">
													<!-- <input type="text" value="" name="our_services_title"  class="form-control">  -->
													<textarea value="<?php echo $row_Id['our_services_title'] ?>" name="our_services_title"  class="form-control" id="editor1"><?php echo $row_Id['our_services_title'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image  </label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="our_services_img" id="cns" value="" > -->
													<textarea class="form-control" name="our_services_img" id="editor2" value="<?php echo $row_Id['our_services_img'] ?>" ><?php echo $row_Id['our_services_img'] ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="our_services_img_title" > -->
						 							<textarea class="form-control" name="our_services_img_title" id="editor3" value="<?php echo $row_Id['our_services_img_title'] ?>"><?php echo $row_Id['our_services_img_title'] ?></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="our_services_img_text" id="editor3" value="" > -->
						 						<textarea class="form-control" name="our_services_img_text" id="editor4" value="<?php echo $row_Id['our_services_img_text'] ?>"><?php echo $row_Id['our_services_img_text'] ?></textarea>
												</div>
											</div>

												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Services">
												</div>
											</div>

										</form>
										<?php } else { ?>

										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Title </label>
												<div class="col-sm-8">
													<!-- <input type="text" value="" name="our_services_title"  class="form-control">  -->
													<textarea value="" name="our_services_title"  class="form-control" id="editor1"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image  </label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="our_services_img" id="editor2" value="" >	 -->
													<textarea class="form-control" name="our_services_img" id="editor2" value=""></textarea>					 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="our_services_img_title" > -->
						 							<textarea class="form-control" name="our_services_img_title" id="editor3"></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Our Services Image Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" name="our_services_img_text" id="editor3" value="" > -->
						 						<textarea class="form-control" name="our_services_img_text" id="editor4" value=""></textarea>
												</div>
											</div>

												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Services">
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
																<th>Our Services Title</th>
																<th>Our Services Image</th>
																<th>Our Services Image Title</th>
																<th>Our Services Image Text</th>
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql1 = "SELECT * FROM `our_services`";
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
																<td><?php echo $row['our_services_title'] ;?></td>
																<td><?php echo $row['our_services_img'] ;?></td>
																<td><?php echo $row['our_services_img_title'] ;?></td>
																<td><?php echo $row['our_services_img_text'] ;?></td>
																
																<td><a href="our_services.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="our_services.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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