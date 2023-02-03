<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{

$title=$_POST['title'];
$image=$_POST['image'];
$img_title=$_POST['img_title'];
$date=$_POST['date'];



$sql = "INSERT INTO `post_old`(`title`,`image`,`img_title`,`date`) VALUES ('$title','$image','$img_title','$date')";
$query = mysqli_query($mysqli,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:blog_old_post.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `post_old` WHERE id='$id'";
$query1 = mysqli_query($mysqli,$sql1);
$row = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$title=$_POST['title'];
$image=$_POST['image'];
$img_title=$_POST['img_title'];
$date=$_POST['date'];

$sql2 = "UPDATE `post_old` SET id='$id',title='$title',image='$image',img_title='$img_title',date='$date' WHERE id='$id'";
$query2 = mysqli_query($mysqli,$sql2);
if($query2)
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:blog_old_post.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:blog_old_post.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `post_old` WHERE id='$id'";
$query3 = mysqli_query($mysqli,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:blog_old_post.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:blog_old_post.php');
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
	<title>Add Post Old Content</title>
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
					
						<h2 class="page-title">Add Post Old Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Post Old</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title" value="<?php echo $row['title'] ;?>">
														<?php echo $row['title'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Image </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="image" value="<?php echo $row['image'] ;?>">
														<?php echo $row['image'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Image Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="img_title" value="<?php echo $row['img_title'] ;?>">
														<?php echo $row['img_title'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Date </label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor4" name="date" value="<?php echo $row['date']; ?>"><?php echo $row['date']; ?></textarea>
						 
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
												<label class="col-sm-2 control-label">Old Post Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Img </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="image" ></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Img Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="img_title" ></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Date </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="date" ></textarea>
						 
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
																<th>Old Post Title</th>
																<th>Old Post Img</th>
																<th>Old Post Img Title</th>
																<th>Old Post date</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `post_old`";
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
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['img_title'] ;?></td>
																<td><?php echo $row['date'] ;?></td>
																<td><a href="blog_old_post.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="blog_old_post.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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
	CKEDITOR.replace('editor10');
		var editor = CKEDITOR.replace( 'editor1' );
		CKFinder.setupCKEditor(editor);
		CKEDITOR.replace( 'editor2', {
  
									});
</script>
</body>

</html>