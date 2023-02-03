<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add logo and navbar
if(isset($_POST['submit']))
{

$left_title=$_POST['left_title'];
$left_text=$_POST['left_text'];
$right_title=$_POST['right_title'];
$right_text=$_POST['right_text'];

$sql = "INSERT INTO `about_mission_and_vision`(`left_title`, `left_text`, `right_title`, `right_text`) VALUES ('$left_title','$left_text','$right_title','$right_text')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:about_mission.php');
}


//code for edit Menubar
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `about_mission_and_vision` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$left_title=$_POST['left_title'];
$left_text=$_POST['left_text'];
$right_title=$_POST['right_title'];
$right_text=$_POST['right_text'];

$sql2 = "UPDATE `about_mission_and_vision` SET id='$id',left_title='$left_title',left_text='$left_text',right_title='$right_title',right_text='$right_text' WHERE id='$id'";
$query2 = mysqli_query($row_Id,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:about_mission.php');
}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `about_mission_and_vision` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:about_mission.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:about_mission.php');
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
	<title>Add About Us Page</title>
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
					
						<h2 class="page-title">Add About Us Page Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add About Us Page</div>
									<div class="panel-body">




										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Left Title </label>
												<div class="col-sm-8">
													
													<textarea value="<?php echo $row_Id['left_title'] ?>" name="left_title" id="editor1"  class="form-control"><?php echo $row_Id['left_title'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Left Text</label>
												<div class="col-sm-8">
														

													<textarea class="form-control" id="editor2"  name="left_text" value="<?php echo $row_Id['left_text'] ?>"><?php echo $row_Id['left_text'] ?></textarea>		 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Right Title</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="about_img_left"  value="" > -->
													<textarea id="editor3"  class="form-control" name="right_title"  value="<?php echo $row_Id['right_title'] ?>"><?php echo $row_Id['right_title'] ?><?php echo $row_Id['right_title'] ?></textarea>
						 							<!-- <textarea></textarea> -->
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Right Text </label>
												<div class="col-sm-8">
													 
													<textarea id="editor4"  value="<?php echo $row_Id['right_text'] ?>" name="right_text"  class="form-control"><?php echo $row_Id['right_text'] ?></textarea>
												</div>
											</div>
											


												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update About">
												</div>
											</div>

										</form>
										<?php } else { ?>

												<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Left Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" value="" id="editor1" name="about_index_title"  class="form-control">  -->
													<textarea value="" id="editor1" name="left_title"  class="form-control"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Left Text</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="about_index_text" value="">	 -->
													<textarea id="editor2" class="form-control" name="left_text" value=""></textarea>		 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Right Title</label>
												<div class="col-sm-8">
													<!-- <input type="file"  class="form-control" name="about_img_left" id="cns" value="" > -->
													<textarea id="editor3" class="form-control" name="right_title" value=""></textarea>
													
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Right Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" value="" name="about_img_left_title"  class="form-control"> -->
													<textarea id="editor4" value="" name="right_text"  class="form-control"></textarea> 
												</div>
											</div>
											


												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Mission & Vision">
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
																<th>Left Title</th>
																<th>Left text</th>
																<th>Right Title</th>
																<th>Right Text</th>
													
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `about_mission_and_vision`";
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
																<td><?php echo $row['left_title'] ;?></td>
																<td><?php echo $row['left_text'] ;?></td>
																<td><?php echo $row['right_title'] ;?></td>
																<td><?php echo $row['right_text'] ;?></td>
																
																<td><a href="about_mission.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="about_mission.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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