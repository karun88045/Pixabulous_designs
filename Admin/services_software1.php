<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{
$title1=$_POST['title1'];
$text1=$_POST['text1'];
$title2=$_POST['title2'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];

$image=$_FILES['image']['name'];
$tempname1=$_FILES['image']['tmp_name'];
$destination1="Upload1/".$image;


$sql = "INSERT INTO `services_software1`(`title1`, `text1`, `title2`, `text2`, `text3`, `image`) VALUES ('$title1','$text1','$title2','$text2','$text3','$image')";
$query = mysqli_query($mysqli,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
move_uploaded_file($tempname1,$destination1);
header('location:services_software1.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `services_software1` WHERE id='$id'";
$query1 = mysqli_query($mysqli,$sql1);
$row = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$title1=$_POST['title1'];
$text1=$_POST['text1'];
$title2=$_POST['title2'];
$text2=$_POST['text2'];
$text3=$_POST['text3'];

$image=$_FILES['image']['name'];
$tempname2=$_FILES['image']['tmp_name'];
$destination2="Upload1/".$image;

$sql2 = "UPDATE `services_software1` SET id='$id',title1='$title1',text1='$text1',title2='$title2',text2='$text2',`text3`='$text3',`image`='$image' WHERE id='$id'";
$query2 = mysqli_query($mysqli,$sql2);
if($query2)
{
	move_uploaded_file($tempname2,$destination2);
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:services_software1.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_software1.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `services_software1` WHERE id='$id'";
$query3 = mysqli_query($mysqli,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:services_software1.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:services_software1.php');
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
	<title>Add Services Software Content</title>
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
					
						<h2 class="page-title">Add Services Software Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Services Software</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Title1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title1" value="<?php echo $row['title1'] ;?>">
														<?php echo $row['title1'] ;?>
													</textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text1</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor2" name="text1" value="<?php echo $row['text1']; ?>"><?php echo $row['text1']; ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Title2</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor3" name="title2" value="<?php echo $row['title2']; ?>"><?php echo $row['title2']; ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text2</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor4" name="text2" value="<?php echo $row['text2']; ?>"><?php echo $row['text2']; ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text3</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor5" name="text3" value="<?php echo $row['text3']; ?>"><?php echo $row['text3']; ?></textarea>						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													
													<input type="file" class="form-control" name="image" value="<?php echo $row['image']; ?>">
						 
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Services Software1">
												</div>
											</div>

										</form>
									<?php } else { ?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Title1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="title1" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text1</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="text1" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Title2</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="title2" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text2</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="text2" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Text3</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor5" name="text3" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="image" value="">
						 
												</div>
											</div>




												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Services Software1">
												</div>
											</div>

										</form> 

									<?php }?>





										



									</div>


									<div class="container">
											
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