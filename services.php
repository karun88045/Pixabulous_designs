<?php include"header.php"; ?>

<div class="services-main">
	<div class="services-title-main">
		<h1 class="text-center text-white">Service</h1>
	</div>
</div>




<section class="services py-5">
	<div class="container">
		<div class="row">
<?php
$sql_services1 = "SELECT * FROM `our_services` WHERE id=1";
$query_services1 = mysqli_query($con,$sql_services1);
$row_services1 = mysqli_fetch_array($query_services1);
?>
			<h2 class="text-center py-5"><?php echo $row_services1['our_services_title'] ?></h2>


			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-desktop icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services1['our_services_img_title'] ?></h5>
        			<p style="font-family: sans-serif !important;"><?php echo $row_services1['our_services_img_text'] ?></p>
    			</div>
			</div>

<?php

$sql_services2 = "SELECT * FROM `our_services` WHERE id=2";
$query_services2 = mysqli_query($con,$sql_services2);
$row_services2 = mysqli_fetch_array($query_services2);
?>
		    <div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-pen-nib icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services2['our_services_img_title'] ?></h5>
        			<p class="" style="font-family: sans-serif !important;"><?php echo $row_services2['our_services_img_text'] ?></p>
    			</div>
			</div>

<?php


$sql_services3 = "SELECT * FROM `our_services` WHERE id=3";
$query_services3 = mysqli_query($con,$sql_services3);
$row_services3 = mysqli_fetch_array($query_services3);
?>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-pencil-ruler icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services3['our_services_img_title'] ?></h5>
        			<p class="" style="font-family: sans-serif !important;"><?php echo $row_services3['our_services_img_text'] ?></p>
    			</div>
			</div>
<?php 
$sql_services4 = "SELECT * FROM `our_services` WHERE id=4";
$query_services4 = mysqli_query($con,$sql_services4);
$row_services4 = mysqli_fetch_array($query_services4);
?>

			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-video icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services4['our_services_img_title'] ?></h5>
        			<p class="" style="font-family: sans-serif !important;"><?php echo $row_services4['our_services_img_text'] ?></p>
    			</div>
			</div>

<?php
$sql_services5 = "SELECT * FROM `our_services` WHERE id=5";
$query_services5 = mysqli_query($con,$sql_services5);
$row_services5 = mysqli_fetch_array($query_services5);
?>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-code icon-with-shadow fa-3x mb-4"></i>
        				<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services5['our_services_img_title'] ?></h5>
        			<p class="card-text text-center" style="font-family: sans-serif !important;"><?php echo $row_services5['our_services_img_text'] ?></p>
    			</div>
			</div>
<?php
$sql_services6 = "SELECT * FROM `our_services` WHERE id=6";
$query_services6 = mysqli_query($con,$sql_services6);
$row_services6 = mysqli_fetch_array($query_services6);
?>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-mobile icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services6['our_services_img_title'] ?></h5>
        			<p class="" style="font-family: sans-serif !important;"><?php echo $row_services6['our_services_img_text'] ?></p>
    			</div>
			</div>

<?php
$sql_services7 = "SELECT * FROM `our_services` WHERE id=7";
$query_services7 = mysqli_query($con,$sql_services7);
$row_services7 = mysqli_fetch_array($query_services7);
?>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
				<!-- <i class='fas fa-bullhorn' style='font-size:24px'></i> -->
        			<i class="fas fa-bullhorn icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services7['our_services_img_title'] ?></h5>
        			<p class="card-text text-center" style="font-family: sans-serif !important;"><?php echo $row_services7['our_services_img_text'] ?></p>
    			</div>
			</div>

<?php
$sql_services8 = "SELECT * FROM `our_services` WHERE id=8";
$query_services8 = mysqli_query($con,$sql_services8);
$row_services8 = mysqli_fetch_array($query_services8);

?>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<div class="box-white-with-shadow overflow-hidden"> 
        			<i class="fa-solid fa-chart-bar icon-with-shadow fa-3x mb-4"></i>
        			<!-- <img src="images/service/wd1.png" class="img-fluid w-25 icon-with-shadow"> -->
        			<h5 class="mb-3"><?php echo $row_services8['our_services_img_title'] ?></h5>
        			<p class="card-text text-center" style="font-family: sans-serif !important;"><?php echo $row_services8['our_services_img_text'] ?></p>
    			</div>
			</div>
			<div class="col-lg-4 col-md-4 mb-sm-5 mb-xs-5">
    			<img src="images/service.webp" class="img-fluid">
			</div>
		</div>
	</div>
</section>

	<?php


?>


<style>

</style>

<div class="container">
<div class="row">
<h2 class="main-heading text-center pb-5">Flexible Pricing Plans</h2>
	<div class="col-md-4" style="position:relative; padding:20px;margin:; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; border-radius:50px;" class="shadow">
		<div class="img-service">
			<!-- <img src="https://cdn.pixabay.com/photo/2015/10/31/12/21/discount-1015443_960_720.jpg" class="img-fluid w-100" style="border:2px solid black;"> -->
		
			<p class=" text-white" style="display:inline;padding:10px;background:#0b0b66;">Basic Plan</p>
		</div>
		<div classs="content">
		<h2 class=" px-5 pt-5">₹ 5999/-</h2>
		</div>
		<div class="detail  py-5" style="margin:0px 60px; text-align: justify;text-justify: inter-word;">
			
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Web Page Design</p>
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Basic Graphic Design</p>
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Basic Logo Design</p>
				<p class="text-muted"><span><i class="fa-solid fa-check"></i></span>Social Media Ad Campaign </p>
				<p style="" class="text-muted"><span><i class="fa-solid fa-check"></i></span> Website Support</li>
			
		
		</div>
		<div class="btn px-5 pt-5" style="position:absolute;bottom:-30px;">
				<a href="contact.php" target="_blank" class="plan-btn btn">Choose Plan<i class="fa fa-arrow-right" class="bg-secondary rounded-circle" style="background:#fff;color:#000;padding:15px 15px;border-radius:20px;"></i></a>
		</div>
	</div>



	<div class="col-md-4" style="padding:20px;margin:; background:#6b1596; border-radius: 50px;position:relative;" class="shadow">
		<div class="img-service">
			<!-- <img src="https://cdn.pixabay.com/photo/2015/10/31/12/21/discount-1015443_960_720.jpg" class="img-fluid w-100" style="border:2px solid black;"> -->
		
			<p class=" text-white" style="display:inline;padding:10px;background:#fff;color:#0b0b66 !important;font-weight:bold;">Economy Plan</p>
		</div>
		<div classs="content">
		<h2 class=" pt-5 text-white px-5">₹ 9,999/-</h2>
		</div>
		<div class="detail  py-5 text-white" style="margin:0px 60px; text-align: justify;text-justify: inter-word;">
			
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Web Page Design</p>
				<p class="active"> <span><i class="fa-solid fa-check"></i></span> Basic Graphic Design</p>
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Basic Logo Design</p>
				<p class="disabled"><span><i class="fa-solid fa-check"></i></span>Social Media Ad Campaign</p>
				<p class="text-muted"><span><i class="fa-solid fa-check"></i></span> Website Support</li>
			
			
		</div>
		<div class="btn px-5 pt-5" style="position:absolute;bottom:-30px;">
				<a href="contact.php" target="_blank" class="plan-btn btn" style="background:#0b0b66 !important; color:#fff !important;">Choose Plan<i class="fa fa-arrow-right" style="background:#fff;color:#000;padding:15px 15px;border-radius:20px;"></i></a>
		</div>
	</div>




	<div class="col-md-4" style="position:relative; padding:20px;margin:; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; border-radius:50px;" class="shadow">
		<div class="img-service">
			<!-- <img src="https://cdn.pixabay.com/photo/2015/10/31/12/21/discount-1015443_960_720.jpg" class="img-fluid w-100" style="border:2px solid black;"> -->
		
			<p class=" text-white" style="display:inline;padding:10px;background:#0b0b66;">Premium Plan</p>
		</div>
		<div classs="content">
		<h2 class=" px-5 pt-5">₹ 14,999/-</h2>
		</div>
		<div class="detail  py-5" style="margin:0px 60px; text-align: justify;text-justify: inter-word;">
			
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Web Page Design</p>
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Basic Graphic Design</p>
				<p class="active"><span><i class="fa-solid fa-check"></i></span> Basic Logo Design</p>
				<p class="disabled"><span><i class="fa-solid fa-check"></i></span>Social Media Ad Campaign </p>
				<p><span><i class="fa-solid fa-check"></i></span> Website Support</li>
			
		
		</div>
		<div class="btn  px-5 pt-5" style="position:absolute;bottom:-30px;">
				<a href="contact.php" target="_blank" class="plan-btn btn">Choose Plan<i class="fa fa-arrow-right" style="background:#fff;color:#000;padding:15px 15px;border-radius:20px;"></i></a>
		</div>
	</div>
</div>
</div>

<?php include"footer.php"; ?>