<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{

$image=$_FILES['image']['name'];
$tempname1=$_FILES['image']['tmp_name'];
$destination1="Upload1/".$image;
$button1=$_POST['button1'];
$title=$_POST['title'];
$text=$_POST['text'];
$button2=$_POST['button2'];
$author=$_POST['author'];
$comment=$_POST['comment'];



$sql = "INSERT INTO `blog`(`image`, `button1`,`title`, `text`, `button2`, `author`, `comment`) VALUES ('$image','$button1','$title','$text','$button2','$author','$comment')";
$query = mysqli_query($mysqli,$sql);
move_uploaded_file($tempname1,$destination1);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:blog.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `blog` WHERE id='$id'";
$query1 = mysqli_query($mysqli,$sql1);
$row = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];
$image=$_POST['image'];
$button1=$_POST['button1'];
$title=$_POST['title'];
$text=$_POST['text'];
$button2=$_POST['button2'];
$author=$_POST['author'];
$comment=$_POST['comment'];
$sql2 = "UPDATE `blog` SET id='$id',image='$image',button1='$button1',title='$title',text='$text',button2='$button2',author='$author',comment='$comment' WHERE id='$id'";
$query2 = mysqli_query($mysqli,$sql2);
if($query2)
{
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:blog.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:blog.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `blog` WHERE id='$id'";
$query3 = mysqli_query($mysqli,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:blog.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:blog.php');
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
	<title>Add Blog Content</title>
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
					
						<h2 class="page-title">Add Blog Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Blog</div>
									<div class="panel-body">

										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>


											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Image </label>
												<div class="col-sm-8">
													
													<input type="file" name="image" class="form-control" value="<?= $row['image'] ?>">
													
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Button1</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor2" name="button1" value="<?php echo $row['button1']; ?>"><?php echo $row['button1']; ?></textarea>
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Title</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor3" name="title" value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></textarea>
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Text</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor4" name="text" value="<?php echo $row['text']; ?>"><?php echo $row['text']; ?></textarea>
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Button2</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor5" name="button2" value="<?php echo $row['button2']; ?>"><?php echo $row['button2']; ?></textarea>
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Author</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor6" name="author" value="<?php echo $row['author']; ?>"><?php echo $row['author']; ?></textarea>
						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Comment</label>
												<div class="col-sm-8">
													
													<textarea class="form-control" id="editor7" name="comment" value="<?php echo $row['comment']; ?>"><?php echo $row['comment']; ?></textarea>
						 
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
												<label class="col-sm-2 control-label">Blog Image </label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="image">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Button1 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor2" name="button1" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Title </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor3" name="title" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Text </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor4" name="text" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Button2 </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor5" name="button2" ></textarea>
						 
												</div>
											</div>
											
											
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Author </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor6" name="author" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Blog Comment </label>
												<div class="col-sm-8">
													<textarea class="form-control" id="editor7" name="comment" ></textarea>
						 
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
																<th>Images</th>
																<th>Button1</th>
																<th>Date</th>
																<th>Title</th>
																<th>Text</th>
																<th>Button2</th>
																<th>Author</th>
																<th>Comment</th>
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `blog`";
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
																<td><img src="Upload/files/fist-64x64.webp" alt="" class="img_fluid"></td>
																<td><?php echo $row['button1'] ;?></td>
																<td><?php echo $row['date'] ;?></td>
																<td><?php echo $row['title'] ;?></td>
																<td><?php echo $row['text'] ;?></td>
																<td><?php echo $row['button2'] ;?></td>
																<td><?php echo $row['author'] ;?></td>
																<td><?php echo $row['comment'] ;?></td>
																
																<td><a href="blog.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="blog.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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