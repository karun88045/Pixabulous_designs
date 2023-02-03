<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if(isset($_POST['submit']))
{

$contact_title=$_POST['contact_title'];
$get_in_touch_title=$_POST['get_in_touch_title'];
$get_in_touch_phone=$_POST['get_in_touch_phone'];
$get_in_touch_email=$_POST['get_in_touch_email'];
$address=$_POST['address'];
$form_name=$_POST['form_name'];
$form_email=$_POST['form_email'];
$form_phone=$_POST['form_phone'];
$form_message=$_POST['form_message'];


$sql = "INSERT INTO `contact`(`contact_title`, `get_in_touch_title`, `get_in_touch_phone`, `get_in_touch_email`, `address`, `form_name`, `form_email`, `form_phone`, `form_message`) VALUES ('$contact_title','$get_in_touch_title','$get_in_touch_phone','$get_in_touch_email','$address','$form_name','$form_email','$form_phone','$form_message')";
$query = mysqli_query($con,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:contact.php');echo"<script>alert('header has been added successfully');</script>";
}



if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `contact` WHERE id='$id'";
$query1 = mysqli_query($con,$sql1);
$row_Id = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$id = $_GET['id'];

$contact_title=$_POST['contact_title'];
$get_in_touch_title=$_POST['get_in_touch_title'];
$get_in_touch_phone=$_POST['get_in_touch_phone'];
$get_in_touch_email=$_POST['get_in_touch_email'];
$address=$_POST['address'];
$form_name=$_POST['form_name'];
$form_email=$_POST['form_email'];
$form_phone=$_POST['form_phone'];
$form_message=$_POST['form_message'];



$sql2 = "UPDATE `contact` SET id='$id',contact_title='$contact_title',get_in_touch_title='$get_in_touch_title',get_in_touch_phone='$get_in_touch_phone',get_in_touch_email='$get_in_touch_email',address='$address',form_name='$form_name',form_email='$form_email',form_phone='$form_phone',form_message='$form_message' WHERE id='$id'";
$query2 = mysqli_query($con,$sql2);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:contact.php');
}





//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `contact` WHERE id='$id'";
$query3 = mysqli_query($con,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:contact.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:contact.php');
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
	<title>Add Contact Content</title>
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
					
						<h2 class="page-title">Add Contact Content </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Contact </div>
									<div class="panel-body">


										<?php if(isset($_GET['id'])) {?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" id="editor1" name="contact_title" value=""> -->
													<textarea class="form-control" id="editor1" name="contact_title" value="<?php echo $row_Id['contact_title']; ?>"><?php echo $row_Id['contact_title']; ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In Touch Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="get_in_touch_title" value="" > -->
													<textarea id="editor2" class="form-control" name="get_in_touch_title" value="<?php echo $row_Id['get_in_touch_title']; ?>"><?php echo $row_Id['get_in_touch_title']; ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In touch Phone  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor3" class="form-control" name="process_img"  value="">	 -->
													<textarea id="editor3" class="form-control" name="get_in_touch_phone"  value="<?php echo $row_Id['get_in_touch_phone']; ?>"><?php echo $row_Id['get_in_touch_phone']; ?></textarea>					 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In touch Email  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor4" class="form-control" name="get_in_touch_email" value="">	 -->
													<textarea id="editor4" class="form-control" name="get_in_touch_email" value="<?php echo $row_Id['get_in_touch_email']; ?>"><?php echo $row_Id['get_in_touch_email']; ?></textarea>					 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Address  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor5" class="form-control" name="address"  value="">	 -->
													<textarea id="editor5" class="form-control" name="address"  value="<?php echo $row_Id['address']; ?>"><?php echo $row_Id['address']; ?></textarea>					 
												</div>
											</div>
											
												<div class="form-group">
												<label class="col-sm-2 control-label">Form Name</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor6" class="form-control" name="form_name" value="" > -->
													<textarea id="editor6" class="form-control" name="form_name" value="<?php echo $row_Id['form_name']; ?>" ><?php echo $row_Id['form_name']; ?></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Email  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor7" class="form-control" name="process_img" value=""> -->
													<textarea id="editor7" class="form-control" name="form_email" value="<?php echo $row_Id['form_email']; ?>"><?php echo $row_Id['form_email']; ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Phone  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor8" class="form-control" name="process_img" value=""> -->
													<textarea id="editor8" class="form-control" name="form_phone" value="<?php echo $row_Id['form_phone']; ?>"><?php echo $row_Id['form_phone']; ?></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Message  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor9" class="form-control" name="process_img" value=""> -->
													<textarea id="editor9" class="form-control" name="form_message" value="<?php echo $row_Id['form_message']; ?>"><?php echo $row_Id['form_message']; ?></textarea>						 
												</div>
											</div>
										
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="Update" value="Update Contact">
												</div>
											</div>

										</form>

										<?php } else { ?>

											<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Contact Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" class="form-control" id="editor1" name="contact_title" value=""> -->
													<textarea class="form-control" id="editor1" name="contact_title" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In Touch Title</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor2" class="form-control" name="get_in_touch_title" value="" > -->
													<textarea id="editor2" class="form-control" name="get_in_touch_title" value=""></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In touch Phone  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor3" class="form-control" name="process_img"  value="">	 -->
													<textarea id="editor3" class="form-control" name="get_in_touch_phone"  value=""></textarea>					 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Get In touch Email  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor4" class="form-control" name="get_in_touch_email" value="">	 -->
													<textarea id="editor4" class="form-control" name="get_in_touch_email" value=""></textarea>					 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Address  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor5" class="form-control" name="address"  value="">	 -->
													<textarea id="editor5" class="form-control" name="address"  value=""></textarea>					 
												</div>
											</div>
											
												<div class="form-group">
												<label class="col-sm-2 control-label">Form Name</label>
												<div class="col-sm-8">
													<!-- <input type="text" id="editor6" class="form-control" name="form_name" value="" > -->
													<textarea id="editor6" class="form-control" name="form_name" value="" ></textarea>
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Email  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor7" class="form-control" name="process_img" value=""> -->
													<textarea id="editor7" class="form-control" name="form_email" value=""></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Phone  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor8" class="form-control" name="process_img" value=""> -->
													<textarea id="editor8" class="form-control" name="form_phone" value=""></textarea>						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Form Message  </label>
												<div class="col-sm-8">
													<!-- <input type="file" id="editor9" class="form-control" name="process_img" value=""> -->
													<textarea id="editor9" class="form-control" name="form_message" value=""></textarea>						 
												</div>
											</div>
										
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Add Contact">
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
																<th>Contact Title</th>
																<th>Get In Touch Title</th>
																<th>Get In touch Phone</th>
																<th>Get In touch Email </th>
																<th>Address</th>
																<th>Form Name</th>
																<th>Form Email</th>
																<th>Form Phone   </th>
																<th>Form Message </th>
																
																<th>ACTION</th>
																<th>ACTION</th>
															</thead>
														</tr>
														<?php 
														$sql1 = "SELECT * FROM `contact`";
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
																<td><?php echo $row['contact_title'] ;?></td>
																<td><?php echo $row['get_in_touch_title'] ;?></td>
																<td><?php echo $row['get_in_touch_phone'] ;?></td>
																<td><?php echo $row['get_in_touch_email'] ;?></td>
																<td><?php echo $row['address'] ;?></td>
																<td><?php echo $row['form_name'] ;?></td>
																<td><?php echo $row['form_email'] ;?></td>
																<td><?php echo $row['form_phone'] ;?></td>
																<td><?php echo $row['form_message'] ;?></td>
																
																<td><a href="contact.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="contact.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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

	<script src="js/ckeditor/ckeditor.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>


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
</body>

</html>