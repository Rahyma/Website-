<!doctype html>
<html lang="en">

<head>
	<title>Services | Abbas & Kakar Law Offices 
	</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<?php
			$srcurl = "includes/";
			$basesurl = "assets/";
			?>
	<?php
			$style = $_SERVER['HTTP_HOST']; 
			$style = $srcurl."style.php"; 
			include($style); 
			
			$urhere = "homepage";
			?>
</head>

<body class="hompg">

	<?php
			$header = $_SERVER['HTTP_HOST']; 
			$header = $srcurl."header.php"; 
			include($header); 
			?>
	<section class="first-section practice">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
							<h1>Practice Areas</h1>
							<h6>Pulvinar auctor nisl, volutpat turpis enim id.</h6><br>
							<h6>Pulvinar auctor nisl, enim id.</h6>
				</div>				
			</div>
		</div>
	</section>

	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center ">
					<h1 class="m-0">Our Services </h1>
					<!-- <p >We provide services in a wide variety of practice areas that support clients across many industries and sectors</p> -->
				</div>
		<?php
				$serviceSec = $_SERVER['HTTP_HOST']; 
				$serviceSec = $srcurl."serviceSec.php"; 
				include($serviceSec); 
				?>
			</div>

		</div>
	</section>
	<?php
			$footer = $_SERVER['HTTP_HOST']; 
			$footer = $srcurl."footer.php"; 
			include($footer); 
			?>

</body>

</html>