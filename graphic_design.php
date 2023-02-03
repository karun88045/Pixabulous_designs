<?php include"header.php";?>

<div class="services-graphic">
	<div class="services-title-graphic">
		<h1 class="text-center text-white">Graphic Design</h1>
	</div>
</div>


<div class="container">
<div class="row py-5">
	<div class="col-md-6">
<?php
$sql = "SELECT * FROM `services_graphic1` WHERE id=1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
?>	
<h1><?= $row['title'] ?></h1>
<p class="py-4"><?= $row['text'] ?></p>
	</div>
	<div class="col-md-6">
		<img src="Admin/admin/Upload1/<?= $row['image'] ;?>" class="img-fluid h-100">
	</div>
</div>
</div>



<div class="container">
<div class="row">

<?php
$sql1 = "SELECT * FROM `services_graphic2` WHERE id=1";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

$sql2 = "SELECT * FROM `services_graphic2` WHERE id=2";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `services_graphic2` WHERE id=3";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `services_graphic2` WHERE id=4";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `services_graphic2` WHERE id=5";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

$sql6 = "SELECT * FROM `services_graphic2` WHERE id=6";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);

$sql7 = "SELECT * FROM `services_graphic2` WHERE id=7";
$query7 = mysqli_query($con,$sql7);
$row7 = mysqli_fetch_assoc($query7);

$sql8 = "SELECT * FROM `services_graphic2` WHERE id=8";
$query8 = mysqli_query($con,$sql8);
$row8 = mysqli_fetch_assoc($query8);

$sq9 = "SELECT * FROM `services_graphic2` WHERE id=9";
$quer9 = mysqli_query($con,$sq9);
$row9 = mysqli_fetch_assoc($quer9);
?>
<h1 class="text-center">Graphics Gallery</h1>
		<div class="col-md-4">
			<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row1['galary'] ;?>" class="img-fluid">
		</div>
		</div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row2['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row3['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row4['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row5['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row6['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row7['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row8['galary'] ;?>" class="img-fluid">
		</div></div>
		<div class="col-md-4">
		<div class="graphic-gallary">
			<img src="Admin/admin/Upload1/<?= $row9['galary'] ;?>" class="img-fluid">
		</div>
		</div>
</div>
</div>


	<div class="container">

		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 pt-5 ">
<?php 
$sql = "SELECT * FROM `services_graphic3` WHERE id=1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

?>
				<h4><?= $row['title'] ;?></h4>
				<p>
					<?= $row['text1'] ;?>
				</p>
			</div>
		</div>


		<div class="row">
			<div class="col-md-5 col-lg-5 col-sm-12">
				<p class=""><?= $row['text2'] ;?></p>

<style>
.span::before
{
    content: '\f105';
    font-family: "FontAwesome";
    margin-right: 20px;
    font-weight: 800;
    color: #6b1596;
    font-size: 20px;
     margin-left: 2px;

}

</style>
			<h5 style="font-size:30px;" class=""><?= $row['title1'] ;?></h5>
				<div class="row">
					<div class="col-md-6"><span class="span"><?= $row['list1'] ;?></span></div>
					<div class="col-md-6"><span class="span"><?= $row['list2'] ;?></span></div>
					<div class="col-md-6"><span class="span"><?= $row['list3'] ;?></span></div>
					<div class="col-md-6"><span class="span"><?= $row['list4'] ;?></span></div>
				</div>
			</div>
			<div class="col-md-7 col-lg-7 col-sm-12">
				<img src="Admin/admin/Upload1/<?= $row['image'] ;?>" class="img-fluid h-75 w-100" style="border:1px solid #6b1596;">
			</div>
		</div>


		<div class="row">

<?php 
$sql = "SELECT * FROM `services_graphic4` WHERE id=1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$sql1 = "SELECT * FROM `services_graphic4` WHERE id=2";
$query1 = mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);

$sql2 = "SELECT * FROM `services_graphic4` WHERE id=3";
$query2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);

$sql3 = "SELECT * FROM `services_graphic4` WHERE id=4";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);

$sql4 = "SELECT * FROM `services_graphic4` WHERE id=5";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5 = "SELECT * FROM `services_graphic4` WHERE id=6";
$query5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);

$sql6 = "SELECT * FROM `services_graphic4` WHERE id=7";
$query6 = mysqli_query($con,$sql6);
$row6 = mysqli_fetch_assoc($query6);

$sql7 = "SELECT * FROM `services_graphic4` WHERE id=8";
$query7 = mysqli_query($con,$sql7);
$row7 = mysqli_fetch_assoc($query7);
?>
			<h2 class="pb-4 text-center"><?= $row['title'] ?></h2>
			<div class="col-md-8">
				<p class="pb-2"><?= $row['text'] ?></p>
			<ul>
				<li><?= $row['list'] ?></li>
				<li><?= $row1['list'] ?></li>
				<li><?= $row2['list'] ?></li>
				<li><?= $row3['list'] ?></li>
				<li><?= $row4['list'] ?></li>
				<li><?= $row5['list'] ?></li>
				<li><?= $row6['list'] ?></li>
				<li><?= $row7['list'] ?></li>
			</ul>
			<p class="pb-4">Thus, in order to have a positive experience for your business marketing you have to visit Pixabulous Designs. Our designs are our language and high acclamation of our clients are our biggest support. So, what are you waiting for?</p>
			</div>
			<div class="col-md-4 pt-5">
				<img src="Admin/admin/Upload1/<?= $row['image'] ;?>" class="img-fluid h-75">
			</div>
		</div>

		</div>
	</section>
<?php include"footer.php";?>