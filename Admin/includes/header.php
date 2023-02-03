<?php
$mysqli = mysqli_connect('localhost','root','','pixabulous_blog');

$sql = "SELECT * FROM `post`";
$query = mysqli_query($mysqli,$sql);

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title name="title" content="<?php while($row=mysqli_fetch_assoc($query)); {
		echo $row['meta_title'];
	} ?>"></title>
	<meta name="description" content="<?php while($row=mysqli_fetch_assoc($query)); {
		echo $row['meta_description'];
	} ?>">
	<meta name="keyword" content="<?php while($row=mysqli_fetch_assoc($query)); {
		echo $row['meta_keyword'];
	} ?>">
	<meta name="author" content="<?php while($row=mysqli_fetch_assoc($query)); {
		echo $row['author'];
	} ?>">
	<meta name="theme-color" content="#3e454c">
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
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;color: white !important;">Pixabulous Designs</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="admin-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>