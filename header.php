<?php

include"Admin/includes/config.php";
include"Admin/includes/config1.php";


// header query select
$sql = "SELECT * FROM `header`";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);


//  logo query select
$sql1 = "SELECT * FROM `menubar`";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);




?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <title></title>
  <meta name="description" content="">
  <meta name="keyword" content="">
  <meta name="author" content="">
  <meta name="theme-color" content="#3e454c">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>
<body class="">





<!--- Header start --->
<div class="header">
  <div class="container">
    <div class="row text-center" style="">
	    <div class="col-md-6">
           <i class="fa-solid fa-phone text-white">
            <span class="phone" href="">  <a href="tel:+91-817-888-3995" class="text-white"><span style="font-size: 10px;color: white;"></span><?php echo $row['phone']; ?></a></span>
           </i>
           <i class="fa-regular fa-envelope text-white">
            <span class="email" > <a href="mailto:info@pixabulousdesigns.com" class="text-white"><?php echo $row['email']; ?></a></span>
           </i>
		  </div>
		  <div class="col-md-6">
        <a href="#"><i class="fa-brands fa-facebook fb"></i></a>
        <a href="#"><i class="fa-brands fa-instagram insta"></i></a>
        <a href="#"><i class="fa-brands fa-linkedin linked "></i></a>
        <a href="#"><i class="fa-brands fa-twitter twit"></i></a>
		  </div>
	  </div>
  </div>
</div>
<!--- Header end --->


<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-light sticky-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <!-- <img src="images/pixabulous_white logo.png" class="w-75"> -->
      <?php echo $row1['img_logo'] ;?>
      <p style="" class="navbar-brand-text">Plan And Execute</p>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <?php
          $sql2 = "SELECT * FROM `menubar` WHERE id=1";
          $query2 = mysqli_query($con,$sql1);
          $row2 = mysqli_fetch_assoc($query2);
          ?>
          <a class="nav-link active" aria-current="page" href="index.php"><?php echo $row2['navbar'] ;?></a>
        </li>
        <li class="nav-item">
           <?php
          $sql2 = "SELECT * FROM `menubar` WHERE id=2";
          $query2 = mysqli_query($con,$sql2);
          $row2 = mysqli_fetch_assoc($query2);
          ?>
          <a class="nav-link" href="about_us.php"><?php echo $row2['navbar'] ;?></a>
        </li>

         <?php
          $sql3 = "SELECT * FROM `menubar` WHERE id=3";
          $query3 = mysqli_query($con,$sql3);
          $row3 = mysqli_fetch_assoc($query3);
          ?>
        <li class="nav-item dropdown"><a class="nav-link" href="services.php"><?php echo $row3['navbar'] ;?></a>
        <ul class="dropdown-menu">
          
        <li><a class="dropdown-item" href="web_design.php">Web Design</a></li>
        <li><a class="dropdown-item" href="graphic_design.php">Graphic Design</a></li>
        <li><a class="dropdown-item" href="software_development.php">Software Development</a></li>
        <li><a class="dropdown-item" href="logo_design.php">Logo Design</a></li>
        <li><a class="dropdown-item" href="mobile_app_development.php">Mobile App Development</a></li>
        <li><a class="dropdown-item" href="video_editing.php">Video Editng Services</a></li>
        <li><a class="dropdown-item" href="seo.php">Seo Services</a></li>
        <li><a class="dropdown-item" href="digital_marketing.php">Digital Marketting Services</a></li>
        </ul>
        </li>
         <li class="nav-item">
           <?php
          $sql4 = "SELECT * FROM `menubar` WHERE id=4";
          $query4 = mysqli_query($con,$sql4);
          $row4 = mysqli_fetch_assoc($query4);
          ?>
          <a href="contact.php" class="nav-link"><?php echo $row4['navbar'] ;?></a>
        </li>

         <li class="nav-item">
           <?php
          $sql5 = "SELECT * FROM `menubar` WHERE id=5";
          $query5 = mysqli_query($con,$sql5);
          $row5 = mysqli_fetch_assoc($query5);
          ?>
          <a href="project.php" class="nav-link"><?php echo $row5['navbar'] ;?></a>
        </li>
         <li class="nav-item">
           <?php
          $sql6 = "SELECT * FROM `menubar` WHERE id=6";
          $query6 = mysqli_query($con,$sql6);
          $row6 = mysqli_fetch_assoc($query6);
          ?>
          <a href="blog.php" class="nav-link"><?php echo $row6['navbar'] ;?></a>
        </li>

         <?php
          $sql8 = "SELECT * FROM `menubar` WHERE id=7";
          $query8 = mysqli_query($con,$sql8);
          $row8 = mysqli_fetch_assoc($query8);
          ?>
        <li class="nav-item">
          <a href="write_to_us.php" class="nav-link"><?php echo $row8['navbar'] ;?></a>
        </li>
          <li class="nav-item">
          <a href="contact.php" id="ctas1" class="btn">GetQuote</a>
        </li>
               
      </ul> 
    </div>

  </div>
</nav>
<!-- navbar -->


