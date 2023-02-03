<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add logo and navbar
if(isset($_POST['submit']))
{

$write_us_title=$_POST['write_us_title'];
$write_us_text=$_POST['write_us_text'];
$topic_title=$_POST['topic_title'];
$topic_text=$_POST['topic_text'];
$our_guideline_title=$_POST['our_guideline_title'];
$our_guideline_text=$_POST['our_guideline_text'];

$sql = "INSERT INTO `write_for_us`(`write_us_title`, `write_us_text`, `topic_title`, `topic_text`, `our_guideline_title`, `our_guideline_text`) VALUES ('$write_us_title','$write_us_text','$topic_title','$topic_text','$our_guideline_title','$our_guideline_text')";
$query = mysqli_query($mysqli,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:write_us_page.php');
}


//code for edit Menubar
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `write_for_us` WHERE id='$id'";
$query1 = mysqli_query($mysqli,$sql1);
$row = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$write_us_title=$_POST['write_us_title'];
$write_us_text=$_POST['write_us_text'];
$topic_title=$_POST['topic_title'];
$topic_text=$_POST['topic_text'];
$our_guideline_title=$_POST['our_guideline_title'];
$our_guideline_text=$_POST['our_guideline_text'];


$sql2 = "UPDATE `write_for_us` SET id='$id',write_us_title='$write_us_title',write_us_text='$write_us_text',`topic_title`='$topic_title',`topic_text`='$topic_text',`our_guideline_title`='$our_guideline_title',`our_guideline_text`='$our_guideline_text' WHERE id='$id'";
 $query2 = mysqli_query($mysqli,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:write_us_page.php');
}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `write_for_us` WHERE id='$id'";
$query3 = mysqli_query($mysqli,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:write_us_page.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:write_us_page.php');
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
	<title>Add Write For Us Content</title>
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
					
						<h2 class="page-title">Add Write For Us Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Write For Us</div>
									<div class="panel-body">




										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Write Us Title </label>
												<div class="col-sm-8">
													
													<textarea value="<?php echo $row['write_us_title'] ?>" name="write_us_title" id="editor1"  class="form-control"><?php echo $row['write_us_title'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Write Us Text</label>
												<div class="col-sm-8">
														

													<textarea class="form-control" id="editor2"  name="write_us_text" value="<?php echo $row['write_us_text'] ?>"><?php echo $row['write_us_text'] ?>"></textarea>		 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Topic We Accept Title</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="topic_title"  value="" > -->
						 							<textarea class="form-control" id="editor3" name="topic_title"  value="<?php echo $row['topic_title'] ?>"><?php echo $row['topic_title'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Topic We Accept text </label>
												<div class="col-sm-8">
													 
													<textarea id="editor4"  value="<?php echo $row['topic_text'] ?>" name="topic_text"  class="form-control"><?php echo $row['topic_text'] ?></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Guideline Title</label>
												<div class="col-sm-8">
													
													<textarea id="editor5"  class="form-control" name="our_guideline_title" value="<?php echo $row['our_guideline_title'] ;?>"><?php echo $row['our_guideline_title'] ;?></textarea>					 
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Our Guideline Test</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="about_img_right"  value=""> -->
													<textarea id="editor6"  class="form-control" name="our_guideline_text" value="<?php echo $row['our_guideline_text'] ;?>"><?php echo $row['our_guideline_text'] ;?></textarea>
						 
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
												<label class="col-sm-2 control-label">Write For Us Title </label>
												<div class="col-sm-8">
													<!-- <input type="text" value="" id="editor1" name="about_index_title"  class="form-control">  -->
													<textarea value="" id="editor1" name="write_us_title"  class="form-control"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Write For Us Text</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="about_index_text" value="">	 -->
													<textarea id="editor2" class="form-control" name="write_us_text" value=""></textarea>		 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Topic We Accept Title</label>
												<div class="col-sm-8">
													<!-- <input type="file"  class="form-control" name="topic_title" id="cns" value="" > -->
													<textarea  id="editor3" class="form-control" name="topic_title"  value="" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Topic We Accept Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" value="" name="about_img_left_title"  class="form-control"> -->
													<textarea id="editor4" value="" name="topic_text"  class="form-control"></textarea> 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Our Guideline Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor5" class="form-control" name="about_img_left_text" id="cns" value="">	 -->
													<!-- <input type="text" id="editor5" class="form-control" name="about_img_left_text" value="">	 -->
													<textarea  id="editor5" class="form-control" name="our_guideline_title" value=""></textarea>					 
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Our Guideline Text</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="our_guideline_text" value="" required="required"> -->
													<textarea  id="editor6" class="form-control" name="our_guideline_text" value=""></textarea>
						 
												</div>
											</div>
											
	

									



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add About">
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
																<th>Write For Us Title</th>
																<th>Write For Us text</th>
																<th>Topic We Accept Title</th>
																<th>Topic We Accept text</th>
																<th>Our Guideline Title</th>
																<th>Our Guideline Text</th>
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `write_for_us`";
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
																<td><?php echo $row['write_us_title'] ;?></td>
																<td><?php echo $row['write_us_text'] ;?></td>
																<td><?php echo $row['topic_title'] ;?></td>
																<td><?php echo $row['topic_text'] ;?></td>
																<td><?php echo $row['our_guideline_title'] ;?></td>
																<td><?php echo $row['our_guideline_text'] ;?></td>
															
																<td><a href="write_us_page.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="write_us_page.php.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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