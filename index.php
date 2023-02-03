<?php include "header.php";?>
<!--- banner section satart --->
<?php
$sql = "SELECT * FROM `banner`";
$query = mysqli_query($con,$sql);
$row_banner= mysqli_fetch_assoc($query);
?>
<section class="banner1">
	<div class="row1">
		<h1 class="text-white text-center"><?php echo $row_banner['banner_title'] ?></h1>
		<p class="text-white text-center"><?php echo $row_banner['banner_text'] ?></p>
		<a class="btn text-white" href="contact.php"><?php echo $row_banner['btn_content'] ?></a>
	</div>
</section>



<!--- banner section end --->


<!--- about section satart --->


<!--- banner section satart --->
<?php
$sql1 = "SELECT * FROM `about_index`";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);
?>
<section class="about-index">
	<div class="container">
		<h2 class="text-center text-dark pt-5"><?php echo $row1['about_index_title'] ?></h2>
		<hr class="text-white mx-auto" style="width:300px;">

		<div class="row py-2">
			<div class="col-md-10 mx-auto" >
				<!-- <p class="text-dark" style="font-family: sans-serif; !important;">Your Partner For Your IT Needs We, at Pixabulous Designs, provide client centric solutions including websites, mobile apps, software and graphic services with innovative ideas and latest technology trends going around the world.</p>				 -->
				<p class="text-dark" style="font-family: sans-serif; !important;"><?php echo $row1['about_index_text'];?></p>				

				<div class="row">
					<div class="col-md-6 py-3">
						<div class="text-center about-text text-white">
							<!-- <img src="images/services/BQD.png" class="img-fluid rounded-circle w-25 h-25"> -->
							<!-- <img src="Admin/./Upload/" class="img-fluid"  name="about_img_left"> -->
         					<?php echo $row1['about_img_left']; ?>
							<!-- <h5 class="pt-3 title text-dark">Best Quality Designs</h5> -->
							<h5 class="pt-3 title text-dark"><?php echo $row1['about_img_left_title']; ?></h5>
							<!-- <p class="text-dark" style="font-family: sans-serif; !important;">Our upgraded designs help to bring a smile on our client's face.</p> -->
							<p class="text-dark" style="font-family: sans-serif; !important;"><?php echo $row1['about_img_right_text'] ?></p>
						
						
						</div>
					</div>
					<div class="col-md-6 py-3">
						<div class="text-center about-text text-white">
							<!-- <img src="images/services/TD.png" class="img-fluid rounded-circle w-25 h-25"> -->
							<!-- <img src="Admin/admin/./Upload/" class="img-fluid" name="about_img_left"> -->
         					<?php echo $row1['about_img_right']; ?>
							<!-- <h5 class="pt-3 title text-dark">Timely Deliver</h5> -->
							<h5 class="pt-3 title text-dark"><?php echo $row1['about_img_right_title'] ?></h5>
							<!-- <p class="text-dark" style="font-family: sans-serif; !important;">We are proud enough to timely deliver our technical solutions.</p> -->
							<p class="text-dark" style="font-family: sans-serif; !important;"><?php echo $row1['about_img_right_text'] ?></p>
						
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!--- about section end --->



<!--- services section start --->




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


<!--- services section end --->






<!---  OUR technology section end --->


<section class="technology">
	<div class="container">
		<div class="tm-heading center tm-animation move-up animate" id="tm-heading-63a1905469c4a">
			<h3 class="heading text-center py-5" style="">Our Technology</h3>
		</div>
		<div class="row text-center py-5">
			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images ">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="Informatica" width="56" height="56" src="images/informatica.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2022/01/Informatica.png">
											

										</div>
									</div>
									<h4 class="heading">Informatica</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="technology-akeneo" width="56" height="56" src="images/akeneo.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/technology-akeneo-1.webp">
										</div>
									</div>
									<h4 class="heading">Akeneo</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="node js" width="56" height="56" src="images/node_js.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2022/01/node-js.png">
										</div>
									</div>
									<h4 class="heading">Node.js</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="python" width="56" height="56" src="images/python.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2022/01/python.png">	
										</div>
									</div>
									<h4 class="heading">Python</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="java (2)" width="56" height="56" src="images/java-2.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2022/01/java-2.png">
										</div>
									</div>
									<h4 class="heading">Java</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="laravel-1" width="56" height="56" src="images/laravel.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/laravel-1-3.png">	
										</div>
									</div>
									<h4 class="heading">Laravel</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

		</div>

		<div class="row text-center py-5">
			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="CI-1" width="56" height="56" src="images/codeigniter.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/CI-1-2.png">
										</div>
									</div>
									<h4 class="heading">CodeIgniter</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="react" width="56" height="56" src="images/react_js.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/react-1.png">	
										</div>
									</div>
									<h4 class="heading">React Js</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="Angular" width="56" height="56" src="images/angular.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/Angular-2.png">
										</div>
									</div>
									<h4 class="heading">Angular Js</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="technology-magento2" width="56" height="56" src="images/magento.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/technology-magento2-1.webp">		
										</div>
									</div>
									<h4 class="heading">magento2</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="technology-shopify" width="56" height="56" src="images/shopify.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/technology-shopify-1.webp">
										</div>
									</div>
									<h4 class="heading">Shopify</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="tm-box-image style-11 tm-animation move-up animate" id="tm-box-image-63a190546af4f">
					<a href="#" class="link-secret">
						<div class="content-wrap">
							<div class="content">
								<div class="image-wrap">
									<div class="images">
										<div class="image">
											<img class="ll-image ll-init ll-loadstarted ll-loaded" alt="technology-woocommerce-1" width="56" height="56" src="images/woo_commerce.png" data-src="https://www.shadowinfosystem.com/wp-content/uploads/2021/12/technology-woocommerce-1-1.webp">										</div>
									</div>
									<h4 class="heading">WooCommerce</h4>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>


		</div>
	</div>
</section>




<!---  OUR technology section end --->
<style>
.col
{
	
}
</style>
<!---  OUR process section end --->
<section class="process">
	<div class="container py-5">


<?php 
$sql_process1 = "SELECT * FROM `our_process` WHERE id=1";
$query_process1 = mysqli_query($con,$sql_process1);
$row_process1 = mysqli_fetch_array($query_process1);
?>

					<h2 class="text-center"><?php echo $row_process1['process_title'] ?></h2>
					<!-- <hr class="mx-auto w-25"> -->
					<!-- <h6 class="text-center">We Have Expert Skillset In Trending Technolgies</h6> -->
		<div class="row py-4 text-center shadow">
				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
						<i class="fa fa-handshake-o"></i>
						<!-- <br><br> -->
						<strong><?php echo $row_process1['process_text'] ?></strong>
					</div>
					<i class="far fa-arrow-alt-circle-right"></i>
				</div>

<?php 
$sql_process2 = "SELECT * FROM `our_process` WHERE id=2";
$query_process2 = mysqli_query($con,$sql_process2);
$row_process2 = mysqli_fetch_array($query_process2);
?>

				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
					<i class="fa fa-lightbulb-o"></i>
					<strong><?php echo $row_process2['process_text'] ?></strong>
				</div>
				<i class="far fa-arrow-alt-circle-right"></i>
				</div>

<?php 
$sql_process3 = "SELECT * FROM `our_process` WHERE id=3";
$query_process3 = mysqli_query($con,$sql_process3);
$row_process3 = mysqli_fetch_array($query_process3);
?>
				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
						<i class="fa fa-paint-brush"></i>
						<strong><?php echo $row_process3['process_text'] ?></strong>
					</div>
					<i class="far fa-arrow-alt-circle-right"></i>
				</div>
<?php 
$sql_process4 = "SELECT * FROM `our_process` WHERE id=4";
$query_process4 = mysqli_query($con,$sql_process4);
$row_process4 = mysqli_fetch_array($query_process4);
?>
				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
					<i class="fa fa-code"></i>
					<strong><?php echo $row_process4['process_text'] ?></strong>
				</div>
				<i class="far fa-arrow-alt-circle-right"></i>
				</div>
<?php 
$sql_process5 = "SELECT * FROM `our_process` WHERE id=5";
$query_process5 = mysqli_query($con,$sql_process5);
$row_process5 = mysqli_fetch_array($query_process5);
?>
				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
					<i class="fa fa-search"></i>
					<strong><?php echo $row_process5['process_text'] ?></strong>
				</div>
				<i class="far fa-arrow-alt-circle-right"></i>
				</div>
<?php 
$sql_process6 = "SELECT * FROM `our_process` WHERE id=6";
$query_process6 = mysqli_query($con,$sql_process6);
$row_process6 = mysqli_fetch_array($query_process6);
?>
				<div class="col-md-2 col">
					<div class="card h-100 py-5 w-100">
					<i class="fa fa-rocket"></i>
					<strong><?php echo $row_process6['process_text'] ?></strong>
				</div>
				
				</div>
		</div>
	</div>
</section>

<!---  OUR precess section end --->


<!---  Contact section end --->

<?php 
$sql_contact= "SELECT * FROM `contact`";
$query_contact = mysqli_query($con,$sql_contact);
$row_contact = mysqli_fetch_array($query_contact);
?>
<section style="" class="py-5">
	<div class="container ">
		<h1 class="text-center py-4 "><?php echo $row_contact['contact_title'] ?></h1>
		<div class="row shadow">
			

			<div class="col-md-6 shadow py-2 text-center">
				<h3 class="text-center py-3"><?php echo $row_contact['get_in_touch_title'] ?></h3>
				<a class="nav-link" href="#" >
					<i class="fa-solid fa-phone mb-3" style="color: #6b1596;font-size: 40px;"></i> <br><span class="py-">+91-<?php echo $row_contact['get_in_touch_phone'] ?></span>
				</a>
				<br>
				<a class="nav-link" href="#">
					<i class="fa-regular fa-envelope mb-3" style="color: #6b1596;font-size: 40px;"></i><br>  <?php echo $row_contact['get_in_touch_email'] ?>
				</a>
				<br>
				<a class="nav-link" href="#">
					<i class="fa-solid fa-location-dot mb-3" style="color: #6b1596;font-size: 40px;"></i><br>  <?php echo $row_contact['address'] ?>
				</a>

			</div>
			<div class="col-md-6 shadow py-2">
				<form action="" method="post">
					<div class="mb-3">
    				<label for="exampleInputName1" class="form-label"><?php echo $row_contact['form_name'] ?></label>
    				<input type="text" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
  				</div>
  				<div class="mb-3">
    				<label for="exampleInputEmail1" class="form-label"><?php echo $row_contact['form_email'] ?></label>
    				<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  				</div>
  				<div class="mb-3">
    				<label for="exampleInputPhone1" class="form-label"><?php echo $row_contact['form_phone'] ?></label>
    				<input type="number" name="phone" class="form-control" id="exampleInputPassword1">
  				</div>
  				<div class="mb-3">
  					<label for="exampleInputPhone1" class="form-label"><?php echo $row_contact['form_message'] ?></label>
  					<textarea name="message" class="form-control"></textarea>
  				</div>
  				<button type="submit" name="submit" class="btn text-white" style="background:#0b0b66;">Submit</button>
				</form>
			</div>
			<div class="col-md-12 shadow py-2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3779086013506!2d77.37604665013933!3d28.618433782337103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5bee45ece47%3A0x86a8e850c98ebedb!2sPixabulous%20Designs!5e0!3m2!1sen!2sin!4v1671171107089!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<!---  Contact section end --->


<!---  OUR client section start --->
<?php 
$sql_client1 = "SELECT * FROM `our_clinet` WHERE id=1";
$query_client1 = mysqli_query($con,$sql_client1);
$row_client1 = mysqli_fetch_array($query_client1);
?>

<?php 
$sql_client2 = "SELECT * FROM `our_clinet` WHERE id=2";
$query_client2 = mysqli_query($con,$sql_client2);
$row_client2 = mysqli_fetch_array($query_client2);
?>

<?php 
$sql_client3 = "SELECT * FROM `our_clinet` WHERE id=3";
$query_client3 = mysqli_query($con,$sql_client3);
$row_client3 = mysqli_fetch_array($query_client3);
?>
<section class="client">
	<div class="container">
		<div class="row">
		<h2 class="text-center"> <?php echo $row_client1['client_title'] ?></h2>
		<!-- <hr class="w-25 mx-auto"> -->
		<h5 class="text-center"> <?php echo $row_client1['client_text'] ?></h5>
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
 <div class="carousel-inner">

 	<div class="carousel-item active">
 		<div class="row text-center">
			<div class="col-md-4">
      				<div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Bee-Banker.png?ssl=1" class="d-block img-fluid" style="width: 50px;height:60px;">

					
      					<h5><?php echo $row_client1['img_title'] ?></h5>
      					<span><?php echo $row_client1['img_text1'] ?> </span>
      					<p>
					        	<!-- "We had a great experience working with this company. They have genuine flair for creativity, and able to put it down on the paper as per your expectations. Most important is their patience level while listening the requirement and implementing in the design art. I am satisfied with the work, and would be happy to connect for our future works. Keep up the good work"					         -->
					        	<?php echo $row_client1['img_text2'] ?>
      					</p>
		</div>
    	</div>
    	 			<div class="col-md-4">
 				<div class="card h-100">
							<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/cropped-MaD-2.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<h5><?php echo $row_client2['img_title'] ?></h5>
      					<span><?php echo $row_client2['img_text1'] ?> 
      				<p><!-- "With the excellent technical assistance
      				 provided by Pixabulous Designs, 
      				we were able to clear up some of the major
      			 	technical jargon that existed during the initial stages of setting up the brand. So thankful to the crew" -->
      			 	<?php echo $row_client2['img_text2'] ?>

      				</p>
				</div>
      	
    	</div>	
			<div class="col-md-4">
      				<div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Screenshot-2022-07-15-101959.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<!-- <h5>Vikas Bansal</h5>
      				<span>Founder- Agnitio Pharma</span> -->
      				<h5><?php echo $row_client3['img_title'] ?></h5>
      				<span><?php echo $row_client3['img_text1'] ?>
      				<p>"
					        	<!-- "It was great to work Pixabulous. After a brief consultation, they produced several high quality images that I was easily able to integrate into my blog.I was delighted to work with Pixabulous Designs. They were clear in their communication, provided excellent customer service and was prompt with their delivery.  I would be more than happy to work with them again should the opportunity arise"					         -->
					        	<?php echo $row_client3['img_text2'] ?>
					        
      				</p>
		</div>
    	</div>
  	</div>
  </div>



   	<div class="carousel-item">
 		<div class="row text-center">
					
 			<div class="col-md-4">
			 <div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Bee-Banker.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      					<h5>Pradeep Malik</h5>
      					<span>Founder- Bee Banker </span>
      					<p>
					    "We had a great experience working with this company. They have genuine flair for creativity, and able to put it down on the paper as per your expectations. Most important is their patience level while listening the requirement and implementing in the design art. I am satisfied with the work, and would be happy to connect for our future works. Keep up the good work"					        
      					</p>
					</div>
      	<!-- <img src="images/technology/client1.png" class="d-block w-25 img-fluid" alt="..."> -->
    	</div>
			<div class="col-md-4">
      				
					<div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/cropped-MaD-2.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<h5>Jyothish Thankachan</h5>
      				<span>Founder- MadConsole</span>
      				<p>"With the excellent technical assistance
      				 provided by Pixabulous Designs, 
      				we were able to clear up some of the major
      			 	technical jargon that existed during the initial stages of setting up the brand. So thankful to the crew"
      				</p>
				</div>
    	</div>
			<div class="col-md-4">
      				<div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Screenshot-2022-07-15-101959.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<h5>Vikas Bansal</h5>
      				<span>Founder- Agnitio Pharma</span>
      				<p>
					"It was great to work Pixabulous. After a brief consultation, they produced several high quality images that I was easily able to integrate into my blog.I was delighted to work with Pixabulous Designs. They were clear in their communication, provided excellent customer service and was prompt with their delivery.  I would be more than happy to work with them again should the opportunity arise"					               
      				</p>
		</div>
    	</div>
  	</div>
  </div>


	<div class="carousel-item">
 		<div class="row text-center">
 			<div class="col-md-4">
			 <div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Bee-Banker.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      					<h5>Pradeep Malik</h5>
      					<span>Founder- Bee Banker </span>
      					<p>
					        	"We had a great experience working with this company. They have genuine flair for creativity, and able to put it down on the paper as per your expectations. Most important is their patience level while listening the requirement and implementing in the design art. I am satisfied with the work, and would be happy to connect for our future works. Keep up the good work"					        
      					</p>
					</div>
      	<!-- <img src="images/technology/client1.png" class="d-block w-25 img-fluid" alt="..."> -->
    	</div>
			<div class="col-md-4">
      			
					<div class="card h-100">
							<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/cropped-MaD-2.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<h5>Jyothish Thankachan</h5>
      				<span>Founder- MadConsole</span>
      				<p>"With the excellent technical assistance
      				 provided by Pixabulous Designs, 
      				we were able to clear up some of the major
      			 	technical jargon that existed during the initial stages of setting up the brand. So thankful to the crew"
      				</p>
				</div>
    	</div>
			<div class="col-md-4">
      				<div class="card h-100">
					<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Screenshot-2022-07-15-101959.png?ssl=1" class="d-block w-25 img-fluid" alt="...">
      				<h5>Vikas Bansal</h5>
      				<span>Founder- Agnitio Pharma</span>
      				<p>"
					        	"It was great to work Pixabulous. After a brief consultation, they produced several high quality images that I was easily able to integrate into my blog.I was delighted to work with Pixabulous Designs. They were clear in their communication, provided excellent customer service and was prompt with their delivery.  I would be more than happy to work with them again should the opportunity arise"					        
					        
      				</p>
		</div>
    	</div>
  	</div>
  </div>

	</div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
	</div>
			</div>
		</div>
	</div>	
</section>

<!---  OUR client section end --->


<?php include"footer.php"; ?>