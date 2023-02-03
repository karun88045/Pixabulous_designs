<?php
session_start();
include('includes/config1.php');
include('includes/checklogin.php');
check_login();

//code for add header


//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `post` WHERE id='$id'";
$query3 = mysqli_query($conn,$sql3);
if($query3)
{
	echo"<script>alert('Data has been Deleted successfully');</script>";
	header('location:manage_post.php');
}
else
{
	echo"<script>alert('Data has not been Deleted successfully');</script>";
	header('location:manage_post.php');
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
						<h2 class="page-title">Manage Post  Content </h2>
						<div class="row">
							<div class="col-md-12">

												<div class="container">
								<div class="row">
									<div class="col-md-12" style="margin-left:auto;margin-right: auto;">
													<table class="table">
														<tr>
															<thead>
																<th>Id</th>
																<th>Image</th>
																<th>Title</th>
																<th>Category</th>
																<th>Text</th>
																<th>Slug Url</th>
																<th>Meta Title</th>
																<th>Meta Description</th>
																<th>Meta Keyword</th>
																<th>Author</th>
																<th>Date</th>
																
																<th>Action</th>
																<th>Action</th>
															</thead>
														</tr>
														<?php 
														$sql = "SELECT * FROM `post`";
                                                        $query = mysqli_query($conn,$sql);
														
														if (mysqli_num_rows($query))
														{
															while ($row = mysqli_fetch_assoc($query))
															{
																// code...
													
														?>
														<tr>
															<thead>
																<td><?php echo $row['id'] ;?></td>
																<td><?php echo $row['image'] ;?></td>
																<td><?php echo $row['title'] ;?></td>
																<td><?php echo $row['category'] ;?></td>
																<td><?php echo substr($row['text'], 0,100) ;?></td>
																<td><?php echo $row['slug_url'] ;?></td>
																<td><?php echo $row['meta_title'] ;?></td>
																<td><?php echo $row['meta_description'] ;?></td>
																<td><?php echo $row['meta_keyword'];?></td>
																<td><?php echo $row['author'] ;?></td>
																<td><?php echo $row['date'] ;?></td>
																

																<td><a href="post.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary">Edit</a></td>
																<td><a href="manage_post.php?delete=<?php echo $row['id'] ;?>" class="btn btn-danger">Delete</a></td>
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