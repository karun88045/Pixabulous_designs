<?php include"header.php";?>


<div class="contact-us">
	<div class="contact-us-title">
		<h1 class="text-center py-5 text-white">Contact Us</h1>
	</div>
</div>


<!---  Contact section end --->

<?php 
$sql_contact= "SELECT * FROM `contact`";
$query_contact = mysqli_query($con,$sql_contact);
$row_contact = mysqli_fetch_array($query_contact);
?>
<section style="" class="py-5 Contact">
	<div class="container ">
		<!-- <h1 class="text-center py-4 ">Contact Us</h1> -->
		<h3 class="text-center pb-4"><?php echo $row_contact['get_in_touch_title'] ?></h3>
		<div class="row shadow">
			

			<div class="col-md-12 col-lg-12 col-sm-12  py-2 text-center">

				<div class="row py-5">
				
				<br>
				<div class="col-md-4 col-lg-4 col-sm-12 shadow">
					<a class="nav-link" href="#" >
						<i class="fa-solid fa-phone mb-3" style="color: #6b1596;font-size: 40px;"></i> <br><span class="fs-4" style="">
							<?php echo $row_contact["get_in_touch_phone"] ?>
							
						</span>
					</a>
				</div>
				<br>
				<div class="col-md-4 col-lg-4 col-sm-12 shadow">
				<a class="nav-link" href="#">
					<i class="fa-solid fa-envelope mb-3" style="color: #6b1596;font-size: 40px;"></i><br>
					<span class="fs-4"><?php echo $row_contact['get_in_touch_email'] ?></span>
				</a>
				</div>
				<br>
				<div class="col-md-4 col-lg-4 col-sm-12 shadow">
				<a class="nav-link" href="#">
					<i class="fa-solid fa-location-dot mb-3" style="color: #6b1596;font-size: 40px;"></i><br>
					<span class="fs-5"><?php echo $row_contact['address']; ?></span>
				</a>
				</div>
				</div>
			</div>
			<div class="col-md-6 shadow py-2">
				<h3 class="text-center py-3"><?php echo $row_contact['contact_title']; ?></h3>
				<form>
					<div class="mb-3">
    				<label for="exampleInputName1" class="form-label"><?php echo $row_contact['form_name']; ?></label>
    				<input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp">
  				</div>
  				<div class="mb-3">
    				<label for="exampleInputEmail1" class="form-label"><?php echo $row_contact['form_email']; ?></label>
    				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  				</div>
  				<div class="mb-3">
    				<label for="exampleInputPhone1" class="form-label"><?php echo $row_contact['form_phone']; ?></label>
    				<input type="text" class="form-control" id="exampleInputPassword1">
  				</div>
  				<div class="mb-3">
  					<label for="exampleInputPhone1" class="form-label"><?php echo $row_contact['form_message']; ?></label>
  					<textarea class="form-control"></textarea>
  				</div>
  				<button type="submit" class="btn text-white" style="background:#0b0b66;">Send</button>
				</form>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12 py-2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3779086013506!2d77.37604665013933!3d28.618433782337103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5bee45ece47%3A0x86a8e850c98ebedb!2sPixabulous%20Designs!5e0!3m2!1sen!2sin!4v1671171107089!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<!---  Contact section end --->



<!--- Call To Action section Start --->
<!-- <section class="py-5 ctas">
	<div class="row">
		<div class="col-md-12  py-5">
			<p class="text-center text-white">LETS WORK ON YOUR IT PROJECT</p>
			<h2 class="text-center text-white">We Deliver Solution with the Goal of Trusting Relationships</h2>
			<p class="text-center py-4" id="ctas">
			<a href="contact.php" class="btn btn-ctas" style="">
				CONNECT NOW
			</a>
		</p>
		</div>
	</div>
</section> -->

<!--- Call To Action section end --->
<?php include"footer.php";?>