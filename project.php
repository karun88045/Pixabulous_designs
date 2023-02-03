<?php include"header.php";?>



<div class="project1">
	<div class="project1-title">
		<h1 class="text-center py-5">Project</h1>
	</div>
</div>

<!---  WORKS WE DONEsection end --->
<section class="project">
	<div class="container">
		<div class="row py-5">
			<div class="text-center  py-2 pb-4">
				<h2 class="">WORKS WE DONE</h2>
				<!-- <hr class="w-25 mx-auto"> -->
				<!-- <h6>We Have Expert Skillset In Trending Technolgies</h6> -->
			</div>


				<div class="row pb-5">
					<!-- <h1 class="text-center">Introduce Our Projects</h1> -->
					<div class="col-md-3 py-4">
					<h2 class="" style="font-weight:bold;">Web Design</h2>

					<?php
					$sql = "SELECT * FROM `project` WHERE id=1";
					$query = mysqli_query($con,$sql);
					$row = mysqli_fetch_assoc($query);
					 ?>
					<p><?php echo $row['text'] ?></p>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row['image1'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row['image2'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row['image3'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
				</div>

				<div class="row pb-5">
					<div class="col-md-3">
						<div class="card project-card">
							<?php
					$sql1 = "SELECT * FROM `project` WHERE id=2";
					$query1 = mysqli_query($con,$sql1);
					$row1 = mysqli_fetch_assoc($query1);
					 ?>
							<div class="hover-zoom">
							<?php echo $row1['image1'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row1['image2'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row1['image3'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3 py-4">
					<h1 class="">Logo Design</h1>
					<p><?php echo $row1['text'] ?></p>
					</div>
				</div>

				<div class="row pb-5	">
					<div class="col-md-3 py-4">
					<h1 class="">Graphic Design</h1>
					<?php
					$sql2 = "SELECT * FROM `project` WHERE id=3";
					$query2 = mysqli_query($con,$sql2);
					$row2 = mysqli_fetch_assoc($query2);
					 ?>
					<p><?php echo $row2['text'] ?> </p>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row2['image1'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
							<div class="hover-zoom">
							<?php echo $row2['image2'] ?>
						</div>
							<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
						</div>
					</div>
					<div class="col-md-3">
						<div class="card project-card">
						<div class=" hover-zoom">
							<?php echo $row2['image3'] ?>
							
						</div>
						<!-- <a href="#"class="text-center btn btn-blue">View More</a> -->
					</div>
					</div>
				</div>



			</div>
		</div>
</section>
<!---  WORKS WE DONE section end --->


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