<?php
session_start();
include('includes/config1.php');
include('includes/checklogin.php');
check_login();


//code for add header
if(isset($_POST['submit']))
{
$category_title = $_POST['category_title'];
$slug = str_replace(" ","-",strtolower($category_title));

$sql = "INSERT INTO `category` (`category_title`,`slug`) VALUES ('$category_title','$slug')";
$query = mysqli_query($conn,$sql);
echo"<script>alert('Data has been Deleted successfully');</script>";
header('location:category.php');
}


//code for edit header
if(isset($_GET['slugId']))
{
$slugId = $_GET['slugId'];


// select query
$sql1 = "SELECT * FROM `category` WHERE slugId='$slugId'";
$query1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($query1);
}


// update query
if(isset($_POST['Update']))
{

$category_title=$_POST['category_title'];
$sql2 = "UPDATE `category` SET slugId='$slugId',category_title='$category_title' WHERE slugId='$slugId'";
$query2 = mysqli_query($conn,$sql2);
if($query2)
{   move_uploaded_file($tempname2,$destination2);
    echo"<script>alert('Data has been Updated successfully');</script>";
    header('location:category.php');
}
else
{
    echo"<script>alert('Data has not been Deleted successfully');</script>";
    header('location:category.php');
}
}



//code for delete header
if(isset($_GET['delete']))
{
$id = $_GET['delete'];


// select query
$sql3 = "DELETE FROM `category` WHERE slugId='$id'";
$query3 = mysqli_query($conn,$sql3);
if($query3)
{
    echo"<script>alert('Data has been Deleted successfully');</script>";
    header('location:category.php');
}
else
{
    echo"<script>alert('Data has not been Deleted successfully');</script>";
    header('location:category.php');
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
    <title>Add Post Content</title>
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
                        <h2 class="page-title">Add Category  Content </h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Add Category </div>
                                        <div class="panel-body">

                                            <?php if(isset($_GET['slugId'])) {?>
                                            <form method="post" class="form-horizontal" enctype="multipart/form-data">      
                                                    <div class="hr-dashed"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Title </label>
                                                        <div class="col-sm-8">
                                                            
                                                            <input type="text" class="form-control" name="category_title" value="<?php echo $row1['category_title'] ;?>">
                                 
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-sm-offset-2">  
                                                        <input class="btn btn-primary" type="submit" name="Update" value="Update Category">
                                                        </div>
                                                    </div>
                                            </form>
                                            <?php } else { ?>
                                            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                                    
                                                    <div class="hr-dashed"></div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Title </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="category_title" >
                                 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-8 col-sm-offset-2">    
                                                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                                        </div>
                                                    </div>
                                            </form> 
                                            <?php }?>
                                        </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" style="margin-left:auto;margin-right: auto;">
                                                    <table class="table">
                                                        <tr>
                                                            <thead>
                                                                <th>#</th>
                                                                <th>Title</th>
                                                                <th>Slug</th>
                                                                <th colspan="2">Action</th>
                                                            </thead>
                                                        </tr>
                                                        <?php 
                                                        
                                                        $sql = "SELECT * FROM `category`";
                                                        $query = mysqli_query($conn,$sql);
                                                        if (mysqli_num_rows($query))
                                                        {
                                                            $count=1;
                                                            while ($row = mysqli_fetch_assoc($query))
                                                            {
                                                                // code...
                                                    
                                                        ?>
                                                        <tr>
                                                            <thead>
                                                                <td><?php echo $count ;?></td>
                                                                <td><?php echo $row['category_title'] ;?></td>
                                                                <td><?php echo $row['slug'] ;?></td>
                                                                <td>
                                                                    <a class="btn btn-primary" href="category.php?slugId=<?php echo $row['slugId'] ;?>">Edit</a>
                                                                    <a class="btn btn-danger" href="category.php?delete=<?php echo $row['slugId'] ;?>" >Delete</a>
                                                                </td>
                                                            </thead>
                                                        </tr>
                                                        <?php
                                                        $count++;   
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