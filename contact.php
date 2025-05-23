<!doctype html>
<html lang="en">

<head>
	<title>Contact | Abbas & Kakar Law Offices 
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
	<section class="first-section contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
							<h1>Contact Us</h1>
							<h6>Email, call or visit our offices in Karachi</h6>
				</div>				
			</div>
		</div>
	</section>

	<section class="service-section team">
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<h1 class="m-0 d-inline">Contact Us</h1>
					<p>At Abbas & Kakar Law Offices, we are here to assist you with your legal needs. Our dedicated team is ready to provide you with expert legal guidance and representation. Whether you have questions about our services or need immediate legal assistance, we encourage you to reach out to us.
					</p>
					<p class="color">*Our office hours are Monday to Saturday, from 3:00 AM to 8:00 PM. We look forward to hearing from you and assisting you with your legal matters. Your rights and interests are our priority, and we are committed to providing you with the best legal solutions.					</p>
				</div>
				<div class="col-md-6">
					<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1810.1487151623305!2d67.01953389321122!3d24.853689216092395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f0039f5527f%3A0x62dace3521f79b85!2sAbbas%20%26%20Kakar%20Law%20Offices!5e0!3m2!1sen!2s!4v1747409714130!5m2!1sen!2s" 
						style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<div class="icons">
						<h3>Karachi</h3>
						<a href="https://maps.app.goo.gl/LN7KyAVwg87SVTLm7"><i class="fa fa-map-marker mr-3"></i>B2, First Floor, Court View Building, Court Road, Opposite Sindh Assembly, Karachi.</a>
						<a href="tel:+923311074249"><i class="fa fa-mobile mr-3"></i>+92 331 1074249</a>
						<a href="tel:+92(21)35802120"><i class="fa fa-phone mr-3"></i></i>+92 (21) 3580 2120</a>
						<a href="mailto:info@abbasandkakar.com"><i class="fa fa-envelope mr-3"></i>info@abbasandkakar.com</a>

					</div>
						</div>
				</div>				
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