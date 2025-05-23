<!doctype html>
<html lang="en">

<head>
	<title>Abbas & Kakar Law Offices 
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
	<section class="first-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="banner-slider">
						<li>
							<h1>Welcome to Abbas & <br> Kakar Law Offices</h1>
							<h5 class="pt-4">Empowering Clients with Professional and Compassionate Legal Solutions.</h5>
							<a href="javascript:;" class="main-button2 mt-4"> Get Started</a>

						</li>
						<li>
							<h1>Welcome to Abbas & <br> Kakar Law Offices</h1>
							<h5 class="pt-4">Empowering Clients with Professional and Compassionate Legal Solutions.</h5>
							<a href="javascript:;" class="main-button2 mt-4"> Get Started</a>

						</li>
						<li>
							<h1>Welcome to Abbas & <br> Kakar Law Offices</h1>
							<h5 class="pt-4">Empowering Clients with Professional and Compassionate Legal Solutions.</h5>
							<a href="javascript:;" class="main-button2 mt-4"> Get Started</a>

						</li>
					</ul>
					</div>				
			</div>
		</div>
	</section>

	<section class="sec-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 ">
					<h1 class="m-0">Who We Are</h1>
				</div>
				<div class="col-md-7 m-auto">
					<p class="">At Abbas & Kakar Law Offices, we blend expertise across Civil ,
						Family , Criminal ,Immigration , Commercial , Environmental, Taxation, 
						Land laws , Constitutional laws and public interest law to provide 
						tailored legal solutions. Our team is committed to guiding clients 
						through complex legal landscapes with integrity, precision, and a focus 
						on results.
					</p>
						<a href="javascript:;" class="main-button3 mt-4"> Read More</a>
				</div>
				<div class="col-md-12">
					<ul >
						<li><h3 class="counter">1937</h3>
						<p>SATISFIED CLIENTS</p></li>
						<li><h3 class="counter">37</h3>
						<p>TEAM</p></li>
						<li><h3 class="counter">2</h3>
						<p>CITIES</p></li>
						<li><h3 class="counter">46%</h3>
						<p>WOMEN</p></li>
					</ul>
				</div>				
			</div>

		</div>
	</section>
			
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center ">
					<h1 class="m-0">Our Core Practice Areas </h1>
					<p >We provide services in a wide variety of practice areas that support clients across many industries and sectors</p>
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