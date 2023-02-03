<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{

$text=$_POST['text'];
$image1=$_POST['image1'];
$button1=$_POST['button1'];
$image2=$_POST['image2'];
$button2=$_POST['button2'];
$image3=$_POST['image3'];
$button3=$_POST['button3'];


$sql = "INSERT INTO `project`(`text`, `image1`, `button1`, `image2`, `button2`, `image3`, `button3`) VALUES ('$text','$image1','$button1','$image2','$button2','$image3','$button3')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:add_project.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `project` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$text=$_POST['text'];
$image1=$_POST['image1'];
$button1=$_POST['button1'];
$image2=$_POST['image2'];
$button2=$_POST['button2'];
$image3=$_POST['image3'];
$button3=$_POST['button3'];

$sql2 = "UPDATE `project` SET id='$id',text='$text',image1='$image1',button1='$button1',image2='$image2',button2='$button2',image3='$image3',button3='$button3' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
if($query2)
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:add_project.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:add_project.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `project` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:add_project.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:add_project.php');
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
												<label class="col-sm-2 control-label">Text </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="text" value="<?php echo $row_Id['text'] ;?>">
														<?php echo $row_Id['text'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="image1" value="<?php echo $row_Id['image1'] ;?>">
														<?php echo $row_Id['image1'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="button1" value="<?php echo $row_Id['button1'] ;?>">
														<?php echo $row_Id['button1'] ;?>
													</textarea>
													
													
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Image2 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="Image2" value="<?php echo $row_Id['Image2'] ;?>">
														<?php echo $row_Id['Image2'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button2 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor5" name="button2" value="<?php echo $row_Id['button2'] ;?>">
														<?php echo $row_Id['button2'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image3 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor6" name="image3" value="<?php echo $row_Id['image3'] ;?>">
														<?php echo $row_Id['image3'] ;?>
													</textarea>
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button3 </label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor7" name="button3" value="<?php echo $row_Id['button3']; ?>"><?php echo $row_Id['button3']; ?></textarea>
						 
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
												<label class="col-sm-2 control-label">Text </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor1" name="text" ></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Old Post Image1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="image1" ></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Button1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="button1" ></textarea>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Image2 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="image2" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button2 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor5" name="button2" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">IMAGE3</label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor6" name="image3" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Button3 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor7" name="button3" ></textarea>
						 
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
																<th>Text</th>
																<th>Image1</th>
																<th>Button1</th>
																<th>Image2</th>
																<th>Button2</th>
																<th>Image3</th>

																<th>Button3</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `project`";
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
																<td><?php echo $row['text'] ;?></td>
																<td><?php echo $row['image1'] ;?></td>
																<td><?php echo $row['button1'] ;?></td>
																<td><?php echo $row['image2'] ;?></td>
																	<td><?php echo $row['button2'] ;?></td>
																<td><?php echo $row['image3'] ;?></td>
																<td><?php echo $row['button3'] ;?></td>
																<td><a href="add_project.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="add_project.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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