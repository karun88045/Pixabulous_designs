<?php include"header.php";?>



<div class="services-about">
	<div class="services-title-about">
		<h1 class="text-center text-white">About Us</h1>
	</div>
</div>

<!--- about section satart --->
<?php 

$sql = "SELECT * FROM `about_index`";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

?>
<section class="about-index">
	<div class="container">
	<h2 class="text-center text-dark pt-5"><?php echo $row['about_index_title'] ?></h2>
	<hr class="text-dark mx-auto" style="width:300px;">

	<div class="row py-2">
		<div class="col-md-10 mx-auto" >
					<p class="text-dark"><?php echo $row['about_index_text'] ?></p>				

				<div class="row">
					<div class="col-md-6 py-3">
						<div class="text-center about-text text-dark">
							<?php echo $row['about_img_left'] ?>
							<h5 class="pt-3 title"><?php echo $row['about_img_left_title'] ?></h5>
							<p><?php echo $row['about_img_left_text'] ?></p>
						</div>
					</div>
					<div class="col-md-6 py-3">
						<div class="text-center about-text text-dark">
							<?php echo $row['about_img_right'] ?>
							<h5 class="pt-3 title"><?php echo $row['about_img_right_title'] ?></h5>
							<p><?php echo $row['about_img_right_text'] ?></p>
						</div>
					</div>
				</div>

		</div>
	</div>
</div>
</section>




<?php 

$sql1 = "SELECT * FROM `about_mission_and_vision`";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

?>
<div class="container-fluid about1 py-5 px-4">
	<div class="row">
		
		<div class="col-md-6 col-lg-6 col-sm-12">
			<!-- <h1>About Us</h1> -->
			<h2 class=" pt-4 text-white"><?php echo $row1['left_title'] ?></h2>
			<p class="text-white"><?php echo $row1['left_text'] ?></p>
			<br>
			
		</div>
		<div class="col-md-6 col-lg-6 col-sm-12">
			<h2 class="text-white pt-4"><?php echo $row1['right_title'] ?></h2>
			<p class="text-white"><?php echo $row1['right_text'] ?></p>
			
		</div>
	</div>
</div>




<?php 

$sql2 = "SELECT * FROM `about_trend` WHERE id=1";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `about_trend` WHERE id=2";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `about_trend` WHERE id=3";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `about_trend` WHERE id=4";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

?>
<div class="container about-improve py-5">
	<div class="row">
		<div class="col-md-4 col-lg-4 col-sm-12">
			<!-- <img src="images/programmer-rounded-edges.gif" class="img-fluid h-100 w-100 rounded"> -->
			<?php echo $row2['trend_img'] ?>
		</div>
		<div class="col-md-8 col-lg-8 col-sm-12">
			<!-- <h1>About Us</h1> -->
			<h1 class="bold"><?php echo $row2['trend_title'] ?></h1>
			<h5><?php echo $row2['trend_text'] ?></h5>

			<br>
			<div class="overflow">
	        	<span class="pname f-left"><?php echo $row2['trend_design_title'] ?></span>
				<div class="progress">
    				<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%;">
     				 85%
    				</div>
	    		</div>
			</div>

			<div class="overflow">
				<span class="pname f-left"><?php echo $row3['trend_design_title'] ?></span>
				<div class="progress">
    				<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
     				 90%
    				</div>
	        	</div>
			</div>
	        <div class="overflow">
	        	<span class="pname f-left"><?php echo $row4['trend_design_title'] ?></span>
				<div class="progress">
    				<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
     				 80%
    				</div>
	        	</div>
			</div>
	        <div class="overflow">
	        	<span class="pname f-left"><?php echo $row5['trend_design_title'] ?></span>
				<div class="progress">
    				<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
     				 75%
    				</div>
	        	</div>
			</div>
		</div>
	</div>
</div>

<?php

$sql6 = "SELECT * FROM `about_why_choose_us` WHERE id=1";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);

$sql7 = "SELECT * FROM `about_why_choose_us` WHERE id=2";
$query7 = mysqli_query($con,$sql7);
$row7 = mysqli_fetch_assoc($query7);

$sql8 = "SELECT * FROM `about_why_choose_us` WHERE id=3";
$query8 = mysqli_query($con,$sql8);
$row8 = mysqli_fetch_assoc($query8);

$sql9 = "SELECT * FROM `about_why_choose_us` WHERE id=4";
$query9 = mysqli_query($con,$sql9);
$row9 = mysqli_fetch_assoc($query9);


?>
<div class=" about2 py-5">
	<div class="about2-title">
		<h1 class="text-center text-white"><?php echo $row6['title'] ?></h1>

		<p class="text-white"><?php echo $row6['text'] ?></p>

		<!-- <p class="pb-4" style="color:white;">Improve and Innovate with the Tech Trends We follow the agile process in our company and we have a team of experts who work and deliver the projects on time.The web makes it easy to monitor and measure all marketing efforts.  For each project, we work with our clients to identify business objectives and goals, and implement measurement tools that allow for the tracking and analysis of website traffic, the number of leads generated, conversion rates, keyword popularity,  blog subscription growth, email marketing campaign effectiveness, social media reach, and much more.  This high degree of measurement allows us to track ROI, determine what’s working, and identify areas in need of improvement on an ongoing basis.</p> -->
	</div>
	<div class="row">
	<!-- 	<div class="col-md-6">
			<img src="images/services/WCU.png" class="img-fluid" style="width:100%;">
		</div> -->
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 card shadow py-4 px-4 why-choose-us-card" style="">
					<h2><?php echo $row6['card_title'] ?></h2>
					<!-- <p> Pixabulous Designs is an umbrella institution of expert designers, who are experienced enough to create the most appropriate design for our clients. For our friendly approach, clients feel comfortable enough  to express their business ideas for our technical support. Our technically upgraded solutions help to bring a smile on their face.</p> -->
					<p><?php echo $row6['card_text'] ?></p>
				</div>
				<div class="col-md-6 card shadow py-4 px-4 why-choose-us-card" style=""> 
					<h2><?php echo $row7['card_title'] ?></h2>
					<!-- <p>Timely Delivery : Pixabulous Designs perfectly values time. We know how positive use of time is important both for us and our valuable clients. So, we are proud enough to timely deliver our technical solutions. Our professionality has helped us to gain a high position in the digital platform.</p> -->
					<p><?php echo $row7['card_text'] ?></p>
				</div>
				<div class="col-md-6 card shadow py-4 px-4 why-choose-us-card" style="">
					<h2><?php echo $row8['card_title'] ?></h2>
					<p><?php echo $row8['card_text'] ?></p>
					<!-- <p>Budget Friendly: Keeping in mind the various range of our customers with their financial background, Pixabulous Designs always try to produce budget friendly projects. For this, all categories of customers are welcomed by us.Our friendly approach with pocket friendly technical solutions make them confident enough to join our hands.</p> -->
				</div>
				<div class="col-md-6 card shadow py-4 px-4 why-choose-us-card" style="">
					<h2><?php echo $row9['card_title'] ?></h2>
					<p><?php echo $row9['card_text'] ?></p>
					<!-- <p>After Sales Support: This is a very crucial positive feature of Pixabulous Designs. Our after sales support for our clients carries the ethical values of Pixabulous Designs. So, apart from money making we are successful enough to gain loyalty and trust from our clients. Thus Pixabulous Designs is an upgraded technical solution without any falsehood.</p> -->
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="Admin/admin/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="Admin/admin/js/ckfinder/ckfinder.js"></script>
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


		var editor = CKEDITOR.replace( 'editor1' );
		CKFinder.setupCKEditor(editor);
		CKEDITOR.replace( 'editor2', {
  
});
</script>

<!--- about section end --->

<?php include"footer.php";?>