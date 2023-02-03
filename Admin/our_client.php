<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{
$client_title=$_POST['client_title'];
$client_text=$_POST['client_text'];

$client_img=$_POST['client_img'];
// $tempname = $_FILES['client_img']['tmp_name'];
// $folder = "Upload/".$client_img;

$img_title=$_POST['img_title'];
$img_text1=$_POST['img_text1'];
$img_text2=$_POST['img_text2'];


$sql = "INSERT INTO `our_clinet`(`client_title`, `client_text`, `client_img`, `img_title`, `img_text1`, `img_text2`) values ('$client_title','$client_text','$client_img','$img_title','$img_text1','$img_text2')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:our_client.php');
// if(move_uploaded_file($tempname, $folder))
// {
// 	echo"<script>alert('Data has been Deleted successfully');</script>";
// 	header('location:our_client.php');
// }
// else
// {
// 	echo"<script>alert('Data has been not Deleted successfully');</script>";
// 	header('location:our_client.php');
// }
}



if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `our_clinet` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$client_title=$_POST['client_title'];
$client_text=$_POST['client_text'];

$client_img=$_POST['client_img'];
// $tempname1 = $_FILES['client_img']['tmp_name'];
// $folder1 = "Upload/".$client_img;

$img_title=$_POST['img_title'];
$img_text1=$_POST['img_text1'];
$img_text2=$_POST['img_text2'];




$sql2 = "UPDATE `our_clinet` SET id='$id',client_title='$client_title',client_text='$client_text',client_img='$client_img',img_title='$img_title',img_text1='$img_text1',img_text2='$img_text2' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:our_client.php');
// if(move_uploaded_file($tempname1, $folder1))
// {
// 	echo"<script>alert('Data has been Deleted successfully');</script>";
// 	header('location:our_client.php');
// }
// else
// {
// 	echo"<script>alert('Data has not been Deleted successfully');</script>";
// 	header('location:our_client.php');
// }
	

}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `our_clinet` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:our_client.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:our_client.php');
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
	<title>Add Client Content</title>
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
					
						<h2 class="page-title">Add Client Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Client </div>
									<div class="panel-body">
										
										<?php if(isset($_GET['id'])) {?>
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Client Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor1" class="form-control" name="client_title" value=""> -->
													<textarea id="editor1" class="form-control" name="client_title" value="<?php echo $row_Id['client_title'] ?>"><?php echo $row_Id['client_title'] ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Client Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="client_text" value=""> -->
						 							<textarea  id="editor2" class="form-control" name="client_text" value="<?php echo $row_Id['client_text'] ?>"><?php echo $row_Id['client_text'] ?></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="client_img" value=""> -->
													<textarea  id="editor3" class="form-control" name="client_img" value="<?php echo $row_Id['client_img'] ?>"><?php echo $row_Id['client_img'] ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image Title </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="img_title" value="" > -->
													<textarea id="editor4" class="form-control" name="img_title" value="<?php echo $row_Id['img_title'] ?>"><?php echo $row_Id['img_title'] ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image text1 </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor5" class="form-control" name="img_text1"  value="" > -->
													<textarea id="editor5" class="form-control" name="img_text1"  value="<?php echo $row_Id['img_text1'] ?>" ><?php echo $row_Id['img_text1'] ?></textarea>						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Image text2 </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor6" class="form-control" name="img_text2" value=""> -->
													
													<textarea  id="editor6" class="form-control" name="img_text2" value="<?php echo $row_Id['img_text2'] ?>"><?php echo $row_Id['img_text2'] ?></textarea>

												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Client">
												</div>
											</div>

										</form>
										<?php } else { ?>
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Client Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor1" class="form-control" name="client_title" value=""> -->
													<textarea id="editor1" class="form-control" name="client_title" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Client Text </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="client_text" value=""> -->
						 							<textarea  id="editor2" class="form-control" name="client_text" value=""></textarea>
												</div>
											</div>
												<div class="form-group">
												<label class="col-sm-2 control-label">Image</label>
												<div class="col-sm-8">
													<!-- <input type="file" class="form-control" name="client_img" value=""> -->
													<textarea id="editor3" class="form-control" name="client_img" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image Title </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor4" class="form-control" name="img_title" value="" > -->
													<textarea id="editor4" class="form-control" name="img_title" value=""></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Image text1 </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor5" class="form-control" name="img_text1"  value="" > -->
													<textarea id="editor5" class="form-control" name="img_text1"  value="" ></textarea>						 
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Image text2 </label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor6" class="form-control" name="img_text2" value=""> -->
													
													<textarea  id="editor6" class="form-control" name="img_text2" value=""></textarea>

												</div>
											</div>
										
										



												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Client">
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
																<th>Client Title</th>
																<th>Client Image</th>
																<th>Image</th>
																<th>Image Title</th>
																<th>Image Text1</th>
																<th>Image Text2</th>
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql1 = "SELECT * FROM `our_clinet`";
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
																<td><?php echo $row['client_title'] ;?></td>
																<td><?php echo $row['client_text'] ;?></td>
																<td><?php echo $row['client_img'] ;?></td>
																<td><?php echo $row['img_title'] ;?></td>
																<td><?php echo $row['img_text1'] ;?></td>
																<td><?php echo $row['img_text2'] ;?></td>
																
																<td><a href="our_client.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="our_client.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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