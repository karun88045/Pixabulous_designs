<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add logo and navbar
if(isset($_POST['Upload']))
{

$img_logo = $_POST['img_logo'];
// $tempname = $_FILES['img_logo']['tmp_name'];
// $folder = "Upload/".$img_logo;
$navbar=$_POST['navbar'];


$sql = "INSERT INTO `menubar` (`img_logo`,`navbar`) values ('$img_logo','$navbar')";
$query = mysqli_query($con,$sql);
echo"<script>alert('header has been added successfully');</script>";
header('location:menubar.php');
// if(move_uploaded_file($tempname, $folder))
// {
// 	echo"<script>alert('Data has been Deleted successfully');</script>";
// 	header('location:menubar.php');
// }
// else
// {
// 	echo"<script>alert('Data has not been Deleted successfully');</script>";
// 	header('location:menubar.php');
// }
}


//code for edit Menubar
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `menubar` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$img_logo = $_POST['img_logo'];
// $tempname = $_FILES['img_logo']['tmp_name'];
// $folder = "Upload/files/".$img_logo;
$navbar=$_POST['navbar'];

$sql2 = "UPDATE `menubar` SET id='$id',img_logo='$img_logo',navbar='$navbar' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:menubar.php');

// if(move_uploaded_file($tempname, $folder))
// {
// 	echo"<script>alert('Data has been Deleted successfully');</script>";
// 	header('location:menubar.php');
// }
// else
// {
// 	echo"<script>alert('Data has not been Deleted successfully');</script>";
// 	header('location:menubar.php');
// }
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `menubar` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:menubar.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:menubar.php');
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
	<title>Add Menu Content</title>
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
					
						<h2 class="page-title">Add Menubar Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Menubar
								
									</div>
									<div class="panel-body">


										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Logo </label>
												<div class="col-sm-8">
													<!-- <input type="file"value="" name="img_logo"  class="form-control"> -->
													<textarea value="" name="img_logo" id="editor1"  class="form-control">
														<?php echo $row_Id['img_logo'] ;?></textarea>
													

												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Navbar</label>
												<div class="col-sm-8">
													<textarea class="form-control" name="navbar" id="editor2" value="<?php echo $row_Id['navbar']; ?>">
														<?php echo $row_Id['navbar'] ?>
														</textarea>
						 
												</div>
											</div>
									<!-- <div class="form-group">
										<label class="col-sm-2 control-label">Course Name(Full)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="cnf" value="" >
									</div>
									</div> -->



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Menubar">
												</div>
											</div>

										</form>
										<?php } else { ?>
												<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Logo </label>
												<div class="col-sm-8">
													<!-- <input type="file" value="" name="img_logo"  class="form-control"> -->
													<textarea value="" id="editor1" name="img_logo"  class="form-control"></textarea>
												
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Navbar</label>
												<div class="col-sm-8">
													<textarea  id="editor2" class="form-control" name="navbar" value=""></textarea>
													

						 
												</div>
											</div>
									<!-- <div class="form-group">
										<label class="col-sm-2 control-label">Course Name(Full)</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="cnf" value="" >
									</div>
									</div> -->



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Upload" value="Add Menubar">
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
																<th>IMAGES</th>
																<th>NAVBAR</th>
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `menubar`";
														$query = mysqli_query($con,$sql);
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_array($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td style="background:black;"><?php echo $row['img_logo'] ;?></td>
																<td><?php echo $row['navbar'] ;?></td>
																<td><a href="menubar.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="menubar.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
	


	var editor = CKEDITOR.replace( 'editor1' );
		CKFinder.setupCKEditor(editor);
		CKEDITOR.replace( 'editor2', {
  
});
</script>
</body>

</html>