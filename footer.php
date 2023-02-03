
<!--- footer section end --->

<?php 
$sql_cta1 = "SELECT * FROM `cta`";
$query_cta1 = mysqli_query($con,$sql_cta1);
$row_cta1 = mysqli_fetch_array($query_cta1);
?>
<div class="ctas">
	<div class="row">
		<div class="col-md-12  pt-5">
			<p class="text-center text-white"><?php echo $row_cta1['cta_title'] ?></p>
			<h2 class="text-center text-white"><?php echo $row_cta1['cta_text'] ?></h2>
			<p class="text-center py-4" id="ctas">
			<a href="contact.php" class="btn btn-ctas" style="">
			<?php echo $row_cta1['cta_btn'] ?>
			</a>
			</p>
		</div>
	</div>
</div>



<?php 
$sql_footer1 = "SELECT * FROM `footer` WHERE id=1";
$query_footer1 = mysqli_query($con,$sql_footer1);
$row_footer1 = mysqli_fetch_array($query_footer1);
?>
<?php 
$sql_footer2 = "SELECT * FROM `footer` WHERE id=2";
$query_footer2 = mysqli_query($con,$sql_footer2);
$row_footer2 = mysqli_fetch_array($query_footer2);
?>
<?php 
$sql_footer3 = "SELECT * FROM `footer` WHERE id=3";
$query_footer3 = mysqli_query($con,$sql_footer3);
$row_footer3 = mysqli_fetch_array($query_footer3);
?>
<?php 
$sql_footer4 = "SELECT * FROM `footer` WHERE id=4";
$query_footer4 = mysqli_query($con,$sql_footer4);
$row_footer4 = mysqli_fetch_array($query_footer4);
?>
<?php 
$sql_footer5 = "SELECT * FROM `footer` WHERE id=5";
$query_footer5 = mysqli_query($con,$sql_footer5);
$row_footer5 = mysqli_fetch_array($query_footer5);
?>
<?php 
$sql_footer6 = "SELECT * FROM `footer` WHERE id=6";
$query_footer6 = mysqli_query($con,$sql_footer6);
$row_footer6 = mysqli_fetch_array($query_footer6);
?>
<?php 
$sql_footer7 = "SELECT * FROM `footer` WHERE id=7";
$query_footer7 = mysqli_query($con,$sql_footer7);
$row_footer7 = mysqli_fetch_array($query_footer7);
?>
<?php 
$sql_footer8 = "SELECT * FROM `footer` WHERE id=8";
$query_footer8 = mysqli_query($con,$sql_footer8);
$row_footer8 = mysqli_fetch_array($query_footer8);
?>

<footer class="pt-5">
	<div class="row">
		<div class="col-md-3 text-center">
			<h2 class="">
				<!-- <img src="images/pixabulous_white logo.png" class="img-fluid" style="width:100px;"> -->
				<?php echo $row_footer1['footer_logo'] ?>
			</h2>
			<hr class="w-50 mx-auto" style="outline:2px solid whitesmoke;">
			<p><?php echo $row_footer1['footer_title'] ?></p>
			<ul class="">
			<a href="#" class=""><i class="fa-brands fa-facebook fb"></i></a>
        	<a href="#" class=""><i class="fa-brands fa-instagram insta"></i></a>
        	<a href="#" class=""><i class="fa-brands fa-linkedin linked "></i></a>
        	<a href="#" class=""><i class="fa-brands fa-twitter twit"></i></a>
			</ul>
		</div>
		<div class="col-md-3 text-center">
			<h2 class=" text-white text-start"><?php echo $row_footer1['services'] ?></h2>
			<hr class="w-50" style="outline:2px solid whitesmoke;">
			<ul class="navbar-nav text-start footer-service">
            	<li><a class="" href="#"><?php echo $row_footer1['services_navbar'] ?></a><li>
            	<li><a class="" href="#"><?php echo $row_footer2['services_navbar'] ?></a><li>
            	<li><a class="" href="#"><?php echo $row_footer3['services_navbar'] ?></a></li>
            	<li><a class="" href="#"><?php echo $row_footer4['services_navbar'] ?></a></li>
            	<li><a class="" href="#"><?php echo $row_footer5['services_navbar'] ?></a></li>
            	<li><a class="" href="#"><?php echo $row_footer6['services_navbar'] ?></a></li>
            	<li><a class="" href="#"><?php echo $row_footer7['services_navbar'] ?></a></li>
            	<li><a class="" href="#"><?php echo $row_footer8['services_navbar'] ?></a></li>
        	</ul>
		</div>
		<div class="col-md-3 text-center">


<?php 
$sql_contact1 = "SELECT * FROM `contact` WHERE id=1";
$query_contact1 = mysqli_query($con,$sql_contact1);
$row_contact1 = mysqli_fetch_array($query_contact1);
?>

			<h2 class=" text-white text-start">Get In Touch</h2>
			<hr class="w-50" style="outline:2px solid whitesmoke;">
			<ul class="navbar-nav text-start footer-service">
				
            	<a class="nav-link" href="#"><i class="fa-solid fa-phone me-2"></i><span><span class="text-white"></span><?php echo $row_contact1['get_in_touch_phone'] ?></span></a>
            	<a class="nav-link" href="#"><i class="fa-regular fa-envelope"></i> <span><?php echo $row_contact1['get_in_touch_email'] ?></span></a>
            	<ina class="nav-link" href="#"><i class="fa-solid fa-location-dot"></i> <span><?php echo $row_contact1['address'] ?></span></a>
            </ul>
		</div>
		<div class="col-md-3 mx-auto">
			<h2>Process</h2>
			<hr class="w-50" style="outline:2px solid whitesmoke;">

			<ul class="footer-process mx-auto">
				<li><a class=""> Meet </a></li>
				<li><a class="">Plan </a></li>
				<li><a class="">Design </a></li>
				<li><a class="">Develop </a></li>
				<li><a class="">Testing</a></li>
				<li><a class="">Launch </a></li>
			</ul>
		</div>
			
		<div class="row text-center pt-4">
			<div class="col-md-12">
				<h6 class="mx-auto pt-2">Copyright © 2023 Pixabulous Designs. All Rights Reserved.</h6>
			</div>
		</div>
	</div>
</footer>
<!---  footer section end --->

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="popper.min.js"></script> -->
<script>
    //after window is loaded completely 
    // window.onload = function(){
    //     //hide the preloader
    //     document.querySelector("#preloader").style.display = "none";
    
</script>

</body>
</html>