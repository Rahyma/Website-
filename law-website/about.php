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
	<section class="first-section about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul>
						<li>
							<h1>About Us</h1>
							<h6>Pulvinar auctor nisl, volutpat turpis enim id.</h6>

						</li>
					</ul>
					</div>				
			</div>
		</div>
	</section>

	<section class="sec-section about">
		<div class="container">
			<div class="row">
				<div class="col-md-5 ">
					<h1 class="m-0">Abbas &
					Kakkar</h1>
				</div>
				<div class="col-md-7 m-auto">
					<p class="">At Abbas & Kakar Law Offices, we are dedicated to providing exceptional legal services that emphasize integrity, professionalism, and a commitment to social justice. Our mission is to uphold the rule of law and protect the rights of our clients, whether they are individuals, families, or businesses. With a diverse team of experienced attorneys specializing in various areas of law—including civil, family, criminal, immigration, commercial, environmental, taxation, land laws, and constitutional law—we are equipped to handle a wide range of legal matters. Our firm is particularly passionate about public interest litigation, advocating for the rights of marginalized communities, including refugees and asylum seekers. </p>
					<p>We prioritize our clients' needs, approaching each case with compassion and a strong desire to achieve the best possible outcomes. Led by our founding partners, Moniza Hina Kakar, Samar Abbas, Shankar Singh, our collaborative approach ensures that our clients receive innovative legal solutions backed by thorough research and strategic advocacy. At Abbas & Kakar Law Offices, we believe in building lasting relationships based on trust, respect, and open communication, empowering our clients to navigate the complexities of the legal landscape with confidence. Thank you for considering us for your legal needs; we look forward to working with you and advocating for justice on your behalf.
					</p>
				</div>
				
								
			</div>

		</div>
	</section>
	<section class="projects">
		<div class="container">
			<div class="row">
			<div class="col-md-12">
					<h3>See Our Work</h3>
					<p class="pt-2 pb-2">Interdum ac tincidunt molestie facilisis. Nulla at erat odio bibendum diam quam. 
						Scelerisque mus vel egestas justo, purus consequat nibh eget. Non risus feugiat porta integer.</p>
					<ul>
						<li><img src="<?php echo $basesurl;?>images/about1.png" alt=""></li>
						<li><img src="<?php echo $basesurl;?>images/about2.png" alt=""></li>
						<li><img src="<?php echo $basesurl;?>images/about3.png" alt=""></li>
					</ul>
				</div>
					<div class="col-md-12 text-center">
					<a href="javascript:;" class="main-button mt-3">See All Projects</a>
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