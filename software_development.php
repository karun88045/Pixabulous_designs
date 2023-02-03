<?php include"header.php";?>

<div class="services-page">
	<div class="services-title">
		<h1 class="text-center text-white">Software Development</h1>
	</div>
</div>

<section class="web_design">
	<div class="container">

		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 py-5">
<?php
$sql = "SELECT * FROM `services_software1` WHERE id=1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
?>	
				<h4><?= $row['title1'] ?></h4>
				<p>
					<?= $row['text1'] ?>
				</p>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-md-6 col-lg-6 col-sm-12">
				<h4 class="py-2"><?= $row['title2'] ?></h4>
			<p style="font-size: 20px;"><?= $row['text2'] ?></p>

			<p style="font-size: 20px;"><?= $row['text3'] ?></p>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<div class="sd-wrapper">
				<p></p>
				</div>
			</div>
		</div>


<?php
$sql1 = "SELECT * FROM `services_software2` WHERE id=1";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

$sql2 = "SELECT * FROM `services_software2` WHERE id=2";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `services_software2` WHERE id=3";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `services_software2` WHERE id=4";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `services_software2` WHERE id=5";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

$sql6 = "SELECT * FROM `services_software2` WHERE id=6";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);
?>	
		<div class="row">
			<h1 class="text-center pb-4"><?= $row1['title1'] ?></h1>
			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i> -->
				<img src="Admin/admin/Upload1/<?= $row1['image'] ?>" class="img-fluid">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row1['title2'] ?></h4>
				<h1 class=""><?= $row1['title3'] ?></h1>
				<ul class="	">
					<li><?= $row1['list1'] ?></li>
					<li><?= $row1['list2'] ?></li>
					<li><?= $row1['list3'] ?></li>
					<li><?= $row1['list4'] ?></li>
				</ul>
			</div>
			</div>

			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i>
			 -->
			 <img src="Admin/admin/Upload1/<?= $row2['image'] ?>" class="img-fluid">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row2['title2'] ?></h4>
				<h1 class=""><?= $row2['title3'] ?></h1>
				<ul class="	">
					<li><?= $row2['list1'] ?></li>
					<li><?= $row2['list2'] ?></li>
					<li><?= $row2['list3'] ?></li>
					<li><?= $row2['list4'] ?></li>

				</ul>
			</div>
			</div>
			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i>
			 -->
			 <img src="Admin/admin/Upload1/<?= $row3['image'] ?>" class="img-fluid">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row3['title2'] ?></h4>
				<h1 class=""><?= $row3['title3'] ?></h1>
				<ul class="	">
					<li><?= $row3['list1'] ?></li>
					<li><?= $row3['list2'] ?></li>
					<li><?= $row3['list3'] ?></li>
					<li><?= $row3['list4'] ?></li>
					



				</ul>
			</div>
			</div>
			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i> -->
				<img src="Admin/admin/Upload1/<?= $row4['image'] ?>" class="img-fluid">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row4['title2'] ?></h4>
				<h1 class=""><?= $row4['title3'] ?></h1>
				<ul class="	">
					<li><?= $row4['list1'] ?></li>
					<li><?= $row4['list2'] ?></li>
					<li><?= $row4['list3'] ?></li>
					<li><?= $row4['list4'] ?></li>
					



				</ul>
			</div>
			</div>
			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i>
			 -->
			 <img src="Admin/admin/Upload1/<?= $row5['image'] ?>" class="img-fluid w-75">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row5['title2'] ?></h4>
				<h1 class=""><?= $row5['title3'] ?></h1>
				<ul class="	">
					<li><?= $row5['list1'] ?></li>
					<li><?= $row5['list2'] ?></li>
					<li><?= $row5['list3'] ?></li>
					<li><?= $row5['list4'] ?></li>
					




				</ul>
			</div>
			</div>
			<div class="col-md-4 software-card" style="">
			<div class="round" style="">
				<!-- <i class="fa fa-desktop" aria-hidden="true" style=""></i> -->
				<img src="Admin/admin/Upload1/<?= $row6['image'] ?>" class="img-fluid">
			</div>
			<div class="round-text py-4">
				<h4 class=""><?= $row6['title2'] ?></h4>
				<h1 class=""><?= $row6['title3'] ?></h1>
				<ul class="	">
					<li><?= $row6['list1'] ?></li>
					<li><?= $row6['list2'] ?></li>
					<li><?= $row6['list3'] ?></li>
					<li><?= $row6['list4'] ?></li>
					



				</ul>
			</div>
			</div>
		
		
	
		</div>




		<!-- <div class="row" id="soft-dev">
			<h1 class="text-center">Software Services</h1>	
			<img src="images/technologies-logo.png" class="img-fluid">	
		</div> -->
<?php
$sql1 = "SELECT * FROM `services_software3` WHERE id=1";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

$sql2 = "SELECT * FROM `services_software3` WHERE id=2";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `services_software3` WHERE id=3";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `services_software3` WHERE id=4";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `services_software3` WHERE id=5";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

$sql6 = "SELECT * FROM `services_software3` WHERE id=6";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);

$sql7 = "SELECT * FROM `services_software3` WHERE id=7";
$query7 = mysqli_query($con,$sql7);
$row7 = mysqli_fetch_assoc($query7);
?>
		<div class="row py-5">
			<div class="col-md-6 col-lg-6 col-sm-12">
				<img src="Admin/admin/Upload1/<?= $row1['image'] ?>" class="img-fluid w-100">
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<h4 class="text-center py-2"><?= $row1['title'] ?></h4>
				<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-12">
						<p style="font-size: 20px;"><?= $row1['list'] ?></p>
						<p style="font-size: 20px;"><?= $row2['list'] ?></p>
						<p style="font-size: 20px;"><?= $row3['list'] ?></p>
						<p style="font-size: 20px;"><?= $row4['list'] ?></p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<p style="font-size: 20px;"><?= $row5['list'] ?></p>
						<p style="font-size: 20px;"><?= $row6['list'] ?></p>
						<p style="font-size: 20px;"><?= $row7['list'] ?></p>
					</div>
					<p>And Many More...</p>
				</div>
			</div>

		</div>

		<!-- <div class="row">

			<div class="col-md-6 col-lg-6 col-sm-12 py-5">
				<img src="https://i0.wp.com/www.pixabulousdesigns.com/wp-content/uploads/2020/01/support1.jpg?w=750&ssl=1" class="img-fluid">
			</div>

			<div class="col-md-6 col-lg-6 col-sm-12 py-5 py-4">
				<h4 class="" style="font-weight: bold;">Pixabulous Designs, Creators & Planners of The New World of Technology</h4>

				<div class="row py-4">

					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4>Ecommerce Website Development</h4>
						<p>We’re committed to building sustainable and high-quality Ecommerce website development solutions.</p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4>Educational Website Development</h4>
						<p>We’re committed to building sustainable and high-quality Educational website development solutions.</p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4>Corporate Website Development</h4>
						<p>We’re committed to building sustainable and high-quality Corporate development solutions.</p>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-12">
						<h4>Healthcare Website Development</h4>
						<p>We’re committed to building sustainable and high-quality healthcare website development solutions.</p>
					</div>

					<p>And Many More…</p>
				</div>
			</div>
			
		</div> -->

	
	    <style>
      .circle {
        border-radius: 50%;
        /* width: 180px; */
		width:150px;
        height: 140px;
        /* padding: 50px; */
        /* background: #fff; */
		box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        border: 3px solid #6b1596;
        color: #000;
        text-align: center;
        /* font: 32px sans-serif; */
		display:flex;
		justice-content:center;
		align-items:center;
      }
	  .circle .arror-icon
	  {
		width:200px;;
	  }
	  .circle .arror-icon i 
	  {
		width:100%;
		font-size:50px;
		color:#6b1596;
	  }
    </style>

		<div class="row">
			<!-- <h4>Phases of Software Development</h4> -->

			<p style="font-size:18px;">Our Software Development Life Cycle (SDLC) comprises improved business practices to build software applications and software maintenance. It is a series of important phases of software development. These stages of work include:</p>
			<div class="col-md-2 " style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto">Requirement Gathering Stage</p>
				</div>	
				<div class="arror-icon">
				<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:30px;"></i>
				</div>	
			</div>
			<div class="col-md-2 " style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto">Design Stage</p>
				</div>	
				<div class="arror-icon">
				<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:30px;"></i>
				</div>	
			</div>
			<div class="col-md-2 " style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto ">Development Stage</p>
				</div>	
				<div class="arror-icon">
				<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:30px;"></i>
				</div>	
			</div>
			<div class="col-md-2 " style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto">Test and <br>Integration Stage</p>
				</div>	
				<div class="arror-icon">
				<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:30px;"></i>
				</div>	
			</div>
			<div class="col-md-2 " style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto">Deployment Stage</p>
				</div>	
				<div class="arror-icon">
				<i class="fa fa-arrow-right" aria-hidden="true" style="font-size:30px;"></i>
				</div>	
			</div>
			<div class="col-md-2" style="display:flex;justify-content:center;align-items:center;">
				<div class="circle">
					<p class=" text-center mx-auto">Maintenance Stage</p>
				</div>		
			</div>

					
			<p class="pt-4">Finally, all  your doubts will be cleared if you pay a visit to Pixabulous Designs, the ultimate destination of technological solutions. We have started our journey and are ready to go far as the sky is our only limit. So, don’t go by words, have an experience and then be prepared to trust us.</p>
		</div>

		</div>
	</section>
<?php include"footer.php";?>