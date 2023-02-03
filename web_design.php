<?php include 'header.php'; ?>

<div class="services-web">
	<div class="services-title-web">
		<h1 class="text-center text-white">Web Design</h1>
	</div>
</div>

<section class="web_design">
	<div class="container">

		<!-- <div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 py-5">
				<h4 style="font-weight:bold;" >Are You in Search of a Solution to Your Technological Quest?</h4>
				<p>
					Then congratulations, your search  is over. This is the venue of Pixabulous Designs, an IT based company  with a motto to serve its customers in the most innovative and successful manner. It is the best technological answer of all contemporary queries of website design.
				</p>
				<p>
					We value and prioritize our customers and clients. So, our  best website designing process always focuses on the ultimate promotion of our customers and clients. This helps to strengthen the bond of trust with our customers.Pixabulous Designs is such a responsive web design company and agency, where our team is always in relentless effort to provide the best and ultimate web designing solution.
				</p>
			</div>
		</div> -->
		<div class="row py-5">
			<div class="col-md-6 col-lg-6 col-sm-12">
<?php
$sql = "SELECT * FROM `services_website1` WHERE id=1";
$query = mysqli_query($con,$sql);
$row_Id = mysqli_fetch_assoc($query);
?>				
			<h4 style="font-size:30px;"><?= $row_Id['title'] ?></h4>
				<p class="py-2" style="font-size:18px;"><?= $row_Id['text'] ?></p>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<img src="Admin//Upload1/<?= $row_Id['image'] ;?>" class="img-fluid">
			</div>
		</div>




<?php
$sql1 = "SELECT * FROM `services_website_1` WHERE id=1";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

$sql2 = "SELECT * FROM `services_website_1` WHERE id=2";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `services_website_1` WHERE id=3";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `services_website_1` WHERE id=4";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `services_website_1` WHERE id=5";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

$sql6 = "SELECT * FROM `services_website_1` WHERE id=6";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);
?>	
		<div class="row py-5">
			<div class="services py-4" style="background:#6b1596;padding:100px;border-radius:20px;">
			<h2 class="text-center text-white"><?= $row1['title'];?></h2>
			<p class="text-center text-white text-start">
						<?= $row1['text'];?>
						</p>
				<div class="">
					<div class="row">
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row1['image'];?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row1['image_title'];?></h5>
								
								<p class="text-white text-center"><?= $row1['image_text'];?></p>
							</div>
						</div>
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row2['image'];?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row2['image_title'];?></h5>
								<p class="text-white text-center">
								<?= $row2['image_text'];?></p>
							</div>
						</div>
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row3['image'];?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row3['image_title'];?></h5>
								<p class="text-white text-center"> <?= $row3['image_text'];?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/Admin/Upload1/<?= $row4['image'];?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row4['image_title'];?></h5>
								<p class="text-white text-center"><?= $row4['image_text'] ?></p>
							</div>
						</div>
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row5['image'] ?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row5['image_title'] ?></h5>
								<p class="text-white text-center"><?= $row5['image_text'] ?></p>
							</div>
						</div>
						<div class="col-md-4" style="border:2px solid white;border-radius:20px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row6['image'] ?>" class="img-fluid w-25">
							</div>
							<div class="content-wrapper">
								<h5 class="text-center text-white"><?= $row6['image_title'] ?></h5>
								<p class="text-white text-center"><?= $row6['image_text'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


<?php
$sql7 = "SELECT * FROM `services_website_2` WHERE id=1";
$query7 = mysqli_query($con,$sql7);
$row7 = mysqli_fetch_assoc($query7);

$sql8 = "SELECT * FROM `services_website_2` WHERE id=2";
$query8 = mysqli_query($con,$sql8);
$row8 = mysqli_fetch_assoc($query8);

$sql9 = "SELECT * FROM `services_website_2` WHERE id=3";
$query9 = mysqli_query($con,$sql9);
$row9 = mysqli_fetch_assoc($query9);

$sql10 = "SELECT * FROM `services_website_2` WHERE id=4";
$query10 = mysqli_query($con,$sql10);
$row10 = mysqli_fetch_assoc($query10);

$sql11 = "SELECT * FROM `services_website_2` WHERE id=5";
$query11 = mysqli_query($con,$sql11);
$row11 = mysqli_fetch_assoc($query11);

$sql12 = "SELECT * FROM `services_website_2` WHERE id=6";
$query12 = mysqli_query($con,$sql12);
$row12 = mysqli_fetch_assoc($query12);
?>
		<div class="row pb-5">
			<div class="services-wrapper py-4" style="">
			<h2 class="text-center"><?= $row7['title'] ?></h2>
			<p class="text-center text-start"><?= $row7['text'] ?></p>
				<div class="">
					<div class="row">
						<div class="col-md-4" style="border-radius:20px; padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row7['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row7['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row7['image_text'] ?>
						</div>
					</div>	
						<div class="col-md-4" style=" padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4" >
								<img src="Admin/admin/Upload1/<?= $row8['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row8['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row8['image_text'] ?></p>
							</div>
						</div>
						<div class="col-md-4" style="border-radius:20px; padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row9['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row9['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row9['image_text'] ?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4" style="border-radius:20px; padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row10['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row10['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row10['image_text'] ?></p>
							</div>
						</div>
						<div class="col-md-4" style=" padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row11['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row11['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row11['image_text'] ?></p>
							</div>
						</div>
						<div class="col-md-4" style="border-radius:20px; padding:0px 50px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
							<div class="img text-center py-4">
								<img src="Admin/admin/Upload1/<?= $row12['image'] ?>" class="img-fluid">
							</div>
							<div class="content-wrapper py-3">
								<h5 class="text-center"><?= $row12['image_title'] ?></h5>
								<p class="text-center" style="font-size:20px;"><?= $row12['image_text'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>





		<div class="row">
<?php
$sql13 = "SELECT * FROM `services_website_3` WHERE id=1";
$query13 = mysqli_query($con,$sql13);
$row13 = mysqli_fetch_assoc($query13);
?>
			<div class="col-md-6 col-lg-6 col-sm-12 py-5">
				<img src="Admin/admin/Upload1/<?= $row13['image'] ?>" class="img-fluid">
			</div>

			<div class="col-md-6 col-lg-6 col-sm-12 py-5 py-4">
				<h4 class="" style="font-weight: bold;"><?= $row13['title'] ?></h4>

				<div class="row py-4">
<?php
$sql14 = "SELECT * FROM `services_website_3` WHERE id=2";
$query14 = mysqli_query($con,$sql14);
$row14 = mysqli_fetch_assoc($query14);

$sql15 = "SELECT * FROM `services_website_3` WHERE id=3";
$query15 = mysqli_query($con,$sql15);
$row15 = mysqli_fetch_assoc($query15);

$sql16 = "SELECT * FROM `services_website_3` WHERE id=4";
$query16 = mysqli_query($con,$sql16);
$row16 = mysqli_fetch_assoc($query16);

?>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4><?= $row13['title1'] ?></h4>
						<p><?= $row13['text'] ?></p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4><?= $row14['title1'] ?></h4>
						<p><?= $row14['text'] ?></p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4><?= $row15['title1'] ?></h4>
						<p><?= $row15['text'] ?></p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4><?= $row16['title1'] ?></h4>
						<p><?= $row16['text'] ?></p>
					</div>

					<p>And Many More…</p>
				</div>
			</div>
			
		</div>

		s

		<div class="row py-5">
			<div class="col-md-12 col-lg-12 col-sm-12">
				<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/benefits-1.png?resize=2048%2C640&ssl=1" class="img-fluid w-100">
			</div>
		</div>

		<div class="row text-center py-5">
			<div class="col-md-12 col-lg-12 col-sm-12 mx-auto">
				<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/work-process.png?w=775&ssl=1" class="img-fluid w-100">
			</div>
		</div>


		<div class="row py-5">
			<div class="col-md-6 col-lg-6 col-sm-12">
				<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2022/07/Web-banner.png?w=694&ssl=1" class="img-fluid">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<h4 class="py-2">Types Of Website</h4>
				<ul>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Ecommerce Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Blog Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Corporate Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Event Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">NGO Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Portfolio Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Educational Website</span></li>
					<li style="font-weight: 400;" aria-level="1" class="py-1"><span style="font-weight: 400;">Business Directory Website</span></li>
					<li aria-level="1" class="py-1">Custom Web Design</li><li aria-level="1">Healthcare Website</li>
				</ul>
			</div>
		</div>

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

				<!-- <div class="button-plan mx-auto my-2">
					<a class="span btn btn-primary" href="#">GET QUOTE</a>
				</div> -->
			</div>
		</div>

	</div>
</section>

<?php include 'footer.php'; ?>