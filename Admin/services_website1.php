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

$image_title=$_POST['image_title'];
$image_text=$_POST['image_text'];

$sql = "INSERT INTO `services_website_1`(`title`, `text`, `image`, `image_title`, `image_text`) VALUES ('$title','$text','$image','$image_title','$image_text')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
move_uploaded_file($tempname1,$destination1);
header('location:services_website1.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `services_website_1` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$title=$_POST['title'];
$text=$_POST['text'];

$image=$_FILES['image']['name'];
$tempname2=$_FILES['image']['tmp_name'];
$destination2="Upload1/".$image;

$image_title=$_POST['image_title'];
$image_text=$_POST['image_text'];

$sql2 = "UPDATE `services_website_1` SET id='$d',title='$title',text='$text',image='$image',image_title='$image_title',image_text='$image_text' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
if($query2)
{
	move_uploaded_file($tempname2,$destination2);
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:services_website1.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_website1.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `services_website_1` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:services_website1.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_website1.php');
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
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Services Website</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title" value="<?php echo $row_Id['title'] ;?>">
														<?php echo $row_Id['title'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor2" name="text" value="<?php echo $row_Id['text']; ?>"><?php echo $row_Id['text']; ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													
													<input type="file" name="image" value="<?php echo $row_Id['image'] ?>">
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Image Title</label>
												<div class="col-sm-8">
													
													
													<textarea class="form-control" id="editor3" name="image_title" value="<?php echo $row_Id['image_title']; ?>"><?php echo $row_Id['image_title']; ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image Text</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor4" name="image_text" value="<?php echo $row_Id['image_text']; ?>"><?php echo $row_Id['image_text']; ?></textarea>
						 
												</div>
											</div>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Services Website1">
												</div>
											</div>

										</form>
									<?php } else { ?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="text" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="image" value="">
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image Title</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="image_title" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image Text</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="image_text" ></textarea>
						 
												</div>
											</div>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Services Website1">
												</div>
											</div>

										</form> 

									<?php }?>
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