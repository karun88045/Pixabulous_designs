<?php
session_start();
include('includes/config1.php');
include('includes/checklogin.php');
check_login();

//code for add header
if(isset($_POST['submit']))
{

$image=$_FILES['image']['name'];
$tempname1=$_FILES['image']['tmp_name'];
$destination1 = "Upload1/".$image;

$title=$_POST['title'];
$category=$_POST['category'];
$text=$_POST['text'];
$slug_url=$_POST['slug_url'];
$meta_title=$_POST['meta_title'];
$meta_description=$_POST['meta_description'];
$meta_keyword=$_POST['meta_keyword'];
$author=$_POST['author'];



$sql = "INSERT INTO `post` (`image`, `title`, `category`, `text`, `slug_url`, `meta_title`, `meta_description`, `meta_keyword`, `author`) VALUES ('$image','$title','$category','$text','$slug_url','$meta_title','$meta_description','$meta_keyword','$author')";
$query = mysqli_query($conn,$sql);
move_uploaded_file($tempname1,$destination1);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:post.php');
}


//code for edit header
if(isset($_GET['id']))
{
$id = $_GET['id'];


// select query
$sql1 = "SELECT * FROM `post` WHERE id='$id'";
$query1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$image=$_FILES['image']['name'];
$tempname2=$_FILES['image']['tmp_name'];
$destination2 = "Upload1/".$image;

$title=$_POST['title'];
$category=$_POST['category'];
$text=$_POST['text'];
$slug_url=$_POST['slug_url'];
$meta_title=$_POST['meta_title'];
$meta_description=$_POST['meta_description'];
$meta_keyword=$_POST['meta_keyword'];
$author=$_POST['author'];


$sql2 = "UPDATE `post` SET id='$id',image='$image',title='$title',category='$category',text='$text',slug_url='$slug_url',meta_title='$meta_title',meta_description='$meta_description',meta_keyword='$meta_keyword',author='$author' WHERE id='$id'";
$query2 = mysqli_query($conn,$sql2);
if($query2)
{	move_uploaded_file($tempname2,$destination2);
	echo"<script>alert('Data has been Updated successfully');</script>";
	header('location:post.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:post.php');
}
}







?>

	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Add Post  Content </h2>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Post </div>
										<div class="panel-body">

											<?php if(isset($_GET['id'])) {?>
											<form method="post" class="form-horizontal" enctype="multipart/form-data">		
													<div class="hr-dashed"></div>


													<div class="form-group">
														<label class="col-sm-2 control-label">Image </label>
														<div class="col-sm-8">
															<input class="form-control" type="file" name="image" value="<?php echo $row1['image'] ;?>">

														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Title </label>
														<div class="col-sm-8">
															
															<input type="title" class="form-control" name="title" value="<?php echo $row1['title']; ?>">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Category </label>
														<div class="col-sm-8">
															
														<select class="form-control" name="category">
														<option>---select category---</option>
														<?php 
														$sql = "SELECT * FROM `category`";
														$category_query=mysqli_query($conn,$sql);
														if (mysqli_num_rows($category_query))
														{
															while($row2 = mysqli_fetch_assoc($category_query))
															{
														
																?>
																
																<option value="<?php echo $row2['category_title'] ?>"><?php echo $row1['category_title'] ;?></option>
																
																<?php
															}
															
														}
														?>
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Text </label>
														<div class="col-sm-8">
															
															<textarea class="form-control" id="editor1" name="text" value="<?php echo $row1['text']; ?>"><?php echo $row1['text']; ?></textarea>
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Slug Url </label>
														<div class="col-sm-8">
															
															<input type="text" class="form-control" name="slug_url" value="<?php echo $row1['slug_url'];?>">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Title</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_title" value="<?php echo $row1['meta_title'];?>">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Description</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_description"value="<?php echo $row1['meta_description'];?>">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Keyword</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_keyword"value="<?php echo $row1['meta_keyword'];?>">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Author </label>
														<div class="col-sm-8">
															
															<input type="text" class="form-control" name="author" value="<?php echo $row1['author'];?>">
								 
														</div>
													</div>
													</div>
													<div class="col-sm-8 col-sm-offset-2">	
														<input class="btn btn-primary" type="submit" name="Update" value="Update Post">
														</div>
													</div>
											</form>
											<?php } else { ?>
											<form method="post" class="form-horizontal" enctype="multipart/form-data">
													
													<div class="hr-dashed"></div>


													<div class="form-group">
														<label class="col-sm-2 control-label">Image</label>
														<div class="col-sm-8">
															<input type="file" name="image" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Title </label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="title">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Category </label>
														<div class="col-sm-8">
														<select class="form-control" name="category">
														<option>---select category---</option>
														<?php 
														$sql = "SELECT * FROM `category`";
														$category_query=mysqli_query($conn,$sql);
														if (mysqli_num_rows($category_query))
														{
															while($row = mysqli_fetch_assoc($category_query))
															{
														
																?>
																
																<option value="<?php echo $row['category_title'] ?>"><?php echo $row['category_title'] ;?></option>
																
																<?php
															}
															
														}
														?>
								 						</select>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-2 control-label">Text </label>
														<div class="col-sm-8">
															<textarea rows="50" class="form-control" id="editor1" name="text" ></textarea>
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Slug Url </label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="slug_url">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Title</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_title">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Description</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_description">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Meta Keyword</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="meta_keyword">
								 
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-2 control-label">Author</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="author">
								 
														</div>
													</div>
														<div class="col-sm-8 col-sm-offset-2">
															
															<input class="btn btn-primary" type="submit" name="submit" value="Add Post">
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
	CKEDITOR.replace('editor10');
		var editor = CKEDITOR.replace( 'editor1' );
		CKFinder.setupCKEditor(editor);
		CKEDITOR.replace( 'editor2', {
  
									});
</script>
</body>

</html>